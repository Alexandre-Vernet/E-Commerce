@extends('layouts.layout')
@section('titre')
    Votre panier
@endsection

@section('content')
    <!--Section: Block Content-->
    <section class="mt-5 mb-4">

        <!--Grid row-->
        <div class="row">
            <div class="col-lg-8">
                <div class="card wish-list mb-4">
                    <div class="card-body">

                        {{-- Count product in Cart --}}
                        @if (Cart::count() <= 0)
                            <h5 class="mb-4">Votre panier est vide</h5>
                        @elseif(Cart::count() == 1)
                            <h5 class="mb-4">Panier <span> ({{ Cart::count() }} </span> produit)</h5>
                        @else
                            <h5 class="mb-4">Panier <span> ({{ Cart::count() }} </span> produits)</h5>
                        @endif

                        {{-- Display all products in the Cart --}}
                        @foreach (Cart::content() as $product)
                            <div class="row mb-4">
                                <div class="col-md-5 col-lg-3 col-xl-3">
                                    <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
                                        <img class="img-fluid w-100" src=" {{ $product->model->image }} "
                                            alt="{{ $product->model->image }}">
                                    </div>
                                </div>
                                <div class="col-md-7 col-lg-9 col-xl-9">
                                    <div>
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <h5> {{ $product->name }} </h5>
                                                <p class="mb-3 text-muted text-uppercase small">Shirt - blue</p>
                                                <p class="mb-2 text-muted text-uppercase small">Color: blue</p>
                                                <p class="mb-3 text-muted text-uppercase small">Size: M</p>
                                            </div>
                                            <div class="col-md-2">
                                                <input type="number" class="form-control text-center" name="quantite"
                                                    value="1">
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <form action=" {{ route('cart.delete', $product->rowId) }} " method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Supprimer</button>
                                                </form>
                                            </div>
                                            <p class="mb-0">
                                                <span><strong>{{ $product->model->formatPrice() }}</strong></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="mb-4">
                        @endforeach

                        <p class="text-primary mb-0"><i class="fas fa-info-circle mr-1"></i> Do not delay the purchase,
                            adding
                            items to your cart does not mean booking them.</p>

                    </div>
                </div>

                {{-- Delivery --}}
                <div class="card mb-4">
                    <div class="card-body">

                        <h5 class="mb-4">Expected shipping delivery</h5>

                        <p class="mb-0"> Thu., 12.03. - Mon., 16.03.</p>
                    </div>
                </div>

                {{-- We accept --}}
                <div class="card mb-4">
                    <div class="card-body">

                        <h5 class="mb-4">Nous acceptons</h5>

                        <img class="mr-2" width="45px"
                            src="https://mdbootstrap.com/wp-content/plugins/woocommerce-gateway-stripe/assets/images/visa.svg"
                            alt="Visa">
                        <img class="mr-2" width="45px"
                            src="https://mdbootstrap.com/wp-content/plugins/woocommerce-gateway-stripe/assets/images/amex.svg"
                            alt="American Express">
                        <img class="mr-2" width="45px"
                            src="https://mdbootstrap.com/wp-content/plugins/woocommerce-gateway-stripe/assets/images/mastercard.svg"
                            alt="Mastercard">
                        <img class="mr-2" width="45px"
                            src="https://z9t4u9f6.stackpathcdn.com/wp-content/plugins/woocommerce/includes/gateways/paypal/assets/images/paypal.png"
                            alt="PayPal acceptance mark">
                    </div>
                </div>
            </div>

            {{-- Total --}}
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-body">

                        <h5 class="mb-3">Total</h5>

                        <ul class="list-group list-group-flush">
                            <li
                                class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                H.T.
                                <span> {{ formatPrice(Cart::subtotal()) }} </span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                Taxes
                                <span> {{ formatPrice(Cart::tax()) }} </span>
                            </li>
                            <li
                                class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                                <div>
                                    <strong>Total T.T.C</strong>
                                </div>
                                <span><strong>{{ formatPrice(Cart::total()) }}</strong></span>
                            </li>
                        </ul>

                        @if (Cart::count() > 0)
                            <a href=" {{ route('checkout.index') }} "
                                class="btn btn-primary btn-block waves-effect waves-light">Passer commande</a>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
