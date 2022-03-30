<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Spec;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;

class SpecController extends Controller
{

    //Problem 4 Advanced!
    //The following api gives you a list of planets with their aphelion distance to the sun
    //https://api.le-systeme-solaire.net/rest.php/bodies?data=englishName%2Caphelion%2CisPlanet&order=englishName&filter%5B%5D=bodyType%2Cneq%2CAsteroid&filter%5B%5D=bodyType%2Cneq%2CComet&filter%5B%5D=bodyType%2Cneq%2CMoon
    //The specs table has a property "descr" that contains 2 planets separated by a space, for example:
    //id": "98","descr": "Pluto Neptune"
    //Please output a list with the id, the 2 planets and their distance to each other
    //Example: 
    //"1": {
	//	"planets": "Mercury Jupiter",
	//	"planet0": 69816900,
	//	"planet1": 816620000,
	//	"distance": 746803100
	//},

    public function getDistance(Request $request) {
        $client = new \GuzzleHttp\Client();
    }
}