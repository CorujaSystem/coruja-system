<div class="d-flex justify-content-center">
    <div class="modal-dialog" style="position: absolute; top: 20%; width: 60vw;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cadastre um aluno</h5>
                <button wire:click="$emit('closeModal')" type="button" class="btn-close" aria-label="Close"></button>
            </div>
            <form id="addStudent" wire:submit.prevent="saveStudent">
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
                        <!-- <p class="col-3">Sexo:</p> -->
                        <label for="gender" class="col-3">Sexo:</label>
                        <select wire:model="gender" name="gender" id="gender" form="addStudent" class="form-select">
                            <option selected>Escolha uma opção</option>

                            <option value="masculino">M</option>
                            <option value="feminino">F</option>

                        </select>
                        @error('gender') <span class="error">{{ $message }}</span> @enderror

                    </div>

                    <div class="d-flex mt-1">
                        <p class="col-3">Série:</p>

                        <select wire:model="grade" name="grade" id="grade" form="addStudent" class="form-select">
                            <option selected>Escolha uma opção</option>
                            <option value="1º ano">1º ano</option>
                            <option value="2º ano">2º ano</option>
                            <option value="3º ano">3º ano</option>
                            <option value="4º ano">4º ano</option>
                            <option value="5º ano">5º ano</option>
                        </select>
                        @error('grade') <span class="error">{{ $message }}</span> @enderror
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
</div>