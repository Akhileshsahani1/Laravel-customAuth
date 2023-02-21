<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Calander;
use App\Models\Pracatice_Clander;

use Modules\Admin\Entities\Admin;
use Auth;

class AdminController extends Controller
{
    
    public function index()
    {
        return view('admin::A');
    }
    public function home()
    {
      
        return view('admin::Auth.welcome');
    }
    
    public function authenticate(Request $request)
    {
           
              if (Auth::guard('admin')->attempt(['email' => $request->email,'password' => $request->password])) {
                  
                 
                  return redirect()->route('admin.dashboard');
        }else{
            return redirect()->route('admin.home');
        }
    }
   
     public function Dashboard()
     {
        return view('admin::auth.Dashboard');
     }

     public function calander()
     {
        $provider_id = Auth::user()->id;
    
        $date = Calander::where('provider_id',$provider_id)->select('start')->get();
       
             $datas =[];
            foreach($date as $datsss)
            {
                
                $datas[] = Pracatice_Clander::where('start','=',$datsss->start)->get()->toArray();
              
               
              
            } 
            $data = array_filter($datas);
          
            // dd($data);
                  
        return view('admin::auth.ManageCalander',compact('data'));
     }
     public function available()
     {
        $provider_id = Auth::user()->id;
       
        $events = Calander::where('provider_id',$provider_id)->get();
   
       
        
        return view('admin::auth.Availability',compact('events'));
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
      
        return redirect()->route('admin.home');
    }

    //Ajax code 


    public function store(Request $request)
    {
         $provider_id = Auth::user()->id;
         
        
         $data = Calander::create([
             'provider_id'=>$provider_id,
              'start'=>$request->start_date,
              'end'=>$request->end_date,
              'title'=>$request->title,
              'practice_id'=>0
           
         ])->save();

         return response()->json($data);
    }

    public function destroy($id)
    {
      
        $data = Calander::where('id',$id)->delete();

        return $id;
    }

    public function update(Request $request,$id)
    {
        $data = Calander::where('id',$id)->update([
              'start'=>$request->start_date,
              'end'=>$request->end_date,
            
        ]);
        dd($data);
    }
}
