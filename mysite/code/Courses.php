<?php

class Courses extends DataObject{
	
	static $db = array(
	"CourseName" => "varchar(255)",
	"Subject" => "varchar(100)",
	"QualType" => "varchar(100)",
	"Qual" => "varchar(100)",
	"ETFS" => "int",
	"Credits" => "int"
	);
	
}

?>