<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <title>PT. SUBAGA MITRA SOLUSI-Maintenance</title>

  <style>
    body {
      background-image: url("bgweb.jpeg");
      background-color: #341e0a;

    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #212222;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="logo-subaga.png" alt="Image" height="45" width="90"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-md-end" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">BERANDA</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="data" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              DATA
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="datapembelian">Pembelian Customer</a></li>
              <li><a class="dropdown-item" href="datapemasanganalat">Pemasangan Alat</a></li>
              <li><a class="dropdown-item" href="dataketersediaan">Ketersediaan Barang</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="dataticketing">TICKETING</a>

          </li>
          <li class="nav-item">
            <a class="nav-link" href="datamaintenance">MAINTENANCE</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container-fluid" id="body"><br><br><br><br><br>
    <div class="row">
      <div class="col">
        <h1 style="color: #FF7803; text-align: center; font-size: 1cm; font-weight: bolder; margin-bottom: 10pt;">Data
          Ticketing</h1>
        <div class="table-responsive">
          <table class="table-dark">
            <thead>
              <tr>
                <th>Title</th>
                <th>City</th>
                <th>Device</th>
                <th>Request By</th>
                <th>Assign To</th>
                <th>Submit At</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($tickets as $ticket)
                <tr>
                  <td>{{ $ticket->title }}</td>
                  <td>{{ $ticket->client_slug }}</td>
                  <td>{{ $ticket->dev_id }}</td>
                  <td>{{ $ticket->request_by }}</td>
                  <td>{{ $ticket->assign_to }}</td>
                  <td>{{ $ticket->created_at }}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>

    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>
