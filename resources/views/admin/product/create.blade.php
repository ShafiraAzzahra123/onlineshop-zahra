<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Data Produk
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form action="/admin/product/create" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Nama Produk</label>
                            <input name="name_product" type="text" class="form-control" value="{{old('name_product')}}">
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Harga</label>
                            <input name="price_product" type="text" class="form-control" value="{{old('price_product')}}">
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Detail Produk</label>
                            <input name="detail_product" type="text" class="form-control" value="{{old('detail_product')}}">
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Stok</label>
                            <input name="stock_product" type="number" class="form-control" value="{{old('stock_product')}}">
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Link Gambar</label>
                            <input name="image_product" type="file" class="form-control">
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Kategori</label>
                            <select class="form-select" name="category_id" aria-label="Default select example" >
                                @foreach ($categories as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                              </select>
                          </div>
                          <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
