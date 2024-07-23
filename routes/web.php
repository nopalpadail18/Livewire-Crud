<?php

use App\Livewire\CreateCustomer;
use App\Livewire\Customers;
use App\Livewire\EditCustomer;
use App\Livewire\ViewCustomer;
use Illuminate\Routing\RouteAction;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/customers/create', CreateCustomer::class)->name('customers.create');
Route::get('/customers', Customers::class)->name('customers');
Route::get('/customers/{customer}', ViewCustomer::class);
Route::get('/customers/{customer}/edit', EditCustomer::class);
