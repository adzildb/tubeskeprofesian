        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Kas Credit</h1>
          </div>
			<p class="mb-4">Halaman untuk melakukan input Kas Credit pada Kas SPP</p>
          <!-- Content Row -->
          <div class="row">
            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Input Kas Credit</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
				
               <form class="user" action="<?= site_url("spp/do_add_credit/")?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
				  <div class="col-sm-9 mb-3 mb-sm-0">
				  <h6 class="h6 font-weight-bold text-gray-900">Tanggal</h6> <input type="date" class="form-control" id="exampleFirstName" name="tanggal" placeholder="Tanggal Transaksi">
                  </div>
                </div>
               <div class="form-group">
				  <div class="col-sm-9 mb-3 mb-sm-0">
				  <h6 class="h6 font-weight-bold text-gray-900">Keterangan</h6> <input type="text" class="form-control" id="exampleFirstName" name="keterangan" placeholder="Keterangan">
                  </div>
               </div>
			   <div class="form-group">
				  <div class="col-sm-9 mb-3 mb-sm-0">
				  <h6 class="h6 font-weight-bold  text-gray-900">Kas Credit</h6> <input type="number" class="form-control" id="exampleFirstName" name="nominal" placeholder="Nominal">
                  </div>
                </div>
				<div class="form-group">
				  <div class="col-sm-9 mb-3 mb-sm-0">
				  <button class="btn btn-primary" id="exampleFirstName">Submit</button>
                  </div>
                </div>
              </form>
                </div>
              </div>
            </div>

            <!-- Pie Chart -->
            
          <!-- Content Row -->
          

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      