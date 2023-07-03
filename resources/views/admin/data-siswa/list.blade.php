@extends('admin.admin')

<!-- ======= BAGIAN PAGES ======= -->
@section('admin')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Data Siswa dan Guru</h1>
            <nav>
                <ol class="breadcrumb">
                    <!-- <li class="breadcrumb-item">ADMIN</li> -->
                    <li class="breadcrumb-item active">Data Siswa dan Guru</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <section class="section dashboard">
            <div class="container bg-white rounded p-5">
            <!-- @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif -->
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h3>Data Siswa</h3>
                    <a href="/data-siswa-create" class="btn">
                        <i class="bi bi-plus-circle-fill svg4" style="font-size: 1.8rem;"></i>
                    </a>
                </div>  
                @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                @endif
                <table class="table table-hover">
                    <thead class="table-primary">
                        <tr>
                            <th class="col-custom">NO</th>
                            <th>NO INDUK SISWA</th>
                            <th>NAMA LENGKAP</th>
                            <th>KELAS</th> 
                            <th>FITUR</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($DataSiswa->count() > 0)
                            @foreach($DataSiswa as $siswa)
                            <tr>
                                <td class="align-middle col-custom">{{ $loop->iteration }}</td>
                                <td class="align-middle">{{ $siswa->nis }}</td>
                                <td class="align-middle">{{ $siswa->nama }}</td>
                                <td class="align-middle">{{ $siswa->kelas }}</td>
                                <td class="px-0 py-0">
                                    <div class="d-flex justify-content-center">
                                        <a href="{{ route('data-siswa.show', $siswa->id) }}" class="btn">
                                            <i class="bi bi-bar-chart-fill svg3" style="font-size: 1.3rem;"></i>
                                        </a>
                                        <a href="{{ route('data-siswa.edit', $siswa->id) }}" class="btn">
                                            <i class="bi bi-pen-fill svg-custom svg1" style="font-size: 1.3rem;"></i>
                                        </a>
                                        <form action="{{ route('data-siswa.destroy', $siswa->id) }}" class="" method="POST" type="button" onsubmit="return confirm('Delete?'">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn"><i class="bi bi-trash3-fill svg-custom svg2" style="font-size: 1.3rem;"></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        @else
                        <tr>
                            <td colspan="5" class="text-center">DATA KOSONG</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
                
            </div>
        </section>
</main>

@endsection 