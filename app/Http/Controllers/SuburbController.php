<?php

namespace App\Http\Controllers;

use App\Suburb;
use App\District;

//use Illuminate\Http\Request;
use Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;


class SuburbController extends Controller
{
    public function index() {
        $districts = District::all();
        $suburbs = Suburb::all();
        return view('suburb', compact('districts', 'suburbs'));
    }

    public function addSuburb(Request $request) {
        $districtID = Request::get('district');
        $suburbList = Request::get('suburbList');
        $test = count($suburbList);
        /*foreach($suburblist as $suburbName){
            echo $suburbName.',<br/>';
        }*/
        //$suburbs = new Suburb;
        /*for ($i = 1; $i < count($suburblist); $i++) {
            $suburbs[] = [
                'suburbName' => $suburblist[$i],
                'districtID' => $test
            ];
        }*/
        //Suburb::insert($suburbs);
        echo "<script>alert($test);</script>";
        return view('suburb');
    }
}
