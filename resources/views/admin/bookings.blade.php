@include('layouts.adminheader')	
            <!-- wrapper -->	
            <div id="wrapper"> 
                <!--content -->  
                <div class="content">
                    <!--section --> 
                    <section>
                        <!-- container -->
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
                                                    <th>#User</th>
                                                    <th>#Hotel name</th>
                                                    <th>#Room name</th>
                                                    <th>#Adult</th>
                                                    <th>#Children</th>
                                                    <th>#Check In</th>
                                                    <th>#Check Out</th>
                                                    <th>#Coupon </th>
                                                    <th>#Created at </th>
                                                    <th colspan="2">Action</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                   @foreach($bookings as $index => $book)  
                                
                                                  <tr>
                                                    <td>{{$index+1}}</td>
                                                    <td>{{$book->user->email}}</td>
                                                    <td>{{$book->room->hotel->name}}</td>
                                                    <td>{{$book->room->name}}</td>
                                                    <td>{{$book->adult}}</td>
                                                    <td>{{$book->children}}</td>
                                                    <td>{{ \Carbon\Carbon::parse($book->checkIn)->format('j M Y')}}</td>
                                                    <td>{{ \Carbon\Carbon::parse($book->checkOut)->format('j M Y')}}</td>
                                                    <td>{{$book->coupon->data}}</td>
                                                    <td>{{$book->created_at}}</td>
                                                    <td><i style="font-size:24px;color:green;" class="fa">&#xf00c;</i></td>
                                                    <td><i style="font-size:24px;color:red;" class="fa fa-trash-o"></i></td>
                                                  </tr>
                                                  @endforeach
                                                </tbody>
                                              </table> 





                                        <!-- end of content-->                                        
                                    </div>
                                    
                                </div>
                            </div>
                            <!--profile-edit-wrap end -->
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