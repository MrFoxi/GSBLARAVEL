<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Page Rapport') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="nouveaurapport">Nouveau Rapport</a>
                    <br>
                        <div class="flex flex-col">
                            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="inline-block py-2 min-w-full sm:px-6 lg:px-8">
                                    <div class="overflow-hidden shadow-md sm:rounded-lg">
                                        <table class="min-w-full">
                                            <thead class="bg-blue-500 dark:bg-gray-700">
                                                <tr>
                                                    <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                        Praticiens
                                                    </th>
                                                    <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                        Date
                                                    </th>
                                                    <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                        Bilan
                                                    </th>
                                                    <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                        Modif
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($rapports as $info)
                                                <!-- Product 1 -->
                                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                    <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                        {{ $info->PRA_NUM }}
                                                    </td>
                                                    <td class="py-4 px-6 text-sm text-white whitespace-nowrap dark:text-gray-400">
                                                        {{ $info->RAP_DATE }}
                                                    </td>
                                                    <td class="py-4 px-6 text-sm text-white whitespace-nowrap dark:text-gray-400">
                                                        {{ $info->RAP_BILAN }}
                                                    </td>
                                                    <td class="py-4 px-6 text-sm text-white font-medium text-right whitespace-nowrap">
                                                        {{ $info->RAP_MOTIF }}                                
                                                    </td>
                                                </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>