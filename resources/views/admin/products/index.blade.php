@extends('admin.layouts.layout')

@section('products')
active
@endsection

@section('content')

<!-- MAIN -->
		<main>

            @if ($message = Session::get('success'))
        		<div class="alert alert-success">
            		<p>{{ $message }}</p>
        		</div>
    		@endif

			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Products</h3>
						<a class="create__btn" href="{{route('admin.products.create')}}"> <i class='bx bxs-folder-plus'></i>Create</a>

					</div>
					<table>
						<thead>
							<tr>
								<th>№</th>
								<th>Name</th>
                                <th>Price $</th>
                                <th>Images</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@if (empty($products))
					          <tr>
					            <td colspan="5" class="h5 text-center text-muted">Ma'lumot kiritilmagan</td>
					          </tr>
					        @endif
					        @foreach($products as $item)
								<tr>
									<td>{{++$loop->index}}</td>
									<td>{{$item->name}}</td>
                                    <td>{{$item->price}}</td>
                                    <td><img src="/images/{{ $item->img }}" alt="" width="100px"></td>

									<td>
										<form action="{{ route('admin.products.destroy',$item->id) }}" method="POST">

                                            <a class="btn btn-primary" href="{{ route('admin.products.show',$item->id) }}"><ion-icon name="eye-outline"></ion-icon></a>
						                    <a class="btn btn-primary" href="{{ route('admin.products.edit',$item->id) }}"><ion-icon name="create-outline"></ion-icon></a>

						                    @csrf
						                    @method('DELETE')

						                    <button type="submit" class="btn btn-danger" onclick="return confirm('Do you want to delete ?')"><ion-icon name="trash-outline"></ion-icon></button>

					                	</form>
					            	</td>
								</tr>
							@endforeach
						</tbody>
					</table>
					{{$products->links()}}
				</div>

			</div>
		</main>
		<!-- MAIN -->

@endsection
