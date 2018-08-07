<?php
$table=$_GET['db_table'];
// echo $table;
$databaseHost = 'localhost';
$databaseName = 'tool40';
$databaseUsername = 'tool';
$databasePassword = 'tool';

$db = new PDO('mysql:host='.$databaseHost.';dbname='.$databaseName.';',$databaseUsername, $databasePassword);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

try {
    //connect as appropriate as above
    $stmt=$db->query('SELECT * FROM '.$table); //invalid query!
    $rows=$stmt->fetchAll(PDO::FETCH_ASSOC);

    // print_r($rows);
    $rows= json_encode($rows);
    echo $rows;

} catch(PDOException $ex) {
    echo "An Error occured!<br>".$ex->getMessage(); //user friendly message
}


// $result = mysqli_query($mysqli, "SELECT * FROM data_tool1");
// // $result= json_decode($result);
// $rows = mysqli_fetch_array($result);
// // echo $result;
// print_r($rows);
?>