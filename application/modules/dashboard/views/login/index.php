
  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-lg-6">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg">
                <div class="p-5">
                  <div class="text-center mb-5">
                    <img src="<?= base_url('assets/images/logo uin.png'); ?>" alt="logo-uin" style="width:35%">
                    <h4 class="text-uppercase text-dark font-weight-bold">upt perpustakaan</h4>
                  </div>
                  <?php if($this->session->flashdata('login_gagal')) : ?>
                  <div class="alert alert-danger">
                  <small><?= $this->session->flashdata('login_gagal');?></small>
                  </div>
                  <?php endif; ?>
                  <form class="user" method="post" action="<?= base_url('index.php/dashboard/login/proses_login'); ?>">
                    <div class="form-group">
                      <input name="email" type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                    </div>
                    <div class="form-group">
                      <input name="password" type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      Login
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>