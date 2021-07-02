<?php
//set connection variables 
$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_db = 'movedb1';

//connection to server & database 
$connection = mysqli_connect($db_host, $db_user, $db_password, $db_db );

//check connection 
if(mysqli_connect_errno()):
  printf("Connect failed: %s\n", mysqli_connect_errno());
  exit();
endif;



if(isset($_POST['Forword'])){

    $my_query = "select * from move_tabl  WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO move_tabl (movement) VALUES ('Forword')";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }


}else if(isset($_POST['Right'])){

    $my_query = "select * from move_tabl WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO move_tabl (movement) VALUES ('right')";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }


}else if(isset($_POST['Left'])){

    $my_query = "select * from move_tabl WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO move_tabl (movement) VALUES ('left')";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }


}else if(isset($_POST['Stop'])){

    $my_query = "select * from move_tabl WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO move_tabl (movement) VALUES ('stop')";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }


}else if(isset($_POST['Backword'])){

    $my_query = "select * from move_tabl WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO move_tabl (movement) VALUES ('Backword')";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }


}

?>