<?php

require(ROOT . "model/StudentModel.php");

function index(){
	render("student/index", array(
		'students' => getAllStudents()
	));
}

function createPage(){
	render("home/create");	
}

?>