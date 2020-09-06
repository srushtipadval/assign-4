<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafe Li'l Hunger</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body style="background-color:#f2e6ff65;" >
    <p id="demo"></p>
    <div class="container" >
        <div class="row">
            <div class="col-12" style="color: peru;">
                <h1>Cafe Menu</h1>
                <hr>
            </div>
        </div>
        <div class="row">
            
                <label for="sel1" class="col-form-label col-md-2">Select Menu Item:</label>
                <div class="col-md-7">
                    <select class="form-control" id="item">
                        
                    </select>
                </div>
                <br>
                <div class="col-12 col-md-2" >
                    <button type="submit" class="btn btn-primary bg-primary" id="demo1" >
                        Submit
                    </button>
                </div>
                
            
        </div>
        <br><hr><br>
        <div class="row row-content align-items-center">
            <div class="col-12">
                <div class="card">
                    <h3 class="card-header text-white" style="background-color: yellowgreen;">Item Details</h3>
                    <div class="card-body" style="color: yellow;background-color:#f5ccff;">
                        <dl class="row" id="disp">
                            <dt class="col-6"></dt>
                            <dd class="col-6"></dd>
                        </dl>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <script src="script.js"></script>
    
</body>
</html>