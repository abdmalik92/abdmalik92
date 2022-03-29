<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserDetails;
use Illuminate\Http\Request;
use Validator;
use Auth;
// use Illuminate\Support\Facades\Validator;

class UserController extends Controller
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
                'name' => 'required|unique:users',
                'password' => 'required|min:5|alpha_num',
                'email' => 'required|email|unique:users',
                'no_telefon' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
                'poskod' => 'required|numeric'
            ], 
            [
                'name.required' => 'Nama pengguna diperlukan',
                'name.unique' => 'Nama pengguna sudah ada. Sila pilih yang lain',
                'email.required' => 'Emel diperlukan',
                'email.required' => 'Emel sudah wujud',
                'password.required' => 'Kata laluan diperlukan',
                'password.alpha_num' => 'Kata laluan perlu mempunyai huruf dan nombor.',
                'password.min' => 'Kata laluan perlu lebih dari 5 aksara',
                'no_telefon.required' => 'No telefon diperlukan',
                'no_telefon.min' => 'Sila masukkan format yang betul',
                'no_telefon.regex' => 'Sila masukkan format yang betul',
                'poskod.numeric' => 'Hanya nombor sahaja',
            ]
          );
    
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $input['status'] = '0';
        $user = User::create($input);

        $user->id;
        $user_details['nama'] = $input['nama_pengguna'];
        $user_details['nama_pengguna'] = $input['name'];
        $user_details['alamat'] = $input['alamat'];
        $user_details['poskod'] = $input['poskod'];
        $user_details['no_ic'] = $input['no_ic'];
        $user_details['no_telefon'] = $input['no_telefon'];
        $user_details['emel'] = $input['email'];
        $user_details['roles'] = $input['kategori']; 
        $user_details['login_id'] = $user->id;
        $user_details['daerah_id'] = $input['daerah'];
        $user_details['negeri_id'] = $input['negeri']; 

        if($input['kategori'] == 2 || $input['kategori'] == 3 || $input['kategori'] ==4)
        {
            $user_details['nama_syarikat'] = $input['nama_syarikat'];
            $user_details['no_ssm'] = $input['no_ssm'];
        }

        // $user['url_lampiran'] = $input['no_ssm']; 
        $user2 = UserDetails::create($user_details);

        return back()->with('success', 'Pendaftaran berjaya disimpan.');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
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
