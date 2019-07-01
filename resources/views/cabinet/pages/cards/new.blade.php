<form action="" class="form">
    <div class="row">
        <div class="form-group col-sm-6 col-12">
            <label for="numberCard">Номер карты</label>
            <input type="number" class="form-control" name="number" id="numberCard" aria-describedby="numberHelp"
                   placeholder="Введите номер карты">
            <small id="numberHelp" class="form-text text-muted">Номер сохранены в зашифрованом виде</small>
        </div>

        <div class="form-group col-sm-3 col-12">
            <label for="monthCard">Месяц</label>
            <input type="number" class="form-control" name="month" id="monthCard" aria-describedby="nameHelp"
                   placeholder="Месяц">
            <small id="nameHelp" class="form-text text-muted">будьте внимательны</small>
        </div>
        <div class="form-group col-sm-3 col-12">
            <label for="yearCard">Год</label>
            <input type="number" class="form-control" name="year" id="yearCard" aria-describedby="nameHelp"
                   placeholder="Год">
            <small id="nameHelp" class="form-text text-muted">будьте внимательны</small>
        </div>

        <div class="form-group col">
            <button class="btn btn-main">Добавить</button>
        </div>
    </div>

</form>