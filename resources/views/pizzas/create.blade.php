@extends('layouts.layout')

@section('content')
<div class="wrapper create-pizza">
    <h1>Create A New Pizza</h1>
    <form action="/pizzas" method="POST">
        @csrf
        <label for="name"> Your Name </label>
        <input type="text" id="name" name="name">
        <label for="type"> Choose Pizza Type </label>
        <select name="type" id="type">
            <option value="margarita">Margarita</option>
            <option value="Hawaiian">Hawaiian</option>
            <option value="Veg Supreme">Veg Supreme</option>
            <option value="Volcano">Volcano</option>
        </select>

        <label for="base"> Choose Pizza Base </label>
        <select name="base" id="base">
            <option value="Cheesy Crust">Cheesy Crust</option>
            <option value="Garlic Crust">Garlic Crust</option>
            <option value="Thin & Crispy">Thin & Crispy</option>
            <option value="Thick">Thick</option>
        </select>
        <fieldset>
            <label> Extra Toppings </label> </br>
            <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms<br />
            <input type="checkbox" name="toppings[]" value="peppers">Peppers<br />
            <input type="checkbox" name="toppings[]" value="garlic">Garlic<br />
            <input type="checkbox" name="toppings[]" value="olives">Olives<br />



        </fieldset>
        <input type="submit" value="Order Pizza">
    </form>
</div>
@endsection

