@extends('layout.master')

@section('title', 'Contact || ')

@section('content')
<!--================== Contact Section Start ==================-->
<section class="contact section">
    <div class="container">
      <div class="row justify-content-between align-items-center">
        <div class="col-lg-6">
          <div class="mb-5 mb-lg-0">
            <h3 class="mb-4">Just Say Hi!......</h3>
            <h4 class="mb-5 pb-4 lh-sm">Lorem ipsum dolor sit amet, consectetur </h4>
            <form class="row px-4 px-md-0">
                <div class="col-md-6 contact-from border-bottom pb-4 mb-5">
                  <input type="text" name="name" placeholder="John" autocomplete="off" required>
                  <label>First Name</label>
                </div>
                <div class="col-md-6 contact-from border-bottom pb-4 mb-5">
                  <input type="text" name="name" placeholder="Doe" autocomplete="off" required>
                  <label>Last Name</label>
                </div>
                <div class="col-md-6 contact-from border-bottom pb-4 mb-5">
                  <input type="mail" name="email" placeholder="johndoe@gmail.com" autocomplete="off" required>
                  <label>Mail</label>
                </div>
                <div class="col-md-6 contact-from border-bottom pb-4 mb-5">
                  <input type="text" name="address" placeholder="Address" autocomplete="off" required>
                  <label>Address</label>
                </div>
                <div class="contact-from border-bottom pb-4 mb-5 w-100">
                  <input type="text" placeholder="Message" autocomplete="off" required>
                  <label>Message</label>
                </div>
              <button type="submit" class="btn btn-primary btn-lg mt-4">Submit Now</button>
            </form>
          </div>
        </div>
        <div class="col-lg-5 offset-lg-1">
          <div class="text-center text-lg-start">
            <h4 class="mb-4">Contact information</h4>
            <p class="mb-md-5">House# 44, Rd No. 2/A, Dhanmondi, Zigatola Dhaka 1209</p>
              <h4 class="mb-4">Social contacts</h4>
             <ul class="list-inline contact-us">
               <li class="list-inline-item"><a href="#"> <i class="fab fa-facebook"></i></a></li>
               <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
               <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
               <li class="list-inline-item"><a href="#"><i class="fab fa-skype"></i></a></li>
               <li class="list-inline-item"><a href="#"><i class="fab fa-github"></i></a></li>
             </ul>
          </div>

        </div>
      </div>
    </div>
  </section>
  <!--================== Contact Section End ==================-->
  <div class="backtotop">
    <i class="fas fa-angle-up"></i>
  </div>
@endsection
