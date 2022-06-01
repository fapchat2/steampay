<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
 
<link rel="stylesheet" href="css/style/main_styles.css">
<link rel="stylesheet" href="css/style/classes.css">
<link rel="stylesheet" href="css/parts_of_the_website/header.css">
<link rel="stylesheet" href="css/parts_of_the_website/genres/style.css">
<link rel="stylesheet" href="css/sliders/slider.css">

@yield('title')

<link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0.12/dist/fancybox.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


</head>

<body>
    @include('parts_of_the_website.header')
    <main>

        <div class="product container-fluid">
            <div>
                @yield('h1')
                <div class="product_inner">
                    <div> Найдено 700 товара </div>
                    <label>
                        Сортировать
                        <select name="sort">
                            <option value="from_new">По дате, с новых</option>
                            <option value="from_old">По дате, со старых</option>
                            <option value="from_cheap">По цене, с недорогих</option>
                            <option value="from_expensive">По цене, с дорогих</option>
                            <option value="name">По названию</option>
                            <option value="popular">По популярности</option>
                        </select>
                    </label>
                    <div>
                        <a href="#all">Все</a>
                        <a href="#in">В наличии</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="games_adventures">
            <div class="container-fluid list">
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
            </div>

            <div class="container-fluid aside">
                <section class="price">
                    <h2>Цена</h2>
                    <div id="slider"></div>
                    <div class="price_inputs">
                        <input type="text" name="" id="" disabled class="not-allowed">
                        <input type="text" name="" id="" disabled class="not-allowed">
                    </div>
                </section>

                <section class="marks">
                    <h2>Метки</h2>

                    <form class="form_search">
                        <input type="text" placeholder="">
                        <button type="submit"></button>
                    </form>
 
                    <label class="checkbox_container orangeHover">
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                        Выживание
                    </label>
                    <label class="checkbox_container orangeHover" >
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                        Зомби
                    </label>
                    <label class="checkbox_container orangeHover">
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                        Тактика
                    </label>
                    <label class="checkbox_container orangeHover">
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                        Открытый мир
                    </label>

                </section>
                <section>
                    <h2>Режимы игры </h2>
                    <ul>
                        <li><a class="orangeHover" href="/single">Одиночная</a></li>
                        <li><a class="orangeHover" href="/coop">Кооператив</a></li>
                        <li><a class="orangeHover" href="/web">Сетевая игра</a></li>
                    </ul>
                </section>
                <section>
                    <h2>Особенности</h2>
                    <ul>
                        <li><a class="orangeHover" href="/steam">Достижения стим</a></li>
                        <li><a class="orangeHover" href="/controller">Контроллер</a></li>
                        <li><a class="orangeHover" href="/collect">Коллекционные карточки</a></li>
                        <li><a class="orangeHover" href="/virtual">Виртуальная реальность</a></li>
                        <li><a class="orangeHover" href="/DLC">DLC</a></li>
                    </ul>
                </section>
                <section>
                    <h2>Платформы</h2>
                    <ul>
                        <li><a class="orangeHover" href="windows">Windows</a></li>
                        <li><a class="orangeHover" href="linux">Linux</a></li>
                        <li><a class="orangeHover" href="mac">mac</a></li>
                    </ul>
                </section>
                <section class="publisher">
                    <h2>Издатель</h2>
                    <form class="form_search">
                        <input type="text" placeholder="">
                        <button type="submit"></button>
                    </form>
                </section>
                <section class="release_date">
                    <h2>Дата выхода</h2>
                    <select name="from_year" id="">
                        <option>older</option>
                        <option>1990</option>
                        <option>1991</option>
                        <option>1992</option>
                        <option>1993</option>
                        <option>1994</option>
                        <option>1995</option>
                        <option>1996</option>
                        <option>1997</option>
                        <option>1998</option>
                        <option>1999</option>
                        <option>2000</option>
                        <option>2001</option>
                        <option>2002</option>
                        <option>2003</option>
                        <option>2004</option>
                        <option>2005</option>
                        <option>2006</option>
                        <option>2007</option>
                        <option>2008</option>
                        <option>2009</option>
                        <option>2010</option>
                        <option>2011</option>
                        <option>2012</option>
                        <option>2013</option>
                        <option>2014</option>
                        <option>2015</option>
                        <option>2016</option>
                        <option>2017</option>
                        <option>2018</option>
                        <option>2019</option>
                        <option>2020</option>
                        <option>2021</option>
                        <option>2022</option>
                    </select>
                    <select name="to_year" id="">
                        <option>1990</option>
                        <option>1991</option>
                        <option>1992</option>
                        <option>1993</option>
                        <option>1994</option>
                        <option>1995</option>
                        <option>1996</option>
                        <option>1997</option>
                        <option>1998</option>
                        <option>1999</option>
                        <option>2000</option>
                        <option>2001</option>
                        <option>2002</option>
                        <option>2003</option>
                        <option>2004</option>
                        <option>2005</option>
                        <option>2006</option>
                        <option>2007</option>
                        <option>2008</option>
                        <option>2009</option>
                        <option>2010</option>
                        <option>2011</option>
                        <option>2012</option>
                        <option>2013</option>
                        <option>2014</option>
                        <option>2015</option>
                        <option>2016</option>
                        <option>2017</option>
                        <option>2018</option>
                        <option>2019</option>
                        <option>2020</option>
                        <option>2021</option>
                        <option>2022</option>
                        <option>2023</option>
                    </select>
                </section>
                <div class="flush_wrapper">
                    <a href="flush">Сбросить фильтры<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                        fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                        <path
                            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                    </svg></a>
                </div>

            </div>

        </div>

    </main>
    <link href="css/sliders/nouislider.css" rel="stylesheet">
    <script src="js/sliders/nouislider.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/cataloguetrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="js/parts_of_the_website/adventures/slider.js"></script>
    <script src="js/parts_of_the_website/main/script.js"></script>

</body>
 

</html>
