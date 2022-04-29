<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }}
        </h2>
        <div class="container py-5">
            <div class="row">
                <div class="colo-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row m-3">
                                <form action="{{ route('product') }}" method="GET" class="col-4">
                                    <input name="search" type="search" class="form-control"
                                        placeholder="Search By Product Name">
                                    <br>
                                    <button class="btn btn-primary">Search</button>
                                    <a class="btn btn-primary" href="{{ route('product') }}" role="button">Reset</a>
                                </form>
                            </div>
                            <table class="table table-bordered table-striped">
                                <form>
                                    <select id="pagination" name="pagination">
                                        <option value="5" @if ($items == 5) selected @endif>5</option>
                                        <option value="10" @if ($items == 10) selected @endif>10</option>
                                        <option value="25" @if ($items == 25) selected @endif>25</option>
                                    </select>
                                </form>
                                <thead>
                                    <th><button class="btn">ID</button></th>
                                    <th>
                                        <form action="{{ route('product') }}" method="GET" class="col-4">

                                            <input type="hidden" name="orderby" value="product_name">
                                            <br>
                                            <button type="submit" class="btn ">Product</button>
                                        </form>
                                    </th>
                                    <th>
                                        <form action="{{ route('product') }}" method="GET" class="col-4">

                                            <input type="hidden" name="orderby" value="quantity">
                                            <br>
                                            <button type="submit" class="btn ">Quantity</button>
                                        </form>
                                    </th>
                                    <th>
                                        <form action="{{ route('product') }}" method="GET" class="col-4">

                                            <input type="hidden" name="orderby" value="price">
                                            <br>
                                            <button type="submit" class="btn ">Price</button>
                                        </form>
                                    </th>
                                </thead>

                                <tbody>
                                    @foreach ($products as $product)
                                        <tr>
                                            <td>{{ $product->id }}</td>
                                            <td>{{ $product->product_name }}</td>
                                            <td>{{ $product->quantity }}</td>
                                            <td>{{ $product->price }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            {{ $products->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            document.getElementById('pagination').onchange = function() {
                window.location = "{{ route('product') }}?items=" + this.value;
            };
        </script>
    </x-slot>
</x-app-layout>
