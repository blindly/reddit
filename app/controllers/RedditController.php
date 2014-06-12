<?php

class RedditController extends BaseController {

	public function showHot()
	{
		$listingUrl = 'http://www.reddit.com/r/browsergames/hot.json?limit=100';
		$listing = json_decode( file_get_contents( $listingUrl ) );

		return View::make('reddit.listing')
			->with('children', $listing->data->children);
	}

	public function showTop()
	{
		$listingUrl = 'http://www.reddit.com/r/browsergames/top.json?limit=100';
		$listing = json_decode( file_get_contents( $listingUrl ) );

		return View::make('reddit.listing')
			->with('children', $listing->data->children);
	}

	public function showNew()
	{
		$listingUrl = 'http://www.reddit.com/r/browsergames/new.json?limit=100';
		$listing = json_decode( file_get_contents( $listingUrl ) );

		return View::make('reddit.listing')
			->with('children', $listing->data->children);
	}

	public function showDebug()
	{
		$listingUrl = 'http://www.reddit.com/r/browsergames/hot.json?limit=100';
		$listing = json_decode( file_get_contents( $listingUrl ) );

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
