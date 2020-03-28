@extends('admin.layout.admin')

@section('content')
   
    <div class="row">        
        @foreach ($categoryData as $item)
            <div class="small-3 medium-3 large-3 columns">
                <div class="card" style="width: 18rem;">
                    
                    <div class="card-body">
                        <h5 class="card-title">
                            Category Name :
                        </h5>
                        <p class="card-text">
                            {{$item->name}}
                        </p>                  
                    </div>                    
                </div>
            </div>    
        @endforeach
        
    </div>
    <select name="category" id="">
        @foreach ($categoryData as $item)
           <option value="{{ $item->name }}">{{ $item->name }}</option>
           @endforeach
    </select>  
@endsection