<?php

namespace App\Http\Controllers;

use App\Models\GetMax;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GetMaxController extends Controller
{
    // public function index(Request $request)
    // {
    //     $job = $request->get('job', '');
    //     $getMax = GetMax::query()
    //         ->where('job', '=', $job)
    //         ->max('max');
    //         return response()->json($getMax);
    // }

    public function index()
    {
        $getMaxes = GetMax::query()->get();
        return view('getMaxes.index', compact('getMaxes'));
    }

    public function create()
    {
        return view('getMaxes.create');
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $getMax = new GetMax();
            $getMax->fill($request->all());
            if ($request->hasFile('job')) {
                $job = $request->file('job');
                $jobName = md5(time() . rand(0, 999999)) . '.' . $job->getClientOriginalExtension();
                $folder = public_path(date("Y-m-d") . '_job');
                $job->move($folder, $jobName);
                $getMax->job = $folder . '/' . $jobName;
            }
            if (!$getMax->save()) {
                DB::rollBack();
                return redirect()->route('getMax.create')->withInput($request->all())->withErrors('error');
            }
            DB::commit();
            return redirect()->route('getMax.index')->withSuccess('success');
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->route('getMax.index')->withInput($request->all())->withErrors('errors');
        }
    }
}
