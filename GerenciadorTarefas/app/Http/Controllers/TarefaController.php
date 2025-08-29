<?php

namespace App\Http\Controllers;

use App\Models\Tarefa;
use Illuminate\Http\Request;

class TarefaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tarefas = Tarefa::orderBy('created_at', 'desc')->get(); //funcionalidade - ordenar as tarefas por ordem da mais nova para mais antiga
        return view('tarefas.index', compact('tarefas'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tarefas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(['titulo' => 'required']);
        Tarefa::create($request->all());
        return redirect()->route('tarefas.index')->with('success', 'Tarefa criada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('tarefas.show', compact('tarefa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('tarefas.edit', compact('tarefa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(['titulo' => 'required']);
        $tarefa->update($request->all());
        return redirect()->route('tarefas.index')->with('success', 'Tarefa atualizada!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tarefa->delete();
        return redirect()->route('tarefas.index')->with('success', 'Tarefa excluída!');
        }
    }