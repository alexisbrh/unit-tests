<?php


namespace App\Http\Controllers\Tests;

use App\Http\Controllers\Controller;


class TestsController extends Controller
{
    public function __construct()
    {
    }

    public function index() {

        $result = 'Hello world';
        return view('tests', ['result' => $result]);
    }
}