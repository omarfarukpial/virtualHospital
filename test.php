<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
    <title>Document</title>
</head>
<body style="margin: 20px; padding: 20px;">

    <div id ="text" >
        আমার সোনার বাংলা আমি তোমায় ভালোবাসি।
        <br>
        <img src="./img/bloodbankicon.jpg" alt="ambulange" height="300px" width="300px">
    </div>
    <br>
    <button id ="d" onclick="dwn()">Download</button>
</body>


<script>
    function dwn() {
        const element = document.getElementById("text");
        console.log(element);
        var opt = {
        margin:       1,
        filename:     'element.pdf',
        image:        { type: 'jpeg', quality: 0.98 },
        html2canvas:  { scale: 2 },
        jsPDF:        { unit: 'in', format: 'letter', orientation: 'portrait' }
        };
        
        // New Promise-based usage:
        html2pdf().from(element).set(opt).save();
    
    }
</script>
</html>

