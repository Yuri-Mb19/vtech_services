@if(Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
@endif

<form action="{{ route('site.contato') }}" method="post" class="request-page-form" novalidate="novalidate">
    @csrf
    <div class="row">
        <div class="col-md-6 mb-3">
            <div class="form-group">
                <input name="nome" value="{{ old('nome') }}" type="text" class="form-control border border-dark" placeholder="Nome">
                @error('nome')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="col-md-6 mb-3">
            <div class="form-group">
                <input name="telefone" value="{{ old('telefone') }}" type="text" class="form-control border border-dark" placeholder="Telefone">
                @error('telefone')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="col-md-6 mb-3">
            <div class="form-group">
                <input name="email" value="{{ old('email') }}" type="email" class="form-control border border-dark" placeholder="Email (Opcional)">
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="col-md-6 mb-3">
            <div class="form-group">
                <input name="localizacao" value="{{ old('localizacao') }}" type="text" class="form-control border border-dark" placeholder="Localização">
                @error('localizacao')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="col-md-12 mb-3">
            <div class="form-group">
                <textarea name="mensagem" class="form-control border border-dark" placeholder="Mensagem"></textarea>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group text-center">
                <button class="btn btn-primary">
                    <i class="flaticon-right icon-arrow before"></i>
                    <span class="label" id="">Enviar Mensagem</span>
                    <i class="flaticon-right icon-arrow after"></i>
                </button>
            </div>
        </div>
    </div>
</form>

@if($errors->any())
    <div style="position: absolute; top: 0; width: 50%; background: #f8d7da; padding: 10px;">
        @foreach ($errors->all() as $error)
            <div class="text-danger">{{ $error }}</div>
        @endforeach
    </div>
@endif
