<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="{{asset('css/ideas/show.css')}}" />
  </head>

  <body>

    <h2>{{$idea->title}}</h2>
    <div>
      <p>{{$idea->abstract}}</p>
    </div>

    <div class="container">
      <table>
        <tbody>

          <tr>
            <td>Title</td>
            <td>{{$idea->title}}</td>
          </tr>

          @if(auth()->id() != $idea->creator_id)
            <tr>
              <td>Author</td>
              <td>{{$idea->creator->name}}</td>
            </tr>
          @endif

          <tr>
            <td>Abstract</td>
            <td>{{$idea->abstract}}</td>
          </tr>

          <tr>
            <td>Risk Rating</td>
            <td>{{ $idea->riskRating->name }}</td>
          </tr>

          <tr>
            <td>Product Type</td>
            <td>
              @foreach($idea->products as $product)
                {{ $product->name }}{{ $loop->last ? '' : ', ' }}
              @endforeach
            </td>
          </tr>

          <tr>
            <td>Content</td>
            <td>{{$idea->content}}</td>
          </tr>

          <tr>
            <td>Instruments</td>
            <td>
              @foreach($idea->instruments as $instrument)
                {{ $instrument->name }}{{ $loop->last ? '' : ', ' }}
              @endforeach
            </td>
          </tr>

          <tr>
            <td>Major Sector</td>
            <td>{{ $idea->majorSector->name }}</td>
          </tr>

          <tr>
            <td>Minor Sector</td>
            <td>{{ $idea->minorSector->name }}</td>
          </tr>

          <tr>
            <td>Region</td>
            <td>{{ $idea->region->name }}</td>
          </tr>

          <tr>
            <td>Country</td>
            <td>{{ $idea->country->name }}</td>
          </tr>

          <tr>
            <td>Currency</td>
            <td>{{ $idea->currency->name }}</td>
          </tr>

          <tr>
            <td>Expiry Date</td>
            <td>{{ $idea->expiry_date }}</td>
          </tr>

        </tbody>
      </table>

      @if(auth()->id() == $idea->creator_id)
        <a href=" {{route('update-idea-form', $idea->id)}} "><button type="submit">Edit Idea</button></a>

        <div>
          <form method="POST" action=" {{route('delete-idea', $idea->id)}} ">
              @csrf
              @method('DELETE')

              <button>Delete Idea</button>
          </form>
        </div>
      @endif

    </div>

  </body>
</html>
