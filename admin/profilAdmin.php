<?php

   	include "header.php"; 
	include "les classe/userclass.php";
   
            $db = mysqli_connect("localhost","root","","db_gestionVols");
                $id = $_GET['id'];
                $query = mysqli_query($db, "SELECT * FROM users WHERE iduser = '$id' "); 
                if (mysqli_num_rows($query) > 0 ) {
    
       while ($row = mysqli_fetch_array($query)){
                    $iduser = $row['iduser'];
                    $NAME = $row['username'];
                    $MAIL = $row['mail'];
                    $status = $row['status'];
        
     ?>

   
<div class="session">
			<?php 
			echo "HELLO ADMIN". ' '. $_SESSION['ADMIN']['username'];?>
            </div>
            
        </nav>
 <div class="boxContent">
     <div class="firstRow">
  
     <h4 class="h4">Your Profil</h4>
     <div class="tab-content py-4" id="content" style="width:65%; margin-left: 19%;">
     <form role="form">
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">iduser</label>
                            <div class="col-lg-9">
                            <input type="hidden" name="id" value="<?php echo $iduser ?>" >
                            <h5 class="h5"><?php echo  $iduser ?><h5>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">First name</label>
                            <div class="col-lg-9">
                            
                            <h5 class="h5"><?php echo  $NAME ?></h5>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">ADRESS EMAIL</label>
                            <div class="col-lg-9">
                            </h5><?php echo  $MAIL ?>
                        </h5>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">STATUS</label>
                            <div class="col-lg-9">
                            <h5 class="h5"><?php echo  $status ?></h5>
                            </div>
                        </div>
                            <?php  }  ?>
                            <?php  }  ?>
                        </div>
                    </form>
                </div>
</div>
</div>
<?php include "footer.html";  ?>
       
  


                
                