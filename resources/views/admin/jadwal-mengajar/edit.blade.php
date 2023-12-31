@extends('admin.admin')

<!-- ======= BAGIAN PAGES ======= -->
@section('admin')

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Jadwal Mengajar</h1>
            <nav>
                <ol class="breadcrumb">
                    <!-- <li class="breadcrumb-item">ADMIN</li> -->
                    <li class="breadcrumb-item active">Jadwal Mengajar</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <section class="section dashboard">
            <div class="container bg-white rounded p-5">
                <form action="{{ route('jadwal-mengajar.update', $Jadwal->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3 text-dark">
                        <div class="col">
                            <label for="tgl">Tanggal</label>
                            <input type="date" name="tgl" class="form-control" value="{{ $Jadwal->tgl }}" placeholder="Tanggal">
                        </div>
                        <div class="col">
                            <label for="jam">Jam</label>
                            <input type="text" name="jam" class="form-control" value="{{ $Jadwal->jam }}" placeholder="09.20">
                        </div>
                    </div>
                    <div class="row mb-3 text-dark">
                        <div class="col">
                            <label for="mapel">Mapel</label>
                            <input type="text" name="mapel" class="form-control" value="{{ $Jadwal->mapel }}" placeholder="Mata Pelajaran">
                        </div>
                        <div class="col">
                            <label for="kelas">Kelas</label>
                            <input type="text" name="kelas" class="form-control" value="{{ $Jadwal->kelas }}" placeholder="Kelas">
                        </div>
                    </div>
                    <div class="row mb-3 text-dark">
                        <div class="col">
                            <label for="namaguru">Nama Guru</label>
                            <input type="text" name="namaguru" class="form-control" value="{{ $Jadwal->namaguru }}" placeholder="Nama Guru">
                        </div>
                    </div>
                    <div class="row">
                        <div class="d-grid">
                            <button class="btn btn-primary">SUBMIT</button>
                        </div>
                    </div>
                </form>

                
            </div>
        </section>
</main>

@endsection 