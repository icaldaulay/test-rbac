@include('crud.form', [
    'title' => 'Edit Role',
    'route' => route('roles.update', $role),
    'method' => 'PUT',
    'model' => $role,
    'fields' => [
        ['name' => 'name', 'label' => 'Role Name']
    ],
    'extra' => view('roles.partials.permissions', ['permissions' => $permissions, 'role' => $role])->render(),
])
