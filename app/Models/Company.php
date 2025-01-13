<?php

namespace App\Models;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'phone', 'logo', 'website'];

    public function employees()
    {
        return $this->hasMany(Employee::class);
    }

    public static function search(Request $request)
    {
        $query = self::query();

        if ($request->has('name') && $request->name != '') {
            $query->where('name', 'like', '%' . $request->name . '%');
        }

        if ($request->has('email') && $request->email != '') {
            $query->where('email', 'like', '%' . $request->email . '%');
        }

        if ($request->has('website') && $request->website != '') {
            $query->where('website', 'like', '%' . $request->website . '%');
        }

        $results = $query->orderBy('id', 'asc')->paginate(paginateCount());

        while (count($results) < 1 && $request->page > 1) {
            $request->merge(['page' => $request->page - 1]);
            Paginator::currentPageResolver(function () use ($request) {
                return $request->page;
            });

            $results = $query->orderBy('id', 'asc')->paginate(paginateCount());
        }
        return $results;
    }


}