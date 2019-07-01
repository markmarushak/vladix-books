@extends('cabinet.index')

@section('cabinet-content')

    <h2>Служба поддержки</h2>
    <form action="" class="form">
        <div class="row">
            <div class="form-group col-12">

                <label for="ticket">Тема</label>
                <input type="text" class="form-control" name="tiket" id="ticket" aria-describedby="ticketHelp"
                       placeholder="Введите тему">
                <small id="ticketHelp" class="form-text text-muted">Конкоетизируйте для ускорения решения</small>

            </div>

            <div class="form-group col-12">

                <label for="descriptionTicket">Описание</label>
                <textarea type="text" class="form-control" name="name" id="descriptionTicket" aria-describedby="descriptionTicketHelp"></textarea>
                <small id="descriptionTicketHelp" class="form-text text-muted">Опишите более подробно ситуацию. Это поможет вам и нам ускорить процес решения</small>

            </div>


            <div class="form-group col">
                <button class="btn btn-main">Отправить</button>
            </div>
        </div>

    </form>

@endsection