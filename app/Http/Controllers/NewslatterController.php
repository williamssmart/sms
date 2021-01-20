<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewslatterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('com');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
          'sender' => 'required',
          'body' => 'required',
          'subject' => 'required'
        ]);
        
        $newslatter = new Newslatter();
        $newslatter->sender = $request->sender;
        $newslatter->body = $request->body;
        $newslatter->subject = $request->subject;
       // $newslatter->senderName = Auth::user()->firstname . ' '. Auth::user()->lastname;
       $newslatter->senderName = 'Testing';
       
       $newslatter->save();
       return redirect()->back()->with(['status' => 'saved successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $newslatter = Newslatter::find($id);
        
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $newslatter = Newslatter::find($id);
        $newslatter->delete();
        
        return redirect()->back()->with(['status' => 'deleted successfully']);
    }
}
