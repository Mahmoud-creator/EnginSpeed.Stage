<?php

namespace App\Http\Controllers;

use App\Models\Motor;
use Illuminate\Http\Request;

class MotorController extends Controller
{

    public function index(Request $request)
    {
        $motors = Motor::all();
        return response(['motors' => $motors]);
    }

    public function show(Request $request)
    {
        $motor = Motor::find($request->id);
        return response(['motors' => $motor]);
    }

    public function store(Request $request)
    {
        $motor = Motor::create($request->all());
        return response(['motor' => $motor]);
    }

    public function update(Request $request)
    {
        $motor = Motor::findOrFail($request->id);
        $motor->update($request->all());
        return response(['motor' => $motor]);
    }

    public function destroy(Request $request)
    {
        $motor = Motor::findOrFail($request->id);
        $motor->delete();
        return response(['motor' => $motor]);
    }

    public function search(Request $request)
    {
        $motors = Motor::where('brand', $request->brand)
            ->orWhere('model', $request->model)
            ->orWhere('year', $request->year)
            ->orWhere('color', $request->color)
            ->orWhere('price', $request->price)->get();
        return response(['motors' => $motors]);
    }

    public function sort(Request $request)
    {
        $sort = $request->sort;

        $motors = Motor::when($sort, function ($query) use ($sort) {
            switch ($sort) {
                case 'date_asc':
                    return $query->orderBy('created_at');
                case 'date_desc':
                    return $query->orderByDesc('created_at');
                case 'price_asc':
                    return $query->orderBy('price');
                case 'price_desc':
                    return $query->orderByDesc('price');
            }
        }, function ($query) {
            return $query->orderByDesc('created_at');
        })->get();

        return response(['motors' => $motors]);
    }


}
