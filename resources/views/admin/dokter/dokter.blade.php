@extends('admin.templateadmin')
@section('title', 'Data Dokter')

@section('content')
    @include('admin.includes.sidebar-mobile')
    <div class="breadcome-area mg-b-30 small-dn">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="breadcome-heading">
                                    <form role="search" class="">
                                        <input type="text" placeholder="Search..." class="form-control">
                                        <a href=""><i class="fa fa-search"></i></a>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <ul class="breadcome-menu">
                                    <li><a href="/admin">Home</a> <span class="bread-slash">/</span>
                                    </li>
                                    <li><span class="bread-blod">@yield('title') </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- content --}}
    <div class="data-table-area mg-b-15">
        <div class="container-fluid">
            <div class="row">
                @if (session('pesan'))
                    <div class="alert alert-success alert-success-style1">
                        <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
                            <span class="icon-sc-cl" aria-hidden="true">&times;</span>
                        </button>
                        <span class="adminpro-icon adminpro-checked-pro admin-check-sucess"></span>
                        {{ session('pesan') }}
                    </div>
                @endif
                <div class="col-lg-12">
                    <div class="sparkline13-list shadow-reset">
                        <div class="sparkline13-hd">
                            <div class="main-sparkline13-hd">
                                <h1>
                                    @yield('title')
                                </h1>
                                <div class="sparkline13-outline-icon">
                                    <span class="sparkline13-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                    <span><i class="fa fa-wrench"></i></span>
                                    <span class="sparkline13-collapse-close"><i class="fa fa-times"></i></span>
                                </div>
                                <a class="Primary mg-b-10 btn btn-sm btn-danger" href="#" data-toggle="modal"
                                    data-target="#PrimaryModalhdbgcl">Add Dokter <span><i class="fa fa-plus"></i></span>
                                </a>
                                {{-- addModal --}}
                                <div id="PrimaryModalhdbgcl"
                                    class="modal modal-adminpro-general default-popup-PrimaryModal fade" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header header-color-modal bg-color-4">
                                                <h4 class="modal-title">Add Dokter</h4>
                                                <div class="modal-close-area modal-close-df">
                                                    <a class="close" data-dismiss="modal" href="#"><i
                                                            class="fa fa-close"></i></a>
                                                </div>
                                            </div>
                                            <div class="modal-body">
                                                <div class="sparkline12-graph">
                                                    <div class="basic-login-form-ad">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="all-form-element-inner">
                                                                    <form action="/admin/adddokter" method="POST">
                                                                        @csrf
                                                                        <div class="form-group-inner">
                                                                            <div class="row">
                                                                                <div class="col-lg-4">
                                                                                    <label
                                                                                        class="login2 pull-right pull-right-pro">Nama
                                                                                        Dokter</label>
                                                                                </div>
                                                                                <div class="col-lg-8">
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        name="nama_dokter"
                                                                                        class="@error('nama_dokter') is-invalid @enderror" />
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group-inner">
                                                                            <div class="row">
                                                                                <div class="col-lg-4">
                                                                                    <label
                                                                                        class="login2 pull-right pull-right-pro">Jabatan</label>
                                                                                </div>
                                                                                <div class="col-lg-8">
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        name="jabatan"
                                                                                        class="@error('jabatan') is-invalid @enderror" />
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group-inner">
                                                                            <div class="row">
                                                                                <div class="col-lg-4">
                                                                                    <label
                                                                                        class="login2 pull-right pull-right-pro">Jadwal
                                                                                        Siang
                                                                                    </label>
                                                                                </div>
                                                                                <div class="col-lg-8">
                                                                                    <input type="text"
                                                                                        class="form-control" name="siang"
                                                                                        class="@error('siang') is-invalid @enderror" />
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group-inner">
                                                                            <div class="row">
                                                                                <div class="col-lg-4">
                                                                                    <label
                                                                                        class="login2 pull-right pull-right-pro">Jadwal
                                                                                        Malam
                                                                                    </label>
                                                                                </div>
                                                                                <div class="col-lg-8">
                                                                                    <input type="text"
                                                                                        class="form-control" name="malam"
                                                                                        class="@error('malam') is-invalid @enderror" />
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group-inner">
                                                                            <div class="row">
                                                                                <div class="col-lg-4">
                                                                                    <label
                                                                                        class="login2 pull-right pull-right-pro">Keterangan</label>
                                                                                </div>
                                                                                <div class="col-lg-8">
                                                                                    <input type="textarea"
                                                                                        class="form-control"
                                                                                        name="keterangan"
                                                                                        class="@error('keterangan') is-invalid @enderror" />
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group-inner">
                                                                            <div class="login-btn-inner">
                                                                                <div class="row">
                                                                                    <div class="col-lg-4"></div>
                                                                                    <div class="col-lg-8">
                                                                                        <div
                                                                                            class="login-horizental cancel-wp pull-left">
                                                                                            <button class="btn btn-white"
                                                                                                type="submit">Cancel</button>
                                                                                            <button
                                                                                                class="btn btn-sm btn-primary login-submit-cs"
                                                                                                type="submit">Save
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- end addModal --}}
                            </div>
                        </div>
                        <div class="sparkline13-graph">
                            <div class="datatable-dashv1-list custom-datatable-overright">
                                <div id="toolbar">
                                    <select class="form-control">
                                        <option value="">Export Basic</option>
                                        <option value="all">Export All</option>
                                        <option value="selected">Export Selected</option>
                                    </select>
                                </div>
                                <table id="datatable" data-toggle="table" data-pagination="true" data-search="true"
                                    data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true"
                                    data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                    data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true"
                                    data-toolbar="#toolbar">
                                    <thead>
                                        <tr>
                                            <th data-field="state" data-checkbox="true"></th>
                                            <th data-field="id">No</th>
                                            <th data-field="nama_dokter" data-editable="true">Nama Dokter</th>
                                            <th data-field="jabatan" data-editable="true">Jabatan</th>
                                            <th data-field="siang" data-editable="true">Praktek Siang</th>
                                            <th data-field="malam" data-editable="true">Praktek Malam</th>
                                            <th data-field="keterangan">Keterangan</th>
                                            <th data-field="action">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        @foreach ($dokter as $data)
                                            <tr>
                                                <td></td>
                                                <td>{{ $no++ }} </td>
                                                <td>{{ $data->nama_dokter }} </td>
                                                <td>{{ $data->jabatan }} </td>
                                                <td>{{ $data->siang }} WIB - Selesai</td>
                                                <td>{{ $data->malam }} WIB - Selesai</td>
                                                <td>{{ $data->keterangan }} </td>
                                                <td>
                                                    <a href="/admin/updatedokter/{{$data->id}}"><i class="fa fa-edit text-success"></i></a>
                                                    <a href=""><i class="fa fa-trash text-danger"></i></a>
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
    </div>
    {{-- end content --}}
@endsection
