<?php

/**
 * Created by PhpStorm.
 * User: Thiago Cunha
 * Date: 11/07/2017
 * Time: 00:27
 */
class portfolioController extends controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $array = array();
        $portfolio = new Portfolio();
        $array['portfolio'] = $portfolio->getTrabalhos();
        $this->loadTemplate("portfolio", $array);
    }


}