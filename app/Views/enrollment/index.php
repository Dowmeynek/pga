<?= $this->include('resources/head') ?>

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar d-flex align-items-center justify-content-center">
  <div class="layout-container">
      <!-- Layout container -->
      <div class="layout-page">
        <!-- Navbar -->
        <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
          <!-- ... (existing navbar code) ... -->
        </nav>
        <?= $this->include('admin/content/sidebar') ?>
        <!-- / Navbar -->

        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Content -->

          <div class="container-xxl flex-grow-1 container-p-y">
          <h1 class="card-title text-primary">Enrollment Form</h1>
          <p class="mb-10">
                          Fill Up The Following Forms.
                        </p>
            <div class="row">
              <div class="col-lg-18 mb-4 order-0">
                <div class="card">
                  <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                      <div class="card-body">
                        <h5 class="card-title text-primary">Student Information</h5>
                        <a href="javascript:;" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#learnerModal">Learner Info</a>
                      </div>
                      <?= $this->include('enrollment/content/learner') ?>

                    </div>

                    <div class="col-sm-7">
                      <div class="card-body">
                        <h5 class="card-title text-primary">Parents Information</h5>
                        <a href="javascript:;" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#motherModal">Mother Info</a>
                        <a href="javascript:;" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#fatherModal">Father Info</a>
                        <a href="javascript:;" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#guaModal">Guardian Info</a>

                      </div>

                      <?= $this->include('enrollment/content/mother') ?>
                      <?= $this->include('enrollment/content/father') ?>
                      <?= $this->include('enrollment/content/gua') ?>

                    </div>

                    <div class="col-sm-7">
                      <div class="card-body">
                        <h5 class="card-title text-primary">Schools Attendend Information</h5>
                        <a href="javascript:;" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#preschoolModal">Pre-School Info</a>
                        <a href="javascript:;" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#g1_g3Modal">Grade 1 to 3 Info</a>
                        <a href="javascript:;" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#g4_g6Modal">Grade 4 to 6 Info</a>
                        <a href="javascript:;" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#juniorModal">Junior School Info</a>
                      </div>
                      <?= $this->include('enrollment/content/preschool') ?>
                      <?= $this->include('enrollment/content/g1_g3') ?>
                      <?= $this->include('enrollment/content/g4_g6') ?>
                      <?= $this->include('enrollment/content/junior') ?>

                    </div>


                    <div class="col-sm-5 text-center text-sm-left">
                      <div class="card-body pb-0 px-0 px-md-4">
                        <img src="../assets/img/illustrations/man-with-laptop-light.png" height="140" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
                
              
                    </div>
                    <!-- /.card -->
                </div> <!-- /.dito -->



            </div>
            <!-- / Content -->

            
            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>
    </div>
  </div>
  <!-- / Layout wrapper -->

  <?= $this->include('resources/js') ?>
  <script src="assets/js/book.js"></script>
</body>

</html>