@extends('layouts.app')

<div class="container">
    <ul class="list-unstyled">
        @foreach($files as $file)
            <li>
                <div class="row">
                <div class="col-8">{{basename($file)}}</div>
                <div class="col-2">
                    <a href="{{url('delete', ['file' => basename($file)])}}">delete</a>
                </div>
                <div class="col-2">
                    <a href="{{url('download', ['file' => basename($file)])}}">download</a>
                </div>
                </div>
            </li>
        @endforeach
    </ul>

</div>
