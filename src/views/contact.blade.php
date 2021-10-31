<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Contact </title>
</head>
<body>
    <h1>Contact us at anytime </h1>

    <form  action="{{ route('contact') }}"  method="post" >
     <input name="name" type="text" placeholder="Your Name Please "    />
     <input name="email" type="email" placeholder="Your Valid  Please "    />
     <textarea name="message" id="" cols="30" rows="10"></textarea>
     <input  type="submit" value="submit"   />

    </form>
</body>
</html>