@extends('layouts.main')
@section('content')
<form action="{{route('patient-crud.create')}}" >
    @csrf
    <button class="btn btn-primary" type="submit">Add Patient</button>
</form>            
    <div class="row">    
        
        
        @foreach ($data_p as $data)
            <div class="small-3 medium-3 large-3 columns">
                <div class="card" style="width: 18rem;">
                    <a href="{{url('/shirt')}}">
                      <img class="card-img-top" src="{{url('patient_images', $data->image)}}" alt="Card image cap">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">
                            Name:
                        </h5>
                        <p class="card-text">
                            {{$data->name}}
                        </p>
                        <h5 class="card-title">
                            Email:
                        </h5>
                        <p class="card-text">
                            {{$data->email}}
                        </p>
                        <h5 class="card-title">
                            Date of Bith
                        </h5>
                        <p class="card-text">
                            {{$data->birthDate}}
                        </p>
                        <h5 class="card-title">
                            Gender
                        </h5>
                        <p class="card-text">
                            {{$data->gender}}
                        </p>
                        <h5>
                            Rating:
                        </h5>
                                
                    <form action="{{route('patient-crud.edit',$data->id)}} " method="post" >
                        @csrf
                        <button class="btn btn-success" type="submit">Edit Detail</button>
                    </form>
                    <form action="{{route('patient-crud.destroy',$data->id)}}" method="" >
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                    </div>                    
                </div>
            </div>    
        @endforeach
    </div>
    
@endsection