<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use App\HomeModel;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
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
    public function reArrayFiles($myArray) {
        // echo sizeof($myArray);
        if(sizeof($myArray)>1){
            $file_ary = array();
            $file_count = count($myArray['name']);
            $file_keys = array_keys($myArray);
            for ($i=0; $i<$file_count; $i++) {
                foreach ($file_keys as $key) {
                    $file_ary[$i][$key] = $myArray[$key][$i];
                }
            }
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
        $dataAfterPrepare = HomeController::reArrayFiles($allData);
//        echo '<pre>'. print_r($dataAfterPrepare,true).'</pre>'; die();
        $afterRemoveToken =[];
        foreach($dataAfterPrepare as $item){
            array_push($afterRemoveToken,array(
                'name'=> $item['name'],
                'timein'=> $item['timein'],
                'timeout'=> $item['timeout'],
                'status'=> $item['status'],
                'totalhours'=> $item['totalhours'],
            ));
        }
        DB::table('time')->insert($afterRemoveToken);

//        Session::flash('success','Insert New Item Successful!');
        return redirect(route('home'));
    }


//        https://www.youtube.com/watch?v=wmZMJpvDaR0&index=4&list=PLvdFHvSi79URd1Y-2G7TqtqnUviJOEySK
    public function  mytest()
    {

        $data=[];
        $data['name']='<p> ha panha </p>';
        $name='panha cute girl';
        return view('test')->with($data);
    }

    function table()
    {
        $data=HomeModel::all();
        return view('master')->with('data',$data);
    }
    function  create()
    {
        return view('create');
    }








}
