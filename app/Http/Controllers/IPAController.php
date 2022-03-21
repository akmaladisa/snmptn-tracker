<?php

namespace App\Http\Controllers;

use App\Models\IPA;
use App\Models\User;
use Illuminate\Http\Request;

class IPAController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("ipa.index", [
            'students' => IPA::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("ipa.create", [
            'users' => \DB::table("users")->where( [
                ['jurusan', '=', 'IPA'],
                ['role', '<>', 'admin']
            ] )->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required',
            'matematika' => 'required|numeric|max:100|min:0',
            "bindonesia" => 'required|numeric|max:100|min:0',
            "binggris" => 'required|numeric|max:100|min:0',
            'kimia' => 'required|numeric|max:100|min:0',
            'fisika' => 'required|numeric|max:100|min:0',
            'biologi' => 'required|numeric|max:100|min:0'
        ]);

        IPA::create( $validatedData );

        return redirect('/siswa-ipa')->with("success", "Berhasil Menambah Siswa");
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
        //
    }
}
