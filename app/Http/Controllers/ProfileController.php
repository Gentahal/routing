<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;
use Validator;
use Storage;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profile = Profile::all();
        return view('profile.index',compact('profile'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profile.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        
        //validasi data
        $validator = Validator::make($input,[
            'nama' => 'required|min:2|max:50',
            'photo' => 'required|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        //validasi untuk data yang apabila gagal, maka akan keluar error data tidak valid
        if($validator->fails())
        {
            return 'Data tidak valid';
        }

        //kondisi input foto(file)
        if($request->hasFile('photo'))
        {
            $destination_path = 'public/images/profile';//path penyimpanan
            $image = $request->file('photo');//mengambil request foto
            $image_name = $image->getClientOriginalName();//memberikan nama gambar yang akan disimpan di foto
            $path = $request->file('photo')->storeAs($destination_path,$image_name);//mengirim foto ke folde store
            $input['photo'] = $image_name; //untuk nama ke database/ mengirim ke database
        }
        
        Profile::create($input);
        return redirect('/profile');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}