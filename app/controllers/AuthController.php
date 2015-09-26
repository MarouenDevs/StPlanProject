<?php

class AuthController extends \BaseController {



	public function __construct(){

       $this->beforeFilter('@checkLogin',array('except' => array('index','signin')));


    }

    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        if(Auth::check()){

            return Redirect::to('dashboard/home');
        }
        return  View::make('auth.index');
	}



	public function signin()
	{

        $validator=Validator::Make(Input::all(),User::$rules,User::$messages);

        if($validator->fails()){

        return Redirect::to('users/login')->withErrors($validator);

    }else{
      $user=User::where('login','=',Input::get('login'))->first();

      if(!is_null($user)){

    if($this->checkPassword($user,Input::get('password'))){

        Auth::login($user);

        return Redirect::to('dashboard/home');
    }else{

        return Redirect::to('users/login');
    }

      }else{

          return Redirect::to('users/login');
      }



    }

	}


	public function logout()
	{
		Auth::logout();
        return Redirect::to("users/login");
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
