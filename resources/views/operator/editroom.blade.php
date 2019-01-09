



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
                        <h2 class="center">Hotel Operator Edit Room</h2>

                    </div>
                    <div class="row">
                        <!-- start of operator side bar-->
                            @include('layouts.operatorside')
                        <!-- end of operator side bar--> 
                        <div class="col-md-5">
<!---------------------------------------------------------- start of content ------------------------------------------------>  
                    <form method="POST" action="{{route('room.update',$room->id)}}" enctype='multipart/form-data'>
                        @method('PATCH')
                                                            @csrf
                        <div class="profile-edit-container add-list-container">
                            <div class="custom-form">  
                                <label>Name<i class="fa fa-hotel"></i></label>
                            <input type="text" name="name" value="{{$room->name}}" class="{{ $errors->has('name') ? ' is-invalid' : '' }}"  placeholder="Room Name" value="{{$room->name}}"/>

                                    @if ($errors->has('name'))
                                        <span  style="color:rgba(227,52,47,.8);" >
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span></br>
                                    @endif    

                                <label>Description</label>
                                    <textarea cols="40" rows="3" name="description" class="{{ $errors->has('description') ? ' is-invalid' : '' }}" placeholder="Enter Description">{{$room->description}}</textarea>


                                    @if ($errors->has('description'))
                                        <span class="invalid-feedback" style="color:rgba(227,52,47,.8);" role="alert">
                                            <strong>{{ $errors->first('description') }}</strong>
                                        </span>
                                    @endif

                                <label>Hotel<i class="fa fa-hotel"></i></label>
                                    <select name="hotel" class="chosen-select" >
                                      <option value="">Select your hotel</option>
                                       @foreach($hotel as $item)
                                        <option  {{$item->id == $room->hotel_id ? 'selected':''}} value="{{$item->id}}">{{$item->name}}</option>
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
                                        <option {{$item->id == $room->id ? 'selected':''}} value="{{$item->id}}" >{{$item->name}}</option>
                                      @endforeach
                                    </select>

                                    @if ($errors->has('type'))
                                        <span class="invalid-feedback" style="color:rgba(227,52,47,.8);" role="alert">
                                            <strong>{{ $errors->first('type') }}</strong>
                                        </span><br>
                                    @endif


                                <label>Price<i class="fa fa-send-o"></i></label>
                                    <input type="text" class="{{ $errors->has('price') ? ' is-invalid' : '' }}" name="price" placeholder="price" value="{{$room->price}}"/>

                                    @if ($errors->has('price'))
                                        <span class="invalid-feedback" style="color:rgba(227,52,47,.8);" role="alert">
                                            <strong>{{ $errors->first('price') }}</strong>
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
<!---------------------------------------- end of content ---------------------------------------->                                        
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
