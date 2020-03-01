<!-- <?php
var_dump($pasien);
?> -->
<div class="container-fluid bg-dark text-white" style="height: 601px;">
<?php if($this->session->flashdata('flash-data')): ?>
<div class="row">
    <div class="col-2">

    </div>
    <div class="col-8">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Pasien <strong> berhasil </strong> <?= $this->session->flashdata('flash-data');?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
        </div>
    </div>
    <div class="col-2">

    </div>
</div>
<?php endif; ?>
  
<div class="row">
    <div class="col-2">

    </div>
    <div class="col-8">
        <?php if(empty($pasien)):?>
        <div class="alert alert-danger" role="alert">
            <center>Data Pasien tidak ditemukan</center>
        </div>
        <?php endif; ?>

        <br><center><h2>Daftar Pasien</h2></center>

        <form action="" method="post">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Cari Data Pasien" name="keyword">
        <div class="input-group-append">
            <button class="btn btn-primary" type="submit">Cari</button>
        </div>
        </div><br>
        
    <ul class="list-group">
        <table class="table table-striped table-dark">
            <tr>
                <th>
                    No KTP
                </th>
                <th>
                    Nama
                </th>
                <th>
                    Jenis Kelamin
                </th>
                <th>
                    Alamat
                </th>
                <th>
                    Action
                </th>
            </tr>
        <?php foreach($pasien as $psn):?>
            <tr>
                <td>
                    <?= $psn['no_ktp']; ?>
                </td>
                <td>
                    <?= $psn['nama_pas']; ?>
                </td>
                <td>
                    <?= $psn['jenis_kelamin']; ?>
                </td>
                <td>
                    <?= $psn['alamat']; ?>
                </td>
                <td>                        
                        <a class="btn btn-danger" style="color: #ffffff" href="<?= base_url();?>pasien/hapus/<?= $psn['id_pas'];?>"
                        onclick="return confirm('Yakin data ini akan dihapus ?');">Hapus</a>            
                        <a class="btn btn-success" style="color: #ffffff" href="<?= base_url();?>pasien/edit/<?= $psn['id_pas'];?>">
                        Edit</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </table>
</div>
<div class="col-2">

    </div>
        </div>
    <div class="row">
    <div class="col-2">

    </div>
        <div class="col-8">
            <a href="<?= base_url();?>pasien/tambah" class="btn btn-primary">Tambah Data</a>
        </div>
        <div class="col-2">

    </div>
    </div>
</div>