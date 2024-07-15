  <?php $this->load->view('components/header', $tittle); ?>

  <?php $this->load->view('components/sidebar'); ?>

  <div class="pt-3">
  	<div class="pt-3 bg-danger rounded">
  		<h3 class="pb-3 ps-3 fw-medium">Pengiriman</h3>
  	</div>
  </div>

  <?php if ($this->session->flashdata('success')) : ?>
  	<div class="alert alert-success d-flex align-items-center" role="alert">
  		<div>
  			<i class="fas fa-check-circle"></i>
  			Success <?= $this->session->flashdata('success') ?>
  		</div>
  	</div>
  <?php endif; ?>

  <div class="card">
  	<div class="card-header">
  		<a href="<?= base_url('pengiriman/tambah/') ?>" class="btn btn-dark float-right">
  			<i class="bi bi-plus-lg mr-1"></i>Pengiriman
  		</a>
  	</div>

  	<div class="card-body">
  		<table id="example2" class="table table-bordered table-striped">
  			<thead>
  				<tr>
  					<th style="width: 5%;">No</th>
  					<th>Kode Pengiriman</th>
  					<th style="border-bottom: solid red;">Lokasi Asal</th>
  					<th style="border-bottom: solid green;">Lokasi Tujuan</th>
  					<th>Layanan</th>
  					<th>Kategori</th>
  					<th style="width: 15%;"></th>
  				</tr>
  			</thead>
  			<tbody>
  				<?php if (!empty($read_data_pengiriman)) : ?>
  					<?php $i = 1; ?>
  					<?php foreach ($read_data_pengiriman as $rdp) : ?>
  						<tr>
  							<td><?= $i ?></td>
  							<td><?= $rdp->kode_pengiriman ?></td>
  							<td><?= $rdp->domisili_asal ?></td>
  							<td></td>
  							<td></td>
  							<td><?= $rdp->nama_kategori ?></td>
  							<td align="center">
  								<!-- <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#modal-">
  									<i class="fas fa-edit"></i>
  								</button> -->
  								<a href="<?= base_url('pengiriman/edit/') . $rdp->slug ?>" class="btn btn-outline-primary"><i class="fas fa-edit"></i></a>
  								<a href="<?= base_url('pengiriman/delete/') . $rdp->slug ?>" class="btn btn-outline-success" onclick="return confirm('Apakah pengiriman telah selesai?');"><i class="fas fa-check"></i></a>
  							</td>
  						</tr>
  						<?php $i++; ?>
  					<?php endforeach; ?>
  				<?php else : ?>
  					<tr>
  						<td colspan="7" align="center">Data Kosong</td>
  					</tr>
  				<?php endif; ?>
  			</tbody>
  		</table>
  	</div>
  </div> <!-- Tutup div card -->

  <!-- EDIT NANTI SKRNG COBA PAKE HALAMAN DULU -->

  <?php foreach ($read_data_pengiriman as $rdp) : ?>
  	<div class="modal fade" id="modal-<?= $rdp->id_pengiriman ?>">
  		<div class="modal-dialog modal-dialog-centered modal-lg">
  			<div class="modal-content" style="border-radius: 20px; box-shadow: none; border: none;">
  				<div class="modal-header">
  					<h4 class="modal-title">Edit Jalur Pengiriman</h4>
  					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
  						<span aria-hidden="true">&times;</span>
  					</button>
  				</div>
  				<div class="modal-body">

  					<form action="<?= base_url('pengiriman/tambah') ?>" method="POST">
  						<div class="card-body">
  							<div class="form-group col-md-13">
  								<label for="a">Kode Pengiriman:</label>
  								<input type="text" class="form-control" id="a" name="kode_pengiriman" value="<?= $rdp->kode_pengiriman ?>" disabled>
  							</div>

  							<div class="row">
  								<div class="form-group col-md-6">
  									<label for="b" class="form-label">Lokasi Awal:</label>
  									<input type="text" class="form-control" id="b" name="lokasi_awal" value="Bandung" readonly>
  								</div>

  								<div class="form-group col-md-6">
  									<label for="c" class="form-label">Lokasi Finish:</label>
  									<select class="form-control" id="c" name="lokasi_finish">
  										<option value="" selected disabled>Cari Lokasi Akhir...</option>
  										<option value="">Surabaya</option>
  									</select>
  								</div>
  							</div>

  							<div class="row">
  								<div class="form-group col-md-6">
  									<label for="d" class="form-label">Layanan Pengiriman:</label>
  									<select class="form-control" id="d" name="layanan">
  										<option value="" selected disabled>Pilih Layanan...</option>
  										<option value="">JNE KILAT</option>
  									</select>
  								</div>

  								<div class="form-group col-md-6">
  									<label for="e" class="form-label">Kategori Barang:</label>
  									<select class="form-control" id="e" name="kategori">
  										<option value="" selected disabled>Pilih Kategori...</option>
  										<?php foreach ($data_kategori as $rdk) : ?>
  											<option value="<?= $rdk["id_kategori"] ?>"><?= $rdk["nama_kategori"] ?></option>
  										<?php endforeach; ?>
  									</select>
  								</div>
  							</div>
  						</div>

  				</div>
  				<div class="modal-footer justify-content-between">
  					<div></div>
  					<div class="text-right">
  						<button type="submit" class="btn btn-outline-dark">Submit</button>
  					</div>
  				</div>
  				</form>
  			</div>
  			<!-- /.modal-content -->
  		</div>
  		<!-- /.modal-dialog -->
  	</div>
  	<!-- /.modal -->
  <?php endforeach; ?>

  <?php $this->load->view('components/footer'); ?>
