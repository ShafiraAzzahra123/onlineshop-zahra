<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Data Kategori
        </h2>
        <main class="container">
          <div class="row">
            <div class="d-flex flex-row-reverse">
                  <div class="p-2 btn btn-primary">
                    <a href="/admin/category/create" class="btn btn-primary">Tambah Kategori</a>
                  </div>
            </div>
          </div>
        </main>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Nama Kategori</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($categories as $item)
                          <tr>
                            <td>{{$item->name}}</td>
                            <td>{{$item->address}}</td>
                            <td>{{$item->image}}</td>
                            <td>
                              <a href="/admin/category/edit/{{$item->id}}" class="btn btn-primary">Edit</a>
                              <a href="/admin/category/delete/{{$item->id}}" class="btn btn-primary">Hapus</a>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
