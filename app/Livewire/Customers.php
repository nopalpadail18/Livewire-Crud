<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Customer;

class Customers extends Component
{
    public $customers=[];

    public function mount(){
        $this->customers=Customer::all();
    }
    public function render()
    {
        return view('livewire.customers');
    }

    public function show($customers){
        $this->customers=Customer::find($customers);
        return view('livewire.show',compact('customers'));
    }

    public function deleteCustomer(Customer $customers)
    {
        $customers->delete();
        flash('succes','Customer Deleted');
        return $this->redirect('/customers', navigate:true);
    }
}
