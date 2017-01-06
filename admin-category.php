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
    $set_name = $_POST['name'];
    $set_brand = $_POST['brand'];
    $insert_category = $koneksi->query("insert into data_category VALUES('','$set_name','$set_brand')");
    if ($insert_category) {
      header('location:admin-category.php');
    }else{
      echo 'Data Menambah Data';
    }
    }

    if(isset($_GET['id'])){
      $id = $_GET['id'];
      $delete = $koneksi->query("DELETE FROM data_category WHERE id=$id");
      if($delete == true){
        header('location:admin-category.php?delete');
      }else{
        echo 'Data Gagal Dihapus';
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
                    <input type="text" class="form-control" name="name" placeholder="Enter Name" required="true">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label for="name">Brand</label>
                    <input type="text" class="form-control" name="brand" placeholder="Enter Brand" required="true">
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
        <br>
          <table id="main" class="table table">
          <thead>
            <tr>
              <td>No</td>
              <td>Name</td>
              <td>Brand</td>
              <td>Action</td>
            </tr>
          </thead>
          <tbody>
            <?php
            $list = $koneksi->query("select * from data_category");
            $no = 1;
            while ($data = $list->fetch_assoc()) {
            echo "<tr>";
              echo '<td>' .$no. '</td>';
              echo '<td>' .$data['category_name']. '</td>';
              echo '<td>' .$data['brand']. '</td>';
              echo '<td>
                <a href="admin-category-edit.php?id='.$data['id'].'">
                  <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                </a>
                <a href="admin-category.php?id='.$data['id'].'">
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