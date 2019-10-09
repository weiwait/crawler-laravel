@extends('layouts.app')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Fiction crawler</div>

                <div class="card-body">
                    <form action="/crawling" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="input-url"></label>
                            <input type="text" id="input-url" class="form-control" placeholder="章节地址" name="url" value="{{old('url')}}">
                        </div>
                        <div class="form-group">
                            <label for="input-name"></label>
                            <input type="text" id="input-name" class="form-control" placeholder="名称" name="name" value="{{old('name')}}">
                        </div>
                        <button type="submit" class="btn btn-danger">Crawling</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
