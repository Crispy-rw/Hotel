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
                                    <h2>Add Hotel</h2>
                                </div>
                                <div class="row">
                                        @include('layouts.operatorside')
                                    <div class="col-md-5">
<!---------------------------------------------------------- start of contents   --------------------------------------------------->
                                <form method="POST" action="{{action('HotelController@store')}}" enctype='multipart/form-data'>
                                        @csrf
                                        <div class="profile-edit-container add-list-container">
                                            <div class="custom-form">  
                                                <label>Name<i class="fa fa-hotel"></i></label>
                                                    <input type="text" name="name" class="{{ $errors->has('name') ? ' is-invalid' : '' }}"  placeholder="Hotel Name" value="{{old('name')}}"/>

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

                                                <label>Star<i class="fa file-text"></i></label>    
                                                    <select  name="star"  class="chosen-select" >
                                                      <option value="">Select star</option>
                                                      <option value="1"> One </option>
                                                      <option value="2"> Two </option>
                                                      <option value="3"> Three </option>
                                                      <option value="4"> Four </option>
                                                      <option value="5"> Five </option>  
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
                                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                                       @endforeach
                                                    </select>

                                                    @if ($errors->has('country'))
                                                        <span  style="color:rgba(227,52,47,.8);" >
                                                            <strong>{{ $errors->first('country') }}</strong>
                                                        </span>
                                                    @endif

                                                <label>Province<i class="fa fa-map-marker"></i></label>
                                                    <select name="province" class="chosen-select" id="province">
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
                                                    <select name="district" class="chosen-select"  id="district"> 
                                                        <option value="" >Select District</option>                                                 
                                                    </select>

                                                    @if ($errors->has('district'))
                                                        <span class="invalid-feedback" style="color:rgba(227,52,47,.8);" role="alert">
                                                            <strong>{{ $errors->first('district') }}</strong>
                                                        </span>
                                                    @endif

                                                <label>Sector</label>
                                                    <select  name="sector"  class="chosen-select" id="sector" >
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

                                                <label>Website<i class="fa fa-globe"></i></label>
                                                    <input type="text" class="{{ $errors->has('website') ? ' is-invalid' : '' }}" name="website" placeholder="Website" value="{{old('website')}}"/>

                                                    @if ($errors->has('website'))
                                                        <span class="invalid-feedback" style="color:rgba(227,52,47,.8);" role="alert">
                                                            <strong>{{ $errors->first('website') }}</strong>
                                                        </span><br>
                                                    @endif

                                                <label>Email<i class="fa fa-send-o"></i></label>
                                                    <input type="Email" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="Email" value="{{old('email')}}"/>

                                                    @if ($errors->has('email'))
                                                        <span class="invalid-feedback" style="color:rgba(227,52,47,.8);" role="alert">
                                                            <strong>{{ $errors->first('email') }}</strong>
                                                        </span><br>
                                                    @endif
                                                    
                                                <label>Telephone<i class="fa fa-phone"></i></label>
                                                    <input type="text" class="{{ $errors->has('telephone') ? ' is-invalid' : '' }}" name="telephone" placeholder="Telephone" value="{{old('telephone')}}"/> 

                                                    @if ($errors->has('telephone'))
                                                        <span class="invalid-feedback" style="color:rgba(227,52,47,.8);" role="alert">
                                                            <strong>{{ $errors->first('telephone') }}</strong>
                                                        </span><br>
                                                    @endif       

                                                
                                                <label>Hotel Logo</label>      
                                                    <input type="file" name="logo" style="margin-left: -2px" value="{{old('logo')}}" />

                                                    @if ($errors->has('logo'))
                                                        <span class="invalid-feedback" style="color:rgba(227,52,47,.8);" role="alert"><br>
                                                            <strong>{{ $errors->first('logo') }}</strong>
                                                        </span><br><br>
                                                    @endif     

                                                <label>Hotel Background Images</label>      
                                                    <input type="file" name="background" style="margin-left: -2px" value="{{old('background')}}" /><br>

                                                    @if ($errors->has('background'))
                                                        <span class="invalid-feedback" style="color:rgba(227,52,47,.8);" role="alert">
                                                            <strong>{{ $errors->first('background') }}</strong>
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

<script type="text/javascript">
   $(document).ready(function(){

            $('#province').on('change',function(e){
                    if($(this).val() != '')
                    {

                        var select = $(this).attr("id");
                        var value = $(this).val();
                        var _token = $('input[name="_token"]').val();

                        $.ajax({
                                    url:"{{url('/dynamic_district')}}",
                                    method:"POST",
                                    data:{select:select, value:value, _token:_token},
                                    success:function(result)
                                    {
                                        $("#district").html(result);
                                    }
                                });
                    }
            });    
   });
       
</script>

  