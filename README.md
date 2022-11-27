# Laravel Orders

This is a package to handle the orders in your Laravel application, you can create, update and delete your orders with suitable events. Also you can manage the order lifecycle from being _initiated_ to the _completed_.

## Features
1. Create and Manage your orders easily
2. See Orders Reports and its Customers
3. Send notifications within order lifecycle
4. Fire events within order lifecycle

You can start from the [issues page](https://github.com/mgamal92/orders-laravel/issues) to work on the feature which you prefer.

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
$updatedOrder = Order::update($id, $updatedData);
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

