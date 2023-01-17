@extends('layouts.user_type.auth')

@section('content')


    
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
                                        No. Hp
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                        Status
                                    </th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                              <tr>
                                    <td class="ps-4">
                                        <p class="text-xs font-weight-bold mb-0">1</p>
                                    </td>
                                    <td>
                                        <div>
                                            <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3">
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">UMai</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">admin@mail.com</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">0877</p>
                                    </td>
                                    <td class="text-center">
                                        <span class="badge badge-sm bg-gradient-success">Aktif</span>
                                    </td>
                                    
                              </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
      </div>

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
                          <tr>
                                <td class="ps-4">
                                    <p class="text-xs font-weight-bold mb-0">1</p>
                                </td>
                                <td>
                                    <div>
                                        <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3">
                                    </div>
                                </td>
                                <td class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">Rudi</p>
                                </td>
                                <td class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">tamu1@mail.com</p>
                                </td>
                                <td class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">Jl. Kemangi</p>
                                </td>
                                <td class="text-center">
                                    <span class="text-secondary text-xs font-weight-bold">laki-laki</span>
                                </td>
                                <td class="text-center">
                                    <span class="text-secondary text-xs font-weight-bold">0895395256262</span>
                                </td>
                                <td class="text-center">
                                    <span class="badge badge-sm bg-gradient-success">Aktif</span>
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
            <form>
                <div class="form-group">
                  <label for="exampleFormControlInput1">Email address</label>
                  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Username</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="isi username">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Password</label>
                    <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="12345678">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlInput1">Nama Lengkap</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="isi nama lengkap">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Alamat</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Jl. abc rt/rw kec. kab. prov.">
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
                    <input type="file" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="exampleFormControlInput1">NO. Hp</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="0895XXXXXXXX">
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
</main>
 
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

