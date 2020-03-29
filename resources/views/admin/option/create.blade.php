@extends('admin.layout.admin')
@section('content')

<div class="card">
    

    <div class="card-body">
        <form method="POST" action="{{ route("option.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="question_id">Question</label>
                <select class="form-control select2 {{ $errors->has('question') ? 'is-invalid' : '' }}" name="question_id" id="question_id" required>
                    @foreach($questions as $id => $question)
                        <option value="{{ $id }}" {{ old('question_id') == $id ? 'selected' : '' }}>{{ $question }}</option>
                    @endforeach
                </select>
                @if($errors->has('question_id'))
                    <div class="invalid-feedback">
                        {{ $errors->first('question_id') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label class="required" for="option_text">Option_text</label>
                <textarea class="form-control {{ $errors->has('option_text') ? 'is-invalid' : '' }}" name="option_text" id="option_text" required>{{ old('option_text') }}</textarea>
                @if($errors->has('option_text'))
                    <div class="invalid-feedback">
                        {{ $errors->first('option_text') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="points">Points</label>
                <input class="form-control {{ $errors->has('points') ? 'is-invalid' : '' }}" type="number" name="points" id="points" value="{{ old('points') }}" step="1">
                @if($errors->has('points'))
                    <div class="invalid-feedback">
                        {{ $errors->first('points') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    Save
                </button>
            </div>
        </form>
    </div>
</div>



@endsection