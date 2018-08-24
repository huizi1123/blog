<?php
    //header('Access-Control-Allow-Origin:*');
    //add mysql
    $con=mysqli_connect("127.0.0.1","root","123456","blogpre");
    //check mysql connection
    if(mysqli_connect_errno()){
    echo"Failed to connect to MySQL:".mysqli_connect_error();
    }
    //get js ajax data
     $sql="
      select count(*) as num from user where nickname='$_GET[nickname]' and password='$_GET[password]'
      ";
    //check mysql add success
     $data=array();
     class User{
        public $count;
     }
     $result = mysqli_query($con,$sql);
      while($row = mysqli_fetch_array($result))
      {
         $user=new User();
         $user->count=$row[num];
         $data[]=$user;
      }
      echo json_encode($data);
      mysqli_close($con);
?>