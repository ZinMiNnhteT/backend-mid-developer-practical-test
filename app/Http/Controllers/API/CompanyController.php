<?php

namespace App\Http\Controllers\API;

use App\Models\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Laravel\Facades\Image;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::all();
        return response()->json(['companies' => $companies], 200);
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email',
            'phone' => 'nullable|string|max:15',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'website' => 'nullable|url',
        ]);
        $company = new company;
        $company->name = $request->name;
        $company->email= $request->email;
        $company->phone= $request->phone;
        $company->website= $request->website;

        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');

            $imageName = time() . '.' . $logo->getClientOriginalExtension();
            $image = Image::read($logo)
                        ->resize(300, 300, function ($constraint) {
                            $constraint->aspectRatio();
                            $constraint->upsize();
                        });
            $image->save(storage_path('app/public/logos/' . $imageName));
            $company->logo = '/storage/logos/' . $imageName;
        }

        $company->save();
        return response()->json(['message'=>'Company Added Successfully'], 200);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email',
            'phone' => 'nullable|string|max:15',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'website' => 'nullable|url',
        ]);
        $company = Company::findOrFail($id);

        $company->name= $request->name;
        $company->email= $request->email;
        $company->phone= $request->phone;
        $company->website= $request->website;

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
            $company->logo = '/storage/logos/' . $imageName;
        }

        $company->save();
        return response()->json(['message'=>'Company Updated Successfully'], 200);
    }

    public function destroy($id)
    {
        $company = Company::find($id);
        if (!$company) {
            return response()->json(['message' => 'Company Not Found'], 404);
        }
        if ($company->logo) {
            $filePath = str_replace('storage/', '', $company->logo);
                if (Storage::disk('public')->exists($filePath)) {
                    Storage::disk('public')->delete($filePath);
                }
        }
        $company->delete();
        return response()->json(['message' => 'Company Deleted Successfully'], 200);
    }

}