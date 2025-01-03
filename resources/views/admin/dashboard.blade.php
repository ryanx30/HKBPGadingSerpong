@extends('layouts.admin-layout')

@section('title', 'Admin Dashboard')

@section('content')
    <h1 class="text-3xl font-bold mb-6">Dashboard</h1>

    {{-- Statistic Cards --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-6">
        {{-- Kotak Jumlah Jemaat --}}
        <div class="p-6 bg-gray-100 rounded-lg shadow-md text-center">
            <h2 class="text-4xl font-bold text-gray-800">
                {{ $totalUsers ?? 'Tidak Ada Data' }}
            </h2>
            <p class="text-gray-600 mt-2">Jumlah Jemaat</p>
        </div>

        {{-- Kotak Jumlah Event --}}
        <div class="p-6 bg-gray-100 rounded-lg shadow-md text-center">
            <h2 class="text-4xl font-bold text-gray-800">
                {{ $totalEvents ?? 'Tidak Ada Data' }}
            </h2>
            <p class="text-gray-600 mt-2">Jumlah Event</p>
        </div>
    </div>

    {{-- Jemaat Table --}}
    <div class="mt-8 bg-white rounded-lg shadow-md p-6">
        <h2 class="text-2xl font-bold mb-4">Jemaat</h2>

        {{-- Search and Filter --}}
        <div class="flex justify-between items-center mb-4">
            <input 
                type="text" 
                placeholder="Search Jemaat" 
                class="border border-gray-300 rounded-lg p-2 w-1/3 focus:outline-none focus:ring-2 focus:ring-gray-400"
            />
            <button class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg shadow hover:bg-gray-200">
                Filter
            </button>
        </div>

        {{-- Table --}}
        <table class="table-auto w-full border-collapse bg-white">
            <thead>
                <tr class="bg-gray-100">
                    <th class="border border-gray-300 p-4 text-left font-semibold">Jemaat</th>
                    <th class="border border-gray-300 p-4 text-left font-semibold">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 p-4 flex items-center">
                            <img src="{{ $user->profile_photo }}" alt="Profile" class="w-10 h-10 rounded-full mr-4">
                            {{ $user->name }}
                        </td>
                        <td class="border border-gray-300 p-4">
                            @if ($user->is_active)
                                <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full">Aktif</span>
                            @else
                                <span class="px-3 py-1 bg-yellow-100 text-yellow-700 rounded-full">Nonaktif</span>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{-- Pagination --}}
        <div class="mt-6">
            {{ $users->links() }}
        </div>
    </div>
@endsection
