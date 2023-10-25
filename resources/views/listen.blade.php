<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-tokken" content="{{csrf_token()}}">
    <style>
                /* 
            * Always set the map height explicitly to define the size of the div element
            * that contains the map. 
            */
            #map {
            height: 75%;
            }

            /* 
            * Optional: Makes the sample page fill the window. 
            */
            html,
            body {
            height: 100%;
            margin: 0;
            padding: 0;
            }
    </style>


    <title>Document</title>

</head>
<body>
    <div id="map"></div>



    <script type="module" src="{{mix('resources/js/app.js')}}"></script>
    <script type="module" src="{{mix('resources/js/not.js')}}"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCzTQEUEneuWu_IV3_S3Y0tpeepBHB0yHg"></script>
    <script>
     
    </script>

</body>
</html>