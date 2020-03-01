<div class="container-fluid bg-dark text-white" style="height: 601px;">
<div class="row">
    <div class="col-2">

    </div>
    <div class="col-8">
    <br><center><h2>Detail Data Dokter</h2></center>
    <table class="table table-striped table-dark">
            <tr>
                <th>
                    NIP
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
            </tr>
            <tr>
                <td>
                    <?= $dokter['nip'];?>
                </td>
                <td>                                       
                    <?= $dokter['nama_dok'];?>
                </td>
                <td>                                       
                    <?= $dokter['jenis_kelamin'];?>
                </td>
                <td>                                       
                    <?= $dokter['alamat'];?>
                </td>
            </tr>
        </table>
    </div>
    <div class="col-2">

    </div>
</div>
<div class="row">
    <div class="col-2">

    </div>
    <div class="col-8">
        <a class="btn btn-primary" style="color: #ffffff" href="<?= base_url();?>dokter" class="btn btn-primary">Back</a>
    </div>
    <div class="col-2">

    </div>
</div>
</div>