<div class="flex justify-center items-center h-screen bg-gray-100">
    <form wire:submit.prevent="updateUser" class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Nome</label>
            <input wire:model="name" id="name" type="text" placeholder="Nome"
                class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <div>
                @error('name')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input wire:model="email" id="email" type="text" placeholder="Email"
                class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <div>
                @error('email')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <button type="submit"
            class="w-full bg-indigo-500 text-white px-4 py-2 rounded-md shadow-sm hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Salva
        </button>
    </form>
</div>