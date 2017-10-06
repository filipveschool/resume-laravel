<!-- PROFILE SECTION -->
<section id="profile" class="section section--profile pt-90">

    <div class="container">
        <div class="row">
            <div class="col-12 text-center section-title wow fadeIn">
                {{--
                                    <h2 class="heading">About <span>Me</span></h2>
                --}}
                <h1 class="heading heading-line">About <span class="theme-color">Me</span></h1>

                {{--
                                    <h1 class="heading heading-line">My <span class="theme-color">Profile</span></h1>
                --}}
                <p class="lead">@lang('resume.profiledescriptioncontent')</p>
                <hr>
            </div>
        </div>

    </div><!-- end filipcontainer -->

    <div class="container">
        <div class="row mb-60">

            <div class="col-md-6 col-sm-12 profile--description wow fadeIn">
                {{--
                                <h2>@lang('resume.iam') <span class="theme-color">Filip Vanden Eynde</span></h2>
                --}}
                {{--
                                    <h2>@lang('resume.aboutme')</h2>
                --}}
                {{-- <p>I am a student Applied Informatics at UCLL Leuven, Belgium. I am an allround web developer. I
                     have a good knowledge of front-end techniques. I love structure and order and I also stand for
                     quality. I am only happy when everything is
                     optimized and can spend a lot of time on
                     fixing the littlest details.</p>--}}
                <p class="mt-30">@lang('resume.aboutmedescription')</p>
                <p></p>
                <p></p>
                <br>
                <p><a class="btn btn-lg btn-button hireme-button smoothscroll" href="#contact">HIRE ME NOW!</a></p>
            </div>
            <div class="col-md-6 col-sm-12">
                {{--
                                    <img src="{{asset('img/metadata/fve.jpg')}}" width="320px"
                                         class="img-responsive img-center  center-content-nowidth">
                --}}
                <ul class="self-information">
                    <li><span class="title">NAME: </span><span class="self-content">Filip Vanden Eynde</span></li>
                    <li><span class="title">PROFESSION: </span><span
                                class="self-content">Freelance Web Developer.</span></li>
                    <li><span class="title">AGE: </span><span class="self-content">{{ \Carbon\Carbon::now()->diffInYears(\Carbon\Carbon::createFromDate(1994,04,20))  }}
                            .</span></li>
                    <li><span class="title">NATIONALITY: </span><span class="self-content">Belgian.</span></li>
                    <li><span class="title">ADDRESS: </span><span class="self-content">Ninove, Belgium.</span></li>
                    <li><span class="title">PHONE: </span><span class="self-content">+32 477 83 98 17.</span></li>
                    <li><span class="title">E-MAIL: </span><span class="self-content"><a
                                    href="mailto:support@dueza.com">info@filipvandeneynde.com</a></span></li>
                    <li><span class="title">WEBSITE: </span><span class="self-content"><a href="http://dueza.com/">www.filipvandeneynde.com</a></span>
                    </li>
                </ul>

            </div>
        </div>
    </div><!-- end filipcontainer -->

</section>