<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/style3.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/fontawesome/css/all.min.css">

  <title>Register</title>
</head>

<body class="bg-primary" style=" background: rgb(255,165,0); background: linear-gradient(196deg, rgba(255,165,0,1) 36%, rgba(255,105,0,1) 100%); ">
  <div class="container">
    <form method="post" class="form-container user" action="<?= base_url('registrasi/index');?>">
      <h3 class="text-judul">Daftar</h3>
      <div class="row mt-5">
        <div class="col-md-6">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user-pen"></i></span>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama"
                placeholder="Masukkan Nama">
            </div>
            <?php echo form_error('nama', '<div class="text-danger small ml-2">', '</div>'); ?>
          </div>
        </div>

        <div class="col-md-6">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Masukkan Username</label>
            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username"
                placeholder="Username">
            </div>
            <?php echo form_error('nama', '<div class="text-danger small ml-2">', '</div>'); ?>
          </div>
        </div>
        <div class="col-md-6 mt-2">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Masukkan Password</label>
            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-key"></i></span>
              <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Password" name="password_1">
            </div>
            <?php echo form_error('password_1', '<div class="text-danger small ml-2">', '</div>'); ?>
          </div>
        </div>
      
        <div class="col-md-6 mt-2">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Ulangi Password</label>
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-unlock-keyhole"></i></span>
            <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
              placeholder="Ulangi Password" name="password_2">
            </div>
            <?php echo form_error('password_1', '<div class="text-danger small ml-2">', '</div>'); ?>
        </div>
      </div>
    </div>



      <div class="mt-5">
        <div class="row">
          <div class="col-md-6 d-grid">
            <button type="submit" class="btn btn-outline-primary">Daftar</button>
          </div>
          <div class="col-md-6 d-grid">

            <button type="reset" class="btn btn-outline-danger">Hapus Data</button>
          </div>
        </div>

        <div class="mt-3">
          <label>Kamu Sudah Punya Akun ? <a href="<?=base_url('auth/login')?>" class="textForm text-hover">Login Disini</label>
        </div>
    </form>
  </div>
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
</body>

</html>