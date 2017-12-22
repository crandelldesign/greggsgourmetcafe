@extends('layouts.default')

@section('head')
@stop

@section('content')

<h1>Catering Menu</h1>

<div id="appetizers" class="menu-cat">
    <h2>Appetizers</h2>
    <p>15 person minimum, unless otherwise noted.</p>
    <ul>
        <li>
            <h3>Garden Vegetable Display</h3>
            <div>$3.79 Per Person</div>
            <p>Fresh Cut Vegetables</p>
            <p>with Ranch or Scallion Cream Sauce</p>
        </li>
        <li>
            <h3>Fresh Fruit Display</h3>
            <div>$3.99 Per Person</div>
            <p>Fresh Cut Seasonal Fruit</p>
            <p>Add Honey Seed Dip For $6.95 Per Pint</p>
        </li>
        <li>
            <h3>Cheese &amp; Crackers Display</h3>
            <div>$4.29 Per Person</div>
            <p>Swiss, Colby and Pepper Jack Cheese with an Assortment of Crackers</p>
        </li>
        <li>
            <h3>Hummus and Pita Bread</h3>
            <div>$3.99 Per Person</div>
        </li>
        <li>
            <h3>Chili Cheese Tart</h3>
        </li>
        <li>
            <h3>Spinach and Cheese Filo Dough Triangles</h3>
            <div>$1.99 Each</div>
            <p>50 piece minimum</p>
        </li>
        <li>
            <h3>Baked Brie En´ Croute</h3>
            <div>$39.95</div>
            <p>Your Choice of Apple and Cinnamon Glaze or Mushroom in a Shallot Wild Mushroom Sauce. Both Served with Assorted Crackers. Serves 10-15</p>
        </li>
        <li>
            <h3>Hot Spinach Artichoke Dip with Pita Chips</h3>
            <div>$39.99</div>
            <p>Serves 10-15</p>
        </li>
        <li>
            <h3>Hot Crab Dip w/Cracker Assortment</h3>
            <div>$4.99 Per Person</div>
        </li>
        <li>
            <h3>Chilled Gulf Shrimp</h3>
            <div>Market Price</div>
            <p>Served with Cocktail Sauce and Lemon</p>
        </li>
        <li>
            <h3>Shrimp Kabobs with Garlic Sauce</h3>
            <div>$4.99 Each</div>
        </li>
        <li>
            <h3>Scallop Kabobs Wrapped in Bacon</h3>
            <div>$4.99 Each</div>
        </li>
        <li>
            <h3>Chicken Teriyaki Kabobs</h3>
            <div>$3.99 Each</div>
        </li>
    </ul>
    <table class="table">
        <tbody>
            <tr class="border-top-0">
                <th>Meatballs</th>
                <td><small>(Serves up to 30)</small><br>Small Pan – $50.00</td>
                <td><small>(Serves up to 60)</small><br>Large Pan – $99.00</td>
            </tr>
        </tbody>
    </table>
    <ul>
        <li>
            <h3>Roast Tenderloin Sandwiches</h3>
            <div>$6.99 Each</div>
            <p>25 person minimum</p>
            <p>Served with Sliced Red Onion and Horseradish Sauce</p>
        </li>
    </ul>
</div>

<div id="alacarte-items" class="menu-cat">
    <h2>À la Carte Items</h2>
    <ul>
        <li>
            <h3>BBQ Ribs</h3>
            <div>$20.99 Per Slab</div>
        </li>
        <li>
            <h3>Large Pan of Breadsticks</h3>
            <div>$12.99</div>
            <p>Approx. 4 Dozen. Dips available: cheese dip, pizza sauce and ranch dressing.</p>
        </li>
        <li>
            <h3>Huge Pan of Breadsticks</h3>
            <div>$23.99</div>
            <p>Approx. 8 Dozen. Dips available: cheese dip, pizza sauce, and ranch dressing.</p>
        </li>
        <li>
            <h3>Full Pan of Fresh Corn</h3>
            <div>$35.00</div>
        </li>
        <li>
            <h3>Full Pan of Fresh Green Beans</h3>
            <div>$45.00</div>
        </li>
        <li>
            <h3>Full Pan of Fesh Green Beans Almondine</h3>
            <div>$55.00</div>
        </li>
    </ul>
</div>

<div id="alacarte-trays" class="menu-cat">
    <h2>À la Carte Trays</h2>
    <table class="table">
        <thead>
            <tr>
                <td></td>
                <td>1/4 Tray
                    <br><small>(Serves 8-10)</small></td>
                <td>1/2 Tray
                    <br><small>(Serves 25-35)</small></td>
                <td>Full Tray
                    <br><small>(Serves 35-45)</small></td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>Baked Mostaccioli</th>
                <td>$30.00</td>
                <td>$45.00</td>
                <td>$65.00</td>
            </tr>
            <tr class="has-desc">
                <th>Baked Lasagna</th>
                <td>$35.00</td>
                <td>&nbsp;</td>
                <td>$77.00</td>
            </tr>
            <tr class="desc">
                <td colspan="4">Choice of vegetarian or meat sauce.</td>
            </tr>
            <tr>
                <th>Pasta Alfredo</th>
                <td>$38.00</td>
                <td>$45.00</td>
                <td>$65.00</td>
            </tr>
            <tr class="has-desc">
                <th>Pasta Alfredo with Chicken</th>
                <td>$38.00</td>
                <td>$60.00</td>
                <td>$80.00</td>
            </tr>
            <tr class="desc">
                <td colspan="4">Grilled or Blackened Chicken.</td>
            </tr>
            <tr>
                <th>Pasta Primavera</th>
                <td>$30.00</td>
                <td>$45.00</td>
                <td>$65.00</td>
            </tr>
            <tr class="has-desc">
                <th>Pasta Primavera with Chicken</th>
                <td>$38.00</td>
                <td>$60.00</td>
                <td>$80.00</td>
            </tr>
            <tr class="desc">
                <td colspan="4">Grilled or Blackened Chicken.</td>
            </tr>
            <tr>
                <th>Garlic Roasted Redskin Potatoes</th>
                <td>$22.00</td>
                <td>$33.00</td>
                <td>$44.00</td>
            </tr>
        </tbody>
    </table>
</div>

<div id="salads" class="menu-cat">
    <h2>Party Salads</h2>
    <table class="table">
        <thead>
            <tr>
                <td></td>
                <td>Large
                    <br><small>(Serves 10-12)</small></td>
                <td>Double
                    <br><small>(Serves 25-35)</small></td>
                <td>Party
                    <br><small>(Serves 35-45)</small></td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>Greek Salad</th>
                <td>$25.99</td>
                <td>$50.00</td>
                <td>$66.00</td>
            </tr>
            <tr>
                <th>Antipasto Salad</th>
                <td>$31.89</td>
                <td>$64.00</td>
                <td>$75.00</td>
            </tr>
            <tr>
                <th>Caesar Salad</th>
                <td>$22.99</td>
                <td>$42.00</td>
                <td>$55.00</td>
            </tr>
            <tr>
                <th>Chicken Caesar Salad</th>
                <td>$28.99</td>
                <td>$64.00</td>
                <td>$75.00</td>
            </tr>
            <tr>
                <th>California Cobb Salad</th>
                <td>$31.89</td>
                <td>$64.00</td>
                <td>$75.00</td>
            </tr>
            <tr>
                <th>Tossed Salad</th>
                <td>$22.99</td>
                <td>$42.00</td>
                <td>$55.00</td>
            </tr>
            <tr>
                <th>Chicken Teriyaki Salad</th>
                <td>$31.89</td>
                <td>$64.00</td>
                <td>$75.00</td>
            </tr>
            <tr class="has-desc">
                <th>Rainbow Rotini Pasta Salad</th>
                <td>$33.00</td>
                <td>$44.00</td>
                <td>$55.00</td>
            </tr>
            <!--<tr class="desc">
                <td colspan="4">With fresh seasonal vegetables and greek dressing.</td>
            </tr>-->
            <tr class="has-desc">
                <th>Cold Bowtie Pesto Pasta</th>
                <td>$40.00</td>
                <td>$50.00</td>
                <td>$69.00</td>
            </tr>
            <tr class="desc">
                <td colspan="4">with Shrimp or Chicken in a Mediterranean Pesto Dressing</td>
            </tr>
            <tr class="has-desc">
                <th>Traverse Bay Salad</th>
                <td>$25.99</td>
                <td>$44.00</td>
                <td>$60.00</td>
            </tr>
            <tr class="desc">
                <td colspan="4">Assorted Greens, Sun Dried Cranberry, Pecan, Bleu Cheese, and Sliced Red Onion</td>
            </tr>
            <tr class="has-desc">
                <th>Tricolor&nbsp;Tortellini Salad</th>
                <td>$50.00</td>
                <td>$65.00</td>
                <td>$95.00</td>
            </tr>
            <!--<tr class="desc">
                <td colspan="4">Cheese filled pasta, fresh broccoli, green onions, assorted bell
                    peppers, and ranch dressing.</td>
            </tr>-->
            <tr>
                <th>Tuna Seashell Pasta Salad</th>
                <td>$39.00</td>
                <td>$50.00</td>
                <td>$66.00</td>
            </tr>
            <tr>
                <th>Redskin Potato Salad</th>
                <td>$30.00</td>
                <td>$40.00</td>
                <td>$50.00</td>
            </tr>
            <tr>
                <th>Greek Style Cole Slaw</th>
                <td>$15.00</td>
                <td>$25.00</td>
                <td>$35.00</td>
            </tr>
            <tr>
                <th>Add Grilled or Blacked Chicken</th>
                <td>$10.00</td>
                <td>$18.00</td>
                <td>$22.00</td>
            </tr>
        </tbody>
    </table>
</div>


<div id="gourmet-sub-platter" class="menu-cat">
    <h2>Gourmet Sub Platter</h2>
    <ul>
        <li>
            <h3>Custom Made</h3>
            <div>$4.99 Per Person</div>
        </li>
    </ul>
</div>

<div id="chicken-wings" class="menu-cat">
    <h2>Chicken Wings</h2>
    <p>Choice of BBQ, Lemon Pepper or Hot</p>
    <ul>
        <li>
            <h3>Small <small>(serves 10)</small></h3>
            <div>$13.99</div>
        </li>
        <li>
            <h3>Medium <small>(serves 20)</small></h3>
            <div>$25.99</div>
        </li>
        <li>
            <h3>Large <small>(serves 20)</small></h3>
            <div>$39.99</div>
        </li>
    </ul>
</div>

<div id="chicken-by-the-piece" class="menu-cat">
    <h2>Chicken By The Piece</h2>
    <ul>
        <li>
            <h3>Wholecut Chicken</h3>
            <div>$1.50 Per Piece</div>
        </li>
    </ul>
    <p>Minimum 30 Pieces</p>
</div>
<div id="baby-back-ribs" class="menu-cat">
    <h2>Baby Back BBQ Ribs</h2>
    <ul>
        <li>
            <h3>&nbsp;</h3>
            <div>$20.99 Per Slab</div>
        </li>
    </ul>
</div>
<div id="bbq-blow-out" class="menu-cat">
    <h2>Barbecue Blow Out</h2>
    <p>50 person minimum.</p>
    <ul>
        <li>
            <div>$20.99 Per Person</div>
            <p>Includes: Fresh Fruit and Vegetable Platters, Tossed Salad, Redskin Potato Salad, BBQ
Chicken, BBQ Baby Back Ribs, Baked Beans, Garlic Bread Sticks, Seasoned Cut Corn, Cream Cheese Marbled Brownies, Cookies, Lemonade, and Iced Tea.</p>
        </li>
    </ul>
</div>

<div id="homemade-desserts" class="menu-cat">
    <h2>Homemade Desserts</h2>
    <ul>
        <li>
            <h3>Strawberry Cheese Cake</h3>
            <!--<div>$29.95</div>-->
            <p>A Whole Cheese Cake Served with Strawberries</p>
        </li>
        <li>
            <h3>Corn Bread with Pecans</h3>
            <!--<div>Ask for Details</div>-->
        </li>
        <li>
            <h3>Petite Cream Cheese Marble Brownies</h3>
            <!--<div>$0.65 Each</div>-->
        </li>
        <li>
            <h3>Gourmet Cookies</h3>
            <!--<div>$0.75 Each</div>-->
            <p>Fresh Baked Chocolate Chip and Peanut Butter Cookies</p>
        </li>
        <li>
            <h3>Pecan Diamonds</h3>
            <!--<div>Ask for Details</div>-->
        </li>
        <li>
            <h3>Chocolate Chip Bourbon Pecan Pie</h3>
            <!--<div>Ask for Details</div>-->
        </li>
        <li>
            <h3>Keylime Pie</h3>
            <!--<div>Ask for Details</div>-->
        </li>
        <li>
            <h3>Rice Pudding</h3>
            <!--<div>Ask for Details</div>-->
            <p>With or without sun dried cranberries</p>
        </li>
    </ul>
</div>
<p class="text-center">Prices subject to change.</p>

@stop
