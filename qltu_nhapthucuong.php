<!DOCTYPE html>
<html lang="vi">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>QLSB - Nhap thuc uong</title>

    <!--css-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/qlsb-admin.css" rel="stylesheet">
    <link href="css/sweetalert.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!--js-->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/sweetalert.min.js"></script>
    <script type="text/javascript">
        function deleted() {
          swal({   title: "Are you sure?",   text: "You will not be able to recover this record!",   type: "warning",   showCancelButton: true,   confirmButtonColor: "#DD6B55",   confirmButtonText: "Yes, delete it!",   closeOnConfirm: false }, function(){   swal("Deleted!", "Your record has been deleted.", "success"); });
        }
        function updated() {
            swal("Success!", "You record has been added!", "success");
        }
    </script>
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">QLSB Admin</a>
            </div>
            <!-- Top Menu-->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Nguyen Dinh Chau <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu-->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="#"><i class="fa fa-fw fa-edit"></i> Quan ly dat san</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-group"></i> Quan ly khach hang</a>
                    </li>
                    <li class="active">
                        <a href="qltu_nhapthucuong.php"><i class="fa fa-fw fa-glass"></i> Quan ly thuc uong</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>


        <!-- Page wrapper-->
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-home"></i>  <a href="#">Home</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Quản lý thức uống
                            </li>
                        </ol>
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="qltu_nhapthucuong.php">Nhập thức uống</a></li>
                            <li><a href="qltu_banthucuong.php">Bán thức uống</a></li>
                            <li><a href="qltu_doanhthu.php">Doanh thu</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div>
                            <h3>Nhập thức uống</h3>
                            <div class="row">
                                <button class="btn btn-primary" style="float: left" data-toggle="modal" data-target="#add-modal" style="text-decoration: none; text-color: white;">Thêm thức uống</button>
                                <form id="imaginary_container" action="qltu_nhapthucuong.php">
                                        <div class="input-group stylish-input-group" style="right:0px, width:300px">
                                            <input type="text" class="form-control" name="search" placeholder="Search">
                                            <span class="input-group-addon">
                                                <button type="submit">
                                                    <span class="glyphicon glyphicon-search"></span>
                                                </button>
                                            </span>
                                        </div>
                                </form>
                                <?php
                                  if(isset($_GET["search"])) {
                                    if($_GET["search"]==NULL){
                                      $result='<script>
                                        swal("Error!", "Thông tin tìm kiếm không được để trống!", "error");
                                      </script>';
                                      echo $result;
                                    }
                                  }
                                ?>
                            </div>

                            <hr>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Ten thuc uong</th>
                                        <th>Don vi tinh</th>
                                        <th>So luong nhap</th>
                                        <th>Gia nhap</th>
                                        <th>Thoi gian nhap</th>
                                        <th>Sua/Xoa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Nuoc khoang Thach Bich</td>
                                        <td>chai</td>
                                        <td>50</td>
                                        <td>10.000</td>
                                        <td>17/5/2016</td>
                                        <td><a href="#" data-toggle="modal" data-target="#add-modal">Sua</a>  <a href="#" onclick="deleted()">Xoa</a></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <div class="modal fade" id="add-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="add-modal-container">
            <h1>Them/Sua thuc uong</h1><br>
          <form>
            <input type="text" name="name" placeholder="Ten thuc uong">
            <input type="submit" name="add" class="add-modal-submit" value="Them" onclick="updated()">
          </form>
         </div>
        </div>
    </div>
</body>

</html>
