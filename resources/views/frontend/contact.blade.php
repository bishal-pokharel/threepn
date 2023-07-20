@extends('frontend.layouts.app')
@section('title') Contact @endsection
@section('styles') 
@endsection
@section('content') 

<section>

  <!-- Page Header Start -->
  <div class="container-fluid bg-dark p-5">
      <div class="row">
          <div class="col-12 text-center">
              <h1 class="display-4 text-white">Contact Us</h1>
              <a href="{{route('home')}}">Home</a>
              <i class="far fa-square text-primary px-2"></i>
              <a href="">Contact</a>
          </div>
      </div>
  </div>
  <!-- Page Header End -->


  <!-- Contact Start -->
  <div class="container-fluid bg-secondary px-0">
      <div class="row g-0">
          <div class="col-lg-6 py-6 px-5">
              <h1 class="display-5 mb-4">Contact For Any Queries</h1>
              <form class="js-validation-signin px-30" action="{{route('enquiry')}}" method="post">
                @csrf
                  <div class="row g-3">
                      <div class="col-12">
                          <div class="form-floating">
                              <input required value="{{old('name')}}" type="text" class="form-control" name="name" id="form-floating-1" placeholder="John Doe">
                              <label for="form-floating-1">Full Name</label>
                                @if($errors->has('name'))
                                    <div class="error">{{ $errors->first('name') }}</div>
                                @endif
                          </div>
                      </div>
                      <div class="col-6">
                          <div class="form-floating">
                              <input required value="{{old('phone')}}" type="text" class="form-control" name="phone" id="form-floating-2"
                                  placeholder="Phone Number">
                              <label for="form-floating-2">Phone</label>
                              @if($errors->has('phone'))
                                  <div class="error">{{ $errors->first('phone') }}</div>
                              @endif
                          </div>
                      </div>
                      <div class="col-6">
                          <div class="form-floating">
                              <input required value="{{old('email')}}" type="email" class="form-control" name="email" id="form-floating-2"
                                  placeholder="name@example.com">
                              <label for="form-floating-2">Email address</label>
                              @if($errors->has('email'))
                                  <div class="error">{{ $errors->first('email') }}</div>
                              @endif
                          </div>
                      </div>
                      <div class="col-12">
                          <div class="form-floating">
                              <input required value="{{old('subject')}}" type="text" class="form-control" name="subject" id="form-floating-3" placeholder="Subject">
                              <label for="form-floating-3">Subject</label>
                              @if($errors->has('subject'))
                                  <div class="error">{{ $errors->first('subject') }}</div>
                              @endif
                          </div>
                      </div>
                      <div class="col-12">
                          <div class="form-floating">
                              <textarea required class="form-control" placeholder="Message" name="message" id="form-floating-4"
                                  style="height: 150px">{{old('message')}}</textarea>
                              <label for="form-floating-4">Message</label>
                              @if($errors->has('message'))
                                  <div class="error">{{ $errors->first('message') }}</div>
                              @endif
                          </div>
                      </div>
                      <div class="col-12">
                          <button class="btn btn-primary w-100 py-3" type="submit">Submit</button>
                      </div>
                  </div>
              </form>
          </div>
          <div class="col-lg-6" style="min-height: 400px;">
              <div class="position-relative h-100">
                <iframe  class="position-relative w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.2723636368355!2d85.31182517420092!3d27.708875725426314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xaf5ee765cf6ade47%3A0xa9bcda6254dcc3c9!2sThreePn%20Education!5e0!3m2!1sen!2snp!4v1689676804055!5m2!1sen!2snp" 
                frameborder="0" style="border:0;" allowfullscreen=""  aria-hidden="false" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
          </div>
      </div>
  </div>
  <!-- Contact End -->
</section>

@endsection
@section('script') 
<script>
</script>
@endsection

