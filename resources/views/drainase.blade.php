@extends('layout.main')

@section('title', 'Jaringan Drainase')

@section('head_title', 'Jaringan Drainase')

@section('content')
          <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0">Tabel Jaringan Drainase</h3>
              <Button class="btn-sm btn-primary mt-3">Tambah data</Button>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Nama Drainase</th>
                    <th scope="col">Ukuran</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Tipe</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody class="list">
                  <tr>
                    <th scope="row">
                        <span class="name mb-0 text-sm">Drainase 1
                    </th>
                    <td class="budget">
                      10 Meter
                    </td>
                    <td>
                        Ini Deskripsi
                    </td>
                    <td>
                        Tipe 1
                    </td>
                    <td class="text-right">
                      <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                          <a class="dropdown-item" href="#">Edit</a>
                          <a class="dropdown-item" href="#">Hapus</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                        <span class="name mb-0 text-sm">Drainase 2
                    </th>
                    <td class="budget">
                      20 Meter
                    </td>
                    <td>
                        Ini Deskripsi
                    </td>
                    <td>
                        Tipe 2
                    </td>
                    <td class="text-right">
                      <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                          <a class="dropdown-item" href="#">Edit</a>
                          <a class="dropdown-item" href="#">Hapus</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                        <span class="name mb-0 text-sm">Drainase 3
                    </th>
                    <td class="budget">
                      30 Meter
                    </td>
                    <td>
                        Ini Deskripsi
                    </td>
                    <td>
                        Tipe 3
                    </td>
                    <td class="text-right">
                      <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                          <a class="dropdown-item" href="#">Edit</a>
                          <a class="dropdown-item" href="#">Hapus</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                        <span class="name mb-0 text-sm">Drainase 4
                    </th>
                    <td class="budget">
                      40 Meter
                    </td>
                    <td>
                        Ini Deskripsi
                    </td>
                    <td>
                        Tipe 4
                    </td>
                    <td class="text-right">
                      <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                          <a class="dropdown-item" href="#">Edit</a>
                          <a class="dropdown-item" href="#">Hapus</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- Card footer -->
            <div class="card-footer py-4">
              <nav aria-label="...">
                <ul class="pagination justify-content-end mb-0">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">
                      <i class="fas fa-angle-left"></i>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>
                  <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">
                      <i class="fas fa-angle-right"></i>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
@endsection
      