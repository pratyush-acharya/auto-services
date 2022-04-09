<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contacts Edit') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{-- Table Start --}}
                    <section class="container mx-auto p-6 font-mono">
                        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
                          <div class="w-full ">
                            <table class="w-full">
                              <thead>
                                <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                                  <th class="px-4 py-3">Contact Type</th>
                                  <th class="px-4 py-3">Phone Number</th>
                                  <th class="px-4 py-3">Action</th>
                                </tr>
                              </thead>
                              <tbody class="bg-white">
                                  @forelse ($contacts as $contact)
                                  <tr class="text-gray-700">
                                    <td class="px-4 py-3 border">
                                      <div class="flex items-center text-sm">
                                        <div>
                                          <p class="font-semibold text-black">{{$contact->contact_type}}</p>
                                        </div>
                                      </div>
                                    </td>
                                    <td class="px-4 py-3 text-ms font-semibold border">{{$contact->phone_number}}</td>
                                    <td class="px-4 py-3 text-xs border">
                                        <a href="{{route('admin.contacts.edit',$contact->id)}}">
                                            <i class="far fa-edit fa-2x text-green-500 hover:text-green-600"></i>
                                        </a>
                                        <form action="{{route('admin.contacts.destroy',$contact->id)}}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button>
                                                <i class="ml-2 far fa-2x fa-trash-alt text-red-500 hover:text-red-600"></i>
                                            </button>
                                        </form>
                                    </td> 
                                  </tr>
                                  @empty
                                  <td class="text-gray-700  text-center p-6" colspan="3">
                                        No Contacts Found!
                                  </td>
                                  @endforelse
                                
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </section>
                    {{-- Table End --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>