<?php
partials("head");
partials("banner");
partials("navigation");
?>
<main>
	<div class="container-fluid px-4">
		<h1 class="mt-4">Test</h1>
		<ol class="breadcrumb mb-4">
			<li class="breadcrumb-item active">TEST ASEM</li>
		</ol>
		<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editData"
			onclick="getId(this)" id-class="10">Click</button>
		<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
			Launch demo modal
		</button>

		<!-- Modal -->
		<div class="modal fade" id="editData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
			aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
						<button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						...
					</div>
					<div class="modal-footer">
						<button type="button" onclick="getBackMyId(this)" class="btn btn-secondary"
							data-bs-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary">Save changes</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
<script>
	function getId(e) {
		let modal = document.querySelector('#editData')
		modal.id = "editData" + e.getAttribute('id-class')
	}

	function getBackMyId(e) {
		let modal = e.parentNode.parentNode.parentNode.parentNode
		modal.id = "editData"
	}
</script>
<?php

partials("footer");
partials("foot");

?>