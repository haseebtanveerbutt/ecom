@extends('layouts.main')

@section('headStylings')
    <link href='abc' rel="stylesheet" />
@endsection

@section('bodyScripts')
<script src="{{asset('js/rating.js')}}"></script>

@endsection

@section('content')
    <section class="hero text-center">
        <br/>
        <br/>
        <br/>
        <br/>
        <h2>
            <strong>
                Hey! Welcome to MC- Mykey's Store
            </strong>
        </h2>
        <br>
        <a href="{{url('/shirts')}}">
            <button class="button large">Check out My Shirts</button>
        </a>
    </section>
    <br/>
    <div class="subheader text-center">
        <h2>
            MyKey&rsquo;s Latest Shirts
        </h2>
    </div>

    <div class="row">

         
        @forelse($shirts->chunk(4) as $chunk)
            @foreach($chunk as $shirt)
            <div class="small-3 medium-3 large-3 columns">
                <div class="card" style="width: 18rem;">
                    <a href="{{url('/shirt')}}">
                        <img class="card-img-top" src="{{url('upload', $shirt->image)}}" alt="Card image cap">
                    </a>
                    <div class="card-body">
                    <h5 class="card-title">Name:</h5>
                    <p class="card-text">{{ $shirt->name}}</p>
                    <h5 class="card-title">Description:</h5>
                    <p class="card-text">{{ $shirt->description}}</p>
                    <h5 class="card-title">Size:</h5>
                    <p class="card-text">{{ $shirt->size}}</p>
                    <h5 class="card-title">Price:</h5>
                    <p class="card-text">{{ $shirt->price.'$'}}</p>
                    <div class='col-12'>
                        overall rating is {{$averageRating}}
                        <div id='overall-rating'></div>
                    </div>
                    </div>
                </div>
            </div>
            @endforeach 
            
        @empty
            <h3>No shirts</h3>
        @endforelse
    </div>    
@endsection

@push('footerScripts')
    <script src="{{asset('js/rating.js')}}"></script>
@endpush

@section('customScripts')
    <script>
        $( document ).ready(function() {
            $("#overall-rating").rating({
                "half": true,
                'value': <?php echo $averageRating; ?>,
                'hoverState': false,
                'readonly': true
            });
        });
    </script>
@endsection