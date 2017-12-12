@extends('layouts.app')
@section('display')
    School Details
@endsection
@section('content')
    <div class="container">
        @if(!empty($school))

        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>School Id</th>
                <th>School Name</th>
                <th>District</th>
                <th>Contact No</th>
                <th>Owner</th>
                <th>View</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($school as $sch)
            <tr>
                <td>{{$sch->SchoolID }} </td>
                <td>{{$sch->SchoolName }} </td>
                <td>{{$sch->City}}</td>
                <td>{{$sch->ContactNumber }}</td>
                <td>{{$sch->Owner }}</td>
                <td> <a href="{{route('School.viewfullDetailSch', $sch->SchoolID)}}" class="btn btn-success">Details</a></td>
                <td><a href="#" class="btn btn-warning">Edit</a></td>
                <td><a href="#" class="btn btn-danger" onclick="return confirm('Are you sure to delete?')">Delete</a></td>
            </tr>
            @endforeach
            </tbody>
        </table>
            @endif
    </div>

    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>


@endsection