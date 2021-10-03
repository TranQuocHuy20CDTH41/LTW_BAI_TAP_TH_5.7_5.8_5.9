<html>

<head>
    <title>Bài thực hành 5.7</title>
</head>

<body>
    <?php
    class Hinhtron
    {
        static $bankinh = 4;
        static function setBankinh($bankinh)
        {
            return Hinhtron::$bankinh = $bankinh;
        }
        static function getBankinh($bankinh)
        {
            return Hinhtron::$bankinh = $bankinh;
        }

        static function chuVi(){
            echo "Chu vi hình tròn là: ". (3.14 * 2 * Hinhtron::$bankinh);
        }

        static function dienTich()
        {
            echo "<br>Diện tích hình tròn là: " . (3.14 * Hinhtron::$bankinh * Hinhtron::$bankinh);
        }
    }
    Hinhtron::chuVi();
    Hinhtron::dienTich();
    ?>
</body>

</html>