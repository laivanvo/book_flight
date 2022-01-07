
@extends('index')
@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Tables</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('user.create') }}">Create</a></li>
            <li class="breadcrumb-item active">Tables</li>
        </ol>
        <div class="card mb-4">
            
        </div>
        <div class="card mb-4">
            
            <div class="card-body">
                
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>name</th>
                            <th>email</th>
                            <th>password</th>
                            <th>role_id</th>
                            <th>###</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>name</th>
                            <th>email</th>
                            <th>password</th>
                            <th>role_id</th>
                            <th>###</th>
                            <th>###</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->password  }}</td>
                            <td>{{ $user->role_id }}</td>
                            
                            <td>
                                <a   href="{{route('user.edit', $user->id)}}"><em class="icon ni ni-edit-alt"></em><button style="width: 80px;background-color:rgb(41, 119, 155)">Edit</button></a>
                            <br><a   href="{{route('user.show', $user->id)}}"><em class="icon ni ni-edit-alt"></em><button style="width: 80px;background-color:yellow">Detail</button></a>
                            <form action="{{ route('user.destroy',$user->id) }}" method="POST">
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