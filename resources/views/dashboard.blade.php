<x-app-layout>
    <x-slot name="header">
    <nav>
    
    <a href="#">Jobs</a> |
    <a href="#">Resumes</a> |
    <a href="#">Contact List</a> |
    <a href="#">Logout</a>
</nav>
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
           

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                    <!-- Additional content for your dashboard goes here -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
