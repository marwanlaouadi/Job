<x-app-layout>
    <x-slot name="header">
       
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Admin Panel
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex">
            <div class="w-1/4 p-4 bg-gray-100">
                <h3 class="text-lg font-semibold mb-4">Dashboard</h3>
                <ul>
                    <li><a href="admin/newjob">New Job</a></li>
                    <li><a href="/admin/joblist">Job List</a></li>
                    <li><a href="#">View Resume</a></li>
                    <li><a href="#">Contact List</a></li>
                </ul>
            </div>
           
                <div class="flex justify-between">
                    <div class="w-1/4 p-4 bg-blue-100">
                        <h3 class="text-lg font-semibold mb-2">Total Users</h3>
                        <p class="text-3xl font-bold">500</p>
                    </div>
                    <div class="w-1/4 p-4 bg-green-200 rounded-lg">
                        <h3 class="text-lg font-semibold mb-2">Total Jobs</h3>
                        <p class="text-3xl font-bold">250</p>
                    </div>
                    <div class="w-1/4 p-4 bg-yellow-200 rounded-lg">
                        <h3 class="text-lg font-semibold mb-2">Applied Jobs</h3>
                        <p class="text-3xl font-bold">350</p>
                    </div>
                    <div class="w-1/4 p-4 bg-red-200 rounded-lg">
                        <h3 class="text-lg font-semibold mb-2">Contacted Users</h3>
                        <p class="text-3xl font-bold">150</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
