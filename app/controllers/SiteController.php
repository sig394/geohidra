<?php

class SiteController extends BaseController {


	public function index()
	{
		$banners = Banners::all();
		$info = Info::orderBy('order','asc')->take(3)->get();
		return View::make('site.index')->with('info',$info)->with('banners',$banners);
	}

}
