@push('styles')
@endpush

<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <div class="row">
        <div class="col-12 py-3 d-flex justify-content-between align-items-center">
            <span class="fs-2 fw-semibold">Edit Customer</span>
        </div>
        <div class="col-12">
            <form wire:submit.prevent="store" method="post">
                @csrf
                @method('post')
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Customer :</label>
                    <input type="text" class="form-control" wire:model="name" id="name"
                        aria-describedby="customer-name">
                    @error('name')
                        <div id="customer-name" class="form-text text-danger error">{{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Nomor Telepon :</label>
                    <input type="text" maxlength="13" onkeypress="validate(event)" class="form-control"
                        wire:model="phone" id="phone" aria-describedby="customer-phone">
                    @error('phone')
                        <div id="customer-phone" class="form-text text-danger error">{{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="image">Image :</label>
                    <input type="file" wire:model="image" onchange="readURL(this)" class="form-control-file"
                        id="image">
                    @error('image')
                        <div id="customer-image" class="form-text text-danger error">{{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="image-area my-4 w-100">
                    <img id="image-result"
                        src="@if (str_contains($image, 'livewire-crud')) {{ $image }} @else {{ $image->temporaryUrl() }} @endif"
                        class="rounded shadow-sm d-block" height="150">
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        function validate(evt) {
            var theEvent = evt || window.event;

            // Handle paste
            if (theEvent.type === 'paste') {
                key = event.clipboardData.getData('text/plain');
            } else {
                // Handle key press
                var key = theEvent.keyCode || theEvent.which;
                key = String.fromCharCode(key);
            }
            var regex = /[0-9]|\./;
            if (!regex.test(key)) {
                theEvent.returnValue = false;
                if (theEvent.preventDefault) theEvent.preventDefault();
            }
        }
    </script>
@endpush
