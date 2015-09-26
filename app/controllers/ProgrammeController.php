<?php
/**
 * Created by PhpStorm.
 * User: MBM info
 * Date: 26/09/2015
 * Time: 20:42
 */

class ProgrammeController  extends  \BaseController{

    public function __construct(){

        $this->beforeFilter('@checkLogin');


    }

    public function index()
    {

        return View::make("programme.index");
    }



} 