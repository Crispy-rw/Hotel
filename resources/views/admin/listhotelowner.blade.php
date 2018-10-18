@include('layouts.adminheader') 
            <!-- wrapper -->    
            <div id="wrapper"> 
                <!--content -->  
                <div class="content">
                    <!--section --> 
                    <section>
                        <!-- container -->
                        <div class="container">
                            <!-- profile-Change settings-wrap -->
                            <div class="profile-Change settings-wrap">
                                <div class="profile-edit-page-header">
                                    <h2 class="center">Admin View Hotel Owner</h2>
                                </div>
                                <div class="row">


                                    @include('layouts.adminside') 
                                        <div class="col-md-7">
                                        <!-- start of content-->          










                                        <div class="dashboard-list-box fl-wrap">
                                            <div class="dashboard-header fl-wrap">
                                                <h3>Indox</h3>
                                            </div>
                                            <!-- dashboard-list end-->    
                                            <div class="dashboard-list">
                                                <div class="dashboard-message">
                                                    <span class="new-dashboard-item">New</span>
                                                    <div class="dashboard-listing-table-image">
                                                        <a href="listing-single.html"><img src="images/all/3.jpg" alt=""></a>
                                                    </div>
                                                    <div class="dashboard-listing-table-text">
                                                        <h4><a href="listing-single.html">Event In City Hall</a></h4>
                                                        <span class="dashboard-listing-table-address"><i class="fa fa-map-marker"></i><a  href="#">USA 27TH Brooklyn NY</a></span>
                                                        <div class="listing-rating card-popup-rainingvis fl-wrap" data-starrating2="5">
                                                            <span>(2 reviews)</span>
                                                        </div>
                                                        <ul class="dashboard-listing-table-opt  fl-wrap">
                                                            <li><a href="#">Change settings <i class="fa fa-pencil-square-o"></i></a></li>
                                                            <li><a href="#" class="del-btn">Delete <i class="fa fa-trash-o"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- dashboard-list end-->    
                                            <!-- dashboard-list end-->    
                                            <div class="dashboard-list">
                                                <div class="dashboard-message">
                                                    <div class="dashboard-listing-table-image">
                                                        <a href="listing-single.html"><img src="images/all/1.jpg" alt=""></a>
                                                    </div>
                                                    <div class="dashboard-listing-table-text">
                                                        <h4><a href="listing-single.html">Event In City Hall</a></h4>
                                                        <span class="dashboard-listing-table-address"><i class="fa fa-map-marker"></i><a  href="#">USA 27TH Brooklyn NY</a></span>
                                                        <div class="listing-rating card-popup-rainingvis fl-wrap" data-starrating2="3">
                                                            <span>(2 reviews)</span>
                                                        </div>
                                                        <ul class="dashboard-listing-table-opt  fl-wrap">
                                                            <li><a href="#">Change settings <i class="fa fa-pencil-square-o"></i></a></li>
                                                            <li><a href="#" class="del-btn">Delete <i class="fa fa-trash-o"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- dashboard-list end-->                                               
                                            <!-- dashboard-list end-->    
                                            <div class="dashboard-list">
                                                <div class="dashboard-message">
                                                    <div class="dashboard-listing-table-image">
                                                        <a href="listing-single.html"><img src="images/all/2.jpg" alt=""></a>
                                                    </div>
                                                    <div class="dashboard-listing-table-text">
                                                        <h4><a href="listing-single.html">Event In City Hall</a></h4>
                                                        <span class="dashboard-listing-table-address"><i class="fa fa-map-marker"></i><a  href="#">USA 27TH Brooklyn NY</a></span>
                                                        <div class="listing-rating card-popup-rainingvis fl-wrap" data-starrating2="4">
                                                            <span>(2 reviews)</span>
                                                        </div>
                                                        <ul class="dashboard-listing-table-opt  fl-wrap">
                                                            <li><a href="#">Change settings <i class="fa fa-pencil-square-o"></i></a></li>
                                                            <li><a href="#" class="del-btn">Delete <i class="fa fa-trash-o"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- dashboard-list end-->    
                                            <!-- dashboard-list end-->    
                                            <div class="dashboard-list">
                                                <div class="dashboard-message">
                                                    <div class="dashboard-listing-table-image">
                                                        <a href="listing-single.html"><img src="images/all/4.jpg" alt=""></a>
                                                    </div>
                                                    <div class="dashboard-listing-table-text">
                                                        <h4><a href="listing-single.html">Event In City Hall</a></h4>
                                                        <span class="dashboard-listing-table-address"><i class="fa fa-map-marker"></i><a  href="#">USA 27TH Brooklyn NY</a></span>
                                                        <div class="listing-rating card-popup-rainingvis fl-wrap" data-starrating2="5">
                                                            <span>(2 reviews)</span>
                                                        </div>
                                                        <ul class="dashboard-listing-table-opt  fl-wrap">
                                                            <li><a href="#">Change settings <i class="fa fa-pencil-square-o"></i></a></li>
                                                            <li><a href="#" class="del-btn">Delete <i class="fa fa-trash-o"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- dashboard-list end-->   
                                        </div>












                                                                      
                                        <!-- end of content-->                                        
                                        </div>
                                    <div class="col-md-2">
                                        <div class="Change settings-profile-photo fl-wrap">
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
                            <!--profile-Change settings-wrap end -->
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