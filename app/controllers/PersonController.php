<?php 

class PersonController extends BaseController {

	public function pageMake()
	{
		return View::make('person');
	}
}