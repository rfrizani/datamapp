@extends('layouts.app')

@section('content')
<div class="container">
    <form method="post" action="{{ route('questoes5') }}">
        @csrf
        @include('questoes/Page5')
    </form>
</div>
@endsection
