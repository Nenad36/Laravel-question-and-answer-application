<div class="uk-article-content post">
    <div class="d-flex flex-fill counters">
        <ul class="uk-breadcrumb">
            <li class="vote">
                <strong>{{ $question->votes_count }}</strong> {{ str_plural('vote', $question->votes_count) }}
            </li>

            <li class="status {{ $question->status }}">
                <strong>{{ $question->answers_count }}</strong>
                <div class="mr-4">{{ str_plural('answer', $question->answers_count) }}</div>
            </li>
            <li class="view">
                <strong>{{ $question->views }}</strong> {{ str_plural('view', $question->views) }}
            </li>
        </ul>
    </div>

    <div class="d-flex align-items-center">
        <h3 class="mt-0"><a href="{{ $question->url }}">{{ $question->title }}</a></h3>
        <div class="ml-auto">

            @can('update', $question)
                <a href="{{ route('questions.edit', $question->id) }}" class="btn btn-sm btn-outline-info">Edit</a>
            @endcan

            @can('delete', $question)
                <form class="form-delete" method="post" action="{{ route('questions.destroy', $question->id) }}">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            @endcan

        </div>
    </div>

    <p class="lead">
        Asked by
        <a href="{{ $question->user->url }}">{{ $question->user->name }}</a>
        <small class="text-muted">{{ $question->create_date }}</small>
    </p>
    <p class="uk-text-lead uk-text-muted">{{ $question->excerpt(350) }}</p>

</div>

