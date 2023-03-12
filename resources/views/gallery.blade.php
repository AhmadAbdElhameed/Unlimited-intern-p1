<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Touché</title>
    <meta name="description" content="">
    <meta name="author" content="">

    @include('admin.includes.header')

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <!-- Navigation
    ==========================================-->
    @include('admin.includes.navbar')








    <!-- Portfolio Section -->
    <div id="portfolio">
        <div class="section-title text-center center">
            <div class="overlay">
                <h2>Gallery</h2>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit duis sed.</p>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="categories">
                    <ul class="cat">
                        <li>
                            <ol class="type">
                                <li><a href="#" data-filter="*" class="active">All</a></li>
                                <li><a href="#" data-filter=".breakfast">Breakfast</a></li>
                                <li><a href="#" data-filter=".lunch">Lunch</a></li>
                                <li><a href="#" data-filter=".dinner">Dinner</a></li>
                            </ol>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="row">
                <div class="portfolio-items">
                    <div class="col-sm-6 col-md-4 col-lg-4 breakfast">
                        <div class="portfolio-item">
                            <div class="hover-bg">
                                <a href="{{asset('assets/img/portfolio/01-large.jpg')}}" title="Dish Name" data-lightbox-gallery="gallery1">
                                    <div class="hover-text">
                                        <h4>Dish Name</h4>
                                    </div>
                                    <img src="{{asset('assets/img/portfolio/01-small.jpg')}}" class="img-responsive" alt="Project Title"> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4 dinner">
                        <div class="portfolio-item">
                            <div class="hover-bg">
                                <a href="{{asset('assets/img/portfolio/02-large.jpg')}}" title="Dish Name" data-lightbox-gallery="gallery1">
                                    <div class="hover-text">
                                        <h4>Dish Name</h4>
                                    </div>
                                    <img src="{{asset('assets/img/portfolio/02-small.jpg')}}" class="img-responsive" alt="Project Title"> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4 breakfast">
                        <div class="portfolio-item">
                            <div class="hover-bg">
                                <a href="{{asset('assets/img/portfolio/03-large.jpg')}}" title="Dish Name" data-lightbox-gallery="gallery1">
                                    <div class="hover-text">
                                        <h4>Dish Name</h4>
                                    </div>
                                    <img src="{{asset('assets/img/portfolio/03-small.jpg')}}" class="img-responsive" alt="Project Title"> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4 breakfast">
                        <div class="portfolio-item">
                            <div class="hover-bg">
                                <a href="{{asset('assets/img/portfolio/04-large.jpg')}}" title="Dish Name" data-lightbox-gallery="gallery1">
                                    <div class="hover-text">
                                        <h4>Dish Name</h4>
                                    </div>
                                    <img src="{{asset('assets/img/portfolio/04-small.jpg')}}" class="img-responsive" alt="Project Title"> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4 dinner">
                        <div class="portfolio-item">
                            <div class="hover-bg">
                                <a href="{{asset('assets/img/portfolio/05-large.jpg')}}" title="Dish Name" data-lightbox-gallery="gallery1">
                                    <div class="hover-text">
                                        <h4>Dish Name</h4>
                                    </div>
                                    <img src="{{asset('assets/img/portfolio/05-small.jpg')}}" class="img-responsive" alt="Project Title"> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4 lunch">
                        <div class="portfolio-item">
                            <div class="hover-bg">
                                <a href="{{asset('assets/img/portfolio/06-large.jpg')}}" title="Dish Name" data-lightbox-gallery="gallery1">
                                    <div class="hover-text">
                                        <h4>Dish Name</h4>
                                    </div>
                                    <img src="{{asset('assets/img/portfolio/06-small.jpg')}}" class="img-responsive" alt="Project Title"> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4 lunch">
                        <div class="portfolio-item">
                            <div class="hover-bg">
                                <a href="{{asset('assets/img/portfolio/07-large.jpg')}}" title="Dish Name" data-lightbox-gallery="gallery1">
                                    <div class="hover-text">
                                        <h4>Dish Name</h4>
                                    </div>
                                    <img src="{{asset('assets/img/portfolio/07-small.jpg')}}" class="img-responsive" alt="Project Title"> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4 breakfast">
                        <div class="portfolio-item">
                            <div class="hover-bg">
                                <a href="{{asset('assets/img/portfolio/08-large.jpg')}}" title="Dish Name" data-lightbox-gallery="gallery1">
                                    <div class="hover-text">
                                        <h4>Dish Name</h4>
                                    </div>
                                    <img src="{{asset('assets/img/portfolio/08-small.jpg')}}" class="img-responsive" alt="Project Title"> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4 dinner">
                        <div class="portfolio-item">
                            <div class="hover-bg">
                                <a href="{{asset('assets/img/portfolio/09-large.jpg')}}" title="Dish Name" data-lightbox-gallery="gallery1">
                                    <div class="hover-text">
                                        <h4>Dish Name</h4>
                                    </div>
                                    <img src="{{asset('assets/img/portfolio/09-small.jpg')}}" class="img-responsive" alt="Project Title"> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4 lunch">
                        <div class="portfolio-item">
                            <div class="hover-bg">
                                <a href="{{asset('assets/img/portfolio/10-large.jpg')}}" title="Dish Name" data-lightbox-gallery="gallery1">
                                    <div class="hover-text">
                                        <h4>Dish Name</h4>
                                    </div>
                                    <img src="{{asset('assets/img/portfolio/10-small.jpg')}}" class="img-responsive" alt="Project Title"> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4 lunch">
                        <div class="portfolio-item">
                            <div class="hover-bg">
                                <a href="{{asset('assets/img/portfolio/11-large.jpg')}}" title="Dish Name" data-lightbox-gallery="gallery1">
                                    <div class="hover-text">
                                        <h4>Dish Name</h4>
                                    </div>
                                    <img src="{{asset('assets/img/portfolio/11-small.jpg')}}" class="img-responsive" alt="Project Title"> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4 breakfast">
                        <div class="portfolio-item">
                            <div class="hover-bg">
                                <a href="{{asset('assets/img/portfolio/12-large.jpg')}}" title="Dish Name" data-lightbox-gallery="gallery1">
                                    <div class="hover-text">
                                        <h4>Dish Name</h4>
                                    </div>
                                    <img src="{{asset('assets/img/portfolio/12-small.jpg')}}" class="img-responsive" alt="Project Title"> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <!-- Contact Section -->
    <div id="contact" class="text-center">
        <div class="container">
            <div class="section-title text-center">
                <h2>Contact Form</h2>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit duis sed.</p>
            </div>
            <div class="col-md-10 col-md-offset-1">
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" id="name" class="form-control" placeholder="Name" required="required">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" id="email" class="form-control" placeholder="Email" required="required">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div id="success"></div>
                    <button type="submit" class="btn btn-custom btn-lg">Send Message</button>
                </form>
            </div>
        </div>
    </div>










    @include('admin.includes.footer')
</body>

</html>
