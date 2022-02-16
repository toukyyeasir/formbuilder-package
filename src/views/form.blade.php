<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>

    <h1>Please Fill up the form</h1>

    <form action="{{route('form')}}" method="post">
        @csrf

        <label>Name: </label>
        <input type="text" name="name" placeholder="name">
        
        <br>
        <br>
        <label for="gender">Gender :</label>
        <select name="gender" id="gender">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
            
        </select>
        <br><br>

                        
        <p>Please select your age:</p>
        <input type="radio" id="age1" name="age" value="5-20">
        <label for="age1">5 - 20</label><br>
        <input type="radio" id="age2" name="age" value="21-30">
        <label for="age1">21 - 30</label><br>
        <input type="radio" id="age3" name="age" value="31-60">
        <label for="age2">31 - 60</label><br>  
        <input type="radio" id="age4" name="age" value="61-100">
        <label for="age3">61 - 100</label><br><br>


       


        <br>
        <label for="brand" > Whcich brand do you prefer:</label><br>
        <input type="checkbox" id="toyota" name="brand[]" value="toyota">
        <label for="toyota"> toyota</label><br>
        
        <input type="checkbox" id="Marcedes" name="brand[]" value="Marcedes">
        <label for="Marcedes"> Marcedes</label><br>
        
        <input type="checkbox" id="Mustang" name="brand[]" value="Mustang">
        <label for="Mustang"> Mustang</label><br>

        <input type="checkbox" id="Audi" name="brand[]" value="Audi">
        <label for="Audi"> Audi</label><br>
        
        <br><br>


        <input type="submit" value="Submit">





    </form>


    
    
</body>
</html>