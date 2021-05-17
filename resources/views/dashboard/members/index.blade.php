@extends('dashboard.layouts.app')

@section('content')
    <div class="content">
        <div class="container-fluid">

            @include('dashboard.layouts.notifications')

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
                                
                                @forelse ($members as $member)
                                    <div class="col-md-6">
                                        <div class="card card-profile">
                                            <div class="card-avatar">
                                                <a href="javascript:;">
                                                    <img class="img" src="{{ asset('assets/img/' . $member->image) }}" />
                                                </a>
                                            </div>
                                            <div class="card-body">
                                                <h6 class="card-category text-gray">{{ $member->position }}</h6>
                                                <h4 class="card-title">{{ $member->name }}</h4>
                                                <p class="card-description">
                                                    {{ $member->description }}
                                                </p>
                                                @if ($member->facebook)
                                                    <a href="{{ $member->facebook }}" class="btn btn-dark btn-sm btn-round">F</a>
                                                @endif
                                                @if ($member->instagram)
                                                    <a href="{{ $member->instagram }}" class="btn btn-dark btn-sm btn-round">I</a>
                                                @endif
                                                @if ($member->twitter)
                                                    <a href="{{ $member->twitter }}" class="btn btn-dark btn-sm btn-round">T</a>
                                                @endif
                                                @if ($member->linkedin)
                                                    <a href="{{ $member->linkedin }}" class="btn btn-dark btn-sm btn-round">L</a>
                                                @endif
                                                <br>
                                                <a href="/dashboard/members/{{ $member->id }}/edit" class="btn btn-primary">Edit</a>
                                                <form action="/dashboard/members/{{ $member->id }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <div class="alert text-center col-12">
                                        No Team Members Found
                                    </div>
                                @endforelse

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
