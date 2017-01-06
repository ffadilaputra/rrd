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
      if (isset($_POST['submit'])) {
      $set_nama = $_POST['nama'];
      $set_spc = $_POST['spec'];
      $set_price = $_POST['price'];
      $set_stock = $_POST['stock'];

      $set_cate = $_POST['category_list'];

      $imgFile = $_FILES['gambar']['name'];
	    $tmp_dir = $_FILES['gambar']['tmp_name'];
		  $typeImg = $_FILES['gambar']['type'];
		  $imgSize = $_FILES['gambar']['size'];

      $upload_dir = "upload/".$imgFile;

      if($typeImg == "image/jpeg" || $typeImg == "image/png"){
		    if($imgSize <= 1000000){
			    if(move_uploaded_file($tmp_dir,$upload_dir)){
					  $query = $koneksi->query("INSERT INTO data_barang VALUES ('','$set_nama','$set_spc','$set_price','$set_stock','$set_cate','$imgFile')");
							if ($query == true) {
								header('location:admin-barang.php?success');
							}else{
								header('location:admin-barang.php?fail');
							}
				  }
			  }
		}

      }
      if (isset($_GET['id'])) {
        $get_id = $_GET['id'];
        $delete = $koneksi->query("delete from data_barang where id ='$get_id'");
        header('location:admin-barang.php');
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
                          <strong>Entry Data</strong>
                          <small>Form</small>
                       </div>
                       <form action="" method="POST" enctype="multipart/form-data">
                     <div class="card-block">
                      		<div class="row">
                            	<div class="col-sm-12">
                                  <div class="form-group">
                                   <label for="name">Name</label>
                                  	<input type="text" class="form-control" name="nama" placeholder="Enter your name" required="true">
                                 </div>
                               </div>
                            </div>
                            <div class="row">
                            	<div class="col-sm-12">
                                  <div class="form-group">
                                   <label>Image</label>
                                    <input type="file" class="form-control" name="gambar">
                                 </div>
                               </div>
                            </div>
                            <div class="row">
                            	<div class="col-sm-12">
                                  <div class="form-group">
                                   <label for="name">Spesification</label>
                                    <textarea class="form-control" name="spec"></textarea>
                                 </div>
                               </div>
                            </div>
                             <div class="row">
                                  <div class="col-sm-12">
                                      <div class="form-group">
                                        <label for="name">Price</label>
                                        <input type="text" class="form-control" name="price" placeholder="Enter your name" required="true">
                                      </div>
                                  </div>
                             </div>
                             <div class="row">
                                  <div class="col-sm-12">
                                     <div class="form-group">
                                      <label for="name">Stock</label>
                                      <input type="text" class="form-control" name="stock" placeholder="Enter your name" required="true">
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
             <div class="col-sm-7">
               <div class="card">
               <br>
                 <table id="main" class="table table-striped">
                 <thead>
                   <tr>
                     <td>No</td>
                     <td>Name</td>
                     <td>Category</td>
                     
                     <td>Brand</td>
                     <td>Price</td>
                     <td>Stock</td>
                     <td>Action</td>
                   </tr>
                 </thead>
                 <tbody>   
                   <?php 

                   $list = $koneksi->query("SELECT a.id,a.name,b.category_name,a.spec,a.price,a.stock,b.brand FROM data_barang a JOIN data_category b on a.category_id = b.id");
                   $no = 1;
                   while ($data = $list->fetch_assoc()) {
                     echo "<tr>";
                     echo '<td>' .$no. '</td>';
                     echo '<td>' .$data['name']. '</td>';
                     echo '<td>' .$data['category_name']. '</td>';
                     echo '<td>' .$data['brand']. '</td>';
                     echo '<td>' ."Rp.".number_format($data['price'],0,".","."). '</td>';
                     echo '<td>' .$data['stock']. '</td>';
                     echo '<td>
                     <a href="admin-barang-edit.php?id='.$data['id'].'">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                     </a>
                     <a href="admin-barang.php?id='.$data['id'].'">
                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                     </a>
                          </td>';
                     echo "</tr>";
                     $no++;
                   }
                    ?>
                    </tbody>
                 </table>
               </div>
             </div>
        </div>
	</main>
<!-- Bootstrap and necessary plugins -->
        <?php include 'partials/scriptjs.php'; ?>
</body>
</html>
