<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RunnerDetails;

class RunnerDetailsSave extends Controller
{
    public function submit(Request $request){

        $Submit = new RunnerDetails;
        $Submit->name=$request->name;
        $Submit->radius=$request->radius;
        $Submit->start_time=$request->end_time;
        $Submit->end_time=$request->start_time;
        $Submit->laps=$request->laps;
        $Submit->save();

        return redirect()->back();
    }

}
