<?php
partials("head");
partials("banner");
partials("navigation");

?>
<main>
	<div class="container-fluid px-4">
		<h1 class="mt-4">Daftar Buku</h1>
		<?php  partials("table", ["datas" => $datas]); ?>

		<!-- Modal untuk tambah data -->
		<?php  partials("modal-head", ["title" => "Tambah buku", "id" => "tambahData"]); ?>
		<form action="/buku" method="post">
			<?php  partials("form-control", [ "id" => "judul", "label" => "Judul buku", "type" => "text"]) ?>
			<?php  partials("form-control", [ "id" => "pengarang", "label" => "Pengarang", "type" => "text"]) ?>
			<?php  partials("form-control", [ "id" => "isbn", "label" => "ISBN", "type" => "text"]) ?>
			<div class="container-fluid d-flex justify-content-end">
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</form>

		<?php  partials("modal-foot"); ?>

		

	</div>
</main>
<?php

 partials("footer");
partials("foot");

?>