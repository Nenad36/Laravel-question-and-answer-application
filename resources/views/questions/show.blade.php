@extends('questions.layouts.master')
@section('content')

    <div class="uk-section uk-section-muted">
        <div class="uk-container">

            <div class="uk-background-default uk-border-rounded uk-box-shadow-small">
                <div class="uk-container uk-container-xsmall uk-padding-large">
                    <div class="d-flex align-items-center mb-4">
                        <h1 class="uk-article-title">{{ $question->title }}</h1>
                        <div class="ml-auto">
                            <a href="{{ route('questions.index') }}" class="btn btn-outline-secondary">Back to all Questions</a>
                        </div>
                    </div>
                    <hr>


                    <article class="uk-article">
                        <form action="{{ route('questions.update', $question->id) }}" method="post">
                                {!! $question->body_html !!}

                                     @include('shared.vote', [
                                       'model' => $question
                                     ])

                                <div class="float-right">
                                    @include('shared.author', [
                                       'model' => $question,
                                       'label' => 'asked'
                                     ])
                                </div>
                        </form>
                    </article>

                </div>
            </div>
        </div>

        @include ('answers.index', [
          'answers' => $question->answers,
          'answersCount' => $question->answers_count,
       ])
        @include ('answers.create')

    </div>

@endsection