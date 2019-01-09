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
                                    <h2 class="center">Admin Room type</h2>
                                </div>
                                <div class="row">

                                    <!-- start of admin side bar-->
                                    @include('layouts.adminside')
                                    <!-- end of admin side bar--> 
                                    <div class="col-md-3">
                                        <!-- start of content-->      



                                        <!-- profile-edit-container--> 
                                       <form method="POST" action="{{ route('insertroom') }}"> 
                                        @csrf
                                        <fieldset>
                                        <div class="profile-edit-container">
                                            <div class="profile-edit-header fl-wrap">
                                                <h4>Create Room type</h4>
                                            </div>
                                            <div class="custom-form">
                                                     @if ($errors->has('name'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <h3 class="errorclass">{{ $errors->first('name') }}</h3>
                                                        </span>
                                                     @endif
                                                <label> Room Type Name <i class="fa fa-hotel"></i></label>
                                                <input type="text" autocomplete="off"  name="name" placeholder="Room Type Name" value="{{old('name')}}"/> 
                                            </div>
                                        </div>
                                        <!-- profile-edit-container end--> 
                                        <!-- profile-edit-container--> 
                                        <div class="profile-edit-container">
                                            <div class="custom-form">
                                                <button type="submit" class="btn  big-btn  color-bg flat-btn">Save Changes<i class="fa fa-angle-right"></i></button>
                                            </div>
                                        </div>
                                        </fieldset>
                                        </form>
                                        <!-- profile-edit-container end-->                                        
                                    



                                        <!-- end of content-->                                        
                                    </div>
                                    <div class="col-md-5" style="height: 400px; overflow: scroll;">
                                        <table class="table table-striped">
                                            <thead>
                                              <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Action</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                               @foreach($room as $index => $item ) 
                                                  <tr>
                                                    <td>{{$index+1}}</td>
                                                    <td>{{$item->name}}</td>
                                                    <td><button class="btn btn-danger"> Delete </button></td>
                                                  </tr>
                                                 @endforeach 
                                            </tbody>
                                          </table>
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