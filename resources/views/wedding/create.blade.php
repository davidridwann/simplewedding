@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create Wedding</div>

                    <div class="card-body">

                        @if (Session::has('status'))
                            <div class="mt-4 alert alert-{{ session('status') }}" role="alert">{{ session('message') }}</div>
                        @endif

                        @if (count($errors) > 0)

                            <div class="alert alert-danger">

                                <strong>Whoops!</strong> There were some problems with your input.

                                <ul>

                                    @foreach ($errors->all() as $error)

                                        <li>{{ $error }}</li>

                                    @endforeach

                                </ul>

                            </div>

                        @endif

                        <form method="POST" action="{{ route('wedding.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="groom" class="col-md-4 col-form-label text-md-right">Groom name</label>

                                <div class="col-md-6">
                                    <input id="groom" type="text" class="form-control @error('groom') is-invalid @enderror" name="groom" value="{{ old('groom') }}" required autocomplete="groom" autofocus>

                                    @error('groom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="bride" class="col-md-4 col-form-label text-md-right">Bride name</label>

                                <div class="col-md-6">
                                    <input id="bride" type="text" class="form-control @error('bride') is-invalid @enderror" name="bride" value="{{ old('bride') }}" required autocomplete="bride" autofocus>

                                    @error('bride')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Wedding date</label>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-group date" id="datetimepicker1" data-target-input="nearest">
                                            <input type="text" name="wedding_date" class="form-control datetimepicker-input" data-target="#datetimepicker1"/>
                                            <div class="input-group-append" data-target="#datetimepicker1" data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right">Hero Image</label>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="hero_image">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Love Story</label>

                                <div class="col-md-6">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="love_story"></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right">Love Story Image</label>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="love_story_image">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right">Gallery Image 1</label>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image_1">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right">Gallery Image 2</label>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image_2">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right">Gallery Image 3</label>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image_3">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right">Gallery Image 4</label>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image_4">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Wedding Info</label>

                                <div class="col-md-6">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="wedding_info"></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Ceremony date</label>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-group date" id="datetimepicker2" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker2" name="ceremony_date"/>
                                            <div class="input-group-append" data-target="#datetimepicker2" data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right">Ceremony place</label>

                                <div class="col-md-6">
                                    <input id="ceremony_place" type="text" class="form-control" name="ceremony_place" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="bride" class="col-md-4 col-form-label text-md-right">Ceremony address</label>

                                <div class="col-md-6">
                                    <input id="ceremony_address" type="text" class="form-control" name="ceremony_address" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Reception date</label>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-group date" id="datetimepicker3" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker3" name="reception_date"/>
                                            <div class="input-group-append" data-target="#datetimepicker3" data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="bride" class="col-md-4 col-form-label text-md-right">Reception place</label>

                                <div class="col-md-6">
                                    <input id="reception_place" type="text" class="form-control" name="reception_place" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="bride" class="col-md-4 col-form-label text-md-right">Reception address</label>

                                <div class="col-md-6">
                                    <input id="reception_address" type="text" class="form-control" name="reception_address" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Party date</label>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-group date" id="datetimepicker4" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker4" name="party_date"/>
                                            <div class="input-group-append" data-target="#datetimepicker4" data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="bride" class="col-md-4 col-form-label text-md-right">Party place</label>

                                <div class="col-md-6">
                                    <input id="party_place" type="text" class="form-control" name="party_place" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="bride" class="col-md-4 col-form-label text-md-right">Party address</label>

                                <div class="col-md-6">
                                    <input id="party_address" type="text" class="form-control" name="party_address" required>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Save') }}
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
@section('extra_script')
    <script type="text/javascript">
        $(function () {
            $('#datetimepicker1').datetimepicker();
        });
    </script>
@endsection
