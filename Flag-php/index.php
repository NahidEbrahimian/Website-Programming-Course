<html dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="جلسه بیست سوم">
        <meta name="keywords" content="">
        <meta name="auther" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    </head>
    <body>
        <table>
            <div style="background-color: rgb(58, 20, 161); width: 120px; height: 77px; position: absolute;">
                <?php for($i = 0; $i < 50; $i++): ?>
                        <span style="font-size: 12px; color: white; position: absolute;
                        top: <?php print(rand(1, 60)); ?>; left: <?php print(rand(1, 100)); ?>;"
                        class="material-icons">star</span> 
                <?php endfor; ?>          
            </div>

            <?php for($i = 1; $i < 14; $i++): ?>
                <tr>
                    <?php if($i % 2 == 1): ?>
                        <td style="background-color: rgb(185, 14, 51); height: 10px; width: 300px;"></td>
                    <?php endif; ?>
                    <?php if($i % 2 == 0): ?>
                        <td style="height: 8px; width: 300px;"></td>
                    <?php endif; ?>
                </tr>
            <?php endfor; ?>
        </table>
    </body> 
</html>
