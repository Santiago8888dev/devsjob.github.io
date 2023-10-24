<div class="md:w-1/2 space-y-5">
    <form>
        <div>
            <x-input-label for="titulo" :value="__('Titulo')" />
            <x-text-input id="titulo" class="block mt-1 w-full" type="text" name="titulo" :value="old('titulo')"  />
            <x-input-error :messages="$errors->get('titulo')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="salario" :value="__('Salario Mensual ')" />
            <select name="salario" id="salario" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus-ring-opacity-50 w-full">

            </select>
            <x-input-error :messages="$errors->get('salario')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="categoria" :value="__('categoria ')" />
            <select name="categoria" id="categoria" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus-ring-opacity-50 w-full">

            </select>
            <x-input-error :messages="$errors->get('categoria')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="empresa" :value="__('empresa')" />
            <x-text-input id="empresa" class="block mt-1 w-full" type="text" name="titulo" :value="old('empresa')" placeholder="instagram facebook"  />
            <x-input-error :messages="$errors->get('empresa')" class="mt-2"  />
        </div>

        <div>
            <x-input-label for="ultimo_dia" :value="__('ultimo_dia')" />
            <x-text-input id="ultimo_dia" class="block mt-1 w-full" type="date" name="ultimo_dia" :value="old('ultimo_dia')"  />
            <x-input-error :messages="$errors->get('ultimo_dia')" class="mt-2"  />
        </div>
        <div>
            <x-input-label for="descripcion" :value="__('Descripcion')" />
            <textarea name="descripcion" id="descripcion" placeholder="Descripcion general del puesto" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus-ring-opacity-50 w-full h-72">
            </textarea>
        </div>

        <div>
            <x-input-label for="imagen" :value="__('Imagen')" />
            <x-text-input id="imagen" class="block mt-1 w-full" type="file" name="imagen"  />
            <x-input-error :messages="$errors->get('imagen')" class="mt-2"  />
        </div>

        <x-primary-button class="mt-2">
            Crear Vacante
        </x-primary-button>

    </form>
</div>
