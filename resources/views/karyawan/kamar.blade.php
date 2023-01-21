@extends('layouts.user_type.auth')

@section('content')

<div>

    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">Semua Kamar</h5>
                        </div>
                        <button href="#" class="btn bg-gradient-dark btn-sm mb-0" type="button" data-bs-toggle="modal" data-bs-target="#tamabahKamarModal">+&nbsp; Kamar Baru</button>
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
                                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 me-0 pe-0">
                                        No Kamar
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

                                @php
                                    $no=1;
                                @endphp
                                @foreach ($kamars as $kamar )

                                <tr>
                                    <td class="ps-4">
                                        <p class="text-xs font-weight-bold mb-0">{{ $no++ }}</p>
                                    </td>
                                    <td class="ps-4">
                                        <p class="text-xs font-weight-bold mb-0">{{ $kamar->no_kamar }}</p>
                                    </td>
                                    <td class="mx-0 px-0">
                                        <div class="px-0 mx-0">
                                            <span>
                                                @if ($kamar->foto_kamar !== null)
                                                <img src="{{ asset('storage/img/'.$kamar->foto_kamar) }}"height="100px" width="100px" class="rounded img-fluid"/>
                                                @else
                                                    [foto belum di input]

                                                @endif
                                            </span>
                                            <span>
                                                @if ($kamar->foto_wc !== null)
                                                <img src="{{ asset('storage/img/'.$kamar->foto_wc) }}"height="100px" width="100px" class="rounded img-fluid"/>
                                                @else
                                                    [foto belum di input]

                                                @endif
                                            </span>
                                            <span>
                                                @if ($kamar->foto_ruangan !== null)
                                                <img src="{{ asset('storage/img/'.$kamar->foto_ruangan) }}" height="100px" width="100px" class="rounded img-fluid"/>
                                                @else
                                                    [foto belum di input]

                                                @endif
                                            </span>
                                            {{-- <span><img src="../assets/img/team-2.jpg" height="100px" width="100px" class="rounded img-fluid"></span> --}}
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $kamar->jenisKamar->name }}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $kamar->harga }}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $kamar->deskripsi }}</p>
                                    </td>
                                    <td class="text-center">
                                        @if ( $kamar->statusKamar->id == 1)
                                            <span class="badge badge-sm bg-gradient-success">{{ $kamar->statusKamar->name }}</span>
                                        @elseif ($kamar->statusKamar->id == 2)
                                            <span class="badge badge-sm bg-gradient-info">{{ $kamar->statusKamar->name }}</span>
                                        @else
                                            <span class="badge badge-sm bg-gradient-danger">{{ $kamar->statusKamar->name }}</span>
                                        @endif

                                    </td>
                                    <td class="text-center">
                                        <a href="#" class="mx-0" data-bs-toggle="tooltip" data-bs-original-title="edit data kamar">
                                            <i class="fas fa-user-edit text-secondary" type="button" data-bs-toggle="modal" data-bs-target="#editKamarModal" data-id="{{ $kamar->id }}" id="btn-edit-kamar"></i>
                                        </a>
                                        <span style="float: right;">
                                            {!! Form::open(['url' => 'kamar/hapus/'.$kamar->id, 'method' => 'DELETE']) !!}
                                            <a href="#" class="me-3" data-bs-toggle="tooltip" data-bs-original-title="hapus kamar">
                                                {{ Form::button('', ['class' => 'cursor-pointer fas fa-trash text-danger bg-transparent border-0', 'onclick' => "deleteKamarConfirmation('".$kamar->no_kamar."')"]) }}
                                            </a>
                                            {!! Form::close() !!}

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

<!-- Modal tambah kamar-->
<div class="modal fade" id="tamabahKamarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

                <h4 class="modal-title text-center mt-4" id="exampleModalLabel">Masukan Data Kamar</h4>

            <div class="modal-body">
                {{-- @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif --}}
                <form method="post" action="{{ route('karyawan.tambah.kamar') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                    <label for="no_kamar">No Kamar</label>
                    <input type="text" class="form-control" placeholder="A1" name="no_kamar" id="no_kamar">
                    </div>

                    <div class="form-group">
                        <label for="harga">harga</label>
                        <input type="number" class="form-control" placeholder="masukan dalam rupiah" name="harga" id="harga">
                    </div>
                    <div class="form-group col-md-6 pe-0">
                        <label for="jenis_kamar_id">Jenis Kamar</label>
                        <select class="form-control" name="jenis_kamar_id" id="jenis_kamar_id">
                            <option>pilih</option>

                            @foreach ($jenis_kamar as $kamar)
                               <option value={{ $kamar->id }}>{{  $kamar->name }}</option>
                            @endforeach

                        </select>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-4 pe-0">
                            <label for="foto_kamar">Foto kamar</label>
                            <input type="file" class="form-control" placeholder="uplode foto" name="foto_kamar" id="foto_kamar">
                        </div>
                        <div class="form-group col-md-4 pe-0">
                            <label for="">Foto Wc</label>
                            <input type="file" class="form-control" placeholder="uplode foto" name="foto_wc" id="foto_wc">
                        </div>
                        <div class="form-group col-md-4 pe-0">
                            <label for="">Foto Ruangan Lain</label>
                            <input type="file" class="form-control" placeholder="uplode foto" name="foto_ruangan" id="foto_ruangan">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea class="form-control" rows="3" name="deskripsi" id="deskripsi"></textarea>
                    </div>
                    <button type="button" class="btn bg-gradient-secondary col-md-5 mt-2" data-bs-dismiss="modal" >Batal</button>
                    <span>
                    <button type="submit" class="btn bg-gradient-dark col-md-5 mt-2 ms-1" >Simpan</button>
                    </span>
                </form>
            </div>

        </div>
    </div>
</div>

<!-- Modal tambah kamar nyoba lareavel colective-->
{{-- <div class="modal fade" id="tamabahKamarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

                <h4 class="modal-title text-center mt-4" id="exampleModalLabel">Masukan Data Kamar</h4>

            <div class="modal-body">
                {!! Form::open(['route' => ['karyawan.tambah.kamar']]) !!}
                    <div class="form-group">

                        {{ Form::label('no_kamar', 'No Kamar') }}
                        {{ Form::text('no_kamar', null, ['class' => 'form-control', 'placeholder'=>'A1', 'required' => 'true']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('harga', 'Harga') }}
                        {{ Form::text('harga', null, ['class' => 'form-control', 'placeholder'=>'masukan dalam rupiah', 'required' => 'true']) }}
                    </div>
                    <div class="form-group col-md-6 pe-0">
                        {{ Form::label('jenis_kamar_id', 'Jenis Kamar') }}
                        {{ Form::select('jenis_kamar_id', ['0' , '1', '2', 'class'=>'form-control'],1, ['class' => 'form-control',
                        'required' => 'true']) }}

                    </div>
                    <div class="row">
                        <div class="form-group col-md-4 pe-0">

                            {{ Form::label('foto_kamar', 'Foto Kamar') }}
                            {{ Form::file('foto_kamar', ['class' => 'form-control']) }}

                        </div>
                        <div class="form-group col-md-4 pe-0">
                            {{ Form::label('foto_wc', 'Foto WC') }}
                            {{ Form::file('foto_wc', ['class' => 'form-control']) }}

                        </div>
                        <div class="form-group col-md-4 pe-0">
                            {{ Form::label('foto_ruangan', 'Foto Ruangan Lain') }}
                            {{ Form::file('foto_ruangan', ['class' => 'form-control']) }}

                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('deskripsi', 'Deskripsi') }}
                        {{ Form::textarea('deskripsi', null, ['class' => 'form-control', 'placeholder'=>'deskripsi kamar', 'required' => 'true', 'rows'=>'3']) }}

                    </div>
                    <button type="button" class="btn bg-gradient-primary col-md-5 mt-2" data-dismiss="modal" >Batal</button>
                    <span>
                    {{ Form::submit('Simpan',['class'=>'btn bg-gradient-primary col-md-5 mt-2 ms-1']) }}
                    </span>
                {!! Form::close() !!}

            </div>

        </div>
    </div>
</div> --}}

<!-- Modal edit kamar-->
<div class="modal fade" id="editKamarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">

            <h4 class="modal-title text-center mt-4" id="exampleModalLabel">Edit Data Kamar</h4>

            <div class="modal-body mx-2">
                <form method="post" action="{{ route('karyawan.edit.kamar') }}" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <input type="hidden" name="id_kamar" id="edit_kamar">
                    <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="edit-no">No_Kamar</label>
                            <input type="text" class="form-control" id="edit-no" name="no_kamar">
                        </div>
                        <div class="form-group">
                            <label for="edit-harga">Harga</label>
                            <input type="number" class="form-control" id="edit-harga" name="harga">
                        </div>
                        <div class="form-group col-md-10 pe-0">
                            <label for="edit-jenis">Jenis Kamar</label>
                            <select class="form-control" id="edit-jenis" name="jenis_kamar_id">
                                <option>pilih</option>
                                @foreach ($jenis_kamar as $kamar)
                               <option value={{ $kamar->id }}>{{  $kamar->name }}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="edit-deskripsi">Deskripsi</label>
                            <textarea class="form-control" id="edit-deskripsi" rows="3" name="deskripsi"></textarea>
                        </div>

                    </div>
                    <div class="col-md-7">
                        <div class="row">
                            <div class="col-md-6  pe-0">
                                <label for="edit-foto_kamar">Foto Kamar</label>
                                <div class="form-group" id="image-kamar"></div>
                                <div class="form-group ">
                                    <input type="file" class="form-control" id="edit-foto_kamar" name="foto_kamar">
                                </div>
                            </div>
                            <div class="col-md-6 ms-0 pe-0">
                                <label for="edit-foto_wc">Foto Wc</label>
                                <div class="form-group" id="image-wc"></div>
                                <div class="form-group">
                                    <input type="file" class="form-control" id="edit-foto_wc" name="foto_wc">
                                </div>
                            </div>
                        </div>
                        <div class="ps-0 ms-0">
                            <label for="edit-foto_ruangan">Foto Ruangan Lain</label>
                            <div class="form-group" id="image-ruangan"></div>
                            <div class="form-group col-md-6">
                                <input type="file" class="form-control" id="edit-foto_ruangan" name="foto_ruangan">
                            </div>
                        </div>
                    </div>
                </div>
                    <input type="hidden" name="id" id="edit-id"/>
                    <input type="hidden" name="old_foto_kamar" id="edit-old-foto_kamar"/>
                    <input type="hidden" name="id" id="edit-id"/>
                    <input type="hidden" name="old_foto_wc" id="edit-old-foto_wc"/>
                    <input type="hidden" name="id" id="edit-id"/>
                    <input type="hidden" name="old_foto_ruangan" id="edit-old-foto_ruangan"/>
                    <button type="button" class="btn bg-gradient-secondary col-md-5 mt-2" data-bs-dismiss="modal">Batal</button>
                <span>
                    <button type="submit" class="btn bg-gradient-dark col-md-5 mt-2 ms-1" >Simpan</button>
                </span>
                </form>
            </div>


        </div>
    </div>
</div>

{{-- edit kamar nyoba laravel collective --}}
{{-- <div class="modal fade" id="editKamarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">

            <h4 class="modal-title text-center mt-4" id="exampleModalLabel">Edit Data Kamar</h4>

            <div class="modal-body mx-2">
                {!! Form::model($kamar, ['url' => 'kamar/'.$kamar->id, 'method' => 'PUT']) !!}
                    <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {{ Form::label('no_kamar', 'No Kamar') }}
                            {{ Form::text('no_kamar', null, ['class' => 'form-control']) }}

                        </div>
                        <div class="form-group">
                            {{ Form::label('harga', 'Harga') }}
                            {{ Form::text('harga', null, ['class' => 'form-control', ]) }}

                        </div>
                        <div class="form-group col-md-6 pe-0">
                            {{ Form::label('jenis_kamar_id', 'Jenis Kamar') }}
                            {{ Form::select('jenis_kamar_id', ['0' , '1', '2', 'class'=>'form-control'],1, ['class' => 'form-control',
                            'required' => 'true']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('deskripsi', 'Deskripsi') }}
                            {{ Form::textarea('deskripsi', null, ['class' => 'form-control', 'rows'=>'3']) }}
                        </div>

                    </div>
                    <div class="col-md-6">

                        <div class="form-group" id="image-area"></div>
                        <div class="form-group">
                            {{ Form::label('foto_kamar', 'Foto Kamar') }}
                            <div class="form-group" id="image-area"><img src="{{ asset('storage/img/'.$kamar->foto_kamar) }}"height="100px" width="100px" class="rounded img-fluid"/></div>
                            {{ Form::file('foto_kamar', ['class' => 'form-control']) }}
                        </div>
                        <div class="form-group" id="image-area"></div>
                        <div class="form-group">
                            <label for="edit-foto_wc">Foto Wc</label>
                            <input type="file" class="form-control" id="edit-foto_wc" name="">
                        </div>
                        <div class="form-group" id="image-area"></div>
                        <div class="form-group">
                            <label for="edit-foto_ruangan">Foto Ruangan Lain</label>
                            <input type="file" class="form-control" id="edit-foto_ruangan" name="">
                        </div>

                </div>
                    <input type="hidden" name="id" id="edit-id"/>
                    <input type="hidden" name="old_foto_kamar" id="edit-old-foto_kamar"/>

                <button type="button" class="btn bg-gradient-primary col-md-5 mt-2" data-dismiss="modal">Batal</button>
                <span>
                <button type="submit" class="btn bg-gradient-primary col-md-5 mt-2 ms-1" >Simpan</button>
                </span>
                {!! Form::close() !!}
            </div>




        </div>
    </div>
</div> --}}
@stop

@section('js')
    <script>
        $(function(){
            $(document).on('click','#btn-edit-kamar', function(){
                let id = $(this).data('id');
                $('#image-kamar').empty();
                $('#image-wc').empty();
                $('#image-ruangan').empty();

                $.ajax({
                    type: "get",
                    url: "{{ url('/admin/ajaxadmin/dataKamar') }}/"+id,
                    dataType: 'json',
                    success: function(res){
                        console.log(res);
                        $('#edit_kamar').val(res.id);
                        $('#edit-no').val(res.no_kamar);
                        $('#edit-harga').val(res.harga);

                        $('#edit-jenis').val(res.jenis_kamar_id);
                        $('#edit-deskripsi').val(res.deskripsi);
                        $('#edit-id').val(res.id);
                        $('#edit-old-foto_kamar').val(res.foto_kamar);
                        $('#edit-old-foto_wc').val(res.foto_wc);
                        $('#edit-old-foto_ruangan').val(res.foto_ruangan);

                        if (res.foto_kamar !== null) {
                            $('#image-kamar').append("<img src='/storage/img/"+res.foto_kamar+"' width='150px'/>");

                        }else{
                            $('#image-kamar').append('[Gambar tidak tersedia]');

                        }
                        if (res.foto_wc !== null) {
                            $('#image-wc').append("<img src='/storage/img/"+res.foto_wc+"' width='150px'/>");

                        }else{
                            $('#image-wc').append('[Gambar tidak tersedia]');

                        }
                        if (res.foto_ruangan !== null) {
                            $('#image-ruangan').append("<img src='/storage/img/"+res.foto_ruangan+"' width='150px'/>");

                        }else{
                            $('#image-ruangan').append('[Gambar tidak tersedia]');

                        }

                    },
                });
            });
        });


    </script>


@stop
