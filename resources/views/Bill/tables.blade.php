
@extends('index')
@section('content')
<main>
    <div class = "container-fluid px-4">
        <h1 class = "mt-4">Tables</h1>
        <ol class = "breadcrumb mb-4">
            <li class = "breadcrumb-item"><a href = "{{ route('bill.create') }}">Create</a></li>
            <li class = "breadcrumb-item active">Tables</li>
        </ol>
        <div class = "card mb-4">
            
        </div>
        <div class = "card mb-4">
            
            <div class = "card-body">
                
                <table id = "datatablesSimple">
                    <thead>
                        <tr>
                            <th>user_id</th>
                            <th>total_money</th>
                            
                            <th>###</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>user_id</th>
                            <th>total money</th>
                            
                            <th>###</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($bills as $bill)
                        <tr>
                            <td>{{ $bill->user_id }}</td>
                            <td>{{ $bill->total_money }}</td>
                            
                            <td>
                                <a   href = "{{route('bill.edit', $bill->id)}}"><em class = "icon ni ni-edit-alt"></em><button style = "width: 80px;background-color:rgb(41, 119, 155)">Edit</button></a>
                            <br><a   href = "{{route('bill.show', $bill->id)}}"><em class = "icon ni ni-edit-alt"></em><button style = "width: 80px;background-color:yellow">Detail</button></a>
                            <form action = "{{ route('bill.destroy',$bill->id) }}" method = "POST">
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