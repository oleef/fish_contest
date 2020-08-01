<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class FishModel extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function getFishData() {
        $this->db->select('*')->from('raw_fish_type');
        $query = $this->db->get();
        return $query->result();
    }

}

?>