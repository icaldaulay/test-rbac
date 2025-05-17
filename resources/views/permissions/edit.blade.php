@include('crud.form', [
    'title' => 'Edit Permission',
    'route' => route('permissions.update', $permission),
    'method' => 'PUT',
    'model' => $permission,
    'fields' => [
        ['name' => 'name', 'label' => 'Permission Name']
    ],
])
