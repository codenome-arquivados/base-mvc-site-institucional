<?php
class homeController extends controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
    	$array = array();
        $portfolio = new Portfolio();
        $array['portfolio'] = $portfolio->getTrabalhos(8);
     	$this->loadTemplate("home", $array);
    }


}