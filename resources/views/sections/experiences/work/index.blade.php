<!-- START RESUME WORK EXPERIENCE -->
<div id="experience" class="col-6_sm-12 resumeEmp wow fadeIn" data-wow-duration="2s" data-wow-delay=".2s">
    <ul class="resumeList">
        <li class="resume-title">
            <h4>Employment</h4>
        </li>
        <li>
            <div class="resumeIcon">
                {{-- <img src="{{asset('images/workexperience/OP_logo.png')}}">--}}
                <img src="{{asset('images/workexperience/OP_logo_H_CMYK.svg')}}">
                {{--<i class="fa fa-download"></i>--}}
            </div>
            <div class="resumeContent">
                <h5>Stage als webdeveloper bij Otago Polytechnic, Dunedin</h5>
                <span>@lang('resume.months.february')
                    2017 - @lang('resume.months.may') 2017</span>
                <p class="plineheight">
                    <a href="https://www.op.ac.nz" target="_blank">https://www.op.ac.nz</a>
                </p>
            </div>
        </li>
        <li>
            <div class="resumeIcon">
                <img src="{{asset('images/workexperience/aft_logo_parallel_inverse.svg')}}">
                {{-- <i class="fa fa-download"></i>--}}
            </div>
            <div class="resumeContent">
                <h5>Webdesigner bij AFT Leuven</h5>
                <span>@lang('resume.months.october')
                    2015 - @lang('resume.months.june') 2016</span>
                <p class="plineheight">
                    <a target="_blank" href="http://www.cleantechchallenge.be/">http://www.cleantechchallenge.be/</a>
                </p>
            </div>
        </li>
        <li>
            <div class="resumeIcon">
                <img src="{{asset('images/workexperience/aft_logo_parallel_inverse.svg')}}">
                {{-- <i class="fa fa-download"></i>--}}
            </div>
            <div class="resumeContent">
                <h5>Workshop medewerker bij AFT Leuven</h5>
                <span>@lang('resume.months.october')
                    2015 - @lang('resume.months.june') 2016</span>
                <p class="plineheight">
                    <a target="_blank" href="http://www.aftleuven.be/">http://www.aftleuven.be/</a></p>
            </div>
        </li>
        <li class="rsvz">

            @if(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::getCurrentLocale() === 'nl')
                <div class="resumeIcon">
                    <img src="{{asset('images/workexperience/rsvz_logo_nl.png')}}">
                </div>
                <div class="resumeContent">
                    <h5>Stage bij het Rijksinstituut voor de sociale verzekeringen der zelfstandigen
                        (RSVZ)</h5>
                    <span>@lang('resume.months.april') 2015</span>
                    <p class="plineheight">
                        <a target="_blank" href="http://www.rsvz.be/nl">http://www.rsvz.be/nl</a>
                    </p>
                </div>
            @else
                <div class="resumeIcon">
                    <img src="{{asset('images/workexperience/rsvz_logo_en.png')}}">
                </div>
                <div class="resumeContent">
                    <h5>Stage bij het Rijksinstituut voor de sociale verzekeringen der zelfstandigen
                        (RSVZ)</h5>
                    <span>@lang('resume.months.april') 2015</span>
                    <p class="plineheight">
                        <a target="_blank" href="http://www.rsvz.be/en">http://www.rsvz.be/en</a>
                    </p>
                </div>
            @endif

        </li>
        <li>
            <div class="resumeIcon">
                <img src="{{asset('images/workexperience/CSC_LOGO.png')}}">
            </div>
            <div class="resumeContent">
                <h5>Stage bij CSC (Computer Sciences Corporation)</h5>
                <span>@lang('resume.months.january') 2012</span>
                <p class="plineheight">
                    <a target="_blank" href="http://www.csc.com/be">http://www.csc.com/be</a></p>
            </div>
        </li>
    </ul>

</div>