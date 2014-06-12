<?php

class ReaditController extends BaseController {

	public function showHot( $subreddit )
	{
		$listingUrl = "http://www.reddit.com/r/$subreddit/hot.json?limit=50";
		$listing = json_decode( file_get_contents( $listingUrl ) );

		return View::make('reddit.list')
			->with('children', $listing->data->children)
			->with('subreddit', $subreddit);
	}

	public function showTop($subreddit)
	{
		$listingUrl = "http://www.reddit.com/r/$subreddit/top.json?limit=50";
		$listing = json_decode( file_get_contents( $listingUrl ) );

		return View::make('reddit.list')
			->with('children', $listing->data->children)
			->with('subreddit', $subreddit);
	}

	public function showNew($subreddit)
	{
		$listingUrl = "http://www.reddit.com/r/$subreddit/new.json?limit=50";
		$listing = json_decode( file_get_contents( $listingUrl ) );

		return View::make('reddit.list')
			->with('children', $listing->data->children)
			->with('subreddit', $subreddit);
	}

	public function showDebug($subreddit)
	{
		$listingUrl = "http://www.reddit.com/r/$subreddit/hot.json?limit=50";
		$listing = json_decode( file_get_contents( $listingUrl ) );

		print_r(Request::segment(3));

		foreach ( $listing->data->children as $children )
		{
			if ( $children->data->domain != 'self.BrowserGames' )
			{
				echo "<pre>";
				print_r($children);
				echo "</pre>";
			}
		}
	}
}
