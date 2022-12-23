<div class="container-fluid">
    <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#tambah_barang">
        <i class="fas fa-plus"></i>
        Tambah Barang
    </button>
    <?php echo $this->session->flashdata('message'); ?>
    
    <!-- Button trigger modal -->

    <table class="table table-bordered mt-5">
        <tr>
            <th>NO</th>
            <th>NAMAa BARANG</th>
            <th>KETERANGAN</th>
            <th>KATEGORI</th>
            <th>HARGA</th>
            <th>STOCK</th>
            <th colspan="3">AKSI</th>

        </tr>
        <?php
        $no = 1;
        foreach ($barang as $brg) {  ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $brg->nama_brg ?></td>
                <td><?php echo $brg->keterangan ?></td>
                <td><?php echo $brg->kategori ?></td>
                <td><?php echo $brg->harga ?></td>
                <td><?php echo $brg->stok ?></td>
              
                <td>
                    <?php echo anchor('admin/data_barang/edit/' . $brg->id_brg, '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>'); ?>
                    <!-- anchor untuk membuat kek link gitu dah  -->
                </td>
                <td>
                    <?php echo anchor('admin/data_barang/hapus/' . $brg->id_brg, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>'); ?>



                </td>
            </tr>
        <?php  }; ?>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_barang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">FORM INPUT PRODUK</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url() . 'admin/data_barang/tambah_aksi'; ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Nama Barang</label>
                        <input type="text" name="nama_brg" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Keterangan</label>
                        <input type="text" name="keterangan" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Kategori</label>                     
                        <select class="custom-select custom-select-lg mb-3" name="kategori">
                            <option selected>Pilih Kategori</option>
                            <option value="Living Room">Living Room</option>
                            <option value="Dining Room">Dining Room</option>
                            <option value="Bedroom">Bedroom</option>
                            <option value="Wall Art">Wall Art</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Harga</label>
                        <input type="text" name="harga" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Stok</label>
                        <input type="text" name="stok" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Gambar Produk</label> <br>
                        <input type="file" name="gambar" class="form-control">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>
