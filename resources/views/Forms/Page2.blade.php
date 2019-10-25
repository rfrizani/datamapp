@extends('layouts.app')

@section('content')
<div class="container">
    <form method="post" action="{{ route('questoes2') }}">
        @csrf
        @include('questoes/Page2')
    </form>
</div>
@endsection
