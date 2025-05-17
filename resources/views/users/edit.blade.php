@include('crud.form', [
    'title' => 'Edit User',
    'route' => route('users.update', $user),
    'method' => 'PUT',
    'model' => $user,
    'fields' => [
        ['name' => 'name', 'label' => 'Name'],
        ['name' => 'email', 'label' => 'Email', 'type' => 'email'],
        ['name' => '', 'label' => 'New Password (optional)', 'type' => 'password', 'required' => false]
    ],
    'extra' => view('users.partials.roles', ['roles' => $roles, 'user' => $user])->render(),
])
