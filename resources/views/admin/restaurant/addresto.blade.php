@include('layouts.adminheader')  
            <!-- wrapper -->    
            <div id="wrapper">
                <!--content -->  
                <div class="content">
                    <!--section --> 
                    <section id="sec1">
                        <!-- container -->
                        <div class="container">
                            <!-- profile-edit-wrap -->
                            <div class="profile-edit-wrap">
                                <div class="profile-edit-page-header">
                                    <h2> Add Restaurent </h2>
                                </div>
                                <div class="row">
                                        @include('layouts.adminside')
                                    <div class="col-md-5">
<!---------------------------------------------------------- start of contents   --------------------------------------------------->
                                <form method="POST" action="{{action('RestoController@store')}}" enctype='multipart/form-data'>
                                        @csrf
                                        <div class="profile-edit-container add-list-container">
                                            <div class="custom-form">  
                                                <label>Name<i class="fa fa-hotel"></i></label>
                                                    <input type="text" name="name" class="{{ $errors->has('name') ? ' is-invalid' : '' }}"  placeholder="Restaurent Name" value="{{old('name')}}"/>

                                                    @if ($errors->has('name'))
                                                        <span  style="color:rgba(227,52,47,.8);" >
                                                            <strong>{{ $errors->first('name') }}</strong>
                                                        </span></br>
                                                    @endif    

                                                <label>Description</label>
                                                    <textarea cols="40" rows="3" name="description" class="{{ $errors->has('description') ? ' is-invalid' : '' }}" placeholder="Enter Description"></textarea>

                                                    @if ($errors->has('description'))
                                                        <span style="color:rgba(227,52,47,.8);" >
                                                            <strong>{{ $errors->first('description') }}</strong>
                                                        </span>
                                                    @endif


                                                <label>Province<i class="fa fa-map-marker"></i></label>
                                                    <select name="province" class="chosen-select" >
                                                      <option value="">Select Province</option>
                                                      @foreach($province as $item)
                                                        <option value="{{$item->id}}"  > {{$item->name}}</option>
                                                      @endforeach
                                                    </select>

                                                    @if ($errors->has('province'))
                                                        <span class="invalid-feedback" style="color:rgba(227,52,47,.8);" role="alert">
                                                            <strong>{{ $errors->first('province') }}</strong>
                                                        </span>
                                                    @endif

                                                <label>District</label>
                                                    <select name="district" class="chosen-select" >
                                                      <option value="">Select District</option>
                                                      @foreach($district as $item)
                                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                                      @endforeach
                                                    </select>

                                                    @if ($errors->has('district'))
                                                        <span class="invalid-feedback" style="color:rgba(227,52,47,.8);" role="alert">
                                                            <strong>{{ $errors->first('district') }}</strong>
                                                        </span>
                                                    @endif

                                                <label>Sector</label>
                                                    <select  name="sector"  class="chosen-select" >
                                                      <option value="">Select Sector</option>
                                                      @foreach($sector as $item)
                                                        <option value="{{$item->id}}" >{{$item->name}}</option>
                                                      @endforeach
                                                    </select>

                                                    @if ($errors->has('sector'))
                                                        <span class="invalid-feedback" style="color:rgba(227,52,47,.8);" role="alert">
                                                            <strong>{{ $errors->first('sector') }}</strong>
                                                        </span><br>
                                                    @endif

                                            

                                                
                                                    
                                                <label>Telephone<i class="fa fa-phone"></i></label>
                                                    <input type="text" class="{{ $errors->has('telephone') ? ' is-invalid' : '' }}" name="telephone" placeholder="Telephone" value="{{old('telephone')}}"/> 

                                                    @if ($errors->has('telephone'))
                                                        <span class="invalid-feedback" style="color:rgba(227,52,47,.8);" role="alert">
                                                            <strong>{{ $errors->first('telephone') }}</strong>
                                                        </span><br>
                                                    @endif       

                                                
                                                <label>Restaurent Logo</label>      
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
<!-- ---------------------------------------------- end of contents  ---------------------------------------------------------->
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
                    <!-- section end -->
                </div>
            </div>
            <!-- wrapper end -->
            <!--footer -->
@include('layouts.adminfooter')            