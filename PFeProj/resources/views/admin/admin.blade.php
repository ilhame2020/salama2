@extends('components.admindashboard')
@section('content')
<h2 class="text-primary" style=" margin-top: 25px;">Liste des professeurs</h2>
<div class="table-responsive  ">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">CIN</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($profs as $prof)
      <tr class="p-2 ml-2 mt-2 mr-2 mb-2 " id="ligne">
       <th scope="row"   >{{$prof->cin}} </th>
      <td >{{$prof->name}}</td>
      <td >{{$prof->email}}</td>
  </tr>
  @endforeach
    </tbody>
  </table>



</div>


@endsection