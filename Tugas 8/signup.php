<!DOCTYPE html>
<html>
<head>
  <title>Pendaftaran Akun</title>
    <link rel="icon" href="../../Assets/logo.png" >
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <link rel="stylesheet" href="../../css/style.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
        <section id="navigation-bar">
                <nav class="navbar navbar-default">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle nav-sideButton" data-toggle="collapse" data-target="#myNavbar">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>                        
                            </button>
                            <a href="index_after_login.html"><img src="../../Assets/logo.png" class="nav-logo"></a>
                        </div>
                        <div class="collapse navbar-collapse nav-content" id="myNavbar">
                            <ul class="nav navbar-nav">
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Fakultas<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="kategori_produk.html"><img src="../../Assets/logo_ub.png" alt="" class="img-fakultas"> FILKOM</a></li>
                                        <li><a href="#"><img src="../../Assets/logo_ub.png" alt="" class="img-fakultas"> FTP</a></li>
                                        <li><a href="#"><img src="../../Assets/logo_ub.png" alt="" class="img-fakultas"> FT</a></li>
                                        <li><a href="#"><img src="../../Assets/logo_ub.png" alt="" class="img-fakultas"> FK</a></li>
                                    </ul>
                                </li>
                                <li class="nav-menu"><a href="About_us.html">Tentang Kami</a></li>
                            </ul>
                            <form class="navbar-form navbar-left">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search">
                                            <div class="input-group-btn">
                                                <a href="pencarian_produk.html" class="btn btn-default" type="submit">
                                                    <i class="glyphicon glyphicon-search"></i>
                                                </a>
                                            </div>
                                        </div>
                                </form>
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Daftar</a></li>
                                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Masuk</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
                </section>
                <section id="Pendaftaran">
    <div class="container-fluid">
            
        <div class="col-md-12" style="padding: 4%">
            <div class="col-md-6">
                <img src="../../Assets/logo.png" style="margin:40% 0 0 25%;">
            </div>
                
                <div class="col-md-6" style="margin-top: 3%; border: 1px solid #12a8bb; padding: 2% 2%; text-align:left; float:right;">
                    
                    
                        <div class="form_pendaftaran_toko">
                                <form  action="getHasil" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="text">Nama Lengkap:</label>
                                        <input type="text" class="form-control" name="nama">
                                    </div>
                                    <div class="form-group">
                                        <label for="text">Email:</label>
                                        <input type="email" class="form-control" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="text">Nomor Telepon:</label>
                                        <input type="text" class="form-control" name="notel-user">
                                    </div>
                                    <label for="text">Jenis Kelamin:</label>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optradio" value="Pria" checked="checked">Pria</label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optradio" value="Wanita">Wanita</label>
                                    </div>
    
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label for="text">Asal Perguruan Tinggi:</label>
                                            <input type="text" class="form-control" name="college">
                                        </div>
    
                                        <div class="form-group">
                                            <label for="text">Nama Pengguna:</label>
                                            <input type="text" class="form-control" name="username">
                                        </div>
                                        
                                        <label for="pwd">Password:</label>
                                        <input type="password" class="form-control" name="pwd">
                                    </div>
                                       <div class="form-group">
                                    <label for="Jenis_User">Jenis User</label>
                                        <select class="form-control" name="Jenis_User">
                                         <option value="Cumlaude">Cumlaude (Rp 200.000 / Bulan)</option>
                                         <option value="Berprestasi">Berprestasi (Rp 100.000 / Bulan)</option>
                                         <option value="Aktif">Aktif (Free)</option>
                                 </select>
                                    </div>
                                    <label class="custom-file" style="margin-bottom: 2%;"> Upload Foto Anda
                                     <input type="file" name="upload" class="custom-file-input">
                                     <span class="custom-file-control"></span>
                                    </label>
                                    <br>
                                     <label for="pwd">Deskripsikan Anda:</label>
                                    <textarea class="form-control" name="desc" style="margin-bottom: 2%;"></textarea>
                                    
                                    <button type="button" class="btn btn-lg btn-daftar-toko" data-toggle="modal" data-target="#myModal">Daftar</button>
                                    <div class="modal fade" id="myModal" role="dialog">
                                            <div class="modal-dialog modal-sm">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                  <h4 class="modal-title">Pendaftaran Berhasil</h4>
                                                </div>
                                                <div class="modal-body">
                                                  <p>Pendaftaran Berhasil</p>
                                                </div>
                                                <div class="modal-footer">
                                                  
                                                  <button type="submit" class="btn btn-primary">OK</button></a>
                                                  
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                </form>
                             
                                 <label style="margin-top: 15px;">
                                   <input type="checkbox" name="persetujuan" style="margin-right: 10px;"> Dengan menekan Daftar Akun, saya mengkonfirmasi telah menyetujui <a href="#">Syarat dan Ketentuan</a>, serta <a href="#">Kebijakan Privasi</a> KuliahKu.</label>
                            </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>
