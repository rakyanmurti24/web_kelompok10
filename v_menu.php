<div class="container-fluid">
    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_info"><i class="fas fa-plus fa-sm"></i>Tambah Info</button>

    <table class="table table-bordered">
        <tr>
            <th>NAMA MENU</th>
            <th>KETERANGAN</th>
            <th>KATEGORI</th>
            <th colspan="2">AKSI</th>
        </tr>

        <?php

        foreach($menu as $mnu) : ?>

        <tr>
            <td><?php echo $mnu->nama_dash ?></td>
            <td><?php echo $mnu->keterangan ?></td>
            <td><?php echo $mnu->kategori ?></td>
            <td><?php echo anchor ('admin/data_menu/edit/' .$mnu->id_dash, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
            <td><?php echo anchor ('admin/data_menu/hapus/' .$mnu->id_dash, '<div class="btn btn-success btn-sm"><i class="fa fa-trash"></i></div>') ?></td>

        </tr>

        <?php endforeach; ?>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_info" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Input Info</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <form action="<?php echo base_url(). 'admin/data_menu/tambah_aksi' ?>" method="post" enctype="multipart/form-data">
       <div class="form-group">
           <label>Nama Menu</label>
           <input type="text" name="nama_dash" class="form-control">
       </div>
       
       <div class="form-group">
           <label>Keterangan</label>
           <input type="text" name="keterangan" class="form-control">
       </div>

       <div class="form-group">
           <label>Kategori</label>
           <input type="text" name="kategori" class="form-control">
       </div>

       <div class="form-group">
           <label>Gambar</label>
           <input type="file" name="gambar" class="form-control">
       </div>
   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>
