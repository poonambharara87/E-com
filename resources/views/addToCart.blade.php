<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="card">
            <div class="card-body">
            <!-- <form method="post" enctype="multipart/formdata"> -->
                    <label for="quantity">Quantity</label>
                    <button class="input-group text-center decrement-btn ">-</button>
                    <input type="text"  name="quantity" class="form-control text-center qty-input" value="1"/>
                    <button class="input-group text-center increment-btn ">+</button>
                <!-- </form> -->
            </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function (){
            $('.increment-btn').click(function (e){
                e.preventDefault();
                var incr_value = $('.qty-input').val();
                var value = parseInt(incr_value, 10);
                value = isNaN(value) ? 0 : value;
                if(value < 10){
                    value++;
                    $('.qty-input').val(value);
                }
            });
        });


        $(document).ready(function (){
            $('.decrement-btn').click(function (e){
                e.preventDefault();
                var decre_value = $('.qty-input').val();
                var value = parseInt(decre_value, 10);
                value = isNaN(value) ? 0 : value;
                if(value > 1){
                    value--;
                    $('.qty-input').val(value);
                }
            });
        });

    </script>
</body>
</html>




