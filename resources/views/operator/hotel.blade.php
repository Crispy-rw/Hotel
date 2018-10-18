@include('layouts.adminheader')	
            <!-- wrapper -->	
            <div id="wrapper"> 
                <!--content -->  
                <div class="content">
                    <!--section --> 
                    <section>
                        <!-- container -->
                        <div class="container">
                            <!-- profile-edit-wrap -->
                            <div class="profile-edit-wrap">
                                <div class="profile-edit-page-header">
                                    <h2 class="center">Hotel Operator view Hotel</h2>
                                    <div class="breadcrumbs"><a href="/hotel/create"><i class="fa fa-plus-square-o"></i> Add New</a></div>
                                </div>
                                <div class="row">

                                    <!-- start of admin side bar-->
                                    @include('layouts.operatorside')
                                    <!-- end of admin side bar--> 
                                    <div class="col-md-7">
                                        <!-- start of content-->      
                                    @foreach($hotels as $item)
                                            
                                        <div class="dashboard-list">
                                                <div class="dashboard-message">
                                                    <div class="review-comment-avatar" > 
                                                            <img style="height: 30%; width: 40%;" src="storage/logo/{{$item->cover_image}}"  alt="">
                                                    </div>
                                                    <div class="dashboard-message-text">
                                                        <h4>{{$item->name}} - <span>{{$item->created_at}}</span></h4>
                                                        <div class="booking-details fl-wrap">
                                                            <span class="booking-title">Listing Item</span> :
                                                            <span class="booking-text"><a href="listing-sinle.html">Luxury Restourant</a></span>
                                                        </div>
                                                        <div class="booking-details fl-wrap">
                                                            <span class="booking-title">Country </span> : 
                                                            <span class="booking-text">{{$item->country->name}}</span>
                                                        </div>
                                                        <div class="booking-details fl-wrap">
                                                            <span class="booking-title">Province </span> : 
                                                            <span class="booking-text">{{$item->province->name}}</span>
                                                        </div>
                                                        <div class="booking-details fl-wrap">
                                                            <span class="booking-title">District </span> : 
                                                            <span class="booking-text">{{$item->district->name}}</span>
                                                        </div>
                                                        <div class="booking-details fl-wrap">
                                                            <span class="booking-title">Sector </span> : 
                                                            <span class="booking-text">{{$item->sector->name}}</span>
                                                        </div>

                                                        <div class="booking-details fl-wrap">
                                                            <span class="booking-title">Booking Date </span> : 
                                                            <span class="booking-text">02.03.2018 at 17:30 P.M</span>
                                                        </div>
                                                        <div class="booking-details fl-wrap">                          
                                                            <span class="booking-title">E-mail</span> : 
                                                            <span class="booking-text">{{$item->email}}</span>
                                                        </div>
                                                        <div class="booking-details fl-wrap">                          
                                                            <span class="booking-title">Website</span> : 
                                                            <span class="booking-text">{{$item->website}}</span>
                                                        </div>
                                                        <div class="booking-details fl-wrap">
                                                            <span class="booking-title">Phone</span> : 
                                                            <span class="booking-text">{{$item->phone}}</span>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc posuere convallis purus non cursus. Cras metus neque, gravida sodales massa ut. </p>

                                                        <a href="hotel/{{$item->id}}"><button>Show </button></a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        <!-- end of content-->                                        
                                    </div>
                                    <div class="col-md-2">
                                        <div class="edit-profile-photo fl-wrap">
                                            <img src="images/avatar/4.jpg" class="respimg" alt="">
                                            <div class="change-photo-btn">
                                                <div class="photoUpload">
                                                    <span><i class="fa fa-upload"></i> Upload Photo</span>
                                                    <input type="file" class="upload">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--profile-edit-wrap end -->
                        </div>
                        <!--container end -->
                    </section>
                    <!-- section end -->
                    <div class="limit-box fl-wrap"></div>
                    <!--section -->
                    @include('layouts.getintouch')
                    <!-- section end -->
                </div>
            </div>
            <!-- wrapper end -->
            <!--footer -->
 @include('layouts.adminfooter')           