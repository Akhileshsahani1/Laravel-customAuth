<?php

namespace Modules\Practice\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Calander;
use Auth;
use DB;
use App\Models\Pracatice_Clander;
use App\Models\Provider_Practice;
// use App\Models\Calander;


class PracticeController extends Controller
{
  
    public function home()
    {
        
        return view('practice::Auth.welcome');
    }
    
    public function authenticate(Request $request)
    {
        
        // $credentials = $request->only('email', 'password');
           
                if (Auth::guard('practice')->attempt(['email' => $request->email,'password' => $request->password])) {
               
                    return redirect()->route('practicedashboard');
        }else{
            return redirect()->route('practice.home');
        }
    }
    
        public function Dashboard()
        {     
          return view('practice::auth.Dashboard');
        }

        public function calander()
        {
            $practic_id = Auth::user()->id;
           
                 
         
    
        $date = Pracatice_Clander::where('practice_id',$practic_id)->select('start')->get();
        
             $datas =[];
            foreach($date as $datsss)
            {
                
                $datas[] =Calander::where('start','=',$datsss->start)->get()->toArray();
              
               
              
            } 
            $data = array_filter($datas);
                      
                      
           return view('practice::auth.ManageCalander',compact('data'));
        }
        public function available()
        {
         
                 
           $events = Pracatice_Clander::get();
        
        

    //     "practice_id" => 1
    // "starting_date" => "2023-02-07"
    // "end_date" => "2023-02-13"
    // "created_at" => "2023-02-06 12:44:46"
    // "updated_at" => "2023-02-06 12:44:46"
    
        
        return view('practice::auth.Availability',compact('events'));
        }

        public function providerdd(Request $request)
        {
        
             $data = Auth::user()->id;
             dd($data);
        
    
        return json_encode($data);
        
        }
    
    public function logout(Request $request)
    {
       
        Auth::logout();
        
        return redirect()->route('practice.home');
    }

    // Ajax data insert----------------------------------------------------------

    public function store(Request $request)
    {
         $practice_id = Auth::user()->id;
         
          
         $data = Pracatice_Clander::create([
             'practice_id'=>$practice_id,
              'start'=>$request->start_date,
              'end'=>$request->end_date,
              'title'=>$request->title,
             
           
         ])->save();

         return response()->json($data);
    }

    public function destroy($id)
    {
      
        $data = Pracatice_Clander::where('id',$id)->delete();

        return $id;
    }

    public function update(Request $request,$id)
    {
        $data = Pracatice_Clander::where('id',$id)->update([
              'start'=>$request->start_date,
              'end'=>$request->end_date,
            
        ]);
       
    }
}

