@include('layouts.header')

<div class="breadcrumb-area project-breadcrumb">
    <h1 class="breadcrumb-title">Our Director</h1>
</div>

<section class="director-note-section py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <article class="director-note-card" aria-labelledby="director-note-title">
                    <div class="director-strip" aria-hidden="true"></div>
                    <header class="director-note-header">
                        <p class="director-note-eyebrow">Leadership Message</p>
                        <h2 id="director-note-title" class="director-note-title">Director's Note</h2>
                        <div class="director-note-divider" aria-hidden="true">
                            <span class="director-note-divider-dot"></span>
                        </div>
                        <h3 class="director-name">Rishabh Tiwari</h3>
                        <p class="director-role">Founder &amp; Director, FHDFG Technologies</p>
                    </header>

                    <blockquote class="director-quote">
                        <span class="director-quote-icon" aria-hidden="true">&#10077;</span>
                        "We build technology that solves real business problems and scales with confidence."
                    </blockquote>

                    <div class="director-message">
                        <p>
                            At FHDFG Technologies, our vision is to help organizations transform through reliable, practical,
                            and future-ready digital solutions. Every engagement is approached with a commitment to quality,
                            long-term value, and measurable outcomes.
                        </p>
                        <p>
                            We focus on creating systems that are secure, scalable, and aligned with real operational needs.
                            From product strategy to execution, our team works with discipline and clarity to ensure that
                            each solution performs consistently in real-world conditions.
                        </p>
                        <p>
                            Our goal is to remain a trusted technology partner for businesses that expect strong engineering,
                            transparent collaboration, and dependable delivery.
                        </p>
                    </div>

                    <section class="director-focus" aria-label="Director focus areas">
                        <h4 class="director-focus-title">Vision, Mission, Values</h4>
                        <ul class="director-focus-list">
                            <li><strong>Vision:</strong> Build practical technology that creates durable business impact.</li>
                            <li><strong>Mission:</strong> Deliver secure, scalable solutions with clear execution discipline.</li>
                            <li><strong>Values:</strong> Ownership, engineering quality, transparency, and client trust.</li>
                        </ul>
                    </section>
                </article>
            </div>
        </div>
    </div>
</section>

<style>
.director-note-section {
    background: #000000;
    color: #ffffff;
}

.director-note-card {
    background: #000000;
    border: 1px solid #2a2a2a;
    border-radius: 16px;
    padding: 44px 40px;
    box-shadow: 0 18px 45px rgba(31, 45, 61, 0.08);
    text-align: center;
}

.director-strip {
    width: 160px;
    height: 8px;
    margin: 0 auto 18px;
    border-radius: 99px;
    background: linear-gradient(90deg, #1f1f1f 0%, #363636 50%, #1f1f1f 100%);
}

.director-note-header {
    text-align: center;
    margin-bottom: 24px;
}

.director-note-eyebrow {
    margin: 0 0 10px;
    text-transform: uppercase;
    letter-spacing: 1.4px;
    font-size: 12px;
    font-weight: 700;
    color: #ffffff;
}

.director-note-title {
    margin: 0;
    font-size: 36px;
    line-height: 1.2;
    font-weight: 700;
    color: #ffffff;
}

.director-note-divider {
    width: 90px;
    height: 14px;
    border-radius: 99px;
    margin: 18px auto;
    position: relative;
}

.director-note-divider::before {
    content: "";
    position: absolute;
    left: 0;
    right: 0;
    top: 6px;
    height: 2px;
    background: linear-gradient(90deg, #5a5a5a, #ffffff, #5a5a5a);
}

.director-note-divider-dot {
    display: inline-block;
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background: #ffffff;
    border: 2px solid #000000;
    box-shadow: 0 0 0 2px #4a4a4a;
    position: relative;
    z-index: 1;
}

.director-name {
    margin: 0;
    font-size: 28px;
    line-height: 1.3;
    font-weight: 700;
    color: #ffffff;
}

.director-role {
    margin: 8px 0 0;
    font-size: 16px;
    font-weight: 600;
    color: #ffffff;
}

.director-quote {
    margin: 0 0 26px;
    padding: 22px 24px;
    background: #0f0f0f;
    border-left: 4px solid #ffffff;
    border-radius: 10px;
    font-size: 19px;
    line-height: 1.6;
    color: #ffffff;
    text-align: left;
    font-style: italic;
    position: relative;
}

.director-quote-icon {
    display: inline-block;
    font-size: 30px;
    line-height: 1;
    color: #ffffff;
    margin-right: 8px;
    vertical-align: -3px;
}

.director-message p {
    margin: 0 0 16px;
    font-size: 16px;
    line-height: 1.85;
    color: #ffffff;
    text-align: left;
}

.director-focus {
    margin-top: 28px;
    padding-top: 24px;
    border-top: 1px solid #2a2a2a;
}

.director-focus-title {
    margin: 0 0 14px;
    font-size: 18px;
    font-weight: 700;
    color: #ffffff;
    text-align: left;
}

.director-focus-list {
    margin: 0;
    padding: 0;
    list-style: none;
}

.director-focus-list li {
    position: relative;
    padding-left: 22px;
    margin-bottom: 10px;
    font-size: 15px;
    color: #ffffff;
    line-height: 1.65;
    text-align: left;
}

.director-focus-list li::before {
    content: "";
    position: absolute;
    left: 0;
    top: 10px;
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: #ffffff;
}

@media (max-width: 991px) {
    .director-note-card {
        padding: 36px 28px;
    }

    .director-note-title {
        font-size: 31px;
    }

    .director-name {
        font-size: 24px;
    }

    .director-quote {
        font-size: 17px;
    }
}

@media (max-width: 575px) {
    .director-note-card {
        padding: 28px 20px;
        border-radius: 12px;
    }

    .director-note-title {
        font-size: 27px;
    }

    .director-name {
        font-size: 22px;
    }

    .director-role {
        font-size: 15px;
    }

    .director-message p {
        font-size: 15px;
        line-height: 1.75;
    }

    .director-focus-list li {
        font-size: 14px;
    }
}
</style>

@include('layouts.footer')
