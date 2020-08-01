<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>การประกวดปลากัดสวยงาม "อำเภอบางระกำ"</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.0.5/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@100;300;600&display=swap" rel="stylesheet">
</head>
<body class="hold-transition layout-top-nav" style="font-family: 'Kanit', sans-serif;">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="/" class="navbar-brand">
        <img src="../../assets/images/fish.png" alt="Fish Contest Logo" class="brand-image img-circle"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Fighting Fish Contest 2020</span>
      </a>
      
      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="index3.html" class="nav-link">แบบฟอร์มสมัคร</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">จัดการข้อมูลสมัคร</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">จัดการข้อมูลดิบ</a>
          </li>
        </ul>

      </div>
    </div>
  </nav>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">การประกวดปลากัดสวยงาม "อำเภอบางระกำ"</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title m-0">ข้อมูลผู้สมัคร</h5>
              </div>
              <div class="card-body">
                <div class="form-group">
                    <label for="name">ชื่อ - นามสกุล</label>
                    <input type="text" class="form-control" name="name" id="name">
                </div>
                <div class="form-group">
                    <label for="address">ที่อยู่</label>
                    <textarea cols="30" rows="3" class="form-control" name="address" id="adress"></textarea>
                </div>
                <div class="form-group">
                    <label for="tel">โทรศัพท์</label>
                    <input type="text" class="form-control" name="tel" id="tel">
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title m-0">ข้อมูลผู้รับฝาก</h5>
              </div>
              <div class="card-body">
                <div class="form-group">
                    <label for="name_accept">ชื่อ - นามสกุล</label>
                    <input type="text" class="form-control" name="name_accept" id="name_accept">
                </div>
                <div class="form-group">
                    <label for="address_accept">ที่อยู่</label>
                    <textarea cols="30" rows="3" class="form-control" name="address_accept" id="adress_accept"></textarea>
                </div>
                <div class="form-group">
                    <label for="tel_accept">โทรศัพท์</label>
                    <input type="text" class="form-control" name="tel_accept" id="tel_accept">
                </div>
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title m-0">ข้อมูลการลงทะเบียนเข้าประกวด</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover text-nowrap">
                            <thead class="text-center">
                                <th width="10%">ที่</th>
                                <th width="60%">ประเภทปลา</th>
                                <th width="10%">รุ่น</th>
                                <th width="20%">จำนวนปลา</th>
                            </thead>
                            <tbody>
                                <?php foreach($fish_list as $data) { ?>
                                    <tr>
                                        <td class="text-center"><?php echo $data->running_number ?></td>
                                        <td><?php echo $data->name ?></td>
                                        <td class="text-center"><?php echo $data->series ?></td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                <?php } ?>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
<!-- Bootstrap 4 -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<!-- AdminLTE App -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.0.5/js/adminlte.min.js"></script>
</body>
</html>
