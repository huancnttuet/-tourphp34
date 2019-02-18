<?php 

class image_model extends CI_Model
{
    function __construct()
    {
        $this->load->database();
        
    }

    function insert($data){
    	
        $this->db->insert('image', $data);
        $last_id = $this->db->insert_id();
    	return $last_id;
    }

    function update($data, $id){
    	$this->db->where('id_tour', $id);
    	$this->db->update('image', $data);
    }

	function get($select = '*', $where = array(), $like = array(), $offset = 0, $limit = 10, $order = array())
	{
		$this->db->select($select);
		if (count($where)>0) {
			$this->db->where($where);
		}

		if (count($like)>0) {
			$this->db->like($like);
		}

		$this->db->limit($limit, $offset);

		if (count($order)>0) {
			$key = key($order);
			$this->db->order_by($key, $order[$key]);
		}

		$query=$this->db->get('image');
		echo $this->db->last_query();
		$data = array();
		foreach ($query->result() as $r) {
			$data[]=$r;
		}
		return $data;
	}

	function get_all($select = '*', $where = array(), $like = array(), $order = array())
	{
		$this->db->select($select);
		if (count($where)>0) {
			$this->db->where($where);
		}

		if (count($like)>0) {
			$this->db->like($like);
		}

		if (count($order)>0) {
			$key = key($order);
			$this->db->order_by($key, $order[$key]);
		}

		$query=$this->db->get('image');
		echo $this->db->last_query();
		$data = array();
		foreach ($query->result() as $r) {
			$data[]=$r;
		}
		return $data;
	}


	function get_one($select = '*', $where = array(), $like = array(), $order = array())
	{
		$this->db->select($select);
		if (count($where)>0) {
			$this->db->where($where);
		}

		if (count($like)>0) {
			$this->db->like($like);
		}
		if (count($order)>0) {
			$key = key($order);
			$this->db->order_by($key, $order[$key]);
		}

		$query=$this->db->get('image');
		echo $this->db->last_query();
		$data = array();
		foreach ($query->result() as $r) {
			$data[]=$r;
		}
		return $data;
	}
	function get_total($where = array(), $like = array())
	{
		$this->db->select('COUNT(*) AS total');
		if (count($where)) {
			$this->db->where($where);
		}

		if (count($like)) {
			$this->db->like($like);

		}
		$query=$this->db->get('image');
		$totals = $query->result();
		return $totals[0]->total;
	}
	function delete($id)
	{
		$this->db->delete('image', array('id_tour'=>$id));
	}
}

 ?>