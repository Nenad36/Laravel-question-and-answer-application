<div class="media post">
    <div class="media-body">
        {!! $answer->body_html !!}

        @include('shared.vote', [
            'model' => $answer
        ])

        <div class="float-right">
            @include('shared.author', [
                'model' => $answer,
                'label' => 'answered'
            ])
        </div>

        <div class="answer-button float-right mr-4">
            @can('update', $answer)
                <a @click.prevent="editing = true" class="btn btn-sm btn-outline-info">Edit</a>
            @endcan

            @can('delete', $answer)
                <form class="form-delete" method="post" action="{{ route('questions.answers.destroy', [$question->id, $answer->id]) }}">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            @endcan
        </div>
    </div>
</div>