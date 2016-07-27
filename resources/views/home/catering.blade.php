@extends('layouts.default')

@section('head')
@stop

@section('content')

<h1>Catering Menu</h1>

<div id="appetizers-vegetarian-items" class="menu-cat">
    <h2>Appetizers – Vegetarian Items</h2>
    <p>15 person minimum, unless otherwise noted.</p>
    <ul>
        <li>
            <h3>Garden Vegetable Display</h3>
            <div>$3.79 Per Person</div>
            <p>Fresh Cut Vegetable</p>
            <p>With ranch or scallion cream cheese</p>
        </li>
        <li>
            <h3>Fresh Fruit Display of Seasonal Fruit</h3>
            <div>$3.99 Per Person</div>
            <p>Fresh Cut Seasonal Fruit</p>
            <p>Add honey seed dip for $6.95 per pint!</p>
        </li>
        <li>
            <h3>Fresh Baked Danish Display</h3>
            <div>$5.75 Per Person</div>
            <p>Assorted croissants, muffins, danish, and bagels served with cream cheese,
                butter, and jelly.</p>
        </li>
        <li>
            <h3>Cheese and Crackers Display</h3>
            <div>$4.29 Per Person</div>
            <p>Swiss, colby and pepper jack cheeses with an assortment of crackers.
                15 person minimum.</p>
        </li>
        <li>
            <h3>Hommus and Pita Bread</h3>
            <div>$3.99 Per Person</div>
        </li>
        <li>
            <h3>Gourmet Pizza Wedges</h3>
            <div>Price on Request</div>
        </li>
        <li>
            <h3>Spinach or Cheese Phillo Dough Triangles</h3>
            <div>$1.99 Each</div>
            <p>50 piece minimum</p>
        </li>
        <li>
            <h3>Baked Brie En’Croute</h3>
            <div>$39.95</div>
            <p>Your choice of apple and cinnamon glaze or mushrooms in a shallot wild
                mushroom sauce, both served with assorted crackers. Serves 10-15.</p>
        </li>
        <li>
            <h3>Hot Spinach Artichoke Dip with Pita Chips</h3>
            <div>$39.99</div>
            <p>Serves 10-15</p>
        </li>
    </ul>
</div>
<p>
    <!--

<div id="appetizers-gourmet-sandwich-platter" class="menu-cat">

<h2>Appetizers - Gourmet Sandwich Platter</h2>



<ul>
    
<li>

<h3>Gourmet Sandwich Platter</h3>



<div>$3.50 Per Person</div>


Options for the Gourmet Sandwich Platter includes classic, smoked turkey, honey roasted ham, vegetarian, assorted cheeses, white albacore tuna salad, chicken salad with mandarin orges and sliced almonds - also available on croissants or pita bread - pick your favorites</li>


</ul>


</div>


-->
</p>
<div id="appetizers-seafood" class="menu-cat">
    <h2>Appetizers – Seafood</h2>
    <p>15 person minimum, unless otherwise noted.</p>
    <ul>
        <li>
            <h3>Hot Crab Dip with Cracker Assortment</h3>
            <div>$4.99 Per Person</div>
        </li>
        <li>
            <h3>Chilled Gulf Shrimp</h3>
            <div>Market Price</div>
            <p>Served with cocktail sauce and lemon</p>
        </li>
        <li>
            <h3>Shrimp Kabobs with Garlic Sauce</h3>
            <div>$4.99 Each</div>
        </li>
        <li>
            <h3>Scallop Kabobs Wrapped in Bacon</h3>
            <div>$4.99 Each</div>
        </li>
    </ul>
</div>
<div id="appetizers-chicken" class="menu-cat">
    <h2>Appetizers – Chicken</h2>
    <p>15 person minimum, unless otherwise noted.</p>
    <ul>
        <li>
            <h3>Chicken Teriyaki Kabobs</h3>
            <div>$3.99 Each</div>
        </li>
    </ul>
    <table class="table">
        <tbody>
            <tr class="has-desc">
                <th>Chicken Wings</th>
                <td>Small – $12.95</td>
                <td>Medium – $20.95</td>
                <td>Large – $32.95</td>
            </tr>
            <tr class="desc">
                <td colspan="4">Choice of BBQ, lemon peppered, or hot!
                    <br> Small = 12 Pieces. Medium = 24 Pieces. Large = 36 Pieces.</td>
            </tr>
        </tbody>
    </table>
</div>
<div id="appetizers-beef" class="menu-cat">
    <h2>Appetizers – Beef</h2>
    <p>15 person minimum, unless otherwise noted.</p>
    <table class="table">
        <tbody>
            <tr class="border-top-0">
                <th>Meatballs</th>
                <td>Small Pan – $50.00</td>
                <td>Large Pan – $99.00</td>
            </tr>
            <tr class="has-desc">
                <th>Roast Tenderloin Sandwiches</th>
                <td colspan="2">$6.99 Each</td>
            </tr>
            <tr class="desc">
                <td colspan="3">25 person minimum</td>
            </tr>
        </tbody>
    </table>
</div>
<div id="alacarte-items" class="menu-cat">
    <h2>À la Carte Items</h2>
    <ul>
        <li>
            <h3>Whole Chicken Cut</h3>
            <div>$1.50 Per Piece</div>
            <p>Choice of BBQ, lemon peppered, or roast.</p>
        </li>
        <li>
            <h3>BBQ Ribs</h3>
            <div>$19.99 Per Slab</div>
        </li>
        <li>
            <h3>Large Pan of Breadsticks</h3>
            <div>$12.99</div>
            <p>Approx. 4 Dozen. Dips available: cheese dip, pizza sauce, and ranch dressing.</p>
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
                    <br> Serves 8-10</td>
                <td>1/2 Tray
                    <br> Serves 25-35</td>
                <td>Full Tray
                    <br> Serves 35-45</td>
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
                <td></td>
                <td>$77.00</td>
            </tr>
            <tr class="desc">
                <td colspan="4">Choice of vegetarian or meat sauce.</td>
            </tr>
            <tr>
                <th>Pasta Alfredo</th>
                <td>$30.00</td>
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
                <td>$30.00</td>
                <td>$40.00</td>
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
                    <br> Serves 12-15</td>
                <td>Double
                    <br> Serves 25-35</td>
                <td>Party
                    <br> Serves 40-50</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>Greek Salad</th>
                <td>$23.99</td>
                <td>$50.00</td>
                <td>$66.00</td>
            </tr>
            <tr>
                <th>Antipasto Salad</th>
                <td>$29.99</td>
                <td>$64.00</td>
                <td>$75.00</td>
            </tr>
            <tr>
                <th>Caesar Salad</th>
                <td>$20.99</td>
                <td>$42.00</td>
                <td>$55.00</td>
            </tr>
            <tr>
                <th>Chicken Caesar Salad</th>
                <td>$26.99</td>
                <td>$64.00</td>
                <td>$75.00</td>
            </tr>
            <tr>
                <th>California Cobb Salad</th>
                <td>$29.99</td>
                <td>$64.00</td>
                <td>$75.00</td>
            </tr>
            <tr>
                <th>Tossed Salad</th>
                <td>$20.99</td>
                <td>$42.00</td>
                <td>$55.00</td>
            </tr>
            <tr>
                <th>Chicken Teriyaki Salad</th>
                <td>$29.99</td>
                <td>$64.00</td>
                <td>$75.00</td>
            </tr>
            <tr class="has-desc">
                <th>Rainbow Rotini Pasta Salad</th>
                <td>$33.00</td>
                <td>$44.00</td>
                <td>$55.00</td>
            </tr>
            <tr class="desc">
                <td colspan="4">With fresh seasonal vegetables and greek dressing.</td>
            </tr>
            <tr class="has-desc">
                <th>Cold Bowtie Pesto Pasta</th>
                <td>$40.00</td>
                <td>$50.00</td>
                <td>$69.00</td>
            </tr>
            <tr class="desc">
                <td colspan="4">With shrimp or chicken and mediterranean pesto dressing.</td>
            </tr>
            <tr class="has-desc">
                <th>Traverse Bay Salad</th>
                <td>$23.99</td>
                <td>$44.00</td>
                <td>$60.00</td>
            </tr>
            <tr class="desc">
                <td colspan="4">Assorted greens, sun dried cranberries, pecan pieces, bleu cheese,
                    and sliced red onions.</td>
            </tr>
            <tr class="has-desc">
                <th>Tricolor&nbsp;Tortellini Salad</th>
                <td>$50.00</td>
                <td>$65.00</td>
                <td>$95.00</td>
            </tr>
            <tr class="desc">
                <td colspan="4">Cheese filled pasta, fresh broccoli, green onions, assorted bell
                    peppers, and ranch dressing.</td>
            </tr>
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
                <td>$9.00</td>
                <td>$15.99</td>
                <td>$20.99</td>
            </tr>
        </tbody>
    </table>
</div>
<div id="complete-dinners" class="menu-cat">
    <h2>Complete Dinners</h2>
    <p>Served with a House Salad, Greek Salad, or Cole Slaw and garlic breadsticks.
        (All are priced per person)</p>
    <ul>
        <li>
            <h3>2 Pieces of Chicken</h3>
            <div>$5.99</div>
            <p>Choice of Lemon or BBQ Chicken.</p>
        </li>
        <li>
            <h3>Baked Mostaccioli</h3>
            <div>$5.99</div>
        </li>
        <li>
            <h3>2 Pieces of Chicken and 1/4 Slab of BBQ Ribs</h3>
            <div>$10.99</div>
            <p>Choice of Lemon or BBQ Chicken.</p>
        </li>
        <li>
            <h3>1/4 Slab of BBQ RIbs and Baked Mostaccioli</h3>
            <div>$8.99</div>
        </li>
        <li>
            <h3>2 Pieces of BBQ Chicken and Baked Mostaccioli</h3>
            <div>$6.99</div>
        </li>
        <li>
            <h3>2 Pieces of Chicken, 1/4 Slab of BBQ Ribs, and Baked Mostaccioli</h3>
            <div>$11.99</div>
            <p>Choice of Lemon or BBQ Chicken.</p>
        </li>
        <li>
            <h3>Chicken Parmesan</h3>
            <div>$10.95</div>
        </li>
        <li>
            <h3>Pasta Primavera</h3>
            <p>Garden vegetables tossed with penne pasta and parmesan in a light garlic
                sauce. Added chicken extra.</p>
        </li>
        <li>
            <h3>Roasted Chicken</h3>
            <p>Choice of lemon peppered, BBQ, or roast</p>
        </li>
        <li>
            <h3>BBQ Baby Back Ribs</h3>
            <div>$8.99</div>
        </li>
        <li>
            <h3>Chicken Teriyaki</h3>
            <div>$11.50</div>
            <p>Served with rice pilaf and garden vegetables</p>
        </li>
        <li>
            <h3>Boneless Chicken Breast</h3>
            <div>$11.50</div>
            <p>Sauteed in choice Marsala, Tosca, or Scallopini sauce and served with
                vegetables and choice of rice pilaf or potato.</p>
        </li>
        <li>
            <h3>Add Baked Mostaccioli with Any Dinner</h3>
            <div>$2.95</div>
        </li>
    </ul>
</div>
<div id="gourmet-sub-platter" class="menu-cat">
    <h2>Gourmet Sub Platter</h2>
    <ul>
        <li>
            <h3>Custom Made</h3>
            <div>$4.49 Per Person</div>
        </li>
    </ul>
</div>
<div id="chicken-wings" class="menu-cat">
    <h2>Chicken Wings</h2>
    <p>Available in Lemon Pepper, BBQ or Hot</p>
    <ul>
        <li>
            <h3>Small (10 pc)</h3>
            <div>$12.99</div>
        </li>
        <li>
            <h3>Medium (20 pc)</h3>
            <div>$23.99</div>
        </li>
        <li>
            <h3>Large (30 pc)</h3>
            <div>$36.99</div>
        </li>
    </ul>
</div>
<div id="chicken-by-the-piece" class="menu-cat">
    <h2>Chicken By The Piece</h2>
    <ul>
        <li>
            <h3>Per Piece</h3>
            <div>$1.50</div>
        </li>
    </ul>
</div>
<div id="baby-back-ribs" class="menu-cat">
    <h2>Baby Back BBQ Ribs</h2>
    <ul>
        <li>
            <h3>&nbsp;</h3>
            <div>$19.99 Per Slab</div>
        </li>
    </ul>
</div>
<div id="bbq-blow-out" class="menu-cat">
    <h2>Barbecue Blow Out</h2>
    <p>50 person minimum.</p>
    <ul>
        <li>
            <div>$20.99 Per Person</div>
            <p>The BBQ Blow Out includes the following: Fresh fruit and vegetable platters,
                tossed salad, redskin potato salad, BBQ chicken, baby back ribs,
                baked beans, garlic bread sticks, seasoned cut corn, cream cheese
                marbled brownies, cookies, pink lemonade and iced tea.</p>
        </li>
    </ul>
</div>
<div id="homemade-desserts" class="menu-cat">
    <h2>Homemade Desserts</h2>
    <ul>
        <li>
            <h3>Strawberry Cheese Cake</h3>
            <div>$29.95</div>
            <p>A whole cheese cake served with strawberries</p>
        </li>
        <li>
            <h3>Corn Bread with Pecans</h3>
            <div>Ask for Details</div>
        </li>
        <li>
            <h3>Petite Cream Cheese Marble Brownies</h3>
            <div>$0.65 Each</div>
        </li>
        <li>
            <h3>Gourmet Cookies</h3>
            <div>$0.75 Each</div>
            <p>Fresh baked chocolate chip and peanut butter cookies</p>
        </li>
        <li>
            <h3>Pecan Diamonds</h3>
            <div>Ask for Details</div>
        </li>
        <li>
            <h3>Chocolate Chip Bourbon Pecan Pie</h3>
            <div>Ask for Details</div>
        </li>
        <li>
            <h3>Keylime Pie</h3>
            <div>Ask for Details</div>
        </li>
        <li>
            <h3>Rice Pudding</h3>
            <div>Ask for Details</div>
            <p>With or without sun dried cranberries</p>
        </li>
    </ul>
</div>
<p class="text-center">Prices subject to change.</p>

@stop