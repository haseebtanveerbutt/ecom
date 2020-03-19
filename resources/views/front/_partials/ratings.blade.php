<?php
                
    $isHalf = ($myRating %2 != 0);
?>
    @foreach($ratings as $index => $rating) 
        <span class="fa fa-stack" style="width:1em">
            @if($isHalf)                            
                @for( $i=0 ;  $i<$c ; $i++)
                @endfor    
                    <i class="fas fa-star-half fa-stack-1x"></i>
            @endif 
        </span>
    @endforeach

