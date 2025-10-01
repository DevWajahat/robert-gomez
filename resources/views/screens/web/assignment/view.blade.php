@extends('layouts.web.app')
@section('content')
    @php
        $headers = ['File Name', 'Label', 'Date', 'Download'];
        // $entries = $clientForms->map(function ($clientForm) {
        //     return [
        //         $clientForm->file ?? 'N/A',
        //         $clientForm->label ?? 'N/A',
        //         $clientForm->created_at ? $clientForm->created_at->format('d/m/Y') : 'N/A',
        //         ''
        //     ];
        // })->toArray();

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
                <x-inner-head :assignment="$assignment->id" />
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
                                                href="{{ route('reject',$assignment->id) }}" class="text-decoration-none">Reject Claim</a>
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
                                            {!! $guideline->content !!}

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
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        @forelse($clientForms as $clientForm)
                                                            <tr class="">
                                                                <td>{{ $clientForm->file }}</td>

                                                                <td>{{ $clientForm->label }}</td>

                                                                <td>{{ str_replace('-', '/', explode(' ', $clientForm->updated_at)[0]) }}
                                                                </td>

                                                                <td>
                                                                    <a href="{{ asset('files/client-forms/' . $clientForm->file) }}"
                                                                        download class="icon" title="Download">
                                                                        <i class="fa fa-download"></i>
                                                                    </a>
                                                                </td>

                                                            </tr>
                                                        @empty
                                                            <div>No Files Found</div>
                                                        @endforelse


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
                                    <button type="button" class="faq-btn d-flex"><span class="flex-grow-1">
                                            General Forms

                                        </span>
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
                                            {{-- <x-entries-table2 :entriesy="$entriesy" :headersy="$headersy" />
                                            <x-pagination /> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">

                        </div>
                    </div>
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
