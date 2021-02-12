@extends('kompo::app', [
    'bodyClass' => 'antialiased' //Jetstream default
])

@push('header')

    @livewireStyles

@endpush

@section('content')
    {{ $slot }}
@endsection

@push('scripts')

    @livewireScripts
    <script src="https://cdn.jsdelivr.net/gh/livewire/vue@v0.3.x/dist/livewire-vue.js"></script>

@endpush