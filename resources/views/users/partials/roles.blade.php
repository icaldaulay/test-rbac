<div class="form-group">
    <label>Roles</label>
    <div class="row">
        @foreach($roles as $role)
            <div class="col-md-3">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" 
                           class="custom-control-input" 
                           id="role_{{ $role->id }}"
                           name="roles[]" 
                           value="{{ $role->name }}"
                           {{ isset($user) && $user->roles->contains($role) ? 'checked' : '' }}>
                    <label class="custom-control-label" for="role_{{ $role->id }}">
                        {{ $role->name }}
                    </label>
                </div>
            </div>
        @endforeach
    </div>
</div>
