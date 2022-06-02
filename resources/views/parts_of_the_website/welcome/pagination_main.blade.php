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


