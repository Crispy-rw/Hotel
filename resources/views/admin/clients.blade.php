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
                                        <!-- start of content-->          

                                            <table class="table table-striped">
                                                <thead>
                                                  <tr>
                                                    <th>#No</th>
                                                    <th>#First name</th>
                                                    <th>#Last name</th>
                                                    <th>#Email</th>
                                                    <th colspan="2">Action</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  @foreach($users as $index => $item)  
                                                  <tr>
                                                    <td>{{$index+1}}</td>
                                                    <td>{{$item->Firstname}}</td>
                                                    <td>{{$item->Lastname}}</td>
                                                    <td>{{$item->email}}</td>
                                                    <td><button  class="btn btn-warning"><a href="/user/{{$item->id}}/change">Change</a></button></td>
                                                    <td><button class="btn btn-danger">Delete</button></td>
                                                  </tr>
                                                  @endforeach
                                                </tbody>
                                              </table>


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