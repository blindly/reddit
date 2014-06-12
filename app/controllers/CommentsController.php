<?php

class CommentsController extends BaseController {

	public function showComments( $subreddit, $commentId )
	{
		$listingUrl = "http://www.reddit.com/r/$subreddit/comments/$commentId/.json";
		$listing = json_decode( file_get_contents( $listingUrl ) );

		return View::make('reddit.comments')
			->with('submissions', $listing[0]->data->children)
			->with('comments', $listing[1]->data->children)
			->with('subreddit', $subreddit);
	}
}
