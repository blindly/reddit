@extends('reddit.master')

@section('content')
	<table class="table table-condensed sortable" >
		<tr>
			<th>Title</th>
			<th>Website</th>
			<th>Score</th>
			<th>Comments</th>
		</tr>
		@foreach ($children as $child)

			@if ( $child->data->domain != 'self.BrowserGames' )
				<tr>
					<td>
						{{ $child->data->title }}
					</td>
					<td>
						<a target="_blank" href="http://{{ $child->data->domain }}">{{ $child->data->domain }}</a>
					</td>

					<td>
						{{ $child->data->score }}
					</td>

					<td>
						<a target="_blank" href="http://reddit.com{{ $child->data->permalink }}">{{ $child->data->num_comments }}</a>
					</td>
				</tr>
			@endif

		@endforeach
	</table>
@stop
