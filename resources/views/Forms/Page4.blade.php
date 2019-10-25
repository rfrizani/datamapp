@extends('layouts.app')

@section('content')
<div class="container">
    <form method="post" action="{{ route('questoes4') }}">
        @csrf
        @include('questoes/Page4')
    </form>
</div>
@endsection
