<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Customer;
use Spatie\Flash\Flash;

Flash::levels(['success', 'error']);

class EditCustomer extends Component
{
    public $customer;
    public $nama_lengkap;
    public $email;
    public $no_hp;

    public function mount(Customer $customer){
        $this->customer=$customer;
        $this->nama_lengkap=$customer->nama_lengkap;
        $this->email=$customer->email;
        $this->no_hp=$customer->no_hp;
    }
    public function render()
    {
        return view('livewire.edit-customer');
    }

    public function UpdateCustomer()
    {
        $validate=$this->validate([
            'nama_lengkap'=>'required|max:255',
            'email'=>'required|email|max:255',
            'no_hp'=>'required|max:255',
        ]);

        $this->customer->update($validate);
        flash('succes','Customer Updated');
        return $this->redirect('/customers', navigate:true);
    }
}
