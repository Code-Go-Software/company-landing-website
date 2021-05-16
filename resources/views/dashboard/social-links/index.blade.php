@extends('dashboard.layouts.app')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Social Media Links</h4>
                            <p class="card-category">Manage Your Social Media Profiles Links To Help Customers Find Your Business</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
								<div class="col-12 mb-3">
									<a href="/dashboard/links/create" class="btn btn-success float-right">New Social Link</a>
								</div>
                                <div class="col-12">
                                    <div class="table-responsive">
										<h4>Current Social Media Links</h4>
                                        <table class="table">
                                            <tbody>
                                                
                                                @forelse ($links as $link)
                                                    <tr>
                                                        <td>{{ $link->website }}</td>
                                                        <td>{{ $link->link }}</td>
                                                        <td>
                                                            <a href="/dashboard/links/{{ $link->id }}/edit" class="btn btn-primary">Edit</a>
                                                        </td>
                                                        <td>
                                                            <form action="/dashboard/links/{{ $link->id }}" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-danger">Delete</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <td colspan="4">No Social Media Links Found</td>
                                                    </tr>
                                                @endforelse
												
                                            </tbody>
                                        </table>
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
