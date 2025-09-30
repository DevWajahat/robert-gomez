@extends('layouts.admin.app')

@section('content')
    {{-- @dd($assignment) --}}
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="dashboard-content">
                    <div class="view-wrapper mt-0">
                        <div class="inner-head-wrap2 mb-5">
                            <ul class="inner-head3">
                                <a href="#" class="link text-decoration-none">
                                    <li class="inner-list inner-list-1">View</li>
                                </a>

                                <a href="#" class="link text-decoration-none">
                                    <li class="inner-list inner-list-1">Print</li>
                                </a>

                                <a href="#" class="link text-decoration-none">
                                    <li class="inner-list inner-list-1">Edit</li>
                                </a>

                                <a href="#" class="link text-decoration-none">
                                    <li class="inner-list inner-list-1">Cancel</li>
                                </a>

                                <a href="#" class="link text-decoration-none">
                                    <li class="inner-list inner-list-1">Dispatch</li>
                                </a>

                                <a href="#" class="link text-decoration-none">
                                    <li class="inner-list inner-list-1">Messages</li>
                                </a>

                                <a href="#" class="link text-decoration-none">
                                    <li class="inner-list inner-list-1">Billing</li>
                                </a>

                                <a href="#" class="link text-decoration-none">
                                    <li class="inner-list inner-list-1">Files</li>
                                </a>

                                <a href="#" class="link text-decoration-none">
                                    <li class="inner-list inner-list-1">Actions</li>
                                </a>

                                <a href="#" class="link text-decoration-none">
                                    <li class="inner-list inner-list-1">Reports</li>
                                </a>

                                <a href="#" class="link text-decoration-none">
                                    <li class="inner-list inner-list-1">Notepad</li>
                                </a>

                                <button class="link text-decoration-none open-modal-btn" type="button"
                                    onclick="openModal()">
                                    <li class="inner-list inner-list-1">Schedule Appointments</li>
                                </button>
                            </ul>
                        </div>

                        <div class="row boxes-rows">
                            <div class="col-lg-4">
                                <div class="payment-info">
                                    <div class="info-head">
                                        <h3>Claim Info</h3>
                                    </div>

                                    <div class="info-desc d-flex">
                                        <div>
                                            <ul class="head-ul">
                                                <li>Company:</li>

                                                <li>Company #:</li>

                                                <li>DL Number:</li>

                                                <li>Claim Number:</li>

                                                <li>Status:</li>
                                            </ul>
                                        </div>

                                        <div>
                                            <ul class="desc-ul">
                                                <li>Lorem Ipsum</li>

                                                <li>ABCD1234567890</li>

                                                <li>1234566</li>

                                                <li>1234566</li>

                                                <li>Active</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="info-head">
                                        <h3>Take Action</h3>
                                    </div>

                                    <div class="info-desc text-center">
                                        <button class="mod-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            You must ACCEPT or REJECT the claim to proceed
                                        </button>

                                        <div class="d-flex mb-3 gap-5">
                                            <p class="claim-para">
                                                <i class="fa-solid fa-check"></i>
                                                Accept Claim
                                            </p>

                                            <p class="claim-para">
                                                <i class="fa-solid fa-minus"></i>

                                                <a href="#" class="text-decoration-none">Reject Claim</a>
                                            </p>
                                        </div>

                                        <div class="d-flex">
                                            <p class="claim-para">
                                                <i class="fa-solid fa-exclamation"></i>
                                                Turn On :
                                                Needs Attention
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="payment-info">
                                    <div class="info-head">
                                        <h3>Payment Details</h3>
                                    </div>

                                    <div class="info-desc text-center">
                                        <table class="table text-start">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Billing Type</th>

                                                    <th scope="col" colspan="2">Appraisal Standard</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <th scope="row">Base Rate</th>

                                                    <td>+</td>

                                                    <td>$0.00</td>
                                                </tr>

                                                <tr>
                                                    <th scope="row">Base Rate</th>

                                                    <td>+</td>

                                                    <td>$0.00</td>
                                                </tr>

                                                <tr>
                                                    <th scope="row">Base Rate</th>

                                                    <td>+</td>

                                                    <td>$0.00</td>
                                                </tr>

                                                <tr>
                                                    <th scope="row">Base Rate</th>

                                                    <td>+</td>

                                                    <td>$0.00</td>
                                                </tr>

                                                <tr>
                                                    <th scope="row">Base Rate</th>

                                                    <td>+</td>

                                                    <td>$0.00</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <button class="pay-btn" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal2">Request Pay Change</button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="payment-info" style="height: auto !important">
                                    <div class="info-head">
                                        <h3>Timeline</h3>
                                    </div>

                                    <div class="info-desc d-flex">
                                        <div>
                                            <ul class="head-ul">
                                                <li class="mb-4">Appointment Date:</li>

                                                <li class="mb-2">Time Open</li>

                                                <li>Date Created</li>
                                            </ul>
                                        </div>

                                        <div>
                                            <ul class="desc-ul">
                                                <li class="mb-4">
                                                    09/18/2024 5:00 am

                                                    <a href="" class="text-danger text-decoration-none"
                                                        style="margin-left: 12px; font-weight: 700">Change</a>
                                                </li>

                                                <li class="mb-2">2 days, 16 hours, 13 mins</li>

                                                <li>05/18/2024 6:33 pm CDT</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="pay-instruction">
                                    <h5>Instructions</h5>

                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the
                                        industry's standard dummy text ever since the 1500s,
                                        when an unknown printer took a galley of type and
                                        scrambled it to make a type specimen book. It has
                                        survived not only five centuries, but also the leap into
                                        electronic typesetting, remaining essentially unchanged.
                                        It was popularised in the 1960s with the release of
                                        Letraset sheets containing Lorem Ipsum passages, and
                                        more recently with desktop publishing software like
                                        Aldus PageMaker including versions of Lorem Ipsum
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="faqs">
                                    <div class="faq">
                                        <button type="button" class="faq-btn d-flex">
                                            <span class="flex-grow-1">Assignments</span>

                                            <div class="faq-btn-arrow">
                                                <i class="fa-solid fa-chevron-down"></i>
                                            </div>
                                        </button>

                                        <div class="faq-body mb-0" style="display: none">
                                            <div class="view-tab-content">
                                                <form action="">
                                                    <div class="row" style="margin-bottom: 11px">
                                                        <div class="col-6">
                                                            <div class="row align-items-center">
                                                                <div class="col-md-4">
                                                                    <label for="" class="custom-label">
                                                                        Duplicated
                                                                        VIN #
                                                                    </label>
                                                                </div>

                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        class="custom-input form-control"
                                                                        placeholder="Select"></input>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row" style="margin-bottom: 11px">
                                                        <div class="col-6">
                                                            <div class="row align-items-center">
                                                                <div class="col-md-4">
                                                                    <label for="" class="custom-label">
                                                                        Duplicated
                                                                        Claim #
                                                                    </label>
                                                                </div>

                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <h5 class="assign-head">Insurance Information</h5>

                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-12">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="" class="custom-label">
                                                                        File
                                                                        #
                                                                    </label>
                                                                </div>

                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for=""
                                                                        class="custom-label">Company</label>
                                                                </div>

                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for=""
                                                                        class="custom-label">Adjuster</label>
                                                                </div>

                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="" class="custom-label">
                                                                        Deductible
                                                                        Amount
                                                                    </label>
                                                                </div>

                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="" class="custom-label">
                                                                        Claim
                                                                        For
                                                                    </label>
                                                                </div>

                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="" class="custom-label">
                                                                        Date First
                                                                        Contacted
                                                                    </label>
                                                                </div>

                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6 col-md-12">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="" class="custom-label">
                                                                        Claim
                                                                        Number
                                                                    </label>
                                                                </div>

                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="" class="custom-label">
                                                                        Adjuster
                                                                        Phone
                                                                    </label>
                                                                </div>

                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="" class="custom-label">
                                                                        Date of
                                                                        Loss
                                                                    </label>
                                                                </div>

                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="" class="custom-label">
                                                                        Insured
                                                                        Name
                                                                    </label>
                                                                </div>

                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="" class="custom-label">
                                                                        Policy
                                                                        Number
                                                                    </label>
                                                                </div>

                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="" class="custom-label">
                                                                        Type of
                                                                        Loss
                                                                    </label>
                                                                </div>

                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <h5 class="assign-head">Owner Information</h5>

                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-12">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="" class="custom-label">
                                                                        Business
                                                                        Name
                                                                    </label>
                                                                </div>

                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="" class="custom-label">
                                                                        Contact
                                                                        Name
                                                                    </label>
                                                                </div>

                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for=""
                                                                        class="custom-label">City</label>
                                                                </div>

                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for=""
                                                                        class="custom-label">State</label>
                                                                </div>

                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="" class="custom-label">
                                                                        Client
                                                                        Email
                                                                    </label>
                                                                </div>

                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="" class="custom-label">
                                                                        Mobile
                                                                        Phone
                                                                    </label>
                                                                </div>

                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6 col-md-12">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="" class="custom-label">
                                                                        First
                                                                        Name
                                                                    </label>
                                                                </div>

                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="" class="custom-label">
                                                                        Last
                                                                        Name
                                                                    </label>
                                                                </div>

                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for=""
                                                                        class="custom-label">Address</label>
                                                                </div>

                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="" class="custom-label">Zip</label>
                                                                </div>

                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="" class="custom-label">
                                                                        Home
                                                                        Phone
                                                                    </label>
                                                                </div>

                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="" class="custom-label">
                                                                        Work
                                                                        Phone
                                                                    </label>
                                                                </div>

                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <h5 class="assign-head">Location Information</h5>

                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-12">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for=""
                                                                        class="custom-label">Location</label>
                                                                </div>

                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for=""
                                                                        class="custom-label">Address</label>
                                                                </div>

                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for=""
                                                                        class="custom-label">City</label>
                                                                </div>

                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="" class="custom-label">
                                                                        Location
                                                                        Phone
                                                                    </label>
                                                                </div>

                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6 col-md-12">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="" class="custom-label">
                                                                        Location
                                                                        Name
                                                                    </label>
                                                                </div>

                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for=""
                                                                        class="custom-label">State</label>
                                                                </div>

                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="" class="custom-label">Zip</label>
                                                                </div>

                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for=""
                                                                        class="custom-label">State</label>
                                                                </div>

                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <h5 class="assign-head">Vehicle Information</h5>

                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-12">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for=""
                                                                        class="custom-label">Year</label>
                                                                </div>

                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for=""
                                                                        class="custom-label">Make</label>
                                                                </div>

                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="" class="custom-label">VIN
                                                                        #</label>
                                                                </div>

                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="" class="custom-label">
                                                                        License
                                                                        Plate
                                                                    </label>
                                                                </div>

                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6 col-md-12">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for=""
                                                                        class="custom-label">Mileage</label>
                                                                </div>

                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for=""
                                                                        class="custom-label">Model</label>
                                                                </div>

                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for=""
                                                                        class="custom-label">Color</label>
                                                                </div>

                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for=""
                                                                        class="custom-label">Damage</label>
                                                                </div>

                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="faq">
                                        <button type="button" class="faq-btn d-flex">
                                            <span class="flex-grow-1">Guidelines</span>

                                            <div class="faq-btn-arrow">
                                                <i class="fa-solid fa-chevron-down"></i>
                                            </div>
                                        </button>

                                        <div class="faq-body mb-0" style="display: none">
                                            <div class="view-tab-content guideline-content">

                                                {!! $guideline?->content !!}
                                                {{-- <p class="guide-para">
                                                    Lorem Ipsum is simply dummy text of the printing
                                                    and typesetting industry. Lorem Ipsum has been the
                                                    industry's standard dummy text ever since the
                                                    1500s, when an unknown printer took a galley of
                                                    type and scrambled it to make a type specimen
                                                    book. It has survived not only five centuries, but
                                                    also the leap into electronic typesetting,
                                                    remaining essentially unchanged. It was
                                                    popularised in the 1960s with the release of
                                                    Letraset sheets containing Lorem Ipsum passages,
                                                    and more recently with desktop publishing software
                                                    like Aldus PageMaker including versions of Lorem
                                                    Ipsum
                                                </p>

                                                <p class="guide-para">
                                                    Lorem Ipsum is simply dummy text of the printing
                                                    and typesetting industry. Lorem Ipsum has been the
                                                    industry's standard dummy text ever since the
                                                    1500s, when an unknown printer took a galley of
                                                    type and scrambled it to make a type specimen
                                                    book. It has survived not only five centuries, but
                                                    also the leap into electronic typesetting,
                                                    remaining essentially unchanged. It was
                                                    popularised in the 1960s with the release of
                                                    Letraset sheets containing Lorem Ipsum passages,
                                                    and more recently with desktop publishing software
                                                    like Aldus PageMaker including versions of Lorem
                                                    Ipsum
                                                </p>

                                                <p class="guide-para">
                                                    Lorem Ipsum is simply dummy text of the printing
                                                    and typesetting industry. Lorem Ipsum has been the
                                                    industry's standard dummy text ever since the
                                                    1500s, when an unknown printer took a galley of
                                                    type and scrambled it to make a type specimen
                                                    book. It has survived not only five centuries, but
                                                    also the leap into electronic typesetting,
                                                    remaining essentially unchanged. It was
                                                    popularised in the 1960s with the release of
                                                    Letraset sheets containing Lorem Ipsum passages,
                                                    and more recently with desktop publishing software
                                                    like Aldus PageMaker including versions of Lorem
                                                    Ipsum
                                                </p>

                                                <p class="guide-para">
                                                    Lorem Ipsum is simply dummy text of the printing
                                                    and typesetting industry. Lorem Ipsum has been the
                                                    industry's standard dummy text ever since the
                                                    1500s, when an unknown printer took a galley of
                                                    type and scrambled it to make a type specimen
                                                    book. It has survived not only five centuries, but
                                                    also the leap into electronic typesetting,
                                                    remaining essentially unchanged. It was
                                                    popularised in the 1960s with the release of
                                                    Letraset sheets containing Lorem Ipsum passages,
                                                    and more recently with desktop publishing software
                                                    like Aldus PageMaker including versions of Lorem
                                                    Ipsum
                                                </p>

                                                <p class="guide-para">
                                                    Lorem Ipsum is simply dummy text of the printing
                                                    and typesetting industry. Lorem Ipsum has been the
                                                    industry's standard dummy text ever since the
                                                    1500s, when an unknown printer took a galley of
                                                    type and scrambled it to make a type specimen
                                                    book. It has survived not only five centuries, but
                                                    also the leap into electronic typesetting,
                                                    remaining essentially unchanged. It was
                                                    popularised in the 1960s with the release of
                                                    Letraset sheets containing Lorem Ipsum passages,
                                                    and more recently with desktop publishing software
                                                    like Aldus PageMaker including versions of Lorem
                                                    Ipsum
                                                </p>

                                                <p class="guide-para">
                                                    Lorem Ipsum is simply dummy text of the printing
                                                    and typesetting industry. Lorem Ipsum has been the
                                                    industry's standard dummy text ever since the
                                                    1500s, when an unknown printer took a galley of
                                                    type and scrambled it to make a type specimen
                                                    book. It has survived not only five centuries, but
                                                    also the leap into electronic typesetting,
                                                    remaining essentially unchanged. It was
                                                    popularised in the 1960s with the release of
                                                    Letraset sheets containing Lorem Ipsum passages,
                                                    and more recently with desktop publishing software
                                                    like Aldus PageMaker including versions of Lorem
                                                    Ipsum
                                                </p>

                                                <p class="guide-para">
                                                    Lorem Ipsum is simply dummy text of the printing
                                                    and typesetting industry. Lorem Ipsum has been the
                                                    industry's standard dummy text ever since the
                                                    1500s, when an unknown printer took a galley of
                                                    type and scrambled it to make a type specimen
                                                    book. It has survived not only five centuries, but
                                                    also the leap into electronic typesetting,
                                                    remaining essentially unchanged. It was
                                                    popularised in the 1960s with the release of
                                                    Letraset sheets containing Lorem Ipsum passages,
                                                    and more recently with desktop publishing software
                                                    like Aldus PageMaker including versions of Lorem
                                                    Ipsum
                                                </p>

                                                <p class="guide-para">
                                                    Lorem Ipsum is simply dummy text of the printing
                                                    and typesetting industry. Lorem Ipsum has been the
                                                    industry's standard dummy text ever since the
                                                    1500s, when an unknown printer took a galley of
                                                    type and scrambled it to make a type specimen
                                                    book. It has survived not only five centuries, but
                                                    also the leap into electronic typesetting,
                                                    remaining essentially unchanged. It was
                                                    popularised in the 1960s with the release of
                                                    Letraset sheets containing Lorem Ipsum passages,
                                                    and more recently with desktop publishing software
                                                    like Aldus PageMaker including versions of Lorem
                                                    Ipsum
                                                </p>

                                                <p class="guide-para">
                                                    Lorem Ipsum is simply dummy text of the printing
                                                    and typesetting industry. Lorem Ipsum has been the
                                                    industry's standard dummy text ever since the
                                                    1500s, when an unknown printer took a galley of
                                                    type and scrambled it to make a type specimen
                                                    book. It has survived not only five centuries, but
                                                    also the leap into electronic typesetting,
                                                    remaining essentially unchanged. It was
                                                    popularised in the 1960s with the release of
                                                    Letraset sheets containing Lorem Ipsum passages,
                                                    and more recently with desktop publishing software
                                                    like Aldus PageMaker including versions of Lorem
                                                    Ipsum
                                                </p>

                                                <p class="guide-para">
                                                    Lorem Ipsum is simply dummy text of the printing
                                                    and typesetting industry. Lorem Ipsum has been the
                                                    industry's standard dummy text ever since the
                                                    1500s, when an unknown printer took a galley of
                                                    type and scrambled it to make a type specimen
                                                    book. It has survived not only five centuries, but
                                                    also the leap into electronic typesetting,
                                                    remaining essentially unchanged. It was
                                                    popularised in the 1960s with the release of
                                                    Letraset sheets containing Lorem Ipsum passages,
                                                    and more recently with desktop publishing software
                                                    like Aldus PageMaker including versions of Lorem
                                                    Ipsum
                                                </p>

                                                <p class="guide-para">
                                                    Lorem Ipsum is simply dummy text of the printing
                                                    and typesetting industry. Lorem Ipsum has been the
                                                    industry's standard dummy text ever since the
                                                    1500s, when an unknown printer took a galley of
                                                    type and scrambled it to make a type specimen
                                                    book. It has survived not only five centuries, but
                                                    also the leap into electronic typesetting,
                                                    remaining essentially unchanged. It was
                                                    popularised in the 1960s with the release of
                                                    Letraset sheets containing Lorem Ipsum passages,
                                                    and more recently with desktop publishing software
                                                    like Aldus PageMaker including versions of Lorem
                                                    Ipsum
                                                </p> --}}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="faq">
                                        <button type="button" class="faq-btn d-flex">
                                            <span class="flex-grow-1">Clients Forms</span>

                                            <div class="faq-btn-arrow">
                                                <i class="fa-solid fa-chevron-down"></i>
                                            </div>
                                        </button>

                                        <div class="faq-body mb-0" style="display: none">
                                            <div class="view-tab-content">


                                                <div class="entry-table-wrap">
                                                    <table class="table entries-table">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col"
                                                                    style="background: #8e8e8e !important;
                                        color: white !important;">
                                                                    File Name

                                                                    <i class="fa-solid fa-arrow-down"></i>
                                                                </th>

                                                                <th scope="col"
                                                                    style="background: #8e8e8e !important;
                                        color: white !important;">
                                                                    Label

                                                                    <i class="fa-solid fa-arrow-down"></i>
                                                                </th>

                                                                <th scope="col"
                                                                    style="background: #8e8e8e !important;
                                        color: white !important;">
                                                                    Date

                                                                    <i class="fa-solid fa-arrow-down"></i>
                                                                </th>

                                                                <th scope="col"
                                                                    style="background: #8e8e8e !important; color: white !important;">
                                                                    Download
                                                                    <i class="fa-solid fa-arrow-down"></i>
                                                                </th>
                                                                {{--
                                                                    <th scope="col"
                                                                        style="background: #8e8e8e !important;
                                        color: white !important;">
                                                                        Add to Docs/Photos

                                                                        <i class="fa-solid fa-arrow-down"></i>
                                                                    </th> --}}

                                                                {{-- <th scope="col"
                                                                        style="background: #8e8e8e !important;
                                        color: white !important;">
                                                                        Action

                                                                        <i class="fa-solid fa-arrow-down"></i>
                                                                    </th> --}}

                                                                {{-- <th scope="col"
                                                                        style="background: #8e8e8e !important;
                                        color: white !important;">
                                                                        Action

                                                                        <i class="fa-solid fa-arrow-down"></i>
                                                                    </th> --}}
                                                            </tr>
                                                        </thead>

                                                        <tbody>
                                                            @forelse($clientForms as $clientForm)
                                                                <tr class="">
                                                                    <td>{{ $clientForm->file }}</td>

                                                                    <td>{{ $clientForm->label }}</td>

                                                                    <td>{{ str_replace('-', '/', explode(' ', $clientForm->updated_at)[0]) }}</td>

                                                                    <td>
                                                                        <a href="{{ asset('files/client-forms/' . $clientForm->file) }}"
                                                                            download class="icon" title="Download">
                                                                            <i class="fa fa-download"></i>
                                                                        </a>
                                                                    </td>
                                                                    {{-- <td>Lorem Ipsum Dummy</td>

                                                                    <td>Add to Docs/Photos</td>


                                                                    <td>
                                                                        <a href="#" class="icon"
                                                                            title="Download">
                                                                            <i class="fa-solid fa-check"></i>
                                                                        </a>
                                                                    </td> --}}
                                                                </tr>
                                                            @empty
                                                                <div>No Files Found</div>
                                                            @endforelse

                                                            {{-- <tr class="bg-changed">
                                                                    <td>1_IAS_Knowledgebase.docx</td>

                                                                    <td>IAS KNOWLEDGE BASE</td>

                                                                    <td>04/09/2024</td>

                                                                    <td>Lorem Ipsum Dummy</td>

                                                                    <td>Add to Docs/Photos</td>

                                                                    <td>
                                                                        <a href="#" class="icon"
                                                                            title="Download">
                                                                            <i class="fa fa-download"></i>
                                                                        </a>
                                                                    </td>

                                                                    <td>
                                                                        <a href="#" class="icon"
                                                                            title="Download">
                                                                            <i class="fa-solid fa-check"></i>
                                                                        </a>
                                                                    </td>
                                                                </tr>

                                                                <tr class="">
                                                                    <td>1_IAS_Knowledgebase.docx</td>

                                                                    <td>IAS KNOWLEDGE BASE</td>

                                                                    <td>04/09/2024</td>

                                                                    <td>Lorem Ipsum Dummy</td>

                                                                    <td>Add to Docs/Photos</td>

                                                                    <td>
                                                                        <a href="#" class="icon"
                                                                            title="Download">
                                                                            <i class="fa fa-download"></i>
                                                                        </a>
                                                                    </td>

                                                                    <td>
                                                                        <a href="#" class="icon"
                                                                            title="Download">
                                                                            <i class="fa-solid fa-check"></i>
                                                                        </a>
                                                                    </td>
                                                                </tr> --}}

                                                            {{-- <tr class="bg-changed">
                                                                    <td>1_IAS_Knowledgebase.docx</td>

                                                                    <td>IAS KNOWLEDGE BASE</td>

                                                                    <td>04/09/2024</td>

                                                                    <td>Lorem Ipsum Dummy</td>

                                                                    <td>Add to Docs/Photos</td>

                                                                    <td>
                                                                        <a href="#" class="icon"
                                                                            title="Download">
                                                                            <i class="fa fa-download"></i>
                                                                        </a>
                                                                    </td>

                                                                    <td>
                                                                        <a href="#" class="icon"
                                                                            title="Download">
                                                                            <i class="fa-solid fa-check"></i>
                                                                        </a>
                                                                    </td>
                                                                </tr> --}}
                                                        </tbody>
                                                    </table>
                                                </div>

                                                <div class="pagination assign-pagination">
                                                    <button class="prev">
                                                        <i class="fa-solid fa-angle-left"></i>
                                                    </button>

                                                    <button class="page active-page">1</button>

                                                    <button class="page">2</button>

                                                    <button class="page">3</button>

                                                    <button class="page">4</button>

                                                    <button class="next">
                                                        <i class="fa-solid fa-angle-right"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="faq">
                                        <button type="button" class="faq-btn d-flex">
                                            <span class="flex-grow-1">General Forms</span>

                                            <div class="faq-btn-arrow">
                                                <i class="fa-solid fa-chevron-down"></i>
                                            </div>
                                        </button>

                                        <div class="faq-body mb-0">
                                            <div class="view-tab-content">
                                                <div class="entry-table-wrap">
                                                    <table class="table entries-table">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col"
                                                                    style="background: #8e8e8e !important;
                                        color: white !important;">
                                                                    File Name

                                                                    <i class="fa-solid fa-arrow-down"></i>
                                                                </th>

                                                                <th scope="col"
                                                                    style="background: #8e8e8e !important;
                                        color: white !important;">
                                                                    Label

                                                                    <i class="fa-solid fa-arrow-down"></i>
                                                                </th>

                                                                <th scope="col"
                                                                    style="background: #8e8e8e !important;
                                        color: white !important;">
                                                                    Date

                                                                    <i class="fa-solid fa-arrow-down"></i>
                                                                </th>

                                                                <th scope="col"
                                                                    style="background: #8e8e8e !important;
                                        color: white !important;">
                                                                    Download

                                                                    <i class="fa-solid fa-arrow-down"></i>
                                                                </th>
                                                            </tr>
                                                        </thead>

                                                        <tbody>
                                                            @forelse($generalForms as $generalForm)
                                                                <tr>
                                                                    <td>{{ $generalForm->file }}</td>

                                                                    <td>{{ $generalForm->label }}</td>

                                                                    <td>{{ str_replace('-', '/', explode(' ', $generalForm->updated_at)[0]) }}
                                                                    </td>
                                                                    <td>
                                                                        <a href="{{ asset('files/general-forms/' . $generalForm->file) }}"
                                                                            download class="icon" title="Download">
                                                                            <i class="fa fa-download"></i>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            @empty
                                                            @endforelse
                                                            {{-- <tr>
                                                                    <td>1_IAS_Knowledgebase.docx</td>

                                                                    <td>IAS KNOWLEDGE BASE</td>

                                                                    <td>04/09/2024</td>

                                                                    <td>
                                                                        <a href="#" class="icon"
                                                                            title="Download">
                                                                            <i class="fa fa-download"></i>
                                                                        </a>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>1_IAS_Knowledgebase.docx</td>

                                                                    <td>IAS KNOWLEDGE BASE</td>

                                                                    <td>04/09/2024</td>

                                                                    <td>
                                                                        <a href="#" class="icon"
                                                                            title="Download">
                                                                            <i class="fa fa-download"></i>
                                                                        </a>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>1_IAS_Knowledgebase.docx</td>

                                                                    <td>IAS KNOWLEDGE BASE</td>

                                                                    <td>04/09/2024</td>

                                                                    <td>
                                                                        <a href="#" class="icon"
                                                                            title="Download">
                                                                            <i class="fa fa-download"></i>
                                                                        </a>
                                                                    </td>
                                                                </tr> --}}
                                                        </tbody>
                                                    </table>
                                                </div>

                                                <div class="pagination assign-pagination">
                                                    <button class="prev">
                                                        <i class="fa-solid fa-angle-left"></i>
                                                    </button>

                                                    <button class="page active-page">1</button>

                                                    <button class="page">2</button>

                                                    <button class="page">3</button>

                                                    <button class="page">4</button>

                                                    <button class="next">
                                                        <i class="fa-solid fa-angle-right"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Main Footer -->
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            $('.guideline-content p,.guideline-content span').addClass('guide-para');
        });

         $(document).ready(function() {
    // Function to initialize pagination for a given table and pagination container
    function initPagination($table, $pagination) {
        // Configuration
        var rowsPerPage = 5; // Number of rows to display per page
        var $rows = $table.find('tbody tr');
        var totalRows = $rows.length;
        var totalPages = Math.ceil(totalRows / rowsPerPage);
        var currentPage = 1;
        var noResultsMessage = '<tr class="no-results"><td colspan="4" style="text-align: center;">No results found</td></tr>';

        // Function to update pagination display
        function updatePagination() {
            // Hide all rows
            $rows.hide();

            // Calculate start and end indices
            var start = (currentPage - 1) * rowsPerPage;
            var end = start + rowsPerPage;

            // Show rows for current page
            $rows.slice(start, end).show();

            // Update active page
            $pagination.find('.page').removeClass('active-page');
            $pagination.find('.page').eq(currentPage - 1).addClass('active-page');

            // Enable/disable prev/next buttons
            $pagination.find('.prev').prop('disabled', currentPage === 1);
            $pagination.find('.next').prop('disabled', currentPage === totalPages);
        }

        // Generate pagination buttons dynamically
        function generatePaginationButtons() {
            $pagination.find('.page').remove(); // Clear existing page buttons
            for (var i = 1; i <= totalPages; i++) {
                var $pageButton = $('<button class="page">' + i + '</button>');
                if (i === currentPage) {
                    $pageButton.addClass('active-page');
                }
                $pageButton.insertBefore($pagination.find('.next'));
            }
        }

        // Initial setup
        if (totalRows > 0) {
            // Remove any existing no-results message
            $table.find('.no-results').remove();
            // Show pagination
            $pagination.show();
            generatePaginationButtons();
            updatePagination();
        } else {
            // If no rows, append no-results message and hide pagination
            $table.find('.no-results').remove(); // Clear any existing message
            $table.find('tbody').append(noResultsMessage);
            $pagination.hide();
        }

        // Event handlers
        // Click on page number
        $pagination.on('click', '.page', function() {
            currentPage = parseInt($(this).text());
            updatePagination();
        });

        // Previous button
        $pagination.on('click', '.prev', function() {
            if (currentPage > 1) {
                currentPage--;
                updatePagination();
            }
        });

        // Next button
        $pagination.on('click', '.next', function() {
            if (currentPage < totalPages) {
                currentPage++;
                updatePagination();
            }
        });
    }

    // Iterate over all tables and their corresponding pagination controls
    $('.entries-table').each(function(index) {
        var $table = $(this);
        // Find the corresponding pagination (assumes pagination follows the table in DOM)
        var $pagination = $('.pagination.assign-pagination').eq(index);
        if ($table.length && $pagination.length) {
            initPagination($table, $pagination);
        }
    });
});
    </script>
@endpush
