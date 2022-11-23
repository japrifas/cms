@extends('admin.admin_master')

@section('admin')
    <div class="page-content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">User Info</div>
                        <div class="card-body">
                            <div class="mt-4">
                                <center>
                                    <img class="rounded-circle avatar-xl"
                                        src="{{ !empty($adminData->profile_image)
                                            ? url('upload/admin_images/' . $adminData->profile_image)
                                            : url('upload/default.png') }}"
                                        alt="Card image cap">
                                </center>
                            </div>


                            {{-- <h4 class="card-title">Name : {{ $adminData->name }}</h4>
                            <h4 class="card-title">User Email : {{ $adminData->email }}</h4>
                            <h4 class="card-title">username : {{ $adminData->username }}</h4> --}}
                            <table class="table mt-2">

                                <tbody>
                                    <tr>
                                        <td>Name</td>
                                        <td>{{ $adminData->name }}</td>
                                    </tr>

                                    <tr>
                                        <td>Email</td>
                                        <td>{{ $adminData->email }}</td>
                                    </tr>
                                    <tr>
                                        <td>Username</td>
                                        <td>{{ $adminData->username }}</td>
                                    </tr>

                                </tbody>
                            </table>

                            <a href="{{ route('edit.profile') }}"
                                class="btn btn-primary btn-rounded waves-effect waves-light">Edit Profile</a>
                        </div>
                    </div>
                </div>





            </div>
        </div>
    </div>
@endsection
