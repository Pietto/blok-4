<?php
require(ROOT . "model/EmployeeModel.php");


function index()
{
    $employees = getAllEmployees();
    render('employee/index', $employees);
}

function create(){
    render('employee/create');
}

function store(){
    $data = $_POST;
    createEmployee($data);
    header("location: index");
}

function edit($id){
    $data = getEmployee($id);
    render('employee/update', $data);
}

function update(){
    updateEmployee($_POST);
    var_dump($userInput);
    header("location: ../index");
}

function delete($id){
    $idOfEmployee = getEmployee($id);
    render('employee/delete', $idOfEmployee);
}

function destroy($id){
    deleteEmployee($id);
    header("location: ../index");    
}
?>