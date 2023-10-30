<h1>Add product</h1>
<form action="<?= base_url() ?>/admin/save_product" method="post" enctype="multipart/form-data">
	<div class="container-fluid bg-white p-3">
		<div class="row">

			<div class="col-md-4 mt-3">
				<h4>select category</h4>
				<select class="form-control" name="product_category" style="border:1px solid black" required>
					<?php
					foreach ($category_list as $key => $row) {
						?>
						<option></option>
						<option value="<?= $row['category_id'] ?>"><?= $row['category_name'] ?></option>
						<?php
					}
					?>
				</select>
			</div>
			<div class="col-md-4 ">
				<h4 class="mt-3 mb-2 ">product name</h4>
				<input type="text" class="form-control p-2 " style="border:1px solid black" name="product_name"
					required>
			</div>

			<div class="col-md-4 ">
				<h4 class="mt-3 mb-2">product price</h4>
				<input type="number" class="form-control p-2 " style="border:1px solid black" name="product_price"
					required>
			</div>
			<div class="col-md-4 ">
				<h4 class="mt-3 mb-2">duplicate price</h4>
				<input type="number" class="form-control p-2 " style="border:1px solid black" name="duplicate_price">
			</div>
			<div class="col-md-4 ">
				<h4 class="mt-3 mb-2">product company</h4>
				<input type="text" class="form-control p-2 " style="border:1px solid black" name="product_company">
			</div>
			<div class="col-md-4 ">
				<h4 class="mt-3 mb-2">product color</h4>
				<input type="text" class="form-control p-2 " style="border:1px solid black" name="product_color">
			</div>
			<div class="col-md-8 ">
				<h4 class="mt-3 mb-2">product image</h4>
				<input type="file" class="form-control p-2 " style="border:1px solid black" name="product_image"
					required>
			</div>
			<div class="col-md-4 ">
				<h4 class="mt-3 mb-2">product details</h4>
				<input type="text" class="form-control p-2 " style="border:1px solid black" name="product_details">
			</div>
			<div class="col-md-12 text-center">
				<button class="btn btn-primary btn-sm mt-3">Save product</button>
			</div>
		</div>
	</div>
</form>