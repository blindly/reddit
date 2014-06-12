@extends('reddit.readit')

@section('content')

<div class="row">
	@foreach ($submissions as $submission)

		<div>
			<h3>{{ $submission->data->title }}</h3>
			<span><a href="{{ $submission->data->url }}">{{ $submission->data->url }}</a></span>
			<span class="pull-right"> / Score: {{ $submission->data->score }}</span>
			<span class="pull-right">Comments: {{ $submission->data->num_comments }}</span>
		</div>

	@endforeach

</div>

<div class="row">
	@foreach ($comments as $comment)
	<div class="well">
		<span>{{ $comment->data->author }}</span>
		<span class="pull-right">Ups / Downs: {{ $comment->data->ups }} / {{ $comment->data->downs }}</span>
		<pre>{{ $comment->data->body }}</pre>

			@if ( $comment->data->replies )
				@foreach ($comment->data->replies->data->children as $reply)

					<div class="well">
						<span>{{ $reply->data->author }}</span>
						<span class="pull-right">Ups / Downs: {{ $reply->data->ups }} / {{ $reply->data->downs }}</span>
						<pre>{{ $reply->data->body }}</pre>
					</div>

				@endforeach
			@endif
	</div>
	@endforeach
</div>
@stop

