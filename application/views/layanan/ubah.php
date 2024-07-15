<h1>ubah Siswa</h1>

<form action="" method="post">

<div>
    <label>Nama Siswa</label>
    <input type="text" name="nama_layanan" class="form-control" value="<?= $kelas['nama_layanan'] ?>">
    <?php echo form_error('nama_layanan', '<div class="text-small text-danger">', '</div>'); ?>
</div>

<div>
    <label>Kelas</label>
    <input type="text" name="deskripsi" class="form-control" value="<?= $kelas['deskripsi'] ?>">
    <?php echo form_error('deskripsi', '<div class="text-small text-danger">', '</div>'); ?>
</div>

<button type="submit"class="btn btn-primary btn-sm">ubah</button>

</form>