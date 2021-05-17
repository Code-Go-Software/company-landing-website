@extends('dashboard.layouts.app')

@section('page-name', 'Dashboard')

@section('content')
    <div class="content">
        <div class="container-fluid">

            @include('dashboard.layouts.notifications')

            <div class="row justify-content-center">
                <div class="col-12 col-md-10">
                    <h2>Control Your Landing Website Data</h2>
                    <p>Manage everything in your landing website like:</p>
                    <ul class="text-primary">
                        <li>Image Slides</li>
                        <li>Your Services</li>
                        <li>Your Portfolio Projects</li>
                        <li>Your Team Members (Employees)</li>
                        <li>Your Customers Experiences (Testimonials)</li>
                        <li>Your Social Media Profiles</li>
                        <li>Frequently Asked Questions (FAQs)</li>
                        <li>Even Blog Posts</li>
                    </ul>
                    <p>Everything is in your control litterly, so use it wisley, if you need any help don't think twice about <b class="text-info">contacting us</b> we would be very happy to help you.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
