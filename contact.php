<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Stocker - Stock Market Website Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Topbar Start -->
        <?php include('includes/topbar.php');?>
        <!-- Topbar End -->

        <!-- Navbar & Hero Start -->
        <?php include('includes/navbar.php');?>

            <!-- Header Start -->
            <div class="container-fluid bg-breadcrumb">
                <div class="container text-center py-5" style="max-width: 900px;">
                    <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Contact Us</h4>
                    <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item active text-primary">Contact</li>
                    </ol>    
                </div>
            </div>
            <!-- Header End -->
        </div>
        <!-- Navbar & Hero End -->

        <!-- Contact Start -->
        <div class="container-fluid contact py-5">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-xl-6">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <div class="bg-light rounded p-5 mb-5">
                                <h4 class="text-primary mb-4">Get in Touch</h4>
                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <div class="contact-add-item">
                                            <div class="contact-icon text-primary mb-4">
                                                <i class="fas fa-map-marker-alt fa-2x"></i>
                                            </div>
                                            <div>
                                                <h4>Address</h4>
                                                <p class="mb-0">Address: KHASRA NO 26/2, G/F GALI NO.- 3 &4 SANGAM VIHAR, DELHI, WAZIRABAD VILLAGE, Delhi, Delhi, 110084, India</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="contact-add-item">
                                            <div class="contact-icon text-primary mb-4">
                                                <i class="fas fa-envelope fa-2x"></i>
                                            </div>
                                            <div>
                                                <h4>Mail Us</h4>
                                                <p class="mb-0">pasmandavikasfoundation@gmail.com</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="contact-add-item">
                                            <div class="contact-icon text-primary mb-4">
                                                <i class="fa fa-phone-alt fa-2x"></i>
                                            </div>
                                            <div>
                                                <h4>Telephone</h4>
                                                <p class="mb-0">(+91)9810851819</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="contact-add-item">
                                            <div class="contact-icon text-primary mb-4">
                                                <i class="fab fa-firefox-browser fa-2x"></i>
                                            </div>
                                            <div>
                                                <h4>Tax ID</h4>
                                                <p class="mb-0"> AAOCP7557N</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-light p-5 rounded h-100 wow fadeInUp" data-wow-delay="0.2s">
                                <h4 class="text-primary">Send Your Message</h4>
                                <p class="mb-4">We’re here to help you with any inquiries, feedback, or support you may need. Whether you have questions about our programs, want to get involved, or need assistance, feel free to reach out. Your voice matters to us, and we look forward to connecting with you.</p>
                                <form>
                                    <div class="row g-4">
                                        <div class="col-lg-12 col-xl-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0" id="name" placeholder="Your Name">
                                                <label for="name">Your Name</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-xl-6">
                                            <div class="form-floating">
                                                <input type="email" class="form-control border-0" id="email" placeholder="Your Email">
                                                <label for="email">Your Email</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-xl-6">
                                            <div class="form-floating">
                                                <input type="phone" class="form-control border-0" id="phone" placeholder="Phone">
                                                <label for="phone">Your Phone</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-xl-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0" id="project" placeholder="Project">
                                                <label for="project">Your Project</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0" id="subject" placeholder="Subject">
                                                <label for="subject">Subject</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <textarea class="form-control border-0" placeholder="Leave a message here" id="message" style="height: 160px"></textarea>
                                                <label for="message">Message</label>
                                            </div>

                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100 py-3">Send Message</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
                        <div class="rounded h-100">
                            <iframe class="rounded h-100 w-100" 
                            style="height: 400px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387191.33750346623!2d-73.97968099999999!3d40.6974881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1694259649153!5m2!1sen!2sbd" 
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->

        <!-- Footer Start -->
        <?php include ('includes/footer.php');?>

        <!-- Copyright End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>

</html>