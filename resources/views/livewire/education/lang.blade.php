<div>
    @if (session()->has('error'))
    <script>
        Toast.fire({
            icon: 'error',
            title: "{{ session("error") }}"
        }
        )
    </script>
    @endif
    @if (session()->has('success'))
    <script>
        Toast.fire({
            icon: 'success',
            title: "{{ session("success") }}"
        }
        )
    </script>
    {{ Session::forget("success")}}
    @endif

    <div x-data="languageListen()" class="profile--educacion--show py-4 bg-white  rounded-lg shadow-lg">
        <h2 class="text-xl font-semibold ml-4 ">Lenguajes</h2>
        <div class="options flex items-center ml-4 mb-2">
            <select wire:model="idiomaId" name="language" id="language" placeholder="language"
                class="w-1/2 focus:outline-none focus:shadow-outline border border-gray-300 rounded-md py-2 mb-1 text-sm mr-1">
                <option value="-1"> Selecciona un lenguaje </option>
                @foreach ($idiomas as $key => $idioma)
                <option value=" {{ $key }} "> {{ $idioma }} </option>
                @endforeach
            </select>
            <select wire:model="nivelId" name="nivel" id="nivel" placeholder="nivel"
                class="w-1/3 focus:outline-none focus:shadow-outline border border-gray-300 rounded-md py-2 mb-1 text-sm ml-1">
                <option value="-1 "> Selecciona nivel </option>
                @foreach ($niveles as $key => $nivel)
                <option value=" {{ $nivel }}  "> {{ $nivel }} </option>
                @endforeach
            </select>
            <button {{ $isDisbledBtn }} wire:click="addLanguage"
                class="btn ml-2 focus:outline-none text-gray-800 hover:text-gyay-600" type="submit">

                <svg class="fill-current  w-6 h-6" viewBox="0 0 24 24">
                    <path
                        d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm7 14h-5v5h-4v-5H5v-4h5V5h4v5h5v4z" />
                </svg>
            </button>

        </div>


        <table class="table-fixed w-full my-2">
            <thead class="mx-2">
                <tr class="text-sm text-left bg-yellow-100 border-gray-300 border-t-2 border-b-2">
                    <th class="w-2/5 py-2 pl-4"> Lenguaje</th>
                    <th class="w-2/5 py-2"> Nivel </th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($expertLanguages as $key => $languages)
                <tr class="text-sm border-gray-300  border-b-2">
                    <td class="py-2 pl-4">{{$languages['language']}}</td>
                    <td class="py-2 ">{{$languages['level']}}</td>
                    <td class="py-2">
                        {{-- <p class="p--eliminar" x-on:click="showMsg({{$languages}})">picale</p> --}}
                        <button x-on:click="deleteItem({{$languages}})" class=" btn btn--eliminar">
                            <svg class="text-red-500 h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24">
                                <path
                                    d="M3 8v16h18v-16h-18zm5 12c0 .552-.448 1-1 1s-1-.448-1-1v-8c0-.552.448-1 1-1s1 .448 1 1v8zm5 0c0 .552-.448 1-1 1s-1-.448-1-1v-8c0-.552.448-1 1-1s1 .448 1 1v8zm5 0c0 .552-.448 1-1 1s-1-.448-1-1v-8c0-.552.448-1 1-1s1 .448 1 1v8zm4-15.375l-.409 1.958-19.591-4.099.409-1.958 5.528 1.099c.881.185 1.82-.742 2.004-1.625l5.204 1.086c-.184.882.307 2.107 1.189 2.291l5.666 1.248z" />
                            </svg>
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>

@push('modals')

@endpush