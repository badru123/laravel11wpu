@extends('layouts.app')
@section('content_body')
<div class="card">
    <form method='get' action="https://lazis.pb4k.org/zis/index">
        <div class="input-group">
            <input class="form-control form-control-border" type='text' name='search' value='' placeholder="{{ __('Search Chirps') }}">
            <div class="input-group-append">
                <button type='submit' name='submit' value='submit' class="btn btn-default"> <i class="fas fa-search"></i>{{ __('Search') }}</button>
            </div>
        </div>
    </form>
</div>
    <div class="card card-primary card-outline">
        <div class="card-body">
        <form method="POST" action="{{ route('chirps.store') }}">
            @csrf
            <x-adminlte-textarea name="message" label="Chirp" rows=5 igroup-size="sm"
            label-class="text-primary" placeholder="{{ __('What\'s on your mind?')}}">
                {{ old('message') }}
            <x-slot name="appendSlot">
            <x-adminlte-button type="submit" theme="primary" icon="fas fa-paper-plane" label="{{ __('Chirp') }}"/>
            </x-slot>
            </x-adminlte-textarea>
        </form>
        </div>
    </div>
    {{ $chirps->links() }}
            @foreach ($chirps as $chirp)
                <x-adminlte-callout theme="primary">
                    @if($chirp->user->is(auth()->user()))
                    <div class="float-right card-tools">
                        <div class="btn-group">
                           <button type="button" class="btn btn-light btn-sm" data-toggle="dropdown" data-offset="-52">
                             <i class="fas fa-ellipsis-v"></i>
                           </button>
                           <div class="dropdown-menu" role="menu">
                               <a href="{{ route('chirps.edit', $chirp) }}" class="dropdown-item"> Edit</a>
                               <form method="POST" action="{{ route('chirps.destroy', $chirp) }}">
                                   @csrf
                                   @method('delete')
                               <button href="route('chirps.destroy', $chirp)" onclick="event.preventDefault(); this.closest('form).submit();" class="dropdown-item"> Hapus</button>
                               </form>
                            </div>
                        </div>
                    </div>
                    @endif
                    <p>
                        <b>{{ $chirp->user->name }}</b> <span class="ml-2"><small class="text-muted">{{ $chirp->created_at->diffForHumans() }}</small></span>
                        @unless ($chirp->created_at->eq($chirp->updated_at))
                        <small class="text-muted ml-2"> &middot; {{ __('edited') }}</small>
                        @endunless
                    </p>
                    {{ $chirp->message }}
                </x-adminlte-callout>
            @endforeach
    <div class="row">
        <div class="justify-content-center">
            {{ $chirps->links() }}
        </div>
    </div>
@stop