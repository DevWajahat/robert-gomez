@extends('layouts.admin.app')
@section('content')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css" />
    <style>
        #summernote .note-editor.note-frame {
            background-color: #ffffff; /* Light background */
            color: #000000; /* Black text */
            border: 1px solid #e0e0e0; /* Subtle border */
        }
        #summernote .note-toolbar {
            background-color: #f8f9fa; /* Light toolbar background */
            border-bottom: 1px solid #e0e0e0;
        }
        #summernote .note-editable {
            background-color: #ffffff; /* Light editable area */
            color: #000000; /* Black text */
        }
        #summernote .note-editable ul {
            list-style-type: disc; /* Bullet points for unordered lists */
            margin-left: 20px;
        }
        #summernote .note-editable ol {
            list-style-type: decimal; /* Numbered lists */
            margin-left: 20px;
        }
        #summernote .note-editable li {
            margin-bottom: 5px; /* Spacing between list items */
        }
        #summernote .note-btn {
            background-color: #f8f9fa; /* Light button background */
            color: #000000; /* Black button text */
            border: 1px solid #e0e0e0;
        }
        #summernote .note-btn:hover {
            background-color: #e9ecef; /* Hover state */
        }
    </style>
    <div class="content-wrapper">
        <section class="content" style="min-height: 100vh;">
            <div class="container-fluid">
                <div class="dashboard-content">
                    <x-settings-tab />
                </div>

                <div id="summernote">{!! $guideline->content !!}</div>

                <button class="save-btn" id="saveBtn">Save</button>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-bs4.min.js"></script>
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
        $('#summernote').summernote({
            placeholder: 'Write something......',
            tabsize: 2,
            height: 100,
            codemirror: {
                theme: 'default' // Light mode
            },
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'italic', 'underline', 'clear']],
                ['fontsize', ['fontsize']], // Added font size
                ['color', ['color']],
                ['para', ['paragraph']],
                ['height', ['height']],
               
                ['insert', ['link']], // Removed picture and video
                ['view', ['fullscreen', 'codeview']],
                ['help', ['help']]
            ]
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#saveBtn').on("click", function() {
                var content = $('#summernote').summernote('code'); // Use summernote('code') to get content

                $.ajax({
                    url: '{{ route('admin.settings.guidelines.store') }}',
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
        });
    </script>
@endpush