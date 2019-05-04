@extends ('layout.base_layout')
@section('title')
    <title>All Notes</title>
@endsection
@section('style')
    <style>
        th {
            background-color: #32C5D2;
            color: #fff;
            padding: 15px !important;
        }
    </style>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-sticky-note font-green"></i>
                        <span class="caption-subject bold font-green uppercase">ALL Notes</span>
                    </div>
                    <div class="actions">
                        <a href="{{route('note.create')}}" class="btn btn-circle blue-steel btn-outline">
                            <i class="fa fa-plus"></i> Add New  </a>
                        <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;"> </a>
                    </div>
                </div>
                <div class="portlet-body">
                    <table class="table table-bordered table-striped table-condensed flip-content">
                        <thead class="flip-content">
                        <tr>
                            <th>#</th>
                            <th> Note </th>
                            <th>Description</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($notes as $note)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{$note->note_title}}</td>
                                <td>{{$note->description}}</td>
                            </tr>

                        @empty
                            <tr>
                                <td colspan="3"> No NOTES FOUND</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
