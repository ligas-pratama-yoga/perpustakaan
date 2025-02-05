<?php
 partials("head");
 partials("banner");
 partials("navigation");
?>

<main>
	<div class="container-fluid px-4">
		<h1 class="mt-4">Daftar Anggota</h1>
		<?php  partials("table", ["datas" => $datas]); ?>
		<?php  partials("modal-head", ["title" => "Tambah anggota", "id" => "tambahData"]); ?>
		<form action="/users" method="post">
			<?php  partials("form-control", [ "id" => "nama", "label" => "Nama", "type" => "text"]) ?>
			<?php  partials("form-control", [ "id" => "email", "label" => "Email", "type" => "email"]) ?>
			<?php  partials("form-control", [ "id" => "role", "label" => "Role", "type" => "text"]) ?>
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