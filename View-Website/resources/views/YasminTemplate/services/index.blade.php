@extends('YasminTemplate.layout.layout')

@section('services')

        <section id="service">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center wow fadeInDown">
                            <h2>Services</h2>    
                            <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt.</p>
                        </div>
                    </div>
                </div>
                <div class="row">

                	@foreach($services as $service)
                	  <div class="col-md-6 col-sm-12 wow fadeInLeft  serv">
                        <div class="media">
                            <a href="#" class="pull-left">
                                <button class="btn btn-default btn-icon" value="{{$service->icon}}" title="glyphicon-adjust" style="display: inline-block;"><i class="glyphicon {{$service->icon}}"></i></button>
                            </a>
                            <div class="media-body">
                                <h3>{{$service->title}}</h3>
                                <p>{{$service->description}}</p>
                            </div>
                        </div>

                    </div>
                	@endforeach
                   

                </div> <!-- end .row -->
            </div> <!-- end .container -->
        </section>

@stop
