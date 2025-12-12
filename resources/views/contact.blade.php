@include('layouts.header')
    <div class="banner-section" data-background-image-url="https://asytech.in/public/images/media/1650711878Consult_header-19.jpg">
        <div class="container">
            <h1 class="banner-title">We’d Love to Hear From You!</h1>
            <p class="banner-desc">Our expert team is here to assist with all your digital needs. From web design to custom software, we’re ready to help you succeed.</p>
            <div class="service-details-link">
                <a href="/portfolio" target="_self" class="btn btn-slider"><span>Explore Our Services</span>  <svg width="11.4" height="9.2"> <use xlink:href="#arrow"></use></svg></a>
            </div>
        </div>
    </div>
    <div class="iframe-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="contact-element-wrapper">
                                <div class="contact-element">
                                    <div class="content">
                                        <h3 class="title">Our address</h3>
                                        <div style="color:#bdbdbd;">
                                            <p><a>A -1314, Tower 3, NX ONE, TECH ZONE - 4, Amrapali Dream Valley, Greater Noida, Uttar Pradesh 201318</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-element-wrapper">
                                <div class="contact-element">
                                    <div class="content">
                                        <h3 class="title">Our emails</h3>
                                        <p><a href="mailto:contact@FHDFG.in">contact@FHDFG.in</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contact-element-wrapper phone-numbers">
                        <div class="contact-element">
                            <div class="content">
                                <h3 class="title">Call us today</h3>
                                <p><a>+91 9711210854</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="description-contact">
                        <h4>If you really got this far, you are great. Not just for that, but because you are passionately working on your project every day. Our Motivation is to improve the internal workflow, so, for more effectiveness, please check out
                            our Terms and Conditions.</h4>
                    </div>
                </div>
                <div class="col-md-6">
                    <h3>Send us a message</h3>
                    <script src="https://www.google.com/recaptcha/api.js?" async defer></script>
                    <form method="POST" action="https://asytech.in/contact">
                        <input type="hidden" name="_token" value="R8njcZXz1C6nyUcS6RO5m94cfyRT4KOLtRGn0oLT">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group ">
                                    <input name="name" type="text" class="form-control" id="name" aria-describedby="name" placeholder=" Name ">
                                    <span class="text-danger"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group ">
                                    <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email">
                                    <span class="text-danger"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group ">
                                    <input name="phone" type="text" class="form-control" id="phone" aria-describedby="name" placeholder="Phone">
                                    <span class="text-danger"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group ">
                                    <input name="budget" type="text" class="form-control" id="budget" aria-describedby="emailHelp" placeholder="Budget">
                                    <span class="text-danger"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <textarea name="comment" placeholder="Message" class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                            <span class="text-danger"></span>
                        </div>
                        <button type="submit" class="btn btn-style1">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="contact-map">
            <p><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7005.930318920792!2d77.434416!3d28.600822!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cef29ba0e1a4f%3A0x63538614dd1688af!2sNX%20One%20Avenue.!5e0!3m2!1sen!2sin!4v1765448197457!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
        </div>
    </div>
   @include('layouts.footer')