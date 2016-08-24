@extends('layouts.UserDashboard')

@section('sidebar')
    @include('../UserDashboardHeader')
@endsection

@section('content')

            <section class="content">
    <div class="row text-uppercase" style="text-align: center;">
        <div class="row">
        <div class="col-md-4 col-md-offset-4"> 
        <img style="min-width: 30%;" src="{{url('assets/reseller_assets/images/7c.png')}}" class="img-responsive"> 
        </div>
        </div>
       <hr style="display: inline-block; width: 40px; height: 2px; background: #cccccc; margin-bottom: 75px;">  
        </div>
    @if(Session::has('update_success'))
        <div class="alert alert-success alert-autocloseable" role="alert">{{session('update_success')}}</div>
    @endif
    @if(Session::has('update_failed'))
        <div class="alert alert-warning alert-autocloseable" role="alert">{!!session('update_failed')!!}</div>
    @endif
     <div class="row">
    <div class="col-md-10 col-md-offset-1">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">View your Crusal</h3>

              <div class="pull-right">

               <a href="{{url('/crusal/create')}}">
              <i class="fa fa-plus fa-3x" aria-hidden="true" style="color: #00a65a;"></i>
              </a>

              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table">
                <tr>
                        <th>Image</th> <!-- image -->
                        <th><span class="text">English title</span></th>
                        <th><span class="text">Arabic title</span></th>

                        <th><span class="text">English description</span></th>

                        <th><span class="text">Arabic description</span></th>
                </tr>
                @foreach ($rows as $row)
                <tr>
                  <td><img src="{{url('/assets/images'.$row->image)}}" width='100px' height='100px' class="img-responsive"></td>
                  <td>{{$row->title}}</td>
                  <td>{{$row->ar_title}}</td>
                  <td style="width:200px;">
                    <div >
                      <p>{{substr($row->description,0,100)}}</p>
                    </div>
                  </td>
                  <td style="width:200px;">
                    <div >
                      <p>{{substr($row->ar_description,0,100)}}</p>
                    </div>
                  </td>
                  <td>
                  <a href="{{url('/crusal/'.$row->id.'/edit')}}">
                  <i class="fa fa-pencil-square-o fa-2x" aria-hidden="true" style="color:#3c8dbc;"></i></a>

                  
                  <i class="fa fa-times fa-2x delete" id="{{$row->id}}"  aria-hidden="true" style="margin-left: 20px; color: red;"></i>

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
        <!-- /.row -->
<meta name="_token" id='token' content="{!! csrf_token() !!}" />
<script type="text/javascript">      
    $('section').on('click','.delete',function(event){
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
            url: "{{url('/crusal')}}/"+id, //resource
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


    