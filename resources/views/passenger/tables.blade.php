
@extends('index')
@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Tables</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('passenger.create') }}">Create</a></li>
            <li class="breadcrumb-item active">Tables</li>
        </ol>
        <div class="card mb-4">
            
        </div>
        <div class="card mb-4">
            
            <div class="card-body">
                
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>bill</th>
                            <th>name</th>
                            <th>cmnd</th>
                            <th>phone</th>
                            <th>age</th>
                            <th>gender</th>
                            <th>nationality</th>
                            <th>###</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>bill</th>
                            <th>name</th>
                            <th>cmnd</th>
                            <th>phone</th>
                            <th>age</th>
                            <th>gender</th>
                            <th>nationality</th>
                            <th>###</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($passengers as $passenger)
                        <tr>
                            <td>{{ $passenger->bill_id }}</td>
                            <td>{{ $passenger->name_passenger }}</td>
                            <td>{{ $passenger->CMND  }}</td>
                            <td>{{ $passenger->phone  }}</td>
                            <td>{{ $passenger->age }}</td>
                            <td>{{ $passenger->gender  }}</td>
                            <td>{{ $passenger->nationality  }}</td>
                            <td>
                                <a   href="{{route('passenger.edit', $passenger->id)}}"><em class="icon ni ni-edit-alt"></em><button style="width: 80px;background-color:rgb(41, 119, 155)">Edit</button></a>
                            <br><a   href="{{route('passenger.show', $passenger->id)}}"><em class="icon ni ni-edit-alt"></em><button style="width: 80px;background-color:yellow">Detail</button></a>
                            <form action="{{ route('passenger.destroy',$passenger->id) }}" method="POST">
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