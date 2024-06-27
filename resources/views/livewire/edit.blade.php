<form wire:submit.prevent="updateUser">
    <input wire:model="name" type="text" placeholder="Nome">
    <div>
        @error('name')
        <span>{{ $message }}</span>
        @enderror
    </div>
    <input wire:model="email" type="text" placeholder="Email">
    <div>
        @error('email')
        <span>{{ $message }}</span>
        @enderror
    </div>
    <button type="submit">Salva</button>
</form>