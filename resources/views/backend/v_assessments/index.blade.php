@extends('backend.v_layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title" style="color: black; font-size: 24px;">
                        Asesmen Sertifikasi Kompetensi - LSP UBSI
                        <br><br>
                        <a href="{{ route('assessments.create') }}" title="Tambah data">
                            <button type="button" class="btn btn-primary">Tambah Assessment</button>
                        </a>
                    </h5>
                    <!-- Table with stripped rows -->
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Skema</th>
                                <th>TUK</th>
                                <th>Hasil</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($assessments as $index => $row)
                                <tr>
                                    <td>{{ $row->nim }}</td>
                                    <td>{{ $row->nama }}</td>
                                    <td>{{ $row->skema }}</td>
                                    <td>{{ $row->tuk }}</td>
                                    <td>{{ $row->hasil }}</td>
                                    <td>
                                        <a href="{{ route('assessments.show', $row->id) }}" title="Detail Data">
                                            <span class="badge bg-info">
                                                <i class="bi bi-eye"></i> Detail</span>
                                        </a>
                                        <a href="{{ route('assessments.edit', $row->id) }}" title="Ubah Data">
                                            <span class="badge bg-warning">
                                                <i class="bi bi-pencil-square"></i> Edit</span>
                                        </a>
                                        <a href="#" title="Hapus Data"
                                            onclick="event.preventDefault(); document.getElementById('delete-form-{{ $row->id }}').submit();">
                                            <span class="badge bg-danger"><i class="bi bi-trash"></i> Delete</span>
                                        </a>
                                        <form id="delete-form-{{ $row->id }}"
                                            action="{{ route('assessments.destroy', $row->id) }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
