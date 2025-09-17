@extends('layouts.web.app')



@section('content')
    <section class="doc-sec reject-sec">
        <div class="container-fluid">
            <div class="dashboard-content">
                <x-inner-head />
                <div class="asign-head mb-0">
                    <p>Upload / Download</p>
                </div>
                <div class="docs-wrapper">
                    <div class="search-wrap">
                        <div class="search-left">
                            <button>Upload EMS</button>
                            <button data-bs-toggle="modal" data-bs-target="#exampleModal3">+ Add Files</button>
                            <button>Download All</button>
                            {{-- <button>Start Upload</button> --}}
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
                                <tr class="">
                                    <td scope="row" style="align-content: center;"><input type="checkbox"
                                            class="slaveCheckbox"></td>
                                    <td>11/23/2024 2:48 pm CDT</td>
                                    <td><img src="{{ asset('assets/web/images/Table-image.png') }}" alt="file-type"></td>
                                    <td>Lorem Ipsum Dummy text.pdf</td>
                                    <td>Lorem Ipsum Dummy</td>
                                    <td>5.80 KB</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn elipse-btn" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu" style="">
                                                <li class="drp-list"><button class="dropdown-item edit-btn download-file"
                                                        file-url="{{ asset('assets/web/images/Table-image.png') }}"
                                                        file-name="Table-image.png">Download</button>
                                                </li>
                                                <li class="drp-list"><button
                                                        class="dropdown-item edit-btn delete-btn">Delete</button></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr class=" ">
                                    <td scope="row" style="align-content: center;"><input type="checkbox"
                                            class="slaveCheckbox"></td>
                                    <td>11/23/2024 2:48 pm CDT</td>
                                    <td><img src="{{ asset('assets/web/images/Table-image.png') }}" alt="file-type"></td>
                                    <td>Lorem Ipsum Dummy text.pdf</td>
                                    <td>Lorem Ipsum Dummy</td>
                                    <td>5.80 KB</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn elipse-btn" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu" style="">
                                                <li class="drp-list"><button class="dropdown-item edit-btn download-file"
                                                        file-url="{{ asset('assets/web/images/Table-image.png') }}"
                                                        file-name="Table-image.png">Download</button>
                                                </li>
                                                <li class="drp-list"><button
                                                        class="dropdown-item edit-btn delete-btn">Delete</button></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr class=" ">
                                    <td scope="row" style="align-content: center;"><input type="checkbox"
                                            class="slaveCheckbox"></td>
                                    <td>11/23/2024 2:48 pm CDT</td>
                                    <td><img src="{{ asset('assets/web/images/Table-image.png') }}" alt="file-type"></td>
                                    <td>Lorem Ipsum Dummy text.pdf</td>
                                    <td>Lorem Ipsum Dummy</td>
                                    <td>5.80 KB</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn elipse-btn" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu" style="">
                                                <li class="drp-list"><button class="dropdown-item edit-btn download-file"
                                                        file-url="{{ asset('assets/web/images/Table-image.png') }}"
                                                        file-name="Table-image.png">Download</button>
                                                </li>
                                                <li class="drp-list"><button
                                                        class="dropdown-item edit-btn delete-btn">Delete</button></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr class=" ">
                                    <td scope="row" style="align-content: center;"><input type="checkbox"
                                            class="slaveCheckbox"></td>
                                    <td>11/23/2024 2:48 pm CDT</td>
                                    <td><img src="{{ asset('assets/web/images/Table-image.png') }}" alt="file-type"></td>
                                    <td>Lorem Ipsum Dummy text.pdf</td>
                                    <td>Lorem Ipsum Dummy</td>
                                    <td>5.80 KB</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn elipse-btn" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu" style="">
                                                <li class="drp-list"><button class="dropdown-item edit-btn download-file"
                                                        file-url="{{ asset('assets/web/images/Table-image.png') }}"
                                                        file-name="Table-image.png">Download</button>
                                                </li>
                                                <li class="drp-list"><button
                                                        class="dropdown-item edit-btn delete-btn">Delete</button></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr class=" ">
                                    <td scope="row" style="align-content: center;"><input type="checkbox"
                                            class="slaveCheckbox"></td>
                                    <td>11/23/2024 2:48 pm CDT</td>
                                    <td><img src="{{ asset('assets/web/images/Table-image.png') }}" alt="file-type"></td>
                                    <td>Lorem Ipsum Dummy text.pdf</td>
                                    <td>Lorem Ipsum Dummy</td>
                                    <td>5.80 KB</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn elipse-btn" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu" style="">
                                                <li class="drp-list"><button class="dropdown-item edit-btn download-file"
                                                        file-url="{{ asset('assets/web/images/Table-image.png') }}"
                                                        file-name="Table-image.png">Download</button>
                                                </li>
                                                <li class="drp-list"><button
                                                        class="dropdown-item edit-btn delete-btn">Delete</button></li>
                                            </ul>

                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        {{-- Modal Dialog --}}
                        <div class="modal fade modal-bg-custom modal-docs-custom" id="exampleModal3" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-modal="true" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header info-desc p-0"></div>
                                    <div class="modal-body modal-border">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="drop-zone" id="drop-zone">
                                                    <p>Drag & drop files here or click to upload</p>
                                                    <div class="preview-multiple"
                                                        style="display: flex; flex-wrap: wrap; gap: 10px;"></div>
                                                    <input type="file" hidden id="file-inp"
                                                        class="custom-input form-control file-input" multiple />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer justify-content-center info-desc gap-3">
                                        <button type="button" class="pay-btn text-center bg-primary save-upload">Save &
                                            Add</button>
                                        <button type="button" class="pay-btn text-center dismiss-modal"
                                            data-bs-dismiss="modal">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ✅ MODAL HTML for Editing File Names -->
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.0/jszip.min.js"></script>
