@extends('layouts.app')

@section('content')
<div class="container">
    <div style="justify-content: center;display: flex;margin:auto;">
        <div class="main">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif
                <table class="table">
                    <thead>
                        <tr>

                            <th scope="row" style="text-align: center">Name</th>
                            <td class="align-middle" scope="row">{{ Auth::user()->name }}</td>
                        </tr>
                        <tr>
                            <th scope="row" style="text-align: center">Email</th>
                            <td class="align-middle" scope="row">{{ Auth::user()->email }}</td>
                        </tr>
                        <tr>
                            <th scope="row" style="text-align: center">Adress</th>
                            <td class="align-middle" scope="row">{{ Auth::user()->address }}</td>
                        </tr>
                        <tr>
                            <th scope="row" style="text-align: center">Cellphone</th>
                            <td class="align-middle" scope="row">{{ Auth::user()->cellphone }}</td>
                        </tr>

                    </thead>
                </table>



                {{-- <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div> --}}
            </div>
        </div>
    </div>
</div>
@endsection
