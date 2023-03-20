<?php
    $kapcsolat = mysqli_connect(
        "localhost",
        "root",
        "",
        "teszt1"
    );
    if(mysqli_connect_error()){
        die("HIBA: nem sikerult a db-hez kapcsolodni: " . mysqli_connect_error());
    }
    $knev = isset($_GET["lname"]) ? $_GET["lname"] : "";
    $vnev = isset($_GET["fname"]) ? $_GET["fname"] : "";
    $email = isset($_GET["email"]) ? $_GET["email"] : "";
    $age = isset($_GET["age"]) ? $_GET["age"] : "";

    $sql = "insert into users (first_name, last_name, email, age) 
            values (?, ?, ?, ?);";
    $stmt = mysqli_prepare($kapcsolat, $sql);
    $stmt->bind_param("ssss", $knev, $vnev, $email, $age);
    if(!$stmt){
        die("ERROR");
    }
    mysqli_stmt_execute($stmt);

    if (mysqli_stmt_error($stmt)) {
        echo json_encode("error");
        die(mysqli_stmt_error($stmt));
    } else{
        $lastId = mysqli_insert_id($kapcsolat);
        echo json_encode($lastId);
    }




