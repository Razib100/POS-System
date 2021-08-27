<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    /**
     * Class constructor
     *
     * @return  void
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    /**
     * User login
     *
     * @return  void
     */
    public function index()
    {
    	echo "hello";
    }
