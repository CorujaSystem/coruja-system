    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cadastre um aluno</h5>
                <button wire:click="$emit('closeModal')" type="button" class="btn-close" aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="saveStudent">
                <div class="modal-body d-flex flex-column justify-content-around">
                    <div class="d-flex mt-1">
                        <p class="col-3">Nome:</p>
                        <input type="text" wire:model="name" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                        @error('name') <span class="error">{{ $message }}</span> @enderror
                    </div>

                    <div class="d-flex mt-1">
                        <p class="col-3">Telefone:</p>
                        <input wire:model="tel" type="number" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                        @error('tel') <span class="error">{{ $message }}</span> @enderror
                    </div>

                    <div class="d-flex mt-1">
                        <p class="col-3">Sexo:</p>
                        <input type="text" wire:model="gender" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                        @error('gender') <span class="error">{{ $message }}</span> @enderror

                    </div>

                    <div class="d-flex mt-1">
                        <p class="col-3">Responsável:</p>

                        <input type="text" wire:model="responsible" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                        @error('responsible') <span class="error">{{ $message }}</span> @enderror
                    </div>

                    <div class="d-flex mt-1">
                        <p class="col-3">Observação:</p>

                        <input type="text" wire:model="observation" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                    </div>

                </div>
                <div class="modal-footer">

                    <button wire:click="$emit('closeModal')" type="button" class="btn btn-secondary">Fechar</button>
                    <button wire:submit="saveStudent" class="btn btn-primary">Salvar</button>
                </div>

            </form>
        </div>
    </div>