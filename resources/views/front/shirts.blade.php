@extends('layouts.main')
@section('title','Shirts')
@section('content')
    <div class="row">        
        @foreach ($shirts as $shirt)
            <div class="small-3 medium-3 large-3 columns">
                <div class="card" style="width: 18rem;">
                    <a href="{{url('/shirt')}}">
                      <img class="card-img-top" src="{{url('upload', $shirt->image)}}" alt="Card image cap">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">
                            Name:
                        </h5>
                        <p class="card-text">
                            {{$shirt->name}}
                        </p>
                        <h5 class="card-title">
                            Description:
                        </h5>
                        <p class="card-text">
                            {{$shirt->description}}
                        </p>
                        <h5 class="card-title">
                            Size:
                        </h5>
                        <p class="card-text">
                            {{$shirt->size}}
                        </p>
                        <h5 class="card-title">
                            Price:
                        </h5>
                        <p class="card-text">
                            {{'$'.$shirt->price}}
                        </p>
                        <h5>
                            Rating:
                        </h5>
                                
                       <form action="{{URL::to('')}}/saveRate" method="post">
                            <div id="star-rating-input"></div>
                            @csrf
                            <input type="hidden" name="star"  id="user-rating" class="form-control form-control-sm">
                            <button class="btn btn-primary" type="submit">Save Rating</button>
                        </form>
                    </div>                    
                </div>
            </div>    
        @endforeach
    </div>
@endsection

@push('footerScripts')
    <script src="{{asset('js/rating.js')}}"></script>
@endpush

@section('customScripts')
   <script>
       $("#star-rating-input").rating({
            "half": true,
            "click": function (e) {
                console.log(e);
                $("#user-rating").val(e.stars);
            }
        });
    </script>
@endsection