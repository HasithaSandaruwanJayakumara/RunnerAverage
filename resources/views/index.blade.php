<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Runners Details</title>
</head>
<body>

    <div class="container">
        <div class="text-center">
            <br>
            <h1>Runners Details</h1>
            <br><br>
            <div class="row">
                <div class="col-md-6">
                    <form action="/runnerDetailsSave" method="post">
                        @csrf
                        <div class="row mb-6">
                            <label for="inputEmail3" class="col-md-4 col-form-label">Runner Name</label>
                            <div class="col-md-6">
                              <input type="text" class="form-control" id="radius" name="name">
                            </div>
                          </div>
                          <br>

                          <div class="row mb-6">
                            <label for="inputEmail3" class="col-md-4 col-form-label">Radius (m)</label>
                            <div class="col-md-6">
                              <input type="text" class="form-control" id="radius" name="radius">
                            </div>
                          </div>
                          <br>
                          <div class="row mb-6">
                            <label for="inputEmail3" class="col-md-4 col-form-label" >Start Time</label>
                            <div class="col-md-6">
                              <input type="text" class="form-control" id="radius" name="start_time" placeholder="ex - 11:11:11">
                            </div>
                          </div>
                          <br>
                          <div class="row mb-6 ">
                            <label for="inputEmail3" class="col-md-4 col-form-label " >End Time</label>
                            <div class="col-md-6">
                              <input type="text" class="form-control" id="radius" name="end_time" placeholder="ex - 12:12:12">
                            </div>
                          </div>
                          <br>

                          <div class="row mb-6">
                            <label for="inputEmail3" class="col-md-4 col-form-label">Number of Laps</label>
                            <div class="col-md-6">
                              <input type="text" class="form-control" id="radius" name="laps">
                            </div>
                          </div>

                          <br>

                              <input type="submit" class="btn btn-primary" value="Submit">

                              <button type="button" class="btn btn-success" onclick="window.location='{{ route('runnersReport') }}'">Report</button>

                          <br><br>
                    </form>

                </div>




            </div>
        </div>
    </div>


</body>
</html>
