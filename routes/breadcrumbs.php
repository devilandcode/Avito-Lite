<?php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use App\Models\User;
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home
Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Home', route('home'));
});

// Home > Country
Breadcrumbs::for('country', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Country', URL::to('/countries'));
});

// Home > Login
Breadcrumbs::for('login', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Login', route('login'));
});

// Home > Register
Breadcrumbs::for('register', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Register', route('register'));
});

// Home > admin
Breadcrumbs::for('admin', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Admin', route('admin.home'));
});

// Home > admin > users
Breadcrumbs::for('users', function (BreadcrumbTrail $trail) {
    $trail->parent('admin');
    $trail->push('Users', route('admin.users.index'));
});

// Home > admin > users > create
Breadcrumbs::for('create', function (BreadcrumbTrail $trail) {
    $trail->parent('users');
    $trail->push('Create', route('admin.users.create'));
});

// Home > admin > users > user's name
Breadcrumbs::for('username', function (BreadcrumbTrail $trail, User $user) {
    $trail->parent('users');
    $trail->push($user->name, route('admin.users.show'));
});

//// Home > Blog > [Category]
//Breadcrumbs::for('category', function (BreadcrumbTrail $trail, $category) {
//    $trail->parent('blog');
//    $trail->push($category->title, route('category', $category));
//});

