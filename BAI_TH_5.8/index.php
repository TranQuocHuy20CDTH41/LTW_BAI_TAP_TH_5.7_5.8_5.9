<html>

<head>
    <title>Bài tập thực hành 5.8</title>
</head>

<body>
    <?php
    class Hinhchunhat
    {
        static $dai = 8;
        static $rong = 6;
        static function setDai($dai)
        {
            return Hinhchunhat::$dai = $dai;
        }
        static function getDai($dai)
        {
            return Hinhchunhat::$dai = $dai;
        }
        static function setRong($rong)
        {
            return Hinhchunhat::$rong = $rong;
        }
        static function getRong($rong)
        {
            return Hinhchunhat::$rong = $rong;
        }
        //Chu vi
        static function chuVi()
        {
            echo "Chu vi hình chữ nhật là: " . ((Hinhchunhat::$dai + Hinhchunhat::$rong) * 2);
        }
        //Diện tích
        static function dienTich()
        {
            echo "<br>Diện tích hình chữ nhật là: " . (Hinhchunhat::$dai * Hinhchunhat::$rong);
        }
    }
    Hinhchunhat::chuVi();
    Hinhchunhat::dienTich();
    ?>
</body>

</html>