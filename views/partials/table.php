<div class="card mb-4">
	<div class="card-header">
		<div class="container-fluid d-flex justify-content-between align-items-center">
			<span>
				<i class="fas fa-table me-1"></i>
				Data Barang
			</span>

			<!-- Button trigger modal -->
			<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#tambahData">
				Tambah data
			</button>
		</div>
	</div>
	<div class="card-body">
		<table id="datatablesSimple">
			<thead>
				<tr>
					<?php partials("table-title", ["datas" => $datas]) ?>
					<th>Aksi</th>
				</tr>
			</thead>
			<tfoot>
				<tr>
					<?php partials("table-title", ["datas" => $datas]) ?>
					<th>Aksi</th>
				</tr>
			</tfoot>
			<tbody>
				<?php foreach($datas as $data): ?>
				<tr>
					<?php foreach($data as $value): ?>
					<td><?= $value ?></td>
					<?php endforeach; ?>
					<td>
						<button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal"
							data-bs-target=<?= "#editData{$data['id']}" ?>>
							<i class="fas fa-pen"></i>
						</button>
					</td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>