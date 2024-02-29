<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Totalizer JS</title>
</head>
<body>
    <h2>Landed Cost Calculator</h2>
    <form action="" method="post">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="num1">Number 1</label>
                        <input type="number" class="form-control" id="num1" name="num1">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="num2">Number 2</label>
                        <input type="number" class="form-control" id="num2" name="num2">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <button id="calculate-button">Add</button>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <p id="answer"></p>
                    </div>
                </div>
            </div>
        </div>
        
        
    </form>

    <script src="{{ asset('js/calculator.js') }}"></script>
</body>
</html>