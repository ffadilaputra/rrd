<!DOCTYPE html>
<html>

<?php 
      
      include 'configuration.php'; 
	  include 'frontend/head.php';



?>
<body>
	<?php include 'frontend/navbar.php' ?>
    <div class="container">
        <div class="rows">
            <?php include 'frontend/menu-left.php' ?>
        </div>
            <div class="col-sm-8">
            <?php
            $view = $koneksi->query("SELECT a.id,b.id,a.name,a.spec,a.image,a.price,a.stock,b.category_name,b.brand FROM data_barang a join data_category b on a.category_id=b.id where b.id='$id'");
			$no = 1;
			while ($data = $view->fetch_assoc()) {
			?>
            <div class="col-md-5">
                <div class="col-item">
                    <div class="post-img-content">
                        <img src="upload/<?php echo $data['image'] ?>" class="img-responsive" />
                        <span class="post-title">
							<b><?php echo $data['category_name'] ?></b><br>
						</span>
                        <span class="round-tag"><?php echo $data['stock'] ?></span>
                    </div>
                    <div class="info">
                        <div class="row">
                            <div class="price col-md-6">
                                <h4><?php echo $data['name'] ?></h4>
                                <h5 class="price-text-color"><?php echo "Rp.".number_format($data['price'],0,".",".") ?></h5>
                            </div>
                        </div>
                        <div class="separator clear-left">
                            <p class="btn-add">
                                <i class="fa fa-shopping-cart"></i><a href="#" class="hidden-sm">Add to cart</a></p>
                            <p class="btn-details">
                                <i class="fa fa-list"></i><a href="product-details.php?id=<?php echo $data['id'] ?>" class="hidden-sm">More details</a></p>
                                
                        </div>
                        <div class="clearfix">
                        </div>
                    </div>	
                </div>
				<br>
            </div>
            </div>
			<?php } ?>	
    <script src="frontend/js/bootstrap.js"></script>
</body>
</html>