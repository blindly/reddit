@extends('reddit.readit')


@section('content')
<table class="table table-condensed sortable" >
	<tr>
		<th>Title</th>
		<th>Domain</th>
		<th>Score</th>
		<th>Comments</th>
	</tr>
	@foreach ($children as $child)

		<tr>
			<td>
				{{ $child->data->title }}
			</td>
			<td>
				<a target="_blank" href="{{ $child->data->url }}">
					{{ $child->data->domain }}
				</a>
			</td>

			<td>
				{{ $child->data->score }}
			</td>

			<td>
				@if ( $child->data->num_comments > 0 )
					<a href="http://reddit.borke.us/r/{{ $child->data->subreddit }}/comments/{{ $child->data->id }}">{{ $child->data->num_comments }}</a>
				@else
					{{ $child->data->num_comments }}
				@endif
			</td>
		</tr>

	@endforeach
</table>
@stop
