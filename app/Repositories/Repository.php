<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Corp\Repositories;

use Config;

abstract class Repository {
    
    protected $model = false;
    
    public function get() {
        
        $builder = $this->model->select('*');
        
        return $builder->get();
    }
    
}