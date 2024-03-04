<?php
include 'konek.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register Member</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="sb-admin/css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-info">

    
    <div class="row justify-content-center">
            <div class="col-md-5 mt-5">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
       
                <!-- Nested Row within Card Body -->
                <div class="p-5">
							<div class="text-center">
								<h4 class="h4 text-gray-900 mb-4">Registrasi Member</h1>
                            </div>
                            <form action="" method="POST">
                                <div class="form-group">
                                <input type="text" name="nm_member" class="form-control" placeholder="Nama Pelanggan" required>
                                        </div>
                                <div class="form-group">
                                    <input type="text" name="alamat_member" class="form-control" placeholder="Alamat" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="telepon" class="form-control" placeholder="Nomor Telepon" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                                </div>
								<div class="form-group">
                                    <input type="file" name="gambar" class="form-control" placeholder="Upload Gambar" required>
                                
								</div>
								<div class="form-group">
                                    <input type="text" name="NIK" class="form-control" placeholder="NIK" required>
                                </div>
								
                                <button type="submit" value="submit" class="btn btn-primary btn-block" name="submit">Register</button>
                                </from>
         <?php
            if(isset($_POST['submit'])){

         
          $nm_member = $_POST['nm_member'];
          $alamat_member = ucwords($_POST['alamat_member']);
          $telepon = $_POST['telepon'];
		  $email   = $_POST['email'];
		  $gambar = $_POST['gambar'];
		  $NIK = $_POST['NIK'];

          $insert = mysqli_query($conn, "INSERT INTO member VALUES (
             null,
                      '".$nm_member."',
                      '".$alamat_member."',
					  '".$telepon."',
					  '".$email."',
					  '".$gambar."',
                      '".$NIK."')
            ");
          if($insert){
            echo '<script>alert("registrasi member berhasil")</script>';
            echo '<script>window.location="login.php";</script>';
          }else{
            echo 'gagal '.mysqli_error($conn);
          }
        }
        ?>
                                <hr>
                                
                            <div class="text-center">
                                <a class="small" href="login.php">Back to login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="sb-admin/vendor/jquery/jquery.min.js"></script>
    <script src="sb-admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="sb-admin/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="sb-admin/js/sb-admin-2.min.js"></script>
</body>

</html>