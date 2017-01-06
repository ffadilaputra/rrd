<!DOCTYPE html>
<html>
<head>
	<?php
        session_start(); 
        include 'check-session.php';
        include 'partials/top.php'; 
        include 'configuration.php';
  ?>
</head>
<body class="navbar-fixed sidebar-nav fixed-nav">

	<?php include 'partials/header.php'; ?>

  <?php 
      if (isset($_GET['id'])) {
        $get_id = $_GET['id'];
        $q_get = $koneksi->query("select * from data_barang where id = '$get_id'");
        $qq = $q_get->fetch_assoc();

        if (isset($_POST['submit'])) {
          $set_nama = $_POST['name'];
          $set_spc = $_POST['spec'];
          $set_price = $_POST['price'];
          $set_stock = $_POST['stock'];
          $set_cate = $_POST['category_list'];

          $u_data = $koneksi->query("update data_barang set name='$set_nama',spec='$set_spc',price='$set_price',stock='$set_stock',category_id='$set_cate' where id='$get_id'");
          
          if ($u_data) {
            header('location:admin-barang.php');
          }

        }

      }
  ?>
  <?php include 'partials/sidebar.php'; ?>
	<main class="main">
		<ol class="breadcrumb">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item"><a href="#">Admin</a></li>
                <li class="breadcrumb-item active">Item</li>
    </ol>
        <div class="row">
        	<div class="col-sm-4">
                   <div class="card">
                       <div class="card-header">
                          <strong>Edit Data</strong>
                          <small>Form</small>
                       </div>
                       <form action="" method="POST">
                     <div class="card-block">
                      		<div class="row">
                            	<div class="col-sm-12">
                                  <div class="form-group">
                                   <label for="name">Name</label>
                                  	<input value="<?php echo $qq['name']; ?>" type="text" class="form-control" name="name" placeholder="Enter your name" required="true">
                                 </div>
                               </div>
                            </div>
                            <div class="row">
                              <div class="col-sm-12">
                                  <div class="form-group">
                                   <label for="name">Category</label>
                                   <select class="form-control" name="category_list">
                                     <option>-- Choose Category --</option>
                                     <?php 
                                     $c = $koneksi->query("select * from data_category");
                                     while ($data = $c->fetch_assoc()) {
                                        echo '<option value='.$data['id'].'>'.$data['category_name'].'</option>';  
                                      }
                                     ?>
                                   </select>
                                 </div>
                               </div>
                            </div>
                            <div class="row">
                            	<div class="col-sm-12">
                                  <div class="form-group">
                                   <label for="name">Spesification</label>        
                                    <textarea class="form-control" name="spec"><?php echo $qq['spec']; ?></textarea>
                                 </div>
                               </div>
                            </div>
                             <div class="row">
                                  <div class="col-sm-12">
                                      <div class="form-group">
                                        <label for="name">Price</label>
                                        <input value="<?php echo $qq['price']; ?>" type="text" class="form-control" name="price" placeholder="Enter your name" required="true">
                                      </div>
                                  </div>
                             </div>
                             <div class="row">
                                  <div class="col-sm-12">
                                     <div class="form-group">
                                      <label for="name">Stock</label>
                                      <input value="<?php echo $qq['stock']; ?>" type="text" class="form-control" name="stock" placeholder="Enter your name" required="true">
                                     </div>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-sm-6">
                                     <div class="form-group">
                                    <input type="submit" name="submit" class="form-control btn-primary" placeholder="Enter your name" required="true">
                                     </div>
                                  </div>
                                  <div class="col-sm-6">
                                    <div class="form-group">
                                      <input type="reset" name="reset" class="form-control btn-danger" placeholder="Enter your name" required="true">
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
