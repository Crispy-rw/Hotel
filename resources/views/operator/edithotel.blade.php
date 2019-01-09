
@include('layouts.operatorheader')	

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
                                    <h2>Edit  Hotel</h2>
                                </div>
                                <div class="row">
                                        @include('layouts.operatorside')
                                    <div class="col-md-5">
<!---------------------------------------------------------- start of contents   --------------------------------------------------->
                                    <form  action="{{route('hotel.update',$hotel->id)}}" method="POST" enctype='multipart/form-data'>
                                        @method('PATCH')
                                        @csrf
                                        <div class="profile-edit-container add-list-container">
                                            <div class="custom-form">  
                                                <label>Name<i class="fa fa-hotel"></i></label>
                                                    <input type="text" name="name" class="{{ $errors->has('name') ? ' is-invalid' : '' }}"  placeholder="Hotel Name" value="{{$hotel->name}}"/>

                                                    @if ($errors->has('name'))
                                                        <span  style="color:rgba(227,52,47,.8);" >
                                                            <strong>{{ $errors->first('name') }}</strong>
                                                        </span></br>
                                                    @endif    

                                                <label>Description</label>
                                                    <textarea cols="40" rows="3" name="description" class="{{ $errors->has('description') ? ' is-invalid' : '' }}" placeholder="Enter Description">{{$hotel->description}}</textarea>

                                                    @if ($errors->has('description'))
                                                        <span style="color:rgba(227,52,47,.8);" >
                                                            <strong>{{ $errors->first('description') }}</strong>
                                                        </span>
                                                    @endif

                                                <label>Star<i class="fa file-text"></i></label>    
                                                    <select  name="star"  class="chosen-select" >
                                                      <option value="">Select star</option>
                                                      <option value="1" {{($hotel->star == 1) ? 'selected' :''}} > One </option>
                                                      <option value="2" {{($hotel->star == 2) ? 'selected' :''}} > Two </option>
                                                      <option value="3" {{($hotel->star == 3) ? 'selected':''}}> Three </option>
                                                      <option value="4" {{($hotel->star == 5) ? 'selected' :''}}> Fours </option>
                                                      <option value="5" {{($hotel->star == 5) ? 'selected' :''}}> Five </option>  
                                                    </select>    

                                                    @if ($errors->has('star'))
                                                        <span class="invalid-feedback" style="color:rgba(227,52,47,.8);" role="alert">
                                                            <strong>{{ $errors->first('star') }}</strong>
                                                        </span>
                                                    @endif

                                                <label>Country<i class="fa fa-hotel"></i></label>
                                                    <select name="country" class="chosen-select" >
                                                      <option value="">Select Country</option>
                                                       @foreach($country as $item)
                                                        <option value="{{$item->id}}" {{($item->id == $hotel->country_id)?'selected':''}} >{{$item->name}}</option>
                                                       @endforeach
                                                    </select>

                                                    @if ($errors->has('country'))
                                                        <span  style="color:rgba(227,52,47,.8);" >
                                                            <strong>{{ $errors->first('country') }}</strong>
                                                        </span>
                                                    @endif

                                                <label>Province<i class="fa fa-map-marker"></i></label>
                                                    <select name="province" class="chosen-select" >
                                                      <option value="">Select Province</option>
                                                      @foreach($province as $item)
                                                        <option value="{{$item->id}}" {{($item->id == $hotel->province_id)?'selected':''}} > {{$item->name}}</option>
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
                                                        <option value="{{$item->id}}" {{($item->id == $hotel->district_id)?'selected':''}}>{{$item->name}}</option>
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
                                                        <option value="{{$item->id}}" {{($item->id == $hotel->sector_id)?'selected':''}} >{{$item->name}}</option>
                                                      @endforeach
                                                    </select>

                                                    @if ($errors->has('sector'))
                                                        <span class="invalid-feedback" style="color:rgba(227,52,47,.8);" role="alert">
                                                            <strong>{{ $errors->first('sector') }}</strong>
                                                        </span><br>
                                                    @endif

                                                <label>Website<i class="fa fa-globe"></i></label>
                                                    <input type="text" class="{{ $errors->has('website') ? ' is-invalid' : '' }}" name="website" placeholder="Website" value="{{$hotel->website}}" />

                                                    @if ($errors->has('website'))
                                                        <span class="invalid-feedback" style="color:rgba(227,52,47,.8);" role="alert">
                                                            <strong>{{ $errors->first('website') }}</strong>
                                                        </span><br>
                                                    @endif

                                                <label>Email<i class="fa fa-send-o"></i></label>
                                                    <input type="Email" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="Email" value="{{$hotel->email}}" />

                                                    @if ($errors->has('email'))
                                                        <span class="invalid-feedback" style="color:rgba(227,52,47,.8);" role="alert">
                                                            <strong>{{ $errors->first('email') }}</strong>
                                                        </span><br>
                                                    @endif
                                                    
                                                <label>Telephone<i class="fa fa-phone"></i></label>
                                                    <input type="text" class="{{ $errors->has('telephone') ? ' is-invalid' : '' }}" name="telephone" placeholder="Telephone" value="{{$hotel->phone}}" />
                                                    {{$item->phone}} 

                                                    @if ($errors->has('telephone'))
                                                        <span class="invalid-feedback" style="color:rgba(227,52,47,.8);" role="alert">
                                                            <strong>{{ $errors->first('telephone') }}</strong>
                                                        </span><br>
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