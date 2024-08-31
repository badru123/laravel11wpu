<div class="card card-primary card-outline">
    <div class="card-header">
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Update Password') }}
        </h2>
    </div>
    <div class="card-body">
        <p class="mt-1 text-sm text-gray-600">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')
       <div class="form-group">
       <label for="update_password_current_password">{{ __('Current Password') }}</code></label>
           <input name="current_password" type="password" class="form-control form-control-border" id="update_password_current_password" autocomplete="current-password">
           <x-input-error :messages="$errors->updatePassword->get('current_password')" />
       </div>
       <div class="form-group">
       <label for="update_password_password">{{ __('New Password') }}</label>
           <input name="password" type="password" class="form-control form-control-border" id="update_password_password" autocomplete="new-password">
           <x-input-error :messages="$errors->updatePassword->get('password')" />
        </div>
        <div class="form-group">
        <label for="update_password_password_confirmation">{{ __('Confirm Password') }}</label>
           <input name="password_confirmation" type="password" class="form-control form-control-border" id="update_password_password_confirmation" autocomplete="new-password">
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" />
        </div>

        <div class="flex items-center gap-4">
            <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>

            @if (session('status') === 'password-updated')
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
