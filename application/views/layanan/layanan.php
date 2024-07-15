<div class="card">
	<div class="card-header">
		<h1>Layanan</h1>
	</div>
	<div class="card-body">
		<table id="example2" class="table table-bordered table-striped">
			<a href="<?php echo base_url('layanan/tambah'); ?>" class="btn btn-primary">Tambah</a>
			<tr class="text-center">
				<th>No</th>
				<th>Nama Layanan</th>
				<th>Deskripsi</th>
				<th>Aksi</th>
			</tr>
			<?php $i = 1;
			foreach ($layanan as $s) : ?>
				<tr class="text-center">
					<td><?php echo $i ?></td>
					<td><?php echo $s['nama_layanan']; ?></td>
					<td><?php echo $s['deskripsi']; ?></td>
					<td>
						<a href="" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
						<a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
					</td>
				</tr>
				<?php $i++; ?>
			<?php endforeach ?>
		</table>
	</div>
</div>
