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
        <form action="conct.php" method="post">
            <h2 class="headingOfFOrm">Add new car</h2>
            <div>
                <img class="imgofForm" src="assets/bugati.png" alt="Bugati">
            </div>
            <div class="mb-3">
                <input type="text" name="vmodel" class="form-control" id="exampleFormControlInput1"
                    placeholder="enter vehical model">
            </div>
            <div class="mb-3">
                <input type="text" name="vnumber" class="form-control" id="exampleFormControlInput1"
                    placeholder="enter vehical number">
            </div>
            <div class="mb-3">
                <input type="text" name="seating" class="form-control" id="exampleFormControlInput1"
                    placeholder="enter seating capacity">
            </div>
            <div class="mb-3">
                <input type="text" name="rent" class="form-control" id="exampleFormControlInput1"
                    placeholder="enter rent per day">
            </div>            
            <select name="carType" class="form-control" id="exampleFormControlInput1">
                <option value="Choose car">Choose car</option>
                <option value="Ferrari">Ferrari</option>
                <option value="MacLaren">MacLaren</option>
                <option value="BMW">BMW</option>
                <option value="Jaguar">Jaguar</option>
                <option value="Ford">Ford</option>
                <option value="Bugatti">Bugatti</option>
            </select>
            <input type="submit" name="submit" value="Add car" class="alert-success" style="margin-top: 1rem;">
            <!-- there you have to change -->
        </form>
    </div>
</body>
</html>