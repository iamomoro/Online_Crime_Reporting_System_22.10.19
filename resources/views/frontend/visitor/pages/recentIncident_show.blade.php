@extends('frontend.visitor.layouts.master')

@section('title','Recent Incident')
    
@section('content')

<!-- SERVICES Page Header -->
<section id="blog-header" class="text-center text-light">
    <div class="container">
        <div class="row">
            <div class="col pt-5">
                <h1 class="text-light font-weight-bold">Recent Incident</h1>
            </div>
        </div>
    </div>
</section> 

<section class="forms" style="margin-bottom:30%">
        <div class="container">
            <div class="card-header d-flex align-items-center">
                {{-- <h1 class="text-info">View Complain</h1> --}}
            </div>
    
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            @php $i = 0 @endphp
                            @foreach ($complain->imageComplain as $item)
                                <li data-target="#carouselExampleIndicators" data-slide-to="{{$i++}}" class="active"></li>
                            @endforeach
                        </ol>
    
                        <div class="carousel-inner">
                            @php $i=0 @endphp
                            @foreach ($complain->imageComplain as $item)
                                @php $i++ @endphp
                                @if ($i==1)
                                    <div class="carousel-item active">
                                @else
                                        <div class="carousel-item">
                                @endif
                                            <img src="{{asset('uploads/complains/'.$item->image)}}" class="d-block w-100" height="300px" alt="...">
                                        </div>
                            @endforeach
                                    </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                                </a>
                        </div>
                    
                        {{-- <div>
                            <button class=" btn btn-danger" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                    Click Here To Read 
                            </button>
                            
                            <div class="collapse" id="collapseExample">
                                <div class="card card-body">
                                    <p class="card-text"><b>Complain Type: </b>{{$complain->crimeCategory->crimeCategoryName}}</p>
                                    <p class="card-text"><b>Complain Title: </b>{{$complain->title}}</p>
                                    <p class="card-text"><b>Description: </b>{{$complain->description}}</p>
                                    <p class="card-text"><b>Area: </b>{{$complain->city->cityName}}</p>
    
                                    <p class="card-text"><b>Late Long: </b>
                                    <a href="{{$complain->late_long}}" target="_blank">Click Here</a></p>
    
                                    <p class="card-text"><b>Address: </b>{{$complain->address}}</p>
    
    
                                    <p class="card-text"><small class="text-muted"><b>Last updated: </b> <i>{{$complain->created_at->format('F d, Y')}}</i></small></p>                    
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
            <div class="row">
                <div class="container">
                    <div class="card">
                        <div class="card-header">
                            <p class="card-text"><small class="text-muted"><b>Last updated: </b> <i>{{$complain->created_at->format('F d, Y')}}</i></small></p>
                        </div>
                        <div class="card-body">
                            <p class="card-text"><b> Type: </b>{{$complain->crimeCategory->crimeCategoryName}}</p>
                            <p class="card-text"><b>Complain Title: </b>{{$complain->title}}</p>
                            <p class="card-text"><b>Description: </b>{{$complain->description}}</p>
                            <p class="card-text"><b>City: </b>{{$complain->city->cityName}}</p>

                            <p class="card-text"><b>Late Long: </b>
                            <a href="{{$complain->late_long}}" target="_blank">Click Here</a></p>

                            <p class="card-text"><b>Address: </b>{{$complain->address}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {{-- </div> --}}
    </section>
    
@endsection