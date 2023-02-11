<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('الرئيسية') }}
        </h2>
    </x-slot> --}}

    <div class="py-12">

        <div class=" max-w-7xl mx-auto sm:px-6 lg:px-8">


                <header class="print flex justify-between mb-10">
                    <div class="text-white ">
                        <a href="../">عرض جميع الاعذار</a> / <span class="text-gray-300">{{$excuse->name}}</span>
                    </div>




                </header>
            <div class="print-box bg-white rounded-lg h-full p-5">

                <div class="flex flex-col">
                    <label class="text-lg border-r-4 p-5 border-teal-700 focus:border-teal-500 focus:ring-0 mb-3"><span
                            class="text-teal-600">اسم المتدرب : </span>{{ $excuse->name }}</label>
                </div>

                <div class="flex flex-col">
                    <label class="text-lg border-r-4 p-5 border-teal-700 focus:border-teal-500 focus:ring-0 mb-3"><span
                            class="text-teal-600">الرقم التدريبي : </span>{{ $excuse->stdID }}</label>
                </div>

                <div class="flex flex-col">
                    <label class="text-lg border-r-4 p-5 border-teal-700 focus:border-teal-500 focus:ring-0 mb-3"><span
                            class="text-teal-600">تاريخ الغياب : </span>{{ $excuse->date }}</label>
                </div>

                <div class="flex flex-col">
                    <label class="text-lg border-r-4 p-5 border-teal-700 focus:border-teal-500 focus:ring-0 mb-3"><span
                            class="text-teal-600">السبب :
                        </span>{{ $excuse->details }}</label>
                </div>


                <x-primary-button onclick="window.print()"
                    class=" bg-teal-800 hover:bg-teal-700 focus:ring-teal-500 active:bg-teal-500 print">
                    <i class="ml-2 fa-solid fa-print"></i>
                    طباعة
                </x-primary-button>


            </div>
        </div>
    </div>

</x-app-layout>
