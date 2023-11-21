<x-app-layout>
    <x-slot name="header">
        <nav>
            <a href="#">Jobs</a> |
            <a href="#">Resumes</a> |
            <a href="#">Contact List</a> |
            <a href="#">Logout</a>
        </nav>
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            New Job
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="/submit-new-job" method="POST">
                @csrf <!-- إضافة حماية CSRF - يجب أن يكون Laravel -->
                <div>
                    <label for="title" class="block">Job Title:</label>
                    <input type="text" id="title" name="title" class="w-full rounded-lg border-gray-300 p-2 mb-4">
                </div>
                <div>
                    <label for="description" class="block">Job Description:</label>
                    <textarea id="description" name="description" rows="4" class="w-full rounded-lg border-gray-300 p-2 mb-4"></textarea>
                </div>
                <div>
                    <label for="location" class="block">Location:</label>
                    <input type="text" id="location" name="location" class="w-full rounded-lg border-gray-300 p-2 mb-4">
                </div>
                <div>
                    <label for="salary" class="block">Salary:</label>
                    <input type="text" id="salary" name="salary" class="w-full rounded-lg border-gray-300 p-2 mb-4">
                </div>
                <div>
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit Job</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
