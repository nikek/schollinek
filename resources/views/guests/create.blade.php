@extends('app')

@section('content')
<div class="container">
  {!! Form::open(['url' => 'rsvp', 'class' => 'form-horizontal']) !!}

    <div class="form-group">
      <div class="col-sm-offset-3 col-sm-9">
        <h1>RSVP</h1>
      </div>
    </div>

    <div class="form-group">
      <label for="name" class="col-sm-3 control-label">Name</label>
      <div class="col-sm-7">
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
      </div>
    </div>

    <div class="row">
      <div class="col-sm-6">
        <div class="form-group">
          <label for="email" class="col-sm-6 control-label">Email</label>
          <div class="col-sm-6">
            {!! Form::email('email', null, ['class' => 'form-control']) !!}
          </div>
        </div>
      </div>

      <div class="col-sm-6">
        <div class="form-group">
          <label for="name" class="col-sm-2 control-label">Phone</label>
          <div class="col-sm-6">
            {!! Form::text('phone', null, ['class' => 'form-control']) !!}
          </div>
        </div>
      </div>
  </div>

  <div class="form-group">
    <label for="food" class="col-sm-3 control-label">Food</label>
    <div class="col-sm-7">
      {!! Form::select('food', [
        'vegetarian' => 'No dead animals, but I love cheese',
        'vegan' => 'No traces of animals.. Go plants!',
        'meat' => 'Dead animals please',
        'other' => 'Allergy/Other (you\'ll get a new field to fill in)',
      ],
      null,
      ['placeholder' => 'Choose your preference', 'class' => 'form-control', 'id' => 'food-form']) !!}
      {!! Form::textarea('food_extra', null, ['class' => 'form-control hidden', 'id' => 'food-extra', 'placeholder' => 'Details regarding allergies or other food preferences']) !!}
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-9">
      <div class="checkbox">
        <label>
          <input type="checkbox" name="alcohol"> I wish to consume alcoholic beverages
        </label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-9">
      <div class="checkbox">
        <label>
          <input type="checkbox" value="1" name="friday" id="friday"> Joining the Friday dinner
        </label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-9">
      <div class="checkbox">
        <label>
          <input type="checkbox" value="1" name="sunday" id="sunday"> Stay for the Sunday brunch
        </label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label for="song" class="col-sm-3 control-label">Favorite Song</label>
    <div class="col-sm-7">
      {!! Form::text('song', null, ['class' => 'form-control', 'placeholder' => 'Song that will make you dance!']) !!}
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-3">
      {!! Form::submit('Respond', ['class' => 'btn btn-primary']) !!}
    </div>
  </div>
  <div class="form-group">
    <p class="help-block col-sm-9 col-sm-offset-3">
      You can only RSVP one person at a time.
    </p>
  </div>

  {!! Form::close() !!}
</div>

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

@stop
