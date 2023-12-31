@extends('layout.master')

@section('title', 'Projects  || ')
@section('content')

<!--================== Blog Section Start ==================-->
<section class="section">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-10 mx-auto">
          <a class="text-primary" href="#">CSS</a>
          <h2 class="mb-3">CSS Float: A Tutorial</h2>
          <div class="d-flex justify-content-between mb-5">
            <div class="d-flex align-items-center">
              <p class="card-text small">Feb 15, 2021</p>
            </div>
  
          </div>
          <div class="content">
            <p>One of the basic and the most important properties every web designer should learn is the float property.
              It is most commonly used for floating text around the image or creating the two column layout. The float
              property can cause a lot of frustration and confusion if it's not fully understood, so we're here to make
              those confusions disappear with this short explanation. </p>
            <p>Also, be sure to check out our articles on some other properties, other than CSS float, that often cause
              confusion like CSS columns or relative font size.</p>
          </div>
          <img src="images/blog/blog-1.jpg" alt="blog" class="img-fluid mb-3">
          <div class="content">
            <p>
              Behind the word float, an endless sea of possibilities (and misbehaviors).
  
              float is probably the most difficult CSS concept to grasp. Its behavior can be intriguing, unexpected, and
              magical. Probably because, of all positioning properties there are, it is the one that most influences its
              surroundings.
  
              In other words, applying a float not only modifies the element it’s applied upon but also alters its
              ancestors, siblings, descendants, and following elements.
              The floating image will overflow because it’s higher than its yellow container. And as you can actually see,
              it even visually breaks this paragraph you’re reading. </p>
  
            <p> I’ve intentionally left this layout error to showcase why floats are unpredictable: they can even break
              their parent’s siblings!
  
              Because float: left takes the image out of the flow, the yellow paragraph’s height is only the height of its
              text. In other words, the height of the image isn’t taken into account.
            </p>
  
            <blockquote>
              <h3>I’ve heard the argument that “lorem ipsum” is effective in wireframing or design because it helps people
                focus on the actual layout, or color scheme, or whatever. What kills me here is that we’re talking about
                creating a user experience that will (whether we like it or not) be DRIVEN by words. The entire structure
                of the page or app flow is FOR THE WORDS.</h3>
            </blockquote>
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloribus nulla quibusdam optio saepe, praesentium
              eos pariatur dignissimos earum numquam sint, asperiores consectetur repellendus ipsam minus! Nam cum totam
              eaque quas? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus laudantium ea minima,
              nesciunt reprehenderit quasi excepturi! Eligendi, odit iste quaerat voluptatum aliquid numquam quisquam
              pariatur sunt saepe, nisi, consectetur animi.
            </p>
          </div>
          <div class="comment-area">
            <h5 class="text-capitalize mb-4">comments</h5>
            <div class="mb-4">
              <div class="d-flex align-items-start border-bottom pb-4 mb-4">
                <a href="#!"><img src="images/banner-img.png" alt="img" class="user-img rounded-circle me-3"
                    width="65px"></a>
                <div>
                  <h4 class="h6 mb-2 fw-medium">Alexender Grahambel</h4>
                  <div class="d-flex align-items-center mb-2">
                    <small class="me-3">April 18, 2021 at 6.25 pm</small>
                    <a href="#" class="text-primary text-capitalize fs-6">reply</a>
                  </div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nec et ipsum ullamcorper venenatis
                    fringilla. Pretium, purus eu nec vulputate vel habitant egestas.ornare ipsum</p>
                </div>
              </div>
  
              <div class="d-sm-flex align-items-start mb-4">
                <div class="mb-4 mb-sm-0 me-3 d-flex">
                  <span class="me-4 mt-4"> <svg width="34" height="19" viewBox="0 0 34 19" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M26.1099 19L25.0159 17.906L30.3399 12.582H7.75893C3.48053 12.582 0 9.10139 0 4.82349V0H1.54719V4.82349C1.54719 8.24845 4.33388 11.0347 7.75893 11.0347H30.3399L25.0159 5.71073L26.1099 4.61674L33.3015 11.8083L26.1099 19Z"
                        fill="#999999"></path>
                    </svg></span>
                  <a href="#!"><img src="images/tstimonial-left-img-two.png" alt="img" class="user-img rounded-circle"
                      width="65px"></a>
                </div>
                <div class="comment-single">
                  <h4 class="h6 mb-2 fw-medium">Alexender Grahambel</h4>
                  <div class="d-flex align-items-center mb-2">
                    <small class="me-3">April 18, 2021 at 6.25 pm</small>
                    <a href="#" class="text-primary text-capitalize fs-6">reply</a>
                  </div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nec et ipsum ullamcorper venenatis
                    fringilla. Pretium, purus eu nec vulputate vel habitant egestas.ornare ipsum</p>
                </div>
              </div>
            </div>
  
            <form action="#" class="row">
              <div class="col-12">
                <label for="LEAVE A REPLAY" class="text-uppercase mb-2">leave a Reply</label>
                <textarea name="message" id="message" class="form-control" rows="10"></textarea>
              </div>
              <div class="col-lg-4">
                <input type="text" id="name" name="name" placeholder="Name" class="form-control" required="">
              </div>
              <div class="col-lg-4">
                <input type="email" id="email" name="email" placeholder="email" class="form-control" required="">
              </div>
              <div class="col-lg-4">
                <input type="text" id="website" name="website" placeholder="website" class="form-control" required="">
              </div>
              <div class="col-12">
                <div class="form-check d-flex align-items-start">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Save my name, email, and website in this browser for the next time I comment.
                  </label>
                </div>
              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-primary btn-md">Post Comment</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <!--================== Blog Section End ==================-->
  
  <div class="backtotop">
    <i class="fas fa-angle-up"></i>
  </div>
@endsection
