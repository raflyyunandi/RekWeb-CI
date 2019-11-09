<div class="container">
	<div class="row mt-3">
		<div class="card col-4">
			<div class="card-header">
			Form Ubah Data Mahasiswa
			</div>
				<div class="card-body">
					<form action="" method="post">
						<div class="form-group">
							<input type="hidden" name="id" value="<?= $peoples['id']?>">
							<label for="name">name</label>
							<input type="text" class="form-control" id="name" name="name" value="<?=$peoples['name'];?>" >
							<small class="form-text text-danger"><?= form_error('name');?></small>
						</div>

						<div class="form-group">
							<label for="address">address</label>
							<input type="text" class="form-control" id="address" name="address" value="<?=$peoples['address'];?>">
							<small class="form-text text-danger"><?= form_error('address');?></small>
						</div>

						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" class="form-control" id="email" name="email" value="<?=$peoples['email'];?>">
							<small class="form-text text-danger"><?= form_error('email');?></small>
						</div>

						<button type="submit" name="ubah" class="btn btn-outline-success float-right ml-2"> Ubah Data </button>
						<a href="<?=base_url()?>peoples" class="btn btn-outline-primary float-right">	Kembali </a>
					</form>
				</div>
			</div>
		</div>
	</div>