<?php
require(ROOT . "model/PlanningModel.php");

require(ROOT . "model/GamesModel.php");

function index()
{
    $data = getAllUserInputs();
    render('planning/index', $data);
}

function create()
{
    render('planning/create', ["games" => getAllGames()]);
}

function store()
{
    $validation = validate($_POST);

    if ($validation["succes"])
    {
        createUserInput($validation["result"]);
        header("location: index");
    }
    else
    {
        render("planning/create", ["userInput" => $validation["result"], "error" => $validation["error"], "games" => getAllGames()]);
    }
}

function edit($id)
{
    render('planning/update', ["games" => getAllGames(), "userInput" => getUserInput($id)]);
}

function update($id)
{
    $validation = validate($_POST);

    if ($validation["succes"])
    {
        updateUserInput($validation["result"], $id);
        header("location: ../index");
    }
    else {
        render("planning/update", ["error" => $validation["error"], "games" => getAllGames(), "userInput" => $validation["result"]]);
    }
}

function delete($id)
{
    $userInput = getUserInput($id);
    render('planning/delete', $userInput);
}

function destroy($id)
{
    deleteUserInput($id);
    header("location: ../index");    
}

function changeInput($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function validate($post)
{
    $data = NULL;
    $error = NULL;
    $valid = true;

    foreach ($post as $key => $value)
    {
        if ($value)
        {
            $data[$key] = changeInput($value);
        }
        else
        {
            $error[$key] = "Dit veld is verplicht";
            $valid = false;
        }
    }
    if ($valid)
    {
        return [
            "succes" => true,
            "result" => $data
        ];
    }
    else
    {
        return [
            "succes" => false,
            "error" => $error,
            "result" => $data
        ];
    }
}
?>