@extends('layouts.app')

@section('sidebar')
    @include('../header')
@endsection

@section('content')

{!! Html::style('assets/css/table-scroll.css') !!}
<div class="col-sm-9">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Show Contact Us
                    <!-- for display add only one first and then display edit everytime -->
                     <?php $flagadd=0?>
                        @foreach($contacts as $contact)
                            @if($contact->site_id==Auth::user()->id)
                                <?php $flagadd=1?>
                            @endif
                        @endforeach
                     @if($flagadd==0)   
                    <small>
                    <!-- <i>Hello current_user</i> -->
                    <div class='col-lg-offset-11 col-ms-1'>
                        <a href="{{url('/contactus/create')}}"><span class="glyphicon glyphicon-plus"></span></a>
                    </div></small>
                    @else
                        <small>
                        <!-- <i>Hello current_user</i> -->
                        <div class='col-lg-offset-9 col-ms-3' id="del_edit">
                        @foreach($contacts as $contact)
                            <a href="{{url('/contactus/'.$contact->id.'/edit')}}" class="btn btn-primary">Edit <span class="glyphicon glyphicon-edit"></span></a>
                                   
                                <!-- use ajax for remove -->
                            <!-- <a id="{{$contact->id}}" class="btn btn-danger delete">Remove <span class="glyphicon glyphicon-remove"></span> </a> -->
                        @endforeach      
                        </div></small>
                    @endif
                    <small>
                    <!-- <i>Hello current_user</i> -->
                    <div class='col-lg-offset-11 col-ms-1' id="del_create">
                        <a href="{{url('/contactus/create')}}"><span class="glyphicon glyphicon-plus"></span></a>
                    </div></small>
                </h1>
            </div>
        </div>
        <!-- /.row -->
        
@if(Session::has('update_success'))
        <div class="alert alert-success alert-autocloseable" role="alert">{{session('update_success')}}</div>
    @endif
    

        <div class="row">
            <div class="col-md-10">
            @if (Auth::user())
                <div id="table-wrapper">
                @foreach ($contacts as $contact)
                    <h5><label >Publish At: </label>&nbsp;&nbsp;{{$contact->created_at}}</h5>
                    <table class='table table-hover' style="table-layout: fixed;">
                    
                        <tr>
                            <td><b><span style="color:blue;">Address</span></b></td>
                            <td>{{$contact->address}}</td>
                        </tr>
                        <tr>
                            <td><b><span style="color:blue;">Phone</span></b></td>
                            <td>{{$contact->phone}}</td>
                        </tr>
                        <tr>
                            <td><b><span style="color:blue;">Mobile</span></b></td>
                            <td>{{$contact->mobile}}</td>
                        </tr>
                        <tr>
                            <td><b><span style="color:blue;">E-mail</span></b></td>
                            <td>{{$contact->email}}</td>
                        </tr>
                        <tr>
                            <td><b><span style="color:blue;">Fax</span></b></td>
                            <td>{{$contact->fax}}</td>
                        </tr>
                        <tr>
                            <td><b><span style="color:blue;">Facebook</span></b></td>
                            <td>{{$contact->facebook}}</td>
                        </tr>
                        <tr>
                            <td><b><span style="color:blue;">Google+</span></b></td>
                            <td>{{$contact->google_plus}}</td>
                        </tr>
                        <tr>
                            <td><b><span style="color:blue;">Pinterest</span></b></td>
                            <td>{{$contact->pinterest}}</td>
                        </tr>
                        
                        <tr>
                            <td><b><span style="color:blue;">Instagram</span></b></td>
                            <td>{{$contact->instagram}}</td>
                        </tr>
                        <tr>
                            <td><b><span style="color:blue;">Linkedin</span></b></td>
                            <td>{{$contact->linkedin}}</td>
                        </tr>
                        <tr>
                            <td><b><span style="color:blue;">Youtube</span></b></td>
                            <td>{{$contact->youtube}}</td>
                        </tr>
                           
                    </table>
                        <!-- <div id="map"> -->
                        @if ($contact->lat != 0.0 or $contact->lng != 0.0 )
                            <img src='http://maps.googleapis.com/maps/api/staticmap?center={{$contact->lat}},{{$contact->lng}}&markers=color:blue|label:N|{{$contact->lat}},{{$contact->lng}}&zoom=15&size=1057x600&sensor=false'/>
                        @endif
                        <!-- </div>  -->
                    <br/><hr/>
                            <!-- <a class="btn btn-primary" href="/contactus/{{$contact->id}}/edit" >Edit ContactUs <span class="glyphicon glyphicon-edit"></span></a>
                             <a class="btn btn-danger" href="/contactus/destroy/{{$contact->id}}">Remove ContactUs <span class="glyphicon glyphicon-remove"></span></a>-->
                                         
                                <!-- use ajax for remove -->
                            <a id="{{$contact->id}}" class="btn btn-danger delete">Remove ContactUs<span class="glyphicon glyphicon-remove"></span> </a>
                               
                     @endforeach 
                </div>

            @endif  
            </div>
        </div>
        <!-- /.row -->
        <hr/>
</div><!--end leftsideof from-->

<!--  <br/><br/><hr/><hr/>
 -->
</div>

<meta name="_token" id='token' content="{!! csrf_token() !!}" />
<!-- <script type="text/javascript" src="{{url('/assets/js/jquery-2.1.4.min.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
<script type="text/javascript">
        console.log('hiiiiiii');
        document.getElementById('del_create').style.display = "none";

    $('.delete').on('click',function(event){
        event.preventDefault();
        //Declaration
        var token = $('#token').attr('content');
        $.ajaxSetup({
            headers: {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
            }
        });
           
        document.getElementById('del_create').style.display = "block";
        document.getElementById('del_edit').style.display = "none";

        del_contactu=$(this);
        id=$(this).attr('id');
        $.ajax({
            type: "DELETE",
            url: "{{url('/contactus') }}/"+id, //resource
            data:   { _token :token },
            success: function(del_contactus) { 
                del_contactu.parent().parent().remove();
            },
            error: function (data) {
                console.log(data);
            }
        });
    });
</script>
@endsection  




