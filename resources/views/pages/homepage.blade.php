@extends('template.main')

@push('styles')
@endpush

@section('main-content')
    <section id="content">
        <div class="container">
            <livewire:show-customer />
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        /*  ==========================================
            SHOW UPLOADED IMAGE
        * ========================================== */
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#imageResult')
                        .attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endpush
