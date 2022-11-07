<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <div class="modal fade" id="detail-customer-{{ $customer->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="detail-customer-label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="detail-customer-label">{{ $customer->name }}</h1>
                </div>
                <div class="modal-body">
                    <div class="image-area my-4 w-100">
                        <img id="image-result" src="{{ $customer->image }}" class="rounded mx-auto shadow-sm d-block"
                            height="150">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Customer :</label>
                        <input type="text" disabled class="form-control" value="{{ $customer->name }}" id="name"
                            aria-describedby="customer-name">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Nomor Telepon :</label>
                        <input type="text" disabled class="form-control" value="{{ $customer->phone }}"
                            id="phone" aria-describedby="customer-phone">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
