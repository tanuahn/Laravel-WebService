<?php
/**
 * Created by PhpStorm.
 * User: tuan
 * Date: 05/07/19
 * Time: 11:27
 */

namespace App\Http\Repositiries\Impl;


use App\Customer;
use App\Http\Repositiries\CustomerRepository;
use App\Http\Repositiries\Eloquent\EloquentRepository;

class CustomerRepositoryImpl extends EloquentRepository implements CustomerRepository
{
    public function getModel()
    {
        $model = Customer::class;
        return $model;
    }
}