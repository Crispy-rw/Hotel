@include('layouts.adminheader') 
            <!-- wrapper -->    
            <div id="wrapper"> 
                <!--content -->  
                <div class="content">
                    <!--section --> 
                    <section>
                            <!-- profile-edit-wrap -->
                            <div class="profile-edit-wrap">
                                <div class="profile-edit-page-header">
                                    <h2 class="center">Admin View Hotel page</h2>
                                </div>
                                <div class="row">

                                    <!-- start of admin side bar-->
                                    @include('layouts.adminside')
                                    <!-- end of admin side bar--> 
                                    <div class="col-md-9" >
                                        <!-- start of content-->          

                                            <table class="table table-striped" >
                                                <thead>
                                                  <tr>
                                                    <th>#No</th>
                                                    <th>#Name</th>
                                                    <th>#District</th>
                                                    <th>#Sector</th>
                                                
                                                    <th>#Status</th>
                                                    <th colspan="3">Action</th>
                                                  </tr>
                                                </thead>
                                                <tbody >
                                                  @foreach($hotel as $index => $item)
                                                      <tr style="width: 500px;">
                                                        <td>{{$index+1}}</td>
                                                        <td>{{$item->name}}</td>
                                                        <td>{{$item->district->name}}</td>
                                                        <td>{{$item->sector->name}}</td>
                                                        <td>@if(!$item->status) running @else not running @endif </td>
                                                        <td><i style="font-size:24px;color:green;" class="fa fa-check"></i></td>
                                                        <!-- <td><i style="font-size:24px;color:red;"  class="fa fa-remove"></i></td> -->
                                                        <td><i style="font-size:24px;color:green;" class="fa fa-edit"></i></td>
                                                        <td><i style="font-size:24px;color:green;" class="fa fa-trash"></i></td>
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