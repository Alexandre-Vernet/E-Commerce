@extends('layouts.layout')
@section('titre')
    Panier
@endsection

@section('content')
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
    @if (Cart::count() > 0)
        <table class="table table-striped text-center">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Produits</th>
                    <th scope="col">Disponibilité</th>
                    <th scope="col">Quantité</th>
                    <th scope="col">Prix</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach (Cart::content() as $product)
                    <tr>
                        <td><img src=" {{ $product->model->image }} " alt="product" style="height: 50px; width: 50px;"></td>
                        <td> {{ $product->name }} </td>
                        <td class="text-success">En stock</td>
                        <td>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <input type="number" name="quantity" value="1" class="form-control text-center">
                                </div>
                            </div>
                        </td>

                        <td>{{ $product->model->formatPrice() }}</td>
                        <td>
                            <form action=" {{ route('cart.delete', $product->rowId) }} " method="post">
                                @csrf
                                @method('DELETE')
                                {{-- Supprimer le produit --}}
                                <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                            </form>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div class="col-md-12 text-center">
            <strong>Aucun article dans votre panier</strong>
        </div>
    @endif

@endsection
