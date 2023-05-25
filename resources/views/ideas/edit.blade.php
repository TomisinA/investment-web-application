<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="{{asset('css/ideas/create.css')}}" />
  </head>

  <body>
     
    <div class="form-container">
        <form method="POST" action="{{ route('update-idea', $idea) }}">
            @csrf
            @method('PUT')

            <h2>Update Your Idea</h2>

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" value="{{$idea->title}}" />

                @error('title')
                    <p>{{$message}}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="abstract">Abstract</label>
                <input type="text" name="abstract" value="{{$idea->abstract}}">

                @error('abstract')
                    <p>{{$message}}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="risk rating">Risk Rating</label>
                <select name="risk_rating" id="rating">
                        <option value="">Select a rating</option>
                        @foreach ($risk_ratings as $rating)
                            <option value="{{ $rating->id }}" {{ $idea->risk_rating_id == $rating->id ? 'selected' : '' }}>{{ $rating->name }}</option>
                        @endforeach
                </select>

                @error('risk_rating')
                    <p>{{$message}}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="products">Select Product(s): </label>
                @foreach ($products as $product)
                <div class="checkbox-container">
                    <input type="checkbox" name="products[]" id="product_{{ $product->id }}" value="{{ $product->id }}" {{ $idea->products->contains($product->id) ? 'checked' : '' }}>
                    <label for="product_{{ $product->id }}">{{ $product->name }}</label>
                </div>
                @endforeach

                @error('products')
                    <p>{{$message}}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="content">Content</label>
                <textarea name="content" >{{$idea->content}}</textarea>

                @error('content')
                    <p>{{$message}}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="instruments">Select Instrument(s): </label>
                @foreach ($instruments as $instrument)
                <div class="checkbox-container">
                    <input type="checkbox" name="instruments[]" id="instrument_{{ $instrument->id }}" value="{{ $instrument->id }}" {{ $idea->instruments->contains($instrument->id) ? 'checked' : '' }}>
                    <label for="instrument_{{ $instrument->id }}">{{ $instrument->name }}</label>
                </div>
                @endforeach

                @error('instruments')
                    <p>{{$message}}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="major_sector">Major Sector</label>
                <select name="major_sector" id="major_sector">
                    <option value="">Select a sector</option>
                    @foreach ($sectors as $sector)
                        <option value="{{ $sector->id }}" {{ $idea->major_sector_id == $sector->id ? 'selected' : '' }}>{{ $sector->name }}</option>
                    @endforeach
                </select>

                @error('major_sector')
                    <p>{{$message}}</p>
                @enderror
            </div>

            
            <div class="form-group">
                <label for="minor_sector">Minor Sector</label>
                <select name="minor_sector" id="minor_sector">
                    <option value="">Select a sector</option>
                    @foreach ($sectors as $sector)
                        <option value="{{ $sector->id }}" {{ $idea->minor_sector_id == $sector->id ? 'selected' : '' }}>{{ $sector->name }}</option>
                    @endforeach
                </select>

                @error('minor_sector')
                    <p>{{$message}}</p>
                @enderror
            </div>


            <div class="form-group">
                <label for="region">Region</label>
                <select name="region" id="region">
                    <option value="">Select a region</option>
                    @foreach ($regions as $region)
                        <option value="{{ $region->id }}" {{ $idea->region_id == $region->id ? 'selected' : '' }}>{{ $region->name }}</option>
                    @endforeach
                </select>

                @error('region')
                    <p>{{$message}}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="country">Country</label>
                <select name="country" id="country">
                    <option value="">Select a country</option>
                    @foreach ($countries as $country)
                        <option value="{{ $country->id }}" {{ $idea->country_id == $country->id ? 'selected' : '' }}>{{ $country->name }}</option>
                    @endforeach
                </select>

                @error('country')
                    <p>{{$message}}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="currency">Currency</label>
                <select name="currency" id="currency">
                    <option value="">Select a currency</option>
                    @foreach ($currencies as $currency)
                        <option value="{{ $currency->id }}" {{ $idea->currency_id == $currency->id ? 'selected' : '' }}>{{ $currency->name }}</option>
                    @endforeach
                </select>

                @error('currency')
                    <p>{{$message}}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="expiry_date">Expiry Date</label>
                <input type="date" name="expiry_date" value="{{ $idea->expiry_date }}">

                @error('expiry_date')
                    <p>{{$message}}</p>
                @enderror
            </div>


            <div>
                <button type="submit">Update Idea</button>
                <a href = "{{ route('show-ideas') }}"><button>Cancel</button></a>
            </div>

        </form>
    </div>

  </body>
</html>
