@extends('layouts.admin')
@section('content')

<section class="articles">
    <div class="container">
        <div class="col-11 mx-auto bg-light shadow-sm border-0 card card-default">
            <div class="card-body">
                <a href="{{ route('/') }}"><< admin</a>
                <a href="{{ route('articles.main') }}"><< articles</a>
                    <h2 class="text-center" style="margin-bottom: 15px;">Edit Post</h2>
                    <form id="form-article" class="form-horizontal" role="form" method="POST" action="{{ route('articles.update', $article->id) }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ $article->id }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <fieldset>
                            <legend>Post Details</legend>
                            @if(Auth::user()->role_id == 1)
                            <div class="form-group">
                                <label for="state_id" class="col-md-4 control-label">Status*</label>
                                <div class="col-md-6">
                                    <select id="state_id" name="state_id" class="form-control capitalize">
                                        @foreach ($states as $state)
                                            <option value="{{ $state->id }}" @if($article->state_id == $state->id) selected="selected" @endif>{{ $state->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            @endif
                            <div class="form-group">
                                <label for="author_id" class="col-md-4 control-label">Authors*</label>
                                <div class="col-md-6">
                                    <select id="author_id" name="author_id" class="form-control capitalize">
                                        @foreach ($authors as $author)
                                            <option value="{{ $author->id }}" @if($article->author_id == $author->id) selected="selected" @endif>{{ $author->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                <label for="title" class="col-md-4 control-label">Title*</label>
                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control" name="title" value="{{ old('title', $article->title) }}" required>
                                    @if ($errors->has('title'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('title') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                    <label for="category_id" class="col-md-4 control-label">Categories*</label>
                                    <div class="col-md-6">
                                        <select id="category_id" name="category_id" class="form-control capitalize">
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}" @if($article->category_id == $category->id) selected="selected" @endif>{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            <div class="form-group{{ $errors->has('alt_image') ? ' has-error' : '' }}">
                                <label for="alt_image" class="col-md-6 control-label">Image Alternative Text</label>
                                <div class="col-md-6">
                                    <input id="alt_image" type="text" class="form-control" name="alt_image" value="{{ old('alt_image', $article->alt_image) }}" required>
                                    @if ($errors->has('alt_image'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('alt_image') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="image" class="col-md-4 control-label">Picture</label>
                                <div class="col-md-6">
                                    <input id="image" type="file" accept=".png, .jpg, .jpeg" class="form-control" name="image">
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('summary') ? ' has-error' : '' }}">
                                <label for="summary" class="col-md-4 control-label">Description*</label>
                                <div class="col-md-6">
                                    <input id="summary" type="text" class="form-control" name="summary" value="{{ old('summary', $article->summary) }}" required>
                                    @if ($errors->has('summary'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('summary') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }} col-12">
                                <label for="description" class="col-md-4 control-label">Body*</label>
                                <textarea id="description" class="form-control p-3" name="description" required>{{ old('description' , $article->description) }}</textarea>
                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </fieldset>
                        <div class="form-group text-center btn-div">
                            <div class="col-sm-12 text-center">
                                <button type="submit" class="btn btn-primary btn-form">Save</button>
                                <a href="{{ route('articles.main') }}" class="btn btn-danger btn-form">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


      @endsection

