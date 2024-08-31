<div class="card card-primary card-outline">
    <div class="card-header">
    <div class="card-title">
        <h3>
            {{ __('Profile Information') }}
        </h3>
    </div>
    </div>
    <div class="card-body">
        <h5>
            {{ __("Update your account's profile information and email address.") }}
        </h5>
        <form id="send-verification" method="post" action="{{ route('verification.send') }}">
            @csrf
        </form>
        <form method="post" action="{{ route('profile.update')}}">
            @csrf
            @method('patch')
        <div class="form-group">
        <label for="name">Name</label>
            <input name="name" type="text" class="form-control form-control-border" id="name" value="{{ old('name', $user->name) }}" required autofocus autocomplete="name"/>
        </div>
        <div class="form-group">
        <label for="exampleInputBorderWidth2">Email</label>
            <input name="email" type="text" class="form-control form-control-border" id="email" value="{{ old('email', $user->email) }}" required autocomplete="username"/>
        </div>
        <div>
            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4">
            <x-adminlte-button type="submit" label="{{ __('Save')}}" theme="primary"/>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
    </div>
</div>
