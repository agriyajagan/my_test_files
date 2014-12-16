<?php

class NavigatorsController extends BaseController {

    public function __construct() {
        # User authentication filter
        $this->beforeFilter('auth', array('except' => array('index', 'store')));
    }

    public function index() {
        return View::make('navigators.home');
    }

    public function store() {
        $post_array = Input::all();
        $arr_response = App\Libraries\Leadexec::sendCurlRequest($post_array);

        return Redirect::to('navigators')->with(array('type' => $arr_response['status'], 'message' => $arr_response['message']));
    }

}
