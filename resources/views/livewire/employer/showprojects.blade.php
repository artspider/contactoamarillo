<div>
  <x-slot name="header">
    <h2 class="font-semibold text-sm xl:text-base text-gray-800 leading-tight">
      {{ __('Proyectos') }}
    </h2>
  </x-slot>
  <div x-cloak x-data="{tab:'1'}">
    <div class="flex pt-12 profile__body max-w-7xl  mx-auto sm:px-6 mb-0">
      <div x-on:click="tab='1'" :class="{ 'bg-gray-800 text-white': tab == '1' }"
        class=" border border-gray-500 p-4 cursor-pointer">
        Proyectos</div>
      <div x-on:click="tab='2'" :class="{ 'bg-gray-800 text-white': tab == '2' }"
        class=" border border-gray-500 p-4 cursor-pointer">Ordenes
      </div>
    </div>

    <div x-show="tab=='1'">
      @if (count($projects) > 0)
      <div class="py-0">
        <x-contacto-amarillo.contacto-container>
          <div class="col-span-8 flex flex-col">
            <div class="my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
              <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                  <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                      <tr>
                        <th scope="col"
                          class="pl-6  py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                          Proyecto
                        </th>
                        <th scope="col"
                          class="px-2 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                          Tiempo de entrega
                        </th>
                        <th scope="col"
                          class="px-2 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                          Presupuesto
                        </th>

                        <th scope="col"
                          class="px-2 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                          Status
                        </th>

                        <th scope="col" class="relative px-6 py-3">
                          <span class="sr-only">Edit</span>
                        </th>
                      </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                      @forelse ($projects as $project)
                      <tr>
                        <td class="px-2 py-4 whitespace-nowrap">
                          <div class="ml-4">
                            <div class="text-sm font-medium text-gray-900">

                              {{\Illuminate\Support\Str::limit($project->description, 35)}}
                            </div>
                            <div class="text-sm text-gray-500">

                              {{ $project->subcategoria->name }}

                            </div>
                          </div>
                        </td>
                        <td class="px-3 py-4 whitespace-nowrap">
                          <div class="text-sm text-gray-900">
                            {{ $project->delivery_time }}
                          </div>
                        </td>
                        <td class="px-3 py-4 whitespace-nowrap">
                          <div class="text-sm text-gray-900">
                            ${{ $project->budget }}
                          </div>
                        </td>
                        <td class="px-3 py-4 whitespace-nowrap">
                          <div class="text-sm text-gray-900">
                            {{ $project->status }}
                          </div>
                        </td>
                        <td class="flex justify-evenly px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                          <a href="#" onclick="confirmAction('deleteService', {{ $project->id }});">
                            <svg class="w-6 h-6 fill-current text-red-500 hover:text-red-600"
                              xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                              <path
                                d="M3 8v16h18v-16h-18zm5 12c0 .552-.448 1-1 1s-1-.448-1-1v-8c0-.552.448-1 1-1s1 .448 1 1v8zm5 0c0 .552-.448 1-1 1s-1-.448-1-1v-8c0-.552.448-1 1-1s1 .448 1 1v8zm5 0c0 .552-.448 1-1 1s-1-.448-1-1v-8c0-.552.448-1 1-1s1 .448 1 1v8zm4-15.375l-.409 1.958-19.591-4.099.409-1.958 5.528 1.099c.881.185 1.82-.742 2.004-1.625l5.204 1.086c-.184.882.307 2.107 1.189 2.291l5.666 1.248z" />
                            </svg>
                          </a>
                          <a href="{{ route('editservice', ['id' => $project->id]) }}">
                            <svg class="w-6 h-6 fill-current text-green-500 hover:text-green-600"
                              xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                              <path
                                d="M18.363 8.464l1.433 1.431-12.67 12.669-7.125 1.436 1.439-7.127 12.665-12.668 1.431 1.431-12.255 12.224-.726 3.584 3.584-.723 12.224-12.257zm-.056-8.464l-2.815 2.817 5.691 5.692 2.817-2.821-5.693-5.688zm-12.318 18.718l11.313-11.316-.705-.707-11.313 11.314.705.709z" />
                            </svg>
                          </a>
                        </td>

                      </tr>
                      @empty

                      @endforelse
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </x-contacto-amarillo.contacto-container>
      </div>
      @else
      <p>Sin proyectos</p>
      @endif
    </div>
    <div x-show="tab=='2'">
      @if (count($orders) > 0)
      <div class="py-0">
        <x-contacto-amarillo.contacto-container>
          <div class="col-span-8 flex flex-col">
            <div class="my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
              <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                  <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                      <tr>
                        <th scope="col"
                          class="pl-6  py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                          Titulo
                        </th>
                        <th scope="col"
                          class="px-2 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                          Fecha de pedido
                        </th>
                        <th scope="col"
                          class="px-2 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                          Previsto para
                        </th>

                        <th scope="col"
                          class="px-2 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                          Total
                        </th>

                        <th scope="col"
                          class="px-2 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                          Estado
                        </th>
                      </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                      @forelse ($orders as $order)
                      <tr>
                        <td class="px-2 py-4 whitespace-nowrap">
                          <div class="ml-4">
                            <div class="text-sm font-medium text-gray-900">

                              {{\Illuminate\Support\Str::limit($order->titulo, 45)}}
                            </div>

                          </div>
                        </td>
                        <td class="px-3 py-4 whitespace-nowrap">
                          <div class="text-sm text-gray-900">

                            {{ $order->created_at->todatestring() }}

                          </div>
                        </td>
                        <td class="px-3 py-4 whitespace-nowrap">
                          <div class="text-sm text-gray-900">
                            {{ $order->fecha_entrega }}
                          </div>
                        </td>
                        <td class="px-3 py-4 whitespace-nowrap">
                          <div class="text-sm text-gray-900">
                            ${{ $order->precio_acordado }} MXN
                          </div>
                        </td>
                        <td class="flex justify-evenly px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                          <div class="text-sm text-gray-900">
                            {{ $order->status }}
                          </div>
                        </td>

                      </tr>
                      @empty

                      @endforelse
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </x-contacto-amarillo.contacto-container>
      </div>
      @else
      <p>Sin proyectos</p>
      @endif
    </div>
  </div>


</div>
@push('modals')
<script>
  Livewire.on('success', message => {
            thimsg = message;
            Toast.fire({
                icon: 'success',
                title: thimsg
            });
        });

        Livewire.on('error', message => {
            thimsg = message;
            Toast.fire({
                icon: 'error',
                title: thimsg
            });
        })

</script>
@endpush