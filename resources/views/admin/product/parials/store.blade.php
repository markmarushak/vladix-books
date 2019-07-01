<div class="comment modal_form ">
    <h2>Добавить книгу</h2>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-sm-12">

                <div class="row">


                    <div class="col-sm-4">
                        <input type="file" name="images" id="avatar">
                        <label for="avatar">
                            <img src="{{ asset('img/book.png') }}" id="wrap_avatar">
                        </label>
                    </div>
                    <div class="col-sm-8 col-xs-12">
                        <div class="row">
                            <div class="col-sm-6">
                                <select class="form-control" name="category_id">
                                    <option value="">Выберите Категорию</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category['id'] }}">{{ $category['name'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-12">
                                <input class="form-control" type="text" name="name" placeholder="Название">
                            </div>
                            <div class="col-sm-12">
                                <input class="form-control" type="text" name="author" placeholder="Автор">
                            </div>
                            <div class="col-sm-12">
                                <input class="form-control" type="text" name="price" placeholder="Цена">
                            </div>
                            <div class="col-sm-12">
                                <input class="form-control" type="text" name="year" placeholder="Год выпуска">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <input class="form-control" type="text" name="edition" placeholder="Издание">
                    </div>
                    <div class="col-sm-6">
                        <input class="form-control" type="text" name="language" placeholder="Язык(и)">
                    </div>

                    <div class="col-sm-12">
                        <textarea name="description" placeholder="Описание"></textarea>
                    </div>

                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-sm-6">
                <button type="submit" class="btn btn-success">Добавить</button>
            </div>
        </div>
    </form>
</div>

<script>
    $(document).ready(function(){
        $('#avatar').change(function (event) {
            $('#wrap_avatar').attr('src', $(this).val().split('\\').pop())
        });
    });
</script>