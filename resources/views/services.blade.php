@include('layouts.header')

<div class="banner-section" data-background-image-url="https://asytech.in/public/images/media/16493302651633880725portf_header-16.webp">
    <div class="container">
        <h1 class="banner-title">Our Services</h1>
        <p class="banner-desc">Web Development, Software & Digital Solutions</p>
        <div class="service-details-link">
            <a href="/contact" target="_self" class="btn btn-slider">
                <span>Get in Touch</span>
                <svg width="11.4" height="9.2"><use xlink:href="#arrow"></use></svg>
            </a>
        </div>
    </div>
</div>

<div class="portfolio-section-filters">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="projects projects-page row">

                    <!-- SERVICE 1 -->
                    <div class="project col-md-4" data-filter="Creating responsive and dynamic websites.">
                        <div class="project-inner">
                            <div class="project-thumbnail">
                                <a href="/services/service1" title="">
                                    <img class="lazy-img" width="400" height="250"
                                         src="/public/img/loading-blog.gif"
                                         data-src="/public/images/media/1751018839cloudbyte-solutions-com-1024x768desktop-ce15a6.png">
                                </a>
                            </div>
                            <h4 class="entry-details-title">
                                <a href="/services/service1">
                                    Creating responsive and dynamic websites.
                                </a>
                            </h4>
                            <h5 class="project-category">Web Development</h5>
                        </div>
                    </div>

                    <!-- SERVICE 2 -->
                    <div class="project col-md-4" data-filter="Innovative mobile applications.">
                        <div class="project-inner">
                            <div class="project-thumbnail">
                                <a href="/services/service2" title="">
                                    <img class="lazy-img" width="400" height="250"
                                         src="/public/img/loading-blog.gif"
                                         data-src="/public/images/media/16483041541648287778oh__img69-819x1024.jpg">
                                </a>
                            </div>
                            <h4 class="entry-details-title">
                                <a href="/services/service2">
                                    Innovative mobile applications.
                                </a>
                            </h4>
                            <h5 class="project-category">App Development</h5>
                        </div>
                    </div>

                    <!-- SERVICE 3 -->
                    <div class="project col-md-4" data-filter="Integrated ERP Solutions for Business Excellence">
                        <div class="project-inner">
                            <div class="project-thumbnail">
                                <a href="/services/service3" title="">
                                    <img class="lazy-img" width="400" height="250"
                                         src="/public/img/loading-blog.gif"
                                         data-src="/public/images/media/1750926287gabriel-benois-qnWPjzewewA-unsplash (1).jpg">
                                </a>
                            </div>
                            <h4 class="entry-details-title">
                                <a href="/services/service3">
                                    Integrated ERP Solutions for Business Excellence
                                </a>
                            </h4>
                            <h5 class="project-category">Unify Operations, Optimize Resources &amp; Drive Growth</h5>
                        </div>
                    </div>

                    <!-- SERVICE 4 -->
                    <div class="project col-md-4" data-filter="Modern HRMS for Streamlined Workforce Management">
                        <div class="project-inner">
                            <div class="project-thumbnail">
                                <a href="/services/service4" title="">
                                    <img class="lazy-img" width="400" height="250"
                                         src="/public/img/loading-blog.gif"
                                         data-src="/public/images/media/1750925876microsoft-365-oUbzU87d1Gc-unsplash (1).jpg">
                                </a>
                            </div>
                            <h4 class="entry-details-title">
                                <a href="/services/service4">
                                    Modern HRMS for Streamlined Workforce Management
                                </a>
                            </h4>
                            <h5 class="project-category">Automate HR Processes &amp; Empower Your Team</h5>
                        </div>
                    </div>

                    <!-- SERVICE 5 -->
                    <div class="project col-md-4" data-filter="Smart CRM Solutions for Seamless Customer Management">
                        <div class="project-inner">
                            <div class="project-thumbnail">
                                <a href="/services/service5" title="">
                                    <img class="lazy-img" width="400" height="250"
                                         src="/public/img/loading-blog.gif"
                                         data-src="/public/images/media/1750931279obi-uUNtBBG9pcY-unsplash (1).jpg">
                                </a>
                            </div>
                            <h4 class="entry-details-title">
                                <a href="/services/service5">
                                    Smart CRM Solutions for Seamless Customer Management
                                </a>
                            </h4>
                            <h5 class="project-category">Boost Sales, Enhance Engagement &amp; Automate Workflows</h5>
                        </div>
                    </div>

                    <!-- SERVICE 6 -->
                    <div class="project col-md-4" data-filter="Smart Hospital Management System | Digital Healthcare Solutions">
                        <div class="project-inner">
                            <div class="project-thumbnail">
                                <a href="/services/service6" title="">
                                    <img class="lazy-img" width="400" height="250"
                                         src="/public/img/loading-blog.gif"
                                         data-src="/public/images/media/1750931198nathan-dumlao-kLmt1mpGJVg-unsplash (1).jpg">
                                </a>
                            </div>
                            <h4 class="entry-details-title">
                                <a href="/services/service6">
                                    Smart Hospital Management System | Digital Healthcare Solutions
                                </a>
                            </h4>
                            <h5 class="project-category">Streamline Patient Care, Administration &amp; Medical Operations</h5>
                        </div>
                    </div>

                </div> <!-- /projects -->

            </div>
        </div>
    </div>
</div>

<!-- LAZY LOAD SCRIPT (NOW WORKS 100%) -->
<script>
document.addEventListener("DOMContentLoaded", function () {
    const lazyImgs = document.querySelectorAll(".lazy-img");
    lazyImgs.forEach(img => {
        const src = img.getAttribute("data-src");
        if (src) {
            img.setAttribute("src", src);
        }
    });
});
</script>

@include('layouts.footer')
