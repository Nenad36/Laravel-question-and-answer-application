<div class="uk-container mt-4">
    <div class="uk-background-default uk-border-rounded uk-box-shadow-small">
        <div class="uk-container uk-container-xsmall uk-padding-large">
            <div class="row">
                <div class="col-md-12">
                    <div class="card-title">
                        <h2>Your Answer</h2>
                    </div>
                    <hr>
                    <form action="{{ route('questions.answers.store', $question->id) }}" method="post">
                        @csrf
                        <div class="form-group">
                            <textarea class="form-control {{ $errors->has('body') ? 'is-invalid' : '' }}" rows="7" name="body"></textarea>
                            @if ($errors->has('body'))
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('body') }}</strong>
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-lg btn-outline-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

