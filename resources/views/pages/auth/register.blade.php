@extends('layout.app')
@section('content')
<div class="container">
  <div class="col-md-12">
  <div class="wow fadeInUp" data-wow-delay="0.5s">
      <form>
          <div class="row g-3">
              <div class="col-md-6">
                  <div class="form-floating">
                      <input type="text" class="form-control" id="name" placeholder="Your Name">
                      <label for="name">Your Name</label>
                  </div>
              </div>
              <div class="col-6">
                <div class="form-floating">
                    <input type="text" class="form-control" id="subject" placeholder="068999999999">
                    <label for="subject">Telephone</label>
                </div>
            </div>
              <div class="col-md-12">
                  <div class="form-floating">
                      <input type="email" class="form-control" id="email" placeholder="example@gmail.com">
                      <label for="email">Email</label>
                  </div>
              </div>
              
              <div class="col-12">
                  <div class="form-floating">
                      <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                      <label for="message">Message</label>
                  </div>
              </div>
              <div class="col-12">
                  <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
              </div>
          </div>
      </form>
  </div>
</div>
</div>

@endsection