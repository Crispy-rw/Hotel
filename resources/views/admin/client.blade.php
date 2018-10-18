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
                                    <h2 class="center">Admin View Clients</h2>
                                </div>
                                <div class="row">

                                    <!-- start of side adminpanel-->
                                        @include('layouts.adminside')
                                    <!-- end of side adminpanel-->

                                    
                                    <div class="col-md-7">
                                        <!-- profile-edit-container--> 
                                        <div class="profile-edit-container">
                                            <div class="profile-edit-header fl-wrap">
                                                <h4>My Account</h4>
                                            </div>
                                            <div class="custom-form">
                                                <label>Your Name <i class="fa fa-user-o"></i></label>
                                                <input type="text" placeholder="AlisaNoory" value=""/>
                                                <label>Email Address<i class="fa fa-envelope-o"></i>  </label>
                                                <input type="text" placeholder="AlisaNoory@domain.com" value=""/>
                                                <label>Phone<i class="fa fa-phone"></i>  </label>
                                                <input type="text" placeholder="+7(123)987654" value=""/>
                                                <label> Adress <i class="fa fa-map-marker"></i>  </label>
                                                <input type="text" placeholder="USA 27TH Brooklyn NY" value=""/>  
                                                <label> Notes</label>                                              
                                                <textarea cols="40" rows="3" placeholder="About Me"></textarea>
                                            </div>
                                        </div>
                                        <!-- profile-edit-container end--> 
                                        <!-- profile-edit-container--> 
                                        <div class="profile-edit-container">
                                            <div class="custom-form">
                                                <button class="btn  big-btn  color-bg flat-btn">Save Changes<i class="fa fa-angle-right"></i></button>
                                            </div>
                                        </div>
                                        <!-- profile-edit-container end-->                                        
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