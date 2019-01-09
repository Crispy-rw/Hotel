@guest

    @include('layouts.homeheader')
    
@else

    @if(Auth()->User()->type == 3)
        @include('layouts.adminheader')
    @elseif(Auth()->User()->type == 2)
        @include('layouts.operatorheader')
    @else
        @include('layouts.clientheader')
    @endif    

@endguest

            <!-- wrapper -->
            <div id="wrapper">
                <!-- Content-->
                <div class="content">
                    
                    <section class="gray-bg no-pading no-top-padding" id="sec1">
                        <div class="col-list-wrap  center-col-list-wrap left-list">
                            <div class="container">
                                <div class="listsearch-maiwrap box-inside fl-wrap">
                                    <div class="listsearch-header fl-wrap">
                                        <h3> <span>All Restaurants</span></h3>
                                        <div class="listing-view-layout">
                                            <ul>
                                                <li><a class="grid active" href="#"><i class="fa fa-th-large"></i></a></li>
                                                <li><a class="list" href="#"><i class="fa fa-list-ul"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- listsearch-input-wrap  -->

                                </div>
                                <!-- list-main-wrap-->
                                <div class="list-main-wrap fl-wrap card-listing">
                                    <!-- listing-item end-->
                                    <!-- listing-item -->
                                    @foreach($resto as $item)
                                    <div class="listing-item">
                                        <article class="geodir-category-listing fl-wrap">
                                            <div class="geodir-category-img">
                                                <img  src="images/all/4.jpg"  alt="">
                                                <div class="overlay"></div>
                                                <div class="list-post-counter"><span>4</span><i class="fa fa-heart"></i></div>
                                            </div>
                                            <div class="geodir-category-content fl-wrap">
                                                <a class="listing-geodir-category" >Restaurants</a>
                                                <div class="listing-avatar"><img src="images/avatar/5.jpg" alt="">
                                                    <span class="avatar-tooltip">Added By  <strong>{{$item->user['name']}}</strong></span>
                                                </div>
                                                <h3><a href="resto/{{$item->id}}">{{$item->name}}</a></h3>
                                                <p>{{str_limit($item->description,100)}}</p>
                                                <div class="geodir-category-options fl-wrap">
                                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5">
                                                        <span>(7 reviews)</span>
                                                    </div>
                                                    <div class="geodir-category-location"><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> {{$item->district->name}},{{$item->province->name}} - Rwanda</a></div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    @endforeach
                                    <!-- listing-item end-->
                                    <div class="clearfix"></div>
                                </div>
                                <!-- list-main-wrap end-->
                            </div>
                        </div>
                    </section>
                    

                </div>
                <!-- Content end -->
            </div>
            <!-- wrapper end -->
            <!--footer -->
            <footer class="main-footer dark-footer  ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="footer-widget fl-wrap">
                                <h3>About Us</h3>
                                <div class="footer-contacts-widget fl-wrap">
                                    <p>We are a Rwandan based holiday booking agency that covers Rwanda, Uganda, Tanzania, Burundi, Kenya and Central African countries. We strive to offer the best at pocket friendly prices while working with local teams to be able to offer unforgettable experiences to our customers</p>
                                    <ul  class="footer-contacts fl-wrap">
                                        <li><span><i class="fa fa-envelope-o"></i> Email :</span><a href="#" target="_blank">reservations@tablesandhills.com</a></li>
                                        <li> <span><i class="fa fa-map-marker"></i> Adress :</span><a href="#" target="_blank">Kigali City - RWANDA</a></li>
                                        <li><span><i class="fa fa-phone"></i> Phone :</span><a href="#">+(250) 788 677 705</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="footer-widget fl-wrap">
                                <h3>Our Last News</h3>
                                <div class="widget-posts fl-wrap">
                                    <ul>
                                        <li class="clearfix">
                                            <a href="#"  class="widget-posts-img"><img src="images/all/23.jpg" class="respimg" alt=""></a>
                                            <div class="widget-posts-descr">
                                                <a href="#" title="">Vivamus dapibus rutrum</a>
                                                <span class="widget-posts-date"> 21 Mar 09.05 </span>
                                            </div>
                                        </li>
                                        <li class="clearfix">
                                            <a href="#"  class="widget-posts-img"><img src="images/all/23.jpg" class="respimg" alt=""></a>
                                            <div class="widget-posts-descr">
                                                <a href="#" title=""> In hac habitasse platea</a>
                                                <span class="widget-posts-date"> 7 Mar 18.21 </span>
                                            </div>
                                        </li>
                                        <li class="clearfix">
                                            <a href="#"  class="widget-posts-img"><img src="images/all/23.jpg" class="respimg" alt=""></a>
                                            <div class="widget-posts-descr">
                                                <a href="#" title="">Tortor tempor in porta</a>
                                                <span class="widget-posts-date"> 7 Mar 16.42 </span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="footer-widget fl-wrap">
                                <h3>Our  Twitter</h3>
                                <div id="footer-twiit"></div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="footer-widget fl-wrap">
                                <h3>Subscribe</h3>
                                <div class="subscribe-widget fl-wrap">
                                    <p>Want to be notified when we launch a new template or an udpate. Just sign up and we'll send you a notification by email.</p>
                                    <div class="subcribe-form">
                                        <form id="subscribe">
                                            <input class="enteremail" name="email" id="subscribe-email" placeholder="Email" spellcheck="false" type="text">
                                            <button type="submit" id="subscribe-button" class="subscribe-button"><i class="fa fa-rss"></i> Subscribe</button>
                                            <label for="subscribe-email" class="subscribe-message"></label>
                                        </form>
                                    </div>
                                </div>
                                <div class="footer-widget fl-wrap">
                                    <div class="footer-menu fl-wrap">
                                        <ul>
                                            <li><a href="#">Home </a></li>
                                            <li><a href="#">Blog</a></li>
                                            <li><a href="#">Listing</a></li>
                                            <li><a href="#">Contacts</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sub-footer fl-wrap">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="about-widget">
                                    <img src="images/logo3.png" alt="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="copyright"> &#169; Tablesandhills.com 2018 .  All rights reserved.</div>
                            </div>
                            <div class="col-md-4">
                                <div class="footer-social">
                                    <ul>
                                        <li><a href="#" target="_blank" ><i class="fa fa-facebook-official"></i></a></li>
                                        <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" target="_blank" ><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#" target="_blank" ><i class="fa fa-youtube"></i></a></li>
                                        <li><a href="#" target="_blank" ><i class="fa fa-whatsapp"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!--footer end  -->
            <!--register form -->
            <div class="main-register-wrap modal">
                <div class="main-overlay"></div>
                <div class="main-register-holder">
                    <div class="main-register fl-wrap">
                        <div class="close-reg"><i class="fa fa-times"></i></div>
                        <h3>Sign In <span>Tables &<strong>Hills</strong></span></h3>
                        <div class="soc-log fl-wrap">
                            <p>For faster login or register use your social account.</p>
                            <a href="#" class="facebook-log"><i class="fa fa-facebook-official"></i>Log in with Facebook</a>
                            <a href="#" class="twitter-log"><i class="fa fa-twitter"></i> Log in with Twitter</a>
                        </div>
                        <div class="log-separator fl-wrap"><span>or</span></div>
                        <div id="tabs-container">
                            <ul class="tabs-menu">
                                <li class="current"><a href="#tab-1">Login</a></li>
                                <li><a href="#tab-2">Register</a></li>
                            </ul>
                            <div class="tab">
                                <div id="tab-1" class="tab-content">
                                    <div class="custom-form">
                                        <form method="POST" action="{{ route('login') }}"  name="registerform">
                                            @csrf
                                            <label> Email Address * </label>
                                            <input name="email" type="email"   onClick="this.select()" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" 
                                             value="{{ old('email') }}" required autofocus>

                                            <label >Password * </label>
                                            <input name="password" type="password"   onClick="this.select()" >

                                            <button type="submit"  class="log-submit-btn"><span>Log In</span></button>
                                            <div class="clearfix"></div>
                                            <div class="filter-tags">
                                                <input id="check-a" type="checkbox" name="check">
                                                <label for="check-a">Remember me</label>
                                            </div>
                                        </form>
                                        <div class="lost_password">
                                            <a href="#">Lost Your Password?</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab">
                                    <div id="tab-2" class="tab-content">
                                        <div class="custom-form">
                                        <form method="POST" action="{{ route('register') }}" class="main-register-form" id="main-register-form2">
                                            @csrf
                                                <label >Firstname * </label>
                                                <input type="text"   onClick="this.select()" class="form-control{{ $errors->has('First name') ? ' is-invalid' : '' }}" name="First" value="{{ old('Firstname') }}" required autofocus>

                                                <label>Surname *</label>
                                                <input name="Last" type="text"  onClick="this.select()" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"  value="{{ old('Lastname') }}" required autofocus>

                                                <label>Email Address *</label>
                                                <input   onClick="this.select()" id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                                <label >Password *</label>
                                                <input name="password" type="password"   onClick="this.select()"  class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required >


                                                <label >Confirm Password *</label>
                                                <input name="password_confirmation" type="password"   onClick="this.select()" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required >
                                                <button type="submit"   class="log-submit-btn"  >
                                                    <span>Register</span>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--register form end -->
            <a class="to-top"><i class="fa fa-angle-up"></i></a>
        </div>
        <!-- Main end -->
        <!--=============== scripts  ===============-->
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/scripts.js"></script>
    </body>

<!-- Mirrored from citybook.kwst.net/index4.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Apr 2018 17:30:42 GMT -->
</html>
