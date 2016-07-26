@extends('layouts.UserDashboard')

@section('sidebar')
    @include('../UserDashboardHeader')
@endsection

@section('content')

{{-- 
{!! Html::style('assets/css/table-scroll.css') !!}

    <h1 class="page-header">
        @if($type=='promotion')
            Promotions
        @else
            News
        @endif
    </h1>
    <div class="row">
        <div class='col-lg-offset-11 col-ms-1'>
            <a href="{{url('/news_promotion/create/'.$type)}}"><span class="glyphicon glyphicon-plus"></span></a>
        </div>
    </div >
    @if(Session::has('update_success'))
        <div class="alert alert-success alert-autocloseable" role="alert">{{session('update_success')}}</div>
    @endif
    <div class="row">
        <div id="table-wrapper">
            <div id="table-scroll">
                <table class='table table-hover' style="table-layout: fixed;">
                    <thead>
                        <tr>
                            <th width='15%'></th>
                            <th width='20%'><span class="text">English title</span></th>
                            <th width='20%'><span class="text">Arabic title</span></th>
                            <th width='25%'><span class="text">English description</span></th>
                            <th width='25%'><span class="text">Arabic description</span></th>
                            <th width='15%'><span class="text">start date</span></th>
                            <th width='15%'><span class="text">end date</span></th>
                            <th width='5%'></th>
                            <th width='5%'></th> <!-- edit operation -->
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rows as $row)
                            <tr> 
                                <td>
                                    <a href="{{url('/news_promotion/'.$row->id.'/edit')}}">
                                        <img src="{{url('/assets/images'.$row->image)}}" width='100px' height='100px'></td>
                                    </a>
                                <td class='wrap'><a href="{{url('/news_promotion/'.$row->id.'/edit')}}">{{$row->title}}<a/></td>

                                <td class='wrap'><a href="{{url('/news_promotion/'.$row->id.'/edit')}}">{{$row->ar_title}}<a/></td>

                                <td class='wrap'>{{substr($row->description,0,100)}}</td>

                                <td class='wrap'>{{substr($row->ar_description,0,100)}}</td>

                                <td>{{$row->start_date}}</td>
                                <td>{{$row->end_date}}</td> 
                                <td>
                                    <a href="{{url('/news_promotion/'.$row->id.'/edit')}}">
                                        <span class="glyphicon glyphicon-edit edit" id="{{$row->id}}"></span>
                                    </a>
                                </td> 
                                <td><span class="glyphicon glyphicon-remove delete" id="{{$row->id}}"></span></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
 --}}
        <section class="content">
        <div class="row">
        <div class="col-md-10 col-md-offset-1">
        </div>  
        </div>
    @if(Session::has('update_success'))
        <div class="alert alert-success alert-autocloseable" role="alert">{{session('update_success')}}</div>
    @endif
     <div class="row">
    <div class="col-md-11 col-md-offset-0">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">
                    @if($type=='promotion')
                        Promotions
                    @else
                        News
                    @endif
              </h3>

              <div class="pull-right">
              <a href="{{url('/news_promotion/create/'.$type)}}">
              <i class="fa fa-plus fa-3x" aria-hidden="true" style="color: #00a65a;"></i></a>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table">
                <tr>
                  <th>Images</th>
                  <th>English Title</th>
                  <th>Arabic Title</th>
                  <th>English Description</th>
                  <th>Arabic Description</th>
                  <th>Start Date</th>
                  <th>End Date</th>
                  <th></th>
                </tr>
                @foreach ($rows as $row)
                <tr>
                  <td><img src="{{url('/assets/images'.$row->image)}}" width='100px' height='100px' class="img-responsive"></td>
                  <td>{{$row->title}}</td>
                  <td>{{$row->ar_title}}</td>
                  <td style="width:200px;">
                    <div >
                      <p>{{$row->description}}</p>
                    </div>
                  </td>
                  <td style="width:200px;">
                    <div >
                      <p>{{$row->ar_description}}</p>
                    </div>
                  </td>
                  <td>{{$row->start_date}}</td>
                  <td>{{$row->end_date}}</td>
                  <td>
                  <a href="{{url('/news_promotion/'.$row->id.'/edit')}}">
                  <i class="fa fa-pencil-square-o fa-2x" aria-hidden="true" style="color:#3c8dbc;"></i></a>

                  <i class="fa fa-times fa-2x delete" id="{{$row->id}}" aria-hidden="true" style="margin-left: 20px; color: red;"></i>
                  </td>
                </tr>
                @endforeach
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
             </div>
        </section>

<meta name="_token" id='token' content="{!! csrf_token() !!}" />
<!-- <script type="text/javascript" src="{{url('/assets/js/jquery-2.1.4.min.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
<script type="text/javascript">
    $('.delete').on('click',function(event){
        event.preventDefault();
        //Declaration
        var token = $('#token').attr('content');
        $.ajaxSetup({
            headers: {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
            }
        });
        affected_row=$(this);
        id=$(this).attr('id');
        $.ajax({
            type: "DELETE",
            url: "{{url('/news_promotion') }}/"+id, //resource
            data:   { _token :token },
            success: function(affectedRows) { 
                affected_row.parent().parent().remove();
            },
            error: function (data) {
                console.log(data);
            }
        });
    });
</script>
@endsection   