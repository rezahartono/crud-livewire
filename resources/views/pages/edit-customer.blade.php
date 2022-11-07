@extends('template.main')

@push('styles')
@endpush

@section('main-content')
    <section id="content">
        <div class="container">
            <livewire:edit-customer :id="$id" />
        </div>
    </section>
@endsection
