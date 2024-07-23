<div>
    <h1 class="text-3xl text-center mt-10 font-bold">Create Customer Page</h1>

    <div class="flex items-center justify-center p-12">
        <div class="mx-auto w-full max-w-[550px]">
            @if(flash()->message)
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                    <strong>{{ flash()->message }}</strong>
                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                        Success
                    </span>
                </div>
            @endif
            <form wire:submit='simpan'>
                <div class="mb-5">
                    <label for="" class="mb-3 block text-base font-medium text-[#07074D]">
                        Nama Lengkap
                    </label>
                    <input type="text" name="nama_lengkap" id="name" placeholder="Nama Lengkap"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" wire:model="nama_lengkap"/>

                        <div>
                            @error('nama_lengkap')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                </div>
                <div class="mb-5">
                    <label for="" class="mb-3 block text-base font-medium text-[#07074D]">
                        Email Address
                    </label>
                    <input type="email" name="email" id="email" placeholder="example@domain.com"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" wire:model="email"/>

                        <div>
                            @error('email')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                </div>
                <div class="mb-5">
                    <label for="" class="mb-3 block text-base font-medium text-[#07074D]">
                        Nomor Handphone
                    </label>
                    <input type="number" name="no_hp" id="subject" placeholder="Enter your phone number"
                        maxlength="12"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                        wire:model="no_hp"/>

                        <div>
                            @error('no_hp')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                </div>
                <div class="flex justify-between">
                    <button
                        class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-base font-semibold text-white outline-none" type="submit">
                        Submit
                    </button>

                    <a href="{{ route('customers') }}" wire:navigate="Customer" class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-base font-semibold text-white outline-none">Lihat Customer</a>
                </div>
            </form>
        </div>
    </div>
</div>

</div>
