@extends('layouts.app')

@section('content')
<div class="container">
    <form method="post" action="{{ route('questoes3') }}">
        @csrf
        @include('questoes/Page3')
    </form>
</div>
@endsection
