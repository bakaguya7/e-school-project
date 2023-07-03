@extends('admin.admin')

<!-- ======= BAGIAN PAGES ======= -->
@section('admin')

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Gaji Guru</h1>
            <nav>
                <ol class="breadcrumb">
                    <!-- <li class="breadcrumb-item">ADMIN</li> -->
                    <li class="breadcrumb-item active">Gaji Guru</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <section class="section dashboard">
            <div class="container bg-white rounded p-5">
                <form action="/gaji-guru-store" method="POST">
                    @csrf
                    <div class="row mb-3 text-dark">
                        <div class="col">
                            <label for="nig">Nomor Induk Guru</label>
                            <input type="text" name="nig" class="form-control" placeholder="Nomor Induk Guru">
                        </div>
                        <div class="col">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap">
                        </div>
                    </div>
                    <div class="row mb-3 text-dark">
                        <div class="col">
                            <label for="nominal">Nominal</label>
                            <input type="text" name="nominal" class="form-control" placeholder="Nominal">
                        </div>
                        <div class="col">
                            <label for="keterangan">Keterangan</label>
                            <input type="text" name="keterangan" class="form-control" placeholder="Keterangan">
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