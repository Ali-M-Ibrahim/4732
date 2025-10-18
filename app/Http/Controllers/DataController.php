<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Credential;
use App\Models\Customer;
use App\Models\Service;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index(){

        // SELECT * FROM CUSTOMERS WHERE ID=2
        $data= Customer::find(2);
        $relatedCredentials = $data->getCredential;
        $relatedAccounts = $data->getAccounts;
        $relatedServices = $data->getServices;

        $creds = Credential::find(2);
        $customer = $creds->getCustomer;

        $account = Account::find(1);
        $relatedCustomer = $account->getCustomer;

        $service2 = Service::find(1);
        $relat = $service2->getCustomers;
        return $relat;
    }
}
