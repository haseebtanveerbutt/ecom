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
<?php 
/*
{{  $averageRating  }}
@section('body')

    <?php
        $averageRating = ['averageRating' => $averageRating];
        $myRating = 3;
        $isHalf = ($myRating %2 != 0);
    ?>
{{-- @include('_partials/rating', ['averageRating2'=>$averageRating2, 'myRating'=>$myRating, 'c'=>$c]) --}}

    @php
        $averageRating
    @endphp  

    @foreach(range(1,5) as $i)
        <span class="fa-stack" style="width:1em">
            <i class="far fa-star fa-stack-1x"></i>
            @if($averageRating >0)
                @if($averageRating >0.5)
                    <i class="fas fa-star fa-stack-1x"></i>
                @else
                    <i class="fas fa-star-half fa-stack-1x"></i>
                @endif
            @endif
            @php $averageRating--; @endphp
        </span>
    @endforeach


            {{-- @php $rating = 3.1; @endphp   --}}

    <p>
        <div class="placeholder" style="color: lightgray;">
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <span class="small">({{ $averageRating }})</span>
        </div>

        <div class="overlay" style="position: relative;top: -22px;">
            
            @while($averageRating>0)
                @if($averageRating >0.5)
                    <i class="fas fa-star"></i>
                @else
                    <i class="fas fa-star-half"></i>
                @endif
                @php $averageRating--; @endphp
            @endwhile

        </div> 
    </p> --}}

{{-- 
<span class="review-stars" style="color: #1e88e5;">
    <!-- ////////////// STAR RATE CHECKER ////////////// -->
        @if($averageRating <= 0)
            <i class="fa fa-star-o" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
        @elseif($averageRating === 1)
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
        @elseif($averageRating === 2)
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
        @elseif($averageRating === 3)
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
        @elseif($averageRating === 4)
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
        @elseif($averageRating >= 5)
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
        @endif
        <!-- ///////////////////////////////////////////// -->
    </span> --}}

    
    
    @if(($averageRating > 5) && ($averageRating == 5))  
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
    @endif
    <br>
    @if(($averageRating < 4) && ( $averageRating == 4))  
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star "></span>
    @endif
    <br>
    @if(($averageRating <= 3) && ($averageRating == 3))  
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star "></span>
        <span class="fa fa-star "></span>
    @endif
    <br>
    @if(($averageRating < 2) && ($averageRating == 2))  
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star "></span>
        <span class="fa fa-star "></span>
        <span class="fa fa-star "></span>
    @endif
    <br>
    @if(($averageRating < 1) && b   ($averageRating == 1))  
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star "></span>
        <span class="fa fa-star "></span>
        <span class="fa fa-star "></span>
        <span class="fa fa-star "></span>
    @endif 

    {{-- @foreach($averageRating as $index => $rating) 
        <span class="fa fa-stack" style="width:1em">         
            @if($isHalf)
                <i class="fas fa-star-half fa-stack-1x"></i>
            @endif 
            @if($rating > $myRating)
                <i class="fas fa-star-empty fa-stack-1x"></i>
            @endif  
        </span>
    @endforeach --}}

@endsection

*/
?>