<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0.12/dist/fancybox.css" />

</head>

<body>

    <header>
        <div class="headerDiv m-auto">
            <a href="javascript://" class="steampay m-auto">
                <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" fill="black"
                    class="bi bi-controller ms-5 " viewBox="0 0 16 16">
                    <path
                        d="M11.5 6.027a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-1.5 1.5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm2.5-.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-1.5 1.5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm-6.5-3h1v1h1v1h-1v1h-1v-1h-1v-1h1v-1z" />
                    <path
                        d="M3.051 3.26a.5.5 0 0 1 .354-.613l1.932-.518a.5.5 0 0 1 .62.39c.655-.079 1.35-.117 2.043-.117.72 0 1.443.041 2.12.126a.5.5 0 0 1 .622-.399l1.932.518a.5.5 0 0 1 .306.729c.14.09.266.19.373.297.408.408.78 1.05 1.095 1.772.32.733.599 1.591.805 2.466.206.875.34 1.78.364 2.606.024.816-.059 1.602-.328 2.21a1.42 1.42 0 0 1-1.445.83c-.636-.067-1.115-.394-1.513-.773-.245-.232-.496-.526-.739-.808-.126-.148-.25-.292-.368-.423-.728-.804-1.597-1.527-3.224-1.527-1.627 0-2.496.723-3.224 1.527-.119.131-.242.275-.368.423-.243.282-.494.575-.739.808-.398.38-.877.706-1.513.773a1.42 1.42 0 0 1-1.445-.83c-.27-.608-.352-1.395-.329-2.21.024-.826.16-1.73.365-2.606.206-.875.486-1.733.805-2.466.315-.722.687-1.364 1.094-1.772a2.34 2.34 0 0 1 .433-.335.504.504 0 0 1-.028-.079zm2.036.412c-.877.185-1.469.443-1.733.708-.276.276-.587.783-.885 1.465a13.748 13.748 0 0 0-.748 2.295 12.351 12.351 0 0 0-.339 2.406c-.022.755.062 1.368.243 1.776a.42.42 0 0 0 .426.24c.327-.034.61-.199.929-.502.212-.202.4-.423.615-.674.133-.156.276-.323.44-.504C4.861 9.969 5.978 9.027 8 9.027s3.139.942 3.965 1.855c.164.181.307.348.44.504.214.251.403.472.615.674.318.303.601.468.929.503a.42.42 0 0 0 .426-.241c.18-.408.265-1.02.243-1.776a12.354 12.354 0 0 0-.339-2.406 13.753 13.753 0 0 0-.748-2.295c-.298-.682-.61-1.19-.885-1.465-.264-.265-.856-.523-1.733-.708-.85-.179-1.877-.27-2.913-.27-1.036 0-2.063.091-2.913.27z" />
                </svg>
                steampay
            </a>


            <div class="dropdown">

                <svg id="dropdownMenuLink" data-bs-toggle="dropdown" xmlns="http://www.w3.org/2000/svg" width="42"
                    height="42" fill="black" class="bi bi-list m-auto list" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                </svg>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="javascript://">Действие</a></li>
                    <li><a class="dropdown-item" href="javascript://">Другое действие</a></li>
                    <li><a class="dropdown-item" href="javascript://">Что-то еще здесь</a></li>
                </ul>
            </div>


            <a class=" m-auto catalogue" data-toggle="dropdown" href="#catalogue">
                каталог продукции
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black"
                    class="bi bi-caret-down-fill float-right" viewBox="0 0 16 16">
                    <path
                        d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                </svg>
            </a>

            <a class="support m-auto" href="javascript://">поддержка</a>
            <a class=" m-auto myBuys" href="javascript://">мои покупки</a>
            <div class="position-relative searchOfGamesDiv">
                <button class=" searchOfGames position-relative" onclick="searchOfGamesListener()">
                    поиск игр
                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="#f92509"
                        class="bi bi-search magnifier" viewBox="0 0 16 16">
                        <path
                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg>
                </button>
            </div>

            <a id="dropdownCurrencyLink" data-bs-toggle="dropdown" class="m-auto currency" href="#currencies">$ <svg
                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black"
                    class="bi bi-caret-down-fill float-right" viewBox="0 0 16 16">
                    <path
                        d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                </svg></a>
            <ul class="dropdown-menu" aria-labelledby="dropdownCurrencyLink">
                <li><a class="dropdown-item" href="javascript://">Действие</a></li>
                <li><a class="dropdown-item" href="javascript://">Другое действие</a></li>
                <li><a class="dropdown-item" href="javascript://">Что-то еще здесь</a></li>
            </ul>

 

            <div id="open-button" class="">
                <a href="#trash_can" class=" m-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" fill="currentColor"
                        class="bi bi-trash" viewBox="0 0 16 16">
                        <path
                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                        <path fill-rule="evenodd"
                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                    </svg>
                </a>
                <div id="opencontent" class="open-content column">
                    <div class="wrapperDiv">

                        <p class="game">game <span><strong class="game-money">8$</strong> <svg onclick=""
                                    xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="black"
                                    class="bi bi-x-lg cross" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z" />
                                    <path fill-rule="evenodd"
                                        d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z" />
                                </svg></span></p>
                        <p class="result">Итого: <strong class="result-money">18$</strong></p>
                        <button>Оформить заказ</button>
                    </div>
                </div>

            </div>




        </div>


    </header>


    {{-- dropdown --}}

    <div class="dropdown-content">
        <div class="">
            <h2>Mega Menu</h2>
        </div>
        <div class="row">
            <div class="column">
                <h3>Category 1</h3>
                <a href="javascript://">Link 1</a>
                <a href="javascript://">Link 2</a>
                <a href="javascript://">Link 3</a>
            </div>
            <div class="column">
                <h3>Category 2</h3>
                <a href="javascript://">Link 1</a>
                <a href="javascript://">Link 2</a>
                <a href="javascript://">Link 3</a>
            </div>
            <div class="column">
                <h3>Category 3</h3>
                <a href="javascript://">Link 1</a>
                <a href="javascript://">Link 2</a>
                <a href="javascript://">Link 3</a>
            </div>
        </div>
    </div>


    <main>





        <div class="slider">
            <div class="slide">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="slide">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="slide">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>

        <div class='arrows'>
            <div class="arrow left">
                <img src="" alt="">
            </div>
            <div class="arrow right">
                <img src="" alt="">
            </div>
        </div>

    </main>

    <div class="wrapper">
        <section class="sec0">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="new-things">
                                <a class="nav-link" href="javascript://">Новинки</a>
                            </li>
                            <li class="bestseller">
                                <a class="nav-link" href="javascript://">Топ продаж</a>
                            </li>
                            <li class="looked-for">
                                <a class="nav-link" href="javascript://">Ожидаемые</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>


            <article class="new-things-content">
                <a href="javascript://">
                    <img src="https://steampay.com/image/madden-nfl-22.jpg?1635404176" alt="">
                    <div class="game">
                        <h2 class="name">FIFA 2022</h2>
                        <div class="genre m-auto">Simulator, sport, casual, ...</div>
                    </div>
                    <div class="discount m-auto">-97%</div>
                    <div class="price">1$</div>
                </a>
                <a href="javascript://">
                    <img src="https://steampay.com/image/madden-nfl-22.jpg?1635404176" alt="">
                    <div class="game">
                        <h2 class="name">FIFA 2022</h2>
                        <div class="genre m-auto">Simulator, sport, casual, ...</div>
                    </div>
                    <div class="discount m-auto">-97%</div>
                    <div class="price">1$</div>
                </a>
                <a href="javascript://">
                    <img src="https://steampay.com/image/madden-nfl-22.jpg?1635404176" alt="">
                    <div class="game">
                        <h2 class="name">FIFA 2022</h2>
                        <div class="genre m-auto">Simulator, sport, casual, ...</div>
                    </div>
                    <div class="discount m-auto">-97%</div>
                    <div class="price">1$</div>
                </a>
                <a href="javascript://">
                    <img src="https://steampay.com/image/madden-nfl-22.jpg?1635404176" alt="">
                    <div class="game">
                        <h2 class="name">FIFA 2022</h2>
                        <div class="genre m-auto">Simulator, sport, casual, ...</div>
                    </div>
                    <div class="discount m-auto">-97%</div>
                    <div class="price">1$</div>
                </a>
                <a href="javascript://">
                    <img src="https://steampay.com/image/madden-nfl-22.jpg?1635404176" alt="">
                    <div class="game">
                        <h2 class="name">FIFA 2022</h2>
                        <div class="genre m-auto">Simulator, sport, casual, ...</div>
                    </div>
                    <div class="discount m-auto">-97%</div>
                    <div class="price">1$</div>
                </a>
                <a href="javascript://">
                    <img src="https://steampay.com/image/madden-nfl-22.jpg?1635404176" alt="">
                    <div class="game">
                        <h2 class="name">FIFA 2022</h2>
                        <div class="genre m-auto">Simulator, sport, casual, ...</div>
                    </div>
                    <div class="discount m-auto">-97%</div>
                    <div class="price">1$</div>
                </a>
                <a href="javascript://">
                    <img src="https://steampay.com/image/madden-nfl-22.jpg?1635404176" alt="">
                    <div class="game">
                        <h2 class="name">FIFA 2022</h2>
                        <div class="genre m-auto">Simulator, sport, casual, ...</div>
                    </div>
                    <div class="discount m-auto">-97%</div>
                    <div class="price">1$</div>
                </a>
                <a href="javascript://">
                    <img src="https://steampay.com/image/madden-nfl-22.jpg?1635404176" alt="">
                    <div class="game">
                        <h2 class="name">FIFA 2022</h2>
                        <div class="genre m-auto">Simulator, sport, casual, ...</div>
                    </div>
                    <div class="discount m-auto">-97%</div>
                    <div class="price">1$</div>
                </a>


            </article>
            <article class="bestseller-content">
                <a href="javascript://">
                    <img src="https://steampay.com/image/madden-nfl-22.jpg?1635404176" alt="">
                    <div class="game">
                        <h2 class="name">Maden NFL 22</h2>
                        <div class="genre m-auto">Simulator, sport, casual, ...</div>
                    </div>
                    <div class="discount m-auto">-97%</div>
                    <div class="price">1$</div>
                </a>
                <a href="javascript://">
                    <img src="https://steampay.com/image/madden-nfl-22.jpg?1635404176" alt="">
                    <div class="game">
                        <h2 class="name">FIFA 2022</h2>
                        <div class="genre m-auto">Simulator, sport, casual, ...</div>
                    </div>
                    <div class="discount m-auto">-97%</div>
                    <div class="price">1$</div>
                </a>
                <a href="javascript://">
                    <img src="https://steampay.com/image/madden-nfl-22.jpg?1635404176" alt="">
                    <div class="game">
                        <h2 class="name">FIFA 2022</h2>
                        <div class="genre m-auto">Simulator, sport, casual, ...</div>
                    </div>
                    <div class="discount m-auto">-97%</div>
                    <div class="price">1$</div>
                </a>
            </article>
            <article class="looked-for-content">
                <a href="javascript://">
                    <img src="https://steampay.com/image/madden-nfl-22.jpg?1635404176" alt="">
                    <div class="game">
                        <h2 class="name">UFC 21</h2>
                        <div class="genre m-auto">Simulator, sport, casual, ...</div>
                    </div>
                    <div class="discount m-auto">-97%</div>
                    <div class="price">1$</div>
                </a>
                <a href="javascript://">
                    <img src="https://steampay.com/image/madden-nfl-22.jpg?1635404176" alt="">
                    <div class="game">
                        <h2 class="name">FIFA 2022</h2>
                        <div class="genre m-auto">Simulator, sport, casual, ...</div>
                    </div>
                    <div class="discount m-auto">-97%</div>
                    <div class="price">1$</div>
                </a>
                <a href="javascript://">
                    <img src="https://steampay.com/image/madden-nfl-22.jpg?1635404176" alt="">
                    <div class="game">
                        <h2 class="name">FIFA 2022</h2>
                        <div class="genre m-auto">Simulator, sport, casual, ...</div>
                    </div>
                    <div class="discount m-auto">-97%</div>
                    <div class="price">1$</div>
                </a>
            </article>

            <a href="#more-games-content" class="more">ещё 1486 игр <svg xmlns="http://www.w3.org/2000/svg"
                    width="12" height="12" fill="#ff793a" class="bi bi-caret-down-fill float-right"
                    viewBox="0 0 16 16">
                    <path
                        d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                </svg></a>
        </section>

        <div class="inner-wrapper">

            <section class="discounts">

                <div class="grid">

                    <div>
                        <span class="aside-block">от 40%</span>
                        <h1 class="discounts">Скидки</h1>
                    </div>

                        {!! $discounts->links('vendor.pagination.small-arrows') !!}
                </div>


                <article class="">
                    <div class="slider">
                        @include('pagination_discounts')
                    </div>


                    <div class="more-games">
                        <a href="#more-games-content" class="more">ещё 1486 игр <svg
                                xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#ff793a"
                                class="bi bi-caret-down-fill float-right" viewBox="0 0 16 16">
                                <path
                                    d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                            </svg></a>
                    </div>
                </article>

            </section>


            <section class="discounts last-sales">


                <h1 class="last-sales">Последние продажи</h1>


                <article class="">

                    <div class="">
                        <div class="">
                            <a href="javascript://">
                                <img src="https://steampay.com/image/company-of-heroes.jpg?1641810169" alt="">
                                <h2 class="name">UFC 21</h2>
                                <div class="right">
                                    <div class="discount m-auto">-97%</div>
                                    <div class="price">1$</div>
                                </div>
                            </a>
                            <a href="javascript://">
                                <img src="https://steampay.com/image/company-of-heroes.jpg?1641810169" alt="">
                                <h2 class="name">UFC 21</h2>
                                <div class="right">
                                    <div class="discount m-auto">-97%</div>
                                    <div class="price">1$</div>
                                </div>
                            </a>
                            <a href="javascript://">
                                <img src="https://steampay.com/image/company-of-heroes.jpg?1641810169" alt="">
                                <h2 class="name">UFC 21</h2>
                                <div class="right">
                                    <div class="discount m-auto">-97%</div>
                                    <div class="price">1$</div>
                                </div>
                            </a> <a href="javascript://">
                                <img src="https://steampay.com/image/company-of-heroes.jpg?1641810169" alt="">
                                <h2 class="name">UFC 21</h2>
                                <div class="right">
                                    <div class="discount m-auto">-97%</div>
                                    <div class="price">1$</div>
                                </div>
                            </a>
                        </div>

                    </div>


                </article>

            </section>
        </div>
    </div>


    <section class="categories">

        <div class="container-fluid">
            <h1>Категории</h1>
            <div class="categories_inner">
                <div>
                    <h2>Зомби</h2>
                </div>
                <div>
                    <h2>Выживание</h2>
                </div>
                <div>
                    <h2>Кооператив</h2>
                </div>
                <div>
                    <h2>Открытый мир</h2>
                </div>
                <div>
                    <h2>Пост-апокалипсис</h2>
                </div>
                <div>
                    <h2>Песочница</h2>
                </div>
            </div>
            <a href="#all" class="more">показать все <svg xmlns="http://www.w3.org/2000/svg" width="12"
                    height="12" fill="#ff793a" class="bi bi-caret-down-fill float-right" viewBox="0 0 16 16">
                    <path
                        d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                </svg></a>
        </div>
    </section>

    <section class="calendar">
        <div class="container-fluid">
            <h1>Календарь релизов</h1>

            <div class="container-inner">
                <div class="container-inner-1div">
                    <img src="https://steampay.com/slider/ds%20director.jpg" alt="">

                    <p>5 мая 2022</p>
                </div>
                <div>
                    <img src="https://steampay.com/slider/ds%20director.jpg" alt="">

                    <p>5 мая 2022</p>
                </div>
                <div>
                    <img src="https://steampay.com/slider/ds%20director.jpg" alt="">

                    <p>9 мая 2022</p>
                </div>
            </div>
        </div>
    </section>

    <section class="popular">

        <div class="div0 header">
            <h1>Популярные игры</h1>
            <nav class="navbar navbar-expand-lg navbar-dark">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav1"
                    aria-controls="navbarNav1" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav1">
                    <ul class="navbar-nav">
                        <li>
                            <a class="nav-link" href="javascript://" data-val="all">Все</a>
                        </li>
                        <li>
                            <a class="nav-link" href="javascript://" data-val="100">До 100 руб.</a>
                        </li>
                        <li>
                            <a class="nav-link" href="javascript://" data-val="300">До 300 руб.</a>
                        </li>
                        <li>
                            <a class="nav-link" href="javascript://" data-val="700">До 700 руб.</a>
                        </li>
                        <li>
                            <a class="nav-link" href="javascript://" data-val="900">До 900 руб.</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class='small_arrows'>
                <div class="arrow left"></div>
                <div class="arrow right"></div>
            </div>
        </div>

        <div class="items content-all">

            <div class="item">
                <img src="images/popular/dead cells.jpg" alt="">
                <div>
                    <div>
                        <span class="price">3$</span>
                        <span class="discount">-9%</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="images/popular/dead cells.jpg" alt="">
                <div>
                    <div>
                        <span class="price">3$</span>
                        <span class="discount">-9%</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="images/popular/dead cells.jpg" alt="">
                <div>
                    <div>
                        <span class="price">3$</span>
                        <span class="discount">-9%</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="images/popular/dead cells.jpg" alt="">
                <div>
                    <div>
                        <span class="price">3$</span>
                        <span class="discount">-9%</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="images/popular/dead cells.jpg" alt="">
                <div>
                    <div>
                        <span class="price">3$</span>
                        <span class="discount">-9%</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="images/popular/dead cells.jpg" alt="">
                <div>
                    <div>
                        <span class="price">3$</span>
                        <span class="discount">-9%</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="images/popular/dead cells.jpg" alt="">
                <div>
                    <div>
                        <span class="price">3$</span>
                        <span class="discount">-9%</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="images/popular/dead cells.jpg" alt="">
                <div>
                    <div>
                        <span class="price">3$</span>
                        <span class="discount">-9%</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="items content-100">

            <div class="item">
                <img src="images/popular/medal of honor.jpg" alt="">
                <div>
                    <div>
                        <span class="price">3$</span>
                        <span class="discount">-9%</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="images/popular/medal of honor.jpg" alt="">
                <div>
                    <div>
                        <span class="price">3$</span>
                        <span class="discount">-9%</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="images/popular/medal of honor.jpg" alt="">
                <div>
                    <div>
                        <span class="price">3$</span>
                        <span class="discount">-9%</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="images/popular/medal of honor.jpg" alt="">
                <div>
                    <div>
                        <span class="price">3$</span>
                        <span class="discount">-9%</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="images/popular/medal of honor.jpg" alt="">
                <div>
                    <div>
                        <span class="price">3$</span>
                        <span class="discount">-9%</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="images/popular/medal of honor.jpg" alt="">
                <div>
                    <div>
                        <span class="price">3$</span>
                        <span class="discount">-9%</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="images/popular/medal of honor.jpg" alt="">
                <div>
                    <div>
                        <span class="price">3$</span>
                        <span class="discount">-9%</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="images/popular/medal of honor.jpg" alt="">
                <div>
                    <div>
                        <span class="price">3$</span>
                        <span class="discount">-9%</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="items content-300">

            <div class="item">
                <img src="images/popular/death stranding.jpg" alt="">
                <div>
                    <div>
                        <span class="price">3$</span>
                        <span class="discount">-9%</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="images/popular/death stranding.jpg" alt="">
                <div>
                    <div>
                        <span class="price">3$</span>
                        <span class="discount">-9%</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="images/popular/death stranding.jpg" alt="">
                <div>
                    <div>
                        <span class="price">3$</span>
                        <span class="discount">-9%</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="images/popular/death stranding.jpg" alt="">
                <div>
                    <div>
                        <span class="price">3$</span>
                        <span class="discount">-9%</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="images/popular/death stranding.jpg" alt="">
                <div>
                    <div>
                        <span class="price">3$</span>
                        <span class="discount">-9%</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="images/popular/death stranding.jpg" alt="">
                <div>
                    <div>
                        <span class="price">3$</span>
                        <span class="discount">-9%</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="images/popular/death stranding.jpg" alt="">
                <div>
                    <div>
                        <span class="price">3$</span>
                        <span class="discount">-9%</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="images/popular/death stranding.jpg" alt="">
                <div>
                    <div>
                        <span class="price">3$</span>
                        <span class="discount">-9%</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="items content-700">

            <div class="item">
                <img src="images/popular/call of duty.jpg" alt="">
                <div>
                    <div>
                        <span class="price">3$</span>
                        <span class="discount">-9%</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="images/popular/call of duty.jpg" alt="">
                <div>
                    <div>
                        <span class="price">3$</span>
                        <span class="discount">-9%</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="images/popular/call of duty.jpg" alt="">
                <div>
                    <div>
                        <span class="price">3$</span>
                        <span class="discount">-9%</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="images/popular/call of duty.jpg" alt="">
                <div>
                    <div>
                        <span class="price">3$</span>
                        <span class="discount">-9%</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="images/popular/call of duty.jpg" alt="">
                <div>
                    <div>
                        <span class="price">3$</span>
                        <span class="discount">-9%</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="images/popular/call of duty.jpg" alt="">
                <div>
                    <div>
                        <span class="price">3$</span>
                        <span class="discount">-9%</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="images/popular/call of duty.jpg" alt="">
                <div>
                    <div>
                        <span class="price">3$</span>
                        <span class="discount">-9%</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="images/popular/call of duty.jpg" alt="">
                <div>
                    <div>
                        <span class="price">3$</span>
                        <span class="discount">-9%</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="items content-900">

            <div class="item">
                <img src="images/popular/dead cells.jpg" alt="">
                <div>
                    <div>
                        <span class="price">3$</span>
                        <span class="discount">-9%</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="images/popular/dead cells.jpg" alt="">
                <div>
                    <div>
                        <span class="price">3$</span>
                        <span class="discount">-9%</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="images/popular/dead cells.jpg" alt="">
                <div>
                    <div>
                        <span class="price">3$</span>
                        <span class="discount">-9%</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="images/popular/dead cells.jpg" alt="">
                <div>
                    <div>
                        <span class="price">3$</span>
                        <span class="discount">-9%</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="images/popular/dead cells.jpg" alt="">
                <div>
                    <div>
                        <span class="price">3$</span>
                        <span class="discount">-9%</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="images/popular/dead cells.jpg" alt="">
                <div>
                    <div>
                        <span class="price">3$</span>
                        <span class="discount">-9%</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="images/popular/dead cells.jpg" alt="">
                <div>
                    <div>
                        <span class="price">3$</span>
                        <span class="discount">-9%</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="images/popular/dead cells.jpg" alt="">
                <div>
                    <div>
                        <span class="price">3$</span>
                        <span class="discount">-9%</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="deflation">
        <div class="container-fluid header">
            <h1>Снижение цен</h1>
            <div class='small_arrows'>
                <div class="arrow left"></div>
                <div class="arrow right"></div>
            </div>
        </div>

        <div class="items container-fluid">
            <div class="item">
                <img src="images/popular/call of duty.jpg" alt="">
                <div>
                    <div>
                        <span class="price">3$</span>
                        <span class="discount">-9%</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="images/popular/call of duty.jpg" alt="">
                <div>
                    <div>
                        <span class="price">3$</span>
                        <span class="discount">-9%</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="images/popular/call of duty.jpg" alt="">
                <div>
                    <div>
                        <span class="price">3$</span>
                        <span class="discount">-9%</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="images/popular/call of duty.jpg" alt="">
                <div>
                    <div>
                        <span class="price">3$</span>
                        <span class="discount">-9%</span>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="what-is">
        <div class="">
            <div class="what-is-inner">
                <h1>Что такое Стимпэй?</h1>
                <p>В нашем интернет-магазине вы сможете гарантированно приобрести ключи к играм от Steam, Uplay,
                    Battle.net и прочих популярных игровых платформ. Наш магазин делает все для того, чтобы ваши покупки
                    проходили быстро, с максимальным удобством и безопасностью, а цены оставались максимально
                    доступными.

                    Для покупки достаточно лишь указать электронный адрес при оформлении заказа и выбрать удобный способ
                    оплаты. После этого Вам на почту придет пароль доступа в личный кабинет, в котором Вы получите ключ
                    активации.</p>
                <a href="javascript://" class="more">Читать дальше <svg xmlns="http://www.w3.org/2000/svg"
                        width="12" height="12" fill="#ff793a" class="bi bi-caret-down-fill float-right"
                        viewBox="0 0 16 16">
                        <path
                            d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                    </svg></a>
            </div>


            <div class="group">
                <img src="https://sun2.41039.userapi.com/s/v1/if1/newjAcE_Io-RiPkqydX9daQHanSKrK1Ee9Qgl4JQuKEyvzp3h8apH5lJhh9zmARggTfDfPoH.jpg?size=50x50&quality=96&crop=318,27,530,530&ava=1"
                    alt="">
                <a href="#steampay">steampay</a>
                <br>
                <span>Игры на любой вкус по самым низким ценам 🕹</span>
                <hr>
                <span>1000 подписчиков</span>
                <br>

                <div>
                    <img src="https://sun2.41039.userapi.com/s/v1/if2/yCQguR2imuE3gIHvTOOn4IF4amL3ohToc1qXDaEtzijPvOMqsc9jy7UaryvszlM7AADkgYYMY4drRDwpeNL5TKIL.jpg?size=50x50&quality=96&crop=27,54,360,360&ava=1"
                        alt="">
                    <img src="https://sun2.41039.userapi.com/s/v1/if2/yCQguR2imuE3gIHvTOOn4IF4amL3ohToc1qXDaEtzijPvOMqsc9jy7UaryvszlM7AADkgYYMY4drRDwpeNL5TKIL.jpg?size=50x50&quality=96&crop=27,54,360,360&ava=1"
                        alt="">
                    <img src="https://sun2.41039.userapi.com/s/v1/if2/yCQguR2imuE3gIHvTOOn4IF4amL3ohToc1qXDaEtzijPvOMqsc9jy7UaryvszlM7AADkgYYMY4drRDwpeNL5TKIL.jpg?size=50x50&quality=96&crop=27,54,360,360&ava=1"
                        alt="">
                    <img src="https://sun2.41039.userapi.com/s/v1/if2/yCQguR2imuE3gIHvTOOn4IF4amL3ohToc1qXDaEtzijPvOMqsc9jy7UaryvszlM7AADkgYYMY4drRDwpeNL5TKIL.jpg?size=50x50&quality=96&crop=27,54,360,360&ava=1"
                        alt="">
                    <img src="https://sun2.41039.userapi.com/s/v1/if2/yCQguR2imuE3gIHvTOOn4IF4amL3ohToc1qXDaEtzijPvOMqsc9jy7UaryvszlM7AADkgYYMY4drRDwpeNL5TKIL.jpg?size=50x50&quality=96&crop=27,54,360,360&ava=1"
                        alt="">
                    <img src="https://sun2.41039.userapi.com/s/v1/if2/yCQguR2imuE3gIHvTOOn4IF4amL3ohToc1qXDaEtzijPvOMqsc9jy7UaryvszlM7AADkgYYMY4drRDwpeNL5TKIL.jpg?size=50x50&quality=96&crop=27,54,360,360&ava=1"
                        alt="">
                    <img src="https://sun2.41039.userapi.com/s/v1/if2/yCQguR2imuE3gIHvTOOn4IF4amL3ohToc1qXDaEtzijPvOMqsc9jy7UaryvszlM7AADkgYYMY4drRDwpeNL5TKIL.jpg?size=50x50&quality=96&crop=27,54,360,360&ava=1"
                        alt="">
                    <img src="https://sun2.41039.userapi.com/s/v1/if2/yCQguR2imuE3gIHvTOOn4IF4amL3ohToc1qXDaEtzijPvOMqsc9jy7UaryvszlM7AADkgYYMY4drRDwpeNL5TKIL.jpg?size=50x50&quality=96&crop=27,54,360,360&ava=1"
                        alt="">
                </div>
                <button>Подписаться на новости</button>

            </div>
        </div>
    </section>

    <footer>
        <div class="footer-items">
            <div class="item">
                <img src="https://steampay.com/img/svg/advantages/1.svg" alt="">
                <div>Лицензионные ключи от <br> официальных издателей</div>
            </div>
            <div class="item">

                <img src="https://steampay.com/img/svg/advantages/2.svg" alt="">
                <div>Гарантированная <br> техподдержка вашей <br> покупки</div>
            </div>
            <div class="item">

                <img src="https://steampay.com/img/svg/advantages/3.svg" alt="">
                <div>Регулярные акции, <br> скидки и бонусы</div>
            </div>
            <div class="item">

                <img src="https://steampay.com/img/svg/advantages/4.svg" alt="">
                <div>Более 9000 положительных <br> отзывов от реальных <br> клиентов</div>
            </div>
        </div>

        <div class="footer_bottom">
            <div class="inner_footer_bottom">
                <div class="rights">
                    <span> © 2012–2022 STEAMPAY </span>
                    <br>
                    Все права защищены. Полное или частичное копирование материалов сайта без согласования с
                    <br>администрацией запрещено!
                    <br>
                    Все названия игр, компаний, торговых марок, логотипы и игровые материалы являются собственностью
                    <br>соответствующих владельцев.
                </div>

                <nav>
                    <a href="javascript://">Соглашение</a>
                    <a href="javascript://">Партнерам</a>
                    <a href="javascript://">Поддержка</a>
                    <a href="javascript://">О сайте</a>
                </nav>
            </div>

        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
<script>
    $(document).ready(function(){
    
     $(document).on('click', '.pagination a', function(event){
      event.preventDefault(); 
      var page = $(this).attr('href').split('page=')[1];
      fetch_data(page);
     });
    
     function fetch_data(page)
     {
      $.ajax({
       url:"/pagination/fetch_data?page="+page,
       success:function(data)
       {
        $('#table_data').html(data);
       }
      });
     }
     
    });
</script>
    
    <script src="js/script.js"></script>
</body>

</html>
