<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }}
        </h2>
        <div class="container py-5">
            <div class="row">
                <div class="colo-md-12">
                    <div id="success_message">
    
                    </div>
                    <div class="card">
                        {{-- <a class="btn btn-primary" href="{{route('product')}}" role="button">Link</a> --}}
                        {{-- <div class="card-header">
                            <h4>Student Data
    
                                <button type="button" class="btn btn-primary float-end btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#AddStudentModel">
                                    Add Student
                                </button>
                            </h4>
                        </div> --}}
                        <div class="card-body">
                            <div class="row m-3">
                                <form action="{{route('product')}}" method="GET" class="col-4">
                                    <input name="search" type="search" class="form-control" placeholder="Search By Product Name" >
                                    <br>
                                    <button class="btn btn-primary">Search</button>
                                    <a class="btn btn-primary" href="{{route('product')}}" role="button">Reset</a>
                                </form>
                            </div>
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <th><button class="btn">ID</button></th>
                                    <th><form action="{{route('product')}}" method="GET" class="col-4">
                                        
                                        <input type="hidden" name="prorder" value="abhay">
                                        <br>
                                        <button type="submit" class="btn ">Product</button>
                                    </form>
                                    </th>
                                    <th><form action="{{route('product')}}" method="GET" class="col-4">
                                        
                                        <input type="hidden" name="qnorder" value="abhay">
                                        <br>
                                        <button type="submit" class="btn ">Quantity</button>
                                    </form>
                                    </th>
                                    <th><form action="{{route('product')}}" method="GET" class="col-4">
                                        
                                        <input type="hidden" name="porder" value="abhay">
                                        <br>
                                        <button type="submit" class="btn ">Price</button>
                                    </form>
                                    </th>
                                    {{-- <th><button class="btn">Add To Cart</button></th> --}}
                                    
                                    
                                </thead>
                                {{-- @foreach ($posts as $post)
                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap">{{ $post->user->name }}</td>
                                                    <td class="px-6 py-4 whitespace-nowrap">{{ $post->slug }}</td>
                                                    <td class="px-6 py-4 whitespace-nowrap">{{ $post->body }}</td>
                                                </tr>
                                            @endforeach --}}
                                <tbody>
                                    @foreach($products as $product)
                                    <tr>
                                        <td>{{$product->id}}</td>
                                        <td>{{$product->product_name}}</td>
                                        <td>{{$product->quantity}}</td>
                                        <td>{{$product->price}}</td>
                                        {{-- <td> <button class="btn btn-info">Add To Cart</button></td> --}}
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            {{$products->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
  
    

    
</x-app-layout>
