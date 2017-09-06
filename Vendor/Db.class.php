<?php
namespace vendor;

abstract class Db{
	public $tableName="";
	abstract function connect($hostname,$username,$password,$database);
	abstract function insert($table,$data);
	abstract function update($table,$data,$where=null);
	abstract function delete($table,$where=null);	
	abstract function finkAll($arr=array());
	abstract function find($arr=array());

}