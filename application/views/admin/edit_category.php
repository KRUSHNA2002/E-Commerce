<form action="<?= base_url() ?>admin/update_category" method="post">
	<div class="container-fluid p-4 bg-white">
		<div class="row">
			<div class="col-md-12">
				<h4>Edit Category</h4>
			</div>
			<div class="col-md-12">
				<input type="hidden" name="category_id" value="<?= $category_list[0]['category_id'] ?>">
				<label class="mb-2">Enter category name</label>
				<input type="text" name="category_name" value="<?= $category_list[0]['category_name'] ?>"
					class="form-control">
			</div>
			<div class="col-md-12 mt-3 text-center">
				<button class="btn btn-primary btn-sm">update Category</button>
			</div>
		</div>
	</div>
</form>