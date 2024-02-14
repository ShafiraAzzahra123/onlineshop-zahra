<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Data Produk
        </h2>
        <main class="container">
          <div class="row">
            <div class="d-flex flex-row-reverse">
                  <div class="p-2 btn btn-primary">
                    <a href="/admin/product/create" class="btn btn-primary">Tambah Produk</a>
                  </div>
            </div>
          </div>
        </main>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                  <div>
                    <form class="row row-cols-lg-auto g-3 align-items-center" action="/admin/product" method="get">
                      <div class="col-12">
                        <label class="visually-hidden" for="inlineFormInputGroupUsername">Username</label>
                        <div class="input-group">
                          <div class="input-group-text">@</div>
                          <input type="text" name="keyword" class="form-control" id="inlineFormInputGroupUsername" placeholder="Username">
                        </div>
                      </div>
                      <div class="col-6">
                        <button type="submit" class="btn btn-primary">Cari</button>
                        <a href="/admin/product" class="btn">Tampilkan Semua Data</a>
                      </div>
                    </form>
                  </div>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col" style="width: 150px">Nama Produk</th>
                            <th scope="col">Harga</th>
                            <th scope="col" style="width: 150px">Detail Produk</th>
                            <th scope="col">Stok</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Katgeori</th>
                            <th scope="col" style="width: 150px" >Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $item)
                            <tr>
                                <td>{{$item->name_product}}</td>
                                <td>{{$item->price_product}}</td>
                                <td>{{$item->detail_product}}</td>
                                <td>{{$item->stock_product}}</td>
                                <td>{{$item->image_product}}</td>
                                <td>{{$item->category->name}}</td>
                                <td>
                                    <a href="/admin/product/edit/{{$item->id}}" class="btn btn-primary">Edit</a>
                                    <a href="/admin/product/delete/{{$item->id}}" class="btn btn-primary">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                      </table>
                      {{$products->links()}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
