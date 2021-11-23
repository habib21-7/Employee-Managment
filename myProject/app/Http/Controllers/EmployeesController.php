<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Employee;
use App\Traits\EmployeeTrait;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class EmployeesController extends Controller
{
    use EmployeeTrait;

    public function __construct()
    {
    }


    public function add(){
        return view('employee.add');
    }


    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        //save photos in folder
        $file_name =  $this -> saveImage($request -> photo ,'images/employee');

        //insert
        Employee::create([
            'name'=>$request->name,
            'age'=>$request->age,
            'address'=>$request->address,
            'country'=>$request->country,
            'department'=>$request->department,
            'division'=>$request->division,
            'city'=>$request->city,
            'region'=>$request->region,
            'departments_id'=>$request ->id,
            'photo'=> $file_name,
        ]);
        return redirect()->back()->with(['success'=>'Employee was ADDED successfully']);

    }

    public function showAllEmployees(){
        ########### paginate result #############
        $employees = Employee::select('id','name','age','address','country','department','division','city','region','departments_id','photo')->paginate(PAGINATION_COUNT);
        #########################################
        return view('employee.pagination',compact('employees'));
    }

    public function getMain(){
        return view('employee.main');
    }

    public function getMain2(){
        return view('employee.main2');
    }

    public function search(Request $request){

        if($request -> isMethod('post')){
            $query = $request -> get('query');
            $employees = Employee::where('name','LIKE','%'.$query.'%')->paginate(PAGINATION_COUNT);
            }
        return view('employee.search',compact('employees'));
    }

    public function search2(Request $request){

        if($request -> isMethod('post')){
            $query2 = $request -> get('query2');
            $departments = Department::where('name','LIKE','%'.$query2.'%')->paginate(PAGINATION_COUNT);
        }
        return view('employee.search2',compact('departments'));
    }

    public function editEmployee($employee_id){
        $employee =Employee::find($employee_id);
        if (!$employee)
            return redirect() -> back();

        $employee = Employee::select('id','name','age','address','country','department','division','city','region','photo')->find($employee_id);
        return view('employee.edit',compact('employee'));
    }

    public function updateEmployee(Request $request,$employee_id){
        $employee =Employee::find($employee_id);
        if (!$employee)
            return redirect() -> back();

        $employee -> update($request -> all());
        return redirect() -> back() -> with(['success' => 'Updates Done Successfully']);
    }

    public function deleteEmployee($employee_id){
        $employee =Employee::find($employee_id);
        if (!$employee)
            return redirect() -> back();

        $employee ->delete();
        return  redirect() -> route('main',$employee_id)->with(['success' => 'Deleted Successfully']);
    }

    public function showDepartments(){
        $department = Department::select('id','name')->get();
        return view('employee.departments',compact('department'));
    }

    public function showEmployees($departments_id){
        $department =Department::find($departments_id);
        $employees = $department -> employees;
        return view('employee.employees',compact('employees'));
    }

}
