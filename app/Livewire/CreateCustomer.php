<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Customer;
use Spatie\Flash\Flash;


class CreateCustomer extends Component
{
    public $nama_lengkap='';
    public $email='';
    public $no_hp='';
    public function render()
    {
        $title = 'Create Customer';
        return view('livewire.create-customer',compact('title'));
    }

    public function simpan(){
        $validate=$this->validate([
            'nama_lengkap'=>'required|max:255',
            'email'=>'required|email|unique:customers|max:255',
            'no_hp'=>'required|unique:customers',
        ]);

        Customer::create($validate);
        $this->reset();

        flash('Customer Created');
        return back();

    }
}
