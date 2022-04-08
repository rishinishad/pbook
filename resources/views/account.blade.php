@extends('layouts.app')

@section('content')

<form class="form-inline" action="/ledger" method="GET">
  @csrf
  <div class="form-group">
    <label for="Name">Name:</label>
    <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
  </div>
  <div class="form-group">
    <label for="Mobno">Mob no. :</label>
    <input type="number" class="form-control" id="mobno" placeholder="Enter Mob no." name="mobno">
  </div>
  <button type="submit" class="btn btn-primary">
    {{ __('Add Ledger') }}
</button>
</form><br>

<table class="table table-bordered">
    <thead>
      <tr>
        <th>Sl.No.</th>
        <th>Name</th>
        <th>Amount</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    </tbody>
  </table>
</div>

</body>
</html>

@endsection