@extends('layouts.admin.app')
@section('content')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css" />
    <div class="content-wrapper">
        <section class="content" style="min-height: 100vh;">
            <div class="container-fluid">
                <div class="dashboard-content">
                    <x-settings-tab />
                </div>
                <div class="dashboard-content ">
                    <div id="wysiwyg" class="mb-5">
                        <div class="btns">
                            <div class="category">
                                <button class="selection-btn" data-cmd="undo"><i class="fas fa-undo"></i></button>
                                <button class="selection-btn" data-cmd="redo"><i class="fas fa-redo"></i></button>
                            </div>
                            <div class="category">
                                <select class="selecion" data-cmd="formatBlock">
                                    <option value="p">Paragraph</option>
                                    <option value="h1">Title 1</option>
                                    <option value="h2">Title 2</option>
                                    <option value="h3">Title 3</option>
                                </select>
                                <select class="selecion" data-cmd="fontSize">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                </select>
                                <select class="selecion" data-cmd="fontName">
                                    <option value="Arial">Arial</option>
                                    <option value="Roboto">Roboto</option>
                                    <option value="serif">Serif</option>
                                    <option value="sans-serif">Sans-serif</option>
                                </select>
                            </div>
                            <div class="category">
                                <button class="selection-btn" data-cmd="bold"><i class="fas fa-bold"></i></button>
                                <button class="selection-btn" data-cmd="italic"><i class="fas fa-italic"></i></button>
                                <button class="selection-btn" data-cmd="underline"><i class="fas fa-underline"></i></button>
                            </div>
                            <div class="category">
                                <input class="selection-input" data-cmd="forecolor" type="color" value="#000000">
                                <input class="selection-input" data-cmd="backcolor" type="color" value="#FFFFFF">
                            </div>
                            <div class="category">
                                <button class="selection-btn" data-cmd="justifyLeft"><i class="fas fa-align-left"></i></button>
                                <button class="selection-btn" data-cmd="justifyCenter"><i class="fas fa-align-center"></i></button>
                                <button class="selection-btn" data-cmd="justifyRight"><i class="fas fa-align-right"></i></button>
                                <button class="selection-btn" data-cmd="justifyFull"><i class="fas fa-align-justify"></i></button>
                            </div>
                            <div class="category">
                                <button class="selection-btn" data-cmd="indent"><i class="fas fa-indent"></i></button>
                                <button class="selection-btn" data-cmd="outdent"><i class="fas fa-outdent"></i></button>
                            </div>
                            <div class="category">
                                <button class="selection-btn" data-cmd="insertUnorderedList"><i class="fas fa-list-ul"></i></button>
                                <button class="selection-btn" data-cmd="insertOrderedList"><i class="fas fa-list-ol"></i></button>
                            </div>
                            <div class="category">
                                <button class="selection-btn" data-cmd="createlink" class="prompt"><i class="fas fa-link"></i></button>
                                <button class="selection-btn" data-cmd="insertimage" class="prompt"><i class="fas fa-image"></i></button>
                            </div>
                        </div>
                        <!-- Yeh contentEditable div hai -->
                        <div id="editor" contentEditable="true">{!! $guideline == null ? '' : $guideline->content !!}</div>
                    </div>
                    <ul class="inner-head3 justify-content-end">
                        <button id="saveBtn" class="link text-decoration-none">
                            <li class="inner-list inner-list-1">Save</li>
                        </button>
                    </ul>
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

   <script>
        $(document).ready(function () {
            $('#saveBtn').on("click", function () {
                var content = $('#editor').html();

                $.ajax({
                    url: '{{ route("admin.settings.guidelines.store") }}',
                    type: 'POST',
                    data: {
                        content: content,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if (response.success) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Success',
                                text: response.message,
                                confirmButtonText: 'OK'
                            });
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: 'Error saving guideline. Please try again.',
                                confirmButtonText: 'OK'
                            });
                        }
                    },
                    error: function(xhr) {
                        if (xhr.status === 422) {
                            var errors = xhr.responseJSON.errors;
                            var errorMessage = Object.values(errors).join('\n');
                            Swal.fire({
                                icon: 'error',
                                title: 'Validation Error',
                                text: errorMessage,
                                confirmButtonText: 'OK'
                            });
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: 'An error occurred while saving the guideline.',
                                confirmButtonText: 'OK'
                            });
                        }
                    }
                });
            });

            // Handle WYSIWYG buttons
            $('.selection-btn').on('click', function() {
                var cmd = $(this).data('cmd');
                if ($(this).hasClass('prompt')) {
                    var value = prompt('Enter the ' + cmd);
                    document.execCommand(cmd, false, value);
                } else {
                    document.execCommand(cmd, false, null);
                }
            });

            $('.selecion').on('change', function() {
                var cmd = $(this).data('cmd');
                var value = $(this).val();
                document.execCommand(cmd, false, value);
            });

            $('.selection-input').on('change', function() {
                var cmd = $(this).data('cmd');
                var value = $(this).val();
                document.execCommand(cmd, false, value);
            });
        });
    </script>
@endpush
