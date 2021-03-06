@extends('layouts.admin')
@section('content')

<section class="articles">
    <div class="container">
        <div class="col-11 mx-auto bg-light shadow-sm border-0 card card-default">
            <div class="card-body">
                <a href="{{ route('/') }}"><< admin</a>
                <a href="{{ route('articles.main') }}"><< articles</a>
                <h2 class="text-center" style="margin-bottom: 15px;">Post Details</h2>
                <div class="form-group margin-top-40 col-md-6">
                    <label class="col-md-10" style="font-weight: bold;">State</label>
                    <p class="col-md-10">{{ $state->name }}</p>
                </div>
                <div class="form-group margin-top-40 col-md-6">
                    <label class="col-md-10" style="font-weight: bold;">Author</label>
                    <p class="col-md-10">{{ $author->name }}</p>
                </div>
                <div class="form-group margin-top-40 col-md-6">
                    <label class="col-md-10" style="font-weight: bold;">Category</label>
                    <p class="col-md-10">{{ $category->name }}</p>
                </div>

                <div class="form-group col-md-6">
                    <label class="col-md-10 margin-top-20" style="font-weight: bold;">Title</label>
                    <p class="col-md-10">{{ $article->title }}</p>
                </div>
                <div class="form-group col-md-6">
                    <label class="col-md-10 margin-top-20" style="font-weight: bold;">Image Alternative Text</label>
                    <p class="col-md-10">{{ $article->alt_image }}</p>
                </div>
                <div class="form-group col-md-6">
                    <label class="col-md-10 margin-top-20" style="font-weight: bold;">Picture</label>
                    <img class="margin-left-15" src="/image/{{ $article->image }}" height="100" width="150">
                </div>
                <div class="form-group col-md-6">
                    <label class="col-md-10 margin-top-20" style="font-weight: bold;">Summary</label>
                    <p class="col-md-10">{{ $article->summary }}</p>
                </div>
                <div class="form-group col-md-12">
                    <label class="col-md-10 margin-top-20" style="font-weight: bold;">Description</label>
                    <div class="col-md-12">
                        <textarea id="description" class="form-control" name="description" readonly>{{ old('description' , $article->description) }}</textarea>
                    </div>
                </div>
                <div class="clearfix"></div>
                <br><br><br>
                <div class="form-group col-sm-12 text-center btn-div">
                    <div>
                        <a href="{{ route('articles.main') }}" class="btn btn-primary btn-form">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </section>


@endsection