<?php
namespace Vendor;

class Model extends Db{
	public $tableName="";
	protected $pdo="";
	function __construct($tableName=""){
		//empty非空
		if(!empty($tableName)){
			$this->tableName=$tableName;
		}
		//实例化
		$pdo = new PDO('mysql:host=localhost;dbname=projectone','root','');
		$this->pdo=$pdo;
	}
	//$date 进表里面的数据
	/*
	  $date = array('字段值'=>值，。。。)
	*/
	function insert($date){
		//拼insert语句
		//$sql ="insert into {$this->tableName}(字段值) values('值')"

	}
}