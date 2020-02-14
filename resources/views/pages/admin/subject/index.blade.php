@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Subjects
                    <a href="{{ route('admin.subject.create') }}" class="btn btn-primary btn-sm float-right">Add</a>
                </div>

                <div class="card-body">
                    <table id="dataTable" class="table dt-responsive nowrap">
                        <thead class="thead-dark">
                            <tr>
                                <th>No</th>
                                <th>Title</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
<script>
    $(function() {
        $('#dataTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('admin.subject.index') }}",
                columns: [
                    {data: 'DT_RowIndex', name: 'id'},
                    {data: 'title', name: 'title'},
                    {data: 'action', name: 'action', orderable: false, searchable: false}
                ]
            });
        });
</script>
@endpush
