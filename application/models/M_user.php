<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

	var $table = 'user';
	var $column_order = array('username',null); //set column field database for datatable orderable
	var $column_search = array('username',); //set column field database for datatable searchable just firstname , lastname , address are searchable
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function get_all()
	{
        $this->db->from($this->table);
        $this->db->order_by("id", "DESC");
        $query = $this->db->get(); 
        return $query->result(); 
	}

}
