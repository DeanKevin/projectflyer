@extends('layout')  

@section('content')

<h1>Selling Your Home?</h1>

<hr>

<div class="row">
    <form method="POST" action="/flyers" enctype="multipart/form-data" class="col-md-6">
        
        {{ csrf_field() }}

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($error->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <div class="form-group">
            <label for="street">Street:</label>
            <input type="text" name="street" id="street" class="form-control" value="{{ old('street') }}">
        </div>

        <div class="form-group">
            <label for="city">City:</label>
            <input type="text" name="city" id="city" class="form-control" value="{{ old('city') }}">
        </div>

        <div class="form-group">
            <label for="zip">Zip/Postal code:</label>
            <input type="text" name="zip" id="zip" class="form-control" value="{{ old('zip') }}">
        </div>

        <div class="form-group">
            <label for="name">Country:</label>
            <select id="country" name="country" class="form-control">
                <option value="United States">United States</option>
            </select>
        </div>

        <div class="form-group">
            <label for="name">State:</label>
            <input type="text" name="state" id="state" class="form-control" value="{{ old('state') }}">
        </div>

        <div class="form-group">
            <label for="price">Sale Price:</label>
            <input type="text" name="price" id="price" class="form-control" value="{{ old('price') }}">
        </div>

        <div class="form-group">
            <label for="description">Home Description:</label>
            <textarea type="text" name="description" id="description" class="form-control" rows ="10">
                {{ old('description') }}
            </textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Create Flyer</button>
        </div>
    </form>
</div>

@stop