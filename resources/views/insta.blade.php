@extends('layouts.app')

@section('content')
<div class="container">
@foreach ($posts as $po)
<div class="row">
    <div class="col-6">
    <a href="/profiles/{{$po->user->id}}"><img src="/storage/{{$po->img}}" class="w-100"></a>
    </div>
    <div class="col-4">
        <div>
        <div class="d-flex align-items-center">
            <div class="pr-3">
            <img src="{{ $po->user->profile->image() }}" class="w-100" style="max-width : 60px;">
            </div>
            <div>
            <div class="font-weight-bold">
            <a href="/profiles/{{$po->user->id}}"><span class="text-dark">{{ $po->user->username }}</a></span>

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
<br>
<br>
<br>
@endforeach
<div class="row">
    <div class="col-12 d-flex">
        {{ $posts->links() }}
    </div>
</div>
</div>
</div>
@endsection
