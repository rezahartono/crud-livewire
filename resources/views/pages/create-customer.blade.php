@extends('template.main')

@push('styles')
@endpush

@section('main-content')
    <section id="content">
        <div class="container">
            <livewire:create-customer />
        </div>
    </section>
@endsection

