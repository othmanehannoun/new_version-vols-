<?php
   session_start();
   
    $db = mysqli_connect("127.0.0.1", "root", "", "db_gestionvols");
    $query = mysqli_query($db, "SELECT * from vols ");

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Vols</title>
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"  integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>

<div class="wrapper">
    <div class="sidebar">
        <img src="../images/logo.png" alt="">
        <ul>
            
            <li><a href="admin.php"><i class="fas fa-user"></i>Admin Profile</a></li>
            <li><a href="vols.php"><i class="fas fa-address-card"></i>Vols</a></li>
            <li><a href="../home.php"><i class="fab fa-internet-explorer"></i>Web site</a></li>
            
        </ul> 
        
    </div>
    <div class="main_content">
        <div class="header"> <?php echo "HELLO ADMIN". ' '. $_SESSION['USERNAME'];?></div>  
        <div class="info">
          
        <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Depart</th>
      <th scope="col">Destination</th>
      <th scope="col">Date depart</th>
      <th scope="col">Time</th>
      <th scope="col">Prix</th>
      <th scope="col">N°:Place</th>
      <th scope="col">Action</th>
    </tr>
  </thead>

  <?php while ($fetch = mysqli_fetch_array($query)) {
        
  ?>
  <tbody>
    <tr>
      <th scope="row"><?php echo $fetch['idVol']; ?></th>
      <td><?php echo $fetch['depart']; ?></td>
      <td><?php echo $fetch['destination']; ?></td>
      <td><?php echo $fetch['date_depart']; ?></td>
      <td><?php echo $fetch['time']; ?></td>
      <td><?php echo $fetch['prix']; ?></td>
      <td><?php echo $fetch['place_disponible']; ?></td>
      <td><a href="update.php?id=<?php echo $id; ?>">modifier</a>
      <a href="suprimer.php?id=<?php echo $id; ?>">Suprimer</td>
    </tr>
  </tbody>

  <?php } ?>
</table>
  
</table>

        </div>
    </div>
</div>

</body>
</html>