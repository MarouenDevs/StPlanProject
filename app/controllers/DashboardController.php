<?php

class DashboardController extends BaseController {





    public function __construct(){

        $this->beforeFilter('@checkLogin');


    }

    public function  index()
	{
		return View::make('dashboard.index');
	}

}
