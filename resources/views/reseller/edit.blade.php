@extends('layouts.reseller')

@section('content')

<div class="container">

<hr class="col-md-10 col-md-offset-1"/>


<div class="col-md-10 col-md-offset-1">

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {!!Form::open(['route'=>['reseller.update',  $user->id ],'method'=>'patch','files'=>true , 'class'=>'form-horizontal']) !!}

    {{ method_field('patch') }}

        <div class='form-group'>
            <label class='col-md-2'>Name</label>
            <div class='col-md-8 input-group'>
                <span class='input-group-addon'>
                <i class='glyphicon glyphicon-pencil'></i>
                </span>
                <input value='{{ $user->name }}' class='form-control' name='name' type='text'/>
            </div>
        </div>  

        <div class='form-group'>
            <label class='col-md-2'>Email</label>
            <div class='col-md-8 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-list'></i></span>
                    <input value='{{ $user->email }}' class='form-control' name='email' type='text'/>
            </div>
        </div>

        <div class='form-group'>
            <label class='col-md-2'>Mobile</label>
            <div class='col-md-8 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-list'></i></span>
                    <input value='{{ $user->mobile }}' class='form-control' name='mobile' type='text'/>
            </div>
        </div>


        <div class='form-group'>
            <label class='col-md-2'>Image</label>
            <div class='col-md-8 input-group'>
                
                    <label class="btn btn-default btn-file">
                                Browse <input id="image" type="file" name="image" style="display: none;">
                            </label>
                            {{-- <img id="profile" style="width:50px;height:50px;" class="col-md-offset-2" src="{{ $user->image }}" alt=""> --}}
            </div>
        </div>
        <span class='col-md-2'></span>
        <input type='submit' class='col-md-1 col-md-offset-0 btn btn-default' name='ok' value='update' />
        
    {!!Form::close() !!}
</div><!--end leftsideof from-->
</div>
</div>

@endsection
