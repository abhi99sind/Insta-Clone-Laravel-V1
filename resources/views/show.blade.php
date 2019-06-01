@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
    <div class="col-8">
        <img src="/storage/{{$po->img}}" class="w-100">
    </div>
    <div class="col-4">
        <div>
        <div class="d-flex align-items-center">
            <div class="pr-3">
            <img src="/storage/{{ $po->user->profile->image() }}" class="w-100" style="max-width : 60px;">
            </div>
            <div>
            <div class="font-weight-bold">
            <a href="/profiles/{{$po->user->id}}"><span class="text-dark">{{ $po->user->username }}</a></span>
            <a href="#">Follow</a>
            </div>
            </div>
        </div>
        <hr>
        <p><div class="font-weight-bold">
                <span class="text-dark"> <a href="/profiles/{{$po->user->id}}">{{ $po->user->username }}</a></span>
                </div>{{$po->caption}}</p>
        </div>
    </div>
</div>
</div>
@endsection
