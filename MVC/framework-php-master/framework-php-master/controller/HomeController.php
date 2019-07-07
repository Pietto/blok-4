<?php
require(ROOT . "model/StudentModel.php");
function index()
{
	render("home/index");
}

function createPage()
{
	render("student/create");
}

function editDate(){
	render("student/update");
}

function Overview()
{
	render("student/index");
}

function backToCreate()
{
	render("student/create");
}

function createDate(){
	if ($_SERVER["REQUEST_METHOD"] == "POST") {

	    $name = strip_tags($_POST['name']);
	    $time = strip_tags($_POST['time']);
	    $length = strip_tags($_POST['length']);
	    $horse = strip_tags($_POST['horse']);
	    if(empty($name)||empty($time)||empty($length)||empty($horse)){
		   echo "<script type='text/javascript'>alert('please fill al requiered fields');</script>";
			backToCreate();
		}else if($time > '20:00'||$time < '08:00'){
			echo '<script>alert(\''.'U moet uw afspraak tussen 08:00 en 20:00 plannen'.'\')</script>';
			backToCreate();
		}else if($length > 3||$length < 1){
			echo '<script>alert(\'Uw afspraak mag niet langer dan 3 uur duren\')</script>';
			backToCreate();
		}
		else{
		    createCustomer($name,$time,$length,$horse);
		}
	}
}
function updateDate(){
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	    $name = strip_tags($_POST['name']);
	    $time = strip_tags($_POST['time']);
	    $length = strip_tags($_POST['length']);
	    $horse = strip_tags($_POST['horse']);
	    $id = strip_tags($_POST['id']);
	    if(empty($horse)||empty($name)||empty($time)||empty($length)){
		   echo "<script type='text/javascript'>alert('please fill al requiered fields');</script>";
			backToCreate();
		}else if($time > '20:00'||$time < '08:00'){
			echo '<script>alert(\''.'U moet uw afspraak tussen 08:00 en 20:00 plannen'.'\')</script>';
			backToCreate();
		}else if($length > 3||$length < 1){
			echo '<script>alert(\'Uw afspraak mag niet langer dan 3 uur duren\')</script>';
			backToCreate();
		}else if(empty($id)){
			echo '<script>console.log(\'no $id found\');</script>';
		}
		else{
			updateCustomer($name,$time,$length,$horse,$id);
		}
	}
}
function deletedate()
{
	render("student/delete");
}

function delete()
{
	$id = strip_tags($_POST['id']);
	deleteCustomer($id);
}

function keep()
{
	echo 'keep';
}

?>