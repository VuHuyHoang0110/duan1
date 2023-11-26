<?php
class Frontend_Model extends Model{
	 function __construct(){
	 	parent::__construct();
	 }
	 function getNewProducts(){
	 	$sql = "SELECT * FROM products ORDER BY created_at DESC LIMIT 0,4";
	 	$result=$this->getALL($sql);
	 	return $result;
	 }

}
?>