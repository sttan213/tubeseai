<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" 
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" 
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" 
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>PT. SUBAGA MITRA SOLUSI</title>
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
  

    <section>
        <div style="position: relative; text-align: center;">
            <img src="bgweb.jpeg" alt="">
            <div style="position: absolute; top: 10%; color: rgb(240, 146, 39)">
                <h3 style="text-align:center; ">Data Pemasangan Alat</h3>
                <table class="table table-dark table-striped ">
                    <thead>
                        <tr>
                            <th scope="col">client_slug</th>
                            <th scope="col">wajib_pajak_id</th>
                            <th scope="col">name</th>
                            <th scope="col">address</th>
                            <th scope="col">type</th>
                            <th scope="col">contact_name</th>
                            <th scope="col">contact_phone</th>
                            <th scope="col">dev_id</th>
                            <th scope="col">active</th>
                            <th scope="col">gsm</th>
                            <th scope="col">method</th>
                            <th scope="col">dev_created_at</th>
                            <th scope="col">dev_modified_at</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>@mdo</td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Jacob</td>
                          <td>Thornton</td>
                          <td>@fat</td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td colspan="2">Larry the Bird</td>
                          <td>@twitter</td>
                        </tr>
                      </tbody>
                </table>
            </div>
        </div>
    </section>
    <footer class="text-center" style=" background-image: linear-gradient(to right, rgb(0, 0, 0) , rgb(0, 0, 0) , rgb(38, 10, 2));">
        <p style="color: white"> COPYRIGHT © SUBAGA MITRA SOLUSI 2022</p>
    </footer>
</body>
</html>