@extends('layouts.admin.app')
@section('content')
    <style>
        /* Modal Base */
        #importModal {
            z-index: 999 !important;
        }

        .modal {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 99999;
        }

        .modal-content {
            background: #fff;
            border-radius: 6px;
            width: 600px;
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


        .search-suggestions--list.style {
            height: 335px;
        }

        .search-suggestions--list {
            list-style: none;
            padding: 15px;
            background: #f0f0f0;
            overflow: auto;
            position: absolute;
            width: 100%;
            z-index: 99999999;
        }

        .hidden {
            display: none;
        }

        .search-suggestions--list li {
            padding-bottom: 15px;
            font-size: 1.2rem;
            color: black;
            border-bottom: 1px solid black;
            margin-bottom: 20px;
            font-weight: 600;
            cursor: pointer;
        }

        .search-suggestions--list a {
            text-decoration: none;
        }
    </style>

    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">

                <x-assignment-tab />
                @if (session('csv_errors'))
                    <div class="alert alert-danger">
                        {{ session('csv_errors') }} <a href="{{ session('error_csv') }}" class="error-btn">Download error
                            file</a>
                    </div>
                @endif
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="board-area">
                    @forelse ($assignments as $assignment)
                        <div class="assign-card">
                            <div class="card-id-wrapper">
                                <h3>{{ $assignment->id }}</h3>
                                <div class="toggler-btn-wrapper">
                                    <select name="" data-id="{{ $assignment->id }}" class="selectpicker agent">
                                        <option value="" selected disabled>Select agent </option>
                                        @forelse ($users as $user)
                                            <option value="{{ $user->id }}"
                                                {{ $user->id == $assignment->user_id ? 'selected' : '' }}>
                                                {{ $user->first_name . ' ' . $user->last_name }}</option>
                                        @empty
                                        @endforelse
                                    </select>
                                    {{-- <option value="">Agent 2</option>
                                                                                          <option value="">Agent 3</option> --}}
                                    <button type="button" class="eye-btn hidden-class"><i class="fa-solid fa-eye"></i>
                                        3</button>
                                    <button type="button" class="toggler-btn"><i
                                            class="fa-solid fa-caret-down rotate-icon"></i></button>
                                </div>
                            </div>
                            <div class="insurance-wrapper">
                                <div>
                                    <p><span>Insurance:</span> {{ $assignment->company }}</p>
                                    <div class="other-desc-area hidden-class">
                                        <p><span>Owner</span> {{ $assignment->owner }}</p>
                                        <p><span>Owner Phone:</span> {{ $assignment->owner_phone }}</p>
                                        <p><span>Owner Email:</span> {{ $assignment->owner_email }}</p>
                                        <p><span>Claim#:</span> {{ $assignment->claim }}</p>
                                        <p><span>Type of Claim:</span> {{ $assignment->claim_type }}</p>
                                        <p><span>Loss Type:</span> {{ $assignment->loss_type }}</p>
                                        <p><span>Vehicle Location:</span> {{ $assignment->vehicle_location }} </p>
                                        <p><span>Appointment:</span> {{ $assignment->appointment_date }}</p>
                                    </div>
                                </div>
                                <div>
                                    <p class="text-end m-0" data-created-at="{{ $assignment->created_at }}">20 hours, 27
                                        mins </p>
                                    <div class="pending-btn-wrapper hidden-class">
                                        <button>Quick Updates</button>
                                        @if ($assignment->status == 'pending')
                                            <button style="background:#d3c501 !important;">Pending</button>
                                        @else
                                            <button style="background:#00A84C !important;">Completed</button>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                    @endforelse
                </div>
            </div>
        </section>
    </div>

    <!-- Add assignment modal -->
    <div id="assignmentModal" class="modal" style="display:none;">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Add New Assignment</h2>
                <span class="close-modal">&times;</span>
            </div>

            <form id="assignmentForm" class="modal-form">

                <!-- NEW FIELD: Assignment Number -->
                {{-- <div class="form-row">
                    <div class="form-group full-width">
                        <label>Assignment Number</label>
                        <input type="text" name="assignmentId" required placeholder="e.g. 001-0525-0100">
                    </div>
                </div> --}}

                <div class="form-row">
                    <div class="form-group">
                        <label class="text-white">Insurance</label>
                        <input type="text" autocomplete="off" name="insurance" id="insurance">
                        <span class="text-danger error-msg" id="insurance-error"></span>
                    </div>

                    <div class="form-group">
                        <label class="text-white">Owner</label>
                        <input type="text" autocomplete="off" name="owner" id="owner">
                        <span class="text-danger error-msg" id="owner-error"></span>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label class="text-white">Owner Phone</label>
                        <input type="tel" pattern="[0-9]*" id="ownerPhone" autocomplete="off"
                            oninput="this.value = this.value.replace(/[^0-9]/g, '');" name="phone">
                        <span class="text-danger error-msg" id="owner_phone-error"></span>

                    </div>
                    <div class="form-group">
                        <label class="text-white">Owner Email</label>
                        <input type="text" autocomplete="off" id="ownerEmail" name="email">
                        <span class="text-danger error-msg" id="owner_email-error"></span>

                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="text-white">Claim#</label>
                        <input type="text" autocomplete="off" id="claim" name="claim">
                        <span class="text-danger error-msg" id="claim-error"></span>

                    </div>
                    <div class="form-group">
                        <label class="text-white">Type of Claim</label>
                        <input type="text" name="" id="claimType">
                        <span class="text-danger error-msg" id="claim_type-error"></span>
                        {{-- <select name="" id="claimType" style="background-color: #fff !important; opacity: 100%; ">
                            <option value="-assignment">Absolute Assignment</option>
                            <option value="conditional-assignment">Conditional Assignment</option>
                        </select> --}}
                    </div>

                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="text-white">Loss Type</label>
                        <input type="text" autocomplete="off" name="lossType" id="lossType">
                        <span class="text-danger error-msg" id="loss_type-error"></span>
                    </div>
                    <div class="form-group">
                        <label class="text-white">Vehicle Location</label>
                        <input type="text" autocomplete="off" name="location" id="vehicleLocation">
                        <span class="text-danger error-msg" id="vehicle_location-error"></span>

                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group full-width">
                        <label class="text-white">Appointment</label>
                        <input type="datetime-local" autocomplete="off" name="appointment" id="appointment">
                        <span class="text-danger error-msg" id="appointment-error"></span>
                    </div>
                </div>

                <button type="submit" id="addBtn" class="submit-btn">Add</button>
            </form>
        </div>
    </div>

    <!-- Add assignment modal -->
    <!-- Search Modal -->
    <!-- Search Modal -->
    <div id="searchModal" class="modal" style="display:none;">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Search Assignments</h2>
                <span class="close-search-modal">&times;</span>
            </div>

            <form id="searchForm" class="modal-form">
                <div class="form-row">
                    <div class="form-group full-width position-relative">
                        <label style="color:#fff !important">Search</label>
                        <input type="text" name="search" class="search-input" autocomplete="off"
                            placeholder="Enter Claim # or Owner Name">
                        <div class="search-suggestions">
                            <ul class="search-suggestions--list style">
                                <li>No Assignments found.</li>
                            </ul>
                        </div>
                    </div>

                </div>

                <button type="submit" class="submit-btn">Search</button>
            </form>
        </div>
    </div>

    <!-- Search Modal -->

    <!-- Import Assignment Modal -->
    <div id="importModal" class="modal" style="display:none;">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Import Assignment</h2>
                <span class="close-import" style="cursor: pointer">&times;</span>
            </div>

            <form id="importForm" action="{{ route('admin.assign.upload') }}" method="post" class="modal-form">
                @csrf
                <div class="form-row">
                    <div class="form-group full-width">
                        <label for="importFile" class="text-light">Choose File</label>
                        <a class="btn btn-primary mb-3"
                            href="{{ asset('assets/excel-template/template-assignment.xlsx') }}" download>Download
                            Template</a>
                        <input type="file" class="text-light" id="importFile" name="importFile" required>
                    </div>
                </div>

                <button type="submit" class="submit-btn">Import</button>
            </form>
        </div>
    </div>


    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.7/dist/loadingoverlay.min.js">
        </script>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const appointmentInput = document.getElementById('appointment');
                const tomorrow = new Date();
                tomorrow.setDate(tomorrow.getDate() + 1);
                const year = tomorrow.getFullYear();
                const month = String(tomorrow.getMonth() + 1).padStart(2, '0');
                const day = String(tomorrow.getDate()).padStart(2, '0');
                const minDateTime = `${year}-${month}-${day}T00:00`;
                appointmentInput.setAttribute('min', minDateTime);
            });
        </script>

        <script>
            $(document).ready(function() {
                $('.toggler-btn').on('click', function() {
                    var parentCard = $(this).closest('.assign-card');
                    var otherDescArea = parentCard.find('.other-desc-area');
                    var pendingBtnWrapper = parentCard.find('.pending-btn-wrapper');
                    var caretIcon = $(this).find('.rotate-icon');
                    var eyeBtn = parentCard.find('.eye-btn');


                    eyeBtn.toggleClass('hidden-class smooth-toggle');
                    otherDescArea.toggleClass('hidden-class smooth-toggle');
                    pendingBtnWrapper.toggleClass('hidden-class smooth-toggle');
                    caretIcon.toggleClass('rotated');
                });
            });

            $(document).ready(function() {
                $('.agent').on("change", function() {
                    // Store the selected element and its values for use inside the SweetAlert function
                    const selectedAgent = $(this);
                    const agentId = selectedAgent.val();
                    const assignmentId = selectedAgent.attr('data-id');

                    Swal.fire({
                        title: 'Are you sure?',
                        text: "Once an agent is assigned, your assignment will be moved to the Tasks Assigned tab.",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, assign it!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // User confirmed, now perform the AJAX request to assign the agent and hide the card
                            $.LoadingOverlay("show");
                            $.ajax({
                                type: 'POST',
                                url: '{{ route('admin.assign.agent') }}',
                                data: {
                                    _token: "{{ csrf_token() }}",
                                    agent: agentId,
                                    assignment: assignmentId,
                                },
                                success: function(response) {
                                    $.LoadingOverlay("hide");
                                    // Find the parent card and hide it from the DOM
                                    selectedAgent.closest('.assign-card').hide();

                                    Swal.fire(
                                        'Assigned!',
                                        'The assignment has been successfully moved to Task Assigned tab.',
                                        'success'
                                    );
                                },
                                error: function(xhr) {
                                    $.LoadingOverlay("hide");
                                    let errorMessage =
                                        'An error occurred. Please try again.';
                                    if (xhr.responseJSON && xhr.responseJSON.message) {
                                        errorMessage = xhr.responseJSON.message;
                                    }

                                    // On error, revert the select box and show an error message

                                }
                            });
                        } else {
                            // User cancelled, revert the select box to the default
                            selectedAgent.val('');
                        }
                    });
                });
            })
        </script>
        <script></script>
        <script>
            $(document).ready(function() {
                // Function to calculate and update elapsed time
                function updateElapsedTime() {
                    // Select all elements with the data-created-at attribute
                    $('.board-area .text-end').each(function() {
                        const createdAt = $(this).data('created-at');
                        if (createdAt) {
                            // Parse the date as UTC and get its timestamp
                            const createdDate = new Date(createdAt + 'Z');
                            const now = new Date();

                            // Calculate the difference in milliseconds
                            let diffInMilliseconds = now.getTime() - createdDate.getTime();

                            // Ensure the value is not negative
                            diffInMilliseconds = Math.abs(diffInMilliseconds);

                            // Convert milliseconds to a human-readable format
                            const diffInMinutes = Math.floor(diffInMilliseconds / (1000 * 60));
                            const diffInHours = Math.floor(diffInMinutes / 60);
                            const diffInDays = Math.floor(diffInHours / 24);

                            let timeAgo = '';
                            if (diffInDays > 0) {
                                timeAgo = `${diffInDays} day${diffInDays > 1 ? 's' : ''}, `;
                            }
                            if (diffInHours > 0) {
                                const remainingHours = diffInHours % 24;
                                timeAgo += `${remainingHours} hour${remainingHours > 1 ? 's' : ''}, `;
                            }
                            const remainingMinutes = diffInMinutes % 60;
                            timeAgo += `${remainingMinutes} min${remainingMinutes > 1 ? 's' : ''}`;

                            $(this).text(timeAgo.trim().replace(/,$/, '') + ' ago');
                        }
                    });
                }

                // Call the function initially to update all elements
                updateElapsedTime();

                // Set an interval to update the time every minute
                setInterval(updateElapsedTime, 60000);
            });
        </script>
        <script>
            $(document).ready(function() {
                $('#assignmentForm').on("submit", function(event) {
                    event.preventDefault(); // This is the key line to prevent page reload

                    console.log($('#insurance').val());
                    console.log($('#owner').val());
                    console.log($('#ownerPhone').val());
                    console.log($('#ownerEmail').val());
                    console.log($('#claim').val());
                    console.log($('#claimType').val());
                    console.log($('#lossType').val());
                    console.log($('#vehicleLocation').val());
                    console.log($('#appointment').val());

                    $.LoadingOverlay("show")
                    $.ajax({
                        type: 'POST',
                        url: " {{ route('admin.assign.store') }}",
                        data: {
                            _token: "{{ csrf_token() }}",
                            insurance: $('#insurance').val(),
                            owner: $('#owner').val(),
                            owner_phone: $('#ownerPhone').val(),
                            owner_email: $('#ownerEmail').val(),
                            claim: $('#claim').val(),
                            claim_type: $('#claimType').val(),
                            loss_type: $('#lossType').val(),
                            vehicle_location: $('#vehicleLocation').val(),
                            appointment: $('#appointment').val()
                        },
                        success: function(response) {
                            $.LoadingOverlay("hide");
                            $('#assignmentModal').css('display', 'none')
                            Swal.fire({
                                icon: 'success',
                                title: 'Success!',
                                text: 'Assignment added successfully.',
                                showConfirmButton: false,
                                timer: 1000 // Hide after 0.8 seconds
                            }).then(() => {

                                window.location
                                    .reload();
                                // Reload the page after the alert closes
                            });
                        },
                        error: function(xhr) {
                            $.LoadingOverlay("hide")

                            if (xhr.status === 422) {

                                const errors = xhr.responseJSON.errors;
                                $('.error-msg').html(' ');
                                window.l
                                $.each(errors, function(key, value) {

                                    $(`#${key}-error`).html(
                                        `${value[0]}`
                                    );
                                });
                            }

                            let errorMessage = 'An error occurred.';
                            if (xhr.responseJSON && xhr.responseJSON.message) {
                                errorMessage = xhr.responseJSON.message;
                            }

                        }
                    })
                })
            })
        </script>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const searchBtn = document.getElementById("searchAssignment");
                const searchModal = document.getElementById("searchModal");
                const closeSearch = document.querySelector(".close-search-modal");

                searchBtn.addEventListener("click", () => {
                    searchModal.style.display = "flex";
                });

                closeSearch.addEventListener("click", () => {
                    searchModal.style.display = "none";
                });

                window.addEventListener("click", (e) => {
                    if (e.target === searchModal) {
                        searchModal.style.display = "none";
                    }
                });
            });

            document.addEventListener("DOMContentLoaded", function() {
                const importBtn = document.getElementById("importAssignment");
                const importModal = document.getElementById("importModal");
                const closeImport = document.querySelector(".close-import");
                const importForm = document.getElementById("importForm");

                // Modal open
                importBtn.addEventListener("click", () => {
                    importModal.style.display = "flex";
                });

                // Modal close
                closeImport.addEventListener("click", () => {
                    importModal.style.display = "none";
                    importForm.reset();
                });

                // Form submit via AJAX
                importForm.addEventListener("submit", (e) => {
                    e.preventDefault();
                    const fileInput = document.getElementById("importFile");
                    const file = fileInput.files[0];

                    if (!file) {
                        Swal.fire('Error', 'Please select a file before importing.', 'error');
                        return;
                    }

                    const formData = new FormData();
                    formData.append('file', file);
                    formData.append('_token', "{{ csrf_token() }}");

                    $.LoadingOverlay("show");
                    $.ajax({
                        type: 'POST',
                        url: "{{ route('admin.assign.upload') }}",
                        data: formData,
                        contentType: false,
                        processData: false,
                        success: function(response) {
                            $.LoadingOverlay("hide");
                            importModal.style.display = "none";
                            importForm.reset();

                            if (response.success) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Success!',
                                    text: response.message,
                                    showConfirmButton: false,
                                    timer: 1500
                                }).then(() => {
                                    window.location.reload(
                                        true); // Force reload to show new assignments
                                });
                            } else if (response.csv_errors && response.error_csv) {
                                Swal.fire({
                                    title: 'Partial Import',
                                    text: response.csv_errors,
                                    icon: 'warning',
                                    showCancelButton: true,
                                    confirmButtonText: 'Download Error CSV',
                                    cancelButtonText: 'Close & Reload'
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        const link = document.createElement('a');
                                        link.href = response.error_csv;
                                        link.download = 'import_errors.csv';
                                        document.body.appendChild(link);
                                        link.click();
                                        document.body.removeChild(link);
                                        setTimeout(() => window.location.reload(true),
                                            1000);
                                    } else {
                                        window.location.reload(true);
                                    }
                                });
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Import Failed',
                                    text: response.message ||
                                        'No rows were imported due to errors.',
                                    showCancelButton: true,
                                    cancelButtonText: 'Close',
                                    confirmButtonText: response.error_csv ?
                                        'Download Error CSV' : null,
                                    showConfirmButton: !!response
                                        .error_csv // Only show confirm if error_csv exists
                                }).then((result) => {
                                    if (result.isConfirmed && response.error_csv) {
                                        const link = document.createElement('a');
                                        link.href = response.error_csv;
                                        link.download = 'import_errors.csv';
                                        document.body.appendChild(link);
                                        link.click();
                                        document.body.removeChild(link);
                                    }
                                    // No reload for full error case (empty CSV or zero rows)
                                });
                            }
                        },
                        error: function(xhr) {
                            $.LoadingOverlay("hide");
                            let errorMessage = 'An error occurred. Please try again.';
                            if (xhr.responseJSON && xhr.responseJSON.message) {
                                errorMessage = xhr.responseJSON.message;
                            } else if (xhr.responseJSON && xhr.responseJSON.errors) {
                                errorMessage = Object.values(xhr.responseJSON.errors)[0][0];
                            }

                            Swal.fire({
                                icon: 'error',
                                title: 'Import Failed',
                                text: errorMessage,
                                showCancelButton: true,
                                cancelButtonText: 'Close',
                                confirmButtonText: xhr.responseJSON?.error_csv ?
                                    'Download Error CSV' : null,
                                showConfirmButton: !!xhr.responseJSON?.error_csv
                            }).then((result) => {
                                if (result.isConfirmed && xhr.responseJSON?.error_csv) {
                                    const link = document.createElement('a');
                                    link.href = xhr.responseJSON.error_csv;
                                    link.download = 'import_errors.csv';
                                    document.body.appendChild(link);
                                    link.click();
                                    document.body.removeChild(link);
                                }
                                // No reload for error case
                            });
                        }
                    });
                });

                // Close modal on outside click
                window.addEventListener("click", (e) => {
                    if (e.target === importModal) {
                        importModal.style.display = "none";
                        importForm.reset();
                    }
                });
            });
        </script>
        <script>
            $(document).ready(function() {


                $('#searchForm').on("submit", function(e) {
                    e.preventDefault();
                })

                const input = $(".search-input");
                const select = $(".search-select");
                const results = $(".search-suggestions--list");

                function detectSearch() {
                    let query = input.val().trim() ?? null;
                    let category = select.val() ?? null;
                    console.log(query, category);

                    // Clear and hide results immediately if query is empty
                    if (query === '' && category === '') {
                        results.empty();
                        results.addClass("hidden");
                        return;
                    }

                    // Only proceed with AJAX if query is not empty
                    if (query !== '') {
                        $.ajax({
                            type: "POST",
                            url: "{{ route('admin.assign.search') }}",
                            data: {
                                _token: "{{ csrf_token() }}",
                                query: query,
                            },
                            success: function(response) {
                                console.log(response);
                                let assignments = response; // Direct array of assignments from controller
                                results.empty();
                                if (assignments.length > 0) {
                                    results.removeClass("hidden");
                                    assignments.forEach(function(assignment) {
                                        let html = `
                                <li>
                                    <a href="https://example.com/assignment/${assignment.id}">
                                        <div class="searched-content" style="height:auto">
                                            <div>
                                                ${assignment.claim} (Owner: ${assignment.owner})
                                                <p>Location: ${assignment.vehicle_location}</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            `;
                                        results.append(html);
                                        results.addClass("style");
                                    });
                                } else {
                                    let html = `
                            <li>No assignments found.</li>
                        `;
                                    results.append(html);
                                    results.removeClass("style");
                                }
                            },
                            error: function(error) {
                                console.error(error);
                            }
                        });
                    } else {
                        results.empty();
                        results.addClass("hidden");
                    }
                }

                input.on("keyup change", detectSearch);
                select.on("change", detectSearch);

                let body = document.body;

                $("body").on("click", () => {
                    results.addClass("hidden");
                    input.val("");
                    results.empty();
                });
            });
        </script>
    @endpush
@endsection
