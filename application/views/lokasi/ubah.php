<h1>ubah Layanan</h1>

<form action="" method="post">

<div>
    <label>Nama Kota</label>
    <input type="text" name="kota" class="form-control" value="<?= $lokasi['kota'] ?>">
    <?php echo form_error('kota', '<div class="text-small text-danger">', '</div>'); ?>
</div>

<div>
    <label>nama cabang</label>
    <input type="text" name="nama_cabang" class="form-control" value="<?= $lokasi ['nama_cabang'] ?>">
    <?php echo form_error('deskripsi', '<div class="text-small text-danger">', '</div>'); ?>
</div>

<div>
    <label>Kontak</label>
    <input type="text" name="kontak" class="form-control" value="<?= $lokasi ['kontak'] ?>">
    <?php echo form_error('kontak', '<div class="text-small text-danger">', '</div>'); ?>
</div>

<button type="submit"class="btn btn-primary btn-sm">ubah</button>

</form>