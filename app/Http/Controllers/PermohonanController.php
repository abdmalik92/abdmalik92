<?php

namespace App\Http\Controllers;

use App\Models\RO;
use Illuminate\Http\Request;
use Validator;
use Auth;
// use Illuminate\Support\Facades\Validator;

class PermohonanController extends Controller
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
        $request->validate(
            [
                'tajuk_permohonan' => 'required'
                // 'password' => 'required|min:5',
                // 'email' => 'required|email|unique:users'
            ], 
            [
                'tajuk_permohonan.required' => 'Tajuk projek diperlukan',
                // 'email.required' => 'Emel diperlukan',
                // 'password.required' => 'Kata laluan diperlukan',
                // 'password.min' => 'Kata laluan perlu lebih dari 5 aksara'
            ]
          );
    
        $input = $request->all();
        // $input['password'] = bcrypt($input['password']);
        $input['DT_mula'] = $input['DT_mula'];
        $input['DT_akhir'] = $input['DT_akhir'];
        $input['tempoh'] = $input['tempoh'];
        $input['kos'] = $input['kos'];
        $input['status_kecil'] = '1';

        $ro = RO::create($input);
        $ro->save();
     
        return back()->with('success', 'Permohonan berjaya disimpan.');
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
