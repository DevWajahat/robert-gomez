@extends('layouts.web.app')
@section('content')
    <section class="doc-sec reject-sec report-sec veh-sec">
        <div class="container-fluid">
            <div class="dashboard-content">
                <x-inner-head />
                <div class="asign-head">
                    <p>Reject Assignment</p>
                </div>
                <form action="">
                    <div class="row mb-5 row-gap-4">
                        <div class="col-md-2 col-sm-12">
                            <label for="" class="custom-label">Update Location</label>
                        </div>
                        <div class="col-lg-10 col-sm-12">
                            <div class="d-flex gap-5 radio-wrap">
                                <div class="d-flex align-items-center">
                                    <input type="radio" id="factor" class="" name="two-factor-auth"
                                        checked="">
                                    <label for="factor">No</label>
                                </div>
                                <div class="d-flex align-items-center">
                                    <input type="radio" id="factor2" class="" name="two-factor-auth">
                                    <label for="factor2">Yes</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row row-gap-4">
                        <div class="col-md-2 col-sm-12" >
                            <label for="" class="custom-label">Reason for Rejecting</label>
                        </div>
                        <div class="col-md-10 col-sm-12">
                            <textarea name="" class="custom-input mb-5" style="height: 220px; resize: none;" id="" cols="30"
                                rows="10" placeholder="Lorem Ipsum"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 col-sm-12">
                            <h1 class="d-none">jj</h1>
                        </div>
                        <div class="col-md-10 col-sm-12">
                            <input type="submit" class="submit-btn" value="Reject">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
