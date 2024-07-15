<h1>Tambah Layanan</h1>

<form action="<?= base_url('layanan/tambah') ?>" method="post">

<div>
    <label>Nama Layanan</label>
    <input type="text" name="nama_layanan" class="form-control">
    <?php echo form_error('nama_layanan', '<div class="text-small text-danger">', '</div>'); ?>
</div>

<div>
    <label>Deskripsi</label>
    <input type="text" name="deskripsi" class="form-control">
    <?php echo form_error('deskripsi', '<div class="text-small text-danger">', '</div>'); ?>
</div>

<button type="submit"class="btn btn-primary btn-sm">simpan</button>

</form> 