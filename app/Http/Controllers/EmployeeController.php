<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Laravel\Facades\Image;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $cmpt['employees'] = Employee::search($request);
        $cmpt['search']    = $request->all();
        return view('employee.index', $cmpt);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cmpt['companies'] = Company::pluck('name','id')->all();
        return view('employee.create', $cmpt);
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     $request->validate([
    //     'name' => 'required|string|max:255',
    //     'email' => 'required|email|unique:employees,email',
    //     'phone' => 'required|string|max:15',
    //     'profile' => 'nullable|image|max:1024',
    //     'company_id' => 'required|exists:companies,id',
    //     ]);

    //     $data = $request->all();
    //     if ($request->hasFile('profile')) {
    //         $profile = $request->file('profile');
    //         $imagePath = $profile->store('profiles', 'public');
    //         $data['profile'] = asset('storage/' . $imagePath);
    //     }
    //     Employee::create($data);
    //     return redirect()->route('employees.index')->with('success', 'Employee created successfully.');
    // }


    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:employees,email',
            'phone' => 'nullable|string|max:15|regex:/^[0-9+\-\(\)\s]*$/',
            'profile' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'company_id' => 'required|exists:companies,id',
        ]);

        $data = $request->all();
        if ($request->hasFile('profile')) {
            $profile = $request->file('profile');
            $imageName = time() . '.' . $profile->getClientOriginalExtension();
            $image = Image::read($profile)
                        ->resize(300, 300, function ($constraint) {
                            $constraint->aspectRatio();
                            $constraint->upsize();
                        });
            $image->save(storage_path('app/public/profiles/' . $imageName));
            $data['profile'] = '/storage/profiles/' . $imageName;
        }
        Employee::create($data);
        return redirect()->route('employees.index')->with('success', 'Employee created successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        $cmpt['employee'] = $employee;
        $cmpt['companies'] = Company::pluck('name','id')->all();
        return view('employee.edit', $cmpt);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => "required|email|unique:employees,email,{$employee->id}",
            'phone' => 'nullable|string|max:15|regex:/^[0-9+\-\(\)\s]*$/',
            'profile' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'company_id' => 'required|exists:companies,id',
        ]);

        $data = $request->all();

        if ($request->hasFile('profile')) {
            if ($employee->profile) {
                $filePath = str_replace('storage/', '', $employee->profile);
                Storage::disk('public')->delete($filePath);
            }

            $profile = $request->file('profile');
            $imageName = time() . '.' . $profile->getClientOriginalExtension();

            $image = Image::read($profile)
                        ->resize(300, 300, function ($constraint) {
                            $constraint->aspectRatio();
                            $constraint->upsize();
                        });
            $image->save(storage_path('app/public/profiles/' . $imageName));
            $data['profile'] = '/storage/profiles/' . $imageName;
        }
        $employee->update($data);

        return redirect()->route('employees.index')->with('success', 'Employee updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($employeeId)
    {
        $employee = Employee::find($employeeId);
        if (!$employee) {
            return redirect()->route('employees.index')->with('error', 'Employee not found.');
        }
        if ($employee->profile) {
            $filePath = str_replace('storage/', '', $employee->profile);
                if (Storage::disk('public')->exists($filePath)) {
                    Storage::disk('public')->delete($filePath);
                }
        }
        $employee->delete();

        return redirect('employees')->with('success', 'Employee deleted successfully.');
    }
}
