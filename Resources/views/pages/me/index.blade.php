@extends('layouts.default')

@section('content')
  <div class="background animated "></div>

      <nav class='hidden'>
          <div class="container">
              <ul class="navigation">
                  <li><a href="#about_me"> About Me </a></li>
                  <li><a href=""> Projects </a></li>
              </ul>
          </div>
      </nav>


      <!-- Start name, slogan -->
      <header class='myself vcenter fullheight'>
          <div class="container">
              <div class="row">
                   <div class="col-xs-12 text-center">
                      <div class="name kumar"> Gkiokan <small>NETWORK</small> </div>
                      <div class="slogan"> discipline, quality & perfection </div>
                  </div>
              </div>

              <div class='scrolldown'>
              <div class='icon'>
                <svg xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    version="1.1" x="0px" y="0px"
                    viewBox="0 0 90 90"
                    enable-background="new 0 0 90 90"
                    xml:space="preserve">
                    <circle cx="45" cy="13" r="3"></circle>
                    <path d="M45,0.5c-8.284,0-15,6.717-15,15.002v24.996C30,48.783,36.716,55.5,45,55.5s15-6.717,15-15.002V15.502  C60,7.217,53.284,0.5,45,0.5z M58,40.498C58,47.667,52.168,53.5,45,53.5c-7.168,0-13-5.833-13-13.002V15.502  C32,8.333,37.832,2.5,45,2.5c7.168,0,13,5.833,13,13.002V40.498z"></path>
                    <path d="M58.293,59.793L45,73.086L31.707,59.793c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414l14,14  C44.488,75.402,44.744,75.5,45,75.5s0.512-0.098,0.707-0.293l14-14c0.391-0.391,0.391-1.023,0-1.414S58.684,59.402,58.293,59.793z"></path>
                    <path d="M58.293,73.793L45,87.086L31.707,73.793c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414l14,14  C44.488,89.402,44.744,89.5,45,89.5s0.512-0.098,0.707-0.293l14-14c0.391-0.391,0.391-1.023,0-1.414S58.684,73.402,58.293,73.793z"></path>
                </svg>
              </div>
              </div>

          </div>

      </header>
      <!-- End -->


      <main class='main'>
              <!-- Start welcome section -->
              <section class='me'>
              <!-- start of container -->
              <div class='container'>
                  <!-- start first look -->
                  <div class="row">
                  <div class="col-xs-12 col-sm-3">
                      <div class="me me_avatar"></div>
                  </div>
                  <div class="col-xs-12 col-sm-8 col-sm-offset-1">
                      <h2> Who I am?</h2>
                      <div>
                          Hi there, welcome to my Homepage!      <br>
                          <br>
                          I am Gkiokan, a Fullstack Developer, spezialised in Back- and Frontend Development. <br>
                          I love to create Websites and PHP based Applications for any use case.<br>
                          <br>
                          Let's talk about the purpose of this page. <br>
                          It exists since end of 2006, so what's the matter now? Read on [<a href='#about_me'> here </a>]<br>
                      </div>
                      <div class='split_100'></div>
                  </div>
                  </div>
                  <!-- end first look -->

                  <!-- start skills -->
                  <div class='split_100'></div>
                  <div class="row list">
                       <div class="col-xs-12 col-sm-6">
                              <h3 class='kumar text-center'> my Skills </h3>
                              <ul class="skills noselect">
                                  <li>
                                      <div class='title'>
                                          <span class="icon g g-x2 php"></span>
                                          <span class='name'>PHP</span>
                                       </div>
                                  </li>
                                  <li>
                                    <div class='title'>
                                      <span class="icon g g-x2 html"></span>
                                      <span class="name"> HTML5 </span>
                                    </div>
                                  </li>
                                  <li>
                                      <div class='title' >
                                          <span class="icon g g-x2 js"></span>
                                          <span class='name'> JS </span>
                                      </div>
                                  </li>
                                  <li>
                                      <div class='title' >
                                          <span class="icon g g-x2 css"></span>
                                          <span class='name'> CSS3 </span>
                                      </div>
                                  </li>
                                  <li>
                                      <div class='title'>
                                          <span class="icon g g-x2 sass "></span>
                                          <span class="name"> Sass </span>
                                      </div>
                                  </li>
                                  <li>
                                      <div class="title">
                                          <span class="icon g g-x2 wp clean"></span>
                                          <span class="name"> WordPress </span>
                                      </div>
                                  </li>
                                  <li>
                                      <div class='title'>
                                        <span class="icon g g-x2 saas2"></span>
                                        <span class="name"> SaaS </span>
                                      </div>
                                  </li>
                                  <li>
                                      <div class='title'>
                                        <span class='icon g g-x2 api '></span>
                                        <span class="name"> REST </span>
                                    </div>
                                  </li>
                                  <li>
                                      <div class='title'>
                                          <span class="icon g g-x2 console"></span>
                                          <span class="name"> Console </span>
                                      </div>
                                  </li>
                              </ul>
                        </div>

                        <div class='col-xs-12 col-sm-6'>
                              <h3 class="kumar text-center"> my Tools </h3>
                              <ul class="tools noselect">
                                  <li>
                                      <div class='title'>
                                        <span class='icon g windows clean'></span>
                                         Windows
                                      </div>
                                  </li>
                                  <li>
                                      <div class='title'>
                                        <span class='icon g mac clean'></span>
                                         Mac
                                      </div>
                                  </li>
                                  <li>
                                      <div class='title'>
                                        <span class='icon g atom'></span>
                                         <span class="name"> Atom </span>
                                      </div>
                                  </li>
                                  <li>
                                      <div class='title'>
                                        <span class='icon g brackets'></span>
                                         <span class="name"> Brackets </span>
                                      </div>
                                  </li>
                                  <li>
                                      <div class='title'>
                                        <span class='icon g composer '></span>
                                         <span class="name"> Composer </span>
                                      </div>
                                  </li>
                                  <li>
                                      <div class='title'>
                                        <span class='icon g bower'></span>
                                         <span class="name"> Bower </span>
                                      </div>
                                  </li>
                                  <li>
                                      <div class='title'>
                                        <span class='icon g g-x2 npm'></span>
                                         <span class="name"> npm </span>
                                      </div>
                                  </li>
                                  <li>
                                      <div class='title'>
                                        <span class='icon g postman'></span>
                                         <span class="name"> Postman </span>
                                      </div>
                                  </li>
                                  <li>
                                      <div class='title'>
                                        <span class='icon g apache'></span>
                                         <span class="name"> Apache </span>
                                      </div>
                                  </li>
                                  <li>
                                      <div class='title'>
                                        <span class='icon g g-x2 git'></span>
                                         <span class="name">Git</span>
                                      </div>
                                  </li>
                                  <li>
                                      <div class='title'>
                                        <span class='icon g chrome'></span>
                                         <span class="name">Chrome</span>
                                      </div>
                                  </li>

                                  <li>
                                      <div class='title'>
                                        <span class='icon g safari'></span>
                                         <span class="name">Safari</span>
                                      </div>
                                  </li>
                                  <li>
                                      <div class='title'>
                                        <span class='icon g ff'></span>
                                         <span class="name">Firefox</span>
                                      </div>
                                  </li>
                                  <li>
                                      <div class='title'>
                                        <span class='icon g ie'></span>
                                         <span class="name"> Edge </span>
                                      </div>
                                  </li>

                              </ul>
                        </div>
                  </div>
                  <!-- end skills -->

                  <!-- start twitch image -->
                  <div class='split_100'></div>
                  <div class="row">
                      <div class='col-xs-12'>
                          <h3 class='kumar text-center'> thats Me </h3>
                          <div class="me me_at_twitch"></div>
                          <div class='split_100'></div>
                      </div>
                  </div>
                  <!-- end twitch image -->

              </div>
              <!-- end of container -->

                  <!-- Scroll to next Section -->
                  <div class='scrolldown'>
                  <div class='icon'>
                    <svg xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        version="1.1" x="0px" y="0px"
                        viewBox="0 0 90 90"
                        enable-background="new 0 0 90 90"
                        xml:space="preserve">
                        <circle cx="45" cy="13" r="3"></circle>
                        <path d="M45,0.5c-8.284,0-15,6.717-15,15.002v24.996C30,48.783,36.716,55.5,45,55.5s15-6.717,15-15.002V15.502  C60,7.217,53.284,0.5,45,0.5z M58,40.498C58,47.667,52.168,53.5,45,53.5c-7.168,0-13-5.833-13-13.002V15.502  C32,8.333,37.832,2.5,45,2.5c7.168,0,13,5.833,13,13.002V40.498z"></path>
                        <path d="M58.293,59.793L45,73.086L31.707,59.793c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414l14,14  C44.488,75.402,44.744,75.5,45,75.5s0.512-0.098,0.707-0.293l14-14c0.391-0.391,0.391-1.023,0-1.414S58.684,59.402,58.293,59.793z"></path>
                        <path d="M58.293,73.793L45,87.086L31.707,73.793c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414l14,14  C44.488,89.402,44.744,89.5,45,89.5s0.512-0.098,0.707-0.293l14-14c0.391-0.391,0.391-1.023,0-1.414S58.684,73.402,58.293,73.793z"></path>
                    </svg>
                  </div>
                  </div>
                  <!-- Scroll to next - END -->

                  <!-- Start countdown -->
                  <div class='split_100'></div>
                  <div class='countdown'>
                    <div class='container-fluid'>
                      <div class="row">
                        <div class="col-xs-12">
                          <div class="countdown_text text-center">
                            <span style='font-size: 1.5rem; font-weight:bold;'> You're in 2017 for so long ... </span>
                            <br><br><br>
                          </div>

                          <div class="countdown_wrapper kumar" id='countdown_new_year'>
                            <div class="d">00</div>
                            <div class="p">:</div>

                            <div class="h">00</div>
                            <div class="p">:</div>

                            <div class="m">00</div>
                            <div class="p">:</div>

                            <div class="s">00</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End countdown (moved that up, for jumping to the next)-->
              <div class='split_100'></div>
              </section>
              <!-- End welcome section -->


              <!-- Start Project list -->
              <section class='projects'>
              <div class='container'>
              <div class="row">
                   <div class="col-xs-12">
                         <h3 class='kumar text-center'> Projects </h3>
                         <p>
                             <div class="row">
                                 <div class="col-xs-12 col-sm-6" style='min-height:auto; padding-bottom:20px;'>
                                   Here you can see my current projects with their milestones and status.
                                   Some of them are made for company usage, other ones are free and open-source.
                                   I'll update the list accordingly to the latest milestones. <br>
                                 </div>
                                 <div class="col-xs-12 col-sm-6" style='min-height:auto; padding-bottom:20px;'>
                                   <span class='label label-info split_right'> Global </span>  Projects can be used by any one. <br>
                                   <span class='label label-danger split_right'> Company </span>  Projects can only be used by paid company users. <br>
                                   <span class="label label-success split_right"> Free </span>  Projects are Fremium Projects and can be expand in limits.<br>
                                 </div>
                             </div>
                             <br>
                             <br>
                         </p>
                   </div>
              </div>
              <div class="row list">
                   <div class="col-xs-12 col-sm-6 col-md-4">
                         <div class="panel panel-info">
                             <div class="panel-heading text-center kumar"> Gkiokan.NET </div>
                             <div class="panel-body">
                                 <h3 class='kumar text-center hidden'> Gkiokan.NET </h3>
                                 <ul>
                                     <li> Static start page <span class='label label-xs label-success'> [ = 50 = ] </span></li>
                                     <li> User Management <span class='label label-xs label-warning'> [ 0 == ] </span></li>
                                     <li> Login / Register <span class='label label-xs label-info'> [ == 50 == ] </span></li>
                                     <li> Profile Settings and Information <span class='label label-xs label-success'> [ == 100 ] </span></li>
                                     <li> Profile Access intern / extern <span class='label label-xs label-info'> [ == 80 = ] </span></li>
                                     <li> Projects Management <span class='label label-xs label-warning'> [ 0 == ] </span></li>
                                     <li> Lizenz Management <span class='label label-xs label-warning'> [ 0 == ] </span></li>
                                     <li> News Management <span class='label label-xs label-warning'> [ 0 == ] </span></li>
                                     <li> Page Management <span class='label label-xs label-warning'> [ 0 == ] </span></li>
                                 </ul>
                             </div>
                             <div class="panel-footer"> <span class='label label-info'> Admin only </span></div>
                         </div>
                    </div>

                    <div class='col-xs-12 col-sm-6 col-md-4'>
                          <div class="panel panel-danger">
                              <div class="panel-heading text-center kumar"> LMS </div>
                              <div class="panel-body">
                                  <h3 class="kumar text-center hidden"> LMS</h3>
                                  <ul>
                                      <li> Create KeyCode per Project <span class='label label-xs label-success'> [ == 100 ] </span></li>
                                      <li> Create a Lizenz Code per Request <span class='label label-xs label-success'> [ == 100 ] </span></li>
                                      <li> List granted Lizenzes <span class='label label-xs label-success'> [ == 100 ] </span></li>
                                      <li> Manage Lizenz Status <span class='label label-xs label-success'> [ == 100 ] </span></li>
                                      <li> Expiry Time for Lizenz <span class='label label-xs label-success'> [ == 100 ] </span></li>
                                      <li> Access Middleware for Projects <span class='label label-xs label-warning'> [ 0 == ] </span></li>
                                  </ul>
                              </div>
                              <div class="panel-footer"> <span class='label label-info'> Admin only </span></div>
                          </div>
                    </div>

                    <div class='col-xs-12 col-sm-6 col-md-4'>
                          <div class="panel panel-danger">
                              <div class="panel-heading text-center kumar"> 2HS </div>
                              <div class="panel-body">
                                  <h3 class="kumar text-center hidden"> 2HS </h3>
                                  <ul>
                                      <li> User can create his own company <span class='label label-xs label-success'> [ == 100 ] </span></li>
                                      <li> User can create customer <span class='label label-xs label-success'> [ == 100 ] </span></li>
                                      <li> User can add items with cid, price and deadline in weeks <span class='label label-xs label-success'> [ == 100 ] </span></li>
                                      <li> Items QR-Code generator <span class='label label-xs label-info'> [ 20 == ] </span></li>
                                      <li> Commision statement <span class='label label-xs label-success'> [ == 100 ] </span></li>
                                      <li> Receipt with details <span class='label label-xs label-success'> [ == 100 ] </span></li>
                                      <li> Montly Weekly Daily statistics <span class='label label-xs label-info'> [ 20 == ] </span></li>
                                  </ul>
                              </div>
                              <div class="panel-footer"> <span class='label label-info'> Donated Companies </span></div>
                          </div>
                    </div>

                    <div class='col-xs-12 col-sm-6 col-md-4'>
                          <div class="panel panel-success">
                              <div class="panel-heading text-center kumar"> WordPress Update Server </div>
                              <div class="panel-body">
                                  <h3 class="kumar text-center hidden"> WordPress Update Server </h3>
                                  <ul>
                                      <li> Plugin Management <span class='label label-xs label-warning'> [ 0 == ] </span></li>
                                      <li> Theme Management <span class='label label-xs label-warning'> [ 0 == ] </span></li>
                                      <li> Lizenscodes Management <span class='label label-xs label-warning'> [ 0 == ] </span></li>
                                      <li> Update API <span class='label label-xs label-warning'> [ 0 == ] </span></li>
                                      <li> prepared Client Interface <span class='label label-xs label-warning'> [ 0 == ] </span></li>
                                  </ul>
                              </div>
                              <div class="panel-footer"> <span class='label label-info'> Free </span></div>
                          </div>
                    </div>

                    <div class='col-xs-12 col-sm-6 col-md-4'>
                          <div class="panel panel-success">
                              <div class="panel-heading text-center kumar"> VIP </div>
                              <div class="panel-body">
                                  <h3 class="kumar text-center hidden"> VIP </h3>
                                  <ul>
                                      <li> Add user to list <span class='label label-xs label-warning'> [ 0 == ] </span> </li>
                                      <li> Modify user details <span class='label label-xs label-warning'> [ 0 == ] </span> </li>
                                      <li> Create Event lists <span class='label label-xs label-warning'> [ 0 == ] </span> </li>
                                      <li> Check user for Event <span class='label label-xs label-warning'> [ 0 == ] </span> </li>
                                      <li> Statistics <span class='label label-xs label-warning'> [ 0 == ] </span> </li>
                                  </ul>
                              </div>
                              <div class="panel-footer"> <span class='label label-info'> Free </span></div>
                          </div>
                    </div>

                    <div class='col-xs-12 col-sm-6 col-md-4'>
                          <div class="panel panel-success">
                              <div class="panel-heading text-center kumar"> #nocas </div>
                              <div class="panel-body">
                                  <h3 class="kumar text-center hidden"> #nocas </h3>
                                  <ul>
                                      <li> CRM System <span class='label label-xs label-warning'> [ 0 == ] </span> </li>
                                      <li> Ticket System <span class='label label-xs label-warning'> [ 0 == ] </span> </li>
                                      <li> Bill System <span class='label label-xs label-warning'> [ 0 == ] </span> </li>
                                      <li> Offer System <span class='label label-xs label-warning'> [ 0 == ] </span> </li>
                                  </ul>
                              </div>
                              <div class="panel-footer"> <span class='label label-info'> Free </span></div>
                          </div>
                    </div>
              </div>
              </div>

              <!-- Scroll to next Section -->
              <div class='scrolldown'>
              <div class='icon'>
                <svg xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    version="1.1" x="0px" y="0px"
                    viewBox="0 0 90 90"
                    enable-background="new 0 0 90 90"
                    xml:space="preserve">
                    <circle cx="45" cy="13" r="3"></circle>
                    <path d="M45,0.5c-8.284,0-15,6.717-15,15.002v24.996C30,48.783,36.716,55.5,45,55.5s15-6.717,15-15.002V15.502  C60,7.217,53.284,0.5,45,0.5z M58,40.498C58,47.667,52.168,53.5,45,53.5c-7.168,0-13-5.833-13-13.002V15.502  C32,8.333,37.832,2.5,45,2.5c7.168,0,13,5.833,13,13.002V40.498z"></path>
                    <path d="M58.293,59.793L45,73.086L31.707,59.793c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414l14,14  C44.488,75.402,44.744,75.5,45,75.5s0.512-0.098,0.707-0.293l14-14c0.391-0.391,0.391-1.023,0-1.414S58.684,59.402,58.293,59.793z"></path>
                    <path d="M58.293,73.793L45,87.086L31.707,73.793c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414l14,14  C44.488,89.402,44.744,89.5,45,89.5s0.512-0.098,0.707-0.293l14-14c0.391-0.391,0.391-1.023,0-1.414S58.684,73.402,58.293,73.793z"></path>
                </svg>
              </div>
              </div>
              <!-- Scroll to next - END -->

              <div class="split_100"></div>
              </section>
              <!-- End Project list -->


              <!-- Start Purpose -->
              <section class="purpose">
              <div class="container">
              <div class="row" id='about_me'>
                  <div class="col-xs-12">
                      <div class="split_200"></div>
                      <h3 class="kumar text-left"> the purpose</h3>
                      <p>
                          I've started this project out of the fun factor, a long time ago. But now it has more than one reason.<br>
                          <br>
                          Since then I've added more and more functions to the site to make it usefull. <br>
                          Setup a news and rss section, send sms throught the web (holy, that times), create own code snippets for <br>
                          users which can be used in any use cases, galleries of different categories, and so on.<br>
                          <br>
                          Back in thoose days called web2.0 there wasn't any tools out yet, which we are familiar with now.<br>
                          Times are changing and the opportunities change with them. <br>
                          <br>
                          I want to show you which possibilities the web technologies have now, and also that I am a part of it.<br>
                          I'll focus on my code snippets, open-source projects, playgrounds, gists ... to refactore them.<br>
                          There are some projects of mine that I'd like to introduce on this site.<br>
                          <br>
                          But there is one thing that may remain. I am still proud to be a developer &lt;3.<br>
                          <br>
                          yours sincerely<br>
                          <b>Gkiokan</b>

                      </p>
                      <div class="split_200"></div>
                  </div>
              </div>
              </div>
              </section>
              <!-- End purpose -->


              <!-- contact me -->
              <section class='contact_me'>
              <div class='container'>
                  <div class='halfheight vcenter text-center'>
                    <div class='inner'>
                        <div class='text-center'>
                          Do you need help? <br>
                          Do you have any question? <br>
                          Do you need some suggestion? <br>
                          <br>
                          <b>Whatever you need you can contact me! </b> <br>
                          <br>
                        </div>
                        <a href='mailto:me@gkiokan.net?subject=Contact' class='btn bigbutton'> Contact me <span class='glyphicon glyphicon-send'></span> </a>
                    </div>
                  </div>
              </div>
              </section>
              <!-- end contact me -->
      </main>

      <footer>
          <div class="container">
              <div class="row">
                  <div class='col-xs-12 col-sm-3'>
                      <div class="version_info">
                          Gkiokan.<b>NET</b> <br>
                          Version: <span class='version'>1.7.0</span> <br>
                          Last Update: <span class='last_update'>29.12.2016</span> <br>
                      </div>
                  </div>

                  <div class="col-xs-12 col-sm-9">
                      <div class="list text-right">
                          Author: Gkiokan Sali <br>
                          Contact: me@gkiokan.net <br>
                          &copy; Copyright by Gkiokan 2006 - 2016 <br>
                          <br>
                          GitHub: <a href='//github.com/gkiokan' target='_blank' class='btn btn-xs btn-no-design'>//github.com/gkiokan </a><br>
                          Twitter: <a href='//twitter.com/gkiokan' target='_blank' class='btn btn-xs btn-no-design'> //twitter.com/gkiokan </a><br>
                          Pinterest: <a href='//pinterest.com/gkiokan1337' target='_blank' class='btn btn-xs btn-no-design'> //pinterest.com/gkiokan1337 </a><br>
                          YouTube: <a href='//youtube.com/gkiokanTV' target='_blank' class='btn btn-xs btn-no-design'> //youtube.com/gkiokanTV </a><br>
                          Facebook: <a href='//facebook.com/Gkiokannet' target='_blank' class='btn btn-xs btn-no-design'> //facebook.com/GkiokanNET</a><br>
                      </div>
                  </div>
              </div>
          </div>
      </footer>
@stop
