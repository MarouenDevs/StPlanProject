<?php
/**
 * Created by PhpStorm.
 * User: MBM info
 * Date: 20/08/2015
 * Time: 22:21
 */

class Document extends Eloquent{


    public function observations(){

        return $this->hasMany('Observation');
    }

    public function prospect(){
        return $this->belongsTo('Prospect');
    }

} 