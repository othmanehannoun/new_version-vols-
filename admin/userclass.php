<?php
// include('dbconnection.php');
session_start();
 class User{

		function __construct() {
			$this->conn = new mysqli("localhost","root","", "db_gestionvols");
        }
        
		function user_insert($user, $mail, $pass, $status) {	

                $query = mysqli_query($this->conn, "INSERT INTO users values('', '$user', '$mail', '$pass', '$status')");
                
                if($query == true){
                //   header("location: inscription.php?msg=successfully registered ");
                return true;	 
                }
          
              else{
                // header("location: inscription.php?error=Not registered successfully ");	
                return false;
              }

            }


            function user_update($id1, $name, $email, $password, $status) {
             mysqli_query($this->conn,"UPDATE users set username = '$name', mail = '$email', pass_word = '$password', statu = '$status'  WHERE iduser = '$id1'");
   
                // mysqli_query($this->conn, "UPDATE users SET u = '$nom', `prenom` = '$prenom', `email` = '$mail' , `password` = '$password' WHERE `id_user` = '$id'") or die(mysqli_error());
            
            }


            function user_delete($id) {
                mysqli_query($this->conn,"DELETE from users where iduser = '$id'");
                   
               
               }



 }
    ?>
