<div class="row">
    <label class="col-sm-2 col-form-label">{{ __('Categoria') }}</label>
    <div class="col-sm-7">
        <div class="form-group{{ $errors->has('categoria') ? ' has-danger' : '' }}">
            <input class="form-control{{ $errors->has('categoria') ? ' is-invalid' : '' }}" name="categoria"
                id="input-categoria" type="text" placeholder="{{ __('Categoria') }}"
                value="{{ isset($categoria) ? $categoria->categoria : old('Categoria') }}" required="true"
                aria-required="true" />
            @if ($errors->has('categoria'))
                <span id="categoria-error" class="error text-danger"
                    for="input-categoria">{{ $errors->first('categoria') }}</span>
            @endif
        </div>
    </div>
</div>
