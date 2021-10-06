<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tasks;
use phpDocumentor\Reflection\Types\Null_;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class todoController extends Controller
{
    public function index()
    {
       if ((Auth::id())!=Null)
       {

           echo Auth::id();

           $data = array();
           $i = 0;
           $all_books = tasks::all();
           foreach ($all_books as & $wow1) {

               if ($wow1->tas_id == Auth::id()) {
                   $data[$i] = [$wow1];
               }
               $i++;
           }
           return $data;



          // return DB::table('tasks')->where('tas_id', '=', Auth::id())->task_id;
       }
       else
       {
           abort('404');
       };

    }

    public function check(Request $request)
    {
        $review=new tasks();
        $s1=3;
        $s2=2;
        $review->task_text=$request->input('subject');
        $review->task_id=$s1;
        $review->tas_id=$s2;

        $review->save();
        return $review;
        //return view('showProduct', ['product' => $product]);
    }
}
