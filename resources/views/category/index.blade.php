@extends('layouts.UserDashboard')

@section('sidebar')
    @include('../UserDashboardHeader')
@endsection

@section('content')

{!! Html::style('assets/css/table-scroll.css') !!}

<!-- Main content -->
        <section class="content">
        <div>
        <img style="min-width: 30%; margin-left: 400px;" src="{{url('assets/reseller_assets/images/3c.png')}}" class="img-responsive"> 
        </div>
    
    @if(Session::has('update_success'))
        <div class="alert alert-success alert-autocloseable" role="alert">{{session('update_success')}}</div>
    @endif
     <div class="row">
    <div class="col-md-12 col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">View your category</h3>

              <div class="pull-right">
               <a href="{{url('/category/create/')}}">
              <i class="fa fa-plus fa-3x" aria-hidden="true" style="color: #00a65a;"></i></a>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
            <div id="table-scroll">
              <table class="table">
                    <tr>
                      <th>&nbsp; &nbsp; Images</th>
                      <th>En_Category</th>
                      <th>Ar_Category</th>
                      <th>En_Description</th>
                      <th>Ar_Description</th>
                      <th>Published At</th>
                      <th></th>
                      <th></th>
                    </tr>
                @foreach ($categories as $category) 
                    <tr>
                      <td><a href="{{url('/category/'.$category->id.'/edit')}}">
                      <img src="{{url('/assets/images/'.$category->image)}}" class="img-responsive" width='100px' height='100px'></a></td>
                      <td><a href="{{url('/category/'.$category->id.'/edit')}}">{{$category->name}}<a/></td>
                      <td><a href="{{url('/category/'.$category->id.'/edit')}}">{{$category->ar_name}}<a/></td>
                      <td style="width:200px;">
                        <div>
                          <p>{{substr($category->description,0,100)}}</p>
                        </div>
                      </td>
                      <td style="width:200px;">
                        <div >
                          <p>{{substr($category->ar_description,0,100)}}</p>
                        </div>
                      </td>
                      <td><span class="badge bg-red">{{$category->created_at}}</span></td>
                      <td>
                      <a href="{{url('/category/'.$category->id.'/edit')}}">
                      <i class="fa fa-pencil-square-o fa-2x" aria-hidden="true" style="color:#3c8dbc;"></i></a></td>
                      <td>
                      
                      <?php $flage_relat=0; ?>
                            @foreach ($allcategories as $del_category)
                                @if($category->id ==$del_category->category_id)
                                    <?php $flage_relat=1; ?>
                                @endif    
                            @endforeach

                            @if($flage_relat==1)
                                <!-- <i class="fa fa-times fa-2x" aria-hidden="true" style="margin-left: 20px; color: red;"></i> -->
                                <span style="size-weight:bold; color:red;" class="glyphicon glyphicon-ban-circle" ></span>
                            @else
                                <span style="size-weight:bold; color:red;" class="glyphicon glyphicon-trash delete" id="{{$category->id}}"></span>
                            @endif    
                      </td>

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
        del_category=$(this);
        id=$(this).attr('id');
        $.ajax({
            type: "DELETE",
            url: "{{url('/category') }}/"+id, //resource
            data:   { _token :token },
            success: function(del_categories) { 
                del_category.parent().parent().remove();
            },
            error: function (data) {
                console.log(data);
            }
        });
    });
</script>
@endsection   

