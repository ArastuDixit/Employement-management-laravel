<?php
namespace App\Http\Controllers\Trainer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\Trainer\Trainer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Config;
class TrainerController extends Controller {
    
    public function trainer()
    {
     $car_type = DB::table('trainer')->get();
     return view('user.trainer',['fetch' => $car_type]);
          //  return view('user.trainer');
       
    }
    
     public function addTrainer(Request $request) {
     
      function generate_random_passwordd($length = 8){
              $numbers = range('0','9');
              $final_array = array_merge($numbers);
            $passwordnew = '';
              while($length--){
                $key = array_rand($final_array);
                $passwordnew .= $final_array[$key];
                }return $passwordnew; }
                $date = date('Y');
                $create = "TR-"."$date-".$api_no =   generate_random_passwordd(8); 
     
                
     
               $input['trainer_first_name'] = $request->trainer_first_name;
               //$request->unique_id
               $input['unique_id'] =$create;
               $input['trainer_end_date'] ="";
               $input['trainer_regular_job'] ="";
               $input['amount_status'] =$request->amount_status;
               $input['trainer_last_name'] = $request->trainer_last_name;
               $input['email'] =$request->email;
               $input['phone'] =$request->phone;
               $input['trainer_start_date'] =$request->trainer_start_date;
               $input['trainer_which_profile'] =$request->trainer_which_profile;
               $input['gender'] =$request->gender;
               $input['trainer_month'] =$request->trainer_month;
               $input['fees_mode'] =$request->fees_mode;
               $input['installmenst_1'] =$request->installmenst_1;
               $input['trainer_amount'] =$request->trainer_amount;
               $input['education'] =$request->education;
              
              
            $result = DB::table('trainer')->insert($input);
            if($result){

            return redirect('trainer')->with('employee-success', 'Congratulations! trainer successfully registered.');

            }else{

            return redirect()->back()->with('employee-success', 'Not Insert .');
            }
        
    }
 public function delete_data(Request $request){
        $table = $request->table;
        $id = $request->id;
        $userdelete =DB::table($table)->where('id', $id)->delete();

    if($userdelete){

           return redirect()->back()->with('employee-success', "trainer has been Delete successfully");
           
    }else{
            return redirect()->back()->with('employee-success', "Something is wrong,try again");
             
    }    
       // echo $this->db->last_query();
  }
  
 public function editTrainer(Request $request){

        $id = $request->id;
        //echo $id;die;  
           $input['trainer_first_name'] = $request->trainer_first_name;
               //$request->unique_id
               $input['unique_id'] ="";
               $input['trainer_end_date'] ="";
               $input['trainer_regular_job'] ="";
               $input['amount_status'] =$request->amount_status;
               $input['trainer_last_name'] = $request->trainer_last_name;
               $input['email'] =$request->email;
               $input['phone'] =$request->phone;
               $input['trainer_start_date'] =$request->trainer_start_date;
               $input['trainer_which_profile'] =$request->Which_profile;
               $input['gender'] =$request->gender;
               $input['trainer_month'] =$request->trainer_month;
               $input['fees_mode'] =$request->fees_mode;
               $input['installmenst_1'] =$request->installmenst_1;
               $input['trainer_amount'] =$request->trainer_amount;
               $input['education'] =$request->education;
            //car_image  
            //car_image_selected       
           $result = DB::table('trainer')->where('id', $id)->update($input);         
            //$result = DB::table('country')->insert($input);
            if($result){

            return redirect('trainer')->with('employee-success', 'trainer updated successfully .');

            }else{

            return redirect()->back()->with('employee-success', 'Not Insert .');

     
            }


} 
    
}
