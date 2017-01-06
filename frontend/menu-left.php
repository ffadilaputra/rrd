<div class="col-sm-2">
    <div class="list-group">
        <a href="#" class="list-group-item active">
			Semua Kategori
		</a>
        <?php
            $view = $koneksi->query("SELECT * FROM data_category");
			$no = 1;
			while ($data = $view->fetch_assoc()) {
             ?>
            <a href="#" class="list-group-item"><i class="fa fa-desktop"></i>&nbsp;<?php echo $data['category_name'] ?></a>
            <?php } ?>
    </div>