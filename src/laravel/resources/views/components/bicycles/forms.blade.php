<div class="row">
    <div class="my-2 col-md-4">

        {{ Form::label('brand', 'Brand') }}
        <div class="input-group has-validation">
            {{ Form::text('brand', isset($bicycle) ? $bicycle->brand : old('brand'), [
                'disabled' => isset($disebled),
                'id' => 'brand',
                'class' => ['form-control ', $errors->has('brand') == true ? 'is-invalid' : ''],
            ]) }}
            @error('brand')
                <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span>
            @enderror
        </div>

        {{ Form::label('model', 'Model') }}
        <div class="input-group has-validation">
            {{ Form::text('model', isset($bicycle) ? $bicycle->model : old('model'), [
                'disabled' => isset($disebled),
                'id' => 'model',
                'class' => ['form-control ', $errors->has('model') == true ? 'is-invalid' : ''],
            ]) }}
            @error('model')
                <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span>
            @enderror
        </div>

        {{ Form::label('color', 'Color') }}
        <div class="input-group has-validation">
            {{ Form::text('color', isset($bicycle) ? $bicycle->color : old('color'), [
                'disabled' => isset($disebled),
                'id' => 'color',
                'class' => ['form-control ', $errors->has('color') == true ? 'is-invalid' : ''],
            ]) }}
            @error('color')
                <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span>
            @enderror
        </div>

        {{ Form::label('price', 'Price') }}
        <div class="input-group has-validation">
            {{ Form::text('price', isset($bicycle) ? $bicycle->price : old('price'), [
                'disabled' => isset($disebled),
                'id' => 'price',
                'class' => ['form-control ', $errors->has('price') == true ? 'is-invalid' : ''],
            ]) }}
            @error('price')
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
