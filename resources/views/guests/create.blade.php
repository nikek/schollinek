@extends('app')

@section('content')
<div>
  <h1>RSVP</h1>

  {!! Form::open(['url' => 'guests']) !!}

  <div class="form-group">
    {!! Form::label('name', 'Name') !!}
    {!! Form::text('name', null, ['class' => 'form-controller']) !!}
  </div>

  <h2>Contact</h2>

  <div class="form-group">
    {!! Form::label('email', 'Email') !!}
    {!! Form::email('email', null, ['class' => 'form-controller']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('phone', 'Phone number') !!}
    {!! Form::text('phone', null, ['class' => 'form-controller']) !!}
  </div>

  <h2>Feast</h2>
  <div class="form-group">
    {!! Form::label('alcohol', 'I wish to consume alcoholic beverages') !!}
    {!! Form::checkbox('alcohol') !!}
  </div>

  <div class="form-group">
    {!! Form::select('food', [
      'vegetarian' => 'No dead animals, but I love cheese',
      'vegan' => 'No traces of animals.. Go plants!',
      'meat' => 'Dead animals please',
      'other' => 'Allergy/Other (you\'ll get a new field to fill in)',
    ],
    null,
    ['placeholder' => 'The stuff I prefer to eat', 'class' => 'form-controller', 'id' => 'food-form']) !!}
    {!! Form::textarea('food_extra', null, ['class' => 'form-controller hidden', 'id' => 'food-extra', 'placeholder' => 'Details regarding allergies or other food preferences']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('song', 'Song that will make you dance!') !!}
    {!! Form::text('song', null, ['class' => 'form-controller']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('friday', 'Joining the Friday dinner') !!}
    {!! Form::checkbox('friday') !!}
  </div>

  <div class="form-group">
    {!! Form::label('sunday', 'Stay for the Sunday brunch') !!}
    {!! Form::checkbox('sunday') !!}
  </div>

  {!! Form::submit('Go!') !!}


  {!! Form::close() !!}

  <script type="text/javascript">
    var foodField = document.querySelector('#food-form');
    var foodExtraField = document.querySelector('#food-extra');

    foodField.addEventListener('change', function(e) {
      if(e.target.value === 'other') {
        foodExtraField.classList.remove('hidden');
      }
      else {
        foodExtraField.classList.add('hidden');
      }
    })
  </script>

</div>
@stop
