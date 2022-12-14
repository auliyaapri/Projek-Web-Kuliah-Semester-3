<div class="container-fluid">
    <h4>Invoice Pemesanan Produk</h4>
    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>No</th>
            <th>Nama Pemesan</th>
            <th>Alamat Pengiriman</th>
            <th>Bukti Gambar</th>
            <th>Tanggal Pemesanan</th>
            <th>Bank</th>
            <th>Jasa</th>
            <th>Aksi</th>
        </tr>
        <?php  $no= 1;  if (is_array($invoice) || is_object($invoice)) { ?>
            <?php foreach ($invoice as $inv) { ?>

        <tr>
           
            <td><?= $no++; ?> </td>
            <td><?= $inv->nama; ?> </td>
            <td><?= $inv->alamat; ?> </td>
            <td>

                <img src="<?= base_url() . '/bukti/' . $inv->gambar ?>" width="150px" alt="...">
            </td>

     
            <td><?php echo $inv->tgl_pesan; ?> </td>
            <td><?php echo $inv->bank; ?> </td>
            <td><?php echo $inv->jasa; ?> </td>
            <td>
                <?php echo anchor('admin/invoice/detail/'.$inv->id, '<div class="btn btn-sm btn-warning">Detail</div>' ) ?>
                <?php echo anchor('admin/invoice/hapus/'.$inv->id, '<div class="btn btn-sm btn-danger">Hapus</div>' ) ?>
                <!-- Art -->
            </td>
        </tr>

        <?php }; ?>
        <?php }; ?>
            
        
    </table>
</div>