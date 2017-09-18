<?php
	/**
	* 
	*/
	class mysql{
		
		function err($error){
			die("sorry,you have a wrong operation:".$error);
		}

		function connect($config){
			extract($config);
			if(!($con = mysql_connect($dbhost,$dbuser,$dbpsw))){
				$this->err(mysql_error());
			}
			if(!mysql_select_db($dbname,$con)){
				$this->err(mysql_error());
			}
			mysql_query("set names".$dbcharset);
		}

		function query($sql){
			if(!($query = mysql_query($sql))){
				$this->err($sql."<br/>".mysql_error());
			}
			else{
				return $query;
			}

		}

		function findAll($query){
			while($rs = mysql_fetch_array($query,MYSQL_ASSOC)){
				$list[] = $rs;
			}
			return isset($list)?$list:"";
		}

		function findOne($query){
			$rs = mysql_fetch_array($query,MYSQL_ASSOC);
			return $rs;
		}

		function findResult($query,$row = 0,$field = 0){
			$rs = mysql_result($query, $row,$field);
			return $rs;
		}

		function insert($table,$arr){
			foreach ($arr as $key => $value){
				$value = mysql_real_escape_string($value);
				$keyArr[] = "`".$key."`";
				$valueArr[] = "'".$value."'";
			}

			$keys = implode(",", $keyArr);
			$values = implode(",", $valueArr);
			$sql = "insert into ".$table."(".$keys.")values (".$values.")";
			$this->query($sql);
			return mysql_insert_id();
		}

		function update($table,$arr,$where){
			foreach ($arr as $key => $value) {
				$value = mysql_real_escape_string($value);
				$keyAndvalueArr[] = "`".$key."`='".$value."'";
			}
			$keyAndvalues = implode(",",$keyAndvalueArr);
			$sql = "update".$table." set".$keyAndvalues."$where".$where;
			$this->query($sql);
		}

		function delete($table,$where){
			$sql = "delete from ".$table." where ".$where;
			$this->query($sql);
		}

	}
?>