



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
                                    <h2 class="center">Hotel Operator Add Room</h2>

                                </div>
                                <div class="row">
                                    <!-- start of operator side bar-->
                                        @include('layouts.operatorside')
                                    <!-- end of operator side bar--> 
                                    <div class="col-md-5">
<!---------------------------------------------------------- start of content ------------------------------------------------>  
                                <form method="POST" action="{{action('RoomController@store')}}" enctype='multipart/form-data'>
                                                                        @csrf
                                                                        <div class="profile-edit-container add-list-container">
                                                                            <div class="custom-form">  
                                                                                <label>Name<i class="fa fa-hotel"></i></label>
                                                                                    <input type="text" name="name" class="{{ $errors->has('name') ? ' is-invalid' : '' }}"  placeholder="Room Name" value="{{old('name')}}"/>

                                                                                    @if ($errors->has('name'))
                                                                                        <span  style="color:rgba(227,52,47,.8);" >
                                                                                            <strong>{{ $errors->first('name') }}</strong>
                                                                                        </span></br>
                                                                                    @endif    

                                                                                <label>Description</label>
                                                                                    <textarea cols="40" rows="3" name="description" class="{{ $errors->has('description') ? ' is-invalid' : '' }}" placeholder="Enter Description"></textarea>
 

                                                                                    @if ($errors->has('description'))
                                                                                        <span class="invalid-feedback" style="color:rgba(227,52,47,.8);" role="alert">
                                                                                            <strong>{{ $errors->first('description') }}</strong>
                                                                                        </span>
                                                                                    @endif

                                                                                <label>Hotel<i class="fa fa-hotel"></i></label>
                                                                                    <select name="hotel" class="chosen-select" >
                                                                                      <option value="">Select your hotel</option>
                                                                                       @foreach($hotel as $item)
                                                                                        <option  {{old('hotel') == $item->id ? 'selected':''}} value="{{$item->id}}">{{$item->name}}</option>
                                                                                       @endforeach
                                                                                    </select>

                                                                                    @if ($errors->has('hotel'))
                                                                                        <span  style="color:rgba(227,52,47,.8);" >
                                                                                            <strong>{{ $errors->first('hotel') }}</strong>
                                                                                        </span>
                                                                                    @endif

                                                                                
                                                                                <label>Room type</label>
                                                                                    <select  name="type"  class="chosen-select" >
                                                                                      <option  value="">Select type of the room</option>
                                                                                      @foreach($type as $item)
                                                                                        <option {{old('type') == $item->id ? 'selected':''}} value="{{$item->id}}" >{{$item->name}}</option>
                                                                                      @endforeach
                                                                                    </select>

                                                                                    @if ($errors->has('type'))
                                                                                        <span class="invalid-feedback" style="color:rgba(227,52,47,.8);" role="alert">
                                                                                            <strong>{{ $errors->first('type') }}</strong>
                                                                                        </span><br>
                                                                                    @endif


                                                                                <label>Price<i class="fa fa-send-o"></i></label>
                                                                                    <input type="text" class="{{ $errors->has('price') ? ' is-invalid' : '' }}" name="price" placeholder="price" value="{{old('price')}}"/>

                                                                                    @if ($errors->has('price'))
                                                                                        <span class="invalid-feedback" style="color:rgba(227,52,47,.8);" role="alert">
                                                                                            <strong>{{ $errors->first('price') }}</strong>
                                                                                        </span><br>
                                                                                    @endif
                                                                                    
                                                                                
                                                                                <label>Room view</label>      
                                                                                    <input type="file" name="logo" style="margin-left: -2px" value="{{old('logo')}}" />

                                                                                    @if ($errors->has('logo'))
                                                                                        <span class="invalid-feedback" style="color:rgba(227,52,47,.8);" role="alert"><br>
                                                                                            <strong>{{ $errors->first('logo') }}</strong>
                                                                                        </span><br><br>
                                                                                    @endif     
                                                                                
                                                                            </div>
                                                                        </div>
                                                                        <!-- profile-edit-container end-->                                         
                                                                        
                                                                        <div class="profile-edit-container">
                                                                          
                                                                            <div class="custom-form">
                                                                                
                                                                                <button type="submit" class="btn  big-btn  color-bg flat-btn">Save Changes<i class="fa fa-angle-right"></i></button>
                                                                            </div>
                                                                        </div>
                                                                    </form>
     <!---------------------------------------- end of content ---------------------------------------->                                        
                                    </div>
                                    <div class="col-md-2">
                                        <!-- <div class="edit-profile-photo fl-wrap">
                                            <img src="{{asset('images/avatar/4.jpg')}}" class="respimg" alt="">
                                            <div class="change-photo-btn">
                                                <div class="photoUpload">
                                                    <span><i class="fa fa-upload"></i> Upload Photo</span>
                                                    <input type="file" class="upload">
                                                </div>
                                            </div>
                                        </div> -->
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
