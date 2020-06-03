<?php
   
   include "header.php";
   include  "les classe/volsclass.php";
   
    $db = mysqli_connect("127.0.0.1", "root", "", "db_gestionvols");
    $query = mysqli_query($db, "SELECT * from vols");

    if (isset($_POST['add'])){

      $depart            = $_POST['depart'];
      $destination       = $_POST['destination'];
      $date_depart       = $_POST['date'];
      $time              = $_POST['time'];
      $prix              = $_POST['prix'];
      $place_disponible  = $_POST['place'];
      $status            = $_POST['status'];
    
	  $vols = new Vol();
	  $vols->vol_insert($depart, $destination, $date_depart, $time, $prix, $place_disponible, $status );

	  header("Location: vols.php");

	}

?>


 <!-- My Box Content -->
    
            <div class="session">
            <?php echo "HELLO ADMIN". ' '. $_SESSION['USERNAME'];?>
            </div>
            
        </nav>
     <div class="boxContent">
     <div class="firstRow">
  
	 <?php
	//  if (isset($_GET['message'])) {
	// 	 $message = $_GET['message'];
	// 	 echo  "<div class='alert alert-success'>".$message."</div>";  
	//  }
	 ?>
   
  <div class="addbtn">
  <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New vol</span></a>
  </div>
  <div class="row row-cols-1 row-cols-md-3">
  <?php while($row = mysqli_fetch_array($query)){  ?>
  <div class="col mb-4">
    <div class="card h-100">
    <div class="card-header"><?php echo $row['depart'].' '.'to'.' '.$row['destination'];?>
    <span class="badge badge-primary"><?php echo $row['statu'];?></span>
   </div>
      <div class="card-body">
        <h5 class="card-title">Date de depart: <span><?php echo $row['date_depart'];?></span></h5>
        <h5 class="card-text">Time: <span><?php echo $row['time'];?></span></h5>
        <h5 class="card-text">Prix: <span><?php echo $row['prix'];?>DH</span></h5>
        <h5 class="card-text">place desponible: <span><?php echo $row['place_disponible'];?></span></h5>
        
      </div>
      <div class="card-footer"><a href="editvol.php?id=<?php echo $row['idVol'];?>" class="btn btn-info float-right"> Edit </a>
       </div>
    </div>
  </div>
  <?php  }  ?>
</div>

<!-- Add Modal HTML -->
	<div id="addEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form method="post" action="">
					<div class="modal-header">						
						<h4 class="modal-title">Add Vol</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>depart</label>
							<input type="text" class="form-control" name="depart" placeholder="Enter depart" required>
						</div>
						<div class="form-group">
							<label>Destination</label>
							<input type="text" class="form-control" name="destination" placeholder="Enter destination" required>
						</div>
						<div class="form-group">
							<label>Date depart</label>
							<input type="date"class="form-control" name="date" placeholder="Enter la date" required>
						</div>
						<div class="form-group">
							<label>Time</label>
							<input type="text" class="form-control" name="time" placeholder="Enter time">
            </div>
            <div class="form-group">
							<label>Price</label>
							<input type="text" class="form-control" name="prix" placeholder="Enter Price">
            </div>
            <div class="form-group">
              <label>Place desponible</label>
              <input type="number" class="form-control" placeholder="Enter numbre place" name="place" min="1" max="50">
            </div>

            <div class="form-group">
            <label for="exampleInputEmail1">Status</label>
             <select name="status" class="form-control" id="inputGroupSelect01">

              <option value="Activer">Activer</option>
              <option value="Desactiver">Desactiver</option>
              
             </select>
             </div>
            
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-success" name="add" value="Add" >
					</div>
				</form>
			</div>
		</div>
	</div>
	
<?php include "footer.html";  ?>
           
           
                                       		                            
</body>
</html>