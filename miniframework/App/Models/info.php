<?php

namespace App\Models;
use MF\Model\Model;

class Info extends Model
{

	protected $db;

	public function __construct(\PDO $db) {
		$this->db = $db;
	}

	public function getInfo() {
		
		$query = "select titulo,descricao from tb_info";
		return $this->db->query($query)->fetchAll();
	}
}

?>