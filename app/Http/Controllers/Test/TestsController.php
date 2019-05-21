<?php


namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;


class TestsController extends Controller
{
    public function __construct()
    {

    }

    public function index() {

        return view('Test.tests');
    }

    public function submit() {

        $rolls = explode(' ', $_POST['rolls']);

        dd($rolls);

        $results = array();
        foreach ($rolls as $roll) {
            $rollTemp = explode('d' , $roll);
            $number_dice = (int) $rollTemp[0];
            $number_faces = (int) $rollTemp[1];

            $somme = 0;
            for($i = 0; $i < $number_dice; $i++) {
                $somme += rand(2, $number_faces);
            }
            $results[$roll] = $somme;
        }

        return redirect('tests')->with('results', $results);

    }
}