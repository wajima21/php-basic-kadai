<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 
 <body>
     <p>
         <?php
        

        
        class Food {
            private $name;
            private $price;
        
            public function __construct($name, $price) {
                $this->name = $name;
                $this->price = $price;
            }
        
            public function show_price() {
                return $this->price;
            }
        
            public function __toString() {
                return "Food Object ( [name:Food:private] => {$this->name} [price:Food:private] => {$this->price} )";
            }
        }
        
        class Animal {
            private $name;
            private $height;
            private $weight;
        
            public function __construct($name, $height, $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }
        
            public function show_height() {
                return $this->height;
            }
        
            public function __toString() {
                return "Animal Object ( [name:Animal:private] => {$this->name} [height:Animal:private] => {$this->height} [weight:Animal:private] => {$this->weight} )";
            }
        }
        
        // Food クラスのインスタンスを作成
        $potato = new Food("potato", 250);
        
        // Animal クラスのインスタンスを作成
        $dog = new Animal("dog", 60, 5000);
        
        // __toString メソッドによる出力
        print_r($potato . "\n");
        print_r($dog . "\n");
        
        // show_price と show_height メソッドによる出力
        print_r($potato->show_price() . "\n");
        print_r($dog->show_height() . "\n");
      
         ?>
     </p>

 </body>
 
 </html>