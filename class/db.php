<?php
class DB{
	public $dbh;
	
	public function __construct() { }
	
	public function connect($host, $port, $database, $user, $pass) {
		$this->dbh = @pg_connect("host=".$host." port=".$port." dbname=".$database." user=".$user." password=".$pass."");
		try {
			if(!$this->dbh) {
				throw new Exception('connect(): unable to establish database connection');
			}
		} catch (Exception $e) {
			echo $e->getMessage();
		}
								
		return $this->dbh;	
	}
	
	public function query($query){
		return pg_exec($this->dbh, $query);
	}
	
	public function fetchAll($result){
		return pg_fetch_all($result);
	}
	
}