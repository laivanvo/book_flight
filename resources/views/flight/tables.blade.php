
@extends('index')
@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Tables</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('flight.create') }}">Create</a></li>
            <li class="breadcrumb-item active">Tables</li>
        </ol>
        <div class="card mb-4">
            
        </div>
        <div class="card mb-4">
            
            <div class="card-body">
                
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>route</th>
                            <th>dateDeparture</th>
                            <th>dateArrival</th>
                            <th>###</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>route</th>
                            <th>dateDeparture</th>
                            <th>dateArrival</th>
                            <th>###</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($flights as $flight)
                        <tr>
                            <td>{{ $flight->route_id }}</td>
                            <td>{{ $flight->dateDeparture }}</td>
                            <td>{{ $flight->dateArrival }}</td>
                            <td>
                                <a   href="{{route('flight.edit', $flight->id)}}"><em class="icon ni ni-edit-alt"></em><button style="width: 80px;background-color:rgb(41, 119, 155)">Edit</button></a>
                            <br><a   href="{{route('flight.show', $flight->id)}}"><em class="icon ni ni-edit-alt"></em><button style="width: 80px;background-color:yellow">Detail</button></a>
                            <form action="{{ route('flight.destroy',$flight->id) }}" method="POST">
                                @csrf
                            @method('DELETE')
                            <div ><button type="submit" style="width: 80px;background-color:red">Delete</button></div>
                            </form>
                            </td>
                        </tr>
                        @endforeach                      
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
</main>

@endsection