@extends('layouts.app')

@section('content')
<div class="container">

@include('../header')
<!-- {!! Html::script('js/jquery-2.1.4.min.j') !!} -->
{!! Html::style('assets/css/table-scroll.css') !!}


<!-- <script type="text/javascript" src="/public/assets/js/delete_news_promotions.js"></script>
<script type="text/javascript" src="/public/assets/js/jquery-2.1.4.min.js"></script>
 -->
<div class="col-sm-9">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    @if($type==1)
                        Show Promotions
                    @else
                        Show News
                    @endif
                    <!-- <small><i>Hello current_user</i></small> -->
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">

            <!-- <div class="col-md-5">
                <a href="#">
                    <img class="img-responsive" width="500" height="30" src="/assets/images/Promotion.jpg" alt="">
                </a>
            </div> -->
            <div class='col-lg-offset-11 col-ms-1'>
                <a href='/promotion/create/{{$type}}'><span class="glyphicon glyphicon-plus"></span></a>
            </div>
        
            <div >
                <!-- *************************** -->
                <div id="table-wrapper">
                  <div id="table-scroll">
                    <table class='table table-hover' style="table-layout: fixed;">
                        <thead>
                            <tr>
                                <th width='15%'></th>
                                <th width='25%'><span class="text">title</span></th>
                                <th width='30%'><span class="text">description</span></th>
                                <th width='15%'><span class="text">start date</span></th>
                                <th width='15%'><span class="text">end date</span></th>
                                <th width='5%'></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rows as $row)
                                <tr> 
                                    <td>
                                        <a href='/promotion/{{$row->id}}/edit'>
                                            <img src="/assets/images{{$row->image}}" width='100px' height='100px'></td>
                                        </a>
                                    <td class='wrap'><a href='/promotion/{{$row->id}}/edit'>{{$row->title}}<a/></td> 
                                    <td class='wrap'>{{substr($row->description,0,100)}}</td>
                                    <td>{{$row->start_date}}</td>
                                    <td>{{$row->end_date}}</td> 
                                    <td><span class="glyphicon glyphicon-remove delete" id="{{$row->id}}"></span></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                  </div>
                </div>
                <!-- <h3><label >Title Promotion:</label><br/>
                <label >Description:</label></h3>
                 <h4><label >Publish At:</label></h4>
                <a class="btn btn-primary" href="#" >Edit Promotion</a><span class="glyphicon glyphicon-chevron-right"></span>

                <input type='button' class="btn btn-danger delete" id='3' value='Remove Promotion'/><span class="glyphicon glyphicon-chevron-right"></span> -->
            </div>
        </div>
        <!-- /.row -->
        <hr/>
</div><!--end leftsideof from-->

 <br/><br/><hr/><hr/>

</div>
<meta name="_token" id='token' content="{!! csrf_token() !!}" />
<script type="text/javascript" src='/assets/js/jquery-2.1.4.min.js'></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript">
    $(function(){
        
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
                url: '/promotion/'+ id, //resource
                data:   { _token :token },
                success: function(affectedRows) { 
                    affected_row.parent().parent().remove();
                },
                error: function (data) {
                    console.log(data);
                }
            });
        });
        // deleteRow($('.delete').attr('id'));
        // alert();

    });
</script>
@endsection


    