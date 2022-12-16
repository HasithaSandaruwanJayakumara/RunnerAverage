<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\RunnerDetails;
use Termwind\Components\Raw;
use Carbon\Carbon;

class ReportController extends Controller
{
    public function index(){

        $runners = DB::select('select * from runner_details');



       $durations = $this->duration();
       $speeds = $this->speed();
       $this->speed();

      return view('report',['runners'=>$runners,'durations'=>$durations,'speeds'=>$speeds]);

    }

        public function duration(){

            $radiuses = DB::table('runner_details')->pluck('radius');
            $laps = DB::table('runner_details')->pluck('laps');
            $c = 2*3.14;
            $circumference=[];
            $durations =[];

            // Cal Circumference
            for($x =0; $x < sizeof($radiuses); $x++ ){
                $a = $c * $radiuses[$x];
                array_push($circumference,$a);

            }


            // cal Duration
            for($x =0; $x < sizeof($laps); $x++ ){
                $d = ($laps[$x] * $circumference[$x])/1000;
                // echo 'd is'.$d;
                array_push($durations,$d);

            }


            return $durations;



        }



        // Speed Functions
        public function speed(){

            $start_time = DB::table('runner_details')->pluck('end_time');
            $end_time = DB::table('runner_details')->pluck('start_time');


            $run_time =[];


            // Cal Runner Time
            for($x =0; $x < sizeof($end_time); $x++ ){
                $st =new Carbon($start_time[$x]);
                $et =new Carbon($end_time[$x]);

                $a = ($st->diffInMinutes($et))/60;

                array_push($run_time,$a);

            }

            // Call Speed
            $durations = $this->duration();
            $speed =[];
            for($x =0; $x < sizeof($durations); $x++ ){
                $sp = $durations[$x]/$run_time[$x];
                array_push($speed,$sp);

            }

            return $speed;

        }


}
