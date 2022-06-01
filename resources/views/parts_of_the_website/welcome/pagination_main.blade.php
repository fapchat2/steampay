@foreach ($main as $element)

    <div>
        <div class="wrapper">
            <span class="game-name">{{$element->game_name}}</span>
            <div>
                <span class="discount">-{{$element->discount}}%</span>
                <span class="price"> <span class="strikethrough">{{$element->old_price}}$</span>{{$element->price}}$</span>        
            </div>
        </div>
    </div>


@endforeach

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





