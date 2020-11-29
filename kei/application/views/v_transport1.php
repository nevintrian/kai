<style>
    .stepper .stepper-arrow {
        width: 0px;
        height: 0px;
        right: 0px;
    }

    .stepper-arrow {
        opacity: 0;
    }
</style>

<div class="col-xs-12 col-sm-12 content">
    <div class="panel panel-default">

        <div class="panel-body">
            <div class="content-row">
                <h2 class="content-row-title">Tambah Data Transport</h2>
                <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="varchar">No Kereta</label>
                        <input input type="number" min="0" title="Masukkan data angka saja" class="form-control" required name="no_kereta" id="no_kereta" placeholder="no kereta" value="<?php echo $no_kereta; ?>" />
                    </div>
                    <div class="form-group">
                        <label for="varchar">Nama Kereta</label>
                        <input type="text" class="form-control" required name="nama_kereta" id="nama_kereta" placeholder="nama kereta" value="<?php echo $nama_kereta; ?>" />
                    </div>
                    <div class="form-group">
                        <label for="varchar">Status </label>
                        <select name="status" required class="form-control">
                            <option value="aktif">aktif</option>
                            <option value="nonaktif">nonaktif</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="varchar">Jenis</label>
                        <input type="text" class="form-control" required name="jenis" id="jenis" placeholder="jenis" value="<?php echo $jenis; ?>" />
                    </div>
                    <div class="form-group">
                        <label for="varchar">Stamformasi</label>
                        <input type="text" class="form-control" required name="stamformasi" id="stamformasi" placeholder="stamformasi" value="<?php echo $stamformasi; ?>" />
                    </div>
                    <div class="form-group">
                        <label for="varchar">Nama Stasiun</label>
                        <input type="text" class="form-control" required name="nama_stasiun" id="nama_stasiun" placeholder="nama stasiun" value="<?php echo $nama_stasiun; ?>" />
                    </div>
                    <div class="form-group">
                        <label for="varchar">Relasi</label>
                        <input type="text" class="form-control" required name="relasi" id="relasi" placeholder="relasi" value="<?php echo $relasi; ?>" />
                    </div>
                    <div class="form-group">
                        <label for="varchar">Berangkat</label>
                        <input type="text" class="form-control" required name="berangkat" id="berangkat" placeholder="berangkat" value="<?php echo $berangkat; ?>" />
                    </div>
                    <div class="form-group">
                        <label for="varchar">Tiba</label>
                        <input type="text" class="form-control" required name="tiba" id="tiba" placeholder="tiba" value="<?php echo $tiba; ?>" />
                    </div>
                    <input type="hidden" name="id_transport" value="<?php echo $id_transport; ?>" />
                    <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
                    <a href="<?php echo site_url('transport') ?>" class="btn btn-default">Cancel</a>
                </form>

            </div>
        </div>
    </div>
</div>