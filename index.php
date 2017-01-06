<!DOCTYPE html>
<html>

<?php include 'configuration.php'; 
	  include 'frontend/head.php';
?>
<body>
	<?php include 'frontend/navbar.php' ?>
    <div class="container">
        <div class="rows">
            <?php include 'frontend/menu-left.php' ?>
        </div>
            <div class="col-sm-8">
                <div class="panel panel-default">
                    <div id="carousel-id" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-id" data-slide-to="0" class=""></li>
                            <li data-target="#carousel-id" data-slide-to="1" class=""></li>
                            <li data-target="#carousel-id" data-slide-to="2" class="active"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item">
                                <img data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" alt="First slide" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzc3NyI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjQ1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojN2E3YTdhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjU2cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+Rmlyc3Qgc2xpZGU8L3RleHQ+PC9zdmc+">
                                <div class="container">
                                    <div class="carousel-caption">
                                        <h1>Example headline.</h1>
                                        <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
                                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <img data-src="holder.js/900x500/auto/#666:#6a6a6a/text:Second slide" alt="Second slide" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzY2NiI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjQ1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojNmE2YTZhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjU2cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+U2Vjb25kIHNsaWRlPC90ZXh0Pjwvc3ZnPg==">
                                <div class="container">
                                    <div class="carousel-caption">
                                        <h1>Another example headline.</h1>
                                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="item active">
                                <img data-src="holder.js/900x500/auto/#555:#5a5a5a/text:Third slide" alt="Third slide" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzU1NSI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjQ1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojNWE1YTVhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjU2cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+VGhpcmQgc2xpZGU8L3RleHQ+PC9zdmc+">
                                <div class="container">
                                    <div class="carousel-caption">
                                        <h1>Produk Baru Kami</h1>
                                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                        <a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
                    </div>
                </div>
				<?php 
			
			$view = $koneksi->query("SELECT a.id,a.name,a.spec,a.image,a.price,a.stock,b.category_name,b.brand FROM data_barang a join data_category b on a.category_id=b.id ");
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
			<?php } ?>
            </div>
			</div>
			</div>
			<br>
			<?php include 'frontend/footer.php' ?>
        	<script src="frontend/js/bootstrap.js"></script>
</body>
</html>