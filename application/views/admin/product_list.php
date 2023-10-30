<div class="container-fluid p-4 bg-white">
	<div class="row table-responsive">
		<div class="col-md-12">
			<h4>Product List</h4>
		</div>
		<div class="col-md-12">
			<table class="table table-bordered table-sm">
				<tr>
					<th>EDIT</th>
					<th>DELETE</th>
					<th>SN</th>
					<th>Category</th>
					<th>Name</th>
					<th>Price</th>
					<th>Company</th>
					<th>Image</th>
				</tr>
				<?php
				foreach ($products as $key => $row) {
					?>
					<tr>
						<th>
							<a href="<?= base_url() ?>admin/edit_product/<?= $row['product_id'] ?>">
								<button class="btn btn-primary p-1"><i class="fa fa-edit "></i></button>
							</a>
						</th>
						<th>
							<a href="<?= base_url() ?>admin/remove_product/<?= $row['product_id'] ?>">

								<button class="btn btn-danger p-1"><i class="fa fa-trash "></i></button>
							</a>
						</th>
						<th>
							<?= $key + 1 ?>
						</th>
						<th>
							<?= $row['category_name'] ?>
						</th>
						<th>
							<?= $row['product_name'] ?>
						</th>
						<th>
							<?= $row['product_price'] ?>
						</th>
						<th>
							<?= $row['product_company'] ?>
						</th>
						<th><img src="<?= base_url() ?>uploads/<?= $row['product_image'] ?>"></th>
					</tr>
					<?php
				}
				?>
			</table>
		</div>
	</div>
</div>