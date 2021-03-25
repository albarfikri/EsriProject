@extends('layout.main')

@section('title', 'Menu')

@section('head_title', 'Menu Dimanis')

@section('content')
<!-- Page content -->
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h3 class="mb-0">Tipe Drainase<h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="table-responsive mb-3">
                                <table class="table align-items-center table-flush">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Tipe</th>
                                            <th scope="col">#</th>
                                        </tr>
                                    </thead>
                                    <tbody class="list">
                                    <?php $i = 1 ?>
                                    @foreach($kategori as $k)
                                        <tr>
                                            <td>{{ $i }}</td>
                                            <td>{{ $k['kategori']}}</td>
                                            <td><a href="{{ url('menu/deleteTipeDrainase/' . $k['id']) }}" class="btn btn-sm btn-danger">hapus</a></td>
                                        </tr>
                                    <?php $i++ ?>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    

                    <form action="{{ url('menu/addTipeDrainase') }}" method="post" enctype="multipart/form-data" role="form">
                        @csrf
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group mb-3">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-map-big"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="Tambah Tipe" type="text" name="tipe_baru">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <button class="btn btn-primary" type="submit">Tambah</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection