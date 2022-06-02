 

 

let searchOfGames = document.querySelector(".searchOfGames");
let myBuys = document.querySelector(".myBuys");
let searchOfGamesDiv = document.querySelector(".searchOfGamesDiv");
let catalogue = document.querySelector("header .catalogue");
let dropdownContent = document.querySelector(".dropdown-content");

catalogue.onclick = function (event) {
    
    if ($(".dropdown-content").css("display") == "none"){
        $(".dropdown-content").fadeIn();
        catalogue.innerHTML = '<div class="cross_wrapper" style="position: relative; z-index: 23; background: linear-gradient(90deg,#ff4148 0,#ff793a); padding: 11px 50px"><svg class="cross" xmlns="http://www.w3.org/2000/svg" width="42" height="42" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">   <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/> </svg></div>';
    } 
    else 
    {
        $(".dropdown-content").fadeOut();
        catalogue.innerHTML = 'каталог продукции <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-caret-down-fill float-right" viewBox="0 0 16 16"><path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" /></svg>';
    }    

    $(".dropdown-content .container-fluid").slideToggle(600);
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


 
let arrowLeft = document.querySelector("main .left img");
let arrowRight = document.querySelector("main .right img");

const all = document.querySelector('.popular [data-val="all"]');
const r100 = document.querySelector('.popular [data-val="100"]');
const r300 = document.querySelector('.popular [data-val="300"]');
const r700 = document.querySelector('.popular [data-val="700"]');
const r900 = document.querySelector('.popular [data-val="900"]');

const allContent = document.querySelector(".popular .content-all");
const r100Content = document.querySelector(".popular .content-100");
const r300Content = document.querySelector(".popular .content-300");
const r700Content = document.querySelector(".popular .content-700");
const r900Content = document.querySelector(".popular .content-900");

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


document.querySelector('header [href="#$"]').onclick = function () {
            document.querySelector('header [href="#currency"]').textContent = "$";
}
document.querySelector('header [href="#€"]').onclick = function () {
    document.querySelector('header [href="#currency"]').textContent = "€";
}
document.querySelector('header [href="#₽"]').onclick = function () {
    document.querySelector('header [href="#currency"]').textContent = "₽";
}
