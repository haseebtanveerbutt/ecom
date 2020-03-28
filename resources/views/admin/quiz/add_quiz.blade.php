@extends('admin.layout.admin')

@section('content')
    <div class="card-body">
        
        <form method="POST" action="{{ route("quiz.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="category_id">Select Course Category</label>
                <select class="form-control select2 {{ $errors->has('category') ? 'is-invalid' : '' }}" name="category_id" id="category_id" required>
                
                    @foreach($categories as $id => $category)
                        <option value="{{ $id }}" {{ old('category_id') == $id ? 'selected' : '' }}>{{ $category }}</option>
                    @endforeach
                </select>
                @if($errors->has('category_id'))
                    <div class="invalid-feedback">
                        {{ $errors->first('category_id') }}
                    </div>
                @endif
                {{-- <span class="help-block">{{ trans('cruds.question.fields.category_helper') }}</span> --}}
            </div>
            <div class="form-group">
                <label class="required" for="question_text">Text Question</label>
                <textarea class="form-control {{ $errors->has('question_text') ? 'is-invalid' : '' }}" name="question_text" id="question_text" required>{{ old('question_text') }}</textarea>
                @if($errors->has('question_text'))
                    <div class="invalid-feedback">
                        {{ $errors->first('question_text') }}
                    </div>
                @endif
                {{-- <span class="help-block">{{ trans('cruds.question.fields.question_text_helper') }}</span> --}}
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    save
                </button>
            </div>
        </form>
    </div>
@endsection