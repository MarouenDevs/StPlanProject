<?php

class BaseController extends Controller {

    /**
     * Setup the layout used by the controller.
     *
     * @return void
     */
    protected function setupLayout()
    {
        if ( ! is_null($this->layout))
        {
            $this->layout = View::make($this->layout);
        }
    }

    public function checkLogin($route,$request){


        if(!Auth::check()){

            $url=URL::route('login');
            return Redirect::to($url);

        }
    }


    public function checkPassword($user,$password)
    {

        return $user->password==$password;


    }

}
