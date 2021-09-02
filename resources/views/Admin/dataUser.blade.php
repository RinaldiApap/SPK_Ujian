@extends('Admin/mainAdmin')

@section('title')
    Admin - User
@endsection

@section('breadcrumbs')
    Admin > Data User
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
                        <th>Username</th>
                        <th>Nama</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>$320,800</td>
                        <td>
                            <button class="btn btn-info"><i class="fa fa-edit"></i> Edit</button>
                            <button class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</button>
                        </td>
                      </tr>
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