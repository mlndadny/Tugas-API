<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.dataTables.css">

    <!-- Bootstrap Icons CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <title>.:Movies App - @yield('title'):.</title>

    <style>
      body {
        background-color: #ffe6f7;
      }

      .bg-primary {
        background-color: #ff85c2 !important;
      }

      .btn-cute {
        background-color: #ff4081;
        border: none;
        color: white;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        transition-duration: 0.4s;
        cursor: pointer;
        border-radius: 25px;
        font-weight: bold;
      }

      .btn-cute:hover {
        background-color: white;
        color: #ff4081;
        border: 2px solid #ff4081;
      }

      .nav-pills .nav-link.active {
        background-color: #ff69b4;
      }

      .card {
        border-radius: 15px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.2);
      }

      .card-header {
        background-color: #ff69b4;
        color: white;
        border-radius: 15px 15px 0 0;
      }

      .dropdown-menu {
        background-color: #ff69b4;
        border-radius: 15px;
      }

      .dropdown-menu .dropdown-item {
        color: white;
      }

      .dropdown-menu .dropdown-item:hover {
        background-color: #ff85c2;
      }

      .alert-success {
        background-color: #ff85c2;
        border-color: #ff85c2;
        color: white;
      }

      .alert-danger {
        background-color: #ff5288;
        border-color: #ff5288;
        color: white;
      }
    </style>
  </head>
  <body>
   <div class="container-fluid">
        <!-- HEADER -->
        <div class="row">
          <div class="col-md-12 bg-primary py-2">
            <div class="dropdown float-right">
              <button class="btn btn-cute dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Menu <i class="bi bi-caret-down-fill"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">{{ Auth::user()->name ?? "" }}</a>
                <a class="dropdown-item" href="/user">Change Password</a>
                <a class="dropdown-item" href="/logout">LOGOUT</a>
              </div>
            </div>
          </div>
        </div>

        <!-- MENU (Sebelah Kiri) -->
        <div class="row">
            <div class="col-md-1 vh-100">
                <div class="row mt-4">
                    <div class="col-12">
                      <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link {{($key == 'home') ? 'active' : '' }}" id="v-pills-home-tab" href="/home">Home</a>
                        <a class="nav-link {{($key == 'rental') ? 'active' : '' }}" id="v-pills-profile-tab" href="/rental">Rental PS</a>
                        <a class="nav-link" id="v-pills-messages-tab" href="#">Messages</a>
                        <a class="nav-link" id="v-pills-settings-tab" href="#">Settings</a>
                      </div>
                    </div>
                  </div>
                </div>
                
            <div class="col-md-11 vh-100">
                <div class="card mt-4">
                    <div class="card-header"></div>
                    <div class="card-body">
                        <!-- Menampilkan pesan sukses atau kesalahan -->
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @yield('artikel')
                    </div>
                </div>
            </div>
        </div>
   </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>
    <script>
      new DataTable('#example');
    </script>
  </body>
</html>
