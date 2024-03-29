@extends('dashboard.layouts.main')
@section('content')
<form method="POST" action="/dashboard/tags/{{ $tag->slug }}" class="mb-5" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">
                            <p class="mb-0">Add Tag</p>
                            <button class="btn btn-primary btn-sm ms-auto" type="submit">Save</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="text-uppercase text-sm">Tag Information</p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Tag Name</label>
                                    <input class="form-control" type="text" name="name" id="name" value="{{old('name',$tag->name)}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Slug</label>
                                    <input class="form-control" type="text" name="slug" id="slug" value="{{old('slug',$tag->slug)}}">
                                </div>
                            </div>                            
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection