@extends('layouts.app_tamu')
@section('content')
    @include('components.form_bukti_reservasi')
    @include('layouts.navbars_tamu.navbar')

    <!-- bradcam_area_start -->
    <div class="bradcam_area breadcam_bg_2">
        <h3>Cek Pesanan Anda</h3>
    </div><!-- bradcam_area_end -->

    <div class="container">
        <div class="row justify-content-center">
            <table class="table my-5">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">NO</th>
                        <th scope="col">NO KAMAR</th>
                        <th scope="col">JENIS KAMAR</th>
                        <th scope="col">CHECK-IN</th>
                        <th scope="col">CHECK-OUT</th>
                        <th scope="col">TOTAL BAYAR</th>
                        <th scope="col">BUKTI PEMBAYARAN</th>
                        <th scope="col">STATUS</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no=1;
                    @endphp
                    @foreach ($reservasi as $key => $data)
                        <tr>
                            <th scope="row">{{ $no++ }}</th>
                            <td>{{ $data->kamar->no_kamar }}</td>
                            <td>{{ $data->kamar->jenisKamar->name }}</td>
                            <td>{{ $data->tgl_masuk }}</td>
                            <td>{{ $data->tgl_keluar }}</td>
                            <td>{{ $data->total_pembayaran }}</td>
                            <td>
                                
                                @if ($data->bukti_pembayaran)
                                    <img src="{{ asset("storage/$data->bukti_pembayaran") }}" width="200px" height="200px">
                                @else
                                    <a class="btn btn-primary popup-with-form btnReservasi" href="#buktiReservasi"
                                        data-id="{{ $data->id }}">Uplode Bukti
                                        Pembayaran</a>
                                @endif

                            </td>
                            <td>{{ $data->status_reservasi }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>


        </div>
    </div>

    @push('scripts')
        <script>
            $(".btnReservasi").click(function() {
                var id_reservasi = $(this).data('id');
                $('#id_reservasi').val(id_reservasi);
            });
        </script>
    @endpush
    @include('layouts.footers_tamu.footer')
@endsection
