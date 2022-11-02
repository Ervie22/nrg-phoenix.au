@extends('layouts.master')

@section('title','blog-web')

@section('content')


<div class="main-banner wow fadeInDown" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container ">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-12">
                  <h3 class="slide-item__title">Web Design and Development Services</h3>
                 </div>

                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="assets/images/technology/blog_webdesign.jpg" alt="" style="border-radius: 50%;">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-------------------------------------- DM----------------------------------------------->
<section class="blog blog-single pt-40 pb-40">
      <div class="container m-5">
        <div class="row">
         <div class="col-sm-12 col-md-12 col-lg-8">
            <div class="post-item">
              <div class="position-relative">
                <div class="post-item__img">
                  <a href="#">
                    <img src="assets/images/technology/blog_webdesign.jpg" alt="blog image"  >
                  </a>
                </div><!-- /.post-img -->
                <div class="post-item__meta d-inline-flex align-items-center mb-0">
                  <span class="post-item__meta__date">Nov 1, 2022</span>


                </div><!-- /.blog-meta -->
              </div>                <div class="inner-padding-post">
              <h2 class="post-item__title">
              Web Design and Development Services
              </h2>
              <div class="post-item__desc">
              <p>Your brand can become a visual story with the assistance of  our web designers. We turn your website into a very efficient promotional tool for your business and a practical platform for communicating with visitors.</p>
              <h3>Effective Website Design</h3>
               <p>Web design necessitates a multitude of specialised skills and disciplines for both the creation and maintenance of websites. One of Chennai's most reputable web design firms, We NRG Phoenix , has made its way into the international technological scene.</p>
               <p>  The most creative web designers are on staff at our company, and they are adept at creating the designs you need. Our organisation also employs the finest Specialists to boost the position of your page in search engines.
</p>
               <p>Using the most modern trends and technologies, we provide a stunning and imaginative site design.</p>
                <h3>Intensify your digital business acceleration</h3>

<P>We provide you with comprehensive, optimised, and progress end-to-end marketing services as a growing digital marketing firm to achieve significant outcomes. Utilise the distinctive and lucrative online marketing solutions produced by our digital marketing specialists. And witness the upcoming expansion of your business. Our expert-level services are here to address all of your brand's advertising demands as your significant digital marketing firm in India.</P>
<H2>Services We Provide in Digital Marketing</H2>
<h3>SEO - Search Engine Optimization</h3>
<P>Millions of individuals search for the goods or services you offer every day. With the aid of our SEO services, we make it simpler for those potential clients to locate you on search engines like Google. For both major enterprises and small organisations seeking to get momentum online, presence and ranking on the first page of search results are vital.</P>
<P>We at NRG Phoenix provide SEO services to your firm, utilising them to improve your website rank for the key terms that are most essential to your business. These keywords are used to drive organic traffic to your website and other digital media content to reach the appropriate kind of clients.</P>

<h3>Creation of responsive websites</h3>
<p>Every web project we work on is designed to appear amazing on desktop computers as well as mobile devices. Our websites are built with mobile clients in mind.</p>
<p> Despite the fact that financial considerations have an impact on marketing, we deliver elevated web design services for a good price to a diverse range of industries on the global market.</p>
<p>WordPress is our chosen web design platform, and we want to use it to create a wide range of websites, featuring blogs, e-commerce sites, and other webpages. Our patrons are pleased with the way our website looks and have recommended us to others.
</p>
<h3>Integrated Interface and User Experience</h3>
<p>We take care to first completely know the desires and goals of our clients. Robust website design offers guests the ability to discover crucial information, realise your offerings, associate with your corporation, and complete the lender's path to a selection without stumbling into any hurdles.</p>
<h3>E-commerce Website Development:</h3>
<p>Customers should find it simple to provide structured purchases from an e-commerce web design that gives those products the best possible exposure. Giving customers the choice to purchase things through your website will promote your business to a broader market, streamline sales, and reduce operating expenses to boost revenues.Our stores are nicely crafted, exude a sense of client trust, and make ordering through us as simple as possible.</p>
<h3>Wind-up</h3>

<P>Our major focus is always to satisfy our customers. Leverage your website as a platform for generating leads for your enterprise.
 <a href="index.php">NRG Phoenix</a>has a unique strategy to deliver exceptional service for Custom Website Design & Development Services.</P>



                            </div><!-- /.blog-desc -->


              </div>
            </div><!-- /.post-item -->

          </div><!-- /.col-lg-8 -->
           <div class="col-sm-12 col-md-12 col-lg-4">
            <aside class="sidebar">

              <div class="widget widget-posts">
                <h5 class="widget__title">Recent Posts</h5>
                <div class="widget__content">

                    <div class="widget-post-item d-flex align-items-center">
                        <div class="widget-post__img">
                          <a href="{{ Route('bdms') }}"><img src="assets/images/technology/blog_dms.jpg" style="border-radius: 50%;" alt="thumb" height = 100px width = 100px  ></a>
                        </div><!-- /.widget-post-img -->
                        <div class="widget-post__content">
                          <span class="widget-post__date">Nov 1, 2022 </span>
                          <h4 class="widget-post__title"><a href="{{ Route('bdms') }}">Digital Marketing Services </a>
                          </h4>
                        </div><!-- /.widget-post-content -->
                      </div><!-- /.widget-post-item -->


                      <div class="widget-post-item d-flex align-items-center mt-3">
                        <div class="widget-post__img">
                          <a href="{{ Route('bweb') }}"><img src="assets/images/technology/blog_webdesign.jpg" style="border-radius: 50%;" alt="thumb" height = 110px width = 110px ></a>
                        </div><!-- /.widget-post-img -->
                        <div class="widget-post__content">
                          <span class="widget-post__date">Nov 1, 2022 </span>
                          <h4 class="widget-post__title"><a href="{{ Route('bweb') }}">Web Design and Development Services </a>
                          </h4>
                        </div><!-- /.widget-post-content -->
                      </div><!-- /.widget-post-item -->


                      <div class="widget-post-item d-flex align-items-center mt-3">
                        <div class="widget-post__img">
                          <a href="{{ Route('bapp') }}"><img src="assets/images/technology/blog1.jpg" style="border-radius: 50%;" alt="thumb" height = 150px width = 100px ></a>
                        </div><!-- /.widget-post-img -->
                        <div class="widget-post__content">
                          <span class="widget-post__date">Aug 4, 2022  </span>
                          <h4 class="widget-post__title"><a href="{{ Route('bapp') }}"> A Comprehensive Guide to the Benefits of Mobile App  Development  Services </a>
                          </h4>
                        </div><!-- /.widget-post-content -->
                      </div>




                    <div class="widget-post-item d-flex align-items-center mt-3">
                        <div class="widget-post__img">
                          <a href="{{ Route('bbeacon') }}"><img src="assets/images/technology/blog2.jpg" style="border-radius: 50%;" alt="thumb" height = 150px width = 100px ></a>
                        </div><!-- /.widget-post-img -->
                        <div class="widget-post__content">
                          <span class="widget-post__date">April 22, 2022  </span>
                          <h4 class="widget-post__title"><a href="{{ Route('bbeacon') }}"> What is Beacon Technology and its Various Contributions in Different Spectrums? </a>
                          </h4>
                        </div><!-- /.widget-post-content -->
                      </div><!-- /.widget-post-item -->










                </div><!-- /.widget-content -->
              </div><!-- /.widget-posts -->
              <div class="widget widget-categories mt-5">
                <h5 class="widget__title">Services</h5>
                <div class="widget-content">
                  <ul class="list-unstyled">
                     <li<a href="ai.php">AI &amp; ChatBot Development</a></li><!-- /.nav-item -->
                     <li><a href="digital.php">Digital Marketing Solutions</a></li><!-- /.nav-item -->
                     <li><a href="web.php">Website Design &amp; Development</a></li><!-- /.nav-item -->
                     <li><a href="mobilep.hp">Mobile Applications Development</a></li><!-- /.nav-item -->
                     <li><a href="ecom.php">Ecommerce Application Development</a></li><!-- /.nav-item -->
                     <li><a href="it.php">IT Smart Workforce</a></li><!-- /.nav-item -->

                  </ul>
                </div><!-- /.widget-content -->
              </div><!-- /.widget-categories -->

            </aside><!-- /.sidebar -->
          </div><!-- /.col-lg-4 -->        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.blog Single -->

  <!----------------------------------------------------------------------------------------------------->
  <div id="contacts" class="pricing-tables" >
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
<!--------------------->


@endsection
