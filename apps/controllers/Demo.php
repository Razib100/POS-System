
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Demo extends CI_Controller

{

   public function __construct() {

       parent:: __construct();

       $this->load->helper("url");

       $this->load->model("Departments");

       $this->load->library("pagination");

   }

   public function departmentdata() {

       $config = array();

       $config["base_url"] = base_url() . "Demo/departmentdata";

       $config["total_rows"] = $this->Departments->record_count();

       $config["per_page"] = 20;

       $config["uri_segment"] = 3;

       $this->pagination->initialize($config);

       $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

       $data["results"] = $this->Departments->

           fetch_departments($config["per_page"], $page);

       $data["links"] = $this->pagination->create_links();

       $this->load->view("departmentdata", $data);
   }

   public function jsFormValidation(){
    $this->load->view("jsFormValidation");
   }
}