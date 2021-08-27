<?php

class Departments extends CI_Model

{

   public function __construct() {

       parent::__construct();

   }



   public function record_count() {

       return $this->db->count_all("ac_journal_master");

   }



   public function fetch_departments($limit, $start) {

       $this->db->limit($limit, $start);
       $this->db->order_by('id','DESC');

       $query = $this->db->get("ac_journal_master");



       if ($query->num_rows() > 0) {

           foreach ($query->result() as $row) {

               $data[] = $row;

           }

           return $data;

       }

       return false;

   }

}