<?php
	session_start();
	
	// Incluir configurações
	require_once __DIR__ . '/../config.php';

class Sql {
	public $conn;
	public function __construct(){
		$this->conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
		
		if (!$this->conn) {
			die("Erro de conexão: " . mysqli_connect_error());
		}
		
		mysqli_set_charset($this->conn, DB_CHARSET);
		
		return $this->conn;
	}
	public function query($string_query){
		return mysqli_query($this->conn, $string_query);
	}
public function select($string_query){
		$result = $this->query($string_query);
		
		if (!$result) {
			die("Erro na consulta: " . mysqli_error($this->conn));
		}
		
		$data = array();
		while ($row = mysqli_fetch_array($result)){
			foreach ($row as $key => $value) {
				if (is_string($value)) {
					$row[$key] = utf8_encode($value);
				}
			}
			array_push($data, $row);
		}
		mysqli_free_result($result);
		return $data;
}
	public function __destruct(){

		mysqli_close($this->conn);

	}
}
?>
