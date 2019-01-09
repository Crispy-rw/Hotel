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
                                    <h2 class="center">Admin Dashboard</h2>
                                </div>
                                <div class="row">

                                    <!-- start of admin side bar-->
                                    @include('layouts.adminside')
                                    <!-- end of admin side bar--> 
                                    <div class="col-md-7">
<!---------------------------------  start of content ----------------------------------------->  



                         
                            <div class="dashboard-message">
                                <div class="dashboard-message-avatar">
                                    <img src="{{asset('images/avatar/avatar-bg.png')}}" alt="">
                                </div>
                                <div class="dashboard-message-text">
                                    <div class="booking-details fl-wrap">
                                        <span class="booking-title">First name</span> :
                                        <span class="booking-text">{{$user->Firstname}}</span>
                                    </div>
                                    <div class="booking-details fl-wrap">
                                        <span class="booking-title">Last name</span> :
                                        <span class="booking-text">{{$user->Lastname}}</span>
                                    </div>
                                    <div class="booking-details fl-wrap">
                                        <span class="booking-title">Email </span> : 
                                        <span class="booking-text">{{$user->email}}</span>
                                    </div>
                                    <form method="POST" action="{{route('changetype',$user->id)}}"> 
                                        @csrf
                                    <div class="booking-details fl-wrap">
                                        <span class="booking-title">type </span> : 
                                        <span class="booking-text">
                                            <select name="type">
                                                <option value="1" {{($user->type == 1)?'selected':''}} > User </option>
                                                <option value="2" {{($user->type == 2)?'selected':''}} > Hotel Operator</option>
                                            </select>
                                        </span>
                                    </div>
                                    <div class="custom-form">
                                                <button type="submit" class="btn  big-btn  color-bg flat-btn">Save Changes<i class="fa fa-angle-right"></i></button>
                                            </div>
                                    </form>
                                    
                                </div>
                            </div>




 <!----------------------------------------- end of content ------------------------------------>                                        
                                    </div>
                                    <div class="col-md-2">
                                        <div class="edit-profile-photo fl-wrap">
                                            <img src="{{asset('images/avatar/4.jpg')}}" class="respimg" alt="">
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