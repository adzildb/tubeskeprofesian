<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row justify-content-md-center">
          <div class="col-6">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create User</h1>
              </div>
              <!-- Default form subscription -->
              <form class="text-center border border-light p-5" action="<?= site_url("Adduser/do_add")?>" method="POST">
              <!-- Username -->
              <input type="username" name="username" id="Username" class="form-control mb-4" placeholder="Username">

              <!-- Password -->
              <input type="password" name="password" id="Password" class="form-control mb-4" placeholder="Password">

              <!-- Create user button -->
              <Button type="submit" class="btn btn-info btn-block">Create User</button>


              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

</body>