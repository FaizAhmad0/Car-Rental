<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="booking.css">

</head>

<body>

    <div class="form-container">

        <form action="" method="post">
            <h2>Booking</h2>
            <div>
                <img class="imgofForm" src="assets/bugati.png" alt="Bugati">
            </div>
            <div class="mb-3">
                <input type="name" name="name" class="form-control" id="exampleFormControlInput1"
                    placeholder="enter your name">
            </div>
            <div class="mb-3">
                <input name="email" type="email" class="form-control" id="exampleFormControlInput1"
                    placeholder="enter your email">
            </div>
            <div class="mb-3">
                <input type="text" name="pLocation" class="form-control" id="exampleFormControlInput1"
                    placeholder="Pickup location">
            </div>
            <div class="mb-3">
                <input type="text" name="dLocation" class="form-control" id="exampleFormControlInput1"
                    placeholder="Drop location">
            </div>
            
            
            <select name="car_type" class="form-control" id="exampleFormControlInput1">
                <option value="Choose car">Number of Day's</option>
                <option value="Ferrari">1 Day</option>
                <option value="MacLaren">2 Day's</option>
                <option value="BMW">5 Day's</option>
                <option value="Jaguar">10 Day's</option>
                <option value="Ford">1 Month</option>
                <option value="Bugatti">2 Month</option>
            </select>
            <input type="submit" name="submit" value="Book now" class="alert-success" style="margin-top: 1rem;">
            <!-- there you have to change -->


        </form>

    </div>

</body>

</html>