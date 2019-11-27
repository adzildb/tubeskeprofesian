        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Pemasukan Kas</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>

          <!-- Content Row -->
          <div class="row">
            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
              <div class="card shadow mb-4">
                
                <!-- Card Body -->
                <div class="card-body">
				
               <form class="user" action="<?= site_url('spp/rekap')?>" method="get">
                <div class="form-group">
				  <div class="col-sm-9 mb-3 mb-sm-0">
				  <h6 class="h6 text-gray-900">Bulan</h6>
                  <select name="bulan" class="form-control">
                    <option value="Pilih Bulan">--- Pilih Bulan ---</option>  
                    <option value="01">Januari</option>
                    <option value="02">Februari</option>
                    <option value="03">Maret</option>
                    <option value="04">April</option>
                    <option value="05">Mei</option>
                    <option value="06">Juni</option>
                    <option value="07">Juli</option>
                    <option value="08">Agustus</option>
                    <option value="09">September</option>
                    <option value="10">Oktober</option>
                    <option value="11">November</option>
                    <option value="12">Desember</option>
                  </select>
				  <button class="btn btn-primary" id="exampleFirstName">Submit</button>
                </div>
                </div>
              </form>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Debit</th>
                        </tr>
                    </thead>
                    <tbody>
					<?php foreach($bulan as $row): $i = 1; ?>
                        <tr>
                        <td scope="row"><?php echo $i++ ?></td>
                        <td><?php echo $row->tanggal; ?></td>
                        <td><?php echo $row->keterangan; ?></td>
                        <td><?php echo $row->nominal; ?></td>
                        </tr>
					<?php endforeach; 
					print_r($this->db->last_query());
						// die($bulan);?>
                    </tbody>
                </table>
                </div>
              </div>
            </div>

            <!-- Pie Chart -->
            
          <!-- Content Row -->
          

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      