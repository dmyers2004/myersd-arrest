<?php

class example_option extends options {

	public function describeAction() {
		return ['schema'=>$this->db_structure];
	}

	public function testAction() {
		$table = $this->segments(0);

		$this->db->select('*')
						->from($table)
						->order_by($this->_get('order_by'), $this->_get('order'))
						->limit(intval($this->_get('limit')), intval($this->_get('offset')))
						->query();
		if($result = $this->db->fetch_all()){
				die(json_encode($result));
		} else {
				$error = array('error' => array(
						'message' => 'No Content',
						'code' => 204
				));
				die(json_encode($error));
		}

		return $data;
	}

}