@extends('layouts.app')

@section('sidebar')
    @include('../header')
@endsection

@section('content')
    {!! Html::style('assets/css/table-scroll.css') !!}
    <h1 class="page-header">Show Services</h1>
    <div class="row">
        <div class='col-lg-offset-11 col-ms-1'>
            <a href="{{url('/service/create')}}"><span class="glyphicon glyphicon-plus"></span></a>
        </div>
    </div>

    @if(Session::has('update_success'))
        <div class="alert alert-success alert-autocloseable" role="alert">{{session('update_success')}}</div>
    @endif
    
    <div class="row">
        <div id="table-wrapper">
            <div id="table-scroll">
               <table class='table table-hover' style="table-layout: fixed;">
                <thead>
                    <tr>
                        <th width='10%'></th> <!-- icon -->
                        <th width='35%'><span class="text">English title</span></th>
                        <th width='35%'><span class="text">Arabic title</span></th>
                        <th width='45%'><span class="text">English description</span></th>

                        <th width='45%'><span class="text">Arabic description</span></th>
                        <th width='5%'></th> <!-- delete operation -->
                        <th width='5%'></th> <!-- edit operation -->
                    </tr>
                </thead>
                @foreach($services as $service)
                    <tr>
                        <td>
                            <button class="btn btn-default btn-icon" value="{{$service->icon}}" title="glyphicon-adjust" style="display: inline-block;"><i class="glyphicon {{$service->icon}}"></i></button>
                        </td>
                        <td>{{$service->title}}</td>
                        <td>{{$service->ar_title}}</td>
                        <td>{{$service->description}}</td>
                        <td>{{$service->ar_description}}</td>
                        <td>
                            <a href="{{ url('/service/edit') }}/{{$service->id}}">
                                <span class="glyphicon glyphicon-edit edit" id="{{$service->id}}"></span>
                            </a>
                        </td> 
                        <td>
                            <a href="{{ url('/service/delete') }}/{{$service->id}}">
                                <span class="glyphicon glyphicon-remove delete" style='color:red;'></span>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </table>
            </div>
        </div>
        <!-- /.row -->
        <hr/>
</div><!--end leftsideof from-->

 <br/><br/><hr/><hr/>

</div>
@endsection


    
