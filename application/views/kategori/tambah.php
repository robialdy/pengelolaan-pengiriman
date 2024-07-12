  <?php $this->load->view('components/header'); ?>

  <?php $this->load->view('components/sidebar'); ?>

  <div class="py-3">
  	<div class="card card-outline card-danger mx-auto " style="max-width: 700px;">
  		<div class="mx-auto mt-4">
  			<h2>Tambah Kategori</h2>
  		</div>

  		<div class="card-body">
  			<form action="" method="POST">
  				<div class="card-body">
  					<div class="form-group col-md-13">
  						<label for="nama_lengkap">Nama Kategori:</label>
  						<input type="text" class="form-control <?= form_error('nama_kategori') ? 'is-invalid' : ''; ?>" id="nama_kategori" name="nama_kategori" placeholder="Masukan kategori" value="<?= set_value('nama_kategori') ?>" autofocus>
  						<?= form_error('nama_kategori', '<small class="text-danger">', '</small>') ?>
  					</div>

  					<div class="form-group col-md-13">
  						<label for="alamat">Deskripsi:</label>
  						<textarea class="form-control <?= form_error('deskripsi') ? 'is-invalid' : ''; ?>" id="alamat" name="deskripsi" placeholder="Masukan deskripsi"><?= set_value('deskripsi') ?></textarea>
  						<?= form_error('deskripsi', '<small class="text-danger">', '</small>') ?>
  					</div>
  				</div>

  				<div class="text-right">
  					<button type="submit" class="btn btn-outline-dark" name="regis">Submit</button>
  				</div>
  		</div>
  		</form>
  	</div>
  </div>


  <?php $this->load->view('components/footer'); ?>
