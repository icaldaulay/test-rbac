@include('crud.form', [
    'title' => 'Create Permission',
    'route' => route('permissions.store'),
    'method' => 'POST',
    'fields' => [
        ['name' => 'name', 'label' => 'Permission Name']
    ],
])
