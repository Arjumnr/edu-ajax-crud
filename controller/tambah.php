<?php 
    require_once '../conn.php';
    $data = tambah("tb_users", "'$_POST[username]', '$_POST[password]', '$_POST[role]'");

    if($data){
        echo json_encode(['status' => 'success', 'data' => $data]);
        return;
    }else{
        echo json_encode(['status' => 'error', 'data' => $data]);
        return;
    }