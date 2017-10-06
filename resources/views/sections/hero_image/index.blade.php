<header id="home" class="hero" style="overflow: hidden;">
    <div class="center-content hero-ontop">
        <h1>Filip <span class="hero--familyname">Vanden Eynde</span>
            {{--
                            ({{ \Carbon\Carbon::now()->diffInYears(\Carbon\Carbon::createFromDate(1994,04,20))  }})
            --}}
        </h1>
        <h3>Freelance webdesigner</h3>
        <a href="{{asset('pdf/Definitieve_Professional_CV_FILIP_ENGLISH.pdf')}} " target="_blank"
           class="button dualbuttonwidth mb-20 cv-download-btn"><i class="fa fa-download" aria-hidden="true"></i>
            @lang('resume.downloadresumeenglish')</a>
        <a href="{{asset('pdf/Definitieve_Professional_CV_FILIP_DUTCH.pdf')}}" target="_blank"
           class="button dualbuttonwidth cv-download-btn">
            <i class="fa fa-download" aria-hidden="true"></i>
            @lang('resume.downloadresumedutch')</a>
        <div class="social-global">
            {{--   <a href="{{config('app.social_media.facebook')}}" class="facebook" title="Facebook" target="_blank">
                   <i class="fa fa-facebook-square" aria-hidden="true"></i>
               </a>--}}
            {{--  <a href="{{config('app.social_media.twitter')}}" class="twitter" title="Twitter" target="_blank">
                  <i class="fa fa-twitter-square" aria-hidden="true"></i></a>--}}

            <a href="{{config('app.social_media.linkedin')}}" class="linkedin" title="LinkedIn" target="_blank">
                <i class="fa fa-linkedin-square" aria-hidden="true"></i>
            </a>

            {{--  <a href="#" class="youtube" title="YouTube" target="_blank">
                  <i class="fa fa-youtube-square" aria-hidden="true"></i>
              </a>--}}

            <a href="{{config('app.social_media.instagram')}}" class="instagram" title="Instagram" target="_blank">
                <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>

            <a href="{{config('app.social_media.spotify')}}" class="spotify" title="Spotify" target="_blank">
                <i class="fa fa-spotify" aria-hidden="true"></i>
            </a>
            <a href="{{config('app.social_media.github')}}" class="github" title="Github" target="_blank">
                <i class="fa fa-github" aria-hidden="true"></i>
            </a>
        </div>


    </div>
</header>