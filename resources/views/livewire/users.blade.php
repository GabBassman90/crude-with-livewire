<div class="w-full h-full flex items-center justify-center p-4">
    <div class="overflow-x-auto w-full max-w-4xl">
        <div class="mb-4 flex">
            <button wire:navigate href="/create"
                class="bg-blue-500 text-white px-4 py-2 rounded-md shadow hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                Create User
            </button>
        </div>
        <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow">
            <thead class="bg-gray-100">
                <tr>
                    <th class="py-2 px-4 border-b border-gray-200 text-left">Id</th>
                    <th class="py-2 px-4 border-b border-gray-200 text-left">Nome</th>
                    <th class="py-2 px-4 border-b border-gray-200 text-left">Email</th>
                    <th class="py-2 px-4 border-b border-gray-200 text-left">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($customers as $customer)
                <tr class="even:bg-gray-50 hover:bg-gray-100">
                    <td class="py-2 px-4 border-b border-gray-200"> {{$customer->id}} </td>
                    <td class="py-2 px-4 border-b border-gray-200"> {{$customer->name}} </td>
                    <td class="py-2 px-4 border-b border-gray-200"> {{$customer->email}} </td>
                    <td class="py-2 px-4 border-b border-gray-200 flex space-x-2">
                        <button wire:navigate href="/user/{{$customer->id}}"
                            class="bg-green-500 text-white px-4 py-1 rounded-md shadow hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">
                            Visualizza
                        </button>
                        <button wire:navigate href="/{{$customer->id}}/edit"
                            class="bg-yellow-500 text-white px-4 py-1 rounded-md shadow hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-offset-2">
                            Modifica
                        </button>
                        <button wire:click="delete({{ $customer->id }})"
                            class="bg-red-500 text-white px-4 py-1 rounded-md shadow hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">
                            Elimina
                        </button>
                    </td>
                </tr>



      
          @endforeach
            </tbody>
        </table>
    </div>
</div>