@extends('layouts.app')

@section('content')
<div class="container">
    <form method="post" action="{{ route('questoes') }}">
        @csrf
        @include('questoes/Page1')
    </form>
</div>
@endsection
