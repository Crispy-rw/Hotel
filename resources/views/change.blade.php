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
                <!--content -->  
                <div class="content">
                    <!--section --> 
                    <section>
                        <!-- container -->
                        <div class="container">
                            <!-- profile-edit-wrap -->
                            <div class="profile-edit-wrap">
                                <div class="profile-edit-page-header">
                                    <h2 class="center">Client Change password</h2>
                                </div>
                                <div class="row">

                                    <!-- start of admin side bar-->
                                   @if(Auth()->User()->type == 1) 
                                    @include('layouts.clientside')
                                   @else 
                                    @include('layouts.operatorside')
                                   @endif
                                    <!-- end of admin side bar--> 
                                    <div class="col-md-7">
                                        <!-- start of content-->   

                                        <div class="profile-edit-container">
                                            <div class="profile-edit-header fl-wrap" style="margin-top:30px">
                                                <h4>Change Password</h4>
                                            </div>
                                            <div class="custom-form no-icons">
                                            <form method="POST" action="{{action('UserController@change')}}">    
                                                @csrf
                                                <div class="pass-input-wrap fl-wrap">
                                                    <label>Current Password</label>
                                                    <input type="password" name="current" class="pass-input" />
                                                    <span class="eye"><i class="fa fa-eye" aria-hidden="true"></i> </span>
                                                </div>
                                                <div class="pass-input-wrap fl-wrap">
                                                    <label>New Password</label>
                                                    <input type="password" name="password" class="pass-input" placeholder="" value=""/>
                                                    <span class="eye"><i class="fa fa-eye" aria-hidden="true"></i> </span>
                                                </div>
                                                <div class="pass-input-wrap fl-wrap">
                                                    <label>Confirm New Password</label>
                                                    <input type="password" name="password_confirmation" class="pass-input" placeholder="" value=""/>
                                                    <span class="eye"><i class="fa fa-eye" aria-hidden="true"></i> </span>
                                                </div>
                                                <button class="btn  big-btn  color-bg flat-btn">Save Changes<i class="fa fa-angle-right"></i></button>
                                            </form>
                                            </div>
                                        </div>

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