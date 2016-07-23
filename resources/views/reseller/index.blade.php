@extends('layouts.reseller')

@section('content')

<section class="main-content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Current Customers</h3>

                            <div class="box-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <tr>
                                    <th>User</th>
                                    <th>E-mail</th>
                                    <th>Image</th>
                                    <th>Mobile</th>
                                    <th>Dashboard</th>
                                    <th>Edit</th>
                                    <th>Site Settings</th>
                                    <th>Ban</th>
                                </tr>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td><img style="width:45px;height:30px;overflow:visible" src="{{ url('/') }}{{ $user->image }}" class="img-circle"></a></td>
                                    <td>{{ $user->mobile }}</td>
                                    
                                    <td><a href="{{ url('/reseller') }}/{{$user->id}}" class="btn btn-success">Access Dashboard</a>
                                    </td>
                                    <td>
                                        <a href="{{ url('/reseller') }}/{{$user->id}}/edit" class="btn btn-primary">Edit</a>
                                    </td>
                                    <td>
                                        <a href="{{ url('/site') }}/edit/{{$user->id}}" class="btn btn-primary">Edit Site</a>
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-adn">Ban</a>
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
@endsection