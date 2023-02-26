@extends('layouts.app')
@section('pagename')
subjects
@endsection
@section('content')
<div class="col-lg-12">

    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Subjects List</h5>

        <!-- Table with stripped rows -->
        <table id="example1" class="table table-bordered table-condensed table-hover table-striped">
            <thead>

            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Manipulate</th>
            </tr>
            </thead>
            <tbody>
                @foreach($subjects as $subject)
                    <tr>
                        <td>{{ $loop->index+1 }}</td>
{{--                            <td><img src="{{ Storage::disk('local')->url($subject->image) }}" style="max-height: 60px;border-radius: 10%;max-width: 70px"></td>--}}
                        <td>{{ $subject->name }}</td>
                        <td>
                            <form id="del-form-{{ $subject->id }}" action="{{ route('subjects.destroy',$subject) }}" method="post">
                                {{csrf_field()}}
                                {{method_field('delete')}}
                                <div class="btn-group btn-group-sm" role="group">

                                    {{-- @can('subjects.update',Auth::user()) --}}

                                    <a class="btn btn-info" href="{{ route('subjects.edit',$subject) }}"><span class="glyphicon glyphicon-edit"></span>edit</a>
                                    {{-- @endcan --}}

                                     {{-- @can('subjects.delete',Auth::user()) --}}

                                        {{--<input type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger delete-btn" value="delete" />--}}
                                    <a href="#" onclick="
                                            if(confirm('Are you sure to delete')){
                                            event.preventDefault();
                                            document.getElementById('del-form-{{ $subject->id }}').submit();
                                            }
                                            else event.preventDefault();

                                            " class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span>Delete</a>
                                     {{-- @endcan --}}

                                </div>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        <!-- End Table with stripped rows -->
        <a href="{{ route("subjects.create")}}" style="display: inline; float: right" class="btn btn-primary col-lg-3">Add New subject</a>
      </div>
    </div>
</div>


  @endsection
