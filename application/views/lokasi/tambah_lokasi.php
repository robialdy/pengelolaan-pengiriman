<h1>Tambah Lokasi</h1>

<form action="<?= base_url('lokasi/tambah') ?>" method="post">

<div>
    <label>Kota</label>
    <input type="text" name="kota" class="form-control">
    <?php echo form_error('kota', '<div class="text-small text-danger">', '</div>'); ?>
</div>

<div>
    <label>Nama Cabang</label>
    <input type="text" name="nama_cabang" class="form-control">
    <?php echo form_error('nama_cabang', '<div class="text-small text-danger">', '</div>'); ?>
</div>

<div>
    <label>Kontak</label>
    <input type="text" name="kontak" class="form-control">
    <?php echo form_error('kontak', '<div class="text-small text-danger">', '</div>'); ?>
</div>

<button type="submit"class="btn btn-primary btn-sm">simpan</button>

</form> 