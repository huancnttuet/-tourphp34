<?php 

class product_model extends CI_Model
{
    function __construct()
    {
        $this->load->database();
        $table_name = 'product'; 
    }

    function insert($data){
    	$data['date_created']=date('Y-m-d H:i:s');
        $data['date_updated']=date('Y-m-d H:i:s');
        $this->db->insert($table_name, $data);
        $last_id = $this->db->insert_id();
    	return $last_id;
    }

    function update($data, $id){
    	$this->db->where('id_tour', $id);
    	$this->db->update($table_name, $data);
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

		$query=$this->db->get($table_name);
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

		$query=$this->db->get($table_name);
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

		$query=$this->db->get($table_name);
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
		$query=$this->db->get($table_name);
		$totals = $query->result();
		return $totals[0]->total;
	}
	function delete($id)
	{
		$this->db->delete($table_name, array('id_tour'=>$id));
	}
}

 ?>
