
<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal_form_wrapp">
                    <div class="modal_form">
                        <div class="modal_top"><img src="img/logo.png"></div>
                        <div class="title">
                            Регистрация
                        </div>
                        <div class="form">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-group row">

                                    <div class="col-md-12">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                               name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                                               placeholder="Имя">

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">

                                    <div class="col-md-12">
                                        <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror"
                                               name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus
                                               placeholder="Телефон">

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">

                                    <div class="col-md-12">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                               name="email" value="{{ old('email') }}" required autocomplete="email"
                                               placeholder="E-mail">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">

                                    <div class="col-md-12">
                                        <input id="password" type="password"
                                               class="form-control @error('password') is-invalid @enderror" name="password"
                                               required autocomplete="new-password" placeholder="Пароль">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">

                                    <div class="col-md-12">
                                        <input id="password-confirm" type="password" class="form-control"
                                               name="password_confirmation" required autocomplete="new-password"
                                               placeholder="Повторить пароль">
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <button type="submit" class="btn btn-main">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>