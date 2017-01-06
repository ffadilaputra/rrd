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
	<?php include 'partials/header.php'; 
		  include 'partials/sidebar.php';

	?>
	<main class="main">
		<ol class="breadcrumb">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item"><a href="#">Admin</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
    	</ol>
    	<div class="rows">
    		<div class="col-sm-6 col-lg-3">
                <div class="card card-inverse card-danger">
                	<div class="card-block p-b-0">
                    <h4 class="m-b-0">
                    <?php 
                    $hitung = $koneksi->query("select * from data_category");
                    $test = mysqli_num_rows($hitung);
                    echo $test;
                    
                    ?>
                    </h4>                    
                    <p>Total Record of <a href="admin-category.php">Category Items</a></p>
                    </div>
                </div>
             </div>
             <div class="col-sm-6 col-lg-3">
                <div class="card card-inverse card-warning">
                	<div class="card-block p-b-0">
                    <h4 class="m-b-0">
                    <?php 
                    $hitung = $koneksi->query("select * from data_barang");
                    $test = mysqli_num_rows($hitung);
                    echo $test;
                    ?>
                    </h4>
                    <p>Total Record of <a href="admin-barang.php">Items</a> </p>
                    </div>
                </div>
             </div>
              <div class="col-sm-6 col-lg-3">
                <div class="card card-inverse card-success">
                    <div class="card-block p-b-0">
                    <h4 class="m-b-0">
                    <?php 
                    $hitung = $koneksi->query("select * from data_users");
                    $test = mysqli_num_rows($hitung);
                    echo $test;
                    ?>
                    </h4>
                    <p>Total Record of <a href="admin-users.php">Users</a> </p>
                    </div>
                </div>
             </div>
    	</div>
	</main>
</body>
</html>