<div>
    <form wire:submit.prevent="registerNewUser" id="register-form">
        <div wire:ignore.self class="row">
            <div class="col-md-12 mb-2">
                <label for="basic-url" class="form-label">Nombre (s)</label>

                <div class="input-group">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus wire:model="name">
                </div>

                @error('name')
                    <div class="form-text text-light text-light">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6 mb-2">
                <label for="basic-url" class="form-label">Apellido paterno</label>

                <div class="input-group">
                    <input id="lastnameOne" type="text" class="form-control @error('lastnameOne') is-invalid @enderror" name="lastnameOne" value="{{ old('lastnameOne') }}" autocomplete="lastnameOne" autofocus wire:model="lastnameOne">
                </div>

                @error('lastnameOne')
                    <div class="form-text text-light">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6 mb-2">
                <label for="basic-url" class="form-label">Apellido materno</label>

                <div class="input-group">
                    <input id="lastnameTwo" type="text" class="form-control @error('lastnameTwo') is-invalid @enderror" name="lastnameTwo" value="{{ old('lastnameTwo') }}" autocomplete="lastnameTwo" autofocus wire:model="lastnameTwo">
                </div>

                @error('lastnameTwo')
                    <div class="form-text text-light">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-4 mb-2">
                <label for="basic-url" class="form-label">Género</label>

                <div class="input-group">
                    <select class="form-select @error('gender') is-invalid @enderror" aria-label="Default select example" id="gender" name="gender" wire:model="gender">
                        <option selected>Selecciona una opción</option>

                        @foreach($genders as $gender)
                            <option value="{{ $gender->ge_id }}">{{ $gender->ge_name }}</option>
                        @endforeach
                    </select>
                </div>

                @error('gender')
                    <div class="form-text text-light">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-4 mb-2">
                <label for="basic-url" class="form-label">Edad</label>

                <div class="input-group">
                    <input id="age" type="number" class="form-control @error('age') is-invalid @enderror" name="age" value="{{ old('age') }}" autocomplete="age" autofocus wire:model="age">
                </div>

                @error('age')
                    <div class="form-text text-light">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-4 mb-2">
                <label for="basic-url" class="form-label">Estado civíl</label>

                <div class="input-group">
                    <select class="form-select @error('maritalStatus') is-invalid @enderror" aria-label="Default select example" id="maritalStatus" name="maritalStatus" wire:model="maritalStatus">
                        <option selected>Seleciona una opción</option>

                        @foreach($maritals as $marital)
                            <option value="{{ $marital->ms_id }}">{{ $marital->ms_name }}</option>
                        @endforeach
                    </select>
                </div>

                @error('maritalStatus')
                    <div class="form-text text-light">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6 mb-2">
                <label for="basic-url" class="form-label">Nivel de ínteres</label>

                <div class="input-group">
                    <select class="form-select @error('scholarship') is-invalid @enderror" aria-label="Default select example" id="scholarship" name="scholarship" wire:model="scholarship" wire:change="careersCollections">
                        <option selected>Seleciona una opción</option>

                        @foreach($scholarships as $scholarship)
                            <option value="{{ $scholarship->sc_id }}">{{ $scholarship->sc_name }}</option>
                        @endforeach
                    </select>
                </div>

                @error('scholarship')
                    <div class="form-text text-light">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6 mb-2">
                <label for="basic-url" class="form-label">Carreras disponibles</label>

                <div class="input-group">
                    <select class="form-select @error('career') is-invalid @enderror" aria-label="Default select example" id="career" name="career" wire:model="career">
                        <option selected>Seleciona una opción</option>

                        @if(count($careers) != 0)
                            @foreach($careers as $career)
                                <option value="{{ $career->ca_id }}">{{ $career->ca_name }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>

                @error('career')
                    <div class="form-text text-light">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6 mb-2">
                <label for="basic-url" class="form-label">Correo electrónico</label>

                <div class="input-group">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" wire:model="email">
                </div>

                @error('email')
                    <div class="form-text text-light">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6 mb-2">
                <label for="basic-url" class="form-label">Contraseña</label>

                <div class="input-group">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password" wire:model="password">
                </div>

                @error('password')
                    <div class="form-text text-light">{{ $message }}</div>
                @enderror
            </div>

            <div class="row mt-3">
                <div class="col-md-12 text-center">
                    <a href="{{ route('login') }}" class="btn btn-options">
                        Iniciar sesión
                    </a>

                    <button type="submit" class="btn btn-options">
                        Registrarse
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>
