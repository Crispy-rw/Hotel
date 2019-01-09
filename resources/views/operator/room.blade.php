@include('layouts.operatorheader')	
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
                                    <h2 class="center">Hotel Operator Rooms</h2>
                                    <div class="breadcrumbs"><a href="/room/create"><i class="fa fa-plus-square-o"></i> Add New</a></div>
                                </div>
                                <div class="row">
                                    <!-- start of operator side bar-->
                                        @include('layouts.operatorside')
                                    <!-- end of operator side bar--> 
                                    <div class="col-md-7">
                                        <!-- start of content-->          
                                            <div class="accordion">
                                                @if(count($rooms) >  0)
                                                    @foreach($rooms as $item)
                                                    <a class="toggle act-accordion" href="#"> {{$item->name}}   <i class="fa fa-angle-down"></i></a>
                                                    <div class="accordion-inner visible">
                                                        <div class="col-md-3" >
                                                            <img src="/storage/room/{{$item->cover_image}}" style="height: 100px;width: 100px;">
                                                        </div>
                                                        <div class="col-md-8 " style="color:#5ecfb1;" >
                                                            <p>{{$item->description}}</p>
                                                            <span class="widget-posts-date"><i class="fa fa-list"></i> {{$item->roomtype->name}}</span><br>
                                                            <span class="widget-posts-date"><i class="fa fa-money"></i> {{$item->price}} Frw</span><br>
                                                            <span class="widget-posts-date"><i class="fa fa-hotel"></i> {{$item->hotel->name}}</span><br>
                                                            <span class="widget-posts-date"><i class="fa fa-money"></i> {{$item->price}} Frw</span><br>
                                                            <a href="room/{{$item->id}}/edit">
                                                                <div class="custom-form">
                                                                    <button type="submit" class="btn  big-btn  color-bg flat-btn">edit Room<i class="fa fa-angle-right"></i></button>
                                                                </div>
                                                            </a>
                                                            <a href="">
                                                                <div class="custom-form">
                                                                    <button type="submit" class="btn  big-btn  color-bg flat-btn">Delete Room<i class="fa fa-angle-right"></i></button>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                @else

                                                    No rooms Available

                                                @endif
                                            </div>
                                        <!-- end of content-->                                        
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
                </div>
            </div>
            <!-- wrapper end -->
            <!--footer -->
 @include('layouts.adminfooter')           