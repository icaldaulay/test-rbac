@csrf

<div class="mb-3">
    <label>Role Name</label>
    <input type="text" name="name" value="{{ old('name', $role->name ?? '') }}" class="form-control" required>
</div>

<div class="mb-3">
    <label>Permissions</label><br>
    @foreach($permissions as $permission)
        <div class="form-check form-check-inline">
            <input type="checkbox" name="permissions[]" value="{{ $permission->name }}"
                {{ isset($role) && $role->permissions->contains($permission) ? 'checked' : '' }}
                class="form-check-input">
            <label class="form-check-label">{{ $permission->name }}</label>
        </div>
    @endforeach
</div>

<button class="btn btn-success">{{ $button ?? 'Save' }}</button>
