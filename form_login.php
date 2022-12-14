<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style2.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/fontawesome/css/all.min.css">

    <title>Toko Online</title>
</head>

<body class="bg-primary"style=" background: rgb(255,165,0); background: linear-gradient(196deg, rgba(255,165,0,1) 36%, rgba(255,105,0,1) 100%); ">
    <div class="container">
        
        <form method="post" action="<?= base_url('auth/login');?>" class="form-container bg-white user">
        <?php echo $this->session->flashdata('pesan'); ?>
   
            <h3 class="textJudul mb-3 mt-2">Masuk</h3>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label textForm">Email</label>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
                    
                    <input type="text" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukkan Username" name="username">
                </div>
                <div id="emailHelp" class="form-text"><?php echo form_error('username', '<div class="text-danger ml-2">', '</div>'); ?></div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label textForm">Password</label>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-unlock-keyhole"></i></span>
                    <input type="password" class="form-control" id="exampleInputPassword" placeholder="Masukkan Password" name="password">
                </div>
                <div id="emailHelp" class="form-text"><?php echo form_error('password', '<div class="text-danger ml-2">', '</div>'); ?></div>
            </div>
            <div class="d-grid mt-5">
                <button type="submit" class="btn btn-outline-primary textForm">Masuk</button>
                
            </div>
            <div class="mt-1">
                <span class="textForm">Belum Punya Akun? <a href="<?= base_url('registrasi/index'); ?>" class="textForm text-hover">Daftar</a></span>
            </div>
        </form>
    </div>



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="<?= base_url() ?>assets/fontawesome/js/all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>