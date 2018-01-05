<?php

class Database{
public $con;
public function __Construct(){

$this->con=mysqli_connect("localhost","root","");
if($this->con){
echo "you are connected";

	}
	else{
		echo "not connected";
	}
}

}
$obj = new Database;

