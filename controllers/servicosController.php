<?php
/**
 * Created by PhpStorm.
 * User: Thiago Cunha
 * Date: 11/07/2017
 * Time: 00:59
 */

class servicosController extends controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $array = array();
        $this->loadTemplate("servicos", $array);
    }

}