@extends('layouts.default')

@section('head')
@stop

@section('content')

<h1>Specials</h1>

<div id="specials" class="menu-cat">
    <h2>Current Specials</h2>
    <ul>
        <li>
            <h3>Slice Special</h3>
            <div>$3.45</div>
            <p>Large slice of pepperoni, half bag of breadsticks, and a regular drink.</p>
        </li>
        <li>
            <h3>Sub Special</h3>
            <div>$5.99</div>
            <p>Any regular sub, regular drink, and a bag of chips.</p>
        </li>
    </ul>
</div>
<h2>Coupons</h2>
<table class="coupon">
    <tbody>
        <tr>
            <td class="coupon">
                <h3>Wings</h3>
                <p>100 Chicken Wings</p>
                <p>BBQ – Lemon Pepper – Hot</p>
                <p><span class="price">$125</span>&nbsp;+ tax</p>
            </td>
            <td class="coupon">
                <h3>Pasta</h3>
                <p>Any Full Pasta Tray</p>
                <p>Choose from Mostaccioli, Lasagna, or Pasta Alfredo</p>
                <p><span class="price">$10 OFF</span>
                </p>
            </td>
        </tr>
        <tr>
            <td class="coupon">
                <h3>10% Off Any Catering</h3>
                <p>Order Over $100</p>
            </td>
            <td class="coupon">
                <h3>$2 Off</h3>
                <p>Any Dinner for Two</p>
            </td>
        </tr>
        <tr>
            <td class="coupon">
                <h3>$300 Party Special</h3>
                <p>100 Pieces of Chicken</p>
                <p><strong>— or —</strong>
                </p>
                <p>7 Slabs of Ribs</p>
                <p>Full Pan of Pasta</p>
                <p>Party Sized Salad</p>
                <p>Huge Bag of Breadsticks
                    <br> with a Pint of Cheese Dip</p>
            </td>
            <td class="coupon">
                <h3>Small Family Special</h3>
                <p>Large Pizza – 3 Toppings</p>
                <p>Regular Greek Salad</p>
                <p>1 Bag of Bread + 1 Cheese Dip</p>
                <p><span class="price">$24</span>&nbsp;+ tax</p>
            </td>
        </tr>
    </tbody>
</table>

@stop
