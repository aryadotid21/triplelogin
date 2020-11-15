@extends('layouts.app')
@section('content')



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Order Data</div>

                <div class="card-body">
                @foreach ($orders as $data)
                    <form method="get" action="{{$data -> id}}/update">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$data -> name}}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$data -> email}}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{$data -> phone}}" required autocomplete="phone">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>
                            <div class="col-md-6">
                                <input id="city" type="text" class="form-control" name="city" value="{{$data -> city}}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="zip" class="col-md-4 col-form-label text-md-right">{{ __('Zip') }}</label>
                            <div class="col-md-6">
                                <input id="zip" type="text" class="form-control" name="zip" value="{{$data -> zip}}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>
                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address" value="{{$data -> address}}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="laptop" class="col-md-4 col-form-label text-md-right">{{ __('Laptop') }}</label>
                            <div class="col-md-6">
                                <input id="laptop" type="text" class="form-control" name="laptop" value="{{$data -> laptop}}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="dayprice" class="col-md-4 col-form-label text-md-right">{{ __('Day Price') }}</label>
                            <div class="col-md-6">
                                <input id="dayprice" type="text" class="form-control" name="dayprice" value="{{$data -> dayprice}}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="duration" class="col-md-4 col-form-label text-md-right">{{ __('Duration') }}</label>
                            <div class="col-md-6">
                                <input id="duration" type="text" class="form-control" name="duration" value="{{$data -> duration}}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="totprice" class="col-md-4 col-form-label text-md-right">{{ __('Total Price') }}</label>
                            <div class="col-md-6">
                                <input id="totprice" type="text" class="form-control" name="totprice" value="{{$data -> totprice}}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="pickupdate" class="col-md-4 col-form-label text-md-right">{{ __('Pickup Date') }}</label>
                            <div class="col-md-6">
                                <input id="pickupdate" type="text" class="form-control" name="pickupdate" value="{{$data -> pickupdate}}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="status" class="col-md-4 col-form-label text-md-right">{{ __('Status') }}</label>
                            <div class="col-md-3">
                            <select class="form-control" name="status">
                                <option value="">Pending</option>
                                <option value="On Process">On Process</option>
                                <option value="Finished">Finished</option>
                            </select>
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control" value="@if (empty($data->usertype))Pending
                            @else
                            {{$data -> usertype}}
                            @endif" readonly>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Edit Data
                                </button>
                                <a class="btn btn-secondary" href="{{url()->previous()}}">Cancel
                                </a>
                            </div>
                        </div>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
