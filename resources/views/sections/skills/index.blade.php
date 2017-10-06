<!-- SKILLS SECTION -->
<section id="skills" class="section section-wrap background-light pb-90 section--skills">
    <div class="container">
        <div class="row">
            <div class="col-12 pb-60 text-center">
                <h2 class="heading heading-line">@lang('resume.my')<span
                            class="theme-color"> @lang('resume.abilities')</span></h2>
                <p class="lead">"Most good programmers do programming not because they expect to get paid or get
                    adulation by the public, but because it is fun to program."
                    <br>
                    <span class="quote-author">- Linus Torvalds</span></p>
            </div>
        </div>
        <h3 class="mb-20">@lang('resume.skills')</h3>
        {{--http://www.pascalvangemert.nl/#/abilities--}}
        <div class="row">
            <div class="col-12">
                {{--@can('add-resume-skills')--}}
                @auth
                    <a href="{{ action('Back\Resume\SkillsController@create') }}"
                       class="btn btn-lg btn-color btn-icon mb-20">
                        @lang('resume.newresumeskill')
                    </a>
                    {{--  @endcan--}}
                @endauth
                <div class="d-flex flex-row flex-wrap">

                    @foreach($skills as $skill)
                        <div class="col-lg-6 col-xs-12">
                            @can('edit-resume-skills')

                                <span class="ability-title">
                                        <a href="{{action('Back\Resume\SkillsController@edit', $skill->id)  }}">
                                        {{$skill->title}}
                                        </a>
                                    </span>
                                <span class="ability-score">{!! $skill->stars !!}</span>
                                <span class="delete">
                                        {{ htmlfilip()->deleteButton(action('Back\Resume\SkillsController@frontdestroy', $skill->id)) }}
                                    </span>

                            @else

                                <span class="ability-title">{{$skill->title}}</span>
                                <span class="ability-score">{!! $skill->stars !!}</span>

                            @endcan
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <hr>

        <h3 class="mb-20">@lang('resume.languages.general')</h3>
        <div class="row">
            <div class="col-12">
                <div class="grid-3_md-2_xs-1 d-flex flex-row flex-wrap">
                    <div class="col-lg-4 col-md-6 col-xs-1">
                        <span class="ability-title">@lang('resume.languages.dutch')</span>
                        <span class="ability-score">
                                <i class="fa fa-star filled" aria-hidden="true"></i>
                                <i class="fa fa-star filled" aria-hidden="true"></i>
                                <i class="fa fa-star filled" aria-hidden="true"></i>
                                <i class="fa fa-star filled" aria-hidden="true"></i>
                                <i class="fa fa-star filled" aria-hidden="true"></i>
                            </span>
                    </div>
                    <div class="col-lg-4 col-md-6 col-xs-1">
                        <span class="ability-title">@lang('resume.languages.english')</span>
                        <span class="ability-score">
                                <i class="fa fa-star filled" aria-hidden="true"></i>
                                <i class="fa fa-star filled" aria-hidden="true"></i>
                                <i class="fa fa-star filled" aria-hidden="true"></i>
                                <i class="fa fa-star filled" aria-hidden="true"></i>
                                <i class="fa fa-star filled" aria-hidden="true"></i>
                            </span>
                    </div>
                    <div class="col-lg-4 col-md-6 col-xs-1">
                        <span class="ability-title">@lang('resume.languages.french') </span>
                        <span class="ability-score">
                                <i class="fa fa-star filled" aria-hidden="true"></i>
                                <i class="fa fa-star filled" aria-hidden="true"></i>
                                <i class="fa fa-star filled" aria-hidden="true"></i>
                                <i class="fa fa-star filled" aria-hidden="true"></i>
                                <i class="fa fa-star filled" aria-hidden="true"></i>
                            </span>
                    </div>

                </div> <!-- end grid-3 -->
            </div> <!-- end col-12 -->
        </div> <!-- end grid -->


        <hr>

        <h3 class="mb-20">@lang('resume.tools')</h3>
        <div class="row">
            <div class="col-12">
                @auth
                    {{--  @can('add-resume-tools')--}}
                    <a href="{{ action('Back\Resume\ToolsController@create') }}"
                       class="btn btn-lg btn-color btn-icon mb-20">
                        @lang('resume.newresumetool')
                    </a>
                    {{--      @endcan--}}
                @endauth
                <div class="d-flex flex-row flex-wrap">

                    @foreach($tools as $tool)
                        <div class="col-lg-6 col-xs-12">
                            @can('edit-resume-tools')

                                <span class="ability-title">
                                        <a href="{{action('Back\Resume\ToolsController@edit', $tool->id)  }}">
                                   {{$tool->title}} ({{$tool->yearsinuse}} years)
                                        </a>
                                    </span>
                                <span class="ability-score">{!! $tool->stars !!}</span>
                                <span class="delete">
                                        {{ htmlfilip()->deleteButton(action('Back\Resume\ToolsController@frontdestroy', $tool->id)) }}
                                    </span>
                            @else
                                <span class="ability-title">{{$tool->title}} ({{$tool->yearsinuse}} years)</span>
                                <span class="ability-score">{!! $tool->stars !!}</span>
                            @endcan
                        </div>
                    @endforeach

                </div> <!-- end grid-3 -->
            </div> <!-- end col-12 -->
        </div> <!-- end grid -->


        <!-- TODO een gedeelte voor mijn talen die ik spreek toevoegen -->
        <!-- TODO een gedeelte voor mijn interesses en hobbies die ik heb toevoegen -->
        <!-- TODO een gedeelte voor mijn prijzen die ik heb toevoegen -->
        <!-- TODO een gedeelte voor mijn internationale ervaring die ik heb toevoegen -->


    </div>
</section>