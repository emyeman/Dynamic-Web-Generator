@extends('layouts.app')

@section('content')
<div class="container">
<div class="col-sm-9">
      <h2>edit User</h2>
      <br><br>
      @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif
      {!!Form::open(['route'=>['user.update', Auth::user()->id ],'method'=>'patch','files'=>true]) !!}
      {{ method_field('patch') }}
        <div class='form-group has-warning'>
            <label class='col-md-2'>Name</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'>
                <i class='glyphicon glyphicon-pencil'></i>
                </span>
                <input value='{{ $user->name }}' class='form-control' name='name' type='text'/>
            </div>
        </div>  

        <div class='form-group has-warning'>
            <label class='col-md-2'>Email</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-list'></i></span>
                    <input value='{{ $user->email }}' class='form-control' name='email' type='text'/>
            </div>
        </div>


        <div class='form-group has-warning'>
            <label class='col-md-2'>Image</label>
            <div class='col-md-10 input-group'>
                
                    <label class="btn btn-primary btn-file">
                                Browse <input id="image" type="file" name="image" style="display: none;">
                            </label>
                            <img id="profile" class="col-md-offset-2" src="{{ Auth::user()->image }}" alt="">
            </div>
        </div>
         
        <span class='col-md-2'></span>
        <input type='submit' class='col-md-10 btn btn-primary btn-lg' name='ok' value='update' />
    {!!Form::close() !!}

      <br><br>
      <br><br>
</div><!--end leftsideof from-->

 <br/><br/><hr/><hr/>

</div>
</div>
@endsection


    
