@extends("layouts.main-layout")

@section("content")

  <div class="container">
    <h1>HELLO WORLD</h1>

    <div>
      <ul>
        @foreach ($employees as $employee)
          <li>
            <span>{{ $employee -> firstname }}</span>
            <span>{{ $employee -> lastname }}</span>
          </li>
        @endforeach
      </ul>
    </div>
  </div>

@endsection
