<header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.html" class="logo" style="padding-left:50px;">
              <img src="{{ asset('assets/images/nrg.png') }}" alt="Chain App Dev" height = 100px width = 100px >
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="{{ Route('home') }}" style="font-weight: bold;" class="active">Home</a></li>
              <li class="scroll-to-section ">
                <div class="dropdown" >
                      <button style="border-style: none; font-weight: bold;" class="btn bg-white text-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Who We Are?
                      </button>
                      <ul class="dropdown-menu bg-primary text-white">
                        <li><a class="dropdown-item" href="{{ Route('about') }}">About Us</a></li>
                        <li><a class="dropdown-item" href="{{ Route('team') }}">Our Team</a></li>
                      </ul>
                    </div>
              </li>
              <li class="scroll-to-section ">
                <div class="dropdown" >
                      <button style="border-style: none; font-weight: bold;" class="btn bg-white text-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Services
                      </button>
                      <ul class="dropdown-menu bg-primary text-white">
                        <li><a class="dropdown-item" href="{{ Route('ai') }}">AI & ChatBot Development</a></li>
                        <li><a class="dropdown-item" href="{{ Route('dm') }}">Digital Marketing Solutions</a></li>
                        <li><a class="dropdown-item" href="{{ Route('web') }}">Website Design & Development</a></li>
                        <li><a class="dropdown-item" href="{{ Route('mobile') }}">Mobile Applications Development</a></li>
                        <li><a class="dropdown-item" href="{{ Route('ecom') }}">Ecommerce Application Development</a></li>
                        <li><a class="dropdown-item" href="{{ Route('it') }}"> IT Smart Workforce</a></li>
                      </ul>
                    </div>
              </li>
              <li class="scroll-to-section ">
                <div class="dropdown" >
                      <button style="border-style: none; font-weight: bold;" class="btn bg-white text-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Products
                      </button>
                      <ul class="dropdown-menu bg-primary text-white">
                        <li><a class="dropdown-item" style="border-style: none; font-weight: bold;" href="{{ Route('crm') }}">Custom CRM Software Solutions</a></li>

                      </ul>
                    </div>
              </li>
              <li class="scroll-to-section"><a style="font-weight: bold;" class="bg-white text-primary" href="{{ Route('blog') }}">Blog</a></li>
              <li class="scroll-to-section"><a style="font-weight: bold;" class="bg-white text-primary" href="#contacts">Contact Us</a></li>
              <li><div class="gradient-button"><a href="https://tidycal.com/gauravpriya-at-nrg-phoenix" target="popup" class="btn btn__secondary action__btn-contact" onclick="window.open('https://tidycal.com/gauravpriya-at-nrg-phoenix','popup','width=770,height=600'); return false;">
                <i class="fa fa-sign-in-alt"></i>Book An Appointment</a></div></li>
            </ul>
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
