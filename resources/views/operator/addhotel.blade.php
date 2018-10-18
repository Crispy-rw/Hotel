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
                                                    <input type="text" name="name" placeholder="Hotel Name" value="{{old('name')}}"/>
                                                <label>Description</label>
                                                    <textarea cols="40" rows="3" name="description" placeholder="Enter Description"></textarea>

                                                <label>Star<i class="fa file-text"></i></label>    
                                                    <select  name="star"  class="chosen-select" >
                                                      <option value="">Select star</option>
                                                      <option value="1"> One </option>
                                                      <option value="2"> Two </option>
                                                      <option value="3"> Three </option>
                                                      <option value="4"> Four </option>
                                                      <option value="5"> Five </option>  
                                                    </select>    

                                                <label>Country<i class="fa fa-hotel"></i></label>
                                                    <select name="country" class="chosen-select" >
                                                      <option value="">Select Country</option>
                                                       @foreach($country as $item)
                                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                                       @endforeach
                                                    </select>

                                                <label>Province<i class="fa fa-map-marker"></i></label>
                                                    <select name="province" class="chosen-select" >
                                                      <option value="">Select Province</option>
                                                      @foreach($province as $item)
                                                        <option value="{{$item->id}}"> {{$item->name}}</option>
                                                      @endforeach
                                                    </select>

                                                <label>District</label>
                                                    <select name="district" class="chosen-select" >
                                                      <option value="">Select District</option>
                                                      @foreach($district as $item)
                                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                                      @endforeach
                                                    </select>

                                                <label>Sector</label>
                                                    <select  name="sector"  class="chosen-select" >
                                                      <option value="">Select Sector</option>
                                                      @foreach($sector as $item)
                                                        <option value="{{$item->id}}" >{{$item->name}}</option>
                                                      @endforeach
                                                    </select>

                                                <label>Website<i class="fa fa-globe"></i></label>
                                                    <input type="text" name="website" placeholder="Website" value="{{old('website')}}"/>

                                                <label>Email<i class="fa fa-send-o"></i></label>
                                                    <input type="Email" name="email" placeholder="Email" value="{{old('email')}}"/>
                                                    
                                                <label>Telephone<i class="fa fa-phone"></i></label>
                                                    <input type="text" name="telephone" placeholder="Telephone" value="{{old('name')}}"/>        

                                                
                                                <label>Hotel Logo</label>      
                                                    <input type="file" name="logo" style="margin-left: -2px" />

                                                <label>Hotel Background Images</label>      
                                                    <input type="file" name="background" style="margin-left: -2px" />
                                               
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