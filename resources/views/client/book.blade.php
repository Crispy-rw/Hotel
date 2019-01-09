
@guest

    @include('layouts.homeheader')
    
@else

    @if(Auth()->User()->type == 3)
        @include('layouts.adminheader')
    @elseif(Auth()->User()->type == 2)
        @include('layouts.operatorheader')
    @else
        @include('layouts.clientheader')
    @endif    

@endguest	
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
                                    <h2 class="center"> {{Auth()->user()->Firstname}} book your room </h2>
                                </div>
                                <div class="row" >
                                    <div class="col-md-2" style="height: 300px; " >
                                        <!-- start of content-->          

                                        <img src="/storage/room/{{$room->cover_image}}" style="width: 300px;height: 80%;">

                                        <!-- end of content-->                                        
                                    </div>
                                    <div class="col-md-3" style="margin-left: 110px;font-size: 30px;">
                                        
                                        <div class="box-widget widget-posts">
                                        <div class="box-widget-content">
                                            <ul>

                                                    <li class="clearfix">
                                                        <div class="widget-posts-descr">
                                                            <span class="widget-posts-date"><i class="fa fa-info-circle"> </i>&nbsp<strong>{{$room->name}}</strong></span>
                                                            <span class="widget-posts-date"><i class="fa fa-money"></i> {{$room->price}} Frw</span>
                                                            <span class="widget-posts-date"><i class="fa fa-calendar-check-o"></i> 21 Mar 2017 </span>
                                                            <span class="widget-posts-date"><i class="fa fa-calendar-check-o"></i> 21 Mar 2017 </span>
                                                        </div>
                                                    </li>
                                                
                                            </ul>
                                        
                                        </div>       
                                    </div>
                                    </div>
                                    <div class="col-xs-5">
<div class="box-widget widget-posts">
    <div class="box-widget-content">
        <ul>
                <li class="clearfix">
                    <div class="widget-posts-descr">
                        <form action="{{action('BookingController@store')}}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{$id}}">
                            <div class="custom-form">
                                <label>number of adult </label>
                                <input type="text" name="adult" placeholder="Enter number of adult" value="{{old('adult')}}" />
                                <label>number of children </label>
                                <input type="text" name="child" placeholder="Enter number of children" value="{{old('child')}}" />
                                <label>Check in </label>
                                <input type="text" name="checkin" placeholder="Enter checkin date" value="{{old('checkin')}}" />
                                <label>Event Date</label>
                                <input type="text" name="checkout" placeholder="Enter checkout date"  value="{{old
                                ('checkout')}}"  />
                                <button class="btn  big-btn  color-bg flat-btn" type="submit">Save Changes<i class="fa fa-angle-right"></i></button>
                            </div>
                        </form>
                    </div>
                </li>
        </ul>
    
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
            <script type="text/javascript">
           $(document).ready(function(){

                $('#province').on('change',function(e){
                    if($(this).val() != '')
                    {

                            var select = $(this).attr("id");
                            var value = $(this).val();
                            var _token = $('input[name="_token"]').val();

                            $.ajax({
                                            url:"{{url('fetch_district')}}",
                                            method:"POST",
                                            data:{select:select, value:value, _token:_token},
                                            success:function(result)
                                            {

                                                console.log(result);
                                                        // $("#district").empty();
                                                        // $("#district").append("<option value=''> - </option>");
                                                        // $.each(result,function(index, data){
                                                        // $("#district").append("<option {{old('district')?'selected':''}} value='"+data.id+"'>"+data.name+"</option>");

                                                        // });
                                            }
                                });
                        }
                    });       
            } 
        
</script>
            <!-- wrapper end -->
            <!--footer -->
 @include('layouts.adminfooter')           