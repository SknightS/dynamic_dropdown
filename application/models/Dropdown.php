<?php
class Dropdown extends CI_Model {


    public function loaddropdown(){

        $query = $this->db->query("SELECT DISTINCT (`type`) FROM `product`");
        return $query->result();

    }

    public function view($x){

        $query = $this->db->query("SELECT * FROM `product` WHERE `type`= '$x'");
        return $query->result();

    }



}