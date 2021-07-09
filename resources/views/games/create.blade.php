@extends('layouts.layout')

@section('content')
<div class="wrapper create-games">
    <h1> ORDER THE NEW GAME</h1>
    <form action="/games" method="POST">
        @csrf
        <label for="name">Your name:</label>
        <input type="text" id="name" name="name">

        <label for="genre">Choose game genre:</label>
            <select name="genre" id="genre">
                <option value="action"> Action </option>
                <option value="horror"> Horror </option>
                <option value="rpg"> RPG </option>  
                <option value="kids">For Kids</option>    
            </select>
        <label for="quality">Choose game quality:</label>
            <select name="quality" id="quality">
                <option value="normal"> Normal </option>
                <option value="HD"> High-Definition(HD) </option>
                <option value="hdrip"> HD-RIP </option>  
                <option value="UHD">Ultra-HD</option>    
            </select>
    <input type="submit" value="Order Game">
</form>
</div>
@endsection