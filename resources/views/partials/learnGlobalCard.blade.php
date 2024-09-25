<div class="col-sm-12 col-md-12 col-lg-4 mb-4">
    <div class="card border-radius-dmb h-100" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#modal-{{ $index }}">
        <img src="{{ asset('images/develop/' . $item['image']) }}" class="card-img-top" style="height: 200px; width: auto;" alt="{{ $item['title'] }}" loading="lazy">
        <div class="card-body d-flex flex-column">
            <h5 class="card-text fw-bolder text-co">{{ $item['title'] }}</h5>
        </div>
    </div>
</div>