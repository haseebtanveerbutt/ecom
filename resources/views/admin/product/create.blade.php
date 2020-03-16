@extends('admin.layout.admin')

@section('content')

    <h3>Add Product</h3>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            {{-- <form action="admin.product.store" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="email">Name:</label>
                  <input name="name" type="text" class="form-control" id="email">
                </div>
                <div class="form-group">
                  <label for="pwd">Description</label>
                  <input name="description" type="text" class="form-control" id="pwd">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Size</label>
                    <select name="size" class="form-control" id="exampleFormControlSelect1">
                      <option value="samll">samll</option>
                      <option value="medium">Medium</option>
                      <option value="large">Large</option>
                      
                    </select>
                  </div>
                <div class="form-group">
                    <label for="">Category</label>
                    <input type="text" value="{{ $categories->name }}" name class="form-control-file" id="exampleFormControlFile1">
                </div>    
                <div class="form-group">
                    <label for="">Image</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>
                
                <button type="submit" class="btn btn-default">Submit</button>
              </form> --}}
            {!! Form::open(['route' => 'product.store', 'method' => 'POST', 'files' => true, 'data-parsley-validate'=>'']) !!}

            <div class="form-group">
                {{ Form::label('name', 'Name') }}
                {{ Form::text('name', null, array('class' => 'form-control','required'=>'','minlength'=>'5')) }}
            </div>

            <div class="form-group">
                {{ Form::label('description', 'Description') }}
                {{ Form::text('description', null, array('class' => 'form-control')) }}
            </div>
            <div class="form-group">
                {{ Form::label('price', 'Price') }}
                {{ Form::text('price', null, array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('size', 'Size') }}
                {{ Form::select('size', [ 'small' => 'Small', 'medium' => 'Medium','large'=>'Large'], null, ['class' => 'form-control']) }}
            </div>

            <div class="form-group">
                {{ Form::label('category_id', 'Categories') }}
                {{ Form::select('category_id', [1=>'men',2=>'girl'], null, ['class' => 'form-control','placeholder'=>'Select Category']) }}
            </div>
            {{-- <Input  type="hidden"  name="category_id" value="{{$categories}}" > --}}
            <div class="form-group">
                {{ Form::label('image', 'Image') }}
                {{ Form::file('image',array('class' => 'form-control')) }}
            </div>

             {{ Form::submit('Create', array('class' => 'btn btn-default')) }}
            {!! Form::close() !!}

        </div>
    </div>



@endsection