<?php


namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;


class TestsController extends Controller
{
    public function __construct()
    {
    }

    public function index() {

        $result = 'Hello world';
        return view('Test.tests', ['result' => $result]);
    }
}