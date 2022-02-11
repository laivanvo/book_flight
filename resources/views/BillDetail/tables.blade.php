
@extends('index')
@section('content')
<main>
    <div class = "container-fluid px-4">
        <h1 class = "mt-4">Tables</h1>
        <ol class = "breadcrumb mb-4">
            <li class = "breadcrumb-item"><a href = "{{ route('bill_detail.create') }}">Dashboard</a></li>
            <li class = "breadcrumb-item active">Tables</li>
        </ol>
        <div class = "card mb-4">
            
        </div>
        <div class = "card mb-4">
            
            <div class = "card-body">
                
                <table id = "datatablesSimple">
                    <thead>
                        <tr>
                            <th>bill_id</th>
                            <th>chair</th>
                            
                            <th>###</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>bill_id</th>
                            <th>chair</th>
                            <th>###</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($bill_details as $bill_detail)
                        <tr>
                            <td>{{ $bill_detail->bill_id }}</td>
                            <td>{{ $bill_detail->chair }}</td>
                            
                            <td>
                                <a   href = "{{route('bill_detail.edit', $bill_detail->id)}}"><em class = "icon ni ni-edit-alt"></em><button style = "width: 80px;background-color:rgb(41, 119, 155)">Edit</button></a>
                            <br><a   href = "{{route('bill_detail.show', $bill_detail->id)}}"><em class = "icon ni ni-edit-alt"></em><button style = "width: 80px;background-color:yellow">Detail</button></a>
                            <form action = "{{ route('bill_detail.destroy',$bill_detail->id) }}" method = "POST">
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