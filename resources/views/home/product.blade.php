@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-3">
                        <div class="img"><img src="img/book.png"></div>
                    </div>
                    <div class="col-md-9">
                        <div class="title">
                            Олег Рой:  Двойная жизнь
                        </div>
                        <p>Автор<span>Oлег Рой</span></p>
                        <p>Год<span>2000</span></p>
                        <p>Издание<span>печатнок</span></p>
                        <p>Язык<span>кыргызский</span></p>
                        <a href="#buy" class="fancybox_popup btn">В корзину</a>
                    </div>
                </div>
                <div class="desc">
                    <h2>Описание</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="comment modal_form ">
                    <h2>Оставить комментарий</h2>
                    <form>
                        <div class="row">
                            <div class="col-sm-6"><input type="text" name="namne" placeholder="Имя"></div>
                            <div class="col-sm-6"><input type="email" name="email" placeholder="E-mail"></div>
                        </div>
                        <textarea placeholder="Отзыв"></textarea>
                        <button type="submit" name="submit" class="btn">Прокоментировать</button>
                    </form>
                </div>
                <div class="reviews">
                    <div class="">
                        <div class="title">
                            <h2>Пожалуйста, оцените наш сервис</h2>
                        </div>
                        <img src="img/rew.png" alt="">
                        <div class="rating">
                            Средняя оценка:<br>
                            <div class="rating_num">
                                4.5
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="books sidebar">
                    <div class="book">
                        <div class="img"><img src="img/book.png"></div>
                        <a href="#" class="title">Олег Рой:  Двойная жизнь</a>
                        <div class="price"><span>150</span> грн</div>
                    </div>
                    <div class="book">
                        <div class="img"><img src="img/book.png"></div>
                        <a href="#" class="title">Олег Рой:  Двойная жизнь</a>
                        <div class="price"><span>150</span> грн</div>
                    </div>s
                    <div class="book">
                        <div class="img"><img src="img/book.png"></div>
                        <a href="#" class="title">Олег Рой:  Двойная жизнь</a>
                        <div class="price"><span>150</span> грн</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection