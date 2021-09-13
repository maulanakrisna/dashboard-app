<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="row col-8 py-3">
                        <div>
                            <a href="/offices" class="btn-primary">Offices</a>
                        </div>
                        <div> <a href="/computers" class="btn-primary">Computers</a></div>
                        <div> <a href="/itsupports" class="btn-primary">IT supports</a></div>
                        <div> <a href="/networks" class="btn-primary">Networks</a></div>

                        <a href="/routers" class="btn-primary">Routers</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>