@extends('layouts.web.app')
@section('content')
    <section class="doc-sec reject-sec report-sec veh-sec">
        <div class="container-fluid">
            <div class="dashboard-content">
                <x-inner-head />
                <div class="asign-head">
                    <p>Change Assignment Phase</p>
                </div>
                <form action="">
                    <div class="row mb-5 row-gap-3 align-items-center">
                        <div class="col-md-2">
                            <label for="" class="custom-label">Assignment Phase</label>
                        </div>
                        <div class="col-md-5">
                            <select name="" id="" class="course-select">
                                <option value="Relevance">Select</option>
                                <option>Lorem Ipsum</option>
                                <option>Lorem Ipsum</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-5 row-gap-3 align-items-center">
                        <div class="col-md-2">
                            <label for="" class="custom-label">Sub Status</label>
                        </div>
                        <div class="col-md-5">
                            <select name="" id="" class="course-select">
                                <option value="Relevance">Select</option>
                                <option>Lorem Ipsum</option>
                                <option>Lorem Ipsum</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <h1 class="d-none">jj</h1>
                        </div>
                        <div class="col-md-10">
                            <input type="submit" class="submit-btn" value="Submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
