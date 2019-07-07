<?php

function getAllStudents() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM student";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function createcustomer($dataname,$datatime,$datalength,$datahorse){
	$name = $dataname;
	$time = $datatime;
	$length = $datalength;
	$horse = $datahorse;
	echo $name,$time,$length,$horse;
	echo '<script>alert(\'Succesvol een reservering gemaakt om '.$time.'\')</script>';

	$servername = "localhost";
		    $username = "root";
		    $password = "mysql";
		    $dbname = 'MVCplanning';
			    try {
		        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		        // set the PDO error mode to exception
		        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		       	$sql = "INSERT INTO bezoekers (name, horse, tijd, lengte)
		        VALUES ('$name', '$horse', '$time','$length')";
		        // use exec() because no results are returned
		        $conn->exec($sql);
		        echo '<script>console.log("afspraak succesvol gemaakt");</script>';
		        }
		    catch(PDOException $e)
		        {
		        echo '<script>console.log("Connection failed: ' . $e->getMessage() . '");</script>';
		        }
			    $conn = null;
			    render('home/index');
}

function updateCustomer($dataname,$datatime,$datalength,$datahorse,$dataid){
	$name = $dataname;
	$time = $datatime;
	$length = $datalength;
	$horse = $datahorse;
	$id = $dataid;
	echo '<script>console.log(\'Succesvol een reservering geüpdated om '.$time.'\')</script>';
	echo '<script>console.log(\'name: '.$name.'         time: '.$time.'         length: '.$length.'         horse: '.$horse.'         id: '.$id.'\')</script>';

	$servername = "localhost";
	$username = "root";
    $password = "mysql";
    $dbname = 'MVCplanning';
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "UPDATE bezoekers SET `name` = '$name', `horse` = '$horse', `tijd`= '$time', `lengte` = '$length' WHERE `id` = $id";
        $conn->exec($sql);
        echo '<script>console.log("bezoeker '.$name.'\' afspraak succesvol geüpdated");</script>';
        }
    catch(PDOException $e)
        {
        echo '<script>console.log("Connection failed: ' . $e->getMessage() . '");</script>';
        }

	    $conn = null;
	render("student/index");	
}

function credentials(){
	$servername = "localhost";
	$username = "root";
	$password = "mysql";
	$dbname = 'MVCplanning';
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e){
        echo $sql . "<br>" . $e->getMessage();
    }
    $sql = "SELECT id, name, horse, tijd, lengte FROM bezoekers ORDER BY id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

	    

    while ($data = $stmt->fetch()){
        echo "<div class='card'>"
    	.'<p id=\'cardname\'>'.$data['name'].'</p>'
    	.'<p>'.$data['tijd'].' t/m ';
		$startTime = $data['tijd'];
		$endTime = date('H:i',strtotime('+'.$data['lengte'].' hour',strtotime($startTime)));
		echo $endTime .':00</p>';
		echo '<p>'.$data['horse'].'</p>';
		echo 'persoon ID: 15'.$data['id'];
		echo '<br><a href="'.URL .'home/editdate/?name='.$data['name'].'&id='.$data['id'].'&horse='.$data['horse'].'&time='.$data['tijd'].'&length='.$data['lengte'].'" class="btn btn-primary btn-update">'.'update'.'</a>'
		    	.'<a href="'.URL .'home/deletedate/?name='.$data['name'].'&id='.$data['id'].'" class="btn btn-primary btn-delete">'.'delete'.'</a>';
		echo '</div>';
    }
}
function deleteCustomer($dataid){
	$id = $dataid;
	echo $id;
    
	$servername = "localhost";
	$username = "root";
	$password = "mysql";
	$dbname = 'MVCplanning';
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "DELETE FROM bezoekers WHERE id = $id;";
        $conn->exec($sql);
        echo '<script>console.log("spel '.$name.' succesvol verwijderd");</script>';
        echo '<script>alert("spel '.$name.' succesvol verwijderd");</script>';
		render('home/index');
        }
    catch(PDOException $e)
        {
        echo '<script>console.log("Connection failed: ' . $e->getMessage() . '");</script>';
        }
    $conn = null;
}