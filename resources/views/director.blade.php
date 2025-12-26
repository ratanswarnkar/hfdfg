@include('layouts.header')

<div class="breadcrumb-area project-breadcrumb">
    <h1 class="breadcrumb-title">Our Director</h1>
</div>

<section class="director-section py-5">
    <div class="container">
        <div class="row align-items-center">

            <!-- Director Image -->
            <div class="col-lg-4 text-center mb-4">
                <div class="director-img-wrapper">
                    <img src="/public/images/media/director.png" alt="Director Image" class="director-img">
                </div>
            </div>

            <!-- Director Bio -->
            <div class="col-lg-8">
                <h2 class="director-name">Rishabh Tiwari</h2>
                <h4 class="director-position">Founder & Director, FHDFG Technologies</h4>

                <span class="venor-animate-border"></span>

                <p class="director-bio">
                    With a strong vision for innovation and quality, Rishabh founded FHDFG Technologies to deliver modern,
                    scalable and result-driven technology solutions. Under his leadership, the company has grown
                    into a trusted partner for businesses seeking reliable digital transformation.
                </p>

                <p class="director-bio">
                    With expertise in software development, automation, and enterprise solutions, he ensures
                    every project meets the highest standards of performance, security, and customer satisfaction.
                </p>

                <ul class="director-highlights">
                    <li>10+ Years of Experience in Software Development</li>
                    <li>Led 120+ Successful Client Projects</li>
                    <li>Specialized in Laravel, AI, Automation & Cloud Systems</li>
                    <li>Known for Reliable Delivery & Strong Client Relationships</li>
                </ul>

                <!-- Social Icons -->
                <div class="director-social mt-4">
                    <a href="#" class="social-icon"><i class="fab fa-linkedin"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-icon"><i class="fas fa-envelope"></i></a>
                </div>
            </div>

        </div>
    </div>
</section>
<style>
    .director-section {
    background: #0a0a0a;
    color: #fff;
}

.director-img-wrapper {
    width: 260px;
    height: 260px;
    margin: 0 auto;
    border-radius: 50%;
    overflow: hidden;
    border: 3px solid #0c88ff;
    box-shadow: 0 0 15px rgba(0,123,255,0.4);
}

.director-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.director-name {
    font-size: 34px;
    font-weight: 700;
    color: #fff;
}

.director-position {
    font-size: 18px;
    font-weight: 500;
    color: #0c88ff;
}

.director-bio {
    font-size: 16px;
    color: #dcdcdc;
    line-height: 1.6;
    margin-bottom: 15px;
}

.director-highlights {
    list-style: none;
    padding: 0;
}

.director-highlights li {
    font-size: 15px;
    margin-bottom: 8px;
    padding-left: 20px;
    position: relative;
    color: #dcdcdc;
}

.director-highlights li::before {
    content: "✔";
    position: absolute;
    left: 0;
    color: #0c88ff;
}

.director-social a {
    display: inline-block;
    width: 45px;
    height: 45px;
    line-height: 45px;
    border-radius: 50%;
    background: #111;
    text-align: center;
    margin-right: 10px;
    font-size: 18px;
    color: #0c88ff;
    border: 1px solid #0c88ff;
    transition: 0.3s;
}

.director-social a:hover {
    background: #0c88ff;
    color: #fff;
    box-shadow: 0 0 15px rgba(0,123,255,0.5);
}

</style>


@include('layouts.footer')