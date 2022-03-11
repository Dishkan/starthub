@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="{{route('founder')}}">Create a project</a>
                </div>

                <div class="card-body">
                @if($projects)
                <table style="width: 100%;">
                <tr>
                    <td style="color:cornflowerblue">
                       #
                    </td>
                    <td style="color:cornflowerblue">
                       Name
                    </td>
                    <td style="color:cornflowerblue">
                       Description
                    </td>
                    <td style="color:cornflowerblue">
                       Review
                    </td>
                    <td style="color:cornflowerblue">
                       Achivements
                    </td>
                    <td style="color:cornflowerblue">
                       Section
                    </td>
                    <td style="color:cornflowerblue">
                       Photo
                    </td>
                </tr>
                 @foreach($projects as $project)
                 <tr>
                     <td>
                         {{$project->id}}
                     </td>
                     <td>
                         {{ $project->name }}
                     </td>
                     <td>
                         {{ $project->description }}
                     </td>
                     <td>
                         {{ $project->review }}
                     </td>
                     <td>
                         {{ $project->achivements }}
                     </td>
                     <td>
                         {{ $project->section }}
                     </td>
                     <td>
                         {{ $project->photo }}
                     </td>
                 </tr>
                 @endforeach
                </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
