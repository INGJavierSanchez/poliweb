<div>
    <!-- Generar Token de API -->
    <x-jet-form-section submit="createApiToken">
        <x-slot name="title">
            {{ __('Crear Token de API') }}
        </x-slot>

        <x-slot name="description">
            {{ __('Los tokens de API permiten que servicios de terceros autentiquen en nuestra aplicación en tu nombre.') }}
        </x-slot>

        <x-slot name="form">
            <!-- Nombre del Token -->
            <div class="col-span-6 sm:col-span-4">
                <x-jet-label for="name" value="{{ __('Nombre del Token') }}" />
                <x-jet-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="createApiTokenForm.name" autofocus />
                <x-jet-input-error for="name" class="mt-2" />
            </div>

            <!-- Permisos del Token -->
            @if (Laravel\Jetstream\Jetstream::hasPermissions())
                <div class="col-span-6">
                    <x-jet-label for="permissions" value="{{ __('Permisos') }}" />

                    <div class="mt-2 grid grid-cols-1 md:grid-cols-2 gap-4">
                        @foreach (Laravel\Jetstream\Jetstream::$permissions as $permission)
                            <label class="flex items-center">
                                <input type="checkbox" class="form-checkbox" value="{{ $permission }}" wire:model.defer="createApiTokenForm.permissions">
                                <span class="ml-2 text-sm text-gray-600">{{ $permission }}</span>
                            </label>
                        @endforeach
                    </div>
                </div>
            @endif
        </x-slot>

        <x-slot name="actions">
            <x-jet-action-message class="mr-3" on="created">
                {{ __('Creado.') }}
            </x-jet-action-message>

            <x-jet-button>
                {{ __('Crear') }}
            </x-jet-button>
        </x-slot>
    </x-jet-form-section>

    @if ($this->user->tokens->isNotEmpty())
        <x-jet-section-border />

        <!-- Administrar Tokens de API -->
        <div class="mt-10 sm:mt-0">
            <x-jet-action-section>
                <x-slot name="title">
                    {{ __('Administrar Tokens de API') }}
                </x-slot>

                <x-slot name="description">
                    {{ __('Puedes eliminar cualquiera de tus tokens existentes si ya no son necesarios.') }}
                </x-slot>

                <!-- Lista de Tokens de API -->
                <x-slot name="content">
                    <div class="space-y-6">
                        @foreach ($this->user->tokens->sortBy('name') as $token)
                            <div class="flex items-center justify-between">
                                <div>
                                    {{ $token->name }}
                                </div>

                                <div class="flex items-center">
                                    @if ($token->last_used_at)
                                        <div class="text-sm text-gray-400">
                                            {{ __('Último uso') }} {{ $token->last_used_at->diffForHumans() }}
                                        </div>
                                    @endif

                                    @if (Laravel\Jetstream\Jetstream::hasPermissions())
                                        <button class="cursor-pointer ml-6 text-sm text-gray-400 underline focus:outline-none" wire:click="manageApiTokenPermissions({{ $token->id }})">
                                            {{ __('Permisos') }}
                                        </button>
                                    @endif

                                    <button class="cursor-pointer ml-6 text-sm text-red-500 focus:outline-none" wire:click="confirmApiTokenDeletion({{ $token->id }})">
                                        {{ __('Eliminar') }}
                                    </button>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </x-slot>
            </x-jet-action-section>
        </div>
    @endif

    <!-- Modal del Valor del Token -->
    <x-jet-dialog-modal wire:model="displayingToken">
        <x-slot name="title">
            {{ __('Token de API') }}
        </x-slot>

        <x-slot name="content">
            <div>
                {{ __('Por favor, copia tu nuevo token de API. Por tu seguridad, no se mostrará nuevamente.') }}
            </div>

            <div class="mt-4 bg-gray-100 px-4 py-2 rounded font-mono text-sm text-gray-500">
                {{ $plainTextToken }}
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$set('displayingToken', false)" wire:loading.attr="disabled">
                {{ __('Cerrar') }}
            </x-jet-secondary-button>
        </x-slot>
    </x-jet-dialog-modal>

    <!-- Modal de Permisos del Token de API -->
    <x-jet-dialog-modal wire:model="managingApiTokenPermissions">
        <x-slot name="title">
            {{ __('Permisos del Token de API') }}
        </x-slot>

        <x-slot name="content">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                @foreach (Laravel\Jetstream\Jetstream::$permissions as $permission)
                    <label class="flex items-center">
                        <input type="checkbox" class="form-checkbox" value="{{ $permission }}" wire:model.defer="updateApiTokenForm.permissions">
                        <span class="ml-2 text-sm text-gray-600">{{ $permission }}</span>
                    </label>
                @endforeach
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$set('managingApiTokenPermissions', false)" wire:loading.attr="disabled">
                {{ __('Cancelar') }}
            </x-jet-secondary-button>

            <x-jet-button class="ml-2" wire:click="updateApiToken" wire:loading.attr="disabled">
                {{ __('Guardar') }}
            </x-jet-button>
        </x-slot>
    </x-jet-dialog-modal>

    <!-- Modal de Confirmación de Eliminación del Token -->
    <x-jet-confirmation-modal wire:model="confirmingApiTokenDeletion">
        <x-slot name="title">
            {{ __('Eliminar Token de API') }}
        </x-slot>

        <x-slot name="content">
            {{ __('¿Estás seguro de que deseas eliminar este token de API?') }}
        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('confirmingApiTokenDeletion')" wire:loading.attr="disabled">
                {{ __('Cancelar') }}
            </x-jet-secondary-button>

            <x-jet-danger-button class="ml-2" wire:click="deleteApiToken" wire:loading.attr="disabled">
                {{ __('Eliminar') }}
            </x-jet-danger-button>
        </x-slot>
    </x-jet-confirmation-modal>
</div>
