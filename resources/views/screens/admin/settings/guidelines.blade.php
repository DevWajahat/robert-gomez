@extends('layouts.admin.app')
@section('content')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css" />
    <div class="content-wrapper">
        <section class="content" style="min-height: 100vh;">
            <div class="container-fluid">
                <div class="dashboard-content">
                    <x-settings-tab />
                </div>
                <div class="dashboard-content">
                    <table id="companyAdmins">
                        <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Role</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>sadfasd</td>
                                <td>sdfasdf</td>
                                <td>sdfasd</td>
                                <td>asdfasdf</td>
                                <td>sdfasasdf</td>
                                <td>asdfasdf</td>
                                <td>sdfsafa<button class="btn user-edit-btn" data-id=""><i
                                            class="fa-solid fa-pencil"></i></button></td>
                                {{-- <td>robert@gmail.com</td>
                                        <td>111111111</td>
                                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td> --}}
                            </tr>
                        </tbody>

                    </table>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(function() {
            $("#companyAdmins").DataTable({
                processing: true,
                language: {
                    paginate: {
                        previous: '<i class="fa-solid fa-angle-left"></i>',
                        next: '<i class="fa-solid fa-angle-right"></i>',
                    },
                },
                columns: [{
                        data: "ID",
                    },
                    {
                        data: "User Name",
                    },
                    {
                        data: "First Name",
                    },
                    {
                        data: "Role"
                    },
                    {
                        data: "Last Name",
                    },
                    {
                        data: "Active",
                    },
                    {
                        data: "Division",
                    },
                ],
            });
        });
    </script>
@endpush
