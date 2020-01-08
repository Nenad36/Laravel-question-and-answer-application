@extends('questions.layouts.master')
@section('content')

    <div class="uk-section uk-section-muted">
        <div class="uk-container">

            <div class="uk-background-default uk-border-rounded uk-box-shadow-small">
                <div class="uk-container uk-container-xsmall uk-padding-large">

                    <div class="d-flex align-items-center mb-5">
                        <h1 class="uk-article-title">All Questions</h1>
                        <div class="ml-auto">
                            <a href="{{ route('questions.create') }}" class="btn btn-outline-secondary">Ask Question</a>
                        </div>
                    </div>

                    <article class="uk-article">



                        @include('questions.layouts.messages')
                        @forelse($questions as $question)
                        @include('questions.excerpt')
                        @empty
                           <div class="alert alert-warning">
                               <strong>Sorry</strong> There are no questions available.
                           </div>
                       @endforelse
                       <div class="mt-3">{{ $questions->links() }}</div>

                    </article>

                </div>
            </div>

        </div>
    </div>

@endsection