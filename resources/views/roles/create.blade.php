@include('crud.form', [
    'title' => 'Create Role',
    'route' => route('roles.store'),
    'method' => 'POST',
    'fields' => [
        ['name' => 'name', 'label' => 'Role Name']
    ],
    'extra' => view('roles.partials.permissions', ['permissions' => $permissions])->render(),
])
