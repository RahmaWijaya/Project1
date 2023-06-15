<?= $this->extend("layouts/template");?>
<?= $this->section("content");?>

<div class="container my-5 col-4">
    <div class="card">
        <div class="card-header">
            <h3 class="text-center">Form Registrasi</h3>
</div>
<div class="card-body">
<!--slot flash message -->
<div class="row">
<div class="col">
<?php if(session()->getFlashData('gagal'));?>
<?php $erroes = session()->getFlashData('gagal')?>
<div class="alert alert-danger" role="alert">
    <ul>
        <?php foreach ($errors as $error) : ?>
            <li><?= $error ?></li>
            <?php endforeach?>
    </ul>
</div>
  
<?php if(session()->getFlashData('sukses')) : ?>
    <div class="alert alert-success" role="alert">
        <p><?= session()->getFlashData('sukses') ?></p>
    </div>
    <?php endif; ?>
</div>
</div>
<div class="row">
    <div class="col mx-auto">
        <form action="<?= base_url('registrasi/simpan') ?>" method="POST">
        <?= csrf_field() ?>
        <label>NAMA</label>
        <input type="text" class="form-control" name="nama" required>
        <label>Email</label>
        <input type="text" class="form-control" name="email" required>
        <label>Password</label>
        <input type="text" class="form-control" name="password" required>
        <label>Konfirmasi Password</label>
        <input type="text" class="form-control" name="konfirm_pass" required>
        <br>
        <input type="submit" class="bnt bnt-succes" value="Register">
</form>
</div>
</div>
</div>
</div>
</div>

<?= $this->endSection();?>