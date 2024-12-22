@extends('layout.app')

@section('content')
    <!-- About Start -->
    @include('partials.includes.about')
    <!-- About End -->


    <!-- Service Start -->
      @include('partials.includes.services')
    <!-- Service End -->


   


    <!-- Package Start -->
      @include('partials.includes.blogs')
    <!-- Package End -->


    <!-- Booking Start -->
      @include('partials.includes.reservation')  
    <!-- Booking Start -->



    <!-- Team Start -->
      @include('partials.includes.team')
    <!-- Team End -->


    <!-- Testimonial Start -->
      @include('partials.includes.clientSay')
    <!-- Testimonial End -->
     
@endsection
