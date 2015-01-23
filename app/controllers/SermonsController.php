<?php


class SermonsController extends BaseController {

	private $data;

	public function index()
	{
		return View::make('sermons',array('sermons'=>array(1,2,3)));
	}

}