let searchOfGames = document.querySelector(".searchOfGames");
let myBuys = document.querySelector(".myBuys");
let searchOfGamesDiv = document.querySelector(".searchOfGamesDiv");
let catalogue = document.querySelector(".catalogue");
function searchOfGamesListener(params) {
    searchOfGamesDiv.innerHTML = `
<input type='search' class="searchOfGames" style="padding: 20px 1px;
    width: 300px;
    background:linear-gradient(to right, #ff4148, #ff793a);
    border:none">

<div class="searchOfGames searchbtn" style="    
    padding: 18px 1px;
    width: 100px;
    background:linear-gradient(to left, #ff4148, #ff793a);
    border: none;
    margin-left: -3px;">

    <svg onclick=""  xmlns="http://www.w3.org/2000/svg" width="26" height="26"
        fill="white" class="bi bi-x-lg cross" viewBox="0 0 16 16">
        <path fill-rule="evenodd"
            d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z" />
        <path fill-rule="evenodd"
            d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z" />
    </svg>
    <svg style="margin-left: 36px" xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="white"
        class="bi bi-search magnifierr" viewBox="0 0 16 16">
        <path
            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
    </svg>
</div>


`;
    document.querySelector(".cross").addEventListener("click", close);
    function close() {
        searchOfGamesDiv.innerHTML = `<button onclick="searchOfGamesListener()" class=" searchOfGames position-relative">
                  поиск игр
                  <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="black" class="bi bi-search magnifier" viewBox="0 0 16 16">
                      <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                  </svg>
                  </button>`;
    }
}

function dropdownToggleShow() {
    document.querySelector(".dropdown-content").classList.toggle("show");
}
catalogue.onclick = function (event) {
    dropdownToggleShow();
};

const newThings = document.querySelector(".sec0 .new-things a");
const bestseller = document.querySelector(".sec0 .bestseller a");
const lookedFor = document.querySelector(".sec0 .looked-for a");

const newThingsContent = document.querySelector(".sec0 .new-things-content");
const bestsellerContent = document.querySelector(".sec0 .bestseller-content");
const lookedForContent = document.querySelector(".sec0 .looked-for-content");

newThings.onclick = () => {
    
    newThingsContent.style.display = "inherit";
    bestsellerContent.style.display = "none";
    lookedForContent.style.display = "none";

    newThings.classList.add("active");
    bestseller.classList.remove("active");
    lookedFor.classList.remove("active");

    newThings.style.borderBottom = "4px solid #ff793a";
    bestseller.style.borderBottom = "0px solid #ff793a";
    lookedFor.style.borderBottom = "0px solid #ff793a";
};
bestseller.onclick = () => {
    newThingsContent.style.display = "none";
    bestsellerContent.style.display = "inherit";
    lookedForContent.style.display = "none";

    bestseller.classList.add("active");
    newThings.classList.remove("active");
    lookedFor.classList.remove("active");

    bestseller.style.borderBottom = "4px solid #ff793a";
    lookedFor.style.borderBottom = "0px solid #ff793a";
    newThings.style.borderBottom = "0px solid #ff793a";
};
lookedFor.onclick = () => {
    newThingsContent.style.display = "none";
    bestsellerContent.style.display = "none";
    lookedForContent.style.display = "inherit";

    lookedFor.classList.add("active");
    newThings.classList.remove("active");
    bestseller.classList.remove("active");

    lookedFor.style.borderBottom = "4px solid #ff793a";
    newThings.style.borderBottom = "0px solid #ff793a";
    bestseller.style.borderBottom = "0px solid #ff793a";
};

$("main .slider").slick({
    arrows: false,
    dots: true,
});

$("main .left").click(function () {
    $("main .slider").slick("slickPrev");
});

$("main .right").click(function () {
    $("main .slider").slick("slickNext");
});


// $("section.discounts .slider").slick({
//     arrows: false,
// });

// $("section.discounts .left").click(function () {
//     $("section.discounts .slider").slick("slickPrev");
// });

// $("section.discounts .right").click(function () {
//     $("section.discounts .slider").slick("slickNext");
// });

let arrowLeft = document.querySelector("main .left img");
let arrowRight = document.querySelector("main .right img");











const all = document.querySelector('.popular [data-val="all"]');
const r100 = document.querySelector('.popular [data-val="100"]');
const r300 = document.querySelector('.popular [data-val="300"]');
const r700 = document.querySelector('.popular [data-val="700"]');
const r900 = document.querySelector('.popular [data-val="900"]');

const allContent = document.querySelector('.popular .content-all');
const r100Content = document.querySelector('.popular .content-100');
const r300Content = document.querySelector('.popular .content-300');
const r700Content = document.querySelector('.popular .content-700');
const r900Content = document.querySelector('.popular .content-900');

all.onclick = () => {
    
    allContent.style.display = "grid";
    r100Content.style.display = "none";
    r300Content.style.display = "none";
    r700Content.style.display = "none";
    r900Content.style.display = "none";
};

r100.onclick = () => {
    
    allContent.style.display = "none";
    r100Content.style.display = "grid";
    r300Content.style.display = "none";
    r700Content.style.display = "none";
    r900Content.style.display = "none";
};

r300.onclick = () => {
    
    allContent.style.display = "none";
    r100Content.style.display = "none";
    r300Content.style.display = "grid";
    r700Content.style.display = "none";
    r900Content.style.display = "none";
};

r700.onclick = () => {
    
    allContent.style.display = "none";
    r100Content.style.display = "none";
    r300Content.style.display = "none";
    r700Content.style.display = "grid";
    r900Content.style.display = "none";

};

r900.onclick = () => {
    
    allContent.style.display = "none";
    r100Content.style.display = "none";
    r300Content.style.display = "none";
    r700Content.style.display = "none";
    r900Content.style.display = "grid";
};








if (window.matchMedia("(max-width: 1625px)").matches) {
    arrowLeft.src = "https://steampay.com/img/svg/slider-left-mini.svg";
    arrowRight.src = "https://steampay.com/img/svg/slider-right-mini.svg";
} else {
    arrowLeft.src = "https://steampay.com/img/svg/slider-left.svg";
    arrowRight.src = "https://steampay.com/img/svg/slider-right.svg";
}


window.addEventListener("resize", function () {
if (window.matchMedia("(max-width: 1625px)").matches) {
    arrowLeft.src = "https://steampay.com/img/svg/slider-left-mini.svg";
    arrowRight.src = "https://steampay.com/img/svg/slider-right-mini.svg";
} else {
    arrowLeft.src = "https://steampay.com/img/svg/slider-left.svg";
    arrowRight.src = "https://steampay.com/img/svg/slider-right.svg";
}
});

 