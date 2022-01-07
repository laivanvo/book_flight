
@extends('index')
@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Tables</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('airline_company.create') }}">Create</a></li>
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
                            <th>###</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>###</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($airline_companys as $airline_company)
                        <tr>
                            <td>{{ $airline_company->name_airline_company }}</td>
                            <td>
                                <a   href="{{route('airline_company.edit', $airline_company->id)}}"><em class="icon ni ni-edit-alt"></em><button style="width: 80px;background-color:rgb(41, 119, 155)">Edit</button></a>
                            <br><a   href="{{route('airline_company.show', $airline_company->id)}}"><em class="icon ni ni-edit-alt"></em><button style="width: 80px;background-color:yellow">Detail</button></a>
                            <form action="{{ route('airline_company.destroy',$airline_company->id) }}" method="POST">
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