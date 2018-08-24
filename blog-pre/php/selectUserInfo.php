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
      select * from user where nickname='$_POST[name]'
      ";
    //check mysql add success
     $data=array();
     class User{
        public $id;
        public $nickname;
        public $tel;
        public $email;
        public $sex;
        public $password;
        public $face;
     }
     $result = mysqli_query($con,$sql);
      while($row = mysqli_fetch_array($result))
      {
         $user=new User();
         $user->id=$row[id];
         $user->nickname=$row[nickname];
         $user->tel=$row[tel];
         $user->email=$row[email];
         $user->sex=$row[sex];
         $user->password=$row[password];
         $user->face=$row[face];
         $data[]=$user;
      }
      echo json_encode($data);
      mysqli_close($con);
?>