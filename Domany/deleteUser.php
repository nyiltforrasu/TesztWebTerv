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
    if(isset($_GET['deleteID'])){
        $did = $_GET['deleteID'];
        $sql = "DELETE FROM users WHERE id IS ?;";
        $stmt = mysqli_prepare($kapcsolat, $sql);
        $stmt->bind_param('i',$did);
//        $stmt->execute();


        if (mysqli_stmt_error($stmt)) {
            echo json_encode("error: "+ gettype($did));
            die(mysqli_stmt_error($stmt));
        } else {
            echo json_encode("deleted: "+ gettype($did));
        }

    }