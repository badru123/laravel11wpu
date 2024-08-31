@extends('layouts.app')
@section('content_body')
<x-adminlte-card title="{{ __('Edit Chirps') }}" theme="primary card-outline">
    <div class="card-body">
      <form method="POST" action="{{ route('chirps.update', $chirp) }}">
          @csrf
          @method('patch')
          <div class="form-group">
<label>{{ __('Chirps') }}</label>
<textarea name="message" class="form-control" rows="5" placeholder="{{ __('Write your chirps') }}">
    {{ old('message', $chirp->message) }}
</textarea>
<x-input-error :messages="$errors->get('message')"/>
</div>
          <button type="submit" class="btn btn-primary"> {{ __('Save') }}</button>
          <a class="btn btn-secondary" href="{{ route('chirps.index') }}"> {{ __('Cancel') }}</a>
      </form>
    </div>
</x-adminlte-card>
@stop