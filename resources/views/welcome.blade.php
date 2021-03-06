
@extends('layouts.public')
@section('title', 'Web Developer')
@section('description', 'Taylor Wilkinson, web developer')
@section('content')

<!-- THIS https://www.youtube.com/watch?v=6g8G3YQtQt4 -->
    
  <!--/ header-->
  <div class="container">
    @if (Auth::guest())
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">@lang('message.language')<span class="caret"></span></a>
        <ul class="dropdown-menu">
            <form id="form-detail" class="form-horizontal" role="form" method="POST" action="{{ route('/') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <li id="enlanguage" class="pointer">EN</li>
                <li id="eslanguage" class="pointer">ES</li>
            </form>
        </ul>
    </li>
    @endif
  </div>
  <section class="jumbotron rounded-0 mb-0 text-center">
    <div class="container">
      <h1 class="jumbotron-heading text-custom-dark" id="welcome-name">Taylor Wilkinson</h1>
      <p class="mx-auto">@lang('message.welcome-pg-description')</p>
      <div class="jumbo-btns">
        <a href="#projects" class="btn btn-custom shadow-sm text-custom-dark border my-2">@lang('message.my-work-btn')</a>
        <a href="/contact" class="btn btn-custom shadow-sm text-custom-dark border my-2">@lang('message.contact-me-btn')</a>
      </div>
      <ul class="social-icons d-flex justify-content-around mx-auto py-3">
          <li>
               <a href="https://github.com/coding4tacos/" class="text-custom-dark" target="_blank"><i class="fab fa-github"></i> </a>
          </li>
          <li>
              <a href="https://www.linkedin.com/in/taylor-wilkinson-a6478229/"  class="text-custom-dark" target="_blank"><i class="fab fa-linkedin-in"></i></a>
         </li>
         <li>
            <a href="https://codepen.io/coding4tacos/" class="text-custom-dark" target="_blank"> <i class="fab fa-codepen"></i> </a>
       </li>
     </ul>
    </div>
    <div class="down-icon rounded text-center my-5">
      <a href="#projects" class="scroll">
        <i class="fas fa-caret-down p-3 rounded-circle text-custom-dark"></i>
      </a>
    </div>
  </section>

  <section class="projects bg-light" id="projects">
    <div class="text-center">
      <h2 class="py-3 text-custom-dark">Some of my recent projects</h2>
    </div>
    <div class="container py-3">
      <div class="row d-flex flex-column flex-md-row justify-content-around text-center" id="project-cards">
        <!-- New Card -->
        <div class="col-md-5 p-0 card shadow">      
          <div class="project-image">
            <a href="#" data-toggle="modal" data-target="#exampleModal1">
              <img class="project-pic" src="/img/recipes.jpg" alt="share recipes portfolio project">
              <h3 class="project-name text-custom-dark">Share Recipes</h3>
            </a> 
          </div>
          <div class="project-description">
            <p class="p-3">A recipe sharing app built with PHP.</p>
            <a href="#" data-toggle="modal" data-target="#exampleModal2">More Info</a>
          </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title text-custom-dark" id="exampleModalLongTitle">Share Recipes</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col-5 d-flex justify-content-center flex-column">
                        <a href="http://share-recipes.epizy.com/" class="text-custom-dark p-3" target="_blank">
                          <img class="project-pic" src="/img/recipes.jpg" alt="share recipes portfolio project">
                        </a>
                    </div>
                    <div class="col-md-7">
                      <p class="project-modal-desc text-left">
                        A web app for people who want to share recipes. The main purpose of this project was to better understand MVC and improve my PHP skills.
                      </p>
                      <p class="tech-used-modal text-left">
                        <p class="text-left"><span class="font-weight-bold">Tools:</span> PHP</p>
                      </p>
                    </div>
                  </div>
                  <a href="https://github.com/twilkinson24/share-recipes" class="text-custom-dark p-3" target="_blank"><i class="fab fa-github"></i></a>
                  <a href="http://share-recipes.epizy.com/" class="text-custom-dark p-3" target="_blank">See it live!</a>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>

          <!-- New Card -->
        <div class="col-md-5 p-0 card shadow">
            <a href="#" data-toggle="modal" data-target="#exampleModal2">
              <div class="project-image">
                <img class="project-pic" src="/img/weatherwatcher.jpg" alt="weather watcher project">
                <h3 class="project-name">Weather Watcher</h3>
              </div>
            </a> 
            <div class="project-description">
              <p class="p-3">A simple front-end web app for checking the weather. </p>
              <a href="#" data-toggle="modal" data-target="#exampleModal2">More Info</a>
            </div>
          </div>
  
          <!-- Modal -->
          <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Weather Watcher</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                      <div class="col-5 d-flex justify-content-center flex-column">
                          <a href="https://twilkinson24.github.io/" class="text-custom-dark p-3" target="_blank">
                            <img class="project-pic" src="/img/weatherwatcher.jpg" alt="weather watcher portfolio project">
                          </a>
                      </div>
                      <div class="col-md-7">
                        <p class="project-modal-desc text-left">
                            A front-end web app for checking the weather. This was one of my first React projects built from scratch. The app gets data from the <a href="https://openweathermap.org/" target="_blank">Open Weather Map API</a>.
                        </p>
                        <p class="tech-used-modal text-left">
                          <span class="font-weight-bold">Tools:</span> JavaScript, React
                        </p>
                      </div>
                    </div>
                    <a href="https://github.com/twilkinson24/twilkinson24.github.io" class="text-custom-dark p-3" target="_blank"><i class="fab fa-github"></i></a>
                    <a href="https://twilkinson24.github.io/" class="text-custom-dark p-3" target="_blank">See it live!</a>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
        
      </div> <!-- End row -->

      <div class="row d-flex flex-column flex-md-row justify-content-around text-center" id="project-cards">
        <!-- New Card -->
        <div class="col-md-5 p-0 card shadow">
          <a href="#" data-toggle="modal" data-target="#exampleModal3">
            <div class="project-image">
              <img class="project-pic" src="./img/landing.jpg" alt="static page template project">
              <h3 class="project-name">Static Page Template</h3>
            </div>
          </a> 
          <div class="project-description">
            <p class="p-3">A PSD to code challenge to myself.</p>
            <a href="#" data-toggle="modal" data-target="#exampleModal3">More Info</a>
          </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Static Page Template</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col-5 d-flex justify-content-center flex-column">
                        <a href="https://twilkinson24.github.io/landing-page-practice/" class="text-custom-dark p-3" target="_blank">
                          <img class="project-pic" src="./img/landing.jpg" alt="psd to code portfolio project">
                        </a>
                    </div>
                    <div class="col-md-7">
                      <p class="project-modal-desc text-left">
                          This was a challenge to myself to quickly convert a design to code. Apart from responsive design, it was also good jQuery practice for me.
                      </p>
                      <p class="tech-used-modal text-left">
                        <span class="font-weight-bold">Tools:</span> HTML, CSS, jQuery
                      </p>
                    </div>
                  </div>
                  <a href="https://github.com/twilkinson24/landing-page-practice" class="text-custom-dark p-3" target="_blank"><i class="fab fa-github"></i></a>
                  <a href="https://twilkinson24.github.io/landing-page-practice/" class="text-custom-dark p-3" target="_blank">See it live!</a>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
           <!-- New Card -->
        <div class="col-md-5 p-0 card shadow">
          <a href="#" data-toggle="modal" data-target="#exampleModal4">
            <div class="project-image">
              <img class="project-pic" src="./img/wpsite.jpg" alt="WordPress website project">
              <h3 class="project-name">WordPress Website/Theme</h3>
            </div>
          </a> 
          <div class="project-description">
            <p class="p-3">A WordPress website I am building for a travel blog.</p>
            <a href="#" data-toggle="modal" data-target="#exampleModal4">More Info</a>
          </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">WordPress Website/Theme</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col-5 d-flex justify-content-center flex-column">
                        <a href="https://github.com/twilkinson24/wp-travel-site" class="text-custom-dark p-3" target="_blank">
                          <img class="project-pic" src="./img/landing.jpg" alt="psd to code portfolio project">
                        </a>
                    </div>
                    <div class="col-md-7">
                      <p class="project-modal-desc text-left">
                          *This project is not quite finished.

                          A website/WordPress theme I am building for an existing travel blog. I have a lot of experience with WordPress, but this will be the most complete theme I have built. This project has taught me a lot about working with PHP to create and alter themes and page templates.
                      </p>
                      <p class="tech-used-modal text-left">
                        <span class="font-weight-bold">Tools:</span> HTML, CSS, Flexbox, JavaScript, PHP, WordPress
                      </p>
                    </div>
                  </div>
                  <a href="https://github.com/twilkinson24/wp-travel-site" class="text-custom-dark p-3" target="_blank"><i class="fab fa-github"></i></a>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
    </div><!-- End Row -->
  </section>
  <!-- ABOUT ME -->
  <section class="about-me" id="about-me">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-md-4 avatar-wrap m-3">
            <img src="img/avatar.jpg"  class="rounded-circle shadow-sm max250" alt="Taylor Wilkinson - Web Developer">
          </div>
          <div class="col-md-7 d-flex h-100 justify-content-center flex-column about-me-desc">
            <h2 class="text-center text-md-left my-3 font-weight-bold text-custom-dark">about me</h2>
            <p class="text-left">I'm a lover of front-end development, especially anything JavaScript related.</p>
            <p class="lead">A life-long learner, I discovered a passion for coding and haven't looked back since. I love collaborating with others to build responsive web sites and web applications.
            <p><span class="font-weight-bold">I regularly use: </span>HTML, CSS, Bootstrap, JavaScript, React, PHP, WordPress</p>
            
            <p class="text-center text-md-left"><a href="#">My Resume</a> | <a href="/contact">Contact</a></p>
            <ul class="social-icons list-unstyled m-md-0 col-5 d-flex justify-content-between p-0">
                <li>
                     <a href="https://github.com/twilkinson24/" class="text-custom-dark" target="_blank"><i class="fab fa-github"></i> </a>
                </li>
                <li>
                     <a href="https://twitter.com/coding4tacos/" class="text-custom-dark" target="_blank"> <i class="fab fa-twitter"></i> </a>
                </li>
                <li>
                     <a href="https://codepen.io/coding4tacos/" class="text-custom-dark" target="_blank"> <i class="fab fa-codepen"></i> </a>
                </li>
                <li>
                     <a href="https://www.linkedin.com/in/taylor-wilkinson-a6478229/"  class="text-custom-dark" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                </li>
              </ul>
          </div>
        </div>
      </div>
  </section>

@endsection
