<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Adminstrator</title>
</head>

<body>

    <div class="card">
        <h5 class="card-header">Ticket Management</h5>
        <div class="card-body">
            <!-- <h5 class="card-title">To book flights directly</h5> -->
            <a href="../booking.php" class="btn btn-primary">Book new ticket</a>
            <a href="admin/update_form.php" class="btn btn-secondary">Modify ticket</a>
            <a href="ticket/delete_form.php" class="btn btn-danger">Delete ticket</a>
        </div>
    </div>

    <div class="card">
        <h5 class="card-header">Cancelled Tickets</h5>
        <div class="card-body">
            <h5 class="card-title">Look up all tickets that are cancelled</h5>
            <a href="admin/cancelled_ticket.php" class="btn btn-info">Search</a>
        </div>
    </div>

    <div class="card">
        <h5 class="card-header">Active Flights</h5>
        <div class="card-body">
            <h5 class="card-title">To show all current active flights</h5>
            <a href="admin/active_flight.php" class="btn btn-primary">Search</a>
        </div>
    </div>

    <div class="card">
        <h5 class="card-header">Booking Statistics</h5>
        <div class="card-body">
            <h5 class="card-title">Percentage of booked seats on a flight in a specific date</h5>
            <form action="admin/booking_stat.php" method="GET">
                <input type="date" name="Date">
                <input type="submit" value="Submit" class="btn btn-primary">
            </form>
        </div>
    </div>

    <div class="card">
        <h5 class="card-header">Payments</h5>
        <div class="card-body">
            <h5 class="card-title">Look up completed payments</h5>
            <a href="admin/confirmed_payments.php" class="btn btn-primary">Search</a>
        </div>
    </div>

    <div class="card">
        <h5 class="card-header">Waitlist</h5>
        <div class="card-body">
            <h5 class="card-title">Look up waitlisted passengers in a flight</h5>
            <form action="admin/waitlist.php" method="get">
                <label for="flight_no">Flight Number</label>
                <input type="number" id="flight_no" name="flight_no">
                <input type="submit" value="Search" class="btn btn-primary">
            </form>
        </div>
    </div>

    <div class="card">
        <h5 class="card-header">Average Load Factor</h5>
        <div class="card-body">
            <h5 class="card-title"> (percentage of seats occupied divided by total seats) for
                all planes on a given date</h5>
            <form action="admin/alf.php" method="GET">
                <input type="date" name="Date">
                <input type="submit" value="Submit" class="btn btn-primary">
            </form>

        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>