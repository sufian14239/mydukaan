@php
    $carts = \App\Cart::where('user_id', session('user_id'))->orWhere('session_id', session('user_id'))->get();
	$count = 0;
    $sum = 0;
@endphp
<div class="table-responsive">
    <table class="table table-bordered">
        <thead>
            <tr>
            <td class="text-center">Image</td>
            <td class="text-left">Product Name</td>
            <td class="text-right">Unit Price</td>
            <td class="text-right">Total</td>
            </tr>
        </thead>
        <tbody>
            @if (count($carts) > 0)
                @foreach ($carts as $cart)
                    @php
                        $a = $cart->price;
                        $price = str_replace( ',', '', $a );  
                        $sum += $price * $cart->quantity;
                    @endphp
                    <tr>
                        <td class="text-center"><a href=""><img width="60px" src="{{ asset('public/thumbnail').'/'.$cart->image }}" alt="loading image" title="{{ $cart->name }}" class="img-thumbnail"></a></td>
                        <td class="text-left"><a href="">{{ $cart->name }}</a></td>
                        <td class="text-right">{{ $cart->price }}</td>
                        <td class="text-right">{{ $cart->total }}</td>
                    </tr>
                @endforeach
            @endif
        </tbody>
        <tfoot>
            <tr>
                <td class="text-right" colspan="3"><strong>Sub-Total:</strong></td>
                <td class="text-right" id="sub-total">{{ $sum }}</td>
            </tr>
            <tr>
                <td class="text-right" colspan="3"><strong>Shipping Rate:</strong></td>
                <td class="text-right" id="shipping_method">0</td>
            </tr>
            <tr>
                <td class="text-right" colspan="3"><strong>Total:</strong></td>
                <td class="text-right" id="total">{{ $sum }}</td>
            </tr>
        </tfoot>
    </table>
</div>