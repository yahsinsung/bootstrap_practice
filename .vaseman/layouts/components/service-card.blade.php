<div class="card c-service-card h-img-hover mb-4">
    <div class="h-overflow-hidden">
        <img src="{{ $src }}" class="card-img-top img-fluid" alt="{{ $alt }}">
    </div>
    <div class="card-body p-4">
        <h5 class="card-title mb-3">
            <a href="#" class="text-secondary text-uppercase stretched-link">{{ $title }}</a>
        </h5>
        <p class="card-text mb-2">{{ $slot }}</p>
    </div>
</div>