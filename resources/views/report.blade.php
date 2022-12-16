<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Report</title>
</head>
<body>
    <div class="container">
        <br>
        <button type="button" class="btn btn-success" onclick="window.location='{{ url('/runnerDetails') }}'">Back</button>
        <div class="text-center">
            <br>
            <h1>Report</h1>
            <br>

            <div class="row">

                <div class="col-md-10">

                    <table class="table table-dark table-striped">
                        <tr>
                        <th>Runner</th>
                        <th>Speed(kmph)</th>
                        <th>Radius</th>
                        <th>Start Time</th>
                        <th>End Time</th>
                        <th>Duration (km)</th>
                        <th>Number Of Laps</th>
                    </tr>

                    @for($x =0; $x < sizeof($runners); $x++)
                    <tr>
                        <td>{{ $runners[$x]->name }}</td>
                        <td>{{ $speeds[$x] }}</td>
                        <td>{{ $runners[$x]->radius }}</td>
                        <td>{{ $runners[$x]->end_time }}</td>
                        <td>{{ $runners[$x]->start_time }}</td>
                        <td>{{ $durations[$x] }}</td>
                        <td>{{ $runners[$x]->laps }}</td>


                    </tr>
                    @endfor



                      </table>
                </div>
            </div>

        </div>

    </div>

</body>
</html>
