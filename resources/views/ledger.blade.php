@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="app.css">
<form class="form-inline" action="/ledge">
    <div class="form-group">
        <label for="Date">Date:</label>
        <input type="date" class="form-control" id="date" placeholder="Enter date" name="date">
    </div>
  
    <div class="form-group">
        <label for="cr">Cr:</label>
        <input type="number" class="form-control" id="cr" placeholder="Enter cr" name="cr" min="0" max="1000" >
    </div>
    <div class="form-group">
        <label for="dr">Dr:</label>
        <input type="number" class="form-control" id="dr" placeholder="Enter dr" name="dr" min="0" max="1000">
    </div>
    {{-- <div class="form-group">
        <label for="amount">Amount:</label>
        <input type="number" class="form-control" id="amount" placeholder="Enter Amount" name="amount" min="0" max="5000000000">
    </div> --}}
    <div class="form-group">
        <input type="submit" value="Submit">
    </div>
</form>

@foreach ($ledgers as $ledger)
    {{$ledger->id}} <br>
    {{$ledger->date}}<br>
    {{$ledger->name}}<br>
    {{$ledger->cr}}<br>
    {{$ledger->dr}}<br>
    {{$ledger->amount}}<br>
@endforeach


@endsection