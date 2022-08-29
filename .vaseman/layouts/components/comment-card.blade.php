<div class="c-comment-card carousel-item text-center active">
    <img src="{{ $src }}" class="comment-avatar rounded-circle mb-3" alt="{{ $alt }}">
    <h5 class="text-white mb-0">{{ $title }}</h5>
    <p class="subtitle text-white mb-3">{{ $subtitle }}</p>
    <div class="ranking text-warning d-flex justify-content-center mb-3">
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
    </div>
    <i class="c-comment-foreword position-relative text-white">{{ $slot }}</i>
</div>