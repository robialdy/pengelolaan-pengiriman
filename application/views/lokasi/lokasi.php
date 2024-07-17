<div class="card">
	<div class="card-header">
		<h1>Lokasi</h1>
	</div>
	<div class="card-body">
		<table id="example2" class="table table-bordered table-striped">
			<a href="<?php echo base_url('lokasi/tambah'); ?>" class="btn btn-primary">Tambah</a>
			<tr class="text-center">
				<th>No</th>
				<th>Kota</th>
				<th>Nama Cabang</th>
                <th>Kontak</th>
				<th>Aksi</th>
			</tr>
			<?php $i = 1;
			foreach ($lokasi as $s) : ?>
				<tr class="text-center">
					<td><?php echo $i ?></td>
					<td><?php echo $s['kota']; ?></td>
					<td><?php echo $s['nama_cabang']; ?></td>
                    <td><?php echo $s['kontak']; ?></td>
					<td>
						<a href="<?=base_url("lokasi/ubah/")?><?=$s['slug']?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
						<a href="<?=  base_url("lokasi/delete/")?><?=$s['slug']?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
					</td>
				</tr>
				<?php $i++; ?>
			<?php endforeach ?>
		</table>
	</div>
</div>
