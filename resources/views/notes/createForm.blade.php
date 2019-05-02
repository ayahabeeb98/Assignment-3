@extends ('layout.base_layout')
@section('title')
    <title>Add New Notes</title>
@endsection
@section('content')

    <div class="row">
        <div class="col-md-7">
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-sticky-note font-green"></i>
                        <span class="caption-subject bold font-green uppercase">Add New Note</span>
                    </div>
                </div>
                <div class="portlet-body">

                    @if(session('success'))
                        <div class="alert alert-success">
                            {{session('success')}}
                        </div>
                    @endif

                    <form role="form" method="post" action="{{Route('note.store')}}">
                        @csrf
                        <div class="form-group">
                            <label class="control-label">Note Title</label>
                            <input type="text" placeholder=" NOTE TITLE" class="form-control" value="{{old('note_title')}}" name="note_title" />
                        </div>

                        <div class="form-group">
                            <label class="control-label">Description</label>
                            <textarea class="form-control" rows="3" placeholder=" NOTE DESCRIPTION" value="{{old('description')}}" name="description"></textarea>
                        </div>

                        <div class="margin-top-10">
                            <input type="submit" name="sub" class="btn btn-primary">
                            <a href="javascript:;" class="btn default">Cancel </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection