@extends('questions.layouts.master')
@section('content')

<div class="uk-container mt-4">
    <div class="uk-background-default uk-border-rounded uk-box-shadow-small">
        <div class="uk-container uk-container-xsmall uk-padding-large">
            <div class="row">
                <div class="col-md-12">
                    <div class="card-title">
                        <h2>Editing answer for question: <strong>{{ $question->title }}</strong></h2>
                    </div>
                    <hr>
                    <form action="{{ route('questions.answers.update', [$question->id, $answer->id]) }}" method="post">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <textarea class="form-control {{ $errors->has('body') ? 'is-invalid' : '' }}" rows="7" name="body">{{ old('body', $answer->body) }}</textarea>
                            @if ($errors->has('body'))
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('body') }}</strong>
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-lg btn-outline-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
