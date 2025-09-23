@extends('layouts.admin.app')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css" />
    <style>
        /* Modal Base */
        .modal {
            position: fixed !important ;
            top: 0 !important ;
            left: 0 !important;
            width: 100% !important;
            height: 100% !important;
            background: rgba(0, 0, 0, 0.5) !important;
            display: flex ;
            justify-content: center !important;
            align-items: center !important;
            z-index: 99999 !important;
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
@section('content')
    <section class="content" style="min-height: 100vh;">
        <div class="container-fluid">
            <div class="content-wrapper">
                <div class="content">
                    <div class="container-fluid">
                        <div class="dashboard-content">
                            <div class="inner-head-wrap2">
                                <ul class="inner-head2 justify-content-end">
                                        <button class="link text-decoration-none" id="agentModalbtn">
                                            <li class="inner-list inner-list-1">Add Agent</li>
                                        </button>
                                </ul>
                            </div>
                        </div>
                        <div class="dashboard-content">
                            <table id="companyAdmins">
                                <thead>
                                    <tr>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Robert</td>
                                        <td>gomez</td>
                                        <td>robert@gmail.com</td>
                                        <td>111111111</td>
                                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                                        <td>X</td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Add Agent modal -->
    <div id="agentModal" class="modal" style="display:none;">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Add New Agent</h2>
                <span class="close-modal">&times;</span>
            </div>

            <form  class="modal-form">
                <div class="form-row">
                    <div class="form-group">
                        <label class="text-white">Fisrt Name</label>
                        <input type="text" autocomplete="off" name="insurance" id="insurance">
                        <span class="text-danger error-msg" id="insurance-error"></span>
                    </div>

                    <div class="form-group">
                        <label class="text-white">Last Name</label>
                        <input type="text" autocomplete="off" name="owner" id="owner">
                        <span class="text-danger error-msg" id="owner-error"></span>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label class="text-white">Email</label>
                        <input type="tel" pattern="[0-9]*" id="ownerPhone" autocomplete="off"
                            oninput="this.value = this.value.replace(/[^0-9]/g, '');" name="phone">
                        <span class="text-danger error-msg" id="owner_phone-error"></span>

                    </div>
                    <div class="form-group">
                        <label class="text-white">Phone</label>
                        <input type="text" autocomplete="off" id="ownerEmail" name="email">
                        <span class="text-danger error-msg" id="owner_email-error"></span>

                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="text-white">Address</label>
                        <input type="text" autocomplete="off" id="claim" name="claim">
                        <span class="text-danger error-msg" id="claim-error"></span>

                    </div>
                </div>

                <button type="submit" id="addBtn" class="submit-btn">Add</button>
            </form>
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
                        data: "User Name",
                    },
                    {
                        data: "First Name",
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
<script>
$(document).ready(function(){
    $("#agentModalbtn").on("click", function(){
        $(".modal").show();
        $(".modal").css("display", "flex")
    });

    $(".close-modal").on("click", function(){
        $(".modal").hide();
    });
});
</script>
@endpush
