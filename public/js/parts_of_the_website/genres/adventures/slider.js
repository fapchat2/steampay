var slider = document.getElementById('slider');

noUiSlider.create(slider, {
    start: [20, 80],
    connect: true,
    range: {
        'min': 0,
        'max': 100
    }
});

let inputs = document.querySelectorAll(".price input");

inputs[0].value = "от " + slider.noUiSlider.get()[0];
inputs[1].value = "до " + slider.noUiSlider.get()[1];

slider.onmousemove = function (params) {
    inputs[0].value = "от " + slider.noUiSlider.get()[0];
    inputs[1].value = "до " + slider.noUiSlider.get()[1];
}

