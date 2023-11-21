<x-app-layout>
    <x-slot name="header">
        <nav>
            <a href="#">Jobs</a> |
            <a href="#">Resumes</a> |
            <a href="#">Contact List</a> |
            <a href="#">Logout</a>
        </nav>
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Job List
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 gap-4">
                <div class="bg-gray-100 p-4 rounded-lg mb-4">
                    <h3 class="text-lg font-semibold mb-2">Job Title 1</h3>
                    <p>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio.</p>
                    <p>Location: New York, USA</p>
                    <p>Salary: $50,000 - $60,000</p>
                </div>
                <div class="bg-gray-100 p-4 rounded-lg mb-4">
                    <h3 class="text-lg font-semibold mb-2">Job Title 2</h3>
                    <p>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio.</p>
                    <p>Location: London, UK</p>
                    <p>Salary: £40,000 - £50,000</p>
                </div>
                
            </div>
        </div>
    </div>
</x-app-layout>
