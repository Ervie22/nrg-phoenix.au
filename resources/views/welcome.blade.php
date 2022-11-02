@extends('layouts.master')

@section('title', 'nrg.au-home')



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
                    <h6 >Custom Software Development company</h6><br>
                    <h6>Digital Transformation Services</h6><br>
                    <h6>Digital Marketing</h6><br>
                    <h6>Legacy Application modernisation services</h6><br>
                    <h6>Your trusted IT partner</h6><br>


                    <h6 class="mt-3">Enhance your business proficiency with our tailored, <br> results-driven custom software solutions to compete in this <br> competitive market.</h6>
                  </div>
                  <div class="col-lg-12 mt-3">
                    <div class="white-button first-button scroll-to-section">
                      <a href="#services">Our Services</a>
                    </div>
                    <div class="white-button scroll-to-section">
                      <a href="#contacts">Get Started</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">

                <img src="{{ asset('assets/images/technology/web-programming-img.jpg') }}" alt="" style="border-radius: 50%;">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!--------------------------------------------------------Services----------------------------------------->
  <div id="services" class="services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
            <h4>Top Notch <em>Custom Software Development</em> Services </h4>
            <img src="{{ asset('assets/images/heading-line-dec.png') }}" alt="">
            <p>NRG Phoenix, a custom software development company furnishes a wide range of technological upgraded custom software development services that suits in diverse business fields to meet your specific business demands.</p>
            <p>Our dedicated experts as a team excel in providing the results driven output without any hassles. We have professionals with years of experience in handling the clients and satisfying their business requirements. Our skilled software developers provide top-notch custom software development services to the leading enterprises globally across all the industries.
              </p>
              <a href="#contacts" class="btn btn__primary btn__xl btn__icon mb-30">
                <span>Talk to Our Experts! </span>
                <i class="icon-arrow-right"></i>
              </a>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 wow slideInLeft" data-wow-duration="0.75s" data-wow-delay="0s">
          <div class="service-item first-service">
            <div class="icon"></div>
            <h4>Website Design & Development</h4>
            <p>Build your own website that enables you to increase your online presence. Begin your <br> online journey today!</p>
            <div class="text-button">
              <a class="learnLink" href="/web-design-development">Read More <i class="fa fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
          <div class="service-item second-service">
            <div class="icon"></div>
            <h4>Mobile Applications Development</h4>
            <p>Develop both Android and iOS web and mobile applications that evolve your business to the next level.</p>
            <div class="text-button">
              <a class="learnLink" href="/mobile-app-development-company">Read More <i class="fa fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 wow slideInRight" data-wow-duration="0.75s" data-wow-delay="0s">
          <div class="service-item third-service">
            <div class="icon"></div>
            <h4>Ecommerce Application Development</h4>
            <p>Grow your business online and design your ecommerce mobile app that scales your newly established business with the target audience.</p>
            <div class="text-button">
              <a class="learnLink" href="/ecommerce-app-development">Read More <i class="fa fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mt-5 wow slideInLeft" data-wow-duration="0.75s" data-wow-delay="0s">
          <div class="service-item fourth-service">
            <div class="icon"></div>
            <h4>AI & ChatBot Development</h4>
            <p>Identify the right opportunity to revamp your business and develop your website integrated with <br> AI chatbot. </p>
            <div class="text-button">
              <a class="learnLink" href="/ai-chatbot-development">Read More <i class="fa fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mt-5 wow slideInUp" data-wow-duration="0.75s" data-wow-delay="0s">
          <div class="service-item second-service">
            <div class="icon"></div>
            <h4>Digital Marketing Solutions</h4>
            <p>Digital Marketing solutions consist of different techniques used to promote or market your business to accelerate brand growth.</p>
            <div class="text-button">
              <a class="learnLink" href="/digital-marketing-services">Read More <i class="fa fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mt-5 wow slideInRight" data-wow-duration="0.75s" data-wow-delay="0s">
          <div class="service-item third-service">
            <div class="icon"> </div>
            <h4>Staff Augmentation</h4>
            <p>Staff augmentation is one of the outsourcing models that allow for hiring tech talent globally and managing augmented teams. </p>
            <div class="text-button">
              <a class="learnLink" href="/staff-augmentation-services">Read More <i class="fa fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!--------------------------------------------------- Approach---------------------------->
<div class="container m-5">
    <div class="jumbotron">
        <div class="row">
            <div class="card align-self-center wow fadeInLeft">
            <div class="section-heading text-center">
            <h4>Our Approach</h4>
            <img  src="{{ asset('assets/images/heading-line-dec.png') }}" alt="">
            <p>Our goal is to develop sustainable custom software solutions. Through this model our expert team works to develop customized software solutions which creates sustainable value for all our stakeholders, while staying top in Quality.</p>
          </div>
          <div class="row ">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-3">
                            <div class="box-item">
                                <h4><a href="#">Planning</a></h4>
                                <p>NRG Phoenix Expert team follows a data-first approach to understand your requirements and plans a customized software solution that meets your business goals.</p>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="box-item">
                                <h4><a href="#">Designing</a></h4>
                                <p>Our certified Architect and Design experts handcrafts the layouts & wireframes according to your user requirements.</p>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="box-item  ">
                                <h4><a  href="#">Coding & Testing</a></h4>
                                <p  >Our Technology certified developers start coding to give birth to your custom software solution. An expert team of QA testers test the code against the test scripts and make sure all the criteria are met for user acceptance.</p>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="box-item">
                                <h4 ><a href="#">Deploying</a></h4>
                                <p>Our SCM team scripts the deployment plan & deploys the code to the production server to make the solution Live.</p>
                            </div>
                        </div>
                        <div class="row text-center">
              <p>Feel free to contact us, or you can call us any time <a href="tel:+61468495900">+61 468-495-900</a> </p>
              <div class="gradient-button">
                <a href="https://tidycal.com/gauravpriya-at-nrg-phoenix" target="popup" class="btn btn__secondary action__btn-contact" onclick="window.open('https://tidycal.com/gauravpriya-at-nrg-phoenix','popup','width=770,height=600'); return false;">
                  <i class="fa fa-sign-in-alt"></i>Book An Appointment</a>
              </div>
                    </div>
                </div>
            </div>
        </div>

            </div>
        </div>

    </div>
</div>

<!-------------------------------touch--------------------------------->
  <div id="clients" class="the-clients">
    <div class="container wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading">
            <h4>Seeking to develop a Robust, <em>Hassle-free </em> Software Development Services?</h4>
            <img src="{{ asset('assets/images/heading-line-dec.png') }}" alt="">
            <p>NRG Phoenix has trained developers’ expertise in delivering bug-free outputs with the desired respective technologies. They leverage their skills and talent to deliver the best outcome software development solution.</p>
            <p>Our excellent adroit team is consistent in delivering high quality results with innovative solutions that enhance your business growth. We work with complete transparent project management and adhere strictly to the timelines.</p>
            <div class="gradient-button text-center mt-3">
              <a href="/contact-us" class="btn btn__primary btn__xl btn__icon mb-30">
                Get In TOuch</a>
            </div>
          </div>

        </div>
  <!-----------------------------------------------video----------------------------------------------------------------->
        <div class="container-fluid text-center" >
          <h2 class="text-center">key to successful business</h2>
          <video controls="" poster="#" >
          <source src="{{ asset('assets/images/technology/nrg-video.mp4') }}" type="video/mp4" >
        </video>
        </div>
  <!------------------------------------Album---------------------------------------------------------------------------->


  <!------------------------------------------------STock Tech------------------------------------------------------------------->

          <div class="naccs m-5">
              <div class=" align-self-center">
                    <div class="first-thumb active">
                      <div class="thumb">
                        <div class=" text-center wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
                            <h3> <em>Our Technology Stock</em> </h3>
                        </div>
                        <div class="container mt-3 ">
                          <div class="jumbotron">
                            <div class="card">
                              <div class="card-body">
                              <div class="row">
    <div class="col-4 wow slideInLeft" data-wow-duration="0.75s" data-wow-delay="0s">
          <div class="card shadow-sm text-center mb-3">
          <div class="gradient-button mt-3"><a href="" target="popup" class="btn btn__secondary action__btn-contact" >
                Back End</a> </div>

            <div class="card-body">

              <div class="d-flex justify-content-between align-items-center">
                <div class="col">
                  <img src="{{ asset('assets/images/technology/microsoft-dotnet.svg') }}"  height = 50px width = 50px alt="img1">
                </div>
                <div class="col">
                  <img src="{{ asset('assets/images/technology/java.svg') }}"  height = 50px width = 50px alt="img1">
                    </div>
                  <div class="col">
                   <img src="{{ asset('assets/images/technology/nodejs.svg') }}"  height = 50px width = 50px alt="img1">
                  </div>
                  <div class="col">
                   <img src="{{ asset('assets/images/technology/php.svg') }}"  height = 50px width = 50px alt="img1">
                  </div>
                  <div class="col">
                   <img src="{{ asset('assets/images/technology/rails.svg') }}"  height = 50px width = 50px alt="img1">
                  </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-4 wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
          <div class="card shadow-sm text-center mb-3">
          <div class="gradient-button mt-3"><a href="" target="popup" class="btn btn__secondary action__btn-contact" >
                Front End</a> </div>

            <div class="card-body">
             <div class="d-flex justify-content-between align-items-center">
             <div class="col">
                                <img src="{{ asset('assets/images/technology/angularjs-by-google.svg') }}"  height = 50px width = 50px alt="img1">
                              </div>
                              <div class="col">
                                <img src="{{ asset('assets/images/technology/react.svg') }}"  height = 50px width = 50px alt="img1">
                              </div>
                                <div class="col">
                                  <img src="{{ asset('assets/images/technology/vuejs.svg') }}"  height = 50px width = 50px alt="img1">
                                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-4 wow slideInRight" data-wow-duration="0.75s" data-wow-delay="0s">
          <div class="card shadow-sm text-center mb-3">
          <div class="gradient-button mt-3"><a href="" target="popup" class="btn btn__secondary action__btn-contact" >
                Data Base</a> </div>

            <div class="card-body">
             <div class="d-flex justify-content-between align-items-center">
             <div class="col">
                                  <img src="{{ asset('assets/images/technology/microsoft-sql-server.svg') }}"  height = 50px width = 50px alt="img1">
                                </div>
                                <div class="col">
                                  <img src="{{ asset('assets/images/technology/mysql.svg') }}"  height = 50px width = 50px alt="img1">
                                </div>
                                  <div class="col">
                                    <img src="{{ asset('assets/images/technology/mongodb.svg') }}"  height = 50px width = 50px alt="img1">
                                  </div>
                                  <div class="col">
                                    <img src="{{ asset('assets/images/technology/oracle.svg') }}"  height = 50px width = 50px alt="img1">
                                  </div>

                                  <div class="col">
                                    <img src="{{ asset('assets/images/technology/postgre-sql.svg') }}"  height = 50px width = 50px alt="img1">
                                  </div>
              </div>
            </div>
          </div>
        </div>
  <div class="row">
    <div class="col-4 wow slideInLeft" data-wow-duration="0.75s" data-wow-delay="0s">
          <div class="card  text-center">
          <div class="gradient-button mt-3"><a href="" target="popup" class="btn btn__secondary action__btn-contact" >
                Mobile</a> </div>

            <div class="card-body">

              <div class="d-flex ">
              <div class="col">
                                    <img src="{{ asset('assets/images/technology/apple.svg') }}"  height = 50px width = 50px alt="img1">
                                  </div>
                                  <div class="col">
                                    <img src="{{ asset('assets/images/technology/android-logo.svg') }}"  height = 50px width = 50px alt="img1">
                                  </div>
                                    <div class="col">
                                      <img src="{{ asset('assets/images/technology/xamarin.svg') }}"  height = 50px width = 50px alt="img1">
                                    </div>

              </div>
            </div>
          </div>
        </div>

        <div class="col-4 wow slideInUp" data-wow-duration="0.75s" data-wow-delay="0s">
          <div class="card shadow-sm text-center ">
          <div class="gradient-button mt-3"><a href="" target="popup" class="btn btn__secondary action__btn-contact" >
                Cloud & DevOps</a> </div>

            <div class="card-body">
             <div class="d-flex justify-content-between align-items-center">
             <div class="col">
                                        <img src="{{ asset('assets/images/technology/aws.svg') }}"  height = 50px width = 50px alt="img1">
                                      </div>
                                      <div class="col">
                                        <img src="{{ asset('assets/images/technology/google-cloud.svg') }}"  height = 50px width = 50px alt="img1">
                                      </div>
                                        <div class="col">
                                          <img src="{{ asset('assets/images/technology/docker.svg') }}"  height = 50px width = 50px alt="img1">
                                        </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-4 wow slideInRight" data-wow-duration="0.75s" data-wow-delay="0s">
          <div class="card shadow-sm text-center">
          <div class="gradient-button mt-3"><a href="" target="popup" class="btn btn__secondary action__btn-contact" >
                Testing</a> </div>

            <div class="card-body wow slideIn" data-wow-duration="0.75s" data-wow-delay="0s">
             <div class="d-flex justify-content-between align-items-center">
             <div class="col">
                                        <img src="{{ asset('assets/images/technology/katalon_studio.svg') }}"  height = 50px width = 50px alt="img1">
                                      </div>
                                      <div class="col">
                                        <img src="{{ asset('assets/images/technology/selenium.png') }}"  height = 50px width = 50px alt="img1">
                                      </div>
                                        <div class="col">
                                          <img src="{{ asset('assets/images/technology/postman.svg') }}"  height = 50px width = 50px alt="img1">
                                        </div>
                                        <div class="col">
                                          <img src="{{ asset('assets/images/technology/jira.svg') }}"  height = 50px width = 50px alt="img1">
                                        </div>
              </div>
            </div>
          </div>
        </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        </div>
                      </div>
                    </div>
                    <div>
<!---------------------------------------contacts-------------------------------------------------------------->
  <div id="contacts" class="pricing-tables">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
            <h4>Let’s Speak about <em>your Business</em>  Requirements!</h4>
            <img src="{{ asset('assets/images/heading-line-dec.png') }}" alt="">
            <p>After your enrolment, our NRG Phoenix sales professionals will contact you within 24hours to know more about your requirements in detail.<br> All the enrolled details are confidential and maintained with high security.</p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="pricing-item-regular wow slideInLeft" data-wow-duration="0.75s" data-wow-delay="0s"">

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
        <div class="col-lg-6 mt-4 mb-4 ">
          <div class="pricing-item-pro wow slideInRight" data-wow-duration="0.75s" data-wow-delay="0s">

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
<section class="m-3">
<div class="container-fluid bg-light">

<div class=" row ">
<div class="col-6 wow p-5 fadeInLeft" data-wow-duration="0.75s" data-wow-delay="0s" style="padding:150px; font-family: sans-serif;;">
<h2 class="mb-3">Global Presence</h2>
<p class="text-dark">NRG Phoenix has attained its global presence with offices in India & Australia with skilled software developers, BAs and Delivery leaders.</p>
<p class="text-dark">As a custom software development entity, NRG Phoenix is committed to provide full fledged customized solutions to global clients in various technologies.</p>
</div>
<div class="col-6 p-5 wow slideInRight" data-wow-duration="0.75s" data-wow-delay="0s">
<img src="{{ asset('assets/images/full-custom-map-img.png') }}" height = 400px width = 800px  data-src="" alt="" title="">
</div>
</div>

</div>
</section>


@endsection
