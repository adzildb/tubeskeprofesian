        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Kas Debit</h1>
          </div>
			<p class="mb-4">Halaman untuk melakukan input Kas Debit pada Kas DSP - PSB</p>
          <!-- Content Row -->
          <div class="row">
            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Input Kas Debit</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
				
               <form class="user" action="<?= site_url("user/do_edit/". $result->username)?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
				  <div class="col-sm-9 mb-3 mb-sm-0">
				  <h6 class="h6 font-weight-bold text-gray-900">Username</h6> <input type="text" class="form-control" id="exampleFirstName" name="username" value="<?= @$result->username; ?>">
                  </div>
                </div>
               <div class="form-group">
				  <div class="col-sm-9 mb-3 mb-sm-0">
				  <h6 class="h6 font-weight-bold text-gray-900">Password</h6> <input type="password" class="form-control" id="exampleFirstName" name="password" >
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

      