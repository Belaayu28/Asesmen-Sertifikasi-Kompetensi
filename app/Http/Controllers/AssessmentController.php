<?php

namespace App\Http\Controllers;

use App\Models\Assessment;
use Illuminate\Http\Request;

class AssessmentController extends Controller
{
    public function index()
    {
        $assessments = Assessment::all();
        return view('backend.v_assessments.index', compact('assessments'));
    }
//menambahkan data assesment
    public function create()
    {
        return view('backend.v_assessments.create', [
            'judul' => 'Assessment',
            'sub' => 'Tambah Assessment',
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'skema' => 'required',
            'tuk' => 'required',
            'hasil' => 'required',
        ]);

        Assessment::create($validatedData);
        return redirect('/assessments')->with('success', 'Data berhasil tersimpan');
    }

    public function show(Assessment $assessment)
    {
        return view('backend.v_assessments.show', compact('assessment'));
    }

    public function edit($id)
    {
        $assessment = Assessment::findOrFail($id);
        return view('backend.v_assessments.edit', compact('assessment'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'skema' => 'required',
            'tuk' => 'required',
            'hasil' => 'required',
        ]);

        $assessment = Assessment::findOrFail($id);
        $assessment->update($validatedData);
        return redirect('/assessments')->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        $assessment = Assessment::findOrFail($id);
        $assessment->delete();
        return redirect('/assessments')->with('success', 'Data berhasil dihapus');
    }
}
