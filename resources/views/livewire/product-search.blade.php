<div class="container p-3">
    <!-- Page title -->
    <div class="p-3 text-center h1">Product Search</div>

    <div class="p-2 mb-3 row">
        <div class="col">
            <!-- Product Search Table -->
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Products</h3>
                </div>
                <div class="py-3 card-body border-bottom">
                  <div class="d-flex">
                    <div class="text-muted">
                      Search:
                      <div class="ms-2 d-inline-block">
                        <input class="form-control form-control-sm" type="text" wire:model.lazy="search" aria-label="Search products">
                      </div>
                    </div>
                  </div>
                </div>

                <div class="table-responsive">
                  <table class="table card-table table-vcenter datatable">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Price</th>
                      </tr>
                    </thead>
                    <tbody>
                        <!-- Loop through all the products -->
                        @foreach ($products as $product)
                            <tr>
                                <td>{{$product->id}}</td>
                                <td><img src="{{$product->image}}" width="200px" alt="Image of {{$product->title}}"></td>
                                <td>{{$product->title}}</td>
                                <td>£{{$product->price}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>

                <!-- Product Search Table footer -->
                {{$products->links('../vendor/pagination/bootstrap-5')}}
        </div>
    </div>
</div>

