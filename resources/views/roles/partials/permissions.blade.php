<div class="form-group">
    <label>Permissions</label>
    <div class="row">
        @foreach($permissions as $permission)
            <div class="col-md-3">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" 
                           class="custom-control-input" 
                           id="perm_{{ $permission->id }}"
                           name="permissions[]" 
                           value="{{ $permission->name }}"
                           {{ isset($role) && $role->permissions->contains($permission) ? 'checked' : '' }}>
                    <label class="custom-control-label" for="perm_{{ $permission->id }}">
                        {{ $permission->name }}
                    </label>
                </div>
            </div>
        @endforeach
    </div>
</div>
