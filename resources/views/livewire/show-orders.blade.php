<div>
  <x-slot name="header">
    <div class="flex justify-between items-center">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Orders') }}
      </h2>

    </div>
  </x-slot>

  {{ Breadcrumbs::render('showorders') }}

  <div class="py-12">
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

                    <tr class="hover:bg-gray-200">

                      <td class="px-2 py-4 whitespace-nowrap  ">
                        <a href="showorder/{{$order->id}}">
                          <div class="ml-4">
                            <div class="text-sm font-medium text-gray-900">

                              {{\Illuminate\Support\Str::limit($order->titulo, 45)}}
                            </div>

                          </div>
                        </a>
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