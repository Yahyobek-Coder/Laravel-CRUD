<x-layouts.auth>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <div class="container">
        <div class="row">
            <div class="offset-md-2 col-lg-5 col-md-7 offset-lg-4 offset-md-3">
                <div class="panel border bg-white">
                    <div class="panel-heading">
                        <h3 class="pt-3 font-weight-bold">Kirish</h3>
                    </div>
                    <div class="panel-body p-3">
                        <form action="{{ route('authenticate') }}" method="POST">
                            @csrf
                            <div class="form-group py-2">
                                <div class="input-field"> <input type="text" name="email" placeholder="Email"
                                    required> </div>
                            </div>
                            <div class="form-group py-2">
                                <div class="input-field"> <input type="password"
                                    name="password" placeholder="Parol" required> </div>
                            </div>

                            <button type="submit" class="btn btn-primary btn-block mt-3">Kirish</button>
                            <div class="text-center pt-4 text-muted">Ro'yxatdan o'tganmisiz ? | <a
                                    href="{{ route('register') }}">Ro'yxatdan o'tish</a></div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-layouts.auth>
