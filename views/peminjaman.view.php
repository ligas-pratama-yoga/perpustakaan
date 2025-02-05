<?php
partials("head");
partials("banner");
partials("navigation");
?>
<main>  
	<div class="container-fluid px-4">
		<h1 class="mt-4">Daftar Peminjaman</h1>
		<?php  partials("table", ["datas" => $datas]); ?>

		<!-- Modal untuk tambah data -->
		<?php  partials("modal-head", ["title" => "Tambah buku", "id" => "tambahData"]); ?>
		<form action="/peminjaman" method="post">
			<?php
            partials("form-control", [ 
                "id" => "status", 
                "label" => "Status", 
                "type" => "text", 
                "value" => "pinjam", 
                "readonly" => true
            ]);

            partials(
                "form-select",
                [
                            "id" => "id_users",
                            "label" => "Nama peminjam",
                            "data" => $data_users,
                            "value" => "nama"
                            ]
            );

            partials(
                "form-select",
                [
                "id" => "id_buku",
                "label" => "Judul buku",
                "data" => $data_buku,
                "value" => "judul"
                ]
            );
            ?>
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