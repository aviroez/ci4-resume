<?php
    use App\Models\ResumeModel;
    $baseUrlLib = base_url('resume-2-master');
    $resumeModel = new ResumeModel();
    $resumes = $resumeModel->findAll();
    $tags = $resumeModel->select('tag')->groupBy('tag')->findAll();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Resume Website Template Free Download</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Resume Website Template Free Download" name="keywords">
        <meta content="Resume Website Template Free Download" name="description">

        <!-- Favicon -->
        <link href="<?=$baseUrlLib?>/img/favicon.ico" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:300;400;600;700;800&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="<?=$baseUrlLib?>/lib/slick/slick.css" rel="stylesheet">
        <link href="<?=$baseUrlLib?>/lib/slick/slick-theme.css" rel="stylesheet">
        <link href="<?=$baseUrlLib?>/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="<?=$baseUrlLib?>/css/style.css" rel="stylesheet">
    </head>

    <body data-spy="scroll" data-target=".navbar" data-offset="51">
        <div class="wrapper">
            <div class="sidebar">
                <div class="sidebar-header">
                    <img src="<?=$baseUrlLib?>/img/profile.jpg" alt="Image">
                </div>
                <div class="sidebar-content">
                    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                        <a href="#" class="navbar-brand">Navigation</a>
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarCollapse">
                            <ul class="nav navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="#header">Home<i class="fa fa-home"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#about">About<i class="fa fa-address-card"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#experience">Experience<i class="fa fa-star"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#service">Specification<i class="fa fa-tasks"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#portfolio">Portfolio<i class="fa fa-file-archive"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#contact">Contact<i class="fa fa-envelope"></i></a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="sidebar-footer">
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="content">
                <!-- Header Start -->
                <div class="header" id="header">
                    <div class="content-inner">
                        <p>I'm</p>
                        <h1>M Arif Firdaus</h1>
                        <h2></h2>
                        <div class="typed-text">Full Stack Developer</div>
                    </div>
                </div>
                <!-- Header End -->
                
                <!-- Large Button Start -->
                <div class="large-btn">
                    <div class="content-inner">
                        <a class="btn" href="#"><i class="fa fa-download"></i>Resume</a>
                        <a class="btn" href="#"><i class="fa fa-hands-helping"></i>Hire Me</a>
                    </div>
                </div>
                <!-- Large Button End -->
                
                <!-- About Start -->
                <div class="about" id="about">
                    <div class="content-inner">
                        <div class="content-header">
                            <h2>About Me</h2>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-6 col-lg-5">
                                <img src="<?=$baseUrlLib?>/img/about.jpg" alt="Image">
                            </div>
                            <div class="col-md-6 col-lg-7">
                                <p>
                                    Graduated from Magister Teknik Informatika in Amikom Yogyakarta University.
                                    10 Years experience as Full Stack & Mobile Developer.
                                    Able to work & collaborate remotely. Happy to learn new things about technology & management.
                                </p>
                                <a class="btn" href="#">Hire Me</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="skills">
                                    <div class="skill-name">
                                        <p>Design</p><p>85%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="skill-name">
                                        <p>SEO</p><p>95%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="skills">
                                    <div class="skill-name">
                                        <p>Development</p><p>90%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="skill-name">
                                        <p>Marketing</p><p>85%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- About End -->
                
                <!-- Education Start -->
                <div class="education" id="education">
                    <div class="content-inner">
                        <div class="content-header">
                            <h2>Education</h2>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="edu-col">
                                    <span>Aug-2015 <i>to</i> Jul-2017</span>
                                    <h3>Master Degree</h3>
                                    <p>Informatics Engineering from Universitas Amikom Yogyakarta</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="edu-col">
                                    <span>Aug-2009 <i>to</i> Mar-2013</span>
                                    <h3>Bachelor Degree</h3>
                                    <p>Informatics Engineering from STMIK AKAKOM Yogyakarta (currently Universitas Teknologi Digital Indonesia)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Education Start -->
                
                <!-- Experience Start -->
                <div class="experience" id="experience">
                    <div class="content-inner">
                        <div class="content-header">
                            <h2>Experience</h2>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="exp-col">
                                    <span>Mar-2021 <i>to</i> Sep-2024</span>
                                    <h3>Sirclo</h3>
                                    <h4>Yogyakarta, ID</h4>
                                    <h5>Magento Developer</h5>
                                    <ul class="list-start-20">
                                        <li>Develop multi channel enabler system to connect user with Marketplace & ERP</li>
                                        <li>Managing & detailing task to squad member & make sure to finish on sprint</li>
                                        <li>Mentoring Junior Members</li>
                                        <li>Review Code & Deploy</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="exp-col">
                                    <span>Okt-2018 <i>to</i> Mar-2021</span>
                                    <h3>Freelance</h3>
                                    <h4>Yogyakarta, ID</h4>
                                    <h5>Full Stack Developer</h5>
                                    <ul class="list-start-20">
                                        <li>Full stack apps for Apartment management & collection</li>
                                        <li>Android Apps for inventory management tools</li>
                                        <li>Daily Attendance App using Flutter</li>
                                        <li>Custom CMS for Blog & Permission Management</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="exp-col">
                                    <span>Des-2015 <i>to</i> Okt-2018</span>
                                    <h3>Printerous.com</h3>
                                    <h4>Yogyakarta, ID</h4>
                                    <h5>Backend Developer</h5>
                                    <ul class="list-start-20">
                                        <li>Develop e-Commerce for art & printing platform using Laravel & Angular</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="exp-col"> 
                                    <span>Jan-2015 <i>to</i> Okt-2015</span>
                                    <h3>Sydeco</h3>
                                    <h4>Yogyakarta, ID</h4>
                                    <h5>Full Stack Developer</h5>
                                    <ul class="list-start-20">
                                        <li>Develop Android app for e-wallet & transaction system</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="exp-col"> 
                                    <span>Jan-2014 <i>to</i> Sep-2014</span>
                                    <h3>PT Murni Solusindo Nusantara</h3>
                                    <h4>Yogyakarta, ID</h4>
                                    <h5>Java Developer</h5>
                                    <ul class="list-start-20">
                                        <li>Develop Clearing & Settlement System for Bank Indonesia using Java EE</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Experience Start -->
                
                <!-- Service Start -->
                <div class="service" id="service">
                    <div class="content-inner">
                        <div class="content-header">
                            <h2>Specification</h2>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="srv-col">
                                    <i class="fab fa-php"></i>
                                    <h3>PHP</h3>
                                    <ul style="padding-inline-start: 20px;">
                                        <li>CMS Magento</li>
                                        <li>Framework Laravel</li>
                                        <li>Framework Codeigniter</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="srv-col">
                                    <i class="fab fa-java"></i>
                                    <h3>JAVA</h3>
                                    <ul style="padding-inline-start: 20px;">
                                        <li>Android JAVA</li>
                                        <li>Spring Boot</li>
                                        <li>JAVA SE</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="srv-col">
                                    <i class="fa fa-mobile"></i>
                                    <h3>Mobile</h3>
                                    <ul style="padding-inline-start: 20px;">
                                        <li>Android JAVA</li>
                                        <li>Flutter</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="srv-col">
                                    <i class="fab fa-js"></i>
                                    <h3>JavaScript</h3>
                                    <ul style="padding-inline-start: 20px;">
                                        <li>JQuery</li>
                                        <li>Node JS</li>
                                        <li>Vue JS</li>
                                        <li>Angular JS</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="srv-col">
                                    <i class="fab fa-css3"></i>
                                    <h3>CSS</h3>
                                    <ul style="padding-inline-start: 20px;">
                                        <li>Bootstrap</li>
                                        <li>Tailwind</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="srv-col">
                                    <i class="fas fa-toolbox"></i>
                                    <h3>Other Skills</h3>
                                    <ul style="padding-inline-start: 20px;">
                                        <li>MySQL, MS SQL</li>
                                        <li>GIT</li>
                                        <li>Google Cloud Platform</li>
                                        <li>Firebase</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Service Start -->
                
                <!-- Portfolio Start -->
                <div class="portfolio" id="portfolio">
                    <div class="content-inner">
                        <div class="content-header">
                            <h2>Portfolio</h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <ul id="portfolio-flters">
                                    <li data-filter="*" class="filter-active">All</li>
                                    <?php foreach($tags as $key => $value):?>
                                    <li data-filter=".<?=$value['tag']?>-tab"><?=ucwords($value['tag'])?></li>
                                    <?php endforeach ?>
                                </ul>
                            </div>
                        </div>
                        <div class="row portfolio-container">
                            <?php foreach ($resumes as $key => $value):
                                $uploads = json_decode($value['uploads']);?>
                            <div class="col-lg-4 col-md-6 portfolio-item <?=$value['tag']?>-tab">
                                <div class="portfolio-wrap">
                                    <figure>
                                        <?php foreach($uploads as $upload):?>
                                            <img src="<?=$upload?>" class="img-fluid" alt="">
                                            <a href="<?=$upload?>" data-lightbox="portfolio_<?=$value['id']?>" data-title="<?=$value['title']?>" class="link-preview" title="Preview"><i class="fa fa-eye"></i></a>
                                        <?php endforeach?>

                                        
                                        <a href="#" class="link-details" title="More Details"><i class="fa fa-link"></i></a>
                                        <a class="portfolio-title" href="#"><?=$value['title']?> <span><?=$value['description']?></span></a>
                                    </figure>
                                </div>
                            </div>
                            <?php endforeach?>
                        </div>
                    </div>
                </div>
                <!-- Portfolio Start -->
                
                <!-- Review Start -->
                <div class="review d-none" id="review">
                    <div class="content-inner">
                        <div class="content-header">
                            <h2>Review</h2>
                        </div>
                        <div class="row align-items-center review-slider">
                            <div class="col-md-12">
                                <div class="review-slider-item">
                                    <div class="review-text">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu suscipit orci. Donec molestie velit id libero blandit, quis suscipit urna suscipit. Donec aliquet erat eu lacinia iaculis. Ut tempor tellus eu sem pharetra feugiat.
                                        </p>
                                    </div>
                                    <div class="review-img">
                                        <img src="<?=$baseUrlLib?>/img/review-1.jpg" alt="Image">
                                        <div class="review-name">
                                            <h3>Client Name</h3>
                                            <p>Profession</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="review-slider-item">
                                    <div class="review-text">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu suscipit orci. Donec molestie velit id libero blandit, quis suscipit urna suscipit. Donec aliquet erat eu lacinia iaculis. Ut tempor tellus eu sem pharetra feugiat.
                                        </p>
                                    </div>
                                    <div class="review-img">
                                        <img src="<?=$baseUrlLib?>/img/review-2.jpg" alt="Image">
                                        <div class="review-name">
                                            <h3>Client Name</h3>
                                            <p>Profession</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="review-slider-item">
                                    <div class="review-text">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu suscipit orci. Donec molestie velit id libero blandit, quis suscipit urna suscipit. Donec aliquet erat eu lacinia iaculis. Ut tempor tellus eu sem pharetra feugiat.
                                        </p>
                                    </div>
                                    <div class="review-img">
                                        <img src="<?=$baseUrlLib?>/img/review-3.jpg" alt="Image">
                                        <div class="review-name">
                                            <h3>Client Name</h3>
                                            <p>Profession</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Review End -->
                
                <!-- Contact Start -->
                <div class="contact" id="contact">
                    <div class="content-inner">
                        <div class="content-header">
                            <h2>Contact</h2>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="contact-info">
                                    <p><i class="fa fa-user"></i>M. Arif Firdaus</p>
                                    <p><i class="fa fa-tag"></i>Full Stack Developer</p>
                                    <p><i class="fa fa-envelope"></i><a href="mailto:avi.roez@gmail.com">avi.roez@gmail.com</a></p>
                                    <p><i class="fa fa-phone"></i><a href="tel:+6285645858204">+6285645858204</a></p>
                                    <p><i class="fa fa-map-marker"></i>Jl Sakura no 11 RT 06/RW 12 Cokrobedog, Sidoarum, Yogyakarta, Indonesia</p>
                                    <div class="social">
                                        <a class="btn" href="https://wa.me/6285645858204"><i class="fab fa-whatsapp"></i></a>
                                        <a class="btn" href="https://www.linkedin.com/in/aviroez"><i class="fab fa-linkedin-in"></i></a>
                                        <a class="btn" href="https://www.facebook.com/aviroez"><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn" href="https://www.instagram.com/aviroez"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form">
                                    <form>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <input type="text" class="form-control" placeholder="Your Name" />
                                            </div>
                                            <div class="form-group col-md-6">
                                                <input type="email" class="form-control" placeholder="Your Email" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Subject" />
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" rows="5" placeholder="Message"></textarea>
                                        </div>
                                        <div><button class="btn" type="submit">Send Message</button></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Contact End -->
                
                <!-- Footer Start -->
                <div class="footer">
                    <div class="content-inner">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <p>&copy; Copyright <a href="https://htmlcodex.com">HTML Codex</a>. All Rights Reserved</p>
                            </div>
                            <div class="col-md-6">
                                <p>Powered by <a href="https://htmlcodex.com">HTML Codex</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer Start -->
            </div>
        </div>
        
        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-angle-double-up"></i></a>
        
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="<?=$baseUrlLib?>/lib/easing/easing.min.js"></script>
        <script src="<?=$baseUrlLib?>/lib/slick/slick.min.js"></script>
        <script src="<?=$baseUrlLib?>/lib/typed/typed.min.js"></script>
        <script src="<?=$baseUrlLib?>/lib/waypoints/waypoints.min.js"></script>
        <script src="<?=$baseUrlLib?>/lib/isotope/isotope.pkgd.min.js"></script>
        <script src="<?=$baseUrlLib?>/lib/lightbox/js/lightbox.min.js"></script>
        
        <!-- Template Javascript -->
        <script src="<?=$baseUrlLib?>/js/main.js"></script>
    </body>
</html>
