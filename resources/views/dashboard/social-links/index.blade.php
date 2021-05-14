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
									<a href="/dashboard/social_links/create" class="btn btn-success float-right">New Social Link</a>
								</div>
                                <div class="col-12">
                                    <div class="table-responsive">
										<h4>Current Social Media Links</h4>
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td>Facebook</td>
													<td>www.facebook.com</td>
                                                    <td>
                                                        <button class="btn btn-primary">Edit</button>
                                                    </td>
													<td>
                                                        <button class="btn btn-danger">Delete</button>
                                                    </td>
                                                </tr>
												<tr>
                                                    <td>Facebook</td>
													<td>www.facebook.com</td>
                                                    <td>
                                                        <button class="btn btn-primary">Edit</button>
                                                    </td>
													<td>
                                                        <button class="btn btn-danger">Delete</button>
                                                    </td>
                                                </tr>
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
