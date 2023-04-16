<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Student') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="px-4 py-4 bg-white overflow-hidden shadow-sm sm:rounded-lg">



                <table class="table table-striped table-dark">
                    <thead>
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                      </tr>
                    </thead>
                    @forelse ($students as $student)
                        
                   
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->phone }}</td>
                        <td>
                            <a href="/" class="btn btn-primary">Edit</a>
                        </td>
                        <td>
                            <a href="/" class="btn btn-danger">Delete</a>

                        </td>
                      </tr>
                      @empty

                      <tr>
                        <td colspan="6">Not found</td>
                        
                      </tr>
                        
                      @endforelse
                    </tbody>
                  </table>


            </div>
        </div>
    </div>
</x-app-layout>