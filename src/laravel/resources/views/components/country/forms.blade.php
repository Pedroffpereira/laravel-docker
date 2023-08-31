<div class="row">
    <div class="my-2 col-md-4">

        {{ Form::label('name', 'Nome') }}
        <div class="input-group has-validation">
            {{ Form::text('name', isset($country) ? $country->name : old('name'), [
                'disabled' => isset($disebled),
                'id' => 'name',
                'class' => ['form-control ', $errors->has('name') == true ? 'is-invalid' : ''],
            ]) }}
            @error('name')
                <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span>
            @enderror
        </div>
    </div>

    @if (!isset($disebled))
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary">Submição</button>
        </div>
    @endif
</div>
