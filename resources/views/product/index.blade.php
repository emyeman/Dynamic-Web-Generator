@extends('layouts.UserDashboard')

@section('sidebar')
    @include('../UserDashboardHeader')
@endsection

@section('content')



{!! Html::style('assets/css/table-scroll.css') !!}

<!-- Main content -->
        <section class="content">
        <div>
        <img src="{{url('assets/reseller_assets/images/18.png')}}" style="max-width: 50%; margin-left: 250px;" class="img-responsive"> 
        </div>
    @if(Session::has('update_success'))
        <div class="alert alert-success alert-autocloseable" role="alert">{{session('update_success')}}</div>
    @endif
     <div class="row">
    <div class="col-md-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">View your Products</h3>

              <div class="pull-right">
              <a href="{{url('/product/create')}}">
              <i class="fa fa-plus fa-3x" aria-hidden="true" style="color: #00a65a;"></i>
              </a>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table">
                <tr>
                  <th>Category</th>
                  <th>SubCategory</th>
                  <th>&nbsp; &nbsp; Images</th>
                  <th>En_Product</th> 
                  <th>Ar_Product</th>
                  <th>En_Description</th>
                  <th>Ar_Description</th>
                  <th>Price</th>
                  <th>Published At</th>
                  <th></th>
                </tr>
             @if (Auth::user()) 
                @foreach ($products as $product)

                <tr>
                 <!-- for obtain name of category  -->
                  @foreach ($categories as $allcategory)
                        @if($allcategory->id==$product->category_id)
                             @foreach ($categories as $category)
                                @if($category->id==$allcategory->category_id)
                                 <td><a href="{{url('/product/'.$product->id.'/edit')}}">{{$category->name}}<br/>{{$category->ar_name}}<a/></td>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                    <!-- for obtain name of subcategory  -->
                    @foreach ($subcategories as $subcategory)
                        @if($subcategory->id == $product->category_id)
                        <td><a href="{{url('/product/'.$product->id.'/edit')}}">{{$subcategory->name}}<br/>{{$subcategory->ar_name}}<a/></td>
                        @endif
                    @endforeach
                    <td>
                        <a href="{{url('/product/'.$product->id.'/edit')}}">
                            <img src="{{url('/assets/images/'.$product->image)}}" width='100px' height='100px' class="img-responsive">
                        </a>
                    </td>

                  
                    <td><a href="{{url('/product/'.$product->id.'/edit')}}">{{$product->name}}<a/></td>
                    <td><a href="{{url('/product/'.$product->id.'/edit')}}">{{$product->ar_name}}<a/></td>
                    
                  <td style="width:150px;">
                    <div >
                      <p>{{substr($product->description,0,50)}}</p>
                    </div>
                  </td>
                  <td style="width:150px;">
                    <div >
                      <p>{{substr($product->ar_description,0,50)}}</p>
                    </div>
                  </td>

                  <td>{{$product->price}} LE</td>
                  <td><span class="badge bg-red">{{substr($product->created_at,0,10)}}</span></td>
                  
                  <td>
                  <a href="{{url('/product/'.$product->id.'/edit')}}">
                  <i class="fa fa-pencil-square-o fa-2x" aria-hidden="true" style="color:#3c8dbc;"></i></a></td>
                  <td>
                    <span style="size-weight:bold; color:red;" class="glyphicon glyphicon-trash delete" id="{{$product->id}}"></span>
                  </td>

                </tr>
            @endforeach
            @endif 
               
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
        del_product=$(this);
        id=$(this).attr('id');
        $.ajax({
            type: "DELETE",
            url: "{{url('/product') }}/"+id, //resource
            data:   { _token :token },
            success: function(del_products) { 
                del_product.parent().parent().remove();
            },
            error: function (data) {
                console.log(data);
            }
        });
    });
</script>
@endsection   