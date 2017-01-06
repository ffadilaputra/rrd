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
  if (isset($_POST['submit'])) {
    $set_user = $_POST['username'];
    $set_pass = $_POST['password'];
    $set_role = $_POST['role'];
    $insert_user = $koneksi->query("insert into data_users VALUES('','$set_user','$set_pass','$set_role')");
    if ($insert_user) {
      header('location:admin-users.php');
    }else{
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
                <li class="breadcrumb-item active">Users Management</li>
    </ol>
        <div class="row">
        	<div class="col-sm-4">
                   <div class="card">
                       <div class="card-header">
                          <strong>Entry Data User</strong>
                          <small>Form</small>
                       </div>
                       <form action="" method="POST">
                     <div class="card-block">
                      		<div class="row">
                            	<div class="col-sm-12">
                                  <div class="form-group">
                                   <label for="name">Username</label>
                                  	<input type="text" class="form-control" name="username" placeholder="Enter Username" required="true">
                                 </div>
                               </div>
                            </div>
                            <div class="row">
                            	<div class="col-sm-12">
                                  <div class="form-group">
                                   <label for="name">Password</label>
                                  	<input type="password" class="form-control" name="password" placeholder="Enter Password" required="true">
                                 </div>
                               </div>
                            </div>
                            <div class="row">
                              <div class="col-sm-12">
                                  <div class="form-group">
                                   <label for="name">Role</label>
                                    <select name="role" class="form-control">
                                      <option value="admin">Admin</option>
                                      <option value="user">User</option>
                                    </select>
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
             <div class="col-sm-7">
               <div class="card">
                 <table id="main" class="table table-striped">
                   <tr>
                     <td>No</td>
                     <td>Username</td>
                     <td>Role</td>
                     <td>Action</td>
                   </tr>

                   <?php 

                   $list = $koneksi->query("select * from data_users");
                   $no = 1; 
                   while ($data = $list->fetch_assoc()) {
                     echo "<tr>";
                     echo '<td>' .$no. '</td>';
                     echo '<td>' .$data['username']. '</td>';
                     echo '<td>' .$data['role']. '</td>';
                     echo '<td>
                        <a href="admin-users-edit.php?id='.$data['id'].'">
                          <i class="fa fa-pencil-square-o" aria-hidden="true"></i>    
                        </a>
                        <a href="admin-users.php?id='.$data['id'].'">
                          <i class="fa fa-trash-o" aria-hidden="true"></i>
                        </a>
                          </td>';
                     echo "</tr>";
                     $no++;
                   }
                    ?>
                 </table>
               </div>
             </div>
        </div>
	</main>
<?php include 'partials/scriptjs.php'; ?>
</body>
</html>