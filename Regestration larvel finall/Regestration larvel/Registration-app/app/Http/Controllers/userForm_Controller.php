<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\userForm;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class userForm_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
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
        try {
            $request->validate([
                'full_name' => 'required',
                'user_name' => 'required|unique:userForm',
                'birthdate' => 'required',
                'phone' => 'required',
                'address' => 'required',
                'password' => 'required',
                'confirm_password' => 'required',
                'email' => 'required|email',
            ]);
    
            $full_name = $request->input('full_name');
            $user_name = $request->input('user_name');
            $birthdate = $request->input('birthdate');
            $phone = $request->input('phone');
            $address = $request->input('address');
            $password = $request->input('password');
            $confirm_password = $request->input('confirm_password');
            $email = $request->input('email');
            session(['user_name'=>request('user_name')]);
            
            DB::insert('INSERT INTO userForm (full_name, user_name, birthdate, phone, address, password,confirm_password, email) VALUES (?, ?, ?, ?, ?, ?,?, ?)', [$full_name, $user_name, $birthdate, $phone, $address, $password,$confirm_password, $email]);
            
            return redirect()->route('Email')->with('success', 'Success');

        } catch (ValidationException $e) {
            $errors = $e->validator->getMessageBag();
    
            return redirect()->back()->withErrors($errors)->withInput();
        }
   
       
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\userForm  $userForm
     * @return \Illuminate\Http\Response
     */
    public function show(userForm $userForm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\userForm  $userForm
     * @return \Illuminate\Http\Response
     */
    public function edit(userForm $userForm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\userForm  $userForm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, userForm $userForm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\userForm  $userForm
     * @return \Illuminate\Http\Response
     */
    public function destroy(userForm $userForm)
    {
        //
    }
}
