<x-layout>
    <x-slot:heading>
        Create Job
    </x-slot:heading>
    <h2 class="font-bold text-lg"></h2>
<form method="POST" action="/jobs">
    @csrf
    <div class="space-y-12">
      <div class="border-b border-gray-900/10 pb-12">
        <h2 class="text-base/7 font-semibold text-gray-900">Create a new Job</h2>
        <p class="mt-1 text-sm/6 text-gray-600">We just need a handful of information from you.</p>

        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <x-form-field>
            <x-form-lable for="title">Title</x-form-lable>
            <div class="mt-2">
              <x-form-input name="title" id="title" placeholder="CEO" required></x-form-input>
              <x-form-error name="title"></x-form-error>
            </div>
          </x-form-field>
          <x-form-field>
            <x-form-lable for="salary">Salary</x-form-lable>
            <div class="mt-2">
                <x-form-input name="salary" id="salary" placeholder="$50,00 per year" required></x-form-input>
                <x-form-error name="salary"></x-form-error>
            </div>
          </x-form-field>
        </div>
      </div>
    </div>

    <div class="mt-6 flex items-center justify-end gap-x-6">
      <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
      <x-form-button>Save</x-form-button>
    </div>
  </form>

</x-layout>


