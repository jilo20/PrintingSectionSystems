<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\RequestForm;
use App\Models\RequestJob;

class RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departments = Department::all();
        $user = Auth::user();

        if ($user->role !== 0) {
            $requestforms = RequestForm::with(['requestJobs','department'])
                ->where('deptId', $user->deptId)
                ->get();
        } else {
            $requestforms = RequestForm::with(['requestJobs','department'])->get();
        }

        return view('requests.index', compact('requestforms', 'departments'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('requests.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function markCompleted($id)
    {
        $requestForm = RequestForm::findOrFail($id);
        $requestForm->status = 'Completed';          
        $requestForm->save();                      

        return redirect()->back();                   
    }


    public function store(Request $request)
    {
        // Step 1: create the request form
        $form = RequestForm::create([
            'requestedBy' => $request->requestedBy,
            'forwardedBy' => $request->forwardedBy,
            'deptId'      => auth()->user()->deptId, // or whatever
            'date'        => now(),
            'userId'        => Auth::user()->userId,
            'status' => 'In Progress',
            'timeIn' => now()
            // totalCost later
        ]);

        // Step 2: loop through job arrays
        $count = count($request->originals);

        for ($i = 0; $i < $count; $i++) {
            RequestJob::create([
                'requestFormId' => $form->requestFormId,
                'originals'     => $request->originals[$i],
                'copies'        => $request->copies[$i],
                'paperType'     => $request->paperType[$i],
                'isB2B'         => $request->isB2B[$i],
                'service_type'  => $request->service_type[$i],
                'description'   => $request->description[$i],
                'cost'          => 0, // calculate later
            ]);
        }

        return redirect()->back()->with('success', 'Request created!');
    }



    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $requestData = RequestForm::findOrFail($id);
        return view('requests.show', compact('requestData'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $requestData = RequestModel::findOrFail($id);
        return view('requests.edit', compact('requestData'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $requestData = RequestModel::findOrFail($id);

        $request->validate([
            'requested_by' => 'required|string|max:255',
            'details' => 'nullable|string',
        ]);

        $requestData->update($request->all());

        return redirect()->route('requests.index')->with('success', 'Request updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $requestData = RequestModel::findOrFail($id);
        $requestData->delete();

        return redirect()->route('requests.index')->with('success', 'Request deleted successfully!');
    }
}
