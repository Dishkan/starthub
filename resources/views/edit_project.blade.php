@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div>
        <a href="{{route('home')}}">
                <button type="button" class="btn btn-primary">Back</button>
                </a>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit the project') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('project_store') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="description" class="col-md-4 col-form-label text-md-end">{{ __('Description') }}</label>

                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description">

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="text" class="col-md-4 col-form-label text-md-end">{{ __('Review') }}</label>
                            <div class="col-md-6">
                            <input id="review" type="text" class="form-control @error('review') is-invalid @enderror" name="review" value="{{ old('review') }}" required autocomplete="review">
                                @error('review')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="achivements" class="col-md-4 col-form-label text-md-end">{{ __('Achivements') }}</label>

                            <div class="col-md-6">
                                <input id="achivements" type="text" class="form-control @error('achivements') is-invalid @enderror" name="achivements" required autocomplete="achivements">

                                @error('achivements')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="section" class="col-md-4 col-form-label text-md-end">{{ __('Section') }}</label>

                            <div class="col-md-6">
                                <input id="section" type="text" class="form-control @error('section') is-invalid @enderror" name="section" required autocomplete="section">

                                @error('section')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="photo" class="col-md-4 col-form-label text-md-end">{{ __('Photo') }}</label>

                            <div class="col-md-6">
                                <input type="file" class="custom-file-input" name="photo" required autocomplete="photo">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Create') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
