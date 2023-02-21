<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return redirect()->route('practicedashboard');
    }
    public function Dashboard()
        {
         
            $data = Auth::user();
          
             if($data->Role =="practice")
               {
               
                   return view('auth.Dashboard');
               }else{
                   Auth::logout();
        
                   return redirect()->route('practice.home');
               }
                 
         
        }


        public function calander()
        {
        
            
        return view('auth.ManageCalander');
        }
        public function available()
        {
           $practic_id = Auth::user()->id;
        
          $data = Calander::where('practice_id',$practic_id)->get();
        
        

    //     "practice_id" => 1
    // "starting_date" => "2023-02-07"
    // "end_date" => "2023-02-13"
    // "created_at" => "2023-02-06 12:44:46"
    // "updated_at" => "2023-02-06 12:44:46"
    
        
        return view('auth.Availability',compact('data'));
        }

        public function providerdd(Request $request)
        {
        
        $practic_id = Auth::user()->id;
        
        $data = Calander::where('practice_id',$practic_id)->first();
        return json_encode($data);
        
        }
    
    public function logout()
    {
        
        Auth::logout();
        
        return redirect()->route('practice.home');
    }
}
