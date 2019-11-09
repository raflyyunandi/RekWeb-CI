<div class="container">
	<div class="row mt-4">
		<div class="card col-4">
			<div class="card-header">
			Form Tambah Data Peoples
			</div>
			<div class="card-body">
			<form action="" method="post">
				<div class="form-group">
					<label for="name">name</label>
					<input type="text" class="form-control" id="name" name="name" >
					<small class="form-text text-danger"><?= form_error('nama');?></small>
				</div>
				
				<div class="form-group">
					<label for="address">address</label>
					<input type="text" class="form-control" id="address" name="address" >
					<small class="form-text text-danger"><?= form_error('address');?></small>
				</div>
				
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" class="form-control" id="email" name="email" >
					<small class="form-text text-danger"><?= form_error('email');?></small>
				</div>
				
				<button type="submit" name="tambah" class="btn btn-outline-primary float-right">Tambah Data </button>
			</form>
			</div>
		</div>
	</div>
</div>