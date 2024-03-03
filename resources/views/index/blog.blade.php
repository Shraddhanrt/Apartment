@include('index.navbar')

<div class="container mt-5">
    <h1 class="align-item-center justify-content-center d-flex mb-5">Read Our Blog</h1>
    <div class="owl-carousel owl-theme">
        <div class="item">
            <div class="blog-post">
                <a href= "{{ route('blog1') }}"><img
                        src="https://wpbingosite.com/wordpress/homeunik/wp-content/uploads/2019/05/02.jpg"
                        alt="Blog Image">
                    <span class="blog-date">January 15, 2024</span>
                </a>
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
