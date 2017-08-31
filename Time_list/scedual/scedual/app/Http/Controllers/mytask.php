<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

class mytask extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('time') -> get();
        return view('home')->with('data',$data);
    }

//    show input form
    public function scedual()
    {
        return view('input-form');
    }
    public function reArrayFiles($myArray)
    {
        // echo sizeof($myArray);
        if (sizeof($myArray) > 1) {
            $file_ary = array();
            $file_count = count($myArray['name']);
            $file_keys = array_keys($myArray);
            for ($i = 0; $i < $file_count; $i++) {
                foreach ($file_keys as $key) {
                    $file_ary[$i][$key] = $myArray[$key][$i];
                }

            }

            for ($i = 0; $i < $file_count; $i++) {
                if ($file_ary[$i]['status'] == 'Part time') {
                    $totalhours = strtotime($file_ary[$i]['timeout']) - strtotime($file_ary[$i]['timein']);
                    echo $totalhours."<br/>";
                    $value = ($totalhours) / 3600;
                    echo "<br/>".$value;die();
                    $valueafterconvert=(($value * 60) % 60);
                    $converttime=floor($value) . ':' .$valueafterconvert.
                        $file_ary[$i]['totalhours']=$valueafterconvert;
                    echo "afterconvert : ";

                }
                else if($file_ary[$i]['status']=="Full time"){
                    $totalhours = strtotime($file_ary[$i]['timeout']) - strtotime($file_ary[$i]['timein']);
                    echo $totalhours."<br/>";
                    $value = ($totalhours) / 3600-1.5;
                    $valueafterconvert=(($value * 60) % 60);
                    $file_ary[$i]['totalhours']=$valueafterconvert;
                    echo "afterconvert : ";
                    echo floor($value) . ':'.$file_ary[$i]['totalhours']."<br/>";
                }
            }

            //          print_r($file_ary);die();
            return $file_ary;

        }

        else{
            return $myArray;
        }


    }


//    input to store in database
    public function store(Request $request)
    {
        $allData = Input::all();
        //    echo "<pre>".print_r($allData,true)."</pre><br/>";
        $dataAfterPrepare = HomeController::reArrayFiles($allData);
        //     echo '<pre>'. print_r($dataAfterPrepare,true).'</pre>'; die();
        $afterRemoveToken = [];
        foreach ($dataAfterPrepare as $item) {
            array_push($afterRemoveToken, array(
                'name' => $item['name'],
                'timein' => $item['timein'],
                'timeout' => $item['timeout'],
                'status' => $item['status'],
                'totalhours' => $item['totalhours'],
                'date' => $item['date']
            ));
        }

        DB::table('time')->insert($afterRemoveToken);
//   Session::flash('success','Insert New Item Successful!');
        return redirect(route('home'));
    }



    function insert()
    {
        return view('insert_table');
    }


}
