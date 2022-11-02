@extends('layouts.master')

@section('title', 'nrg.au-blog')

@section('content')


<div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-12">
                  <h3 class="slide-item__title">Blog</h3>
                 </div>

                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="assets/images/technology/blog3.jpg" alt="" style="border-radius: 50%;">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-------------------------------------- DM----------------------------------------------->
<div class="container m-5">
        <div class="row">

        <div class="col-sm-12 col-md-6 col-lg-4 blog-colm">
            <div class="post-item">
              <div class="post-item__img">
                <a href="{{ Route('bdms') }}">
                  <img class="lazyimg" src="" data-src="assets/images/technology/blog_dms.jpg" alt="blog image">
                </a>
              </div><!-- /.blog-img -->
              <div class="post-item__content">
                <div class="post-item__meta d-flex flex-wrap">

                  <span class="post-item__meta__date">Nov 1, 2022  </span>
                </div>
                <h4 class="post-item__title"><a href="{{ Route('bdms') }}">Digital Marketing Services</a>
                </h4>
                <p class="post-item__desc" align="justify">Acknowledging digitization is just the initial step toward company success. Enhancing the ....
                </p>
                <a href="{{ Route('bdms') }}" class="btn btn__secondary btn__link">
                  <span>Read More</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.blog-content -->
            </div><!-- /.post-item -->
          </div>

        <div class="col-sm-12 col-md-6 col-lg-4 blog-colm">
            <div class="post-item">
              <div class="post-item__img">
                <a href="{{ Route('bweb') }}">
                  <img class="lazyimg" src="" data-src="assets/images/technology/blog_webdesign.jpg" alt="blog image">
                </a>
              </div><!-- /.blog-img -->
              <div class="post-item__content">
                <div class="post-item__meta d-flex flex-wrap">

                  <span class="post-item__meta__date">Nov 1, 2022  </span>
                </div>
                <h4 class="post-item__title"><a href="{{ Route('bweb') }}">Web Design and Development Services</a>
                </h4>
                <p class="post-item__desc" align="justify">Your brand can become a visual story with the assistance of  our web designers. We turn your ....
                </p>
                <a href="{{ Route('bweb') }}" class="btn btn__secondary btn__link">
                  <span>Read More</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.blog-content -->
            </div><!-- /.post-item -->
          </div>

<div class="col-sm-12 col-md-6 col-lg-4 blog-colm">
            <div class="post-item">
              <div class="post-item__img">
                <a href="{{ Route('bapp') }}">
                  <img class="lazyimg" src="" data-src="assets/images/technology/blog1.jpg" alt="blog image">
                </a>
              </div><!-- /.blog-img -->
              <div class="post-item__content">
                <div class="post-item__meta d-flex flex-wrap">

                  <span class="post-item__meta__date">Aug 4, 2022  </span>
                </div>
                <h4 class="post-item__title"><a href="{{ Route('bapp') }}">A Comprehensive Guide to the Benefits of Mobile App Development Services</a>
                </h4>
                <p class="post-item__desc" align="justify">Businesses that seem to be multi-channel have become one of the most key things in the digital environment. The crucial challenge...
                </p>
                <a href="{{ Route('bapp') }}" class="btn btn__secondary btn__link">
                  <span>Read More</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.blog-content -->
            </div><!-- /.post-item -->
          </div><!-- /.col-lg-4 -->


		<!-- Blog Item #2 -->
          <div class="col-sm-12 col-md-6 col-lg-4 blog-colm mt-5">
            <div class="post-item">
              <div class="post-item__img">
                <a href="{{ Route('bbeacon') }}">
                  <img class="lazyimg" src="" data-src="assets/images/technology/blog2.jpg" alt="blog image">
                </a>
              </div><!-- /.blog-img -->
              <div class="post-item__content">
                <div class="post-item__meta d-flex flex-wrap">

                  <span class="post-item__meta__date">April 22, 2022  </span>
                </div>
                <h4 class="post-item__title"><a href="{{ Route('bbeacon') }}">What is Beacon Technology and its Various Contributions in Different Spectrums? </a>
                </h4>
                <p class="post-item__desc" align="justify">Beacon technology is the one common thing that every marketer and business person will be aware of. This is because this inevitable...
                </p>
                <a href="{{ Route('bbeacon') }}" class="btn btn__secondary btn__link">
                  <span>Read More</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.blog-content -->
            </div><!-- /.post-item -->
          </div><!-- /.col-lg-4 -->
          <!-- Blog Item #2 -->

		<!-- Blog Item #3 -->

          <div class="col-sm-12 col-md-6 col-lg-4 blog-colm mt-5">

            <div class="post-item">

              <div class="post-item__img">

                <a href="{{ Route('bbots') }}">

                  <img class="lazyimg" src="" data-src="assets/images/technology/blog3.jpg" alt="blog image">

                </a>

              </div><!-- /.blog-img -->

              <div class="post-item__content">

                <div class="post-item__meta d-flex flex-wrap">



                  <span class="post-item__meta__date">March 19, 2022 </span>

                </div>

                <h4 class="post-item__title"><a href="{{ Route('bbots') }}">AI and Bots – The Best Improvement in Vaccine Delivery and Healthcare Efficacy </a>

                </h4>

                <p class="post-item__desc" align="justify">The COVID -19 pandemic has established a requirement of large-scale vaccine distribution to contain viral infections globally....

                </p>

                <a href="{{ Route('bbots') }}" class="btn btn__secondary btn__link">

                  <span>Read More</span>

                  <i class="icon-arrow-right"></i>

                </a>

              </div><!-- /.blog-content -->

            </div><!-- /.post-item -->

          </div><!-- /.col-lg-4 -->


		    <!-- Blog Item #4 -->

          <div class="col-sm-12 col-md-6 col-lg-4 blog-colm mt-5">

            <div class="post-item">

              <div class="post-item__img">

                <a href="{{ Route('bfiveg') }}" >

                  <img class="lazyimg" src="" data-src="assets/images/technology/blog4.jpg" alt="blog image">

                </a>

              </div><!-- /.blog-img -->

              <div class="post-item__content">

                <div class="post-item__meta d-flex flex-wrap">



                  <span class="post-item__meta__date"> March 18, 2022 </span>

                </div>

                <h4 class="post-item__title"><a href="{{ Route('bfiveg') }}" >5G – A Superfast Mobile Technology that drives the Digital Glob</a>

                </h4>

                <p class="post-item__desc" align="justify">5G or Superfast Fifth Generation mobile network technology is already on the go which goes far beyond faster browsing and quality calls...

                </p>

                <a href="{{ Route('bfiveg') }}" class="btn btn__secondary btn__link">

                  <span>Read More</span>

                  <i class="icon-arrow-right"></i>

                </a>

              </div><!-- /.blog-content -->

            </div><!-- /.post-item -->

          </div><!-- /.col-lg-4 -->
		 <!-- Blog Item #5 -->
		<div class="col-sm-12 col-md-6 col-lg-4 blog-colm mt-5">
            <div class="post-item">
              <div class="post-item__img">
                <a href="{{ Route('bdm') }}">
                  <img class="lazyimg" src="" data-src="assets/images/technology/blog5.jpg" alt="blog image">
                </a>
              </div><!-- /.blog-img -->
              <div class="post-item__content">
                <div class="post-item__meta d-flex flex-wrap">

                  <span class="post-item__meta__date">January 24, 2022</span>
                </div>
                <h4 class="post-item__title"><a href="{{ Route('bdm') }}"> Impact of Digital Marketing and its Diversified Superlative Strategies </a>
                </h4>
                <p class="post-item__desc" align="justify">As the world is moving towards online platform in this digital era, businesses are also seeking for online presence to stretch their dynasty. Over the past decade, internet users have multiplied thrice...
                </p>
                <a href="{{ Route('bdm') }}" class="btn btn__secondary btn__link">
                  <span>Read More</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.blog-content -->
            </div><!-- /.post-item -->
          </div>

		 <!-- Blog Item #6 -->
          <div class="col-sm-12 col-md-6 col-lg-4 blog-colm mt-5">
            <div class="post-item">
              <div class="post-item__img">
                <a href="{{ Route('bai') }}">
                  <img src="assets/images/technology/blog6.jpg" alt="blog image">
                </a>
              </div><!-- /.blog-img -->
              <div class="post-item__content">
                <div class="post-item__meta d-flex flex-wrap">

                  <span class="post-item__meta__date">January 09, 2022</span>
                </div>
                <h4 class="post-item__title"><a href="{{ Route('bai') }}"Artificial Intelligence and Its Impact Over Business Verticals</a>
                </h4>
                <p class="post-item__desc" align="justify">Technologies are dominating this world with its progressive asset for the past few decades. It has made a profound transformation in each and everything...
                </p>
                <a href="{{ Route('bai') }}" class="btn btn__secondary btn__link">
                  <span>Read More</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.blog-content -->
            </div><!-- /.post-item -->
          </div><!-- /.col-lg-4 -->

           <!-- Blog Item #7 -->
          <div class="col-sm-12 col-md-6 col-lg-4 blog-colm mt-5">
            <div class="post-item">
              <div class="post-item__img">
                <a href="{{ Route('bprocess') }}" >
                  <img src="assets/images/technology/blog7.jpg" alt="blog image">
                </a>
              </div><!-- /.blog-img -->
              <div class="post-item__content">
                <div class="post-item__meta d-flex flex-wrap">

                  <span class="post-item__meta__date">July 28, 2021</span>
                </div>
                <h4 class="post-item__title"><a href="{{ Route('bprocess') }}" >Artificial Intelligence & Process Automation</a>
                </h4>
                <p class="post-item__desc" align="justify">Artificial Intelligence & Process Automation Artificial Intelligence, the potentially global-changing technology, is nothing but the simulation of human intelligence by machines, i.e., computer systems. AI...
                </p>
                <a href="{{ Route('bprocess') }}" class="btn btn__secondary btn__link">
                  <span>Read More</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.blog-content -->
            </div><!-- /.post-item -->
          </div><!-- /.col-lg-4 -->
          <!-- Blog Item #8 -->
          <div class="col-sm-12 col-md-6 col-lg-4 blog-colm mt-5">
            <div class="post-item">
              <div class="post-item__img">
                <a href="{{ Route('brevolve') }}" >
                  <img src="assets/images/technology/blog8.jpg" alt="blog image">
                </a>
              </div><!-- /.blog-img -->
              <div class="post-item__content">
                <div class="post-item__meta d-flex flex-wrap">

                  <span class="post-item__meta__date">August 12, 2021</span>
                </div>
                <h4 class="post-item__title"><a href="{{ Route('brevolve') }}" >How Artificial Intelligence is revolutionizing the Digital World?</a>
                </h4>
                <p class="post-item__desc" align="justify">How Artificial Intelligence is revolutionizing the Digital World? The world has entirely altered in a digital way through the advancements in technology. In the pursuit...
                </p>
                <a href="{{ Route('brevolve') }}" class="btn btn__secondary btn__link">
                  <span>Read More</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.blog-content -->
            </div><!-- /.post-item -->
          </div><!-- /.col-lg-4 -->



        </div>
      </div>
    </section><!-- /.blog Grid -->

  <!----------------------------------------------------------------------------------------------------->
  <div id="contacts" class="pricing-tables">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s"">
            <h4>Let’s Speak about <em>your Business</em>  Requirements!</h4>
            <img src="assets/images/heading-line-dec.png" alt="">
            <p>After your enrolment, our NRG Phoenix sales professionals will contact you within 24hours to know more about your requirements in detail.<br> All the enrolled details are confidential and maintained with high security.</p>
          </div>
        </div>
        <div class="col-lg-6 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
          <div class="pricing-item-regular">

            <h4>Our Locations</h4>
            <div class="icon">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
            </div>
            <ul>
              <li><strong>Australia</strong> <br> NRG Phoenix Pty Ltd. Suite 161, 42 Manilla St,<br>
					East Brisbane 4169. Australia</li>
          <li><strong>India</strong> <br>NRG Phoenix Technology India Pvt. Ltd.<br>
          465 & 466, 51, Level 4, Tower A,<br>
          Rattha Tek Meadows,<br>
          Rajiv Gandhi Salai, Sholinganallur,<br>
          Chennai, Tamil Nadu 600119</li>
          <li><strong>USA - Chicago</strong> <br> <span>Coming Soon</span></li>

          					<li><strong>UK - London</strong> <br> <span>Coming Soon</span></li>
            </ul>

					<a href="#"><i class="fa fa-envelope-o text-primary pt-3" aria-hidden="true"></i>info@nrg-phoenix.com.au</a> <br>
          <a href="#"><i class="fa fa-phone pt-3" aria-hidden="true"></i>+61 468-495-900<br> +61 734-351-542</a>
          </div>
        </div>
        <div class="col-lg-6 mt-4 mb-4 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
          <div class="pricing-item-pro">

            <h4>Send Your Message</h4>
            <div class="icon">
              <i class="fa fa-envelope" aria-hidden="true"></i>
            </div>
            <form class="contact-panel__form" method="post" action="/index.php#contact">
                <div class="card">
                  <div class="card-body">

                        <div class="col">
                          <div class="input-group">
                              <span class="input-group-text" style="padding-left:115px;">Name</span>
                              <input type="text" aria-label="name" class="form-control">
                            </div>
                        </div>
                        <div class="col mt-3">
                          <div class="input-group">
                              <span class="input-group-text" style="padding-left:115px;">Email</span>
                              <input type="text" aria-label="email" class="form-control">
                            </div>
                        </div>


                      <div class="input-group mt-3 ">

                      <select class="form-select" aria-label="Default select example" name="services" id="services">
                        <option value="">Select Services</option>
                        <option value="Enterprise AI Solutions">Enterprise AI Solutions</option>
                        <option value="Digital Marketing">Digital Marketing</option>
                        <option value="Website & UX Design">Website & UX Design</option>
                        <option value="Web & Mobile applications">Web & Mobile applications</option>
                        <option value="ECommerce Application">ECommerce Application</option>
                        <option value="Others">Others</option>
                      </select>

                          </div>
                        <div class="col mt-3">
                          <div class="input-group">
                              <span class="input-group-text" style="padding-left:110px;">Phone</span>
                              <input type="text" aria-label="email" class="form-control" placeholder="add country code">
                            </div>
                        </div>
                        <div class="input-group mt-3" >
                          <span class="input-group-text">Additional  Message</span>
                          <textarea class="form-control" aria-label="With textarea"></textarea>
                        </div>

                        <div class="border-button">
                          <a href="#">Submit Request</a>
                        </div>
                    </div>
                  </div>
                </div>

            </form>

          </div>
        </div>

  </div>


@endsection
