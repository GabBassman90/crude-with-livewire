<div class="flex justify-center items-center h-screen bg-gray-100">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
        <div class="mb-4">
            <div class="font-bold text-xl mb-2">ID: {{ $customer->id }}</div>
        </div>
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Nome:</label>
            <div class="mt-1">
                <span class="block s px-3 py-2 border border-gray-300 rounded-md shadow-sm">{{ $customer->name }}</span>
            </div>
        </div>
        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
            <div class="mt-1">
                <span
                    class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm">{{ $customer->email }}</span>
            </div>
        </div>
    </
div>
</div>