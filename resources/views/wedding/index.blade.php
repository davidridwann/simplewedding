@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    My Wedding
                    @if ($check == 1)
                        <div class="float-right">
                            <button class="btn btn-warning" onclick="window.location.href='{{ route('wedding.edit', $data->id) }}'">Edit</button>
                            <button class="btn btn-danger" onclick="window.location.href='{{ route('wedding.destroy', $data->id) }}'">Delete</button>
                            <button class="btn btn-primary" onclick="window.location.href='{{ route('wedding.show', $data->id) }}'">Go</button>
                        </div>
                    @endif
                </div>

                @if ($check == 1)
                    <div class="card-body">
                        <form>
                            <div class="form-group row">
                                <label for="groom" class="col-md-4 col-form-label text-md-right">Groom name</label>

                                <div class="col-md-6">
                                    <input id="groom" type="text" class="form-control @error('groom') is-invalid @enderror" name="groom" value="{{ $data->groom }}" required autocomplete="groom" autofocus readonly="">

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
                                    <input id="bride" type="text" class="form-control @error('bride') is-invalid @enderror" name="bride" value="{{ $data->bride }}" required autocomplete="bride" autofocus readonly="">

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
                                            <input type="text" name="wedding_date" class="form-control datetimepicker-input" data-target="#datetimepicker1" value="{{ $data->wedding_date }}" readonly=""/>
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
                                        <img src="{{ asset('/upload/users/wedding/'. $data->hero_image) }}" alt="" width="100%" height="100px" style="width: 100%; max-width: 400px; height: auto;">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Love Story</label>

                                <div class="col-md-6">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="love_story" readonly="">{{ $data->love_story }}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right">Love Story Image</label>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <img src="{{ asset('/upload/users/wedding/'. $data->love_story_image) }}" alt="" width="100%" height="100px" style="width: 100%; max-width: 400px; height: auto;">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right">Gallery Image 1</label>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <img src="{{ asset('/upload/users/wedding/'. $data->image_1) }}" alt="" width="100%" height="100px" style="width: 100%; max-width: 400px; height: auto;">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right">Gallery Image 2</label>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <img src="{{ asset('/upload/users/wedding/'. $data->image_2) }}" alt="" width="100%" height="100px" style="width: 100%; max-width: 400px; height: auto;">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right">Gallery Image 3</label>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <img src="{{ asset('/upload/users/wedding/'. $data->image_3) }}" alt="" width="100%" height="100px" style="width: 100%; max-width: 400px; height: auto;">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right">Gallery Image 4</label>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <img src="{{ asset('/upload/users/wedding/'. $data->image_4) }}" alt="" width="100%" height="100px" style="width: 100%; max-width: 400px; height: auto;">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Wedding Info</label>

                                <div class="col-md-6">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="wedding_info" readonly="">{{ $data->wedding_info }}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Ceremony date</label>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-group date" id="datetimepicker2" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker2" name="ceremony_date" value="{{ $data->ceremony_date }}" readonly=""/>
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
                                    <input id="ceremony_place" type="text" class="form-control" name="ceremony_place" value="{{ $data->ceremony_place }}" required readonly="">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="bride" class="col-md-4 col-form-label text-md-right">Ceremony address</label>

                                <div class="col-md-6">
                                    <input id="ceremony_address" type="text" class="form-control" name="ceremony_address" value="{{ $data->ceremony_address }}" required readonly="">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Reception date</label>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-group date" id="datetimepicker3" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker3" name="reception_date" value="{{ $data->reception_date }}" readonly=""/>
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
                                    <input id="reception_place" type="text" class="form-control" name="reception_place" value="{{ $data->reception_place }}" required readonly="">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="bride" class="col-md-4 col-form-label text-md-right">Reception address</label>

                                <div class="col-md-6">
                                    <input id="reception_address" type="text" class="form-control" name="reception_address" value="{{ $data->reception_address }}" required readonly="">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Party date</label>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-group date" id="datetimepicker4" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker4" name="party_date" value="{{ $data->party_date }}" readonly=""/>
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
                                    <input id="party_place" type="text" class="form-control" name="party_place" value="{{ $data->party_place }}" required readonly="">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="bride" class="col-md-4 col-form-label text-md-right">Party address</label>

                                <div class="col-md-6">
                                    <input id="party_address" type="text" class="form-control" name="party_address" value="{{ $data->party_address }}" required readonly="">
                                </div>
                            </div>
                        </form>
                    </div>
                @else
                    <div class="container">
                        <h3>Create Wedding First</h3>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
