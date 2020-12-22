<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Goals;
use App\Models\EmployeeGoals;
use App\Models\Positions;

class GoalsController extends Controller
{

    public function getTypes()
    {
        $types = array('zero' => 'Zero','percent' => 'Percent','amount_plus' => 'Amount +','amount_min' => 'Amount -');
        return $types;
    }

    public function getGoals()
    {
        $goals = EmployeeGoals::where('employee_id',session('employee_id_login'))->get();
        foreach ($goals as $key => $value) {
            $goal = Goals::where('id', $value->goal_id)->first();
            $value->goal = $goal;
        }
        return $goals;
    }

    public function getPositions()
    {
        $positions = Positions::where('id', session('employee_position_id'))->first();
        return $positions;
    }

    public function index()
    {
        $value = session('username_login');
        if($value == null){
            return redirect()->route('login');
        }else{
            return view('goals.index')->with('types',$this->getTypes())->with('goals',$this->getGoals())->with('position',$this->getPositions());
        }
    }

    public function save(Request $request)
    {
        // return $request->all();
        $value = session('username_login');
        if($value == null){
            return redirect()->route('login');
        }else{
            $goal = new Goals;
            $goal->goal_name = $request->goal_name;
            $goal->upper_limit = $request->upper_limit;
            $goal->lower_limit = $request->lower_limit;
            $goal->weight = $request->weight;
            $goal->type = $request->type;
            $goal->save();

            $types = $this->getTypes();
            $position = Positions::where('id', session('employee_position_id'))->first();
            if ($goal) {
                $employeeGoals = new EmployeeGoals;
                $employeeGoals->employee_id = session('employee_id_login');
                $employeeGoals->goal_id = $goal->id;
                $employeeGoals->current_progress = 0;
                $employeeGoals->percentage = 0;
                $employeeGoals->save();
                if($employeeGoals){
                    $message = "Add goal success";
                    $status = true;
                }else{

                    $message = "Add goal failed";
                    $status = false;
                }
            } else {
                $message = "Add goal failed";
                $status = false;
            }
            return view('goals.index')->with('types',$this->getTypes())->with('goals',$this->getGoals())->with('position',$this->getPositions())->with('status',$status)->with('message',$message);
        }
    }

    public function update(Request $request)
    {
        // return $request->all();
        $value = session('username_login');
        if($value == null){
            return redirect()->route('login');
        }else{

            $employeeGoals = EmployeeGoals::find($request->idEmployeeGoal);
            $employeeGoals->current_progress = $request->newAmount;
            $employeeGoals->percentage = $request->newAmount;
            $employeeGoals->save();
            $types = $this->getTypes();
            $position = Positions::where('id', session('employee_position_id'))->first();
            if($employeeGoals){
                $message = "Update goal success";
                $status = true;
            }else{

                $message = "Update goal failed";
                $status = false;
            }
            return view('goals.index')->with('types',$this->getTypes())->with('goals',$this->getGoals())->with('position',$this->getPositions())->with('status',$status)->with('message',$message);
        }
    }

}
