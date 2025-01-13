<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Laravel\Facades\Image;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $cmpt['companies'] = Company::search($request);
        $cmpt['search']    = $request->all();
        return view('company.index', $cmpt);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('company.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:companies,email',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'phone' => 'nullable|string|max:15|regex:/^[0-9+\-\(\)\s]*$/',
            'website' => 'nullable|url',
        ]);

        $data = $request->all();
        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');

            $imageName = time() . '.' . $logo->getClientOriginalExtension();
            $image = Image::read($logo)
                        ->resize(300, 300, function ($constraint) {
                            $constraint->aspectRatio();
                            $constraint->upsize();
                        });
            $image->save(storage_path('app/public/logos/' . $imageName));
            $data['logo'] = '/storage/logos/' . $imageName;
        }
        Company::create($data);

        return redirect()->route('companies.index')->with('success', 'Company created successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('company.create');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        return view('company.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Company $company)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => "required|email|unique:companies,email,{$company->id}",
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'phone' => 'nullable|string|max:15|regex:/^[0-9+\-\(\)\s]*$/',
            'website' => 'nullable|url',
        ]);

        $data = $request->all();
        if ($request->hasFile('logo')) {
            if ($company->logo) {
                $filePath = str_replace('storage/', '', $company->logo);
                    Storage::disk('public')->delete($filePath);
            }
            $logo = $request->file('logo');
            $imageName = time() . '.' . $logo->getClientOriginalExtension();

            $image = Image::read($logo)
                        ->resize(300, 300, function ($constraint) {
                            $constraint->aspectRatio();
                            $constraint->upsize();
                        });
            $image->save(storage_path('app/public/logos/' . $imageName));
            $data['logo'] = '/storage/logos/' . $imageName;
        }
        $company->update($data);

        return redirect()->route('companies.index')->with('success', 'Company updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($companyId)
    {
        $company = Company::find($companyId);
        if (!$company) {
            return redirect()->route('companies.index')->with('error', 'Company not found.');
        }
        if ($company->logo) {
            $filePath = str_replace('storage/', '', $company->logo);
                Storage::disk('public')->delete($filePath);
        }
        $company->delete();

        return redirect('companies')->with('success', 'Company deleted successfully.');
    }
}