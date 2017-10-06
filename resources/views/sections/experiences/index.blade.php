<!-- RESUME SECTION -->
<section id="experiences" class="section section-wrap bg-light pb-90 section--resume">
    <div class="container">
        <div class="grid">
            <div class="col-12 mb-60 text-center section-title wow fadeIn">
                <h1 class="heading">My <span class="theme-color">Experiences</span></h1>
            </div>
        </div>

        {{--include--}}

        @include('sections.experiences.education.index')

        @include('sections.experiences.work.index')

    </div>
</section>
