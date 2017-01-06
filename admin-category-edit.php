<!DOCTYPE html>
<html>
<head>
	
	<?php
        session_start(); 
        include 'check-session.php';
        include 'partials/top.php'; 
        include 'configuration.php';
      ?>
  <?php 

  if (isset($_GET['id'])) {
    $get_id = $_GET['id'];
    $q_get_id = $koneksi->query("select * from data_category WHERE '$get_id'");
    $qq = $q_get_id->fetch_assoc();
    
     if (isset($_POST['submit'])) {
      $set_name = $_POST['name'];
      $set_brand = $_POST['brand'];
      $update_q = $koneksi->query("update data_category set category_name='$set_name',brand='$set_brand' WHERE id='$get_id'");
      if ($update_q) {
        header('location:admin-category.php');
      }
  }
  }

 
  
  ?>
</head>
<body class="navbar-fixed sidebar-nav fixed-nav">
	<?php include 'partials/header.php';
        include 'partials/sidebar.php'; 
   ?>
	<main class="main">
		<ol class="breadcrumb">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item"><a href="#">Admin</a></li>
                <li class="breadcrumb-item active">Category</li>
    </ol>
        <div class="row">
        	<div class="col-sm-4">
                   <div class="card">
                       <div class="card-header">
                          <strong>Entry Data Category</strong>
                          <small>Form</small>
                       </div>
                       <form action="" method="POST">
                     <div class="card-block">
                      		<div class="row">
                            	<div class="col-sm-12">
                                  <div class="form-group">
                                   <label for="name">Name</label>
                                  	<input value="<?php echo $qq['category_name']; ?>" type="text" class="form-control" name="name" placeholder="Enter Name" required="true">
                                 </div>
                               </div>
                            </div>
                            <div class="row">
                            	<div class="col-sm-12">
                                  <div class="form-group">
                                   <label for="name">Brand</label>
                                  	<input value="<?php echo $qq['brand']; ?>" type="text" class="form-control" name="brand" placeholder="Enter Brand" required="true">
                                 </div>
                               </div>
                            </div>
                              <div class="row">
                                  <div class="col-sm-12">
                                     <div class="form-group">
                                    <input type="submit" name="submit" class="form-control btn-primary" placeholder="Enter your name" required="true">
                                     </div>
                                  </div>
                              </div>
                     </div>
                     </form>
                    </div>
             </div>
        </div>
	</main>

</body>
</html>