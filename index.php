<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pronets Computers</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
 <!-- <link href="assets/img/favicon.png" rel="icon">-->
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


  <!-- =======================================================
  * Template Name: Bocor - v2.1.0
  * Template URL: https://bootstrapmade.com/bocor-bootstrap-template-nice-animation/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <?php include("inc/header.php");?>

  <!-- ======= Hero Section ======= -->
  <?php include("inc/top-banner.php");?>
  <!-- End Hero -->

  <main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">

        <div class="row no-gutters clients-wrap clearfix wow fadeInUp">

          <div class="col-lg-2 col-md-4 col-6">
            <div class="client-logo">
              <img src="assets/img/clients/HP.jpg" class="img-fluid" alt="" data-aos="flip-right">
            </div>
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <div class="client-logo">
              <img src="assets/img/clients/cisco.png" class="img-fluid" alt="" data-aos="flip-right" data-aos-delay="100">
            </div>
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <div class="client-logo">
              <img src="assets/img/clients/dell.png" class="img-fluid" alt="" data-aos="flip-right" data-aos-delay="200">
            </div>
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <div class="client-logo">
              <img src="assets/img/clients/tata.png" class="img-fluid" alt="" data-aos="flip-right" data-aos-delay="300">
            </div>
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <div class="client-logo">
              <img src="assets/img/clients/vodafone.png" class="img-fluid" alt="" data-aos="flip-right" data-aos-delay="400">
            </div>
          </div>

          

        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= About Section ======= -->
    <?php include("inc/about-section.php");?>
   <!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <?php include("inc/services.php");?>

   <!-- End Services Section -->

 <!-- ======= Frequently Asked Questions Section ======= -->
    <?php include("inc/our-clients.php");?>
    <!-- End Frequently Asked Questions Section -->

    <!-- ======= Features Section ======= -->
    <?php //include("inc/features.php");?>
   <!-- End Features Section -->

    <!-- ======= Project Section ======= -->
    <?php include("inc/our-projects.php");?>
    <!-- End Projects Section -->

    <!-- ======= Team Section ======= -->
    <?php //include("inc/team.php");?>
    <!-- End Team Section -->

    <!-- ======= Pricing Section ======= -->
    <?php include("inc/pricing.php");?>
    <!-- End Pricing Section -->

   

    <!-- ======= Contact Section ======= -->
    <?php include("contact-us.php");?>
   <!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include("inc/footer.php");?>
 <!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

 <script type="text/javascript">
  $(document).ready(function () {
   // alert("OK");
        $("#sendmessage").css("display", "none");
          $(document.body).on('click', '#submitme', function(){
                    var name = $('#name').val();
                    var email = $('#email').val();
                    var subject = $('#subject').val();
                    var message = $('#message').val();
                    
            $.ajax({
                type : 'POST',
                url : 'sendQuery.php',
                data : {name:name,email:email,subject:subject,message:message},
                async:false,
                success:function(response){
                //alert(response);
                      if(response=='s')
                      {

                           $("#sendmessage").css("display", "block");
                           
                                    $('#name').val('');
                                    $('#email').val('');
                                    $('#message').val('');
                           
                           
                      }
                      else if(response=='n'){
                           
                           $("#errormessage").html("Please contact to Admin");
                           $("#errormessage").css("display", "block");
                      }else{
                           $("#errormessage").html("Please contact to Admin");
                           $("#errormessage").css("display", "block");
                          
                      }
                      
                  
                      
                      
                } 
            });
                    
                    
          });
        
   });
  </script>
</body>

</html>