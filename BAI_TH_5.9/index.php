<html>

<head>
    <title>Bài thực hành 5.9</title>
</head>

<body>
    <?php
    abstract class Tinhtoan
    {
        protected $a = 10;
        protected $b = 5;
        function __construct($a, $b)
        {
            $this->a = $a;
            $this->b = $b;
        }
        abstract public function ketqua();
    }
    class Cong extends Tinhtoan
    {
        public function ketqua()
        {
            echo "Tổng của a và b là: " . $this->a + $this->b, "<br>";
        }
    }
    class Tru extends Tinhtoan
    {
        public function ketqua()
        {
            echo "Hiệu của a và b là: " . $this->a - $this->b, "<br>";
        }
    }
    class Nhan extends Tinhtoan
    {
        public function ketqua()
        {
            echo "Tích của a và b là: " . $this->a * $this->b, "<br>";
        }
    }
    class Chia extends Tinhtoan
    {
        public function ketqua()
        {
            echo "Thương của a và b là: " . $this->a / $this->b, "<br>";
        }
    }
    $x = new Cong(10, 5);
    $x->ketqua();
    $x = new Tru(10, 5);
    $x->ketqua();
    $x = new Nhan(10, 5);
    $x->ketqua();
    $x = new Chia(10, 5);
    $x->ketqua();
    ?>
</body>

</html>