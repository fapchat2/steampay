const products = document.querySelector('[href="#support/products"]');
const payments = document.querySelector('[href="#support/payments"]');
const problems = document.querySelector('[href="#support/problems"]');
const another = document.querySelector('[href="#support/another"]');

const productsContent = document.querySelector(".products-content");
const paymentsContent = document.querySelector(".payments-content");
const problemsContent = document.querySelector(".problems-content");
const anotherContent = document.querySelector(".another-content");

products.onclick = () => {
    productsContent.style.display = "block";
    paymentsContent.style.display = "none";
    problemsContent.style.display = "none";
    anotherContent.style.display = "none";
};
payments.onclick = () => {
    productsContent.style.display = "none";
    paymentsContent.style.display = "block";
    problemsContent.style.display = "none";
    anotherContent.style.display = "none";
};
problems.onclick = () => {
    productsContent.style.display = "none";
    paymentsContent.style.display = "none";
    problemsContent.style.display = "block";
    anotherContent.style.display = "none";
};

another.onclick = () => {
    productsContent.style.display = "none";
    paymentsContent.style.display = "none";
    problemsContent.style.display = "none";
    anotherContent.style.display = "block";
};


 

$(function () {
    $(".info .li h4").click(function() {
        $(".info .contents p").slideToggle(300);
    });
})
 

let questions_button = document.querySelector(".questions button");

questions_button.onclick = function (params) {
    questions_button.remove();
    $("form").slideToggle(300);
}
 