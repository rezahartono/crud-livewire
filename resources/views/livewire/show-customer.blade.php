<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="row">
        <div class="col-12 py-3 d-flex justify-content-between align-items-center">
            <span class="fs-2 fw-semibold">Show Customer</span>
            <a href="/create-customer" class="btn btn-primary"><i class="fa-solid fa-plus text-white me-2"></i>Add
                Customer</a>
        </div>
        <div class="col-12">
            <div class="row">
                <div class="col-12 d-flex justify-content-between align-items-center">
                    <div class="filters-section d-flex align-items-center">
                        <span class="text-secondary fs-6">Filter : </span>
                        <div class="btn-group ms-3">
                            <select class="form-select" id="filter_select" aria-label="filter_select">
                                <option value="title" selected>Judul</option>
                                <option value="created_at">Tanggal</option>
                            </select>
                        </div>
                        <div class="btn-group mx-3">
                            <select onchange="" class="form-select" id="sorting_select" aria-label="sorting_select">
                                <option value="asc" selected>ASC</option>
                                <option value="desc">DESC</option>
                            </select>
                        </div>
                    </div>
                    <div class="search-section">
                        <div class="input-group">
                            <input wire:model="search" type="search" class="form-control" placeholder="Search...">
                            <span class="input-group-text" id="search"><i
                                    class="fa-sharp fa-solid fa-magnifying-glass"></i></span>
                        </div>
                    </div>
                </div>
                <hr class="divider mt-3">
            </div>
        </div>
        <div class="col-12">
            <div class="row">
                @foreach ($customers as $customer)
                    <div class="col-2">
                        <div class="card w-100 rounded rounded-4">
                            <img src="@if ($customer->image != '') {{ $customer->image }} @else https://upload.wikimedia.org/wikipedia/commons/9/9a/Gull_portrait_ca_usa.jpg @endif"
                                class="card-img-top rounded rounded-bottom rounded-4" height="200" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $customer->name }}</h5>
                                <div class="d-flex justify-content-around align-items-center mt-3">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#detail-customer-{{ $customer->id }}"><i
                                            class="fa-solid fa-eye"></i></button>
                                    <a href="/edit-customer/{{ $customer->id }}" class="btn btn-success"><i
                                            class="fa-solid fa-pen-to-square"></i></a>
                                    <button type="button" wire:click="deleteCustomer({{ $customer->id }})"
                                        class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        @foreach ($customers as $customer)
            <livewire:detail-customer :customer="$customer" />
        @endforeach
        {{-- <div class="col-12">
            <div id="divLoadMore" class="col-12 mt-4 d-flex justify-content-center align-items-center">
                <button id="moreBtn" type="button" class="btn btn-lg btn-outline-primary">Show More <i
                        class="fa-solid fa-angle-down"></i></button>
                <button id="loadingBtn" type="button" class="btn btn-lg btn-outline-primary d-none">
                    <div class="spinner-border spinner-border-sm text-primary" role="status">
                    </div>
                    <span>Loading...</span>
                </button>
            </div>
        </div> --}}
    </div>
</div>

@push('scripts')
    {{-- <script>
        function emit() {
            Livewire.emit('emitData')
        }
    </script> --}}
@endpush
