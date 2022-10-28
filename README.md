# Laravel Order

## Features
1. Create and Manage your orders easily
2. See Orders Reports and its Customers
3. Send notifications within order lifecycle
4. Fire events within order lifecycle

## Installation

```bash
composer require mgamal/laravel-orders
```

Optionally, you can publish the config file with:

```bash
php artisan vendor:publish --tag=config --provider="MG\LaravelOrder\OrderServiceProvider"
```

## Usage

```php
// You can treat the order as normal Laravel model
$order = Order::create($data);
$order = Order::update($id, $updatedData);
$order = Order::withUser($userModel);

// Custom Queries
$ordersList = Order::betweenDates($from, $to);
$filteredOrders = Order::filter($criteria);

// Accessing
$order->items;
$order->user;
$order->customer;

// Events
OrderCreated::dispatch();
OrderUpdated::dispatch();
OrderDeleted::dispatch();
```

