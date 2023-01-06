@extends('layouts.main')

@section('content')
    <fieldset id="question1">
        <div class="container mt-3">
        <h4>This is the Question</h4>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="question1" id="flexRadioDefault1">
    <label class="form-check-label" for="flexRadioDefault1">
        Answer 1
    </label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="question1" id="flexRadioDefault2" checked>
        <label class="form-check-label" for="flexRadioDefault2">
            Answer 2
        </label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="question1" id="flexRadioDefault2" checked>
        <label class="form-check-label" for="flexRadioDefault2">
            Answer 3
        </label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="question1" id="flexRadioDefault2" checked>
        <label class="form-check-label" for="flexRadioDefault2">
            Answer 4
        </label>
        </div>
        </div>
</fieldset>

@endsection