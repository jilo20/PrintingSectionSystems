<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Request as RequestModel;

class RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $requests = RequestModel::all();
        return view('requests.index', compact('requests'));
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
    public function store(Request $request)
    {
        $request->validate([
            'requested_by' => 'required|string|max:255',
            'details' => 'nullable|string',
        ]);

        RequestModel::create($request->all());

        return redirect()->route('requests.index')->with('success', 'Request added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $requestData = RequestModel::findOrFail($id);
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
