<div class="card card-primary card-outline">
    <div class="card-header">
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Delete Account') }}
        </h2>
        <p>
            {{ __('Be sure before delete the account. the account and all its resource will be deleted') }}
        </p>
    </div>
    <div class="card-body">
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-default">{{ __('Delete Account') }}</button>
    </div>
    <div class="modal fade" id="modal-default">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title">{{ __('Confirm Account Deletion') }}</h4>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body" :show="$errors->userDeletion->isNotEmpty()">
    <form method="post" action="{{ route('profile.destroy') }}">
        @csrf
        @method('delete')
        <h3>{{ __('Are you sure you want to delete your account ?') }}</h3>
        <p>{{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to delete your account') }}</p>
        <div class="form-group">
            <label for="">{{ __('Password') }}</label>
            <input required id="password" name="password" type="password" class="form-control form-control-border" />
            <x-input-error :messages="$errors->userDeletion->get('password')" />
        </div>
</div>
<div class="modal-footer justify-content-between">
<button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('Cancel') }}</button>
<button type="submit" class="btn btn-danger">{{ __('Delete Account') }}</button>
</form>
</div>
</div>

</div>

</div>
</div>
