@extends('layouts.main')

<div class='col-12'>
    overall rating is {{$averageRating}}
    <div id='overall-rating'></div>
</div>

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
