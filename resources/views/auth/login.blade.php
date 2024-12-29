<x-layout>
    <x-slot:heading>
        Log In
    </x-slot:heading>
    <h2 class="font-bold text-lg"></h2>
<form method="POST" action="/login">
    @csrf
    <div class="space-y-12">
      <div class="border-b border-gray-900/10 pb-12">
        <div class=" grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <x-form-field>
            <x-form-lable for="email">Email</x-form-lable>
            <div class="mt-2">
                <x-form-input type="email" name="email" id="email" value="{{ old('email') }}" placeholder="tanah@gmail.com" required></x-form-input>
                <x-form-error name="email"></x-form-error>
            </div>
          </x-form-field>

          <x-form-field>
            <x-form-lable for="password">Password</x-form-lable>
            <div class="mt-2">
                <x-form-input type="password" name="password" id="password" placeholder="password" required></x-form-input>
                <x-form-error name="password"></x-form-error>
            </div>
          </x-form-field>

        </div>
      </div>
    </div>

    <div class="mt-6 flex items-center justify-end gap-x-6">
      <a href="/" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
      <x-form-button>Log In</x-form-button>
    </div>
  </form>

</x-layout>


