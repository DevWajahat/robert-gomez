@extends('layouts.admin.app')
@section('content')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css" />

    <style>
        /* Modal Base */
        .modal {
            position: fixed !important;
            top: 0 !important;
            left: 0 !important;
            width: 100% !important;
            height: 100% !important;
            background: rgba(0, 0, 0, 0.5) !important;
            display: flex;
            justify-content: center !important;
            align-items: center !important;
            z-index: 99999 !important;
        }

        .swal2-container {
            z-index: 999999 !important;
        }

        .modal-content {
            background: #fff;
            border-radius: 6px;
            width: 600px !important;
            max-height: 90vh;
            overflow-y: auto;
            animation: zoomIn 0.3s ease;
        }

        @keyframes zoomIn {
            from {
                transform: scale(0.9);
                opacity: 0;
            }

            to {
                transform: scale(1);
                opacity: 1;
            }
        }

        /* Header */
        .modal-header {
            background: #007bff;
            color: #fff;
            padding: 12px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-radius: 6px 6px 0 0;
        }

        .modal-header h2 {
            margin: 0;
            font-size: 18px;
        }

        .close-modal {
            font-size: 22px;
            cursor: pointer;
        }

        /* Form Layout */
        .modal-form {
            padding: 20px;
        }

        .form-row {
            display: flex;
            gap: 15px;
        }

        .form-group {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .form-group.full-width {
            flex: 100%;
        }

        .form-group label {
            font-weight: 600;
            margin-bottom: 5px;
        }

        .form-group input,
        .form-group select {
            padding: 8px 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            outline: none;
        }

        .form-group input:focus {
            border-color: #007bff;
        }

        /* Button */
        .submit-btn {
            width: 100%;
            padding: 10px;
            background: #007bff;
            color: #fff;
            font-weight: 600;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }

        input:-webkit-autofill,
        input:-webkit-autofill:hover,
        input:-webkit-autofill:focus,
        input:-webkit-autofill:active {
            -webkit-box-shadow: 0 0 0px 1000px white inset !important;
            -webkit-text-fill-color: black !important;
        }

        .submit-btn:hover {
            background: #0056b3;
        }

        .close-search-modal {
            font-size: 25px;
            cursor: pointer;
        }

        /* Validation Messages */
        .text-danger {
            color: #e74c3c;
            font-size: 12px;
            margin-top: 5px;
        }

        /* Toggle Classes */
        .hidden-class {
            display: none !important;
        }

        .smooth-toggle {
            display: block;
        }

        .rotate-icon {
            transition: transform 0.3s ease;
        }

        .rotate-icon.rotated {
            transform: rotate(180deg);
        }


        .hidden {
            display: none;
        }
    </style>
    <div class="content-wrapper">
        <section class="content" style="min-height: 100vh;">
            <div class="container-fluid">
                <div class="dashboard-content">
                    <x-settings-tab />
                </div>
                <div class="dashboard-content">
                    <ul class="inner-head3 justify-content-end">
                        <button class="link text-decoration-none" id="userModalbtn">
                            <li class="inner-list inner-list-1">Add General Forms</li>
                        </button>
                    </ul>
                    <table id="companyAdmins">
                        <thead>
                            <tr>
                                <th>File Name</th>
                                <th>Label</th>
                                <th>Date</th>
                                <th>Download</th>
                                <th>Action</th>
                                {{-- <th>Address</th>
                                <th>Action</th> --}}
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>File</td>
                                <td>sdfasdf</td>
                                <td>sdfasd</td>
                                <td>asdfasdf</td>
                                <td><button class="btn user-edit-btn" data-id=""><i
                                            class="fa-solid fa-pencil"></i></button></td>
                                {{-- <td>sdfasasdf</td>
                                <td>asdfasdf</td> --}}
                                {{-- <td>robert@gmail.com</td>
                                        <td>111111111</td>
                                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td> --}}
                            </tr>
                        </tbody>

                    </table>
                </div>
            </div>
        </section>

        <div id="addFormModal" class="modal" style="display:none;">
            <div class="modal-content">
                <div class="modal-header">
                    <h2>Add Form</h2>
                    <span class="close-modal">&times;</span>
                </div>
                <form class="modal-form" autocomplete="off" id="add-form-form">
                    <div class="form-row">
                        <div class="form-group">
                            <label class="text-light">Label</label>
                            <input type="text" name="label" id="addLabel">
                            <span class="text-danger error-msg" id="add_label-error"></span>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group full-width">
                            <label class="text-light">File</label>
                            <input type="file" name="file" id="addFile" style="opacity: 100%">
                            <span class="text-danger error-msg" id="add_file-error"></span>
                        </div>
                    </div>
                    <button type="submit" id="addBtn" class="submit-btn">Add</button>
                </form>
            </div>
        </div>
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
                        data: "File Name",
                    },
                    {
                        data: "Label",
                    },
                    {
                        data: "Download"
                    },
                    {
                        data: "Action",
                    },
                ],
            });
        });
    </script>
    <script>
    $(document).ready(function() {
        // Open Add Form Modal
        $('#userModalbtn').on('click', function() {
            // Clear form fields and error messages
            $('#add-form-form')[0].reset();
            $('.error-msg').html('');
            // Show modal
            $('#addFormModal').show();
            $('#addFormModal').css("display", "flex");
        });

        // Close Modal
        $('.close-modal').on('click', function() {
            // Clear form fields and error messages
            $('#add-form-form')[0].reset();
            $('.error-msg').html('');
            // Hide modal
            $('#addFormModal').hide();
        });

        // Placeholder for Form Submission (to be expanded with AJAX)
        $('#add-form-form').on('submit', function(e) {
            e.preventDefault();
            // Future AJAX POST to admin.forms.store will go here
        });
    });
</script>
@endpush
