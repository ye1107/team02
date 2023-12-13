<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Record;
use App\Models\Key;
use App\Models\Username;

class RecordsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return Record::all()->toArray();
        $records =Record::all();
        return view('records.index')->with('records',$records);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('records.create');
        $keys = Key::orderBy('keys.id', 'asc')->pluck('keys.key', 'keys.id');
        $usernames = Username::orderBy('usernames.id', 'asc')->pluck('usernames.name', 'usernames.id');
        return view('keys.create', ['keys' =>$keys, 'keySelected' => null],'usernames.create',['usernames' =>$usernames, 'usaernameSelected' => null]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $uid = $request->input('uid');
        $kid = $request->input('kid');
        $lend_date = $request->input('lend_date');
        $lend_time = $request->input('lend_time');
        $back_date = $back_date->input('back_date');
        $back_time = $request->input('back_time');

        $record = Record::create([
            'uid'=>$uid,
            'kid'=>$kid,
            'lend_date'=>$lend_date,
            'lend_time'=>$lend_time,
            'back_date'=>$back_date,
            'back_time'=>$back_time,
            ]);
        return redirect('records');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $record = Record::findOrFail($id);
     return view('records.show')->with('record',$record);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //return Record::findOrFail($id)->toArray();
        $record = Record::findOrFail($id);
        $keys = Key::orderBy('keys.id', 'asc')->pluck('keys.key', 'keys.id');
        $selected_tags = $record->key->id;
        $usernames = Username::orderBy('usernames.id', 'asc')->pluck('usernames.name', 'usernames.id');
        $selected_tags = $record->username->id;
        return view('records.edit', ['record' =>$record, 'keys' => $keys, 'keySelected' => $selected_tags],['record' =>$record, 'usernames' =>$usernames, 'usernameSelected' => $selected_tags]);
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
        $record = Record::findOrFail($id);

        $record->uid = $request->input('uid');
        $record->kid = $request->input('kid');
        $record->lend_date = $request->input('lend_date');
        $record->lend_time = $request->input('lend_time');
        $record->back_date = $request->input('back_date');
        $record->back_time = $request->input('back_time');
        $record->save();

        return redirect('records');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $record = Record::findOrFail($id);
        $record->delete();
        return redirect('records');
    }
}
