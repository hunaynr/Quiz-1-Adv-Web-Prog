<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <title><?= $title ?></title>
  </head>
  <body>
  
  <navbar> 
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
    <div class="container">
      <div class="row">
      <ul class="navbar-nav mx-auto"> 
      <?php for ($i = 0; $i < 25; $i++) : ?>
        <a class="nav-item nav-link"></a>
      <?php endfor; ?> 
        <a class="nav-item nav-link" style="color: #ffffff" href="<?= base_url(); ?>">Home</a>
        <a class="nav-item nav-link" style="color: #ffffff" href="<?= base_url(); ?>pasien">Pasien</a>
        <a class="nav-item nav-link" style="color: #ffffff" href="<?= base_url(); ?>dokter">Dokter</a>
        <a class="nav-item nav-link" style="color: #ffffff" href="<?= base_url(); ?>poliklinik">Poliklinik</a>
        <a class="nav-item nav-link" style="color: #ffffff" href="<?= base_url(); ?>transaksi">Transaksi</a>
      </ul>
      </div>      
    </div>     
</nav>