
  <div class="container-fluid">
      <div class="row mb-5">
        <div class="col-md-6">
          <a class='btn btn-primary' href="<?= base_url(); ?>index.php/dashboard/download/index"><i class="fas fa-chevron-left"></i> Download</a>
        </div>
      </div>
  </div>
      <!-- Begin Page Content -->
        <div class="container-fluid">
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Download Logs</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Alamat IP</th>
                      <th>Sistem Operasi</th>
                      <th>Browser</th>
                      <th>Tanggal & Waktu</th>
                    </tr>
                  </thead>
                  <?php foreach($downloadlogs as $dwnldlgs):?>
                  <tbody>
                    <tr>
                      <td><?= $dwnldlgs['ip'];?></td>
                      <td><?= $dwnldlgs['os'];?></td>
                      <td><?= $dwnldlgs['browser'];?></td>
                      <td><?= $dwnldlgs['created_at'];?></td>
                    </tr>
                  </tbody>
                  <?php endforeach; ?>

                </table>
              </div>
            </div>
          </div>
        </div>
