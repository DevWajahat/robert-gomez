@extends('layouts.web.app')



@section('content')
    <section class="doc-sec reject-sec">
        <div class="container-fluid">
            <div class="dashboard-content">
                <x-inner-head :assignment="$assignment->id" />
                <div class="asign-head mb-0">
                    <p>Upload / Download</p>
                </div>
                <div class="docs-wrapper">
                    <div class="search-wrap">
                        <div class="search-left">
                            <button>Upload EMS</button>
                            <button data-bs-toggle="modal" data-bs-target="#exampleModal3">+ Add Files</button>
                            <button disabled>Download All</button>

                            <button>Delete Selected</button>
                        </div>
                        <div class="search-right">
                            <div class=" position-relative">
                                <button class="head-search-icon" type="submit"><i
                                        class="fa-solid fa-magnifying-glass "></i></button>
                                <input type="text" class="head-search-input" placeholder="Search Files" name=""
                                    id="">
                            </div>
                        </div>
                    </div>
                    <div class="assign-table-2-wrap">
                        <table class="assign-table assign-table-2 assign-tab table table-striped table-sec">
                            <thead>
                                <tr>
                                    <th scope="col"><input type="checkbox" id="masterCheckbox"></i></th>
                                    <th scope="col">Date & Time <i class="fa-solid fa-arrow-down"></i></th>
                                    <th scope="col">Type <i class="fa-solid fa-arrow-down"></i></th>
                                    <th scope="col">File Name <i class="fa-solid fa-arrow-down"></i></th>
                                    <th scope="col">Author <i class="fa-solid fa-arrow-down"></i></th>
                                    <th scope="col">Size <i class="fa-solid fa-arrow-down"></i></th>
                                    <th scope="col">Status </th>
                                </tr>
                            </thead>
                            <tbody class="table-row-2">

                                @forelse ($assignment->docs()->get() as $document)
                                    <tr class="">
                                        <td scope="row" style="align-content: center;"><input type="checkbox"
                                                class="slaveCheckbox"></td>
                                        <td>{{ $document->created_at->setTimezone('America/Chicago')->format('m/d/Y h:i a T') }}
                                        </td>
                                        <td><img class="file-icon" src="" data-type="{{ $document->file_type }}"
                                                data-file="{{ $document->file }}" alt="file-type"></td>
                                        <td>{{ $document->file }}</td>
                                        <td>Lorem Ipsum Dummyddasfsd</td>
                                        <td>5.80 KB</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn elipse-btn" type="button" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu" style="">
                                                    <li class="drp-list"><button
                                                            class="dropdown-item edit-btn download-file"
                                                            file-name="Table-image.png"><a
                                                                href="{{ asset('assignment-docs/' . $document->file) }}"
                                                                download class="drp-list"
                                                                style="text-decoration: none; color:#000;width:100%">
                                                                Download </a></button>
                                                    </li>
                                                    <li class="drp-list"><button class="dropdown-item edit-btn delete-btn"
                                                            data-id="{{ $document->id }}">Delete</button></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                @endforelse

                            </tbody>
                        </table>

                        <div class="modal fade modal-bg-custom modal-docs-custom" id="exampleModal3" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-modal="true" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header info-desc p-0"></div>
                                    <div class="modal-body modal-border">
                                        <div class="row">
                                            <div class="col-12">
                                                <form id="uploadDocs">
                                                    <div class="drop-zone" id="drop-zone">
                                                        <p>Drag & drop files here or click to upload</p>
                                                        <div class="preview-multiple"
                                                            style="display: flex; flex-wrap: wrap; gap: 10px;"></div>
                                                        <input type="file" hidden id="file-inp" name="files" accept=".docx,.pdf,.png,.jpeg,.jfif"
                                                            class="custom-input form-control file-input" multiple />
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer justify-content-center info-desc gap-3">
                                        <button type="submit" class="pay-btn text-center bg-primary save-upload">Save &
                                            Add</button>
                                        </form>
                                        <button type="button" class="pay-btn text-center dismiss-modal"
                                            data-bs-dismiss="modal">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="editFileModal" tabindex="-1" aria-labelledby="editFileModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editFileModalLabel">Edit File Names</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form id="edit-file-form">
                                            <div id="edit-file-inputs" class="row g-3"></div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cancel</button>
                                        <button type="button" class="btn btn-primary" id="saveEditFiles">Save
                                            Changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <x-pagination />
                </div>
            </div>
        </div>
    </section>
@endsection


@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.0/jszip.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#uploadDocs').on('submit', function(e) {
                e.preventDefault();
                console.log
                const files = $('#file-inp').prop('files');
                console.log(files.length)
                if (files.length === 0) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'No Files Selected',
                        text: 'Please select at least one file to upload.',
                        confirmButtonText: 'OK'
                    });

                } else {

                    $.LoadingOverlay('show');

                    const formData = new FormData();
                    for (let i = 0; i < files.length; i++) {
                        formData.append('files[]', files[i]);
                    }


                    formData.append('_token', "{{ csrf_token() }}");
                    // formData.append('assignment', "{{ $assignment->id }}");

                    $.ajax({
                        type: 'POST',
                        url: '{{ route('upload.docs', $assignment->id) }}',
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function(response) {
                            $.LoadingOverlay("hide");

                            Swal.fire({
                                icon: 'success',
                                title: 'Success',
                                text: response.message ||
                                    'Files uploaded successfully!',
                                confirmButtonText: 'OK'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    // Close modal and refresh page
                                    $('#exampleModal3').modal('hide');
                                    location.reload();
                                }
                            });
                        },
                        error: function(xhr) {
                            // Hide loading overlay
                            $.LoadingOverlay('hide');

                            // Show error message
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: xhr.responseJSON?.message ||
                                    'Failed to upload files. Please try again.',
                                confirmButtonText: 'OK'
                            });
                        }
                    })
                }

            })


        })

        $(document).ready(function() {

            $('.file-icon').each(function() {

                var fileType = $(this).data('type').toLowerCase();
                var iconSrc = '';

                if (fileType.includes('word') || fileType === 'doc' || fileType === 'docx') {
                    iconSrc = '{{ asset('assets/web/images/word-2.webp') }}';
                } else if (fileType === 'pdf') {
                    iconSrc = '{{ asset('assets/web/images/pdf-img.jpg') }}';
                } else if (fileType === 'jpg' || fileType === 'jpeg' || fileType === 'png' || fileType ===
                    'gif' || fileType === 'jfif') {
                    iconSrc = '{{ asset('assignment-docs') }}' + "/" + $(this).data('file');
                } else {
                    iconSrc = '{{ asset('assets/web/images/no_image.png') }}';
                }
                $(this).attr('src', iconSrc);
            });



            $('.delete-btn').on("click", function() {


                Swal.fire({
                    title: 'Are you sure?',
                    text: "You want to delete file",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes'
                }).then((result) => {
                    if (result.isConfirmed) {
                        var id = $(this).attr("data-id");

                        $.LoadingOverlay("show");
                        $.ajax({
                            type: 'POST',
                            url: '{{ route('docs.destroy') }}',
                            data: {
                                _token: "{{ csrf_token() }}",
                                id: id,
                            },
                            success: function(response) {
                                console.log(response);

                                $.LoadingOverlay("hide");

                                 Swal.fire({
                                icon: 'success',
                                title: 'Success',
                                text: 'File Deleted Successfully',
                                confirmButtonText: 'OK'
                            }).then((result) => {
                                if (result.isConfirmed) {

                                    location.reload();
                                }
                            });

                            },
                            error: function(xhr, status, error) {
                                $.LoadingOverlay("hide");

                                Swal.fire({
                                    title: 'Error!',
                                    text: 'An error occurred, please try again.',
                                    icon: 'error',
                                    confirmButtonText: 'OK'
                                });
                            }
                        })
                    }
                })
            })
        });
    </script>

<script>
    fileInput.addEventListener("change", (e) => handleFiles(e.target.files));

function handleFiles(selectedFiles) {
    for (let file of selectedFiles) {
        filesToUpload.push(file);

        const ext = file.name.split(".").pop().toLowerCase();
        const reader = new FileReader();

        reader.onload = (e) => {
            let iconSrc = "{{ asset('assets/web/images/no_image.png') }}";
            if (["pdf"].includes(ext)) iconSrc = "{{ asset("assets/web/images/pdf-img.jpg") }}";
            else if (["docx"].includes(ext)) iconSrc = "{{ asset("assets/web/images/word-2.webp") }}";
            else if (["pptx"].includes(ext)) iconSrc = "{{ asset("assets/web/images/powerpoint.png") }}";
            else if (["jpg", "jpeg", "png", "webp", "gif"].includes(ext)) iconSrc = e.target.result;

            const previewBox = document.createElement("div");
            previewBox.style.textAlign = "center";
            previewBox.style.width = "70px";
            previewBox.innerHTML = `
                <img src="${iconSrc}" style="width: 100%; border-radius: 5px;" />
                <small style="font-size: 10px; word-break: break-word;">${file.name}</small>
            `;
            previewContainer.appendChild(previewBox);
        };

        reader.readAsDataURL(file);
    }
}
</script>
    <script>
 $(document).ready(function() {
    function initTableFeatures($table, $pagination) {
        var rowsPerPage = 10;
        var $rows = $table.find('tbody tr');
        var totalRows = $rows.length;
        var totalPages = Math.ceil(totalRows / rowsPerPage);
        var currentPage = 1;
        var $searchInput = $('.head-search-input');
        var noResultsMessage = '<tr class="no-results"><td colspan="7" style="text-align: center;">No results found</td></tr>';


        function updateTable() {
            var searchValue = $searchInput.val().toLowerCase().trim();
            $rows.hide();
            $table.find('.no-results').remove();

            var filteredRows = $rows.filter(function() {
                var $row = $(this);
                for (var i = 0; i < $row.find('td').length; i++) {
                    var cellText = $row.find('td').eq(i).text().toLowerCase();
                    if (cellText.includes(searchValue)) {
                        return true;
                    }
                }
                return false;
            });

            totalRows = filteredRows.length;
            totalPages = Math.ceil(totalRows / rowsPerPage);

            if (totalRows > 0) {
                $pagination.show();
                var start = (currentPage - 1) * rowsPerPage;
                var end = start + rowsPerPage;
                filteredRows.slice(start, end).show();
            } else {
                $table.find('tbody').append(noResultsMessage);
                $pagination.hide();
            }

            updatePagination();
        }


        function updatePagination() {
            $pagination.find('.page').remove();
            for (var i = 1; i <= totalPages; i++) {
                var $pageButton = $('<button class="page">' + i + '</button>');
                if (i === currentPage) {
                    $pageButton.addClass('active-page');
                }
                $pageButton.insertBefore($pagination.find('.next'));
            }

            $pagination.find('.prev').prop('disabled', currentPage === 1);
            $pagination.find('.next').prop('disabled', currentPage === totalPages);
        }


        if (totalRows > 0) {
            $pagination.show();
            updateTable();
        } else {
            $table.find('tbody').append(noResultsMessage);
            $pagination.hide();
        }


        $pagination.on('click', '.page', function() {
            currentPage = parseInt($(this).text());
            updateTable();
        });

        $pagination.on('click', '.prev', function() {
            if (currentPage > 1) {
                currentPage--;
                updateTable();
            }
        });

        $pagination.on('click', '.next', function() {
            if (currentPage < totalPages) {
                currentPage++;
                updateTable();
            }
        });

        $searchInput.on('input', function() {
            currentPage = 1;
            updateTable();
        });
    }

    var $table = $('.assign-table-2');
    var $pagination = $('.pagination');
    if ($table.length && $pagination.length) {
        initTableFeatures($table, $pagination);
    }
});
    </script>


<script>
    $(document).ready(function (){

    })
</script>
@endpush


