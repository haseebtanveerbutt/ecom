@extends('layouts.main')

@section('body')
    <div class="row">
        <div class="col-12 col-md-6" style="font-size: 2em;">
            <h5>Example with half stars</h5>
            <div id="star-rating-input"></div>
        </div>
       <form action="{{URL::to('')}}/saveRate" method="post">
            @csrf
            <input type="hidden" name="star"  id="user-rating" class="form-control form-control-sm">
            <button type="submit">save rating</button>
        </form>
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
