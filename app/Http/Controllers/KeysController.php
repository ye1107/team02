<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Key;

class KeysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return Key::all()->toArray();
        $keys = Key::all();
        return view('keys.index')->with('keys',$keys);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('keys.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $key = $request->input('key');
        $room = $request->input('room');

        Key::create([
            'key' => $key,
            'room' => $room,
        ]);

        return redirect('keys');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $key = Key::findOrFail($id);
        $records = $key->records;
        return view('keys.show', ['key' => $key, 'records' => $records]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //return Key::findOrFail($id)->toArray();
        $Key = Key::findOrFail($id);
        return view('keys.edit', ['Key' =>$Key]);
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
        $key = Key::findOrFail($id);

        $key->key = $request->input('key');
        $key->room = $request->input('room');
        $key->save();

        return redirect('keys');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $key = Key::findOrFail($id);
        $key->delete();
        return redirect('keys');
    }
}
