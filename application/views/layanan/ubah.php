<h1>ubah Layanan</h1>

<form action="" method="post">

<div>
    <label>Nama Layanan</label>
    <input type="text" name="nama_layanan" class="form-control" value="<?= $layanan['nama_layanan'] ?>">
    <?php echo form_error('nama_layanan', '<div class="text-small text-danger">', '</div>'); ?>
</div>

<div>
    <label>Deskripsi/label>
    <input type="text" name="deskripsi" class="form-control" value="<?= $layanan ['deskripsi'] ?>">
    <?php echo form_error('deskripsi', '<div class="text-small text-danger">', '</div>'); ?>
</div>

<button type="submit"class="btn btn-primary btn-sm">ubah</button>

</form>