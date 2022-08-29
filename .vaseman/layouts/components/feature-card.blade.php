<div class="c-feature-card d-flex position-relative mb-4 mg-lg-0">
    <i class="{{ $icon }} text-secondary fs-1 pe-4"></i>
    <div class="l-feature__content">
        <h4>{{ $title }}</h4>
        <p class="mb-0">{{ $slot }}</p>
        <a class="btn btn-link fw-bold ps-0 text-dark stretched-link" href="{{ $href }}"
            role="button">{{ $btn }}
            <i class="fa-regular fa-arrow-right-long ps-2"></i>
        </a>
    </div>
</div>