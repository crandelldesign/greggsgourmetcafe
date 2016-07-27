@extends('layouts.default')

@section('head')
@stop

@section('content')

<h1>Carryout Menu</h1>

<div id="classicpizza" class="menu-cat">
    <h2>Classic Pizza</h2>
    <table class="table">
        <thead>
            <tr>
                <td>&nbsp;</td>
                <td>Regular
                    <br> 8-slices
                </td>
                <td>Large
                    <br> 10-slices
                </td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>Cheese</th>
                <td>$5.99</td>
                <td>$7.99</td>
            </tr>
            <tr>
                <th>1-3 Items</th>
                <td>$6.99</td>
                <td>$8.99</td>
            </tr>
            <tr>
                <th>4-8 Items</th>
                <td>$7.99</td>
                <td>$9.99</td>
            </tr>
        </tbody>
    </table>
    <p>Toppings: Pepperoni, Ham, Ground Beef, Italian Sausage, Onions, Green Peppers,
        Mushrooms, Bacon, Tomatoes, Black Olives, Mild Peppers, Pineapple, Anchovies,
        and Jalapenos.</p>
</div>
<div id="gourmetpizzas" class="menu-cat">
    <h2>Gourmet Pizzas</h2>
    <p>Regular:&nbsp;<strong>$11.99</strong> &nbsp; &nbsp;&nbsp;Large:&nbsp;<strong>$13.99</strong>
    </p>
    <ul>
        <li>
            <h3>BBQ Chicken</h3>
            <p>Barbeque Sauce, Diced Chicken, Sliced Red Onion, Cilantro</p>
        </li>
        <li>
            <h3>California</h3>
            <p>Pesto Sauce, Mushrooms, Feta Cheese, Sliced Red Onion, Artichoke Hearts</p>
        </li>
        <li>
            <h3>Chicken Alfredo</h3>
            <p>Creamy Alfredo Sauce, Diced Chicken, Smoked Bacon, Sliced Red Onion</p>
        </li>
        <li>
            <h3>Gourmet Vegetarian</h3>
            <p>Pesto Sauce, Pea Pods, Broccoli, Carrots, Tomatoes</p>
        </li>
        <li>
            <h3>Capresse</h3>
            <p>Red Sauce, Mozzarella &amp; Muenster Cheeses, Tomatoes, Basil</p>
        </li>
        <li>
            <h3>Greek</h3>
            <p>Herb Oil, Mozzarella &amp; Feta Cheeses, Black Olives, Sliced Red Onions,
                Tomatoes, Mild Peppers</p>
        </li>
        <li>
            <h3>4 Cheese</h3>
            <p>Creamy Alfredo Sauce, Mozzarella, Muenster, Romano &amp; Parmesan Cheeses</p>
        </li>
    </ul>
</div>
<div id="dinners" class="menu-cat">
    <h2>Dinners</h2>
    <p>All dinners include tossed salad or cole slaw, and breadsticks. Add $2 for Greek
        Salad.
    </p>
    <table class="table">
        <thead>
            <tr>
                <td>&nbsp;</td>
                <td>For 1</td>
                <td>For 2</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>BBQ Baby Back Ribs</th>
                <td>$14.49</td>
                <td>$25.49</td>
            </tr>
            <tr class="has-desc">
                <th>Roast Chicken</th>
                <td>$10.99</td>
                <td>$19.99</td>
            </tr>
            <tr class="desc">
                <td colspan="3">Roast, Lemon Pepper, or BBQ</td>
            </tr>
            <tr>
                <th>BBQ Ribs and Chicken</th>
                <td>$12.99</td>
                <td>$20.99</td>
            </tr>
            <tr>
                <th>Baked Lasagna</th>
                <td>$9.99</td>
                <td>$17.49</td>
            </tr>
            <tr>
                <th>Baked Mostaccioli</th>
                <td>$9.99</td>
                <td>$17.49</td>
            </tr>
            <tr class="has-desc">
                <th>Pasta Alfredo</th>
                <td>$9.99</td>
                <td>$17.49</td>
            </tr>
            <tr class="desc">
                <td>Add Chicken</td>
                <td>$2.00</td>
                <td>$3.00</td>
            </tr>
        </tbody>
    </table>
</div>
<div id="alacarte" class="menu-cat">
    <h2>À la Carte</h2>
    <ul>
        <li>
            <h3>Slab of Baby Back Ribs</h3>
            <div>$19.99</div>
        </li>
        <li>
            <h3>Half Slab of Baby Back Ribs</h3>
            <div>$10.99</div>
        </li>
        <li>
            <h3>Lasagna</h3>
            <div>$8.99</div>
        </li>
        <li>
            <h3>Alfredo</h3>
            <div>$8.99</div>
            <p>Add Chicken $2.00</p>
        </li>
        <li>
            <h3>Rib &amp; Chicken Combo</h3>
            <div>$11.99</div>
        </li>
    </ul>
</div>
<div id="roastchicken" class="menu-cat">
    <h2>Roast Chicken – À la Carte</h2>
    <p>Your Choice of Plain, Lemon Pepper or BBQ</p>
    <ul>
        <li>
            <h3>4 piece</h3>
            <div>$6.00</div>
        </li>
        <li>
            <h3>8 piece</h3>
            <div>$12.00</div>
        </li>
        <li>
            <h3>12 piece</h3>
            <div>$17.99</div>
        </li>
        <li>
            <h3>16 piece</h3>
            <div>$22.99</div>
        </li>
        <li>
            <h3>24 piece</h3>
            <div>$29.99</div>
        </li>
    </ul>
</div>
<div id="extras" class="menu-cat">
    <h2>Extras</h2>
    <ul>
        <li>
            <h3>Roasted Red Skin Potatoes</h3>
            <div>$3.99</div>
        </li>
        <!--<p>
            
<li>

<h3>Rice Pilaf</h3>



<div>$2.99</div>

</li>


        </p>-->
        <li>
            <h3>Dip</h3>
            <div>$1.49</div>
            <p>Ranch, Pizza Sauce, Blue Cheese</p>
        </li>
        <li>
            <h3>Garlic Cheese Dip</h3>
            <div>$1.49</div>
        </li>
        <li>
            <h3>Green Onion Cheese Dip</h3>
            <div>$1.49</div>
        </li>
        <li>
            <h3>Sauces</h3>
            <div>$5.49 – Pint &nbsp; &nbsp; $8.79 – Quart</div>
            <p>Meat Sauce or Alfredo</p>
        </li>
        <li>
            <h3>Soup/Chili</h3>
            <div>$3.29</div>
            <p>Seasonal</p>
        </li>
        <li>
            <h3>Greek Style Cole Slaw</h3>
            <div>$1.99 – 1/2 Pint &nbsp; &nbsp; $3.29 –&nbsp;Pint</div>
        </li>
    </ul>
</div>
<div id="quesadillas" class="menu-cat">
    <h2>Quesadillas</h2>
    <ul>
        <li>
            <h3>Chicken</h3>
            <div>$4.99</div>
        </li>
        <li>
            <h3>BBQ Pork</h3>
            <div>$4.99</div>
        </li>
    </ul>
</div>
<div id="breadsticks" class="menu-cat">
    <h2>Famous Breadsticks</h2>
    <ul>
        <li>
            <h3>1/2 Bag</h3>
            <div>$1.89</div>
        </li>
        <li>
            <h3>Full Bag</h3>
            <div>$3.69</div>
        </li>
    </ul>
</div>
<div id="wings" class="menu-cat">
    <h2>Wings</h2>
    <p>Lemon Pepper, BBQ, or Hot</p>
    <ul>
        <li>
            <h3>Small</h3>
            <div>$12.99</div>
            <p>10 piece</p>
        </li>
        <li>
            <h3>Medium</h3>
            <div>$23.99</div>
            <p>20 piece</p>
        </li>
        <li>
            <h3>Large</h3>
            <div>$36.99</div>
            <p>30 piece</p>
        </li>
    </ul>
</div>
<div id="subs" class="menu-cat">
    <h2>Subs</h2>
    <p>All subs are garnished with lettuce, tomato, pickles, and pepper rings.</p>
    <p>Regular:&nbsp;<strong>$5.29</strong>&nbsp; &nbsp; &nbsp;Large:&nbsp;<strong>$8.29</strong>
    </p>
    <ul>
        <li>
            <h3>Italian</h3>
            <p>Ham, Turkey, Salami, Pepperoni, Lettuce, Tomato, Mild Peppers, and our
                House Dressing</p>
        </li>
        <li>
            <h3>The Classic</h3>
            <p>Ham, Smoked Turkey, Onion, Swiss Cheese, with House Dressing</p>
        </li>
        <li>
            <h3>Smoked Turkey Breast</h3>
            <p>Smoked Turkey, Swiss Cheese, Cole Slaw, with Russian Dressing</p>
        </li>
        <li>
            <h3>Ham &amp; Cheese</h3>
            <p>Ham, Swiss Cheese, Gourmet Mustard Sauce</p>
        </li>
        <li>
            <h3>Tuna Salad</h3>
            <p>White Albacore Tuna Mix</p>
        </li>
        <li>
            <h3>Vegetarian</h3>
            <p>Cucumber, Tomato, Broccoli, Cole Slaw, Swiss Cheese, with Russian Dressing</p>
        </li>
        <li>
            <h3>Po Boy</h3>
            <p>Pulled Pork, Cole Slaw, Swiss Cheese</p>
        </li>
        <li>
            <h3>Beef &amp; Cheddar</h3>
            <p>Sliced Roast Beef with Cheddar Cheese</p>
        </li>
    </ul>
    <p>Regular:&nbsp;<strong>$6.99</strong> &nbsp; &nbsp;&nbsp;Large:&nbsp;<strong>$9.99</strong>
    </p>
    <ul>
        <li>
            <h3>Hot Chicken Breast Pita</h3>
            <p>Boneless Chicken Breast Strips, Lettuce, Tomato, with Ranch</p>
        </li>
    </ul>
</div>
<div id="salads" class="menu-cat">
    <h2>Salads</h2>
    <table class="table">
        <thead>
            <tr>
                <td>&nbsp;</td>
                <td>Personal
                    <br> Serves 1</td>
                <td>Regular
                    <br> Serves 2</td>
                <td>Medium
                    <br> Serves 3-4</td>
                <td>Large
                    <br> Serves 10-12</td>
            </tr>
        </thead>
        <tbody>
            <tr class="has-desc">
                <th>Greek</th>
                <td>$6.29</td>
                <td>$8.99</td>
                <td>$19.99</td>
                <td>$23.99</td>
            </tr>
            <tr class="desc">
                <td colspan="5">Assorted Greens, Tomatoes, Feta Cheese, Beets, Red Onion, Cucumber,
                    Green Pepper, Pepperoncini, Chick Peas, Articoke Hearts, Kalamata
                    Olives
                </td>
            </tr>
            <tr class="has-desc">
                <th>Antipasto</th>
                <td>$6.99</td>
                <td>$10.49</td>
                <td>$24.29</td>
                <td>$29.99</td>
            </tr>
            <tr class="desc">
                <td colspan="5">Assorted Greens, Tomato, Red Onion, Pepperoncini, Black Olive, Artichoke
                    Heart, Salami, Ham, Provolone Cheese</td>
            </tr>
            <tr class="has-desc">
                <th>California Cobb</th>
                <td>$6.99</td>
                <td>$10.49</td>
                <td>$24.29</td>
                <td>$29.99</td>
            </tr>
            <tr class="desc">
                <td colspan="5">Assorted Greens, Chicken, Bacon, Egg, Cucumber, Tomato, Bleu Cheese</td>
            </tr>
            <tr class="has-desc">
                <th>Blackened Chicken</th>
                <td>$6.99</td>
                <td>$10.49</td>
                <td>$24.29</td>
                <td>$29.99</td>
            </tr>
            <tr class="desc">
                <td colspan="5">Assorted Greens, Sliced Blackened Chicken, Tomato, Red Onion, Cheddar
                    &amp; Mozzarella Cheese, Cucumber</td>
            </tr>
            <tr class="has-desc">
                <th>Chef</th>
                <td>$6.99</td>
                <td>$10.49</td>
                <td>$24.29</td>
                <td>$29.99</td>
            </tr>
            <tr class="desc">
                <td colspan="5">Assorted Greens, Sliced Ham, Smoked Turkey, Swiss Cheese, Tomato,
                    Egg
                </td>
            </tr>
            <tr class="has-desc">
                <th>Traverse Bay</th>
                <td>$6.29</td>
                <td>$8.99</td>
                <td>$19.99</td>
                <td>$23.99</td>
            </tr>
            <tr class="desc">
                <td colspan="5">Assorted Greens, Sundried Cranberries, Pecan Pieces, Bleu Cheese,
                    Red Onion</td>
            </tr>
            <tr class="has-desc">
                <th>Caesar</th>
                <td>$6.29</td>
                <td>$8.99</td>
                <td>$17.99</td>
                <td>$20.99</td>
            </tr>
            <tr class="desc">
                <td colspan="5">Romaine Lettuce, House Made Croutons, Parmesan Cheese</td>
            </tr>
            <tr class="desc">
                <td>Add Chicken</td>
                <td>$1.50</td>
                <td>$3.00</td>
                <td>$7.00</td>
                <td>$9.00</td>
            </tr>
            <tr class="has-desc">
                <th>Chicken Teriyaki</th>
                <td>$6.99</td>
                <td>$10.49</td>
                <td>$24.29</td>
                <td>$29.99</td>
            </tr>
            <tr class="desc">
                <td colspan="5">Assorted Greens, Mandarin Oranges, Pea Pods, Red Onions, House Made
                    Croutons. Topped with Teriyaki Chicken, Poppy Seed Dressing</td>
            </tr>
            <tr class="has-desc">
                <th>Tossed</th>
                <td>$6.29</td>
                <td>$8.99</td>
                <td>$17.99</td>
                <td>$20.99</td>
            </tr>
            <tr class="desc">
                <td colspan="5">Assorted Lettuce, Beets, Red Onions, Cucumbers, Green Peppers, Chick
                    Peas
                </td>
            </tr>
            <tr class="has-desc">
                <th>Homemade Dressing</th>
                <td colspan="4">$3.00 – 8&nbsp;oz. &nbsp; &nbsp; $5.49 – 1 pint</td>
            </tr>
            <tr class="desc">
                <td colspan="5">Greek, Russian, Ranch, Caesar, Blue Cheese, Poppy Seed, Honey Dijon</td>
            </tr>
        </tbody>
    </table>
</div>

<div id="beverages" class="menu-cat">
    <h2>Drinks</h2>
    <table class="table">
        <thead>
            <tr>
                <td>&nbsp;</td>
                <td>Regular</td>
                <td>Large</td>
            </tr>
        </thead>
        <tbody>
            <tr class="has-desc">
                <th>We Proudly Serve Pepsi Products</th>
                <td>$1.59</td>
                <td>$1.89</td>
            </tr>
            <tr class="desc">
                <td colspan="3">Pepsi, Diet Pepsi, Mtn Dew, Mist Twist, Dr. Pepper, Lemonade, Fresh
                    Brewed Ice Tea</td>
            </tr>
        </tbody>
    </table>
</div>
<div id="desserts" class="menu-cat">
    <h2>Dessert</h2>
    <ul>
        <li>
            <h3>Gourmet Cookies</h3>
            <div>$0.99</div>
        </li>
        <li>
            <h3>Individual Cheesecake</h3>
            <div>$1.99</div>
        </li>
        <li>
            <h3>Brownies</h3>
            <div>$1.99</div>
        </li>
    </ul>
</div>
<p class="text-center">Prices subject to change.</p>

@stop

@section('scripts')
@stop