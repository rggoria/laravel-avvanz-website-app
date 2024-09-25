<div class="row g-3">
    @foreach($blogItems as $item)
        <div class="col-sm-12 col-md-12 col-lg-4 mb-4">
            <a href="{{ $item['link'] }}" class="text-decoration-none">
                <div class="card border-radius-dmb h-100">
                    <img src="{{ asset('images/resources/' . $item['image']) }}" class="card-img-top" alt="{{ $item['title'] }}" style="height: 200px; width: auto;" loading="lazy">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bolder text-dmb">{{ $item['title'] }}</h5>
                        <p class="card-text fw-bolder text-marigold">Read More »</p>                  
                    </div>
                    <div class="card-footer bg-transparent text-muted">{{ $item['created_at'] }}</div>
                </div>
            </a>
        </div>
    @endforeach
</div>

<nav>
    <ul class="pagination pagination-lg justify-content-center">
        @for ($i = 1; $i <= $blogItems->lastPage(); $i++)
            <li class="page-item {{ $i == $blogItems->currentPage() ? 'active' : '' }}">
                <a class="page-link" href="#" data-page="{{ $i }}">{{ $i }}</a>
            </li>
        @endfor
    </ul>
</nav>