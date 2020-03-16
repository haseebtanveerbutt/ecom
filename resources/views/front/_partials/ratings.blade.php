<?php
/*
                @php $rating = 1.6; @endphp  

            @foreach(range(1,5) as $i)
                <span class="fa-stack" style="width:1em">
                    <i class="far fa-star fa-stack-1x"></i>

                    @if($rating >0)
                        @if($rating >0.5)
                            <i class="fas fa-star fa-stack-1x"></i>
                        @else
                            <i class="fas fa-star-half fa-stack-1x"></i>
                        @endif
                    @endif
                    @php $rating--; @endphp
                </span>
            @endforeach
                */
                
                // $ratings = [1 => '1', 2 => '2', 3 => '3', 4 => '4', 5 =>'5'];
                // $myRating = 3.5;
                
                $isHalf = ($myRating %2 != 0);
                // $ratingsList = contantHelper::getAllRatings();
                // range(1,5) as $i)
?>
                {{-- @foreach($ratings as $index => $rating) 
                <span class="fa fa-stack" style="width:1em">
                    
                    @if($rating < $myRating)
                        <i class="fas fa-star fa-stack-1x"></i>
                    @endif
                    @if($isHalf)
                        <i class="fas fa-star fa-stack-1x"></i>
                    @endif
                    @if($rating > $myRating)
                        <i class="fas fa-star-empty fa-stack-1x"></i>
                    @endif
                </span>
            @endforeach --}}
                @foreach($ratings as $index => $rating) 
                    <span class="fa fa-stack" style="width:1em">
                        
                        {{-- @if($rating < $myRating) --}}
                            {{-- <i class="fas fa-star-half-alt fa-stack-1x"></i> --}}
                            {{-- <i class="fas fa-star-half-alt fa-stack-1x"></i>
                        {{-- @endif --}}
                        @if($isHalf)
                            
                            @for( $i=0 ;  $i<$c ; $i++)
                             {{-- <i class="fas fa-star fa-stack-1x"></i> --}}
                            @endfor    
                                <i class="fas fa-star-half fa-stack-1x"></i>
                        @endif 
                        {{-- @if($rating > $myRating)
                            <i class="fas fa-star-empty fa-stack-1x"></i>
                        @endif  --}}
                    </span>
                @endforeach

