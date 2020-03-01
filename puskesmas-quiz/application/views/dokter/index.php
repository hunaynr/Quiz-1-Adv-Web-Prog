<!-- <?php
var_dump($dokter);
?> -->
<div class="container-fluid bg-dark text-white" style="height: 601px;">
<?php if($this->session->flashdata('flash-data')): ?>
<div class="row">
    <div class="col-2">

    </div>
    <div class="col-8">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Dokter <strong> berhasil </strong> <?= $this->session->flashdata('flash-data');?>
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
        <?php if(empty($dokter)):?>
        <div class="alert alert-danger" role="alert">
            Data Dokter tidak ditemukan
        </div>
        <?php endif; ?>
        
        <br><center><h2>Daftar Dokter</h2></center>

        <form action="" method="post">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Cari Data Dokter" name="keyword">
        <div class="input-group-append">
            <button class="btn btn-primary" type="submit">Cari</button>
        </div>
        </div><br>

        <table class="table table-striped table-dark">
            <tr>
                <th>
                    Nama
                </th>
                <th>
                    Action
                </th>
            </tr>
            <?php foreach($dokter as $dok):?>
            <tr>
                <td>
                    <?= $dok['nama_dok'];?>
                </td>
                <td>                                       
                        <a class="btn btn-danger" style="color: #ffffff" href="<?= base_url();?>dokter/hapus/<?= $dok['id_dok'];?>"
                        onclick="return confirm('Yakin data ini akan dihapus ?');">Hapus</a>            
                        <a class="btn btn-success" style="color: #ffffff" href="<?= base_url();?>dokter/edit/<?= $dok['id_dok'];?>">
                        Edit</a>
                        <a class="btn btn-primary" style="color: #ffffff" href="<?= base_url();?>dokter/detail/<?= $dok['id_dok'];?>">
                        Detail</a>
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
            <a href="<?= base_url();?>dokter/tambah" class="btn btn-primary">Tambah Data</a>
        </div>
        <div class="col-2">

    </div>
    </div>
</div>