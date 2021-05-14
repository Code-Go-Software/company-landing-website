@extends('dashboard.layouts.app')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Team Members</h4>
                            <p class="card-category">The Team Member That Currently Exists On Your Landing Website</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
								<div class="col-12 mb-3">
									<a href="/dashboard/members/create" class="btn btn-success float-right">New Team Member</a>
								</div>
                                <div class="col-md-6">
                                    <div class="card card-profile">
                                        <div class="card-avatar">
                                            <a href="javascript:;">
                                                <img class="img" src="{{ asset('assets/img/faces/marc.jpg') }}" />
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <h6 class="card-category text-gray">CEO / Co-Founder</h6>
                                            <h4 class="card-title">Alec Thompson</h4>
                                            <p class="card-description">
                                                Don't be scared of the truth because we need to restart the human foundation
                                                in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design
                                                but the back is...
                                            </p>
                                            <a href="javascript:;" class="btn btn-dark btn-sm btn-round">F</a>
											<a href="javascript:;" class="btn btn-dark btn-sm btn-round">I</a>
											<a href="javascript:;" class="btn btn-dark btn-sm btn-round">T</a>
											<a href="javascript:;" class="btn btn-dark btn-sm btn-round">L</a>
											<br>
											<button class="btn btn-primary">Edit</button>
											<button class="btn btn-danger">Delete</button>
                                        </div>
                                    </div>
                                </div>
								<div class="col-md-6">
                                    <div class="card card-profile">
                                        <div class="card-avatar">
                                            <a href="javascript:;">
                                                <img class="img" src="{{ asset('assets/img/faces/marc.jpg') }}" />
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <h6 class="card-category text-gray">CEO / Co-Founder</h6>
                                            <h4 class="card-title">Alec Thompson</h4>
                                            <p class="card-description">
                                                Don't be scared of the truth because we need to restart the human foundation
                                                in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design
                                                but the back is...
                                            </p>
                                            <a href="javascript:;" class="btn btn-dark btn-sm btn-round">F</a>
											<a href="javascript:;" class="btn btn-dark btn-sm btn-round">I</a>
											<a href="javascript:;" class="btn btn-dark btn-sm btn-round">T</a>
											<a href="javascript:;" class="btn btn-dark btn-sm btn-round">L</a>
											<br>
											<button class="btn btn-primary">Edit</button>
											<button class="btn btn-danger">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
