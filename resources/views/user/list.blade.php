 @extends('layouts.app')
 @section('content')
 @foreach ($hocsinhs as $hocsinh)
         <div>hoc sinh thu:{{ $hocsinh->id }}</div>
         <div>Name:{{ $hocsinh->name  }}</div>
         <div>Phone:{{ $hocsinh->phone  }}</div>
         <div>Id_card:{{ $hocsinh->id_card  }}</div>
        <br>
        
@endforeach
<div>{{ $hocsinhs->links() }}</div>
@endsection

