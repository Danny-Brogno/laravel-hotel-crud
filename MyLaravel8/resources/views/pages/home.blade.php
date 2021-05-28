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
            <a href="{{ route('deleteEmployee', $employee -> id) }}">
              <i class="far fa-trash-alt"></i>
            </a>
            <a href="{{ route('editEmployee', $employee -> id) }}">
              <i class="fas fa-pencil-alt"></i>
            </a>
          </li>
        @endforeach
      </ul>
    </div>
  </div>

@endsection
