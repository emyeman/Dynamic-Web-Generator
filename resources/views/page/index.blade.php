@extends('layouts.UserDashboard')

@section('sidebar')
    @include('../UserDashboardHeader')
@endsection

@section('content')

{!! Html::style('assets/css/table-scroll.css') !!}

   
        <!-- Main content -->
        <section class="content">
        <div class="row">
        <div class="col-md-4 col-md-offset-4 ">
        <img style="min-width: 30%;" src="{{url('assets/reseller_assets/images/8c.png')}}" class="img-responsive" style="margin-top:-15px; margin-left: 12px;">    
        </div>
        </div>
    
    @if(Session::has('update_success'))
        <div class="alert alert-success alert-autocloseable" role="alert">{{session('update_success')}}</div>
    @endif

     <div class="row">
    <div class="col-md-10 col-md-offset-1">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title" style="color: #1F4A55; font-weight:bold;">View your Pages</h3>

              <div class="pull-right">
              <a href="{{url('/page/create')}}">
              <i class="fa fa-plus fa-3x" aria-hidden="true" style="color: #00a65a;"></i>
              </a>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
            <div id="table-scroll">
              <table class="table table-hover">
                <tr>
                    <th width='80%'><span class="text">name</span></th>
                    <th width='10%'></th>
                    <th width='10%'></th>
                </tr>
            @foreach ($rows as $row)
                    <tr>
                        @if(($row->title=='page_top')||($row->title=='services')||($row->title=='about')||($row->title=='gallery')||($row->title=='news')||($row->title=='promotion')||($row->title=='contact'))
                            <td class='wrap'>{{$row->title}}</td>
                            <td></td>
                        @else
                            <td class='wrap'><a href="{{url('/page/'.$row->id.'/edit')}}">{{$row->title}}<a/></td>
                            <td>
                                <a href="{{url('/page/'.$row->id.'/edit')}}">
                                    <span style="color:blue;" class="glyphicon glyphicon-edit edit" id="{{$row->id}}"></span>
                                </a>
                            </td>
                        @endif
                        <td><span style="color:red;" class="glyphicon glyphicon-trash delete" id="{{$row->id}}"></span></td>
                    </tr>
                @endforeach

              </table>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
             </div>
        </section>
        <!-- /.content -->
</div>  


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
                url: "{{ url('/page')}}/"+ id, //resource
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


    