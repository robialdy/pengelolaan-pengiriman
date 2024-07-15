  <?php $this->load->view('components/header'); ?>

  <?php $this->load->view('components/sidebar'); ?>


  	<div class="pt-3 bg-danger rounded">
  		<h3 class="pb-3 ps-3 fw-medium">Kategori</h3>
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
  		<a href="<?= base_url('kategori/tambah/') ?>" class="btn btn-dark float-right">
  			<i class="bi bi-plus-lg mr-1"></i>Kategori
  		</a>
  	</div>

  	<div class="card-body">
  		<table id="example2" class="table table-bordered table-striped">
  			<thead>
  				<tr>
  					<th style="width: 5%;">No</th>
  					<th>Nama kategori</th>
  					<th>deskripsi</th>
  					<th style="width: 15%;"></th>
  				</tr>
  			</thead>
  			<tbody>
  				<?php $i = 1; ?>
  				<?php foreach ($read_data_kategori as $ktg) : ?>
  					<tr>
  						<td><?= $i ?></td>
  						<td><?= $ktg["nama_kategori"] ?></td>
  						<td><?= $ktg["deskripsi"] ?></td>
  						<td align="center">
  							<a href="<?= base_url('kategori/edit/') ?><?= $ktg["slug"] ?>" class="btn btn-outline-primary"><i class="fas fa-edit"></i></a>
  							<a href="<?= base_url('kategori/delete/') ?><?= $ktg["slug"] ?>" class="btn btn-outline-danger" onclick="return confirm('Apakah anda yakin data akan di hapus?');"><i class="fas fa-trash"></i></a>
  						</td>
  					</tr>
  					<?php $i++; ?>
  				<?php endforeach; ?>
  			</tbody>
  		</table>
  	</div>
  </div> <!-- Tutup div card -->


  <?php $this->load->view('components/footer'); ?>
