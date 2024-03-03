@include('index.navbar')

<section>
    <img src="https://wpbingosite.com/wordpress/homeunik/wp-content/uploads/2019/05/01.jpg" alt="Image">
    <div class="d-flex card-img-overlay text-center justify-content-center flex-column">
        <h4 class="txt">Explore More</h4>
        <h6><b>About US</b></h6>
    </div>
</section>
<section class="abt_main ">
    <div class="container mt-5">
        <div class="row">
            <div class="abt col-6" style=" ">
                <img class="card-img-top "
                    src="https://wpbingosite.com/wordpress/homeunik/wp-content/uploads/2023/12/about2.jpg">

                <p class="card-text mt-3">Some quick example text to build on the card title and make up the bulk of the
                    card's content.Our team takes over everything, from an idea and concept development to realization.
                    We believe in traditions and incorporate them within our innovations. All our projects incorporate a
                    unique artistic image and functional solutions. </br> </br>Client is the soul of the project. Our
                    main
                    goal is
                    to illustrate his/hers values and individuality through design.
                    A perfect blend of breathtaking architecture designed, with awe-inspiring interiors envisioned</p>

            </div>
            <div class="abt col-6" style=" ">
                <div class="card-text">
                    <h1 class="mt-5"> Our Awesome </br>
                        Story </h1>

                    <p>
                        Our team takes over everything, from an idea and concept development to realization. We believe
                        in
                        traditions and incorporate them within our innovations. All our projects incorporate a unique
                        artistic image and functional solutions. Client is the soul of the project. Our main goal is to
                        illustrate his/hers values and individuality through design.</br>
                    </p>
                    <p>
                        A perfect blend of breathtaking architecture designed, with awe-inspiring interiors envisioned
                    </p>

                </div>
                <img class="card-img-top mt-5"
                    src="https://wpbingosite.com/wordpress/homeunik/wp-content/uploads/2023/12/about3.jpg"
                    alt="Card image cap">
            </div>
        </div>
    </div>
</section>

{{-- testimonial --}}
<section class="container-testi">
    <h1 class="d-flex justify-content-center align-item-center">What My Clients Have to Say </h1>
    <div class="testimonial-row">
        <div class="single-testimonial">
            <button id="left" onclick="moveLeft()">
                <i class="fa fa-chevron-left fa-2x" aria-hidden="true"></i>
            </button>
            <button id="right" onclick="moveRight()">
                <i class="fa fa-chevron-right fa-2x" aria-hidden="true"></i>
            </button>
            <div id="testimonials-wrapper" class="text">
                <div class="testimonial testimonial-one">
                    <div class="testimonial-section__text-wrapper">
                        <p class="testimonial-section__text">
                            Suspendisse urna.Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non,
                            semper
                            suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum.
                        </p>
                    </div>
                    <p class="testimonial-section__name">
                        Elon Musk
                    </p>
                    <p class="testimonial-section__job-role">
                        CEO of SpaceX
                    </p>
                </div>

                <div class="testimonial testimonial-two">
                    <div class="testimonial-section__text-wrapper">
                        <p class="testimonial-section__text">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat
                            mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna.Nullam malesuada erat ut
                            turpis. Suspendisse urna nibh.
                        </p>
                    </div>
                    <p class="testimonial-section__name">
                        Bill Gates
                    </p>
                    <p class="testimonial-section__job-role">
                        Founder of Microsoft
                    </p>
                </div>

                <div class="testimonial testimonial-four">
                    <div class="testimonial-section__text-wrapper">
                        <p class="testimonial-section__text">
                            Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna. Nullam
                            malesuada erat ut turpis.
                        </p>
                    </div>
                    <p class="testimonial-section__name">
                        Richard Branson
                    </p>
                    <p class="testimonial-section__job-role">
                        Founder of Virgin Group
                    </p>
                </div>

                <div class="testimonial testimonial-five">
                    <div class="testimonial-section__text-wrapper">
                        <p class="testimonial-section__text">
                            Consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada
                            erat ut turpis. Suspendisse urna. Consectetuer adipiscing elit.
                        </p>
                    </div>
                    <p class="testimonial-section__name">
                        Thomas Edison
                    </p>
                    <p class="testimonial-section__job-role">
                        Inventor and businessman
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>

    <div id="images" class="testi-images">
        <div class="testi-image" onclick="showTestimonialByImage('0px')">
            <img src="https://wpbingosite.com/wordpress/homeunik/wp-content/uploads/2019/06/ourteam-3.jpg"
                alt="Testimonial Image 1">
        </div>
        <div class="testi-image" onclick="showTestimonialByImage('-500px')">
            <img src="https://wpbingosite.com/wordpress/homeunik/wp-content/uploads/2019/06/ourteam-1.jpg"
                alt="Testimonial Image 2">
        </div>
        <div class="testi-image active-image" onclick="showTestimonialByImage('-1000px')">
            <img src="https://wpbingosite.com/wordpress/homeunik/wp-content/uploads/2019/06/ourteam-3.jpg"
                alt="Testimonial Image 3">
        </div>
    </div>
</section>

@include('footer.footer')
