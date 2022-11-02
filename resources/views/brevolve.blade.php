@extends('layouts.master')

@section('title','blog-revolve')

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
                  <h3 class="slide-item__title">How Artificial Intelligence is <br> revolutionizing the Digital World?</h3>
                 </div>

                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="assets/images/technology/blog8.jpg" alt="" style="border-radius: 50%;">
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
                    <img src="assets/images/technology/blog8.jpg" alt="blog image">
                  </a>
                </div><!-- /.post-img -->
                <div class="post-item__meta d-inline-flex align-items-center mb-0">
                  <span class="post-item__meta__date">August 12, 2021</span>


                </div><!-- /.blog-meta -->
              </div>			<div class="inner-padding-post">
              <h2 class="post-item__title">
                How Artificial Intelligence is revolutionizing the Digital World?
              </h2>
              <div class="post-item__desc">
                <p>The world has entirely altered in a digital way through the advancements in technology. In the pursuit of technological advancements, our regular day to day life is fortunate by discovering and hearing the term “Artificial Intelligence” which have risen up the world in several ways and transform our lives with huge impact. </p>
                <p>Thinking deep about Artificial Intelligence (AI) and how it is transforming the world in a digital manner? </p>
                <p>Then here, you can dive into the topic to get a solution for this question in your mind! </p>
                <p>AI is changing the human world and the lives of people and transformed as an engine for the growth of economies and various organizations. To describe it simple, it starts from a normal Google search to Alexa conversation, Chatbot response for customer support etc. Without a doubt, we are facing an Artificial intelligence or Machine learning driven tools in almost all the business verticals in our daily routine! </p>
                <p>Thus, AI revolutionize the world in definite from a way that we used to perform ordinarily in our daily activities such as organizing our work and managing business and taking decisions in our everyday lives. </p>
                <h5>What is Artificial Intelligence (AI)? </h5>
                <p>AI is the accumulation of diverse technologies that permit the machines to discover, comprehend and carry out the operations either on its own or based on human augmentation.</p>
                <p>This has the ability to act like human being in exact by learning and distinguishing things.  The most advantageous feature found in AI is that no machine seeks for rest to function when compared to humans! </p>
                <p>Artificial Intelligence (AI) is already present in vast services, we are using every day that we didn’t even aware of it. For example, when an E-commerce website like Amazon suggests you the same products that you wish to buy with the utilization of a system based AI. It helps to suggest a product that is relevant to your previous shopping or purchased products and other people’s future preference after buying the same product that you have bought. AI is getting upgrade in a way to handle it by its own by self-learning and non-human interactions.</p>
                <h5>AI Revolution towards Digital World  </h5>
                <p>AI technologies provide a rapid change that boosts across several business industries. </p>
                <p>Some of the striking AI technologies that have left an enduring impact on business growth by striking the world are listed below:</p>
                <h5>Robotic Process Automation (RPA) </h5>
                <p>With the support of this RPA technological update, the dream of having robots around us became a reality. This is because of AI technology that makes the world dream to real. </p>
                <p>RPA is utilized to reduce the human effort that reduce the costs and enhance business revenue. It automates all the regular work, guidelines-based work flow, managing workers in handling tedious tasks, streamline operations and a lot more that boosts business industries.</p>
                <h5>Machine Learning </h5>
                <p>The term “machine learning” defines like its name. That machine can think obviously and machines can do whatever the humans can do. This arises as the beginning of new era in which machines can learn by its own experiences and observations.</p>
                <p>At once, the generic algorithm feed in to it without even writing the code, this AI technology helps the machines to learn and build the logic on the prescribed data without human supervision. The complete process happens by making accurate predictions with the support of computers and effective task performance without any specific instructions. </p>
                <h5>Speech Recognition  </h5>
                <p>This is one of the most astounding technologies that helps the device to get identified by voice over and can respond to the human spoken language. Likewise many such intelligent virtual assistant came into the market that can interpret words and expressions to the user approach. </p>
                <p>These technologies will assuredly revolutionize the world and the way humans do business in mundane. Before implementing AI, it is better to know in detail about its entailment across all the industries.</p>
                <h5>Final words </h5>
                <p>In current times, it has been endorsed that Artificial Intelligence has frighten almost all the sectors and it has been believed that sooner it will be going to rule the world in upcoming future. From smartphones to chatbots, AI has registered in many things to choose one among many for us. Though it is an advancement technology, get it known familiar before jumping into it.</p>
                <h4>Stay Updated with Latest Technological Advancements! </h4>
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
