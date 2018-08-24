<?php
    //header('Access-Control-Allow-Origin:*');
    //add mysql
    $con=mysqli_connect("127.0.0.1","root","123456","blogpre");
    //check mysql connection
    if(mysqli_connect_errno()){
    echo"Failed to connect to MySQL:".mysqli_connect_error();
    }
    //get js ajax data
    $sql="insert into user(nickname,tel,email,sex,password,face)
     values
     ('$_POST[nickname]','$_POST[tel]','$_POST[email]',$_POST[sex],'$_POST[password]','$_POST[face]')";
    //check mysql add success
    if(!mysqli_query($con,$sql)){
        echo"error";
    }else{
        //success
        echo '{"msg":"success","status":"2"}';
    }

    mysqli_close($con);
?>