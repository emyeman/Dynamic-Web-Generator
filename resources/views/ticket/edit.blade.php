@extends('layouts.reseller')

@section('content')

<section class="main-content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                        <div>
                        <img style="min-width: 30%; margin-left: 400px;" src="{{url('assets/reseller_assets/images/14-b.png')}}" class="img-responsive"> 
                        </div>
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
                                    <th>ID</th>
                                    <th>Content</th>
                                    <th>Status</th>
                                    <th>Delete</th>
                                </tr>
                                <?php $index=1;?>
                                @foreach ($tickets as $ticket)

                                <tr>
                                    <td><?php echo $index;?></td>
                                    <td>{{$ticket->subject}}<br/><p>{{substr($ticket->message,0,100)}}</p></td>
                                    <td>@if($ticket->is_solved==0)
                                            <a class="btn btn-danger" href="#">Unsolved<span class="glyphicon glyphicon-remove"></span></a> 

                                            <?php echo "unsolved";?>
                                        @else
                                            <a class="btn btn-success" href="#">Solved<span class="glyphicon glyphicon-remove"></span></a>
                                            <?php echo "solved";?>
                                        @endif
                                    </td>
                                    
                                    <td><span style="color:red;" class="glyphicon glyphicon-remove delete" id="{{$ticket->id}}"></span></td>

                                </tr>
                                <?php $index+=1;?>
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