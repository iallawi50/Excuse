<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('الرئيسية') }}
        </h2>
    </x-slot> --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white rounded-lg h-full p-5">

                <form action="{{ route('excuse.store') }}" method="post">
                    @csrf
                    <div class="flex flex-col mb-5">
                        <input type="text" placeholder="اسم المتدرب" name="name" value="{{ old("name")}}"
                            class="border-t-0 text-lg border-b-0 border-l-0 border-r-4 border-teal-700 focus:border-teal-500 focus:ring-0 mb-3">
                        @error('name')
                            <p class="text-sm border-r-2 border-red-500 pr-3 text-red-500">الاسم
                                مطلوب</p>
                        @enderror
                    </div>
                    <div class="flex flex-col mb-5">
                        <input type="text" placeholder="الرقم التدريبي" name="stdID" value="{{ old("stdID")}}"
                            class="border-t-0 text-lg border-b-0 border-l-0 border-r-4 border-teal-700 focus:border-teal-500 focus:ring-0 mb-3">
                        @error('stdID')
                            <p class="text-sm border-r-2 border-red-500 pr-3 text-red-500">الرقم التدريبي مطلوب</p>
                        @enderror
                    </div>
                    <div class="flex flex-col mb-5">

                        <input type="text" placeholder="التاريخ dd-mm-yyyy" name="date" value="{{ old("date")}}"
                            class=" border-t-0 text-lg border-b-0 border-l-0 border-r-4 border-teal-700 focus:border-teal-500 focus:ring-0 mb-3">
                        @error('date')
                            <p class="text-sm border-r-2 border-red-500 pr-3 text-red-500">التاريخ مطلوب</p>
                        @enderror
                    </div>
                    <div class="flex flex-col mb-5">
                        <textarea type="text" placeholder="السبب" name="details" value="{{ old("details")}}"
                            class="border-t-0 h-48 text-lg border-b-0 border-l-0 border-r-4 border-teal-700 focus:border-teal-500 focus:ring-0 mb-3"></textarea>
                        @error('details')
                            <p class="text-sm border-r-2 border-red-500 pr-3 text-red-500">السبب مطلوب</p>
                        @enderror
                    </div>
                    <x-primary-button class="bg-teal-800 hover:bg-teal-700 focus:ring-teal-500 active:bg-teal-500">
                        اضافة
                    </x-primary-button>
                </form>

            </div>

        </div>
    </div>

</x-app-layout>
