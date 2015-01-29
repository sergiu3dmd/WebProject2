<?php
require_once "config_class.php";

class DataBase{
	
	private static $db =null;
	private $config;
	private $mysqli;
	
	public static function getDB(){
		if(sell::$db==null) self::$db=new DataBase();
		return self::$db;
		
	}
	
	private function __construct(){
		$this->config = new Cofig();
		$this->mysqli= new mysqli($this->config->db_host, $this->config->db_user, $this->config->db_password, $this->config->db_name);
		$this->mysqli->query("SET NAME 'utf8'");
	}
	
	private function getQuery($query, $params){
		if($params){
			for($i=0;$i<count$(params); $i++){
				$pos = strpos($)
				
			}
		}
		return $query;
	}
	
}


?>