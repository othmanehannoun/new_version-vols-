<?php
session_start();
 class User
 {
      public $user;
      public $mail;
      public $pass;
      public $status;

    function __construct()
        {
		   	$this->conn = new mysqli("localhost","root","", "db_gestionvols");
        }
        
    // --------Insert Function----------
    function user_insert($user, $mail, $pass, $status) 
    {	
       $query = mysqli_query($this->conn, "INSERT INTO users values('', '$user', 
                                                                        '$mail', 
                                                                        '$pass', 
                                                                        '$status')");  
        if($query == true)
        {
          return true;	 
        }
        else {	return false;}
     }


    // --------Update Function----------
    function user_update($id, $name, $email, $password, $status) 
    {
        mysqli_query($this->conn,"UPDATE users set username = '$name',
                                                   mail = '$email',
                                                   pass_word = '$password',
                                                   statu = '$status'
                                                   WHERE iduser = '$id'");
         
    }

    // --------Delete Function----------
    function user_delete($id) 
    {
        mysqli_query($this->conn,"DELETE from users where iduser = '$id'");           
    }

 }
    ?>
