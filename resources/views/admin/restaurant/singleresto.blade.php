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
    <!--  content  -->
    <div class="content">
        <!--  section  -->
        <section class="parallax-section single-par list-single-section" data-scrollax-parent="true" id="sec1">
            <div class="bg par-elem "  data-bg="{{asset('IMG/arton11.jpg')}}" data-scrollax="properties: { translateY: '30%' }"></div>
            <div class="overlay"></div>
            <div class="bubble-bg"></div>
            <div class="list-single-header absolute-header fl-wrap">
                <div class="container">
                    <div class="list-single-header-item">
                        <div class="list-single-header-item-opt fl-wrap">
                            <div class="list-single-header-cat fl-wrap">
                                <a href="#">Restaurent</a>
                                <span>  Now Opening <i class="fa fa-check"></i></span>
                            </div>
                        </div>
                        <h2>{{$resto->name}} <span> </h2>
                        <span class="section-separator"></span>
                        <div class="listing-rating card-popup-rainingvis" data-starrating2="4">
                            <span>(4 stars Hotel)</span>
                        </div>

                        <div class="clearfix"></div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="list-single-header-contacts fl-wrap">
                                    <ul>
                                        <li><i class="fa fa-phone"></i><a  href="#">{{$resto->phone}}</a></li>
                                        <li><i class="fa fa-map-marker"></i><a  href="#">{{$resto->province->name}} - {{$resto->district->name}} - {{$resto->sector->name}}</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--  section  -->
        <section class="gray-section no-top-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="list-single-main-wrapper fl-wrap" id="sec2">

                            <div class="list-single-main-media fl-wrap">
                                <img src="/storage/resto/{{$resto->cover_image}}" style="width:  679px;height: 528px;" class="respimg" alt="">
                            </div>
                            <div class="list-single-main-item fl-wrap">
                                <div class="list-single-main-item-title fl-wrap">
                                    <h3>About cafe </h3>
                                </div>
                                <p style="min-height: 200px;">{{$resto->description}}</p>
                                <span class="fw-separator"></span>

                               <!--  <div class="list-single-main-item-title fl-wrap">
                                    <h3>Amenities</h3>
                                </div> -->

                                <!-- <div class="listing-features fl-wrap">
                                    <ul>
                                        <li><i class="fa fa-rocket"></i> Elevator in building</li>
                                        <li><i class="fa fa-wifi"></i> Free Wi Fi</li>
                                        <li><i class="fa fa-motorcycle"></i> Free Parking</li>
                                        <li><i class="fa fa-cloud"></i> Air Conditioned</li>
                                        <li><i class="fa fa-shopping-cart"></i> Online Ordering</li>
                                        <li><i class="fa fa-paw"></i> Pet Friendly</li>
                                        <li><i class="fa fa-tree"></i> Outdoor Seating</li>
                                        <li><i class="fa fa-wheelchair"></i> Wheelchair Friendly</li>
                                    </ul>
                                </div> -->
                                <span class="fw-separator"></span>
                                <div class="list-single-main-item-title fl-wrap">
                                    <h3>Tags</h3>
                                </div>
                                <div class="list-single-tags tags-stylwrap">
                                    <a href="#">Lunch</a>
                                    <a href="#">Friendly service</a>
                                    <a href="#">Wine</a>
                                    <a href="#">Sandwich</a>
                                    <a href="#">Food</a>
                                    <a href="#">Cocktails</a>
                                </div>
                            </div>
                            
                            <!-- list-single-main-item end -->
                            <!-- list-single-main-item -->
                            <div class="list-single-main-item fl-wrap" id="sec4" style="display:none;">
                                <div class="list-single-main-item-title fl-wrap">
                                    <h3>Item Revies -  <span> 3 </span></h3>
                                </div>
                                <div class="reviews-comments-wrap">
                                    <!-- reviews-comments-item -->
                                    <div class="reviews-comments-item">
                                        <div class="review-comments-avatar">
                                            <img src="{{asset('images/avatar/1.jpg')}}" alt="">
                                        </div>
                                        <div class="reviews-comments-item-text">
                                            <h4><a href="#">Jessie Manrty</a></h4>
                                            <div class="listing-rating card-popup-rainingvis" data-starrating2="5"> </div>
                                            <div class="clearfix"></div>
                                            <p>" Commodo est luctus eget. Proin in nunc laoreet justo volutpat blandit enim. Sem felis, ullamcorper vel aliquam non, varius eget justo. Duis quis nunc tellus sollicitudin mauris. "</p>
                                            <span class="reviews-comments-item-date"><i class="fa fa-calendar-check-o"></i>27 May 2018</span>
                                        </div>
                                    </div>
                                    <!--reviews-comments-item end-->
                                    <!-- reviews-comments-item -->
                                    <div class="reviews-comments-item">
                                        <div class="review-comments-avatar">
                                            <img src="images/avatar/2.jpg" alt="">
                                        </div>
                                        <div class="reviews-comments-item-text">
                                            <h4><a href="#">Mark Rose</a></h4>
                                            <div class="listing-rating card-popup-rainingvis" data-starrating2="4"> </div>
                                            <div class="clearfix"></div>
                                            <p>" Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. "</p>
                                            <span class="reviews-comments-item-date"><i class="fa fa-calendar-check-o"></i>12 April 2018</span>
                                        </div>
                                    </div>
                                    <!--reviews-comments-item end-->
                                    <!-- reviews-comments-item -->
                                    <div class="reviews-comments-item">
                                        <div class="review-comments-avatar">
                                            <img src="" alt="">
                                        </div>
                                        <div class="reviews-comments-item-text">
                                            <h4><a href="#">Adam Koncy</a></h4>
                                            <div class="listing-rating card-popup-rainingvis" data-starrating2="5"> </div>
                                            <div class="clearfix"></div>
                                            <p>" Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc posuere convallis purus non cursus. Cras metus neque, gravida sodales massa ut. "</p>
                                            <span class="reviews-comments-item-date"><i class="fa fa-calendar-check-o"></i>03 December 2017</span>
                                        </div>
                                    </div>
                                    <!--reviews-comments-item end-->
                                </div>
                            </div>
                            <!-- list-single-main-item end -->
                            <!-- list-single-main-item -->
                            <div class="list-single-main-item fl-wrap" id="sec5" style="display:none;">
                                <div class="list-single-main-item-title fl-wrap">
                                    <h3>Add Revies  & Rate iteam</h3>
                                </div>
                                <!-- Add Review Box -->
                                <div id="add-review" class="add-review-box">
                                    <div class="leave-rating-wrap">
                                        <span class="leave-rating-title">Your rating  for this listing : </span>
                                        <div class="leave-rating">
                                            <input type="radio" name="rating" id="rating-1" value="1"/>
                                            <label for="rating-1" class="fa fa-star-o"></label>
                                            <input type="radio" name="rating" id="rating-2" value="2"/>
                                            <label for="rating-2" class="fa fa-star-o"></label>
                                            <input type="radio" name="rating" id="rating-3" value="3"/>
                                            <label for="rating-3" class="fa fa-star-o"></label>
                                            <input type="radio" name="rating" id="rating-4" value="4"/>
                                            <label for="rating-4" class="fa fa-star-o"></label>
                                            <input type="radio" name="rating" id="rating-5" value="5"/>
                                            <label for="rating-5" class="fa fa-star-o"></label>
                                        </div>
                                    </div>
                                    <!-- Review Comment -->
                                    <form   class="add-comment custom-form">
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label><i class="fa fa-user-o"></i></label>
                                                    <input type="text" placeholder="Your Name *" value=""/>
                                                </div>
                                                <div class="col-md-6">
                                                    <label><i class="fa fa-envelope-o"></i>  </label>
                                                    <input type="text" placeholder="Email Address*" value=""/>
                                                </div>
                                            </div>
                                            <textarea cols="40" rows="3" placeholder="Your Review:"></textarea>
                                        </fieldset>
                                        <button class="btn  big-btn  color-bg flat-btn">Submit Review <i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                                    </form>
                                </div>
                                <!-- Add Review Box / End -->
                            </div>
                            <!-- list-single-main-item end -->
                        </div>
                    </div>
                    <!--box-widget-wrap -->
                    <div class="col-md-4">
                                    <div class="box-widget-wrap">
                                        <!--box-widget-item -->
                                        <div class="box-widget-item fl-wrap">
                                            <div class="box-widget-item-header">
                                                <h3>Working Hours : </h3>
                                            </div>
                                            <div class="box-widget opening-hours">
                                                <div class="box-widget-content">
                                                    <span class="current-status"><i class="fa fa-clock-o"></i> Now Open</span>
                                                    <ul>
                                                        <li><span class="opening-hours-day">Monday </span><span class="opening-hours-time">00 AM - 23 PM</span></li>
                                                        <li><span class="opening-hours-day">Tuesday </span><span class="opening-hours-time">00 AM - 23 PM</span></li>
                                                        <li><span class="opening-hours-day">Wednesday </span><span class="opening-hours-time">00 AM - 23 PM</span></li>
                                                        <li><span class="opening-hours-day">Thursday </span><span class="opening-hours-time">00 AM - 23 PM</span></li>
                                                        <li><span class="opening-hours-day">Friday </span><span class="opening-hours-time">00 AM - 23 PM</span></li>
                                                        <li><span class="opening-hours-day">Saturday </span><span class="opening-hours-time">00 AM - 23 PM</span></li>
                                                        <li><span class="opening-hours-day">Sunday </span><span class="opening-hours-time">9 AM - 20 PM</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!--box-widget-item end -->                              
                                    </div>
                                </div>
                    <!--box-widget-wrap end -->
                </div>
            </div>
        </section>
        <!--  section end -->
        <div class="limit-box fl-wrap"></div>

    </div>
    <!--  content end  -->
</div>
<!-- wrapper end -->
<!--footer -->
@include('layouts.adminfooter')           