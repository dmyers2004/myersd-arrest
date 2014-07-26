<?php 

class options {
	protected $config;
	protected $segment;
	protected $db;
	protected $db_structure;

	public function __construct($config,$segment,$db,$db_structure) {
		$this->config = $config;
		$this->segment = $segment;
		$this->db = $db;
		$this->db_structure = $db_structure;
	}

} /* end class */