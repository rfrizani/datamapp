@extends('layouts.app')

@section('content')
<div class="container">
    <form method="post" action="{{ route('questoes6') }}">
        @csrf
        @include('questoes/Page6')
    </form>
</div>
@endsection
