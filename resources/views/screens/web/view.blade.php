@extends('layouts.web.app')
@section('content')
    @php
        $headers = ['File Name', 'Label', 'Date', 'Download', 'Add to Docs/Photos'];
        $entries = [
            ['1_IAS_Knowledgebase.docx', 'IAS KNOWLEDGE BASE', '04/09/2024', 'Lorem Ipsum Dummy', 'Add to Docs/Photos'],
            ['1_IAS_Knowledgebase.docx', 'IAS KNOWLEDGE BASE', '04/09/2024', 'Lorem Ipsum Dummy', 'Add to Docs/Photos'],
            ['1_IAS_Knowledgebase.docx', 'IAS KNOWLEDGE BASE', '04/09/2024', 'Lorem Ipsum Dummy', 'Add to Docs/Photos'],
            ['1_IAS_Knowledgebase.docx', 'IAS KNOWLEDGE BASE', '04/09/2024', 'Lorem Ipsum Dummy', 'Add to Docs/Photos'],
        ];

        $headersy = ['File Name', 'Label', 'Date', 'Download'];
        $entriesy = [
            ['1_IAS_Knowledgebase.docx', 'IAS KNOWLEDGE BASE', '04/09/2024', 'Lorem Ipsum Dummy'],
            ['1_IAS_Knowledgebase.docx', 'IAS KNOWLEDGE BASE', '04/09/2024', 'Lorem Ipsum Dummy'],
            ['1_IAS_Knowledgebase.docx', 'IAS KNOWLEDGE BASE', '04/09/2024', 'Lorem Ipsum Dummy'],
            ['1_IAS_Knowledgebase.docx', 'IAS KNOWLEDGE BASE', '04/09/2024', 'Lorem Ipsum Dummy'],
        ];

    @endphp
    <section>
        <div class="container-fluid">
            <div class="dashboard-content">
                <x-inner-head />
                <div class="view-wrapper">
                    <div class="row boxes-rows">
                        <div class="col-lg-4">
                            <div class="payment-info">
                                <div class="info-head">
                                    <h3>Claim Info</h3>
                                </div>
                                <div class="info-desc d-flex">
                                    <div>
                                        <ul class="head-ul">
                                            <li>Company: </li>
                                            <li>Company #:</li>
                                            <li> DL Number:</li>
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
                                    <button class="mod-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">You must
                                        ACCEPT or REJECT the claim to proceed</button>
                                    <div class="d-flex mb-3 gap-5">
                                        <p class="claim-para"><i class="fa-solid fa-check"></i> Accept Claim</p>
                                        <p class="claim-para"><i class="fa-solid fa-minus"></i> <a
                                                href="{{ route('reject') }}" class="text-decoration-none">Reject Claim</a>
                                        </p>
                                    </div>
                                    <div class="d-flex">
                                        <p class="claim-para"><i class="fa-solid fa-exclamation"></i> Turn On : Needs
                                            Attention</p>
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
                                    {{-- <button class="mod-btn" style="cursor: default;">Billing Change Request Pending</button> --}}
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
                                    {{-- <h4>Billing Terms and Notes</h4> --}}
                                    <button class="pay-btn" data-bs-toggle="modal" data-bs-target="#exampleModal2">Request
                                        Pay Change</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="payment-info" style="height: auto !important;">
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
                                            <li class="mb-4">09/18/2024 5:00 am <a href=""
                                                    class="text-danger text-decoration-none"
                                                    style="margin-left: 12px; font-weight:700;">Change</a></li>
                                            <li class="mb-2">2 days, 16 hours, 13 mins</li>
                                            <li>05/18/2024 6:33 pm CDT</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="pay-instruction">
                                <h5>Instructions</h5>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since the 1500s, when an unknown
                                    printer took a galley of type and scrambled it to make a type specimen book. It has
                                    survived not only five centuries, but also the leap into electronic typesetting,
                                    remaining essentially unchanged. It was popularised in the 1960s with the release of
                                    Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                                    publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="faqs">
                                <div class="faq">
                                    <button type="button" class="faq-btn d-flex"><span class="flex-grow-1">
                                            Assignments
                                        </span>
                                        <div class="faq-btn-arrow">
                                            <i class="fa-solid fa-chevron-down"></i>
                                        </div>
                                    </button>
                                    <div class="faq-body mb-0">
                                        <div class="view-tab-content">
                                            <form action="">
                                                <div class="row" style="margin-bottom: 11px">
                                                    <div class="col-6">
                                                        <div class="row align-items-center">
                                                            <div class="col-md-4">
                                                                <label for="" class="custom-label">Duplicated VIN
                                                                    #</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" name="" id=""
                                                                    class="custom-input form-control" placeholder="Select">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row" style="margin-bottom: 11px">
                                                    <div class="col-6">
                                                        <div class="row align-items-center">
                                                            <div class="col-md-4">
                                                                <label for="" class="custom-label">Duplicated Claim
                                                                    #</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" name="" id=""
                                                                    class="custom-input form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h5 class="assign-head">Insurance Information</h5>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label for="" class="custom-label">File #</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" name="" id=""
                                                                    class="custom-input form-control">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label for="" class="custom-label">Company</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" name="" id=""
                                                                    class="custom-input form-control">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label for=""
                                                                    class="custom-label">Adjuster</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" name="" id=""
                                                                    class="custom-input form-control">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label for="" class="custom-label">Deductible
                                                                    Amount</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" name="" id=""
                                                                    class="custom-input form-control">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label for="" class="custom-label">Claim
                                                                    For</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" name="" id=""
                                                                    class="custom-input form-control">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label for="" class="custom-label">Date First
                                                                    Contacted</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" name="" id=""
                                                                    class="custom-input form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label for="" class="custom-label">Claim
                                                                    Number</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" name="" id=""
                                                                    class="custom-input form-control">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label for="" class="custom-label">Adjuster
                                                                    Phone</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" name="" id=""
                                                                    class="custom-input form-control">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label for="" class="custom-label">Date of
                                                                    Loss</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" name="" id=""
                                                                    class="custom-input form-control">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label for="" class="custom-label">Insured
                                                                    Name</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" name="" id=""
                                                                    class="custom-input form-control">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label for="" class="custom-label">Policy
                                                                    Number</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" name="" id=""
                                                                    class="custom-input form-control">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label for="" class="custom-label">Type of
                                                                    Loss</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" name="" id=""
                                                                    class="custom-input form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h5 class="assign-head">Owner Information</h5>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label for="" class="custom-label">Business
                                                                    Name</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" name="" id=""
                                                                    class="custom-input form-control">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label for="" class="custom-label">Contact
                                                                    Name</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" name="" id=""
                                                                    class="custom-input form-control">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label for="" class="custom-label">City</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" name="" id=""
                                                                    class="custom-input form-control">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label for="" class="custom-label">State</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" name="" id=""
                                                                    class="custom-input form-control">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label for="" class="custom-label">Client
                                                                    Email</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" name="" id=""
                                                                    class="custom-input form-control">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label for="" class="custom-label">Mobile
                                                                    Phone</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" name="" id=""
                                                                    class="custom-input form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label for="" class="custom-label">First
                                                                    Name</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" name="" id=""
                                                                    class="custom-input form-control">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label for="" class="custom-label">Last
                                                                    Name</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" name="" id=""
                                                                    class="custom-input form-control">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label for="" class="custom-label">Address</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" name="" id=""
                                                                    class="custom-input form-control">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label for="" class="custom-label">Zip</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" name="" id=""
                                                                    class="custom-input form-control">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label for="" class="custom-label">Home
                                                                    Phone</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" name="" id=""
                                                                    class="custom-input form-control">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label for="" class="custom-label">Work
                                                                    Phone</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" name="" id=""
                                                                    class="custom-input form-control">
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
                                                                    class="custom-input form-control">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label for="" class="custom-label">Address</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" name="" id=""
                                                                    class="custom-input form-control">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label for="" class="custom-label">City</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" name="" id=""
                                                                    class="custom-input form-control">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label for="" class="custom-label">Location
                                                                    Phone</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" name="" id=""
                                                                    class="custom-input form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label for="" class="custom-label">Location
                                                                    Name</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" name="" id=""
                                                                    class="custom-input form-control">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label for="" class="custom-label">State</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" name="" id=""
                                                                    class="custom-input form-control">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label for="" class="custom-label">Zip</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" name="" id=""
                                                                    class="custom-input form-control">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label for="" class="custom-label">State</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" name="" id=""
                                                                    class="custom-input form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h5 class="assign-head">Vehicle Information</h5>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label for="" class="custom-label">Year</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" name="" id=""
                                                                    class="custom-input form-control">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label for="" class="custom-label">Make</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" name="" id=""
                                                                    class="custom-input form-control">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label for="" class="custom-label">VIN #</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" name="" id=""
                                                                    class="custom-input form-control">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label for="" class="custom-label">License
                                                                    Plate</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" name="" id=""
                                                                    class="custom-input form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label for="" class="custom-label">Mileage</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" name="" id=""
                                                                    class="custom-input form-control">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label for="" class="custom-label">Model</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" name="" id=""
                                                                    class="custom-input form-control">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label for="" class="custom-label">Color</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" name="" id=""
                                                                    class="custom-input form-control">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label for="" class="custom-label">Damage</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" name="" id=""
                                                                    class="custom-input form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="faq">
                                    <button type="button" class="faq-btn d-flex"><span class="flex-grow-1">
                                            Guidelines

                                        </span>
                                        <div class="faq-btn-arrow">
                                            <i class="fa-solid fa-chevron-down"></i>
                                        </div>
                                    </button>
                                    <div class="faq-body mb-0">
                                        <div class="view-tab-content">
                                            <p class="guide-para">Lorem Ipsum is simply dummy text of the printing and
                                                typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                                text
                                                ever since the 1500s, when an unknown printer took a galley of type and
                                                scrambled it to make a type specimen book. It has survived not only five
                                                centuries, but also the leap into electronic typesetting, remaining
                                                essentially
                                                unchanged. It was popularised in the 1960s with the release of Letraset
                                                sheets
                                                containing Lorem Ipsum passages, and more recently with desktop publishing
                                                software like Aldus PageMaker including versions of Lorem Ipsum</p>
                                            <p class="guide-para">Lorem Ipsum is simply dummy text of the printing and
                                                typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                                text
                                                ever since the 1500s, when an unknown printer took a galley of type and
                                                scrambled it to make a type specimen book. It has survived not only five
                                                centuries, but also the leap into electronic typesetting, remaining
                                                essentially
                                                unchanged. It was popularised in the 1960s with the release of Letraset
                                                sheets
                                                containing Lorem Ipsum passages, and more recently with desktop publishing
                                                software like Aldus PageMaker including versions of Lorem Ipsum</p>
                                            <p class="guide-para">Lorem Ipsum is simply dummy text of the printing and
                                                typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                                text
                                                ever since the 1500s, when an unknown printer took a galley of type and
                                                scrambled it to make a type specimen book. It has survived not only five
                                                centuries, but also the leap into electronic typesetting, remaining
                                                essentially
                                                unchanged. It was popularised in the 1960s with the release of Letraset
                                                sheets
                                                containing Lorem Ipsum passages, and more recently with desktop publishing
                                                software like Aldus PageMaker including versions of Lorem Ipsum</p>
                                            <p class="guide-para">Lorem Ipsum is simply dummy text of the printing and
                                                typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                                text
                                                ever since the 1500s, when an unknown printer took a galley of type and
                                                scrambled it to make a type specimen book. It has survived not only five
                                                centuries, but also the leap into electronic typesetting, remaining
                                                essentially
                                                unchanged. It was popularised in the 1960s with the release of Letraset
                                                sheets
                                                containing Lorem Ipsum passages, and more recently with desktop publishing
                                                software like Aldus PageMaker including versions of Lorem Ipsum</p>
                                            <p class="guide-para">Lorem Ipsum is simply dummy text of the printing and
                                                typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                                text
                                                ever since the 1500s, when an unknown printer took a galley of type and
                                                scrambled it to make a type specimen book. It has survived not only five
                                                centuries, but also the leap into electronic typesetting, remaining
                                                essentially
                                                unchanged. It was popularised in the 1960s with the release of Letraset
                                                sheets
                                                containing Lorem Ipsum passages, and more recently with desktop publishing
                                                software like Aldus PageMaker including versions of Lorem Ipsum</p>
                                            <p class="guide-para">Lorem Ipsum is simply dummy text of the printing and
                                                typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                                text
                                                ever since the 1500s, when an unknown printer took a galley of type and
                                                scrambled it to make a type specimen book. It has survived not only five
                                                centuries, but also the leap into electronic typesetting, remaining
                                                essentially
                                                unchanged. It was popularised in the 1960s with the release of Letraset
                                                sheets
                                                containing Lorem Ipsum passages, and more recently with desktop publishing
                                                software like Aldus PageMaker including versions of Lorem Ipsum</p>
                                            <p class="guide-para">Lorem Ipsum is simply dummy text of the printing and
                                                typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                                text
                                                ever since the 1500s, when an unknown printer took a galley of type and
                                                scrambled it to make a type specimen book. It has survived not only five
                                                centuries, but also the leap into electronic typesetting, remaining
                                                essentially
                                                unchanged. It was popularised in the 1960s with the release of Letraset
                                                sheets
                                                containing Lorem Ipsum passages, and more recently with desktop publishing
                                                software like Aldus PageMaker including versions of Lorem Ipsum</p>
                                            <p class="guide-para">Lorem Ipsum is simply dummy text of the printing and
                                                typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                                text
                                                ever since the 1500s, when an unknown printer took a galley of type and
                                                scrambled it to make a type specimen book. It has survived not only five
                                                centuries, but also the leap into electronic typesetting, remaining
                                                essentially
                                                unchanged. It was popularised in the 1960s with the release of Letraset
                                                sheets
                                                containing Lorem Ipsum passages, and more recently with desktop publishing
                                                software like Aldus PageMaker including versions of Lorem Ipsum</p>
                                            <p class="guide-para">Lorem Ipsum is simply dummy text of the printing and
                                                typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                                text
                                                ever since the 1500s, when an unknown printer took a galley of type and
                                                scrambled it to make a type specimen book. It has survived not only five
                                                centuries, but also the leap into electronic typesetting, remaining
                                                essentially
                                                unchanged. It was popularised in the 1960s with the release of Letraset
                                                sheets
                                                containing Lorem Ipsum passages, and more recently with desktop publishing
                                                software like Aldus PageMaker including versions of Lorem Ipsum</p>
                                            <p class="guide-para">Lorem Ipsum is simply dummy text of the printing and
                                                typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                                text
                                                ever since the 1500s, when an unknown printer took a galley of type and
                                                scrambled it to make a type specimen book. It has survived not only five
                                                centuries, but also the leap into electronic typesetting, remaining
                                                essentially
                                                unchanged. It was popularised in the 1960s with the release of Letraset
                                                sheets
                                                containing Lorem Ipsum passages, and more recently with desktop publishing
                                                software like Aldus PageMaker including versions of Lorem Ipsum</p>
                                            <p class="guide-para">Lorem Ipsum is simply dummy text of the printing and
                                                typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                                text
                                                ever since the 1500s, when an unknown printer took a galley of type and
                                                scrambled it to make a type specimen book. It has survived not only five
                                                centuries, but also the leap into electronic typesetting, remaining
                                                essentially
                                                unchanged. It was popularised in the 1960s with the release of Letraset
                                                sheets
                                                containing Lorem Ipsum passages, and more recently with desktop publishing
                                                software like Aldus PageMaker including versions of Lorem Ipsum</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="faq">
                                    <button type="button" class="faq-btn d-flex"><span class="flex-grow-1">
                                            Clients Forms

                                        </span>
                                        <div class="faq-btn-arrow">
                                            <i class="fa-solid fa-chevron-down"></i>
                                        </div>
                                    </button>
                                    <div class="faq-body mb-0">
                                        <div class="view-tab-content">
                                            <x-entries-table :entries="$entries" :headers="$headers" />
                                            <x-pagination />
                                        </div>
                                    </div>
                                </div>
                                <div class="faq">
                                    <button type="button" class="faq-btn d-flex"><span class="flex-grow-1">
                                            General Forms

                                        </span>
                                        <div class="faq-btn-arrow">
                                            <i class="fa-solid fa-chevron-down"></i>
                                        </div>
                                    </button>
                                    <div class="faq-body mb-0">
                                        <div class="view-tab-content">
                                            <x-entries-table2 :entriesy="$entriesy" :headersy="$headersy" />
                                            <x-pagination />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            {{-- <div class="dropdown-wrapper" id="exTab1">
                                <div class="dropdown-toggle" id="selectedTab" onclick="toggleDropdown()">Assignments</div>
                                <div id="dropdown" class="dropdown-content w-100">
                                    <ul class="nav nav-tabs w-100 flex-col" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button onclick="selectTab(this)" class="nav-link active" id="home-tab"
                                                data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab"
                                                aria-controls="home" aria-selected="true">Assignments</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button onclick="selectTab(this)" class="nav-link" id="profile-tab"
                                                data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab"
                                                aria-controls="profile" aria-selected="false">Guidelines</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button onclick="selectTab(this)" class="nav-link" id="contact-tab"
                                                data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab"
                                                aria-controls="contact" aria-selected="false">Client Forms</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button onclick="selectTab(this)" class="nav-link" id="contact-tab2"
                                                data-bs-toggle="tab" data-bs-target="#contact2" type="button"
                                                role="tab" aria-controls="contact2" aria-selected="false">General
                                                Forms</button>
                                        </li>
                                    </ul>
                                </div>
                            </div> --}}

                            {{-- <div class="view-tab-wrapper" id="exTab1">
                                <ul class="nav nav-tabs justify-content-center gap-1 border-0" id="myTab"
                                    role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                            data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                            aria-selected="true">Assignments</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                            data-bs-target="#profile" type="button" role="tab"
                                            aria-controls="profile" aria-selected="false">Guidelines</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                            data-bs-target="#contact" type="button" role="tab"
                                            aria-controls="contact" aria-selected="false">Client Forms</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="contact-tab2" data-bs-toggle="tab"
                                            data-bs-target="#contact2" type="button" role="tab"
                                            aria-controls="contact2" aria-selected="false">General Forms</button>
                                    </li>
                                </ul>
                            </div> --}}
                            {{-- <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel"
                                    aria-labelledby="home-tab">
                                    <div class="view-tab-content">
                                        <form action="">
                                            <div class="row" style="margin-bottom: 11px">
                                                <div class="col-6">
                                                    <div class="row align-items-center">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Duplicated VIN
                                                                #</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="" id=""
                                                                class="custom-input form-control" placeholder="Select">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row" style="margin-bottom: 11px">
                                                <div class="col-6">
                                                    <div class="row align-items-center">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Duplicated Claim
                                                                #</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="" id=""
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h5 class="assign-head">Insurance Information</h5>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">File #</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="" id=""
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Company</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="" id=""
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Adjuster</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="" id=""
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Deductible
                                                                Amount</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="" id=""
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Claim For</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="" id=""
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Date First
                                                                Contacted</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="" id=""
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Claim
                                                                Number</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="" id=""
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Adjuster
                                                                Phone</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="" id=""
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Date of
                                                                Loss</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="" id=""
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Insured
                                                                Name</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="" id=""
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Policy
                                                                Number</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="" id=""
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Type of
                                                                Loss</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="" id=""
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h5 class="assign-head">Owner Information</h5>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Business
                                                                Name</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="" id=""
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Contact
                                                                Name</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="" id=""
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">City</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="" id=""
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">State</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="" id=""
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Client
                                                                Email</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="" id=""
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Mobile
                                                                Phone</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="" id=""
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">First Name</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="" id=""
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Last Name</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="" id=""
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Address</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="" id=""
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Zip</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="" id=""
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Home Phone</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="" id=""
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Work Phone</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="" id=""
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h5 class="assign-head">Location Information</h5>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Location</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="" id=""
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Address</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="" id=""
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">City</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="" id=""
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Location
                                                                Phone</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="" id=""
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Location
                                                                Name</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="" id=""
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">State</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="" id=""
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Zip</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="" id=""
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">State</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="" id=""
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h5 class="assign-head">Vehicle Information</h5>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Year</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="" id=""
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Make</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="" id=""
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">VIN #</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="" id=""
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">License
                                                                Plate</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="" id=""
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Mileage</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="" id=""
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Model</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="" id=""
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Color</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="" id=""
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Damage</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="" id=""
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="view-tab-content">
                                        <p class="guide-para">Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                            ever since the 1500s, when an unknown printer took a galley of type and
                                            scrambled it to make a type specimen book. It has survived not only five
                                            centuries, but also the leap into electronic typesetting, remaining essentially
                                            unchanged. It was popularised in the 1960s with the release of Letraset sheets
                                            containing Lorem Ipsum passages, and more recently with desktop publishing
                                            software like Aldus PageMaker including versions of Lorem Ipsum</p>
                                        <p class="guide-para">Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                            ever since the 1500s, when an unknown printer took a galley of type and
                                            scrambled it to make a type specimen book. It has survived not only five
                                            centuries, but also the leap into electronic typesetting, remaining essentially
                                            unchanged. It was popularised in the 1960s with the release of Letraset sheets
                                            containing Lorem Ipsum passages, and more recently with desktop publishing
                                            software like Aldus PageMaker including versions of Lorem Ipsum</p>
                                        <p class="guide-para">Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                            ever since the 1500s, when an unknown printer took a galley of type and
                                            scrambled it to make a type specimen book. It has survived not only five
                                            centuries, but also the leap into electronic typesetting, remaining essentially
                                            unchanged. It was popularised in the 1960s with the release of Letraset sheets
                                            containing Lorem Ipsum passages, and more recently with desktop publishing
                                            software like Aldus PageMaker including versions of Lorem Ipsum</p>
                                        <p class="guide-para">Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                            ever since the 1500s, when an unknown printer took a galley of type and
                                            scrambled it to make a type specimen book. It has survived not only five
                                            centuries, but also the leap into electronic typesetting, remaining essentially
                                            unchanged. It was popularised in the 1960s with the release of Letraset sheets
                                            containing Lorem Ipsum passages, and more recently with desktop publishing
                                            software like Aldus PageMaker including versions of Lorem Ipsum</p>
                                        <p class="guide-para">Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                            ever since the 1500s, when an unknown printer took a galley of type and
                                            scrambled it to make a type specimen book. It has survived not only five
                                            centuries, but also the leap into electronic typesetting, remaining essentially
                                            unchanged. It was popularised in the 1960s with the release of Letraset sheets
                                            containing Lorem Ipsum passages, and more recently with desktop publishing
                                            software like Aldus PageMaker including versions of Lorem Ipsum</p>
                                        <p class="guide-para">Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                            ever since the 1500s, when an unknown printer took a galley of type and
                                            scrambled it to make a type specimen book. It has survived not only five
                                            centuries, but also the leap into electronic typesetting, remaining essentially
                                            unchanged. It was popularised in the 1960s with the release of Letraset sheets
                                            containing Lorem Ipsum passages, and more recently with desktop publishing
                                            software like Aldus PageMaker including versions of Lorem Ipsum</p>
                                        <p class="guide-para">Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                            ever since the 1500s, when an unknown printer took a galley of type and
                                            scrambled it to make a type specimen book. It has survived not only five
                                            centuries, but also the leap into electronic typesetting, remaining essentially
                                            unchanged. It was popularised in the 1960s with the release of Letraset sheets
                                            containing Lorem Ipsum passages, and more recently with desktop publishing
                                            software like Aldus PageMaker including versions of Lorem Ipsum</p>
                                        <p class="guide-para">Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                            ever since the 1500s, when an unknown printer took a galley of type and
                                            scrambled it to make a type specimen book. It has survived not only five
                                            centuries, but also the leap into electronic typesetting, remaining essentially
                                            unchanged. It was popularised in the 1960s with the release of Letraset sheets
                                            containing Lorem Ipsum passages, and more recently with desktop publishing
                                            software like Aldus PageMaker including versions of Lorem Ipsum</p>
                                        <p class="guide-para">Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                            ever since the 1500s, when an unknown printer took a galley of type and
                                            scrambled it to make a type specimen book. It has survived not only five
                                            centuries, but also the leap into electronic typesetting, remaining essentially
                                            unchanged. It was popularised in the 1960s with the release of Letraset sheets
                                            containing Lorem Ipsum passages, and more recently with desktop publishing
                                            software like Aldus PageMaker including versions of Lorem Ipsum</p>
                                        <p class="guide-para">Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                            ever since the 1500s, when an unknown printer took a galley of type and
                                            scrambled it to make a type specimen book. It has survived not only five
                                            centuries, but also the leap into electronic typesetting, remaining essentially
                                            unchanged. It was popularised in the 1960s with the release of Letraset sheets
                                            containing Lorem Ipsum passages, and more recently with desktop publishing
                                            software like Aldus PageMaker including versions of Lorem Ipsum</p>
                                        <p class="guide-para">Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                            ever since the 1500s, when an unknown printer took a galley of type and
                                            scrambled it to make a type specimen book. It has survived not only five
                                            centuries, but also the leap into electronic typesetting, remaining essentially
                                            unchanged. It was popularised in the 1960s with the release of Letraset sheets
                                            containing Lorem Ipsum passages, and more recently with desktop publishing
                                            software like Aldus PageMaker including versions of Lorem Ipsum</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                    <div class="view-tab-content">
                                        <x-entries-table :entries="$entries" :headers="$headers" />
                                        <x-pagination />
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="contact2" role="tabpanel"
                                    aria-labelledby="contact-tab2">
                                    <div class="view-tab-content">
                                        <x-entries-table2 :entriesy="$entriesy" :headersy="$headersy" />
                                        <x-pagination />
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                    {{-- <div class="col-lg-8">
                            <div class="view-tab-wrapper" id="exTab1">
                                <ul class="nav nav-tabs justify-content-center gap-1 border-0" id="myTab"
                                    role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link custom-bl active" id="home-tab" data-bs-toggle="tab"
                                            data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                            aria-selected="true">Assignments
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link " id="profile-tab" data-bs-toggle="tab"
                                            data-bs-target="#profile" type="button" role="tab" aria-controls="profile"
                                            aria-selected="false">Guidelines
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                            data-bs-target="#contact" type="button" role="tab" aria-controls="contact"
                                            aria-selected="false">Client Forms
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link custom-br" id="contact-tab2" data-bs-toggle="tab"
                                            data-bs-target="#contact2" type="button" role="tab"
                                            aria-controls="contact2" aria-selected="false">General Forms
                                        </button>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel"
                                    aria-labelledby="home-tab">
                                    <div class="view-tab-content">
                                        <form action="">
                                            <div class="row" style="margin-bottom: 11px">
                                                <div class="col-6">
                                                    <div class="row align-items-center">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Duplicated VIN
                                                                #</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="" id=""
                                                                class="custom-input form-control" placeholder="Select">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row" style="margin-bottom: 11px">
                                                <div class="col-6">
                                                    <div class="row align-items-center">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Duplicated Claim
                                                                #</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="" id=""
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h5 class="assign-head">Insurance Information</h5>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">File #</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="" id=""
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Company</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="" id=""
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Adjuster</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="" id=""
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Deductible
                                                                Amount</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="" id=""
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Claim For</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="" id=""
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Date First
                                                                Contacted</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="" id=""
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Claim
                                                                Number</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="" id=""
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Adjuster
                                                                Phone</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="" id=""
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Date of
                                                                Loss</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="" id=""
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Insured
                                                                Name</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="" id=""
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Policy
                                                                Number</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="" id=""
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Type of
                                                                Loss</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="" id=""
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h5 class="assign-head">Owner Information</h5>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Business
                                                                Name</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="" id=""
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Contact
                                                                Name</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="" id=""
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">City</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="" id=""
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">State</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="" id=""
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Client
                                                                Email</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="" id=""
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Mobile
                                                                Phone</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="" id=""
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">First Name</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="" id=""
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Last Name</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="" id=""
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Address</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="" id=""
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Zip</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="" id=""
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Home Phone</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="" id=""
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Work Phone</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="" id=""
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h5 class="assign-head">Location Information</h5>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Location</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="" id=""
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Address</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="" id=""
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">City</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="" id=""
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Location
                                                                Phone</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="" id=""
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Location
                                                                Name</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="" id=""
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">State</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="" id=""
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Zip</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="" id=""
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">State</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="" id=""
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h5 class="assign-head">Vehicle Information</h5>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Year</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="" id=""
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Make</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="" id=""
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">VIN #</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="" id=""
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">License
                                                                Plate</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="" id=""
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Mileage</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="" id=""
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Model</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="" id=""
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Color</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="" id=""
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Damage</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="" id=""
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="view-tab-content">
                                        <p class="guide-para">Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                            ever since the 1500s, when an unknown printer took a galley of type and
                                            scrambled it to make a type specimen book. It has survived not only five
                                            centuries, but also the leap into electronic typesetting, remaining essentially
                                            unchanged. It was popularised in the 1960s with the release of Letraset sheets
                                            containing Lorem Ipsum passages, and more recently with desktop publishing
                                            software like Aldus PageMaker including versions of Lorem Ipsum</p>
                                        <p class="guide-para">Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                            ever since the 1500s, when an unknown printer took a galley of type and
                                            scrambled it to make a type specimen book. It has survived not only five
                                            centuries, but also the leap into electronic typesetting, remaining essentially
                                            unchanged. It was popularised in the 1960s with the release of Letraset sheets
                                            containing Lorem Ipsum passages, and more recently with desktop publishing
                                            software like Aldus PageMaker including versions of Lorem Ipsum</p>
                                        <p class="guide-para">Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                            ever since the 1500s, when an unknown printer took a galley of type and
                                            scrambled it to make a type specimen book. It has survived not only five
                                            centuries, but also the leap into electronic typesetting, remaining essentially
                                            unchanged. It was popularised in the 1960s with the release of Letraset sheets
                                            containing Lorem Ipsum passages, and more recently with desktop publishing
                                            software like Aldus PageMaker including versions of Lorem Ipsum</p>
                                        <p class="guide-para">Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                            ever since the 1500s, when an unknown printer took a galley of type and
                                            scrambled it to make a type specimen book. It has survived not only five
                                            centuries, but also the leap into electronic typesetting, remaining essentially
                                            unchanged. It was popularised in the 1960s with the release of Letraset sheets
                                            containing Lorem Ipsum passages, and more recently with desktop publishing
                                            software like Aldus PageMaker including versions of Lorem Ipsum</p>
                                        <p class="guide-para">Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                            ever since the 1500s, when an unknown printer took a galley of type and
                                            scrambled it to make a type specimen book. It has survived not only five
                                            centuries, but also the leap into electronic typesetting, remaining essentially
                                            unchanged. It was popularised in the 1960s with the release of Letraset sheets
                                            containing Lorem Ipsum passages, and more recently with desktop publishing
                                            software like Aldus PageMaker including versions of Lorem Ipsum</p>
                                        <p class="guide-para">Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                            ever since the 1500s, when an unknown printer took a galley of type and
                                            scrambled it to make a type specimen book. It has survived not only five
                                            centuries, but also the leap into electronic typesetting, remaining essentially
                                            unchanged. It was popularised in the 1960s with the release of Letraset sheets
                                            containing Lorem Ipsum passages, and more recently with desktop publishing
                                            software like Aldus PageMaker including versions of Lorem Ipsum</p>
                                        <p class="guide-para">Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                            ever since the 1500s, when an unknown printer took a galley of type and
                                            scrambled it to make a type specimen book. It has survived not only five
                                            centuries, but also the leap into electronic typesetting, remaining essentially
                                            unchanged. It was popularised in the 1960s with the release of Letraset sheets
                                            containing Lorem Ipsum passages, and more recently with desktop publishing
                                            software like Aldus PageMaker including versions of Lorem Ipsum</p>
                                        <p class="guide-para">Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                            ever since the 1500s, when an unknown printer took a galley of type and
                                            scrambled it to make a type specimen book. It has survived not only five
                                            centuries, but also the leap into electronic typesetting, remaining essentially
                                            unchanged. It was popularised in the 1960s with the release of Letraset sheets
                                            containing Lorem Ipsum passages, and more recently with desktop publishing
                                            software like Aldus PageMaker including versions of Lorem Ipsum</p>
                                        <p class="guide-para">Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                            ever since the 1500s, when an unknown printer took a galley of type and
                                            scrambled it to make a type specimen book. It has survived not only five
                                            centuries, but also the leap into electronic typesetting, remaining essentially
                                            unchanged. It was popularised in the 1960s with the release of Letraset sheets
                                            containing Lorem Ipsum passages, and more recently with desktop publishing
                                            software like Aldus PageMaker including versions of Lorem Ipsum</p>
                                        <p class="guide-para">Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                            ever since the 1500s, when an unknown printer took a galley of type and
                                            scrambled it to make a type specimen book. It has survived not only five
                                            centuries, but also the leap into electronic typesetting, remaining essentially
                                            unchanged. It was popularised in the 1960s with the release of Letraset sheets
                                            containing Lorem Ipsum passages, and more recently with desktop publishing
                                            software like Aldus PageMaker including versions of Lorem Ipsum</p>
                                        <p class="guide-para">Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                            ever since the 1500s, when an unknown printer took a galley of type and
                                            scrambled it to make a type specimen book. It has survived not only five
                                            centuries, but also the leap into electronic typesetting, remaining essentially
                                            unchanged. It was popularised in the 1960s with the release of Letraset sheets
                                            containing Lorem Ipsum passages, and more recently with desktop publishing
                                            software like Aldus PageMaker including versions of Lorem Ipsum</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                    <div class="view-tab-content">
                                        <x-entries-table :entries="$entries" :headers="$headers" />
                                        <x-pagination />
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="contact2" role="tabpanel"
                                    aria-labelledby="contact-tab2">
                                    <div class="view-tab-content">
                                        <x-entries-table2 :entriesy="$entriesy" :headersy="$headersy" />
                                        <x-pagination />
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade modal-bg-custom " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-modal="true" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div>
                    <p class="claim-para">Accept the Claim</p>
                    <p class="sub-head">Based on agreed rates your compensation for this claim would be</p>
                </div>
                <div class="modal-header info-desc p-0">
                    <table class="table text-start">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Miles</th>
                                <th>Payment</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Base Fee</td>
                                <td></td>
                                <td>$ 0.00</td>
                            </tr>
                            <tr>
                                <td>MI Roundtrip</td>
                                <td>0000</td>
                                <td>$ 0.00</td>
                            </tr>
                            <tr>
                                <td>Free Miles</td>
                                <td>0000</td>
                                <td>$ 0.00</td>
                            </tr>
                            <tr>
                                <td>Paid Miles</td>
                                <td>0000</td>
                                <td>$ 0.00</td>
                            </tr>
                            <tr>
                                <td>Total Appraisal Payment</td>
                                <td>00.00</td>
                                <td>$ 0.00</td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="sub-head">Based on agreed rates your compensation for this claim would be</p>
                </div>
                <div class="modal-body">
                    <div>
                        <p class="sub-head m-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                            printer took a galley of type and scrambled it to make a type specimen book. It has survived not
                            only five centuries, but also the leap into electronic typesetting, remaining essentially
                            unchanged.</p>
                    </div>
                </div>
                <div class="modal-footer justify-content-center info-desc gap-3">
                    <button type="button" class="pay-btn text-center bg-primary" data-bs-dismiss="modal">Accept
                        Claim</button>
                    <button type="button" class="pay-btn text-center" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade modal-bg-custom " id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2"
        aria-modal="true" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div>
                    <p class="claim-para">Request Pay Change</p>
                    <p class="sub-head">Based on agreed rates your compensation for this claim would be</p>
                </div>
                <div class="modal-header info-desc p-0">
                    <table class="table text-start">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Miles</th>
                                <th>Payment</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Base Fee</td>
                                <td></td>
                                <td>$ 0.00</td>
                            </tr>
                            <tr>
                                <td>MI Roundtrip</td>
                                <td>0000</td>
                                <td>$ 0.00</td>
                            </tr>
                            <tr>
                                <td>Free Miles</td>
                                <td>0000</td>
                                <td>$ 0.00</td>
                            </tr>
                            <tr>
                                <td>Paid Miles</td>
                                <td>0000</td>
                                <td>$ 0.00</td>
                            </tr>
                            <tr>
                                <td>Total Appraisal Payment</td>
                                <td>00.00</td>
                                <td>$ 0.00</td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="sub-head">Mileage Request Info:</p>
                </div>
                <div class="modal-body">
                    <div>
                        <p class="sub-head m-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                            printer took a galley of type and scrambled it to make a type specimen book. It has survived not
                            only five centuries, but also the leap into electronic typesetting, remaining essentially
                            unchanged.</p>
                    </div>
                </div>
                <div class="modal-footer justify-content-center info-desc gap-3">
                    <button type="button" class="pay-btn text-center bg-primary" data-bs-dismiss="modal">Submit
                        Request</button>
                    <button type="button" class="pay-btn text-center" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade modal-bg-custom " id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel2"
        aria-modal="true" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content" style="background: transparent; border: none;">
                <div>
                    <p class="claim-para text-black text-center mb-3" style="font-weight: 700">Rules & Regulations</p>
                </div>
                <div class="modal-header info-desc p-0">
                </div>
                <div class="modal-body" style="padding: 0px !important; border: none !important;">
                    <div>
                        <p class="sub-head">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem
                            Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                            took a galley of type and scrambled it to make a type specimen book. It has survived not only
                            five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                        </p>
                        <p class="sub-head">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem
                            Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                            took a galley of type and scrambled it to make a type specimen book. It has survived not only
                            five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                        </p>
                        <p class="sub-head">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem
                            Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                            took a galley of type and scrambled it to make a type specimen book. It has survived not only
                            five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                        </p>
                        <p class="sub-head">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem
                            Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                            took a galley of type and scrambled it to make a type specimen book. It has survived not only
                            five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                        </p>
                        <p class="sub-head">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem
                            Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                            took a galley of type and scrambled it to make a type specimen book. It has survived not only
                            five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                        </p>
                        <p class="sub-head">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem
                            Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                            took a galley of type and scrambled it to make a type specimen book. It has survived not only
                            five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                        </p>
                    </div>
                </div>
                <div class="modal-footer justify-content-center info-desc gap-3">
                    <button type="button" class="pay-btn text-center bg-primary"
                        data-bs-dismiss="modal">Accepted</button>
                    <button type="button" class="pay-btn text-center" data-bs-dismiss="modal">Rejected</button>
                </div>
            </div>
        </div>
    </div>
@endsection
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        $(".faq-btn").click(function() {
            $(this).parents(".faq").hasClass("active") ?
                ($(this).parents(".faq").removeClass("active"), $(".faq-body").slideUp()) :
                ($(".faq-body").slideUp(),
                    $(".faq").removeClass("active"),
                    $(this).parents(".faq").addClass("active"),
                    $(this).parents(".faq").find(".faq-body").slideDown());
        });
    });
</script>

{{-- <script>
    function toggleDropdown() {
        document.getElementById("dropdown").classList.toggle("show");
    }

    function selectTab(element) {
        document.getElementById("selectedTab").innerText = element.innerText;
        document.getElementById("dropdown").classList.remove("show");
    }

    window.onclick = function(event) {
        if (!event.target.matches('.dropdown-toggle')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            for (var i = 0; i < dropdowns.length; i++) {
                dropdowns[i].classList.remove('show');
            }
        }
    }
</script> --}}
