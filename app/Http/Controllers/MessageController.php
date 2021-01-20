<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = Message::where('recipient', '=', 1)->join('users', 'sender', '=', 'users.id')->select(['subject','body','firstname','lastname'])->get();
      //  return $messages;
        return view('admin/inbox')->with(['messages' => $messages]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('admin/composer')->with(['users' => $users]);
    }
    
    public function outbox(){
      $messages =  Message::where('sender', '=', Auth::user()->id)->join('users', 'sender', '=', 'users.id')->select(['messages.id as id','subject','body','firstname','lastname',])->get();
     // return $messages;
      return view('admin/outbox')->with(['messages' => $messages]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $message = $request->validate([
          'recipient' => 'required',
          'body' => 'required',
          'subject' => 'required'
        ]);
        $message['sender'] = Auth::user()->id;
        $message['status'] = 0;
     //   return $message;
        Message::create($message);
        return redirect()->back()->with(['status' => 'sent successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $message = Message::where(['id'=>$id, 'sender' => Auth::user()->id]);
        
        return view('read-message')->with(['message' => $message]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $message = $request->validate([
          'recipient' => 'required',
          'body' => 'nullable',
          'subject' => 'nullable'
        ]);
    
     //   return $message;
        $message = Message::find($id);
        $message->recipient = $request->recipient? $request->recipient : $message->recipient;
        
        $message->subject = $request->subject? $request->subject : $message->subject;
        
        $message->body = $request->body? $request->body :$message->body;
        
        $message->updated();
        
        return redirect()->back()->with(['status' => 'updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $message = Message::where(['id'=>$id , 'sender' => Auth::user()->id])->first();
     //   return $message;
        $message->delete();
        return redirect()->back()->with(['status' => 'deleted successfully']);
        
    }
}
