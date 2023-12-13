<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Username;

class UsernamesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return Username::all()->toArray();
        $usernames = Username::all();
        return view('usernames.index')->with('usernames',$usernames);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usernames.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $number = $request->input('number');
        $name = $request->input('name');
        $photo = $request->input('photo');
      
        Username::create([
            'number' => $number,
            'name' => $name,
            'photo' => $photo,
        ]);

        return redirect('usernames');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $username = Username::findOrFail($id);
        $records = $username->records;
        return view('usernames.show', ['username' => $username, 'records' => $records]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //return Username::findOrFail($id)->toArray();
        $Username = Username::findOrFail($id);
        return view('usernames.edit', ['Username' =>$Username]);
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
        $username = Username::findOrFail($id);

        $username->number = $request->input('number');
        $username->name = $request->input('name');
        $username->photo = $request->input('photo');
        $username->save();

        return redirect('usernames');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $username = Username::findOrFail($id);
        $username->delete();
        return redirect('usernames');
    }
}