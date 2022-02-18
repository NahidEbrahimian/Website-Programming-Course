<html dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="جلسه بیست سوم">
        <meta name="keywords" content="">
        <meta name="auther" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body style="padding-left: 3%; padding-top: 3%">
        <form method="GET" >
            <h2>Calculator</h2>
            <br>
            <div id="border">
                <p>First number:</p>
                <input type="text" name="num1">
                <p>Second number:</p>
                <input type="text" name="num2">
                <p>Operator</p>
                <input type="text" name="op">
                <button>=</button>
            </div>
        </form>

        <?php
        $num1= $_GET['num1'];
        $num2= $_GET['num2'];
        $op =$_GET['op'];

        if($op == '+')
        {
            $add = $num1 + $num2;
            echo "Addition is: ".$add;
        }
        else if($op == '-')
        {
            $sub = $num1 - $num2;
            echo "Substraction is: ".$subs;
        }
        else if($op == '/')
        {
            $div = $num1 / $num2;
            echo "Division is: ".$div;
        }
        else if($op == '*')
        {
            $mul = $num1 * $num2;
            echo "Multiply is: ".$mul;
        }
        else
        { 
            echo "Please select operator between: +, -, *, /";
        }
        ?>
    </body> 
</html>