<form action="<?= base_url() ?>admin/save_category" method="post">
	<div class="container-fluid p-4 bg-white">
		<div class="row">
			<div class="col-md-12">
				<h4>Add New Category</h4>
			</div>
			<div class="col-md-12">
				<label class="mb-2">Enter category name</label>
				<input type="text" name="Category_name" class="form-control">
			</div>
			<div class="col-md-12 mt-3 text-center">
				<button class="btn btn-primary btn-sm">Save Category</button>
			</div>
		</div>
	</div>
</form>

<div class="container-fluid p-3 bg-white text-center">
	<table class="table table-bordered " width="100%">
		<tr>
			<th></th>
			<th>SN</th>
			<th>NAME</th>
		</tr>
		<?php

		foreach ($category_list as $key => $row) {
			?>
			<tr>
				<td width="1%">
					<a href="<?= base_url() ?>admin/remove_category/<?= $row['category_id'] ?>"
						onclick="return confirm('Are you sure')">
						<button class="btn btn-danger btn-sm p-1"><i class="fa fa-trash"></i></button>
					</a>
				</td>
				<td width="1%">
					<a href="<?= base_url() ?>admin/edit_category/<?= $row['category_id'] ?>">
						<button class="btn btn-gray btn-sm p-1">Edit</button>
					</a>
				</td>
				<td>
					<?= $key + 1 ?>
				</td>
				<td>
					<?= $row['category_name'] ?>
				</td>
			</tr>
			<?php
		}

		?>
	</table>
</div>