<?php

include "./include/header.php";



?>








<h1>Add Banner</h1>
<div class="card">
	<div class="card-header bg-primary text-light">
		Add New Banner
	</div>
	<div class="card-body">
		<form action="" method="">

			<div class="row align-items-center">
				<div class="col-lg-3">
					<label for="img"><img src="https://cdn.pixabay.com/photo/2017/02/07/02/16/cloud-2044823_960_720.png" alt=" " style="width: 80%; display: block;">
					<input type="file" name="img" class="d-none" id="img">
				</div>
				<div class="col-lg-8">
					<label class="w-100">
						Enter A Banner Title<span class="text-danger">*</span>
						<input type="text" name="title" class="form-control">
					</label>
					<label class="w-100">
						Enter A Banner Video<span class="text-danger">*</span>
						<input type="text" name="video" class="form-control">
					</label>
					<label class="w-100">
						Enter A Banner Description<span class="text-danger">*</span>
						<textarea name="description" class="form-control"></textarea>
					</label>
					<button class="btn btn-primary">Save</button>
				</div>
			</div>

		</form>
		





	</div>




	</div>

<?php

include "./include/footer.php";

?>


