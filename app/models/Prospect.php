<?php
/**
 * Created by PhpStorm.
 * User: MBM info
 * Date: 20/08/2015
 * Time: 22:19
 */

class Prospect extends Eloquent{

    public  function  documents(){

        return $this->hasMany('Document');
    }


} 