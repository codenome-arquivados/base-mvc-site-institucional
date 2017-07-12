<?php

/**
 * Created by PhpStorm.
 * User: Thiago Cunha
 * Date: 11/07/2017
 * Time: 00:52
 */
class sobreController extends controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $array = array();
        $this->loadTemplate("sobre", $array);
    }

}