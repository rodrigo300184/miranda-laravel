@extends('layout')

@section('title', 'Contact')

@section('content')
<!-- Banner Section -->
<section class="banner">
  <h2 class="banner-subtitle banner-subtitle-pages subtitle">
    THE ULTIMATE LUXURY
  </h2>
  <h1 class="banner-main-title main-title main-title-white about-title rooms-main-title">
    New Details
  </h1>
  <div class="breadcrumb">
    <a href="/index" class="a breadcrumb_a">Home</a><span class="breadcrumb_line">|</span><span class="breadcrumb_current">Contact</span>
  </div>
</section>
<section class="contact">
  <!-- Contact Cards -->
  <div class="contact_card_container">
    <div class="contact_card">
      <div class="contact_card_icon contact_card_icon--address"></div>
      <div class="contact_card_text-container">
        <h3 class="contact_card_text-container_title">Hotel Address</h3>
        <p class="contact_card_text-container_data">
          19/A, Cirikon City hall Tower New York, NYC
        </p>
      </div>
      <span class="contact_card_big-number">01</span>
    </div>
    <div class="contact_card">
      <div class="contact_card_icon contact_card_icon--phone"></div>
      <div class="contact_card_text-container">

        <h3 class="contact_card_text-container_title">Phone Number</h3>
        <a href="tel:+97656 8675 7864 7">
          <p class="contact_card_text-container_data contact_card_text-container_data--phone">
            + 97656 8675 7864 7 + 876 766 8675 765 6
          </p>
        </a>
      </div>
      <span class="contact_card_big-number">02</span>
    </div>
    <div class="contact_card">
      <div class="contact_card_icon contact_card_icon--email"></div>
      <div class="contact_card_text-container">
        <h3 class="contact_card_text-container_title">Email</h3>
        <a href="mailto: info@webmail.com">
          <p class="contact_card_text-container_data">
            info@webmail.com jobs.webmail@mail.com
          </p>
        </a>
      </div>
      <span class="contact_card_big-number">03</span>
    </div>
  </div>
  <!-- Google Map -->
  <div class="contact_google-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48363.48103000033!2d-74.02873812906013!3d40.74623987516722!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c258fda88cefb3%3A0x7f1e88758d210007!2sNew%20York%20City%20Hall!5e0!3m2!1sen!2ses!4v1695151891145!5m2!1sen!2ses" width="100%" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
  <!-- Contact Form -->
  <form action="/contact" method="POST" class="contact_form" id="">
    <div class="contact_form_container">
      <div class="contact_form_container--inner">
        <input class="contact_input contact_input_name" type="text" name="name" id="name" placeholder="Your full name" required />
        <input class="contact_input contact_input_phone" type="text" name="phone" id="phone" placeholder="Add phone number" required />
      </div>
      <div class="contact_form_container--inner">
        <input class="contact_input contact_input_email" type="email" name="email" id="email" placeholder="Enter email address" required />
        <input class="contact_input contact_input_subject" type="text" name="subject" id="subject" placeholder="Enter subject" required />
      </div>
    </div>
    <textarea class="contact_text-area" name="contactMessage" id="contactMessage" required placeholder="Enter message"></textarea>
    <input class="button button_centered button_regular button_regular--gold button_text" type="submit" value="SEND" />
  </form>
</section>
@endsection