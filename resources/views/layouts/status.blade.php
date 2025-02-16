@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger rounded-pill alert-dismissible fade show">
            {{ $error }}
            <button type="button" class="btn-close custom-close" data-bs-dismiss="alert" aria-label="Close"><i
                    class="fas fa-xmark"></i></button>
        </div>
    @endforeach
@endif
@if (session()->get('succes'))
    <div class="alert alert-success rounded-pill alert-dismissible fade show">
        {{ session()->get('succes') }}
        <button type="button" class="btn-close custom-close" data-bs-dismiss="alert" aria-label="Close"><i
                class="fas fa-xmark"></i></button>
    </div>
@endif
