@extends('layouts.UserDashboard')

@section('sidebar')
    @include('../UserDashboardHeader')
@endsection

@section('content')

        <!-- Main content -->
        
        <section class="content">
        <div class="row">
        <div class="col-md-4 col-md-offset-4">
        <img style="min-width: 30%;" src="{{url('assets/reseller_assets/images/9c.png')}}" class="img-responsive"> 
        </div>
        </div>
    
    @if(Session::has('update_success'))
        <div class="alert alert-success alert-autocloseable" role="alert">{{session('update_success')}}</div>
    @endif
    
     <div class="row">
    <div class=" col-md-12 col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">View your Sub category</h3>

              <div class="pull-right">
              <a href="{{url('/subcategory/create')}}">
              <i class="fa fa-plus fa-3x" aria-hidden="true" style="color: #00a65a;"></i></a>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table">
                <tr>
                  <th>Category</th>
                  <th>&nbsp; &nbsp; Images</th>
                  <th>En_Sub category</th>
                  <th>Ar_Sub category</th>
                  <th>En_Description</th>
                  <th>Ar_Description</th>
                  <th>Published At</th>
                  <th></th>
                  <th></th>
                </tr>
                @foreach ($subcategories as $subcategory) 

                <tr>
                  @foreach ($categories as $category)
                        @if($category->id==$subcategory->category_id)
                        <td><a href="{{url('/subcategory/'.$subcategory->id.'/edit')}}">{{$category->name}} <br/> {{$category->ar_name}}<a/></td>
                     @endif
                    @endforeach

                  <td><a href="{{url('/subcategory/'.$subcategory->id.'/edit')}}">
                        <img src="{{url('/assets/images/'.$subcategory->image)}}" width='100px' height='100px' class="img-responsive">
                    </a></td>
                    <td><a href="{{url('/subcategory/'.$subcategory->id.'/edit')}}">{{$subcategory->name}}<a/></td>
                      <td><a href="{{url('/subcategory/'.$subcategory->id.'/edit')}}">{{$subcategory->ar_name}}<a/></td>
                      <td style="width:200px;">
                        <div>
                          <p>{{substr($subcategory->description,0,100)}}</p>
                        </div>
                      </td>
                      <td style="width:200px;">
                        <div >
                          <p>{{substr($subcategory->ar_description,0,100)}}</p>
                        </div>
                      </td>
                      <td><span class="badge bg-red">{{$subcategory->created_at}}</span></td>
                      <td>
                      <a href="{{url('/subcategory/'.$subcategory->id.'/edit')}}">
                      <i class="fa fa-pencil-square-o fa-2x" aria-hidden="true" style="color:#3c8dbc;"></i></a></td>
                      <td>

                        <?php $flage_relation=0 ?>
                            @foreach ($products as $product)
                                @if($subcategory->id==$product->category_id)
                                    <?php $flage_relation=1 ?>
                                @endif    
                            @endforeach

                            @if($flage_relation==1)
                                <!-- <i class="fa fa-times fa-2x" aria-hidden="true" style="margin-left: 20px; color: red;"></i> -->
                                <span style="size-weight:bold; color:red;" class="glyphicon glyphicon-ban-circle" > </span>
                            @else
                                <span style="size-weight:bold; color:red;" class="glyphicon glyphicon-trash delete" id="{{$subcategory->id}}"></span>
                            @endif    
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
        del_subcategory=$(this);
        id=$(this).attr('id');
        $.ajax({
            type: "DELETE",
            url: "{{url('/subcategory') }}/"+id, //resource
            data:   { _token :token },
            success: function(del_subcategories) { 
                del_subcategory.parent().parent().remove();
            },
            error: function (data) {
                console.log(data);
            }
        });
    });
</script>

@endsection  

