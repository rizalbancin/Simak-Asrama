@extends('layouts.app')

@section('content')
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Catatan Kebaikan & Keburukan</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="/catatan-yaumiyah">Catatan Kebaikan & Keburukan</a></li>
                            <li class="active">Catatan Kebaikan & Keburukan Siswa</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.allert')
<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Catatan Kebaikan & Keburukan Siswa</strong>

                    </div>
                    <div class="card-body">
                        <!-- Data Siswa -->

                        <!-- END OF DATA SISWA -->
                        <br>
                        <!-- DATA AMALAN -->
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr class="table-tengah">
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Jumlah Catatan Kebaikan</th>
                                    <th>Jumlah Catatan Keburukan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach($data_user as $index => $user)
                                        <td>{{ ++$index }}</td>
                                        <td><a href="/profile/{{ $user->id }}/view">{{ $user -> nama }}</a></td>
                                        <td>{{ $user->catatanKebaikan->count() }}
                                        </td>
                                        <td>{{ $user->catatanKeburukan->count() }}</td>
                                        <td>
                                            <a href="/catatan-kebaikan-siswa/{{ $user->id }}"
                                                class="btn btn-primary btn-sm">View</a>
                                        </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- END OF DATA SISWA -->

                    </div>
                </div>
            </div>


        </div>
    </div><!-- .animated -->
</div><!-- .content -->

<!-- ./animated -->
<!-- ./content -->
<div class="clearfix">

</div>
@endsection