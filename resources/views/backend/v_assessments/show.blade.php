@extends('backend.v_layouts.app')
@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h3>Detail Assessment</h3>
            </div>
            <div class="card-body">
                <table class="table table-borderless">
                    <tr>
                        <th>NIM</th>
                        <td>{{ $assessment->nim }}</td>
                    </tr>
                    <tr>
                        <th>Nama</th>
                        <td>{{ $assessment->nama }}</td>
                    </tr>
                    <tr>
                        <th>Skema</th>
                        <td>{{ $assessment->skema }}</td>
                    </tr>
                    <tr>
                        <th>TUK</th>
                        <td>{{ $assessment->tuk }}</td>
                    </tr>
                    <tr>
                        <th>Hasil</th>
                        <td class="text-success">{{ $assessment->hasil }}</td>
                    </tr>
                </table>
                <a href="{{ url()->previous() }}" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>
@endsection
