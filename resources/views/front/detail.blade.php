@include('front.include.header')
    <!-- End of .latest-news -->
    <div class="blog-post-details" style="margin-top:6%;">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="article-wrapper">
                        <article class="blog-details">
                            <h2>{{ $detail->title }}</h2>
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="post-info">
                                        <a href="#">
                                            <i class="ml-fac-21-man-male-avatar-fac-e"></i>Admin</a>
                                        <a href="#">
                                            <i class="ml-tim-35-calander-date-schedule-clock-time-alarm-watch"></i>2{{ $detail->created_at }}</a>
                                    </div>
                                </div>
                                <!-- End of .col-md-8 -->

                                <div class="col-md-5">
                                    <ul class="social-icons text-md-right">
                                        <li>
                                            <a href="http://www.behance.net/" target="_blank" rel="noopener">
                                                <svg class="svg-inline--fa fa-behance fa-w-18" aria-hidden="true" data-prefix="fab" data-icon="behance" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M232 237.2c31.8-15.2 48.4-38.2 48.4-74 0-70.6-52.6-87.8-113.3-87.8H0v354.4h171.8c64.4 0 124.9-30.9 124.9-102.9 0-44.5-21.1-77.4-64.7-89.7zM77.9 135.9H151c28.1 0 53.4 7.9 53.4 40.5 0 30.1-19.7 42.2-47.5 42.2h-79v-82.7zm83.3 233.7H77.9V272h84.9c34.3 0 56 14.3 56 50.6 0 35.8-25.9 47-57.6 47zm358.5-240.7H376V94h143.7v34.9zM576 305.2c0-75.9-44.4-139.2-124.9-139.2-78.2 0-131.3 58.8-131.3 135.8 0 79.9 50.3 134.7 131.3 134.7 61.3 0 101-27.6 120.1-86.3H509c-6.7 21.9-34.3 33.5-55.7 33.5-41.3 0-63-24.2-63-65.3h185.1c.3-4.2.6-8.7.6-13.2zM390.4 274c2.3-33.7 24.7-54.8 58.5-54.8 35.4 0 53.2 20.8 56.2 54.8H390.4z"></path></svg><!-- <i class="fab fa-behance"></i> -->
                                            </a>
                                        </li>
                                        <li>
                                            <a href="http://twitter.com/" target="_blank" rel="noopener">
                                                <svg class="svg-inline--fa fa-twitter fa-w-16" aria-hidden="true" data-prefix="fab" data-icon="twitter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path></svg><!-- <i class="fab fa-twitter"></i> -->
                                            </a>
                                        </li>
                                        <li>
                                            <a href="http://plus.google.com/discover" target="_blank" rel="noopener">
                                                <svg class="svg-inline--fa fa-google-plus-g fa-w-20" aria-hidden="true" data-prefix="fab" data-icon="google-plus-g" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg=""><path fill="currentColor" d="M386.061 228.496c1.834 9.692 3.143 19.384 3.143 31.956C389.204 370.205 315.599 448 204.8 448c-106.084 0-192-85.915-192-192s85.916-192 192-192c51.864 0 95.083 18.859 128.611 50.292l-52.126 50.03c-14.145-13.621-39.028-29.599-76.485-29.599-65.484 0-118.92 54.221-118.92 121.277 0 67.056 53.436 121.277 118.92 121.277 75.961 0 104.513-54.745 108.965-82.773H204.8v-66.009h181.261zm185.406 6.437V179.2h-56.001v55.733h-55.733v56.001h55.733v55.733h56.001v-55.733H627.2v-56.001h-55.733z"></path></svg><!-- <i class="fab fa-google-plus-g"></i> -->
                                            </a>
                                        </li>
                                        <li>
                                            <a href="http://dribbble.com/" target="_blank" rel="noopener">
                                                <svg class="svg-inline--fa fa-dribbble fa-w-16" aria-hidden="true" data-prefix="fab" data-icon="dribbble" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119.252 8 8 119.252 8 256s111.252 248 248 248 248-111.252 248-248S392.748 8 256 8zm163.97 114.366c29.503 36.046 47.369 81.957 47.835 131.955-6.984-1.477-77.018-15.682-147.502-6.818-5.752-14.041-11.181-26.393-18.617-41.614 78.321-31.977 113.818-77.482 118.284-83.523zM396.421 97.87c-3.81 5.427-35.697 48.286-111.021 76.519-34.712-63.776-73.185-116.168-79.04-124.008 67.176-16.193 137.966 1.27 190.061 47.489zm-230.48-33.25c5.585 7.659 43.438 60.116 78.537 122.509-99.087 26.313-186.36 25.934-195.834 25.809C62.38 147.205 106.678 92.573 165.941 64.62zM44.17 256.323c0-2.166.043-4.322.108-6.473 9.268.19 111.92 1.513 217.706-30.146 6.064 11.868 11.857 23.915 17.174 35.949-76.599 21.575-146.194 83.527-180.531 142.306C64.794 360.405 44.17 310.73 44.17 256.323zm81.807 167.113c22.127-45.233 82.178-103.622 167.579-132.756 29.74 77.283 42.039 142.053 45.189 160.638-68.112 29.013-150.015 21.053-212.768-27.882zm248.38 8.489c-2.171-12.886-13.446-74.897-41.152-151.033 66.38-10.626 124.7 6.768 131.947 9.055-9.442 58.941-43.273 109.844-90.795 141.978z"></path></svg><!-- <i class="fab fa-dribbble"></i> -->
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- End of .social-icons -->
                                </div>
                                <!-- End of .col-md-5 -->
                            </div>
                            <!-- End of .row -->
 {!! $detail->content !!}
                        </article>
                        <!-- End of .blog-details -->


                        <div class="blog-details-prev-next d-flex justify-content-between">
                            <a href="#">
                                <i class="ml-symone-67-arrow-left-right-up-down-increase-decrease"></i>Önceki</a>
                            <a href="#">Sonraki
                                <i class="ml-symone-68-arrow-left-right-up-down-increase-decrease"></i>
                            </a>
                        </div>
                        <!-- End of .blog-details-prev-next -->
                    </div>
                    <!-- End of .article-wrapper -->
                </div>
                <!-- End of .col-md-12 -->
            </div>
            <!-- End of .row -->
        </div>
        <!-- End of .container -->
    </div>

    <section class="related-post blog-details-related-post section-padding">
        <svg class="bg-shape shape-project reveal-from-left" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="779px" height="759px" style="transform: matrix(1, 0, 0, 1, -200, 0);">
            <defs>
                <linearGradient id="PSgrad_033" x1="70.711%" x2="0%" y1="70.711%" y2="0%">
                    <stop offset="0%" stop-color="rgb(237,247,255)" stop-opacity="1"></stop>
                    <stop offset="100%" stop-color="rgb(237,247,255)" stop-opacity="0"></stop>
                </linearGradient>

            </defs>
            <path fill-rule="evenodd" fill="url(#PSgrad_033)" d="M111.652,578.171 L218.141,672.919 C355.910,795.500 568.207,784.561 692.320,648.484 C816.434,512.409 805.362,302.726 667.592,180.144 L561.104,85.396 C423.334,-37.184 211.037,-26.245 86.924,109.832 C-37.189,245.908 -26.118,455.590 111.652,578.171 Z"></path>
        </svg>
        <div class="container">
            <div class="blog-by-category single-cat">
                <h2 class="text-center">Benzer Yazılar</h2>
                <div class="blog-grid text-center">
                    <div class="row equalHeightWrapper">
                        <div class="item col-md-6 col-lg-4">
                            <a href="blog-details.html" class="news-content-block content-block">
                                <div class="img-container">
                                    <img src="images/news/news-3.jpg" alt="Project image" class="img-fluid">
                                </div>
                                <!-- End of .img-container -->
                                <h5 class="equalHeight" style="height: 146.2px;">
                                    <span class="content-block__sub-title">19 May, 2018</span>
                                    How to Become A Software Engineer?
                                </h5>
                            </a>
                            <!-- End of .featured-content-block -->
                        </div>
                        <!-- End of .item -->

                        <div class="item col-md-6 col-lg-4">
                            <a href="blog-details.html" class="news-content-block content-block">
                                <div class="img-container">
                                    <img src="images/news/news-4.jpg" alt="Project image" class="img-fluid">
                                </div>
                                <!-- End of .img-container -->
                                <h5 class="equalHeight" style="height: 146.2px;">
                                    <span class="content-block__sub-title">30 May , 2018</span>
                                    What Does a Web Designer Do?
                                </h5>
                            </a>
                            <!-- End of .featured-content-block -->
                        </div>
                        <!-- End of .item -->

                        <div class="item col-md-6 col-lg-4">
                            <a href="blog-details.html" class="news-content-block content-block">
                                <div class="img-container">
                                    <img src="images/news/news-5.jpg" alt="Project image" class="img-fluid">
                                </div>
                                <!-- End of .img-container -->
                                <h5 class="equalHeight" style="height: 146.2px;">
                                    <span class="content-block__sub-title">2 June, 2018</span>
                                    What Do You Do As a Web Developer?
                                </h5>
                            </a>
                            <!-- End of .featured-content-block -->
                        </div>
                        <!-- End of .item -->
                    </div>
                    <!-- End of .row -->
                </div>
                <!-- End of .blog-grid -->
            </div>
            <!-- End of .blog-by-category -->
        </div>
        <!-- End of .container -->
    </section>
    <section class="newsletter">
        <div class="container">
            <h3 class="text-center">Sign up for our newsletter to stay up to
                <br>date with tech news!</h3>

            <form action="#" class="newsletter-form" method="POST">
                <div class="row justify-content-between">
                    <div class="col-md">
                        <input type="text" name="fname" placeholder="Your Name">
                    </div>
                    <div class="col-md">
                        <input type="text" name="email" placeholder="Your Email Address">
                    </div>

                    <div class="col-md-auto">
                        <a href="" class="custom-btn btn-big grad-style-ef">SIGN UP FOR FREE</a>
                    </div>
                </div>
                <!-- End of .row -->
            </form>
            <!-- End of .newsletter-form -->
        </div>
        <!-- End of .container -->
    </section>
    <!-- Footer starts
    ======================================= -->
    <footer class="small-agency-footer  grey-bg">
        <svg class="bg-shape shape-footer-top reveal-from-left" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            width="779px" height="759px">
            <defs>
                <linearGradient id="PSgrad_05" x1="70.711%" x2="0%" y1="70.711%" y2="0%">
                    <stop offset="0%" stop-color="rgb(237,247,255)" stop-opacity="1" />
                    <stop offset="100%" stop-color="rgb(237,247,255)" stop-opacity="0" />
                </linearGradient>
            </defs>
            <path fill-rule="evenodd" fill="url(#PSgrad_05)" d="M111.652,578.171 L218.141,672.919 C355.910,795.500 568.207,784.561 692.320,648.484 C816.434,512.409 805.362,302.726 667.592,180.144 L561.104,85.396 C423.334,-37.184 211.037,-26.245 86.924,109.832 C-37.189,245.908 -26.118,455.590 111.652,578.171 Z" />
        </svg>

        <svg class="bg-shape shape-footer-bottom reveal-from-right" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            width="779px" height="759px">
            <defs>
                <linearGradient id="PSgrad_06" x1="70.711%" x2="0%" y1="70.711%" y2="0%">
                    <stop offset="0%" stop-color="rgb(237,247,255)" stop-opacity="1" />
                    <stop offset="100%" stop-color="rgb(237,247,255)" stop-opacity="0" />
                </linearGradient>
            </defs>
            <path fill-rule="evenodd" fill="url(#PSgrad_06)" d="M111.652,578.171 L218.141,672.919 C355.910,795.500 568.207,784.561 692.320,648.484 C816.434,512.409 805.362,302.726 667.592,180.144 L561.104,85.396 C423.334,-37.184 211.037,-26.245 86.924,109.832 C-37.189,245.908 -26.118,455.590 111.652,578.171 Z" />
        </svg>

        <div class="footer-nav-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <a href="{{url('/')}}" class="footer-logo">
                            <img src="images/footer-logo.png" alt="footer logo">
                        </a>

                        <ul class="social-icons">
                            <li>
                                <a href="http://www.behance.net/" target="_blank" rel="noopener">
                                    <i class="fab fa-behance"></i>
                                </a>
                            </li>
                            <li>
                                <a href="http://twitter.com/" target="_blank" rel="noopener">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="http://plus.google.com/discover" target="_blank" rel="noopener">
                                    <i class="fab fa-google-plus-g"></i>
                                </a>
                            </li>
                            <li>
                                <a href="http://dribbble.com/" target="_blank" rel="noopener">
                                    <i class="fab fa-dribbble"></i>
                                </a>
                            </li>
                            <li>
                                <a href="http://youtube.com" target="_blank" rel="noopener">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- End of .social-icons -->
                    </div>
                    <!-- End of .col-md-3 -->

                    <div class="col-md-3">
                        <nav class="footer-nav">
                            <h5>Services</h5>
                            <ul class="footer-menu">
                                <li>
                                    <a href="logo-and-branding.html">Logo &amp; Branding</a>
                                </li>
                                <li>
                                    <a href="pay-per-click.html">Pay-Per-Click</a>
                                </li>
                                <li>
                                    <a href="website-design.html">Website Design</a>
                                </li>
                                <li>
                                    <a href="mobile-app-design.html">Mobile App Design</a>
                                </li>
                                <li>
                                    <a href="search-engine-optimization.html">Search Engine Optimization </a>
                                </li>
                                <li>
                                    <a href="social-media-marketing.html">Social Media Marketing</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- End of .col-md-3 -->

                    <div class="col-md-3">
                        <nav class="footer-nav">
                            <h5>Support</h5>
                            <ul class="footer-menu">
                                <li>
                                    <a href="contact.html">Contact</a>
                                </li>
                                <li>
                                    <a href="privacy-policy.html">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="terms-and-conditions.html">Terms &amp; Conditions</a>
                                </li>
                                <li>
                                    <a href="error-404.html">Error 404</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- End of .col-md-3 -->

                    <div class="col-md-3">
                        <nav class="footer-nav">
                            <h5>Resources</h5>
                            <ul class="footer-menu">
                                <li>
                                    <a href="portfolio.html">Portfolio</a>
                                </li>
                                <li>
                                    <a href="case-studies.html">Case Studies</a>
                                </li>
                                <li>
                                    <a href="about-us.html">About</a>
                                </li>
                                <li>
                                    <a href="team.html">Team</a>
                                </li>
                                <li>
                                    <a href="blog.html">Blog</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- End of .col-md-3 -->
                </div>
                <!-- End of .row -->
            </div>
            <!-- End of .container -->
        </div>
        <!-- End of .footer-nav -->

        <div class="footer-bottom">
            <div class="container">
                <p class="text-center">&copy; 2018. All rights reserved by Your
                    <a href="http://axilweb.com/" target="_blank" rel="noopener">Company LLC</a>.</p>
            </div>
            <!-- End of .container -->
        </div>
        <!-- End of .footer-content -->
    </footer>
    <!-- End of footer -->

    <!-- Featured-designs modal -->
    <div class="modal fade featured-project-modal" id="featured-project-modal" tabindex="-1" role="dialog"
        aria-labelledby="featured-project-modal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <svg class="modal-bg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    width="379px" height="369px">
                    <defs>
                        <linearGradient id="PSgrad_012" x1="70.711%" x2="0%" y1="70.711%" y2="0%">
                            <stop offset="0%" stop-color="rgb(237,247,255)" stop-opacity="1" />
                            <stop offset="100%" stop-color="rgb(237,247,255)" stop-opacity="0" />
                        </linearGradient>

                    </defs>
                    <path fill-rule="evenodd" fill="url(#PSgrad_012)" d="M54.086,281.380 L105.962,327.505 C173.075,387.178 276.496,381.853 336.956,315.610 C397.418,249.367 392.025,147.292 324.911,87.619 L273.035,41.495 C205.921,-18.178 102.501,-12.853 42.040,53.390 C-18.422,119.633 -13.028,221.708 54.086,281.380 Z" />
                </svg>
                <!-- End of .modal-bg -->

                <svg class="featured-project-modal-bg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    width="379px" height="369px">
                    <defs>
                        <linearGradient id="PSgrad_013" x1="70.711%" x2="0%" y1="70.711%" y2="0%">
                            <stop offset="0%" stop-color="rgb(237,247,255)" stop-opacity="1" />
                            <stop offset="100%" stop-color="rgb(237,247,255)" stop-opacity="0" />
                        </linearGradient>

                    </defs>
                    <path fill-rule="evenodd" fill="url(#PSgrad_013)" d="M54.086,281.380 L105.962,327.505 C173.075,387.178 276.496,381.853 336.956,315.610 C397.418,249.367 392.025,147.292 324.911,87.619 L273.035,41.495 C205.921,-18.178 102.501,-12.853 42.040,53.390 C-18.422,119.633 -13.028,221.708 54.086,281.380 Z" />
                </svg>
                <!-- End of .modal-bg -->

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="ml-symtwo-24-multiply-cross-math"></i>
                </button>
                <!-- End of .close -->

                <div class="modal-body">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div id="featured-project-carousel" class="carousel slide featured-project-carousel"
                                data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#featured-project-carousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#featured-project-carousel" data-slide-to="1"></li>
                                    <li data-target="#featured-project-carousel" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100 img-fluid" src="images/modal-img-1.jpg"
                                            alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100 img-fluid" src="images/modal-img-1.jpg"
                                            alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100 img-fluid" src="images/modal-img-1.jpg"
                                            alt="Third slide">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#featured-project-carousel" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#featured-project-carousel" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                            <!-- End of .featured-project-carousel -->
                        </div>
                        <!-- End of .col-lg-6 -->

                        <div class="col-lg-6">
                            <div class="text-content">
                                <h3>
                                    <span>Featured - Design</span> Second Language Website</h3>
                                <p>Donec mattis, augue condimentum varius vestibulum, magna lorem placerat ipsum,
                                    faucibus porta
                                    libero ipsum ut lorem. Morbi sed purus interdum.</p>
                                <p>Ut porttitor odio eget mauris rutrum, a vehicula turpis llamcorper. Quisque iaculis
                                    leo non
                                    eleifend pretium. Nunc ullamcorper scelerisque purus semper. </p>
                                <a href="#" class="custom-btn btn-big grad-style-ef">LAUNCH WEBSITE</a>
                            </div>
                            <!-- End of .text-content -->
                        </div>
                    </div>
                    <!-- End of .row -->
                </div>
                <!-- End of .modal-body -->
            </div>
            <!-- End of .modal-content -->
        </div>
        <!-- End of .modal-dialog -->
    </div>
    <!-- End of .modal -->

    <!-- Get a quote Modal Starts -->
    <div class="modal fade get-a-quote-modal" id="get-a-quote-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="ml-symtwo-24-multiply-cross-math"></i>
                    </button>
                    <!-- End of .close -->
                </div>
                <!-- End of .modal-header -->

                <div class="modal-body">
                    <div class="contact-form-wrapper">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="contact-wrapper contact-page-form-wrapper">
                                        <div class="form-wrapper">
                                            <h3>Send Us a Message</h3>
                                            <form class="contact-form" method="post">
                                                <div class="row">
                                                    <div class="col-md-12 col-lg-6">
                                                        <input type="text" name="fname" placeholder="Full Name">
                                                    </div>

                                                    <div class="col-md-12 col-lg-6">
                                                        <input type="email" name="email" placeholder="Email">
                                                    </div>

                                                    <div class="col-md-12 col-lg-6">
                                                        <input type="text" name="phone" placeholder="Phone">
                                                    </div>

                                                    <div class="col-md-12 col-lg-6">
                                                        <input type="text" name="website" placeholder="Website">
                                                    </div>

                                                    <div class="col-md-12">
                                                        <textarea name="message" placeholder="Message"></textarea>
                                                    </div>
                                                    <div class="btn-wrapper">
                                                        <button type="submit" class="custom-btn btn-big grad-style-ef">CONTACT
                                                            US NOW</button>
                                                    </div>
                                                </div>
                                                <!-- End of .row -->
                                            </form>
                                            <!-- End of .contact-form -->
                                        </div>
                                        <!-- End of .form-wrapper -->
                                    </div>
                                    <!-- End of .contact-form -->
                                </div>
                                <!-- End of .col-lg-7 -->

                                <div class="col-lg-6">
                                    <div class="contact-info floating-contact-info">
                                        <h5>What’s Next?</h5>

                                        <div class="whats-next-wrapper">
                                            <p>
                                                <i class="ml-symone-68-arrow-left-right-up-down-increase-decrease"></i>An
                                                email and phone call from one of our representatives.</p>
                                            <p>
                                                <i class="ml-symone-68-arrow-left-right-up-down-increase-decrease"></i>A
                                                time &amp; cost estimation.</p>
                                            <p>
                                                <i class="ml-symone-68-arrow-left-right-up-down-increase-decrease"></i>An
                                                in-person meeting.</p>
                                        </div>
                                        <!-- End of .whats-next-wrapper -->

                                        <p class="address">
                                            Give us a call
                                            <a href="tel:7021231478">(702) 123-1478</a>
                                        </p>
                                        <!-- End of .address -->

                                        <p class="address">
                                            Send us an email
                                            <a href="mailto:info@company.com">info@company.com</a>
                                        </p>
                                        <!-- End of .address -->

                                        <div class="social-icons-wrapper">
                                            <p>Follow us on</p>
                                            <ul class="social-icons">
                                                <li>
                                                    <a href="http://www.behance.net/" target="_blank" rel="noopener">
                                                        <i class="fab fa-behance"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="http://twitter.com/" target="_blank" rel="noopener">
                                                        <i class="fab fa-twitter"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="http://plus.google.com/discover" target="_blank" rel="noopener">
                                                        <i class="fab fa-google-plus-g"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="http://dribbble.com/" target="_blank" rel="noopener">
                                                        <i class="fab fa-dribbble"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                            <!-- End of .social-icons -->
                                        </div>
                                    </div>
                                    <!-- End of .contact-info -->
                                </div>
                                <!-- End of .col-lg-5 -->
                            </div>
                            <!-- End of .row -->
                        </div>
                        <!-- End of .container -->
                    </div>
                    <!-- End of .contact-form-wrapper -->
                </div>
                <!-- End of .modal-body -->
            </div>
            <!-- End of .modal-content -->
        </div>
        <!-- End of .modal-dialog -->
    </div>
    <!-- End of .get-a-quote-modal -->


    <!-- Javascripts
    ======================================= -->
    <!-- jQuery -->
    <script src="{{asset('front')}}/js/vendor/jquery-3.2.1.min.js"></script>
    <script src="{{asset('front')}}/js/vendor/jquery-migrate.min.js"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('front')}}/js/vendor/bootstrap.bundle.min.js"></script>
    <!-- font awesome -->
    <script src="{{asset('front')}}/js/vendor/fontawesome-all.min.js"></script>
    <!-- jQuery Easing Plugin -->
    <script src="{{asset('front')}}/js/vendor/easing-1.3.js"></script>
    <!-- jQuery progressbar plugin -->
    <script src="{{asset('front')}}/js/vendor/jquery.waypoints.min.js"></script>
    <script src="{{asset('front')}}/js/vendor/jquery.counterup.min.js"></script>
    <!-- Bootstrap Progressbar -->
    <script src="{{asset('front')}}/js/vendor/bootstrap-progressbar.min.js"></script>
    <!-- ImagesLoaded js -->
    <script src="{{asset('front')}}/js/vendor/imagesloaded.pkgd.min.js"></script>
    <!-- Slick carousel js -->
    <script src="{{asset('front')}}/js/vendor/slick.min.js"></script>
    <!-- Magnific popup -->
    <script src="{{asset('front')}}/js/vendor/jquery.magnific-popup.min.js"></script>
    <script src="{{asset('front')}}/js/vendor/isotope.pkgd.min.js"></script>
    <!-- scroll magic -->
    <script src="{{asset('front')}}/js/vendor/jquery.ScrollMagic.min.js"></script>
    <script src="{{asset('front')}}/js/vendor/debug.addIndicators.min.js"></script>
    <script src="{{asset('front')}}/js/vendor/jquery.TweenMax.min.js"></script>
    <script src="{{asset('front')}}/js/vendor/animation.gsap.min.js"></script>
    <script src="{{asset('front')}}/js/vendor/scrollReveal.js"></script>
    <!-- Custom js -->
    <script src="{{asset('front')}}/js/main.js"></script>
</body>

</html>