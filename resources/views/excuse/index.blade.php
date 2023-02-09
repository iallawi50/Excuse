<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('الرئيسية') }}
        </h2>
    </x-slot> --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @auth
                <header class="flex justify-between mb-10">
                    <div class="text-white ">
                        <a href="../dashboard">الرئيسية</a> / <span class="text-gray-300">عرض جميع الاعذار</span>
                    </div>


     

                </header>
            @endauth

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-center text-white bg-teal-500">
                    <thead class="text-white-700 uppercase">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                أسم الطالب
                            </th>
                            <th scope="col" class="px-6 py-3">
                                الرقم التدريبي
                            </th>
                            <th scope="col" class="px-6 py-3">
                                تاريخ الغياب
                            </th>
                            <th scope="col" class="px-6 py-3">
                                الصادر
                            </th>
                            <th scope="col" class="px-6 py-3">

                            </th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($excuses as $item)
                            <tr class="bg-white border-b text-black font-bold">
                                <td class="px-6 py-4">
                                    {{ $item->name }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $item->stdID }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $item->date }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $item->by }}
                                </td>
                                <td class="px-6 py-4">
                                    @auth


                                        <a href="excuse/{{ $item->id }}/edit" class="text-lg text-orange-700 hover:underline"><i
                                                class="fa-solid fa-pen-to-square"></i></a>
                                    @endauth
                                    <a href="excuse/{{ $item->id }}"
                                        class="text-lg text-green-600 hover:underline mx-7"><i
                                            class="fa-solid fa-eye"></i></a>
                                    @auth

                                   <form action="/excuse/{{ $item->id }}" class="inline" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-lg text-red-600 hover:underline ml-3"><i
                                                class="fa-regular fa-trash-can"></i></button>
                                    </form>
 @endauth
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>


        </div>
    </div>

</x-app-layout>
