<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XpeedStudio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div>
        <?php
            if (isset($_POST['btnSubmit'])) {
              echo "Submitted";
            } 
        ?>
    </div>



    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Information Entry Form</h3>
                <form action="index.php" method="post">
                    <div class="form-group">
                        <label for="amount">Amount</label>
                        <input type="number" class="form-control" id="amount" placeholder="Enter Amount" required>
                    </div>
                    <div class="form-group">
                        <label for="buyer">Buyer</label>
                        <input type="text" class="form-control" id="buyer" placeholder="Enter Buyer" required>
                    </div>
                    <div class="form-group">
                        <label for="receipt_id">Receipt ID</label>
                        <input type="text" class="form-control" id="receipt_id" placeholder="Enter Receipt ID" required>
                    </div>
                    <div class="form-group">
                        <label for="items">Items</label>
                        <input type="text" class="form-control" id="items" placeholder="Enter Items" required>
                    </div>
                    <div class="form-group">
                        <label for="buyer_email">Buyer Email</label>
                        <input type="email" class="form-control" id="buyer_email" placeholder="Enter Buyer Email" required>
                    </div>

                    <input type="text" class="form-control" id="buyer_ip" hidden>

                    <div class="form-group">
                        <label for="city">City</label>
                        <input type="text" class="form-control" id="city" placeholder="Enter City" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="number" class="form-control" id="phone" placeholder="Enter Phone" required>
                    </div>
                    <div class="form-group">
                        <label for="entry_by">Entry By</label>
                        <input type="number" class="form-control" id="entry_by" placeholder="Enter Entry By" required>
                    </div>
                    <div class="row" style="margin:10px">
                        <input type="submit" name="btnSubmit" class="btn btn-outline-primary" value="Submit"></input>
                    </div>

                           


                </form>
            </div>
        </div>
    </div>
</body>
</html>