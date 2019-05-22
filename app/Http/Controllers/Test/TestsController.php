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

        $results = $this->calculateSomme($_POST['rolls']);
        return redirect('tests')->with('results', $results);
    }

    public function calculateSomme($query) {

        $results = array();
        try {
            $query = trim($query);
            $rolls = explode(" ", $query);
            if (empty($rolls[0])) {
                $rolls[0] = '1d6';
            }

            foreach ($rolls as $roll) {
                if (strlen($roll) != 3 || $roll[1] != 'd') {
                    throw new \Exception('Format XdY non respecté pour un des lancés.');
                } else if (!is_numeric($roll[0]) || !is_numeric($roll[2])) {
                    throw new \Exception('Le nombre de dés ou le nombre de faces n\'est pas de type numérique.');
                }

                $rollTemp = explode('d' , $roll);
                $number_dice = (int) $rollTemp[0];
                $number_faces = (int) $rollTemp[1];

                $somme = 0;
                for($i = 0; $i < $number_dice; $i++) {
                    $somme += rand(2, $number_faces);
                }
                $results[$roll] = $somme;
            }

        } catch (\Exception $e) {
            echo $e->getMessage();
            exit;
        }
        return $results;
    }
}