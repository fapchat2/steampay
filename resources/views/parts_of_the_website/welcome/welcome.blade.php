@extends('layout')

@section('head')

<link rel="stylesheet" href="css/style/main_styles.css">
<link rel="stylesheet" href="css/style/classes.css">
<link rel="stylesheet" href="css/parts_of_the_website/header.css">
<link rel="stylesheet" href="css/parts_of_the_website/main/style.css">
<title>Document</title>
@endsection

@section('body')
    


<main>
    <div class="slider">
        <div class="slide">
            @include('parts_of_the_website.welcome.pagination_main')
            {{-- <div>
                <div class="  wrapper">
                    <span class="game-name">back4blood</span>
                    <div>
                        <span class="discount">-9%</span>
                        <span class="price"> <span class="strikethrough">24$</span> 21$</span>        
                    </div>
                </div>
            </div>
            <div>
                <div class="  wrapper">
                    <span class="game-name">payday</span>
                    <div>
                        <span class="discount">-12%</span>
                        <span class="price"> <span class="strikethrough">10$</span> 8$</span>  
                    </div>
                </div>
            </div>
            <div>
                <div class="  wrapper">
                    <span class="game-name">payday</span>
                    <div>
                        <span class="discount">-90%</span>
                        <span class="price"> <span class="strikethrough">20$</span> 2$</span>
                    </div>
                </div>
            </div> --}}
        </div>

    </div>

    <div class='arrows'>
        {{-- <div class="arrow left">
            <img src="" alt="">
        </div>
        <div class="arrow right">
            <img src="" alt="">
        </div> --}}

        {!! $main->links('vendor.pagination.adaptive-arrows') !!}

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
                            <a class="nav-link" href="javascript://">??????????????</a>
                        </li>
                        <li class="bestseller">
                            <a class="nav-link" href="javascript://">?????? ????????????</a>
                        </li>
                        <li class="looked-for">
                            <a class="nav-link" href="javascript://">??????????????????</a>
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

        <a href="#more-games-content" class="more">?????? 1486 ?????? <svg xmlns="http://www.w3.org/2000/svg"
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
                    <span class="aside-block">???? 40%</span>
                    <h1 class="discounts">????????????</h1>
                </div>
                    {!! $discounts->links('vendor.pagination.small-arrows') !!}
            </div>


            <article class="">
                <div class="slider">
                    @include('parts_of_the_website.welcome.pagination_discounts')
                </div>


                <div class="more-games">
                    <a href="#more-games-content" class="more">?????? 1486 ?????? <svg
                            xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#ff793a"
                            class="bi bi-caret-down-fill float-right" viewBox="0 0 16 16">
                            <path
                                d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                        </svg></a>
                </div>
            </article>

        </section>


        <section class="last-sales">


            <h1 class="last-sales">?????????????????? ??????????????</h1>


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
        <h1>??????????????????</h1>
        <div class="categories_inner">
            <div>
                <h2>??????????</h2>
            </div>
            <div>
                <h2>??????????????????</h2>
            </div>
            <div>
                <h2>????????????????????</h2>
            </div>
            <div>
                <h2>???????????????? ??????</h2>
            </div>
            <div>
                <h2>????????-??????????????????????</h2>
            </div>
            <div>
                <h2>??????????????????</h2>
            </div>
        </div>
        <a href="#all" class="more">???????????????? ?????? <svg xmlns="http://www.w3.org/2000/svg" width="12"
                height="12" fill="#ff793a" class="bi bi-caret-down-fill float-right" viewBox="0 0 16 16">
                <path
                    d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
            </svg></a>
    </div>
</section>

<section class="calendar">
    <div class="container-fluid">
        <h1>?????????????????? ??????????????</h1>

        <div class="container-inner">
            <div class="container-inner-1div">
                <img src="https://steampay.com/slider/ds%20director.jpg" alt="">

                <p>5 ?????? 2022</p>
            </div>
            <div>
                <img src="https://steampay.com/slider/ds%20director.jpg" alt="">

                <p>5 ?????? 2022</p>
            </div>
            <div>
                <img src="https://steampay.com/slider/ds%20director.jpg" alt="">

                <p>9 ?????? 2022</p>
            </div>
        </div>
    </div>
</section>

<section class="popular">

    <div class="div0 header">
        <h1>???????????????????? ????????</h1>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav1"
                aria-controls="navbarNav1" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav1">
                <ul class="navbar-nav">
                    <li>
                        <a class="nav-link" href="javascript://" data-val="all">??????</a>
                    </li>
                    <li>
                        <a class="nav-link" href="javascript://" data-val="100">???? 100 ??????.</a>
                    </li>
                    <li>
                        <a class="nav-link" href="javascript://" data-val="300">???? 300 ??????.</a>
                    </li>
                    <li>
                        <a class="nav-link" href="javascript://" data-val="700">???? 700 ??????.</a>
                    </li>
                    <li>
                        <a class="nav-link" href="javascript://" data-val="900">???? 900 ??????.</a>
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
        <h1>???????????????? ??????</h1>
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
            <h1>?????? ?????????? ???????????????</h1>
            <p>?? ?????????? ????????????????-???????????????? ???? ?????????????? ???????????????????????????? ???????????????????? ?????????? ?? ?????????? ???? Steam, Uplay,
                Battle.net ?? ???????????? ???????????????????? ?????????????? ????????????????. ?????? ?????????????? ???????????? ?????? ?????? ????????, ?????????? ???????? ??????????????
                ?????????????????? ????????????, ?? ???????????????????????? ?????????????????? ?? ??????????????????????????, ?? ???????? ???????????????????? ??????????????????????
                ????????????????????.

                ?????? ?????????????? ???????????????????? ???????? ?????????????? ?????????????????????? ?????????? ?????? ???????????????????? ???????????? ?? ?????????????? ?????????????? ????????????
                ????????????. ?????????? ?????????? ?????? ???? ?????????? ???????????? ???????????? ?????????????? ?? ???????????? ??????????????, ?? ?????????????? ???? ???????????????? ????????
                ??????????????????.</p>
            <a href="javascript://" class="more">???????????? ???????????? <svg xmlns="http://www.w3.org/2000/svg"
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
            <span>???????? ???? ?????????? ???????? ???? ?????????? ???????????? ?????????? ????</span>
            <hr>
            <span>1000 ??????????????????????</span>
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
            <button>?????????????????????? ???? ??????????????</button>

        </div>
    </div>
</section>

<footer>
    <div class="footer-items">
        <div class="item">
            <img src="https://steampay.com/img/svg/advantages/1.svg" alt="">
            <div>???????????????????????? ?????????? ???? <br> ?????????????????????? ??????????????????</div>
        </div>
        <div class="item">

            <img src="https://steampay.com/img/svg/advantages/2.svg" alt="">
            <div>?????????????????????????????? <br> ???????????????????????? ?????????? <br> ??????????????</div>
        </div>
        <div class="item">

            <img src="https://steampay.com/img/svg/advantages/3.svg" alt="">
            <div>???????????????????? ??????????, <br> ???????????? ?? ????????????</div>
        </div>
        <div class="item">

            <img src="https://steampay.com/img/svg/advantages/4.svg" alt="">
            <div>?????????? 9000 ?????????????????????????? <br> ?????????????? ???? ???????????????? <br> ????????????????</div>
        </div>
    </div>

    <div class="footer_bottom">
        <div class="inner_footer_bottom">
            <div class="rights">
                <span> ?? 2012???2022 STEAMPAY </span>
                <br>
                ?????? ?????????? ????????????????. ???????????? ?????? ?????????????????? ?????????????????????? ???????????????????? ?????????? ?????? ???????????????????????? ??
                <br>???????????????????????????? ??????????????????!
                <br>
                ?????? ???????????????? ??????, ????????????????, ???????????????? ??????????, ???????????????? ?? ?????????????? ?????????????????? ???????????????? ????????????????????????????
                <br>?????????????????????????????? ????????????????????.
            </div>

            <nav>
                <a href="javascript://">????????????????????</a>
                <a href="javascript://">??????????????????</a>
                <a href="/support">??????????????????</a>
                <a href="javascript://">?? ??????????</a>
            </nav>
        </div>

    </div>
</footer>
<link rel="stylesheet" href="css/sliders/nouislider.css">
<script src="js/sliders/nouislider.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/cataloguetrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>

<script src="js/parts_of_the_website/main/script.js"></script>
<script src="js/parts_of_the_website/main/slider.js"></script>

@endsection
