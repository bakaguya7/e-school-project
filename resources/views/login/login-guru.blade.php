<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Login E-SCHOOL</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link rel="stylesheet" href="css/style.css">

    <!-- jquery -->
    <script type="text/javascript" src="js/jquery.js"></script>

</head>

<body>

    <main>
        <div class="container-fluid login-custom">
            <section class="container">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-md-8 mb-3">
                        <h1 class="">GURU SMA NEGERI 1 YOGYAKARTA</h1>
                    </div>
                </div>

                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-8 col-lg-6 col-xl-4 offset-xl-1-1">
                        <img src="img/lg.png" class="logo-login" alt="Sample image" width="350px">
                    </div>

                    <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                        <form action="/login/siswa" method="POST">
                            @csrf
                            <!-- Username input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="email">Email</label>
                                <input type="text" id="email" class="form-control form-control-lg"
                                    placeholder="Masukkan email anda" />
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-3">
                                <label class="form-label" for="password">Password</label>
                                <input type="password" id="password" class="form-control form-control-lg"
                                    placeholder="Enter password" />
                            </div>

                            <div class="text-center text-lg-start mt-4 pt-2">
                                <button name="submit" type="submit" class="btn btn-lg">Login</button>
                            </div>

                        </form>
                    </div>
                </div>
            </section>

        </div>
    </main><!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="vendor/apexcharts/apexcharts.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/chart.js/chart.umd.js"></script>
    <script src="vendor/echarts/echarts.min.js"></script>
    <script src="vendor/quill/quill.min.js"></script>
    <script src="vendor/simple-datatables/simple-datatables.js"></script>
    <script src="vendor/tinymce/tinymce.min.js"></script>
    <script src="vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="js/main.js"></script>

</body>

</html>
