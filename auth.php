<?php
    include 'connection.php';
    session_start();
    $user = $_POST['user'];
    $pwd = $_POST['password'];

    $query = "select count(username) , pwd from user where username = '%s' ;";
    
    $res = $conn->query(sprintf($query,$user));
    while(list($count , $spwd)=$res->fetch_row())
    {
        if ($count > 0 && $pwd === $spwd){
            
            $query = "select * from user where username = '%s' ;";
    
            $res = $conn->query(sprintf($query,$user));
            $current = $res->fetch_object();
            $_SESSION['current']=$current;
            header('Location: index.php');
            
            
        }
        else{
            echo "invalid user or pwd ";
        }
    }
?>