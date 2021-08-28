<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notes = Note::where('user_id', Auth::user()->id)->get();
        return view('backend.note.add',compact('notes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request->all();
        $user = Note::create([
            'user_id'         => $request['user_id'],
            'title'           => $request['title'],
            'description'     => $request['description'],
            'icon'            => $request['icon'],
            'reminder_date'   => $request['reminder_date'],
            'status'          => $request['status'],
        ]);
        return back()->with('success','Note successfully added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //return $request->all();
        $success = Note::where('id',$request->id)
            ->update([
            'title'           => $request['title'],
            'description'     => $request['description'],
            'icon'            => $request['icon'],
            'reminder_date'   => $request['reminder_date'],
            'status'          => $request['status'],
        ]);
        if ($success){
            return back()->with('success','Note successfully update');
        }
        else{
            return back()->with('error','Something is wrong !!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Note::find($id);
        $success = $user->delete();

        if ($success){
            return back()->with('success','Note deleted successfully');
        }else{
            return back()->with('error','Something is wrong !!');
        }
    }
}
