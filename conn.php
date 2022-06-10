<?php

    $conn = mysqli_connect("localhost", "root", "", "db_mengajax");

function show($table, $value){
        global $conn;
        $sql = "SELECT * FROM $table WHERE $value";
        $result = mysqli_query($conn, $sql);
        $rows = [];
        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
}


function delete($table, $value){
        global $conn;
        $sql = "DELETE FROM $table WHERE $value";
        mysqli_query($conn, $sql);
        return mysqli_affected_rows($conn);
}