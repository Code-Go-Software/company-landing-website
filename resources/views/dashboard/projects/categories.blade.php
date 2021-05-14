@extends('dashboard.layouts.app')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Projects Categories</h4>
                            <p class="card-category">Create Categories To Organize Your Portfolio Projects In</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
								<div class="col-12">
									<form action="">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="bmd-label-floating">Category Name</label>
													<input type="text" class="form-control">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<button class="btn btn-success">Create Category</button>
												</div>
											</div>
										</div>
									</form>
								</div>
                                <div class="col-12">
                                    <div class="table-responsive">
										<h4>Current Categories</h4>
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td>Category 1</td>
													<td>12 Project</td>
                                                    <td>
                                                        <button class="btn btn-danger">Delete</button>
                                                    </td>
                                                </tr>
												<tr>
                                                    <td>Category 1</td>
													<td>12 Project</td>
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
