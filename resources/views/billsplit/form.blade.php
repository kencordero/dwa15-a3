@extends('layouts.master')

@section('title')
    Bill split
@endsection

@section('content')
    <h1 class="text-center">Bill Splitter</h1>
    <form method="get" action="/">
        <label for="total">Bill total:</label>
        <input type="text" name="total" id="total"></br>

        <label for="splits">Splits: </label>
        <input type="text" name="splits" id="splits"></br>

        <label for="tip">Tip:</label>
        <select name="tip" id="tip" required>
            <option value"">Choose</option>
            <option value="10">10%</option>
            <option value="15">15%</option>
            <option value="20">20%</option>
        </select></br>

        <input type="submit" value="Calculate">
    </form>
@endsection
