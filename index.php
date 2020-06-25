<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>PREDIKSI KUALITAS DAGING</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/vendor/modal-video/css/modal-video.min.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: eStartup - v2.1.0
  * Template URL: https://bootstrapmade.com/estartup-bootstrap-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header">
        <section id="hero2">
            <center>
                <h1>PREDIKSI KUALITAS DAGING</h1>
            </center>
        </section>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container" data-aos="fade-in">


            <img src="assets/img/DAGING.png" alt="Hero Imgs" data-aos="zoom-out" data-aos-delay="100" id="blah">

            <!-- <form>
                <input type="file" onchange="encodeImageFileAsURL(this)" id="img" name="img" accept="image/*"
                    class="btn-get-started scrollto">
            </form> -->
            <form method="POST" onsubmit="return check();" enctype="multipart/form-data" id="myForm">
                <input type="file" onchange="encodeImageFileAsURL(this)" id="plant_image" name="plant_image"
                    accept="image/*" class="btn-get-started scrollto">

                <button type="submit" onclick="check()" name="Submit" id="postSubmit"><b>Submit</b> </button>
            </form>
            <input type="hidden" id="base64">
            <h1 class="header">HASIL = <span id="hasilprediksi"> ... </span></h1>

        </div>
    </section><!-- End Hero Section -->

    <main id="main">

        <!-- ======= Get Started Section ======= -->




        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- Vendor JS Files -->
        <script src="assets/vendor/jquery/jquery.min.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>
        <script src="assets/vendor/modal-video/js/modal-video.min.js"></script>
        <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
        <script src="assets/vendor/superfish/superfish.min.js"></script>
        <script src="assets/vendor/hoverIntent/hoverIntent.js"></script>
        <script src="assets/vendor/aos/aos.js"></script>

        <!-- Template Main JS File -->
        <script src="assets/js/main.js"></script>
        <script>
        // function encodeImageFileAsURL(element) {
        //     var hasil;
        //     var file = element.files[0];

        //     if (element.files && element.files[0]) {
        //         var reader = new FileReader();

        //         reader.onload = function(e) {
        //             $('#blah')
        //                 .attr('src', e.target.result)
        //                 .width(768)
        //                 .height(398);
        //         };

        //         reader.readAsDataURL(element.files[0]);
        //     }

        //     var reader = new FileReader();
        //     reader.onloadend = function() {
        //         hasil = reader.result;
        //         console.log('RESULT', hasil)
        //         document.getElementById(
        //             "base64"
        //         ).innerHTML = hasil;
        //     }
        //     reader.readAsDataURL(file);


        // }

        // function check() {
        //     event.preventDefault();
        //     document.getElementById('hasilprediksi').innerHTML = "checking";
        //     const url = "http://127.0.0.1:8000/predict";
        //     var data = document.getElementById('base64').innerHTML;
        //     console.log('RESULT', data)
        //     const other_params = {
        //         headers: {
        //             "content-type": "application/json; charset=UTF-8"
        //         },
        //         body: JSON.stringify({
        //             "plant_image": data,
        //         }),
        //         method: "POST",
        //         mode: "cors"
        //     };

        //     fetch(url, other_params)
        //         .then(function(response) {
        //             if (response.ok) {
        //                 return response.json();
        //             } else {
        //                 throw new Error("Could not reach the API: " + response.statusText);
        //             }
        //         }).then(function(data) {
        //             document.getElementById("hasilprediksi").innerHTML = data.data;
        //             console.log('RESULT', data)
        //         }).catch(function(error) {
        //             document.getElementById("hasilprediksi").innerHTML = error.message;
        //             console.log('RESULT', error)
        //         });
        //     return true;
        // }
        </script>
</body>

</html>