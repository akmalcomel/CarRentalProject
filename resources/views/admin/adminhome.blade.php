<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>UiTM | Admin page</title>
        <meta name="description" content="GARO is a real-estate template">
        <meta name="author" content="Kimarotec">
        <meta name="keyword" content="html5, css, bootstrap, property, real-estate theme , bootstrap template">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">

        <link rel="stylesheet" href="assets/css/normalize.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/fontello.css">
        <link href="assets/fonts/icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
        <link href="assets/fonts/icon-7-stroke/css/helper.css" rel="stylesheet">
        <link href="assets/css/animate.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/icheck.min_all.css">
        <link rel="stylesheet" href="assets/css/price-range.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.css">
        <link rel="stylesheet" href="assets/css/owl.theme.css">
        <link rel="stylesheet" href="assets/css/owl.transitions.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.4.1/dist/css/bootstrap.min.css">

        <style>

          h3 {
            margin-left:40px;
          }
          body {
            background-color: #E7E7EB;
          }

          h3 {
            margin-left:20px;
            color:black;
          }
          .card {
          background-color: #FFFFFF;
          border-radius: 10px;
        width: 300px;
        height: 100px;
        margin-bottom:25px;
            }

            .card .card-body .card-content  {

        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top:20px;
        color:#7171a6;
        font-weight: bold;
    }

    .card .card-text {

          text-align: center;
          display: flex;
          justify-content: center;
          align-items: center;
          margin-top:1px;
          font-size:30px;
          font-weight: bold;
      }

      table  {
        background-color: white;
    }

    .table {
        width: 100%;

    }
    .table-container {
        overflow-x: auto;
    }
        </style>

    </head>
    <body>
    <!-- Body content -->

    <!-- End top header -->

    @include('adminheader')
    <!-- End of nav bar -->

    <h3>Welcome Admin!</h3>

    <div class="container">
            <div class="row">
            <div class="col-md-4 mb-4">
                <!-- Box 1: Number of accounts -->
                <a href="/adminh">
                <div class="card">
                    <div class="card-body">
                        <div class="card-content" style="margin-top: 10px;">
                            <h5 class="card-title"><strong>Registered Owner Accounts</strong></h5>
                        </div>
                        <div class="card-text">{{$usercount}}</div>
                    </div>
                </div>
  </a>
            </div>

            <div class="col-md-4 mb-4">
                <!-- Box 2: Number of advertisements -->
                <a href="/adminp">
                <div class="card">
                    <div class="card-body">
                        <div class="card-content" style="margin-top: 10px;">
                            <h5 class="card-title"><strong>Current Property Listed</strong></h5>
                        </div>
                        <div class="card-text">{{$outputcount}}</div>
                    </div>
                </div>
              </a>
            </div>

            <div class="col-md-4 mb-4">
                <!-- Box 3: Number of owners -->
                <a href="/admins">
                <div class="card">
                    <div class="card-body">
                        <div class="card-content" style="margin-top: 10px;">
                            <h5 class="card-title"><strong>Student Account</strong></h5>
                        </div>
                        <div class="card-text">{{$stdcount}}</div>
                    </div>
                </div>
            </a>
            </div>
        </div>


        <!-- Table -->
        <div class="row mt-8">
            <div class="col-md-12 mt-8">
                <!-- Fetch the table data from the database and display here -->
              <div class="table-container">
              <h2>User Owner Table</h2>
              <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search Owner Name" style="margin-bottom: 10px;width: 200px;"></br>
                <table class="table" id="myTable">
                    <thead>
                        <tr>
                            <th>ID No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone No</th>
                            <th>Whatsapp Link</th>
                            <th>Property Listed</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <!--<tbody>


                    </tbody>-->
                    <tbody>
                        <!-- Loop through the data and generate table rows -->
                        @foreach ($user as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->phone}}</td>
                                <td>{{$user->wslink}}</td>
                                <td class="text-center">  @php
                                          $houseCount = 0;
                                          foreach ($housesPerOwner as $count) {
                                              if ($count->ownerID == $user->id) {
                                                  $houseCount = $count->houseCount;
                                                  break;
                                              }
                                          }
                                      @endphp
                                      {{ $houseCount }}
                                </td>
                                <td><a href={{"deluser/".$user['id']}} onclick="return confirm('Are you sure you want to delete this user?')" >Delete User</a></td>
                                <td>
                                    @if ($user->blocked)
                                        <a href="{{ route('users.unblock', $user->id) }}">Unblock</a>
                                    @else
                                        <a href="{{ route('users.block', $user->id) }}">Block</a>
                                    @endif

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
              </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.4.1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function myFunction() {
        // Declare variables
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");

        // Loop through all table rows, and hide those who don't match the search query
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[1];
            if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
            }
        }


        }
        </script>
</body>


