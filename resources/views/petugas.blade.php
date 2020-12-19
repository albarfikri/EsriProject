@extends('layout.main')

@section('title', 'Petugas')

@section('head_title', 'Petugas')

@section('content')
          <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0">Tabel Petugas</h3>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="sort" data-sort="name">Nama Petugas</th>
                    <th scope="col">Posisi</th>
                    <th scope="col">No Hp</th>
                    <th scope="col">Email</th>
                    <th scope="col">TTL</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody class="list">
                  <tr>
                    <th scope="row">
                      <div class="media align-items-center">
                        <a href="#" class="avatar rounded-circle mr-3">
                          <img alt="Image placeholder" src="../assets/img/theme/bootstrap.jpg">
                        </a>
                        <div class="media-body">
                          <span class="name mb-0 text-sm">John Mark</span>
                        </div>
                      </div>
                    </th>
                    <td class="budget">
                    <span class="badge badge-dot mr-4">
                        <i class="bg-warning"></i>
                        <span class="status">Supervisor</span>
                      </span>
                    </td>
                    <td>
                      +6281247887512
                    <td>
                      john@rocketmail.com
                    </td>
                    <td>
                      California, 02 January 1987
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
                      <div class="media align-items-center">
                        <a href="#" class="avatar rounded-circle mr-3">
                          <img alt="Image placeholder" src="../assets/img/theme/bootstrap.jpg">
                        </a>
                        <div class="media-body">
                          <span class="name mb-0 text-sm">Peter Newt</span>
                        </div>
                      </div>
                    </th>
                    <td class="budget">
                    <span class="badge badge-dot mr-4">
                        <i class="bg-primary"></i>
                        <span class="status">Manager</span>
                      </span>
                    </td>
                    <td>
                      +6282398239283
                    <td>
                      peter.newt@yahoo.com
                    </td>
                    <td>
                      London, 14 April 1998
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
                      <div class="media align-items-center">
                        <a href="#" class="avatar rounded-circle mr-3">
                          <img alt="Image placeholder" src="../assets/img/theme/bootstrap.jpg">
                        </a>
                        <div class="media-body">
                          <span class="name mb-0 text-sm">Rebecca Alison</span>
                        </div>
                      </div>
                    </th>
                    <td class="budget">
                    <span class="badge badge-dot mr-4">
                        <i class="bg-primary"></i>
                        <span class="status">Manager</span>
                      </span>
                    </td>
                    <td>
                      +6282392383434
                    <td>
                      alison.rebecca@yahoo.com
                    </td>
                    <td>
                      Texas, 27 August 1984
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
                      <div class="media align-items-center">
                        <a href="#" class="avatar rounded-circle mr-3">
                          <img alt="Image placeholder" src="../assets/img/theme/bootstrap.jpg">
                        </a>
                        <div class="media-body">
                          <span class="name mb-0 text-sm">Roger Johnson</span>
                        </div>
                      </div>
                    </th>
                    <td class="budget">
                    <span class="badge badge-dot mr-4">
                        <i class="bg-warning"></i>
                        <span class="status">Technician</span>
                      </span>
                    </td>
                    <td>
                      +6281234343434
                    <td>
                      johnson.roger@gmail.com
                    </td>
                    <td>
                      New York, 19 March 1989
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
      