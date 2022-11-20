<?php
namespace App\Services\V1;
use Illuminate\Http\Request;
class CustomerQuery{
    protected $allowedParams =[

        'type' =>['eq'],
        'email'=>['eq'],
        'address'=>['eq'],
        'city'=>['eq'],
        'state'=>['eq'],
        'postalCode' =>['eq','gt','lt']
    ];

}
