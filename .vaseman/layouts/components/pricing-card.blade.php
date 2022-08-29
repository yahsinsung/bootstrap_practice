<div class="card c-pricing-card h-100 px-4 py-5 mb-4 mb-lg-0 border-0 shadow {{ $position ?? '' }}">
    <div class="card-body">
        <h5 class="card-title">{{ $title }}</h5>
        <div class="card-text d-flex align-items-end mb-5">
            <div class="c-price d-flex align-text-top pe-1">
                <span class="h4 text-primary me-1 pt-2">$</span>
                <span class="h1 text-primary">{{ $price }}</span>
            </div>
            <p>/ month</p>
        </div>
        <ul class="ps-0 mb-5 text-black-50">
            <li class="d-flex align-items-center mb-3">
                <i class="fa-solid fa-check text-success pe-3"></i>
                <span>{{ $list1 }}</span>
            </li>
            <li class="d-flex align-items-center mb-3">
                <i class="fa-solid fa-check text-success pe-3"></i>
                <span>{{ $list2 }}</span>
            </li>
            <li class="d-flex align-items-center mb-3">
                <i class="fa-solid fa-check text-success pe-3"></i>
                <span>{{ $list3 }}</span>
            </li>
            <li class="d-flex align-items-center mb-3">
                <i class="fa-solid fa-xmark text-success pe-3"></i>
                <span class="text-decoration-line-through">{{ $list4 }}</span>
            </li>
            <li class="d-flex align-items-center mb-3">
                <i class="fa-solid fa-xmark text-success pe-3"></i>
                <span class="text-decoration-line-through">{{ $list5 }}</span>
            </li>
        </ul>  
        <a href="#" class="btn {{ $btn_style ?? 'btn-outline-primary' }} btn-lg">{{ $btn }}</a>
    </div>
</div>