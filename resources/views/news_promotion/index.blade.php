@extends('layouts.UserDashboard')

@section('sidebar')
    @include('../UserDashboardHeader')
@endsection

@section('content')

{!! Html::style('assets/css/table-scroll.css') !!}

    @if($type=='promotion')
        <!-- <a href="{{url('/news_promotion/promotion')}}"><span class="glyphicon glyphicon-backward"></span></a> -->
        <div class="row">
        <div class="col-md-4 col-md-offset-4">
        <img style="min-width: 30%; " src="{{url('assets/reseller_assets/images/6c.png')}}" class="img-responsive"> 
        </div>
        </div>
     @else
        <!-- <a href="{{url('/news_promotion/news')}}"><span class="glyphicon glyphicon-backward"></span></a> -->
        <div class="row">
        <div class="col-md-4 col-md-offset-4">
        <img style="min-width: 30%; " src="{{url('assets/reseller_assets/images/2c.png')}}" class="img-responsive"> 
        </div>
        </div>
     @endif
<br/>
        <section class="content">
        
    @if(Session::has('update_success'))
        <div class="alert alert-success alert-autocloseable" role="alert">{{session('update_success')}}</div>
    @endif
     <div class="row">
    <div class="col-md-10 col-md-offset-1">
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