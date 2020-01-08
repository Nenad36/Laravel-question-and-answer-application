@extends('questions.layouts.master')
@section('content')

    <div class="uk-section uk-section-muted">
        <div class="uk-container">

            <div class="uk-background-default uk-border-rounded uk-box-shadow-small">
                <div class="uk-container uk-container-xsmall uk-padding-large">

                    <div class="d-flex align-items-center mb-4">
                        <h1 class="uk-article-title">Ask Question</h1>
                        <div class="ml-auto">
                            <a href="{{ route('questions.index') }}" class="btn btn-outline-secondary">Back to all Questions</a>
                        </div>
                    </div>

                    <article class="uk-article">
                        <form action="{{ route('questions.store') }}" method="post">
                            @include ("questions.form", ['buttonText' => "Ask Question"])
                        </form>
                    </article>

                </div>
            </div>

        </div>
    </div>

@endsection