<div class="w-1/5 bg-gray-800 text-white flex flex-col">
    <div class="p-6">
        <h2 class="text-xl font-bold mb-6 tracking-wide uppercase">Admin</h2>
        <nav>
            <ul>
                <li class="mb-4">
                    <a href="{{ route('admin.dashboard') }}" class="hover:text-gray-300 flex items-center space-x-2">
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="mb-4">
                    <a href="{{route('admin.users')}}" class="hover:text-gray-300 flex items-center space-x-2">
                        <span>User Management</span>
                    </a>
                </li>
                <li class="mb-4">
                    <a href="{{route('admin.events')}}" class="hover:text-gray-300 flex items-center space-x-2">
                        <span>Event Management</span>
                    </a>
                </li>
                <li class="mb-4">
                    <a href="{{route('admin.schedules')}}" class="hover:text-gray-300 flex items-center space-x-2">
                        <span>Schedule Management</span>
                    </a>
                </li>
                <li class="mt-8">
                    <form action="{{ route('logout') }}" method="POST" class="inline">
                        @csrf
                        <button type="submit" class="hover:text-gray-300 flex items-center space-x-2">
                            <span>Logout</span>
                        </button>
                    </form>
                </li>
            </ul>
        </nav>
    </div>
</div>