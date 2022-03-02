{{-- Nome --}}

<div class="row">
    <label class="col-sm-2 col-form-label">{{ __('Nome do Jogador') }}</label>
    <div>
        <input type="text" id="nome" name="nome" value="{{ isset($jogador) ? $jogador->nome : old('nome') }}"
            class="form-control @error('nome') is-invalid @enderror" placeholder="Nome do Jogador" required>
        @error('nome')
            <span class="invalid-feedback" role="alert">
                <i class="fi-circle-cross"></i><strong> {{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

{{-- Data --}}

<div class="row">
    <label class="col-sm-2 col-form-label">{{ __('Data de Nascimento do Jogador') }}</label>
    <div>
        <textarea id="data" name="data" class="form-control @error('data') is-invalid @enderror"
            placeholder="Escreva uma descrição curta sobre o jogador"
            required>{{ isset($jogador) ? $jogador->data : old('data') }}</textarea>
        @error('data')
            <span class="invalid-feedback" role="alert">
                <i class="fi-circle-cross"></i><strong> {{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

{{-- Nacionalidade --}}
<div class="row">
    <label class="col-sm-2 col-form-label">{{ __('Nacionalidade') }}</label>
    <div>
        <select id="nacionalidade_id" name="nacionalidade_id"
            class="form-control @error('nacionalidade_id') is-invalid @enderror" required>
            <option value="">--- Selecione uma Nacionalidade ---</option>
            @isset($nacionalidades)
                @foreach ($nacionalidades as $nacionalidade)
                    <option @if (isset($jogador) && $jogador->nacionalidade_id == $nacionalidade->id) selected @endif value="{{ $nacionalidade->id }}">
                        {{ $nacionalidade->nacionalidade }}
                    </option>
                @endforeach
            @endisset
        </select>
        @error('nacionalidade_id')
            <span class="invalid-feedback" role="alert">
                <i class="fi-circle-cross"></i><strong> {{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

{{-- Imagem --}}
<div class="row">
    <div class="col-sm-2 col-form-label">
        <label class="@if (!isset($jogador)) required @endif" for="image">Imagens</label>
        <input type="file" name="imagem" class="form-control" accept="image/*"
            @if (!isset($jogador)) required @endif>
    </div>
</div>
