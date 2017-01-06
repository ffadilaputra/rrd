<!DOCTYPE html>
<html>

<?php include 'configuration.php'; 
	  include 'frontend/head.php';

      if(isset($_GET['id'])){
          $id = $_GET['id'];
          $getbyId = $koneksi->query("SELECT a.id,a.name,a.spec,a.image,a.price,a.stock,b.category_name,b.brand FROM data_barang a join data_category b on a.category_id=b.id where a.id='$id' ");
          $arr = $getbyId->fetch_assoc();
      }
?>
<body>
	<?php include 'frontend/navbar.php' ?>
    <div class="container">
        <div class="rows">
            <?php include 'frontend/menu-left.php' ?>
        </div>
            <div class="col-sm-8">
                <div class="container">    
		<div class="row">
			<div class="col-md-8">				
				<div class="panel panel-default  panel--styled">
					<div class="panel-body">
						<div class="col-md-12 panelTop">	
							<div class="col-md-4">	
								<img class="img-responsive" src="upload/<?php echo $arr['image'] ?>" alt=""/>
							</div>
							<div class="col-md-8">	
								<h2><?php echo $arr['name'] ?></h2>
								<p><?php echo $arr['spec'] ?></p>
								<h5>Brand : <span class="label label-success"><?php echo $arr['brand'] ?></span></h5>
								<h5>Category : <?php echo $arr['category_name'] ?></h5>
							</div>
						</div>
						
						<div class="col-md-12 panelBottom">
							<div class="col-md-4 text-center">
								<button class="btn btn-lg btn-add-to-cart"><span class="glyphicon glyphicon-shopping-cart"></span>   Add to Cart</button>						
                                
                            </div>
							<div class="col-md-4 text-left">
								<h5>Price <span class="itemPrice"><?php echo "Rp.".number_format($arr['price'],0,".",".") ?></span></h5>
								
							</div>
							<div class="col-md-4">
								<div class="stars">
								 <div id="stars" class="starrr"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>
    </div>
			</div>
			
    <script src="frontend/js/bootstrap.js"></script>
</body>
</html>