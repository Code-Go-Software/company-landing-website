@extends('dashboard.layouts.app')

@section('content')
    <div class="content">
        <div class="container-fluid">

            @include('dashboard.layouts.notifications')

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
									<form action="/dashboard/categories" method="POST">
                                        @csrf
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="bmd-label-floating">Category Name</label>
													<input type="text" class="form-control" name="name" value="{{ old('name') }}">

                                                    @error('name')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror

												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<button type="submit" class="btn btn-success">Create Category</button>
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
                                                
                                                @forelse ($categories as $category)
                                                    <tr>
                                                        <td>{{ $category->name }}</td>
                                                        <td>{{ $category->projects->count() }} Project</td>
                                                        <td>
                                                            <form action="/dashboard/categories/{{ $category->id }}" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger">Delete</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <td colspan="3">No Categories Found</td>
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
