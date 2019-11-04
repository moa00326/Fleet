<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Car Application</title>
    </head>
    <body>
    <div class
    <div class="container-fluid">
      <div class = "row">
        <div class="col-md-6">
          <form action="{{route('cars.create')}}" method="post">
            @csrf
            <div class="row form-group"
            <div class="col-md-12">
              <label for="">VehicleTitle: </label>
              <input type="text" name="VehicleTitle" class="form-control""required>
            </div>
        </div>
        <div class="row form-group">
          <div class="col-md-12">
            <label for="">VehicleID: </label>
            <input type="text" name="VehicleID" class="form-control""required>
          </div>
      </div>
      <div class="row form-group">
        <div class="col-md-12">
          <label for="">FuelType: </label>
          <input type="text" name="FuelType" class="form-control""required>
        </div>
    </div>
    <div class="row.form-group">
      <div class="col-md-12">
        <button type="submit" class="btn btn-success w-100 float-right">Create</button>
      </div>
    </div>
  </form>
        </div>
        <div class="col-md-6">
          <table class="table table striped table hover">

            </tr>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>
