@extends('layouts.layout')
@section('titre')
    Afficher les produits
@endsection

@section('content')

    <div class="row mb-2">
        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
        @foreach ($products as $product)
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">Article</strong>
                        <h3 class="mb-0">{{ $product->name }}</h3>
                        <div class="mb-1 text-muted">{{ $product->created_at->format('d/m/Y') }}</div>
                        <p class="card-text mb-auto"> {{ $product->description }} </p>
                        <strong class="card-text mb-auto"> {{ $product->formatPrice() }}</strong>
                        <a href=" {{ route('products.show', $product->slug) }} " class="stretched-link btn btn-info">Voir
                            l'article</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img src="{{ $product->image }}" alt="{{ $product->slug }}">
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    {{ $products->links() }}
@endsection
