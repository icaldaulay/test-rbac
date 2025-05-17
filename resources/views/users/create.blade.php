@include('crud.form', [
    'title' => 'Create User',
    'route' => route('users.store'),
    'method' => 'POST',
    'fields' => [
        ['name' => 'name', 'label' => 'Name'],
        ['name' => 'email', 'label' => 'Email', 'type' => 'email'],
        ['name' => 'password', 'label' => 'Password', 'type' => 'password']
    ],
    'extra' => view('users.partials.roles', ['roles' => $roles])->render(),
])
