<!-- PORTFOLIO SECTION -->
<section id="portfolio" class="section section-wrap background-light pb-90 section--portfolio">
    <div class="filipcontainer">
        <div class="grid">
            <div class=" col-12 heading-row text-center">
                <h2 class="heading">my portfolio</h2>
                <p class="lead">“You can do anything you set your mind to.”
                    <br>
                    <span class="quote-author">- Benjamin Franklin</span></p>
            </div>
        </div>

    </div><!-- end filipcontainer -->

    <!-- choice menu filter -->
    <div class="wrapper grid-1 text-center">
        <div class="col">
            <div class="project-filter">
                <a href="#" class="filter" data-filter="*">All</a>
                <a href="#" class="filter active" data-filter=".web-design">Web Design</a>
                <a href="#" class="filter" data-filter=".print">Print</a>
                <a href="#" class="filter" data-filter=".graphics">Graphics</a>
                <a href="#" class="filter" data-filter=".mockups">Mockups</a>
            </div>
        </div>
    </div>

    {{--
            <div class="wrapper">
    --}}
    <div class="">
        <!--  <div id="project-grid" class="grid project-grid grid-4-col small-gutter"> -->
        <div id="project-grid" class="grid-4_md-2_sm-1 project-grid small-gutter">
            <div class="col project project--hover-2 web-design mockups">
                <div class="project__img-holder">
                    <img src="{{asset('images/portfolio/1.jpg')}}" alt=""
                         class="project__img">
                    <div class="project__overlay">
                        <div class="project__icons">
                            <a href="http://vimeo.com/139208268" class="lightbox-video"><i class="fa fa-search"></i></a>
                            <a href="portfolio-single.html"><i class="fa fa-link"></i></a>
                            <!-- TODO een foreach loop inbrengen met portfolio die worden bepaald en toegevoegd via de backend via een formulier -->
                            <!-- TODO elke portfolio-single.html veranderen door een url met een specifieke id voor de single portfolio view -->
                        </div>
                    </div>
                    <div class="project__description">
                        <h3 class="project__title"><a href="portfolio-single.html">Video Lightbox</a></h3>
                        <span class="project__category"><a href="portfolio-single.html">Web Design</a></span>
                    </div>
                </div>
            </div>
            <!-- end project -->

            <div class="col project project--hover-2 print mockups">
                <div class="project__img-holder">
                    <img src="{{asset('images/portfolio/2.jpg')}}" alt=""
                         class="project__img">
                    <div class="project__overlay">
                        <div class="project__icons">
                            <a href="{{asset('images/portfolio/2_big.jpg')}}"
                               class="lightbox-img"><i class="fa fa-search"></i></a>
                            <a href="portfolio-single.html"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="project__description">
                        <h3 class="project__title"><a href="portfolio-single.html">Branding Mockup</a></h3>
                        <span class="project__category"><a href="portfolio-single.html">Mockups</a></span>
                    </div>
                </div>
            </div>
            <!-- end project -->

            <div class="col project project--hover-2 web-design graphics print">
                <div class="project__img-holder">
                    <img src="{{asset('images/portfolio/3.jpg')}}" alt=""
                         class="project__img">
                    <div class="project__overlay">
                        <div class="project__icons">
                            <a href="{{asset('images/portfolio/3_big.jpg')}}"
                               class="lightbox-img"><i class="fa fa-search"></i></a>
                            <a href="portfolio-single.html"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="project__description">
                        <h3 class="project__title"><a href="portfolio-single.html">Chat App</a></h3>
                        <span class="project__category"><a href="portfolio-single.html">Web Design</a></span>
                    </div>
                </div>
            </div>
            <!-- end project -->

            <div class="col project project--hover-2 web-design graphics print">
                <div class="project__img-holder">
                    <img src="{{asset('images/portfolio/4.jpg')}}" alt=""
                         class="project__img">
                    <div class="project__overlay">
                        <div class="project__icons">
                            <a href="{{asset('images/portfolio/4_big.jpg')}}"
                               class="lightbox-img"><i class="fa fa-search"></i></a>
                            <a href="portfolio-single.html"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="project__description">
                        <h3 class="project__title"><a href="portfolio-single.html">Money App</a></h3>
                        <span class="project__category"><a href="portfolio-single.html">Web Design</a></span>
                    </div>
                </div>
            </div>
            <!-- end project -->

            <div class="col project project--hover-2 web-design">
                <div class="project__img-holder">
                    <img src="{{asset('images/portfolio/5.jpg')}}" alt=""
                         class="project__img">
                    <div class="project__overlay">
                        <div class="project__icons">
                            <a href="{{asset('images/portfolio/5_big.jpg')}}"
                               class="lightbox-img"><i class="fa fa-search"></i></a>
                            <a href="portfolio-single.html"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="project__description">
                        <h3 class="project__title"><a href="portfolio-single.html">Video Chat App</a></h3>
                        <span class="project__category"><a href="portfolio-single.html">Web Design</a></span>
                    </div>
                </div>
            </div>
            <!-- end project -->

            <div class="col project project--hover-2 web-design">
                <div class="project__img-holder">
                    <img src="{{asset('images/portfolio/6.jpg')}}" alt=""
                         class="project__img">
                    <div class="project__overlay">
                        <div class="project__icons">
                            <a href="{{asset('images/portfolio/6_big.jpg')}}"
                               class="lightbox-img"><i class="fa fa-search"></i></a>
                            <a href="portfolio-single.html"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="project__description">
                        <h3 class="project__title"><a href="portfolio-single.html">Promo Website</a></h3>
                        <span class="project__category"><a href="portfolio-single.html">Web Design</a></span>
                    </div>
                </div>
            </div>
            <!-- end project -->

            <div class="col project project--hover-2 web-design">
                <div class="project__img-holder">
                    <img src="{{asset('images/portfolio/7.jpg')}}" alt=""
                         class="project__img">
                    <div class="project__overlay">
                        <div class="project__icons">
                            <a href="{{asset('images/portfolio/7_big.jpg')}}"
                               class="lightbox-img"><i class="fa fa-search"></i></a>
                            <a href="portfolio-single.html"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="project__description">
                        <h3 class="project__title"><a href="portfolio-single.html">Landing Page</a></h3>
                        <span class="project__category"><a href="portfolio-single.html">Web Design</a></span>
                    </div>
                </div>
            </div>
            <!-- end project -->


            <div class="col project project--hover-2 print">
                <div class="project__img-holder">
                    <img src="{{asset('images/portfolio/8.jpg')}}" alt=""
                         class="project__img">
                    <div class="project__overlay">
                        <div class="project__icons">
                            <a href="{{asset('images/portfolio/8_big.jpg')}}"
                               class="lightbox-img"><i class="fa fa-search"></i></a>
                            <a href="portfolio-single.html"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="project__description">
                        <h3 class="project__title"><a href="portfolio-single.html">TV Show Website</a></h3>
                        <span class="project__category"><a href="portfolio-single.html">Web Design</a></span>
                    </div>
                </div>
            </div>
            <!-- end project -->

        </div> <!-- end project-grid -->

    </div>
</section>
