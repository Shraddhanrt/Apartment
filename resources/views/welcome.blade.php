@include('index.navbar')

<div id="carouselExampleIndicators" class="carousel slide mt-0" data-ride="carousel">
    {{-- <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol> --}}
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100"
                src="https://wpbingosite.com/wordpress/homeunik/wp-content/uploads/2023/11/img2-1.jpg " alt="First slide">
            <div class="d-flex card-img-overlay text-center justify-content-center flex-column">
                <h5 class="txt">Discover Your Home</h5>
                <h6><b>you'll love to live</b></h6>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100"
                src="https://wpbingosite.com/wordpress/homeunik/wp-content/uploads/2023/11/img6-1.jpg"
                alt="Second slide">
            <div class="d-flex card-img-overlay text-center justify-content-center flex-column">
                <h5 class="txt">Discover Your Home</h5>
                <h6><b>you'll love to live</b></h6>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100"
                src="https://wpbingosite.com/wordpress/homeunik/wp-content/uploads/2023/11/img7.jpg" alt="Third slide">
            <div class="d-flex card-img-overlay text-center justify-content-center flex-column">
                <h5 class="txt">Discover Your Home</h5>
                <h6><b>you'll love to live</b></h6>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
{{-- description --}}
<section class="des ">
    <div class="container mt-5">
        <div class="row">
            <div class="col-6 mt-5">
                <img src="https://wpbingosite.com/wordpress/homeunik/wp-content/uploads/2023/11/img1-1.jpg"
                    style="max-width: 80%; height: auto; display: block; margin-bottom:30px">
            </div>
            <div class="col-6 mt-5">
                <h1>We create <br /> spaces for luxury living</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et.
                </p>
                <ul>
                    <li>Human-Centered Design Friendly Spaces</li>
                    <li>Flexible, Contemporary Spaces</li>
                    <li>Stage and lighting design</li>
                </ul>
                <button type="button" class="oval-button mt-4">
                    About Us
                </button>
            </div>
        </div>
    </div>
</section>





{{-- apartment suggestion --}}
<div class="container">
    <div class="row align-items-start row-cols-1 row-cols-md-3 g-4 mt-5">
        <div class="col-md-4">
            <div class="card h-100">
                <img src="https://wpbingosite.com/wordpress/homeunik/wp-content/uploads/2023/11/img2-1.jpg"
                    class="card-img-top" alt="...">
                <div class="d-flex card-img-overlay text-center justify-content-center flex-column">
                    <h4 class="txt">Future Apartment</h4>
                    <a class="link" href="#">View More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100">
                <img src="https://wpbingosite.com/wordpress/homeunik/wp-content/uploads/2023/11/img4-1.jpg"
                    class="card-img-top" alt="...">
                <div class="d-flex card-img-overlay text-center justify-content-center flex-column">
                    <h4 class="txt">Cheap Apartment</h4>
                    <a class="link" href="#">View More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100">
                <img src="https://wpbingosite.com/wordpress/homeunik/wp-content/uploads/2023/11/img3-1.jpg"
                    class="card-img-top" alt="...">
                <div class="d-flex card-img-overlay text-center justify-content-center flex-column">
                    <h4 class="txt">Studio Apartment</h4>
                    <a class="link" href="#">View More</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row align-items-start row-cols-1 row-cols-md-3 g-4 mt-5">
        <div class="col-md-4">
            <div class="card h-100">
                <img src="https://wpbingosite.com/wordpress/homeunik/wp-content/uploads/2023/11/img4-1.jpg"
                    class="card-img-top" alt="...">
                <div class="d-flex card-img-overlay text-center justify-content-center flex-column">
                    <h4 class="txt">Future Apartment</h4>
                    <a class="link" href="#">View More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100">
                <img src="https://wpbingosite.com/wordpress/homeunik/wp-content/uploads/2023/11/img3-1.jpg"
                    class="card-img-top" alt="...">
                <div class="d-flex card-img-overlay text-center justify-content-center flex-column">
                    <h4 class="txt">Cheap Apartment</h4>
                    <a class="link" href="#">View More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100">
                <img src="https://wpbingosite.com/wordpress/homeunik/wp-content/uploads/2023/11/img7.jpg"
                    class="card-img-top" alt="...">
                <div class="d-flex card-img-overlay text-center justify-content-center flex-column">
                    <h4 class="txt">Studio Apartment</h4>
                    <a class="link" href="#">View More</a>
                </div>
            </div>
        </div>
    </div>
</div>






{{-- Apartment --}}

<section class="mt-5">
    <div class="container_main">

        <h3 class="text-center py-3">Inspiring Built Space <br> Everything you need is right here.</h3>

        <div class="row">
            <div class="col-md-6 mt-5">
                <!-- Isotope menu -->
                <div class="container_menu_iso mb-4">
                    <div class="menu_iso" id="custom-filter">
                        <li><a data-filter=".item1"> DUPLEX</a></li>
                        <li><a data-filter=".item2"> HEIGHT</a></li>
                        <li><a data-filter=".item3">PENTHOUSE</a></li>
                        <li><a data-filter=".item4">STUDIO</a></li>
                    </div>
                </div>

                <div class="iso-container mt-5" style="margin-left: 20px">

                    <!-- item1=1blue|| item2=red || item3=pink -->

                    <!-- ----1---- -->
                    <div class=" cent isotope-item item1">
                        <div class="contain">
                            <p> The layout of an apartment floor includes a combination of individual units,
                                corridors,
                                stairwells, elevators, and communal areas such as lobbies or common rooms. Each
                                apartment
                                unit on a floor usually consists of specific rooms like bedrooms, bathrooms, a living
                                area, a kitchen, and sometimes additional spaces like balconies or utility areas.</p>
                            <br>
                            <section class="box d-flex justify-content-between ">
                                <div class="elementor">
                                    <h6> BATHROOM </h6>
                                </div>
                                <div class="elementor ">
                                    <h6>
                                        10
                                    </h6>
                                </div>
                            </section>
                            <hr class="mt-3">
                            <section class="box d-flex justify-content-between ">
                                <div class="elementor">
                                    <h6> FLOOR NO </h6>
                                </div>
                                <div class="elementor ">
                                    <h6>
                                        100
                                    </h6>
                                </div>
                            </section>
                            <hr class="mt-3">
                            <section class="box d-flex justify-content-between ">
                                <div class="elementor">
                                    <h6>
                                        TOTAL AREA, SQ.M.</h6>
                                </div>
                                <div class="elementor ">
                                    <h6>
                                        350
                                    </h6>
                                </div>
                            </section>
                            <hr class="mt-3">
                            <section class="box d-flex justify-content-between ">
                                <div class="elementor">
                                    <h6>
                                        ROOMS </h6>
                                </div>
                                <div class="elementor ">
                                    <h6>
                                        50
                                    </h6>
                                </div>
                            </section>
                            <hr class="mt-3">
                            <section class="box d-flex justify-content-between ">
                                <div class="elementor">
                                    <h6>
                                        AMENITIES </h6>
                                </div>
                                <div class="elementor ">
                                    <h6>
                                        24h concierge, gym
                                        SCHEDULE A VISIT

                                    </h6>
                                </div>
                            </section>
                            <hr class="mt-3">

                        </div>
                    </div>

                    <!-- ----2---- -->
                    <div class=" cent isotope-item item2">
                        <div class="contain">
                            <p> Apartments Double Height refer to the levels or stories within a multi-storey
                                residential building that accommodate individual living spaces or units. Each
                                floor typically comprises a set of apartments, with the layout and number of units
                                varying depending on the building’s design and size.</p>
                            <br>
                            <section class="box d-flex justify-content-between ">
                                <div class="elementor">
                                    <h6> BATHROOM </h6>
                                </div>
                                <div class="elementor ">
                                    <h6>
                                        10
                                    </h6>
                                </div>
                            </section>
                            <hr class="mt-3">
                            <section class="box d-flex justify-content-between ">
                                <div class="elementor">
                                    <h6> FLOOR NO </h6>
                                </div>
                                <div class="elementor ">
                                    <h6>
                                        100
                                    </h6>
                                </div>
                            </section>
                            <hr class="mt-3">
                            <section class="box d-flex justify-content-between ">
                                <div class="elementor">
                                    <h6>
                                        TOTAL AREA, SQ.M.</h6>
                                </div>
                                <div class="elementor ">
                                    <h6>
                                        350
                                    </h6>
                                </div>
                            </section>
                            <hr class="mt-3">
                            <section class="box d-flex justify-content-between ">
                                <div class="elementor">
                                    <h6>
                                        ROOMS </h6>
                                </div>
                                <div class="elementor ">
                                    <h6>
                                        50
                                    </h6>
                                </div>
                            </section>
                            <hr class="mt-3">
                            <section class="box d-flex justify-content-between ">
                                <div class="elementor">
                                    <h6>
                                        AMENITIES </h6>
                                </div>
                                <div class="elementor ">
                                    <h6>
                                        24h concierge, gym
                                        SCHEDULE A VISIT

                                    </h6>
                                </div>
                            </section>
                            <hr class="mt-3">
                        </div>
                    </div>
                    <!-- ----3---- -->
                    <div class=" cent isotope-item item3">
                        <div class="contain">
                            <p> Apartments Double Height refer to the levels or stories within a
                                multi-storey
                                residential building that accommodate individual living spaces or units.
                                Each
                                floor typically comprises a set of apartments, with the layout and number
                                of units
                                varying depending on the building’s design and size.</p>
                            <br>
                            <section class="box d-flex justify-content-between ">
                                <div class="elementor">
                                    <h6> BATHROOM </h6>
                                </div>
                                <div class="elementor ">
                                    <h6>
                                        10
                                    </h6>
                                </div>
                            </section>
                            <hr class="mt-3">
                            <section class="box d-flex justify-content-between ">
                                <div class="elementor">
                                    <h6> FLOOR NO </h6>
                                </div>
                                <div class="elementor ">
                                    <h6>
                                        100
                                    </h6>
                                </div>
                            </section>
                            <hr class="mt-3">
                            <section class="box d-flex justify-content-between ">
                                <div class="elementor">
                                    <h6>
                                        TOTAL AREA, SQ.M.</h6>
                                </div>
                                <div class="elementor ">
                                    <h6>
                                        350
                                    </h6>
                                </div>
                            </section>
                            <hr class="mt-3">
                            <section class="box d-flex justify-content-between ">
                                <div class="elementor">
                                    <h6>
                                        ROOMS </h6>
                                </div>
                                <div class="elementor ">
                                    <h6>
                                        50
                                    </h6>
                                </div>
                            </section>
                            <hr class="mt-3">
                            <section class="box d-flex justify-content-between ">
                                <div class="elementor">
                                    <h6>
                                        AMENITIES </h6>
                                </div>
                                <div class="elementor ">
                                    <h6>
                                        24h concierge, gym
                                        SCHEDULE A VISIT

                                    </h6>
                                </div>
                            </section>
                            <hr class="mt-3">
                        </div>
                    </div>
                    <!-- ----4---- -->
                    <div class=" cent isotope-item item4">
                        <div class="contain">
                            <p> Apartments Double Height refer to the levels or stories within a
                                multi-storey
                                residential building that accommodate individual living spaces or
                                units. Each
                                floor typically comprises a set of apartments, with the layout and
                                number of units
                                varying depending on the building’s design and size.</p>
                            <br>
                            <section class="box d-flex justify-content-between ">
                                <div class="elementor">
                                    <h6> BATHROOM </h6>
                                </div>
                                <div class="elementor ">
                                    <h6>
                                        10
                                    </h6>
                                </div>
                            </section>
                            <hr class="mt-3">
                            <section class="box d-flex justify-content-between ">
                                <div class="elementor">
                                    <h6> FLOOR NO </h6>
                                </div>
                                <div class="elementor ">
                                    <h6>
                                        100
                                    </h6>
                                </div>
                            </section>
                            <hr class="mt-3">
                            <section class="box d-flex justify-content-between ">
                                <div class="elementor">
                                    <h6>
                                        TOTAL AREA, SQ.M.</h6>
                                </div>
                                <div class="elementor ">
                                    <h6>
                                        350
                                    </h6>
                                </div>
                            </section>
                            <hr class="mt-3">
                            <section class="box d-flex justify-content-between ">
                                <div class="elementor">
                                    <h6>
                                        ROOMS </h6>
                                </div>
                                <div class="elementor ">
                                    <h6>
                                        50
                                    </h6>
                                </div>
                            </section>
                            <hr class="mt-3">
                            <section class="box d-flex justify-content-between ">
                                <div class="elementor">
                                    <h6>
                                        AMENITIES </h6>
                                </div>
                                <div class="elementor ">
                                    <h6>
                                        24h concierge, gym
                                        SCHEDULE A VISIT

                                    </h6>
                                </div>
                            </section>
                            <hr class="mt-3">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-5">
                <img src="https://wpbingosite.com/wordpress/homeunik/wp-content/uploads/2023/11/img5.png"
                    alt="img" class="img-fluid">
            </div>

        </div>
    </div>
</section>

{{-- Aminities --}}

<div class="container mt-5 mb-5 ami">
    <h1 class="align-items-center justify-content-center d-flex" style="color: #0d2d71;">Aminites</h1>
    <div class="row mt-5 mb-0">
        <div class="col text-center">
            <i class="fas fa-wifi fa-3x"></i>
            <span class="d-block mt-2">FAST SPEED WiFi</span>
        </div>
        <div class="col text-center">
            <i class="fas fa-tv fa-3x"></i>
            <span class="d-block mt-2">SMART APPLIANCES </span>
        </div>
        <div class="col text-center">
            <i class="fas fa-water fa-3x"></i>
            <span class="d-block mt-2">SWIMMING POOL </span>
        </div>
        <div class="col text-center">
            <i class="fas fa-house fa-3x"></i>
            <span class="d-block mt-2">GARAGE</span>
        </div>
    </div>
    <div class="row mt-5 mb-0">
        <div class="col text-center">
            <i class="fas fa-lightbulb fa-3x"></i>
            <span class="d-block mt-2">Light</span>
        </div>
        <div class="col text-center">
            <i class="fas fa-dumbbell fa-3x"></i>
            <span class="d-block mt-2">FITNESS CENTER</span>
        </div>
        <div class="col text-center">
            <i class="fas fa-elevator fa-3x"></i>
            <span class="d-block mt-2">ELEVATOR ACCESS</span>
        </div>
        <div class="col text-center">
            <i class="fas fa-hand-holding-heart fa-3x"></i>
            <span class="d-block mt-2">HEALTH </span>
        </div>
    </div>
</div>



{{-- contact us --}}
<div class="container-play w-100 position-relative mt-5">
    <img src="https://wpbingosite.com/wordpress/homeunik/wp-content/uploads/2019/05/01.jpg" alt="img"
        class="d-block w-100 h-30 image">
    <div
        class="overlay-container position-absolute top-0 start-0 end-0 bottom-0 d-flex justify-content-center align-items-center flex-column">
        <a href="https://youtu.be/7EHnQ0VM4KY?si=VTbFtFO2lj-pJQ9Z" target="_blank" class="play">
            <span><i class="fa fa-thin fa-play"></i> </span></a>

        <h1 class="mt-4" style="color: white;   text-align-last: center;">Have a Contact Us?<br>
            We are glad to contact you!!!</h1>


        <!-- Button trigger modal -->
        <button type="button" class="oval-button mt-4" data-toggle="modal" data-target="#exampleModalCenter">
            Schedule A Visit
        </button>
        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header justify-content-center">
                        <h5 class="modal-title" id="exampleModalLongTitle">Schedule a Visit</h5>
                    </div>
                    <div class="modal-body mb-0">
                        <form>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="name"
                                            placeholder="Enter your name">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" class="form-control" id="email"
                                            placeholder="Enter your email">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="date" class="form-control" id="date">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="time" class="form-control" id="time"
                                            placeholder="Enter the desired time">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" id="message" rows="3" placeholder="Enter your message"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer mt-2">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




{{-- Our Team --}}
<div class="container mt-5">
    <h1 class="align-item-center justify-content-center d-flex">Our Team</h1>
    - <div class="row row-cols-1 row-cols-md-3 g-4 mt-1">
        <div class="col">
            <div class="card">
                <img src="https://wpbingosite.com/wordpress/homeunik/wp-content/uploads/2023/12/about4.jpg "
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">RICHARD LEOSO</h5>
                    <p class="card-text"> Cette propriété est bien plus qu’un simple bien immobilier. Elle incarne
                        un
                        style de vie exclusif, où le raffinement.</p>
                    <div class="mt-2 ml-5 d-flex justify-content-center">

                        <i style="font-size:15px;" class="fa fa -thin">&#xf09a;</i>
                        <i style="font-size:15px; margin-left:1rem" class="fa">&#xf16d;</i>
                        <i style="font-size:15px; margin-left:1rem" class='fab'>&#xf099;</i>

                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src=" https://wpbingosite.com/wordpress/homeunik/wp-content/uploads/2023/12/about5.jpg"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"> ROBERT ANDREW</h5>
                    <p class="card-text">Every day spent in this property is an affirmation of its uniqueness and
                        exceptional character. The breathtaking panoramic view</p>
                    <div class="mt-2 ml-5 d-flex justify-content-center">
                        <i style="font-size:15px;" class="fa fa -thin">&#xf09a;</i>
                        <i style="font-size:15px; margin-left:1rem" class="fa">&#xf16d;</i>
                        <i style="font-size:15px; margin-left:1rem" class='fab'>&#xf099;</i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="https://wpbingosite.com/wordpress/homeunik/wp-content/uploads/2023/12/about6.jpg "
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">JENNIFER MARY </h5>
                    <p class="card-text">The lush, carefully landscaped garden provides a peaceful retreat, while
                        modern amenities and integrated technologies </p>
                    <div class="mt-2 ml-5 d-flex justify-content-center">

                        <i style="font-size:15px;" class="fa fa -thin">&#xf09a;</i>
                        <i style="font-size:15px; margin-left:1rem" class="fa">&#xf16d;</i>
                        <i style="font-size:15px; margin-left:1rem" class='fab'>&#xf099;</i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Our blog --}}
<div class="container mt-5">
    <h1 class="align-item-center justify-content-center d-flex mb-5">Read Our Blog</h1>
    <div class="owl-carousel owl-theme">
        <div class="item">
            <div class="blog-post">
                <img src="https://wpbingosite.com/wordpress/homeunik/wp-content/uploads/2019/05/02.jpg"
                    alt="Blog Image">
                <span class="blog-date">January 15, 2024</span>
            </div>
            <span>
                <h6 class="align-item-left justify-content-left d-flex mt-3">ARCHITECTURE </h6>
            </span>
            <span>
                <h4>8-bit kale chips proident chill</h4>
            </span>
        </div>
        <div class="item">
            <div class="blog-post">
                <div class="swipe">
                    <img src="https://wpbingosite.com/wordpress/homeunik/wp-content/uploads/2019/05/01.jpg"
                        alt="Blog Image">
                    <span class="blog-date">February 10, 2024</span>
                </div>
            </div>
            <span>
                <h6 class="align-item-left justify-content-left d-flex mt-3">ARCHITECTURE </h6>
            </span>
            <span>
                <h4>8-bit kale chips proident chill</h4>
            </span>
        </div>
        <!-- Additional items go here -->
    </div>
</div>

@include('footer.footer')
