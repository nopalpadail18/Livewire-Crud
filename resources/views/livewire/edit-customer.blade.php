<div>
    <h1 class="text-3xl text-center mt-10 font-bold">
        Edit Customer
    </h1>
    <div class="flex items-center justify-center p-12">
        <div class="mx-auto w-full max-w-[550px]">
          <form wire:submit='UpdateCustomer'>
            <div class="mb-5">
              <label
                for="name"
                class="mb-3 block text-base font-medium text-[#07074D]"
              >
                Full Name
              </label>
              <input
                type="text"
                name="nama_lengkap"
                id="name"
                wire:model="nama_lengkap"
                placeholder="Full Name"
                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
              />
            </div>
            <div class="mb-5">
              <label
                for="email"
                class="mb-3 block text-base font-medium text-[#07074D]"
              >
                Email Address
              </label>
              <input
                type="email"
                name="email"
                wire:model="email"
                id="email"
                placeholder="example@domain.com"
                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
              />
            </div>
            <div class="mb-5">
              <label
                for=""
                class="mb-3 block text-base font-medium text-[#07074D]"
              >
                Nomor Hp
              </label>
              <input
                type="number"
                name="no_hp"
                wire:model="no_hp"
                id="subject"
                placeholder="Enter your subject"
                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
              />
            </div>
            <div class="flex justify-between">
              <button
                class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-base font-semibold text-white outline-none"
              >
                Submit
              </button>

              <a wire:navigate="Customer" href="{{ route('customers') }}" class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-base font-semibold text-white outline-none">Kembali</a>
            </div>
          </form>
        </div>
      </div>
</div>
