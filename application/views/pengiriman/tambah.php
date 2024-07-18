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
						<label for="a">Kode Pengiriman:</label>
						<input type="text" class="form-control" id="a" name="kode_pengiriman" value="<?= $autoInvoice ?>" readonly>
						<?= form_error('kode_pengiriman', '<small class="text-danger">', '</small>') ?>
					</div>

					<div class="row">
						<div class="form-group col-md-6">
							<label for="b" class="form-label">Lokasi Awal:</label>
							<input type="text" class="form-control" id="b" name="lokasi_awal" value="Bandung" readonly>
							<?= form_error('lokasi_awal', '<small class="text-danger">', '</small>') ?>
						</div>

						<div class="form-group col-md-6">
							<label for="c" class="form-label">Lokasi Finish:</label>
							<select class="form-control" id="c" name="lokasi_finish">
								<option value="" selected disabled>Cari Lokasi Akhir</option>
								<?php foreach ($data_lokasi as $dlo) : ?>
									<option value="<?= $dlo["id_lokasi"] ?>"><?= $dlo["kota"] ?></option>
								<?php endforeach; ?>
							</select>
							<?= form_error('lokasi_finish', '<small class="text-danger">', '</small>') ?>
						</div>
					</div>

					<div class="row">
						<div class="form-group col-md-6">
							<label for="d" class="form-label">Layanan Pengiriman:</label>
							<select class="form-control" id="d" name="layanan">
								<option value="" selected disabled>Pilih Layanan</option>
								<?php foreach ($data_layanan as $dl) : ?>
									<option value="<?= $dl["id_layanan"] ?>"><?= $dl["nama_layanan"] ?></option>
								<?php endforeach; ?>
							</select>
							<?= form_error('layanan', '<small class="text-danger">', '</small>') ?>
						</div>

						<div class="form-group col-md-6">
							<label for="e" class="form-label">Kategori Barang:</label>
							<select class="form-control" id="e" name="kategori">
								<option value="" selected disabled>Pilih Kategori</option>
								<?php foreach ($read_data_kategori as $rdk) : ?>
									<option value="<?= $rdk["id_kategori"] ?>"><?= $rdk["nama_kategori"] ?></option>
								<?php endforeach; ?>
							</select>
							<?= form_error('kategori', '<small class="text-danger">', '</small>') ?>
						</div>
					</div>
				</div>

				<div class="text-right">
					<button type="submit" class="btn btn-outline-dark">Submit</button>
				</div>
			</form>
		</div>
	</div>
</div>

<?php $this->load->view('components/footer'); ?>
