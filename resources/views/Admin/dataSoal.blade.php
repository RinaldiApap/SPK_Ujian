@extends('Admin/mainAdmin')

@section('title')
    Admin - Soal
@endsection

@section('breadcrumbs')
    Admin > Data Soal
@endsection

@section('isi')
    <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Data User</strong>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Soal</th>
                        <th>Kunci Jwb</th>
                        <th>Status</th>
                        <th>Kategori</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($soal as $item)
                      <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td> {{ $item->soal }} </td>
                        <td> {{ $item->knc_jawaban }} </td>
                         @if ($item->aktif == 'N')
                         <td class="text-danger">Tidak Aktif</td>
                            @else
                         <td class="text-success">Aktif</td>
                            @endif 
                         
                        <td> {{ $item->kategori }} </td>
                        <td>
                            <button class="btn btn-info"><i class="fa fa-edit"></i> Edit</button>
                            <button class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</button>
                        </td>
                      </tr>
                      @endforeach
                      
                    </tbody>
                  </table>
                        </div>
                    </div>
                </div>


                </div>
            </div><!-- .animated -->
@endsection

@section('script')
    
@endsection