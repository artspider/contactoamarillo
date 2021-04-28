<?php

// Home
Breadcrumbs::for('dashboard', function ($trail) {
    $trail->push('Dashboard', route('dashboard'));
});

Breadcrumbs::for('UserProfile', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('UserProfile', route('profile.show'));
});

Breadcrumbs::for('education', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Education', route('education'));
});

Breadcrumbs::for('services', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Services', route('services'));
});

Breadcrumbs::for('service', function ($trail, $id) {
    $trail->parent('services');
    $trail->push($id, route('editservice', $id));
});

Breadcrumbs::for('ability', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Ability', route('ability'));
});

Breadcrumbs::for('profile', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Expert profile', route('profile'));
});

Breadcrumbs::for('profile-show', function ($trail,$id) {
    $trail->parent('profile');
    $trail->push($id, route('expert-profile', $id));
});

Breadcrumbs::for('jobsbag', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Jobs Bag', route('jobsbag'));
});