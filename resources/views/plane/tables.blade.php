
@extends('index')
@section('content')
<main>
    <div class = "container-fluid px-4">
        <h1 class = "mt-4">Tables</h1>
        <ol class = "breadcrumb mb-4">
            <li class = "breadcrumb-item"><a href = "{{ route('plane.create') }}">Create    </a></li>
            <li class = "breadcrumb-item active">Tables</li>
        </ol>
        <div class = "card mb-4">
            
        </div>
        <div class = "card mb-4">
            
            <div class = "card-body">
                
                <table id = "datatablesSimple">
                    <thead>
                        <tr>
                            <th>flight_id</th>
                            <th>airline_company_id</th>
                            <th>name_plane</th>
                            <th>category_id</th>
                            <th>price</th>
                            <th>image</th>
                            <th>chair</th>
                            <th>status</th>
                            <th>###</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>flight_id</th>
                            <th>airline_company_id</th>
                            <th>name_plane</th>
                            <th>category_id</th>
                            <th>price</th>
                            <th>image</th>
                            <th>chair</th>
                            <th>status</th>
                            <th>###</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($planes as $plane)
                        <tr>
                            <td>{{ $plane->flight_id }}</td>
                            <td>{{ $plane->airline_company_id }}</td>
                            <td>{{ $plane->name_plane }}</td>
                            <td>{{ $plane->category_id }}</td>
                            <td>{{ $plane->price }}</td>
                            <td>{{ $plane->image }}</td>
                            <td>{{ $plane->chair }}</td>
                            <td>{{ $plane->status }}</td>
                            
                            <td>
                                <a   href = "{{route('plane.edit', $plane->id)}}"><em class = "icon ni ni-edit-alt"></em><button style = "width: 80px;background-color:rgb(41, 119, 155)">Edit</button></a>
                            <br><a   href = "{{route('plane.show', $plane->id)}}"><em class = "icon ni ni-edit-alt"></em><button style = "width: 80px;background-color:yellow">Detail</button></a>
                            <form action = "{{ route('plane.destroy',$plane->id) }}" method = "POST">
                                @csrf
                            @method('DELETE')
                            <div ><button type = "submit" style = "width: 80px;background-color:red">Delete</button></div>
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