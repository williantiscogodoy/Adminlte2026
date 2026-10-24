<div class="row padding-1 p-1">
    <div class="col-md-12">

        <div class="form-group mb-2 mb20">
            <label for="chats_id" class="form-label">{{ __('Chat') }}</label>
            <select name="chats_id" id="chats_id" class="form-control @error('chats_id') is-invalid @enderror">
                <option value="">-- Selecciona un chat --</option>
                @foreach ($chats as $chat)
                    <option value="{{ $chat->id }}" {{ old('chats_id', $mensaje?->chats_id) == $chat->id ? 'selected' : '' }}>
                        {{ $chat->nombre }} {{ $chat->apellidos }} ({{ $chat->email }})
                    </option>
                @endforeach
            </select>
            {!! $errors->first('chats_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-2 mb20">
            <label for="contenido" class="form-label">{{ __('Contenido') }}</label>
            <textarea name="contenido" id="contenido" rows="4" class="form-control @error('contenido') is-invalid @enderror" placeholder="Escribe el mensaje">{{ old('contenido', $mensaje?->contenido) }}</textarea>
            {!! $errors->first('contenido', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>