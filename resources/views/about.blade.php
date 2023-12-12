@extends('layout')
@section('title', 'About')

@section('content')

<!-- Banner Section -->
<section class="banner">
    <h2 class="banner-subtitle banner-subtitle-pages subtitle">THE ULTIMATE LUXURY</h2>
    <h1 class="banner-main-title main-title main-title-white about-title">
        About Us
    </h1>
    <div class="breadcrumb">
        <a href="./index.php" class="a breadcrumb_a">Home</a><span class="breadcrumb_line">|</span><span class="breadcrumb_current">About</span>
    </div>
</section>
<!-- About Video Section -->
<section class="about">
    <div class="about-video">
        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/Bu3Doe45lcU?si=_OomfvosXdgaSATd&amp;start=25&end=80;" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
    <p class="about-paragraph">
        Hello. Our hotel has been present for over 20 years. We make the best
        for all our customers.
    </p>
</section>
<!-- Amenities Section -->
<section class="amenities">
    <div class="amenities_container">
        <div class="amenities_container_item">
            <img class="amenities_container_item-breakfast" src="/icons/amenities/breakfast.svg" alt="breakfast" />
            <h4 class="amenities_container_item-text">BREAKFAST</h4>
        </div>
        <div class="amenities_container_item">
            <img class="amenities_container_item-pickup" src="/icons/amenities/pickup.png" alt="airport pickup" />
            <h4 class="amenities_container_item-text">AIRPORT PICKUP</h4>
        </div>
        <div class="amenities_container_item">
            <img class="amenities_container_item-guide" src="/icons/amenities/guide.svg" alt="city guide" />
            <h4 class="amenities_container_item-text">CITY GUIDE</h4>
        </div>
        <div class="amenities_container_item bbq--off">
            <img class="amenities_container_item-bbq" src="/icons/amenities/bbq.svg" alt="barbecue" />
            <h4 class="amenities_container_item-text">BBQ PARTY</h4>
        </div>
        <div class="amenities_container_item">
            <img class="amenities_container_item-luxury" src="/icons/amenities/luxury.svg" alt="luxury room" />
            <h4 class="amenities_container_item-text">LUXURY ROOM</h4>
        </div>
    </div>
</section>
<!-- Restaurant Section -->
<section class="restaurant">
    <div class="restaurant_container">
        <img src="/assets/about/restaurant.jpg" alt="restaurant" />
        <div class="restaurant_container_text">
            <h2 class="restaurant_subtitle">RESTAURANT</h2>
            <h1 class="restaurant_title">
                Get Restaurant Facilities & Many Other More
            </h1>
            <p class="restaurant_paragraph">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tem por incididunt ut labore et dolore magna aliqua. Ut enim
                ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip.
            </p>
            <a href="/rooms.php" class="button button_small button_small--gold">
                <div class="button_text">TAKE A TOUR</div>
            </a>
        </div>
    </div>
</section>
<!-- Facilities Section -->
<section class="facilities facilities--dark">
    <h2 class="subtitle facilities-subtitle facilities-subtitle--dark">
        FACILITIES
    </h2>
    <h1 class="main-title main-title-centered main-title-white">Core Features</h1>
    <div class="facilities-swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide swiper-slide--dark">
                <div class="feature_icon feature_icon--one"></div>
                <span class="feature_number feature_number--dark">01</span>
                <h4 class="third-subtitle feature_title feature_title--dark">
                    Have high rating
                </h4>
                <p class="feature_p feature_p--dark">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna..
                </p>
            </div>
            <div class="swiper-slide swiper-slide--dark">
                <div class="feature_icon feature_icon--two"></div>
                <span class="feature_number feature_number--dark">02</span>
                <h4 class="third-subtitle feature_title feature_title--dark">
                    Quiet Hours
                </h4>
                <p class="feature_p feature_p--dark">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna..
                </p>
            </div>
            <div class="swiper-slide swiper-slide--dark">
                <div class="feature_icon feature_icon--three"></div>
                <span class="feature_number feature_number--dark">03</span>
                <h4 class="third-subtitle feature_title feature_title--dark">
                    Best Locations
                </h4>
                <p class="feature_p feature_p--dark">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna..
                </p>
            </div>
            <div class="swiper-slide swiper-slide--dark">
                <div class="feature_icon feature_icon--four"></div>
                <span class="feature_number feature_number--dark">04</span>
                <h4 class="third-subtitle feature_title feature_title--dark">
                    Free Cancellation
                </h4>
                <p class="feature_p feature_p--dark">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna..
                </p>
            </div>
            <div class="swiper-slide swiper-slide--dark">
                <div class="feature_icon feature_icon--five"></div>
                <span class="feature_number feature_number--dark">05</span>
                <h4 class="third-subtitle feature_title feature_title--dark">
                    Payment Options
                </h4>
                <p class="feature_p feature_p--dark">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna..
                </p>
            </div>
            <div class="swiper-slide swiper-slide--dark">
                <div class="feature_icon feature_icon--six"></div>
                <span class="feature_number feature_number--dark">06</span>
                <h4 class="third-subtitle feature_title feature_title--dark">
                    Special Offers
                </h4>
                <p class="feature_p feature_p--dark">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna..
                </p>
            </div>
        </div>
        <!-- If we need pagination -->
    <div class="facilities-swiper-pagination facilities-swiper-pagination--dark " id="facilities-swiper-pagination"></div>
    </div>
</section>
<section class="counter">
    <h2 class="counter_subtitle">COUNTER</h2>
    <h1 class="main-title">Some Fun Facts</h1>
    <div class="counter_container">
        <div class="fact">
            <div class="fact_icon fact_icon-1"></div>
            <div class="fact_text">
                <span class="fact_text--big">8000</span>
                <span class="fact_text--small">Happy Users</span>
            </div>
            <div class="fact_arrow"></div>
        </div>
        <div class="fact">
            <div class="fact_icon fact_icon-2"></div>
            <div class="fact_text">
                <span class="fact_text--big">10M</span>
                <span class="fact_text--small">Reviews & Appriciate</span>
            </div>
            <div class="fact_arrow"></div>
        </div>
        <div class="fact">
            <div class="fact_icon fact_icon-3"></div>
            <div class="fact_text">
                <span class="fact_text--big">100</span>
                <span class="fact_text--small">Country Coverage</span>
            </div>
            <div class="fact_arrow"></div>
        </div>
    </div>
    <div class="facts-swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="/assets/counter/happy-woman.jpg" alt="happy woman working"></div>
            <div class="swiper-slide"><img src="/assets/counter/meeting.jpg" alt="people in meeting"></div>
            <div class="swiper-slide"><img src="/assets/counter/party.jpg" alt="people drinking in party"></div>
        </div>
        <div class="facts-swiper-pagination"></div>
    </div>
</section>

@endsection