<section class="section-wrap white-text section--contact" id="contact">
    <div class="container">

        <div class="pb-60 text-center">
            <h2 class="heading">Get in Touch</h2>
            <span class="subheading">Contact</span>

        </div>

        <div class="grid-center justify-content-center row">

            <div class="col-8">
                {{htmlfilip()->form('POST', action('Front\ResumeController@sendMail'))
                ->id('contact-form')
                ->class('text-center')
                ->open()}}

                <div class="row">
                    <div class="col-12 contact-name">
                        {{htmlfilip()->text('name')->placeholder("Name*")->id('name')}}
                        {{htmlfilip()->error($errors->first('name')) }}
                    </div>
                    <div class="col-12 contact-email">
                        {{htmlfilip()->email('mail')->placeholder("E-mail*")->id('mail')}}
                        {{htmlfilip()->error($errors->first('mail')) }}
                    </div>
                </div>
                {{htmlfilip()->textarea('comment')->placeholder("Message")->id('comment')->class('textarea--comment')}}
                {{htmlfilip()->error($errors->first('comment')) }}

                <button class="btn btn-lg btn-color btn-icon" type="submit" id="submit-message">
                    <span>Get In Touch</span>
                    <i class="fa fa-angle-right"></i>
                </button>
                <div id="msg" class="message"></div>

                {{htmlfilip()->form()->close()}}
            </div> <!-- end col -->

        </div>
    </div>
</section>