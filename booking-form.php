<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airline Booking Form</title>
    
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    include("bookingform.php")
    ?>
    <div class="container">

        <form class="form-group" method="POST" action="connection.php">
            <h1 class="text-center">Airline Booking Form</h1>

            <div id="form">
                <h3 class="text-white">Booking Details</h3>

            <div id="input">
                <input type="text" required id="input-group" name="from_location" placeholder="From">
                <input type="text" required id="input-group" name="to_location" placeholder="To">
                <input type="date"required id="input-group" name="departure_date" placeholder="Departure Date">
                <input type="text"required id="input-group" name="departure_time" placeholder="Departure Time">
                <select  id="input-group" style="background: black;"  name="preferred_airline">
                    <option value="">Preffered Airline</option>
                    <option value="PIA">PIA</option>
                    <option value="ETHIHAD">ETHIHAD</option>
                    <option value="SHAHEEN">SHAHEEN</option>
                </select>
                <select  id="input-group" style="background: black;" name="preferred_seating">
                    <option value="">Preffered Seating</option>
                    <option value="economy">Economy Class</option>
                    <option value="business">Business Class</option>
                    <option value="execuitve">Executive Class</option>
                </select>
                </div><!--input-->

                <div id="input2"><!--input2-->
                    <input type="number"required id="input-group" name="adult" placeholder="Adult">
                    <input type="number"required id="input-group" name="children" placeholder="Children(2-11years)">
                    <input type="number"required id="input-group" name="infant" placeholder="infant(under 2years)">
                </div>

                <div id="input3">
                <
                    <input name="fare_type">
                    <span id="input-group" class="text-primary" name="fare_type">Select Your Fare</span> 
                    <input type="radio" required id="input-group" name="r" name="fare_type">
                    <label class="text-white" for="input-group">One Way</label>
                    <input type="radio"required id="input-group" name="r" name="fare_type">
                    <label class="text-white" for="input-group">Round Trip</label>
                </div>

                <div id="input4">
                    <input type="date" required id="input-group" name="return_date" placeholder="Return Date">
                    <input type="text"required id="input-group" name="return_time" placeholder="Return time">
                    <input type="text"required id="input-group1" name="message" placeholder="Any Message">
                </div>

                <div id="input5">
                    <h3 class="text-white">Personal Details</h3>
                </div>

                <div id="input6">
                    <input type="text"required id="input-group" name="full_name" placeholder="Full Name">
                    <input type="number"required id="input-group" name="phone_number" placeholder="Phone Number">
                    <input type="email"required id="input-group1" name="email" placeholder="Email">
                </div>
                <button type="submit" class="btn btn-warning text-white">Submit Form</button>
                <button type="reset" class="btn btn-primary">Clear Form</button>
            </div>

        </form>
    </div>
</body>
</html>