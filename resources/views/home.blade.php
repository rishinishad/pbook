@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <form action="logout" method="POST">
                        @csrf
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Logout') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- @foreach ($users as $user) --}}
<a href="/account">
            <button  class="btn btn-primary">
                {{ __('Account') }}
            </button>
        </a>
  
{{-- @endforeach --}}
<form action="#" method="GET">
    <div class="">
            <button type="submit" class="btn btn-primary">
                {{ __('Expenses') }}
            </button>
    </div>
</form>
<form action="#" method="GET">
    <div class="">
            <button type="submit" class="btn btn-primary">
                {{ __('Vehicle') }}
            </button>
    </div>
</form>
<form action="#" method="GET">
    <div class="">
            <button type="submit" class="btn btn-primary">
                {{ __('Items') }}
            </button>
    </div>
</form>

@endsection
