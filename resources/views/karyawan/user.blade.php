@extends('layouts.user_type.auth')

@section('content')

<main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
  <div class="container-fluid py-4">
    
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">Karyawan</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                      No
                                    </th>
                                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                        NIP
                                    </th>
                                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">
                                        Foto
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                        Nama
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                        Email
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                        Jenis Kelamin
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                        No. Hp
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                        Status
                                    </th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no=1;
                                @endphp
                                @foreach ($karyawans as $karyawan )
                              <tr>
                                    <td class="ps-4">
                                      <p class="text-xs font-weight-bold mb-0">{{ $no++ }}</p>
                                    </td>
                                    <td class="ps-4">
                                        <p class="text-xs font-weight-bold mb-0">{{ $karyawan->nip }}</p>
                                    </td>
                                    <td>
                                        <div>
                                            <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3">
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $karyawan->name }}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $karyawan->user->email }}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $karyawan->jenis_kelamin }}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $karyawan->no_hp }}</p>
                                    </td>
                                    <td class="text-center">
                                        @if ( $karyawan->user->status == 1)
                                            <span class="badge badge-sm bg-gradient-success">aktif</span>
                                        @else
                                            <span class="badge badge-sm bg-gradient-success">tidak aktif</span>
                                        @endif
                                    </td> 
                              </tr>
                                @endforeach 
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        {{-- {{ $karyawans }}
        {{ $tamus }} --}}
      <div class="col-12">
        <div class="card mb-4 mx-4">
            <div class="card-header pb-0">
                <div class="d-flex flex-row justify-content-between">
                    <div>
                        <h5 class="mb-0">Tamu</h5>
                    </div>
                    <button href="#" class="btn bg-gradient-primary btn-sm mb-0" type="button" data-bs-toggle="modal" data-bs-target="#tamabahTamuModal">+&nbsp; Tamu Baru</button>
                </div>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                    No
                                </th>
                                <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                    ID
                                </th>
                                <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">
                                    Foto
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                    Nama
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                    Email
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                    Alamat
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                    Jenis Kelamin
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                    No.Hp
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                    status
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no=1;
                            @endphp
                            @foreach ($tamus as $tamu )
                           
                          <tr>
                                <td class="ps-4">
                                    <p class="text-xs font-weight-bold mb-0">{{ $no++ }}</p>
                                </td>
                                <td class="ps-4">
                                    <p class="text-xs font-weight-bold mb-0">{{ $tamu->id }}</p>
                                </td>
                                <td>
                                    <div>
                                        <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3">
                                    </div>
                                </td>
                                <td class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">{{ $tamu->name }}</p>
                                </td>
                                <td class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">{{ $tamu->user->email }}</p>
                                </td>
                                <td class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">{{ $tamu->alamat }}</p>
                                </td>
                                <td class="text-center">
                                    <span class="text-secondary text-xs font-weight-bold">{{ $tamu->jenis_kelamin }}</span>
                                </td>
                                <td class="text-center">
                                    <span class="text-secondary text-xs font-weight-bold">{{ $tamu->no_hp }}</span>
                                </td>
                                <td class="text-center">
                                    @if ( $tamu->user->status == 1)
                                         <span class="badge badge-sm bg-gradient-success">aktif</span>
                                    @else
                                        <span class="badge badge-sm bg-gradient-success">tidak aktif</span>
                                    @endif
                                </td>
                                <td class="text-center">
                                    <a href="#" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="edit user">
                                        <i class="fas fa-user-edit text-secondary" type="button" data-bs-toggle="modal" data-bs-target="#editTamuModal"></i>
                                    </a>
                                    <span>
                                        <a href="#" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="hapus user">
                                            <i class="cursor-pointer fas fa-trash text-danger"></i>
                                        </a>
                                        
                                    </span>
                                </td>
                          </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
  </div>
    </div>
  </div>

  <!-- Modal tambah tamu-->
<div class="modal fade" id="tamabahTamuModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        
            <h4 class="modal-title text-center mt-4" id="exampleModalLabel">Masukan Data Tamu Baru</h4>
          
        <div class="modal-body">
            <form method="post" action="{{ route('karyawan.tambah.pengguna') }}" >
                @csrf
                <div class="form-group">
                  <label for="exampleFormControlInput1">Email address</label>
                  <input type="email" class="form-control" placeholder="name@example.com " name="email" id="email" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Username</label>
                    <input type="text" class="form-control" placeholder="isi username" name="username" id="username" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Password</label>
                    <input type="password" class="form-control" placeholder="12345678" name="passworrd" id="passworrd" required>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlInput1">Nama Lengkap</label>
                    <input type="text" class="form-control" placeholder="isi nama lengkap" name="name" id="name" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Alamat</label>
                    <input type="text" class="form-control" placeholder="Jl. abc rt/rw kec. kab. prov." name="alamat" id="alamat" required>
                </div>
                <div class="row">
                <div class="form-group col-md-3 pe-0">
                    <label for="exampleFormControlInput1">Jenis Kelamin</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>Laki-laki</option>
                        <option>perempuan</option>
                    </select>
                </div>
                  <div class="form-group col-md-3 pe-0">
                    <label for="exampleFormControlInput1">Foto</label>
                    <input type="file" class="form-control" placeholder="name@example.com" name="foto" id="foto" required>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="exampleFormControlInput1">NO. Hp</label>
                    <input type="number" class="form-control" placeholder="0895XXXXXXXX" name="no_hp" id="no_hp" required>
                  </div>
                </div>
                <button type="button" class="btn bg-gradient-primary col-md-5 mt-2" data-dismiss="modal">Batal</button>
                <span>
                <button type="submit" class="btn bg-gradient-primary col-md-5 mt-2 ms-1" >Simpan</button>
                </span>
              </form>
        </div>
        
      </div>
    </div>
  </div>
 
  <!-- Modal edit tamu-->
<div class="modal fade" id="editTamuModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            
            <h4 class="modal-title text-center mt-4" id="exampleModalLabel">Edit Data Tamu</h4>
            
            <div class="modal-body mx-2">
                <form>
                    <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nama Lengkap</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Alamat</label>
                            <textarea class="form-control" id="exampleFormControlInput1" rows="3"></textarea>
                        
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6 pe-0">
                                <label for="exampleFormControlInput1">Jenis Kelamin</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>Laki-laki</option>
                                    <option>perempuan</option>
                                </select>
                            </div>
                            
                            <div class="form-group col-md-6">
                                <label for="exampleFormControlInput1">NO. Hp</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group" id="image-area"></div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Foto</label>
                            <input type="file" class="form-control" id="exampleFormControlInput1">
                        </div>
                    </div>
                </div>
                
                <button type="submit" class="btn bg-gradient-primary col-md-5 mt-2" >Batal</button>
                <span>
                <button type="submit" class="btn bg-gradient-primary col-md-5 mt-2 ms-1" >Simpan</button>
                </span>
                </form>
            </div>
            
            
            
            
        </div>
    </div>
</div>

@endsection

