<head>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>


</head>
<style>
  table.dataTable {
    margin-top: -1em !important;
    margin-bottom: -1em !important;
  }

  div.dataTables_info {
    margin-bottom: -5em;
  }
</style>
<div class="col-xs-12 col-sm-12 content">
  <div class="panel panel-default">

    <div class="panel-body">
      <div class="content-row">
        <h2 class="content-row-title">Data Transport</h2>
        <div class="row">

          <div class="card">
            <div class="col-md-4">
              <?php echo anchor(site_url('transport/create'), 'Tambah', 'class="btn btn-primary"'); ?>

            </div>
            <div class="col-md-4">
            </div>
            <div class="col-md-4 text-right">
              <?php if ($this->session->userdata('level') == 'manajer') { ?>
                <a class="btn btn-danger" href="transport1"> <i class="glyphicon glyphicon-trash"></i> </a>
              <?php } ?>
            </div>
          </div>
          </br>
          </br></br>
          <div class="col-md-12">
            <table class="table table-bordered" style="margin-bottom: 10px" id="datatables">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Tanggal</th>
                  <th>No Kereta</th>
                  <th>Nama Kereta</th>
                  <th>Status</th>
                  <th>Jenis</th>
                  <th>Stamformasi</th>
                  <th>Relasi</th>
                  <th>Nama Stasiun</th>
                  <th>Berangkat</th>
                  <th>Tiba</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach ($transport_data as $transport) {
                ?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $transport->tanggal ?></td>
                    <td><?php echo $transport->no_kereta ?></td>
                    <td><?php echo $transport->nama_kereta ?></td>
                    <td><?php echo $transport->status ?></td>
                    <td><?php echo $transport->jenis ?></td>
                    <td><?php echo $transport->stamformasi ?></td>
                    <td><?php echo $transport->relasi ?></td>
                    <td><?php echo $transport->nama_stasiun ?></td>
                    <td><?php echo $transport->berangkat ?></td>
                    <td><?php echo $transport->tiba ?></td>

                    <td>
                      <?php
                      echo anchor(site_url('transport/update/' . $transport->id_transport), 'Ubah', 'class="btn btn-info btn-sm"');
                      echo ' ';
                      echo anchor(site_url('transport/satugapeka/' . $transport->no_kereta), 'Cetak', 'class="btn btn-warning btn-sm"');
                      echo ' ';
                      echo anchor(site_url('transport/delete/' . $transport->id_transport), 'Hapus', 'class="btn btn-danger btn-sm", onclick="javasciprt: return confirm(\'Apa Anda Yakin?\')"');

                      ?>
                    </td>
                  </tr>
                <?php
                }
                ?>
              </tbody>
            </table>
            <div class="row">
              <div class="col-md-6">
                <a class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
                <a href="gapeka" class="btn btn-info">Cetak GAPEKA</a>
              </div>

            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<script type="text/javascript">
  $(document).ready(function() {
    $('#datatables').DataTable({
      "lengthMenu": [
        [5, 10, 25, 50, -1],
        [5, 10, 25, 50, "All"]
      ],
      responsive: true
    });

  });
</script>