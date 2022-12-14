<?php


//check first
if (!isset($_POST['username']) || !isset($_POST['password'])){ 
    $data = array(
        'error'=> 'POST-dataa ei saatavilla. '
    );
    die();

}

$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

include_once 'pdo-connect.php';


try {
    $stmt = $conn -> prepare("INSERT INTO user (username, pwd) VALUES (:username, :pwd) ");
    $stmt-> bindParam('username', $username);
    $stmt-> bindParam('pwd', $password);
    if ($stmt -> execute() == false){
        $data = array(
            'error'=> 'Tapahtui jokin virhe tallennuksessa.'
        );
    } else{
        $data = array(
            'success'=> 'Uusi käyttäjä on luotu.'
        );
    }
    
} catch(PDOException $e){
    if(strpos($e->getMessage(), '1062 Duplicate entry')){
        $data = array(
            'error'=> 'Käyttäjä on jo olemassa.'
        );
    } else {
        $data = array(
            'error'=> 'Tapahtui jokin virhe tallennuksessa.'
        );
    }
}

header("Content-type: application/json;charset=utf-8");
echo json_encode($data);