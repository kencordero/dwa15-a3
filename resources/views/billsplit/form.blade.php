@extends('layouts.master')

@section('title')
    Bill split
@endsection

@section('content')
    <h1 class="text-center">Bill Splitter</h1>
    <form method="get" action="/">
        <label for="total">Bill total:</label>
        <input type="text" name="total" id="total" value="{{ $request->input("total") }}" required><br>

        <label for="splits">Splits: </label>
        <input type="text" name="splits" id="splits" value="{{ $request->input("splits") }}" required><br>

        <label for="tip">Tip:</label>
        <select name="tip" id="tip" required>
            <option value="">Choose</option>
            @for ($i = 0;  $i < 101; $i += 5)
                <option value="{{ $i }}" @if ($request->input("tip") == $i){{ 'selected' }} @endif>{{ $i  }}%</option>
            @endfor
        </select><br>

        <label for="round">Round up?</label>
        <input type="checkbox" id="round" name="round" @if ($request->has("round")) {{ 'checked' }} @endif><br>
        <input type="submit" value="Calculate">
    </form>
    @if(count($errors) > 0)
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @elseif($quotient)
        <div class="alert alert-info">
            <h1>Result</h1>
            <p>Each patron owes ${{ number_format($quotient, 2) }}</p>
        </div>
    @endif
@endsection
