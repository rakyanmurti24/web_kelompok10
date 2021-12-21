<div class="container-fluid">
    <h3><i class="fas fa-edit"></i>EDIT DATA MENU</h3>
 
    <?php foreach($menu as $mnu)  : ?>

        <form  method="post" action="<?php echo base_url(). 'admin/data_menu/update' ?>">

        <div class="for-group">
            <label>Nama Menu</label>
            <input type="text" name="nama_dash" class="form-control" value="<?php echo $mnu->nama_dash ?>">
        </div>
    
        <div class="for-group">
            <label>Keterangan</label>
            <input type="hidden" name="id_dash" class="form-control" value="<?php echo $mnu->id_dash ?>">
            <input type="text" name="keterangan" class="form-control" value="<?php echo $mnu->keterangan ?>">
        </div>
    
        <div class="for-group">
            <label>Kategori</label>
            <input type="text" name="kategori" class="form-control" value="<?php echo $mnu->kategori ?>">
        </div>

        <button type="submit" class="btn btn-primary btn-sm mt-3 "> Simpan </button>
    
    </form>

        <?php endforeach; ?>
</div>