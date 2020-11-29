<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>KAI</title>
  <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
  <base href="<?php echo base_url(); ?>">
  <link rel="shortcut icon" href="image/hh.png">
  <link rel="bookmark" href="favicon_16.ico" />
  <link rel="stylesheet" href="assets/dist/css/site.min.css">
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800,700,400italic,600italic,700italic,800italic,300italic" rel="stylesheet" type="text/css">
  <link href="assets/bootstrap-datepicker.css" rel="stylesheet">
  <script type="text/javascript" src="assets/dist/js/site.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>

  <script src="https://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.js"></script>
  <link href="https://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.css" rel="stylesheet" />

  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
  .navbar img {
    border: 3px solid #888888;
  }
</style>



<body>
  <nav role="navigation" class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">


        </a>
      </div>


      <ul class="nav navbar-nav">
        <li>
          <a<img src="image/hh.png" class="img-responsive img-circle" alt="" width="50px" left="15px"></a>
        </li>

        <li><b><a href="<?php echo base_url() ?>home" type="submit" style="color: lightgrey">
              <h5> &nbsp; &nbsp;KAI</h5>
            </a></b></li>

        <!-- <li class="disabled"><a href="#">Link</a></li> -->






      </ul>












      <div class="navbar-form navbar-right">







        <?php
        if ($this->session->userdata('username') != null) {
        ?>

          <a href="<?php echo base_url() ?>dashboard" type="submit" class="btn btn-primary"><?php echo $this->session->userdata("username") ?> </a> <!-- session username -->
          <a href="<?php echo base_url() ?>login/logout" type="submit" class="btn btn-danger" onclick="javasciprt: return confirm('Apa Anda Yakin?')">Logout </a> <!-- session username -->
      </div>
    </div>


  <?php } else { ?>



    <a href="<?php echo base_url() ?>login" type="submit" class="btn btn-primary">login </a> <!-- session username -->
    <a href="<?php echo base_url() ?>daftar" type="submit" class="btn btn-primary">Register </a> <!-- session username -->
    </div>
    </div>
  <?php  } ?>
  </div>
  </div>
  </nav>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="assets/dataTables/datatables.min.css"></script>