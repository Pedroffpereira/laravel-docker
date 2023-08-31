<div class="row">
    <div class="my-2 col-md-4">

        {{ Form::label('first_name', 'First Name') }}
        <div class="input-group has-validation">
            {{ Form::text('first_name', isset($user) ? $user->first_name : old('first_name'), [
                'disabled' => isset($disebled),
                'id' => 'first_name',
                'class' => ['form-control ', $errors->has('first_name') == true ? 'is-invalid' : ''],
            ]) }}
            @error('first_name')
                <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span>
            @enderror
        </div>

        {{ Form::label('last_name', 'Last Name') }}
        <div class="input-group has-validation">
            {{ Form::text('last_name', isset($user) ? $user->last_name : old('last_name'), [
                'disabled' => isset($disebled),
                'id' => 'last_name',
                'class' => ['form-control ', $errors->has('last_name') == true ? 'is-invalid' : ''],
            ]) }}
            @error('last_name')
                <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span>
            @enderror
        </div>

        {{ Form::label('birth_date', 'Birth Date') }}
        <div class="input-group has-validation">
            {{ Form::text('birth_date', isset($user) ? $user->birth_date : old('birth_date'), [
                'disabled' => isset($disebled),
                'id' => 'birth_date',
                'class' => ['form-control ', $errors->has('birth_date') == true ? 'is-invalid' : ''],
            ]) }}
            @error('birth_date')
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
