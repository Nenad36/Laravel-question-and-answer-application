@if($answersCount > 0)
    <div class="uk-container mt-4">
        <div class="uk-background-default uk-border-rounded uk-box-shadow-small">
            <div class="uk-container uk-container-xsmall uk-padding-large">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-title">
                            <h2>{{ $answersCount . " " . str_plural('Answer', $answersCount) }}</h2>
                        </div>
                        <hr>
                        @include('questions.layouts.messages')

                        @foreach($answers as $answer)
                            @include('answers.answer')
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif