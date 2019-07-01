<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div id="login" class="modal_form_wrapp">
                    <div class="modal_form">
                        <div class="modal_top"><img src="img/logo.png"></div>
                        <div class="title">
                            Вход
                        </div>
                        <div class="form">
                            <form method="POST" action="{{ route('login') }}" id="#login">
                                @csrf
                                <div class="col-md-12">
                                    <input id="email" type="email"
                                           class="form-control @error('email') is-invalid @enderror"
                                           name="email" value="{{ old('email') }}" required autocomplete="email"
                                           autofocus
                                           placeholder="E-mail">


                                </div>

                                <div class="col-md-12">
                                    <input id="password" type="password"
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                           required
                                           autocomplete="current-password" placeholder="Password">

                                   
                                <button class="btn btn-main">Вход</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>