@extends('layout/template')

@section('title', 'Services')

@section('mahasiswa')

<section id="services" class="services">
    <div class="container mt-5">
        <div class="section-title" data-aos="zoom-out">
            <h2>mahasiswa</h2>
            <p>daftar mahasiswa</p>
            <h5>Menggunakan blade @.foreach</h5>
        </div>
        <table class="table">
            <thead class="thread-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Program Studi</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $mahasiswa as $mhs )
                <tr>
                    <th scope="row">{{$loop -> iteration}}</th>
                    <td>{{$mhs -> nama}}</td>
                    <td>{{$mhs -> nim}}</td>
                    <td>{{$mhs -> prodi}}</td>
                    <td>
                        <a href="" span class="badge bg-success">EDIT</a>
                        <a href="" span class="badge bg-danger">DELETE</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection