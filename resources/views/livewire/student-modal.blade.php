<div class="modal">
    <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button wire:click="$emit('closeModal')" type="button" class="btn-close" aria-label="Close"></button>
                </div>
                <form wire:submit.prevent="saveStudent">
                    <div class="modal-body d-flex flex-column align-items-center">
                        <input type="text" wire:model="name">
                        @error('name') <span class="error">{{ $message }}</span> @enderror

                        <input type="text" wire:model="tel">
                        @error('email') <span class="error">{{ $message }}</span> @enderror

                        <input type="text" wire:model="gender">
                        @error('gender') <span class="error">{{ $message }}</span> @enderror

                        <input type="text" wire:model="responsible">
                        @error('responsible') <span class="error">{{ $message }}</span> @enderror

                        <input type="text" wire:model="observation">

                    </div>
                    <div class="modal-footer">

                        <button wire:click="$emit('closeModal')" type="button" class="btn btn-secondary">Fechar</button>
                        <button wire:submit="saveStudent" class="btn btn-primary">Salvar</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
