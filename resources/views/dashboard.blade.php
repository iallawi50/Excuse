<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('الرئيسية') }}
        </h2>
    </x-slot> --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-around mt-14">
                <a href="{{route("excuse.create")}}" class="bg-white rounded-lg mt-10 w-96 h-96 mx-auto flex flex-col justify-center items-center">
                    <i class="fa-solid fa-user-plus fa-10x text-teal-700"></i>
                    <span class="text-2xl mt-4 text-teal-700 font-bold">إضافة عذر جديد</span>
                </a>
                <a href="{{route("excuse.index")}}" class="bg-white rounded-lg mt-10 w-96 h-96 mx-auto flex flex-col justify-center items-center">
                    <i class="fa-solid fa-users fa-10x text-teal-700"></i>
                    <span class="text-2xl mt-4 text-teal-700 font-bold">عرض جميع الاعذار</span>
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
