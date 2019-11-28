<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row justify-content-md-center">
          <div class="col-6">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Lihat User</h1>
              </div>
              <form >
              <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Username</th>
                        <th scope="col">Password</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
					<?php foreach($result as $row){ $i = 1; ?>
                        <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $row->username;?></td>
                        <td><?php echo $row->password; ?></td>
                        <td><a class="btn btn-warning" href="<?= site_url("user/edit/". $row->username)?>" id="exampleFirstName">Edit</a><a href="<?= site_url("user/delete/". $row->username) ?>" class="btn btn-danger" id="exampleFirstName">Delete</a></td>
                        </tr>
                        <?php } ?>
                    </tbody>
              </table>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

</body>