<?php

class Mymod extends CI_Model
{
	public function insert($data)
	{

			$this->db->insert('service',$data);
	}

	public function fetch_service()
	{
	$query = $this->db->get('service');
	return $query;
	}

	public function inser_child1($data)
	{
				$this->db->insert('childservice',$data);
	}
	public function show_modal()
	{
		$query = $this->db->get('service');
		return $query;
	}

	public function fetch_first($id)
	{
		$idd = $id;
		$this->db->select('childservice');
		$this->db->where('refid',$idd);
$quer = $this->db->get('childservice');
		return $quer->result();
	}

	public function get_the_list_service()
	{
		$uio = $this->db->get('service');
		return $uio;
	}

	public function show_child($cid)
	{
				$cid = $cid;
$id =substr($cid,3,4);
				$this->db->select('childservice');
				$this->db->where('refid',$id);
				$resu = $this->db->get('childservice');
				return $resu->result();
	}
}