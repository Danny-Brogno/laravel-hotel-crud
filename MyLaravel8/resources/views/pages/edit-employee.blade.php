@extends("layouts.main-layout")

@section("content")

  <div class="">
    <form class="" action="{{ route('updateEmployee', $singleEmployee -> id) }}" method="post">
      @csrf
      @method("POST")
      <!-- NAME -->
      <label for="firstname">Firstname: </label>
      <input type="text" name="firstname" placeholder="Firstname" value="{{ $singleEmployee -> firstname }}">
      <!-- LASTNAME -->
      <label for="">Lastname: </label>
      <input type="text" name="lastname" placeholder="Lastname" value="{{ $singleEmployee -> lastname }}">
      <!-- ROLE -->
      <label for="">Role: </label>
      <input type="text" name="role" placeholder="Role" value="{{ $singleEmployee -> role }}">
      <!-- RAL -->
      <label for="">RAL: </label>
      <input type="text" name="ral" placeholder="Ral" value="{{ $singleEmployee -> ral }}">

      <input type="submit" name="submit" value="Submit">

    </form>
  </div>

@endsection
