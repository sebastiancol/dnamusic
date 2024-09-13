<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use PHPUnit\Framework\Attributes\Ticket;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data= Task::orderBy('id','desc')->paginate(10);
        return view('crud', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crud_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Task::create($request->all());
        return redirect()->route('crud_get')->with('success','creado con exito ');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $busqueda = $request->busqueda;
        $ticket = Task::where('status','like','%'.$busqueda.'%')
        ->get();
        $data=[
            'busqueda'=>$busqueda
        ];
        return view('crud_get', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data= Task::findOrFail($id);
        return view('crud_edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Task::findOrFail($id);
        $data->update($request->all());
        
        return redirect()->route('crud_get')->with('success', 'actualizado con exito');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Task::findOrFail($id);
        $data->delete();
        return redirect()->route('crud_get')->with('success', 'Eliminado con exito!');
    }

    public function cancel()
    {
        return redirect()->route('crud_get');
    }
}
