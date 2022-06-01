    @foreach ($discounts as $discount)
    <div class="slide">
        <a href="javascript://">
            <img src="{{ $discount->image_address }}" alt="">
            <h2 class="name"> {{ $discount->name }}</h2>
            <div class="right">
                <div class="discount m-auto">-{{ $discount->discount }}%</div>
                <div class="price">{{ $discount->price }}$</div>
            </div>
        </a>
    </div>
    @endforeach





    