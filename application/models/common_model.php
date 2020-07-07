<?php
class Common_model extends CI_Model
{

	function __construct()
    {
        parent::__construct();
    }

	function add($params,$table)
    {
        $this->db->insert($table,$params);
        return $this->db->insert_id();
    }

	function validate($params)
	{
		return $this->db->get_where('users',$params)->row();
	}

	function count($table)
	{
		return $this->db->count_all_results($table);
	}	
	
	function get_user($para='')
	{
		$this->db->select('users.f_name, users.l_name, exam_tbl.exam ');
		$this->db->from('users');
		$this->db->join('exam_tbl', 'exam_tbl.user_id = users.id');
		

		if (isset($para['limit']) && isset($para['offset'])) {
			$this->db->limit($para['limit'], $para['offset']);
		}

		if (isset($para['keywords'])) {
			$this->db->like('users.f_name', $para['keywords']);
			$this->db->or_like('users.l_name', $para['keywords']);
			$this->db->or_like('exam_tbl.exam', $para['keywords']);
		}
		
		if (isset($para['sortBy']) && isset($para['sortCol'])) {
			if ($para['sortCol'] == 'exam') {
				$this->db->order_by('exam_tbl.exam', $para['sortBy']);
			}else{
				$this->db->order_by('users.'.$para['sortCol'], $para['sortBy']);
			}						
		}else{
			$this->db->order_by('users.id', 'desc');
		}

		return  $this->db->get()->result_array();	
	}
}