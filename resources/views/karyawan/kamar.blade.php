@extends('layouts.user_type.auth')

@section('content')

<div>
    {{-- <div class="alert alert-secondary mx-4" role="alert">
        <span class="text-white">
            <strong>Add, Edit, Delete features are not functional!</strong> This is a
            <strong>PRO</strong> feature! Click <strong>
            <a href="https://www.creative-tim.com/live/soft-ui-dashboard-pro-laravel" target="_blank" class="text-white">here</a></strong>
            to see the PRO product!
        </span>
    </div> --}}

    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">Semua Kamar</h5>
                        </div>
                        <button href="#" class="btn bg-gradient-primary btn-sm mb-0" type="button" data-bs-toggle="modal" data-bs-target="#tamabahKamarModal">+&nbsp; Kamar Baru</button>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 me-0 pe-0">
                                        No
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7 px-0 mx-0">
                                        Foto
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                        jenis
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                        Harga
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                        Deskripsi
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                        Status
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
                                    <td class="mx-0 px-0">
                                        <div class="pe-0 me-0 ms-5">
                                            <img src="../assets/img/team-2.jpg" height="100px" width="100px" class="rounded img-fluid">
                                            <img src="../assets/img/team-2.jpg" height="100px" width="100px" class="rounded img-fluid">
                                            <img src="../assets/img/team-2.jpg" height="100px" width="100px" class="rounded img-fluid">
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">Vip</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">500000</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor cupiditate quidem voluptatum?</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">terisi</p>
                                    </td>
                                    <td class="text-center">
                                        <a href="#" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="edit data kamar">
                                            <i class="fas fa-user-edit text-secondary"></i>
                                        </a>
                                        <span>
                                            <a href="#" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="hapus kamar">
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
<div class="modal fade" id="tamabahKamarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        
            <h4 class="modal-title text-center mt-4" id="exampleModalLabel">Masukan Data Kamar</h4>
          
        <div class="modal-body">
            <form>
                <div class="form-group">
                  <label for="exampleFormControlInput1">No Kamar</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="A1">
                </div>
                
                <div class="form-group">
                    <label for="exampleFormControlInput1">harga</label>
                    <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="masukan dalam rupiah">
                </div>
                <div class="form-group col-md-6 pe-0">
                    <label for="exampleFormControlInput1">Jenis Kamar</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>A</option>
                        <option>B</option>
                    </select>
                </div>
                <div class="row">
                    
                    <div class="form-group col-md-4 pe-0">
                        <label for="exampleFormControlInput1">Foto kamar</label>
                        <input type="file" class="form-control" id="exampleFormControlInput1" placeholder="uplode foto">
                    </div>
                    <div class="form-group col-md-4 pe-0">
                        <label for="exampleFormControlInput1">Foto Wc</label>
                        <input type="file" class="form-control" id="exampleFormControlInput1" placeholder="uplode foto">
                    </div>
                    <div class="form-group col-md-4 pe-0">
                        <label for="exampleFormControlInput1">Foto Ruangan Lain</label>
                        <input type="file" class="form-control" id="exampleFormControlInput1" placeholder="uplode foto">
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Deskripsi</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
              </form>
        </div>
        
        
        <button type="submit" class="btn bg-gradient-primary m-4">Simpan</button>
        
      </div>
    </div>
  </div>

@endsection