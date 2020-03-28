@extends('admin.layout.admin')

@section('content')
    <form action="{{ route('category.store')  }}" method="post" enctype="multipart/form-data">
        @if (session('msg'))
            <div class="alert alert-success">
                {{ session('msg') }}
            </div>
        @endif
        @csrf
        <div class="form-group">
        <label for="email">Add Course Category</label>
        <input name="name" type="text" class="form-control" id="email">
        </div>
        
        {{-- <div class="form-group">
            <label for="exampleFormControlSelect1">Size</label>
            <select name="size" class="form-control" id="exampleFormControlSelect1">
                <option value="samll">samll</option>
                <option value="medium">Medium</option>
                <option value="large">Large</option>        
            </select>
        </div> --}}
        
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
@endsection