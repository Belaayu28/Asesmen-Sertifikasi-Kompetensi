@extends('backend.v_layouts.app')
@section('content')
    <!-- template -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"> </h5>

                    <!-- Vertical Form -->
                    <form class="row g-3" action="{{ route('assessments.update', $assessment->id) }}" method="post">
                        @csrf
                        @method('PUT')

                        <div class="col-12">
                            <label for="nim" class="form-label">NIM</label>
                            <input type="text" name="nim" class="form-control" id="nim"
                                value="{{ $assessment->nim }}" required>
                        </div>

                        <div class="col-12">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama"
                                value="{{ $assessment->nama }}" required>
                        </div>

                        <div class="col-12">
                            <label for="skema" class="form-label">Skema</label>
                            <select name="skema" class="form-select" id="skema" required>
                                <option value="Web Development"
                                    {{ $assessment->skema == 'Web Development' ? 'selected' : '' }}>Web Development</option>
                                <option value="Programmer" {{ $assessment->skema == 'Programmer' ? 'selected' : '' }}>
                                    Programmer</option>
                            </select>
                        </div>

                        <div class="col-12">
                            <label for="tuk" class="form-label">TUK</label>
                            <input type="text" name="tuk" class="form-control" id="tuk"
                                value="{{ $assessment->tuk }}" required>
                        </div>
                        <div class="col-12">
                            <label for="hasil" class="form-label">Hasil</label>
                            <select name="hasil" class="form-select" id="hasil" required>
                                <option value="Kompeten" {{ $assessment->hasil == 'Kompeten' ? 'selected' : '' }}>Kompeten
                                </option>
                                <option value="Belum Kompeten"
                                    {{ $assessment->hasil == 'Belum Kompeten' ? 'selected' : '' }}>Belum Kompeten</option>
                            </select>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Perbarui</button>
                            <a href="{{ route('assessments.index') }}">
                                <button type="button" class="btn btn-danger">Kembali</button>
                            </a>
                        </div>
                    </form><!-- Vertical Form -->

                </div>
            </div>
        </div>
    </div>
    <!-- template end -->
@endsection
