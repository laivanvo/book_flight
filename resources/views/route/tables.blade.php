
@extends('index')
@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Tables</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('hocsinh.create') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Tables</li>
        </ol>
        <div class="card mb-4">
            
        </div>
        <div class="card mb-4">
            
            <div class="card-body">
                
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Id_card</th>
                            <th>###</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Id_card</th>
                            <th>###</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($hocsinhs as $hocsinh)
                        <tr>
                            <td>{{ $hocsinh->name }}</td>
                            <td>{{ $hocsinh->phone }}</td>
                            <td>{{ $hocsinh->id_card  }}</td>
                            <td>
                                <a   href="{{route('hocsinh.edit', $hocsinh->id)}}"><em class="icon ni ni-edit-alt"></em><button style="width: 80px;background-color:rgb(41, 119, 155)">Edit</button></a>
                            <br><a   href="{{route('hocsinh.show', $hocsinh->id)}}"><em class="icon ni ni-edit-alt"></em><button style="width: 80px;background-color:yellow">Detail</button></a>
                            <form action="{{ route('hocsinh.destroy',$hocsinh->id) }}" method="POST">
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