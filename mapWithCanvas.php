<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Map</title>
</head>
<body>

<canvas id="myCanvas" width="800px" height="500px" style="border:1px solid #000000;">
</canvas>

<script>
    var c = document.getElementById("myCanvas");
    var ctx = c.getContext("2d");
    ctx.font = "12px Arial";
    ctx.fillText("Kushtia", 290, 80);
    ctx.fillText("Jhenaidah", 300, 150);
    ctx.fillText("Jashore", 300, 250);
    ctx.fillText("Satkhira", 150, 400);
    ctx.fillText("Khulna", 450, 380);

    // Kushtia to Jhenaidah line draw
    ctx.moveTo(290+25, 80+2);
    ctx.lineTo(300+25, 150-8);
   
    // Jhenaidah to Jashore line draw
    ctx.moveTo(300+25, 150+2);
    ctx.lineTo(300+25, 250-8);
  
    // Jashore to Satkhira line draw 
    ctx.moveTo(300+25, 250+2);
    ctx.lineTo(150+25, 400-12);
   
    // Jahsore to Khulna line draw
    ctx.moveTo(300+25, 250+2);
    ctx.lineTo(450+15, 380-12);

    // Satkhira to Khulna line draw
    ctx.moveTo(150+50, 400-5);
    ctx.lineTo(450-5, 380-3);
    ctx.stroke();

</script>
    
</body>
</html>