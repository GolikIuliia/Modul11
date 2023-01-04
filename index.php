<!DOCTYPE html>
<html lang="en-us">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="./index.css">
    <title>Задание 11 мoдуля</title>
  </head>
  <body>
    <?php
$a = true;
$b = false;
$c = true;
$d = false;
$e = 1;
$f = 0;
$m = -1;
$k = "1";
$l = null;
$o = "php";
?>
    <h1>Задание 1. Таблица истинности PHP</h1>

    <table class="table">
        <thead>
          <tr>
            <th><?php echo 'A';?></th>
            <th>B</th>
            <th>!A</th>
            <th>A || B</th>
            <th>A && B</th>
            <th>A xor B</th>
          </tr>
        </thead>
        <tbody>
         
          <tr> <?php $a = false; $b = false;?>
            <td><?php echo $a ? 1 : 0;?></td>
            <td><?php echo $a ? 1 : 0;?></td>
            <td><?php echo !$a ? 1 : 0;?></td>
            <td><?php echo $a || $b ? 1 : 0;?></td>
            <td><?php echo $a && $b ? 1 : 0;?></td>
            <td><?php echo $a ^= $b ? 1 : 0;?></td>
          </tr>
          <tr> <?php $a = false; $b = true;?>
          <td><?php echo $a ? 1 : 0;?></td>
            <td><?php echo $b ? 1 : 0;?></td>
            <td><?php echo !$a ? 1 : 0;?></td>
            <td><?php echo $a || $b ? 1 : 0;?></td>
            <td><?php echo $a && $b ? 1 : 0;?></td>
            <td><?php echo $a ^= $b ? 1 : 0;?></td>
          </tr>
          <tr> <?php $a = true; $b = false;?>
            <td><?php echo $a ? 1 : 0;?></td>
            <td><?php echo $b ? 1 : 0;?></td>
            <td><?php echo !$a ? 1 : 0;?></td>
            <td><?php echo $a || $b ? 1 : 0;?></td>
            <td><?php echo $a && $b ? 1 : 0;?></td>
            <td><?php echo $a ^= $b ? 1 : 0;?></td>
          </tr>
          <tr> <?php $a = true; $b = true;?>
          <td><?php echo $a ? 1 : 0;?></td>
            <td><?php echo $b ? 1 : 0;?></td>
            <td><?php echo !$a ? 1 : 0;?></td>
            <td><?php echo $a || $b ? 1 : 0;?></td>
            <td><?php echo $a && $b ? 1 : 0;?></td>
            <td><?php echo $a ^= $b ? 1 : 0;?></td>
          </tr>
        </tbody>
        
      </table>
      <h1>Задание 2. Гибкое сравнение</h1>

      <table class="table">
          <thead>
            <tr>
              <th></th>
              <th>true</th>
              <th>false</th>
              <th>1</th>
              <th>0</th>
              <th>-1</th>
              <th>"1"</th>
              <th>null</th>
              <th>"php"</th>
            </tr>
          </thead>
          <tbody> 
            <tr>
                <td>true</td>
                <td><?php echo $c == $c ? 1 : 0;?></td>
                <td><?php echo $c == $d ? 1 : 0;?></td>
                <td><?php echo $c == $e ? 1 : 0;?></td>
                <td><?php echo $c == $f ? 1 : 0;?></td>
                <td><?php echo $c == $m ? 1 : 0;?></td>
                <td><?php echo $c == $k ? 1 : 0;?></td>
                <td><?php echo $c == $l ? 1 : 0;?></td>
                <td><?php echo $c == $o ? 1 : 0;?></td>
            </tr>
            <tr>
              <td>false</td>
              <td><?php echo $d == $c ? 1 : 0;?></td>
              <td><?php echo $d == $d ? 1 : 0;?></td>
              <td><?php echo $d == $e ? 1 : 0;?></td>
              <td><?php echo $d == $f ? 1 : 0;?></td>
              <td><?php echo $d == $m ? 1 : 0;?></td>
              <td><?php echo $d == $k ? 1 : 0;?></td>
              <td><?php echo $d == $l ? 1 : 0;?></td>
              <td><?php echo $d == $o ? 1 : 0;?></td>
            </tr>
            <tr>
              <td>1</td>
              <td><?php echo $e == $c ? 1 : 0;?></td>
              <td><?php echo $e == $d ? 1 : 0;?></td>
              <td><?php echo $e == $e ? 1 : 0;?></td>
              <td><?php echo $e == $f ? 1 : 0;?></td>
              <td><?php echo $e == $m ? 1 : 0;?></td>
              <td><?php echo $e == $k ? 1 : 0;?></td>
              <td><?php echo $e == $l ? 1 : 0;?></td>
              <td><?php echo $e == $o ? 1 : 0;?></td>
            </tr>
            <tr>
              <td>0</td>
              <td><?php echo $f == $c ? 1 : 0;?></td>
              <td><?php echo $f == $d ? 1 : 0;?></td>
              <td><?php echo $f == $e ? 1 : 0;?></td>
              <td><?php echo $f == $f ? 1 : 0;?></td>
              <td><?php echo $f == $m ? 1 : 0;?></td>
              <td><?php echo $f == $k ? 1 : 0;?></td>
              <td><?php echo $f == $l ? 1 : 0;?></td>
              <td><?php echo $f == $o ? 1 : 0;?></td>
            </tr>
            <tr>
                <td>-1</td>
                <td><?php echo $m == $c ? 1 : 0;?></td>
                <td><?php echo $m == $d ? 1 : 0;?></td>
                <td><?php echo $m == $e ? 1 : 0;?></td>
                <td><?php echo $m == $f ? 1 : 0;?></td>
                <td><?php echo $m == $m ? 1 : 0;?></td>
                <td><?php echo -1 == $k ? 1 : 0;?></td>
                <td><?php echo -1 == $l ? 1 : 0;?></td>
                <td><?php echo -1 == $o ? 1 : 0;?></td>
            </tr>
            <tr>
                <td>"1"</td>
                <td><?php echo $k == $c ? 1 : 0;?></td>
                <td><?php echo $k == $d ? 1 : 0;?></td>
                <td><?php echo $k == $e ? 1 : 0;?></td>
                <td><?php echo $k == $f ? 1 : 0;?></td>
                <td><?php echo $k == $m ? 1 : 0;?></td>
                <td><?php echo $k == $k ? 1 : 0;?></td>
                <td><?php echo $k == $l ? 1 : 0;?></td>
                <td><?php echo $k == $o ? 1 : 0;?></td>
            </tr>
            <tr>
                <td>null</td>
                <td><?php echo $l == $c ? 1 : 0;?></td>
                <td><?php echo $l == $d ? 1 : 0;?></td>
                <td><?php echo $l == $e ? 1 : 0;?></td>
                <td><?php echo $l == $f ? 1 : 0;?></td>
                <td><?php echo $l == $m ? 1 : 0;?></td>
                <td><?php echo $l == $k ? 1 : 0;?></td>
                <td><?php echo $l == $l ? 1 : 0;?></td>
                <td><?php echo $l == $o ? 1 : 0;?></td>
            </tr>
            <tr>
                <td>"php"</td>
                <td><?php echo $o == $c ? 1 : 0;?></td>
                <td><?php echo $o == $d ? 1 : 0;?></td>
                <td><?php echo $o == $e ? 1 : 0;?></td>
                <td><?php echo $o == $f ? 1 : 0;?></td>
                <td><?php echo $o == $m ? 1 : 0;?></td>
                <td><?php echo $o == $k ? 1 : 0;?></td>
                <td><?php echo $o == $l ? 1 : 0;?></td>
                <td><?php echo $o == $o ? 1 : 0;?></td>
            </tr>            
        </tbody>
          
        </table>
        <h1>Жёсткое  сравнение</h1>

      <table class="table">
          <thead>
            <tr>
              <th></th>
              <th>true</th>
              <th>false</th>
              <th>1</th>
              <th>0</th>
              <th>-1</th>
              <th>"1"</th>
              <th>null</th>
              <th>"php"</th>
            </tr>
          </thead>
          <tbody> 
            <tr>
                <td>true</td>
                <td><?php echo $c === $c ? 1 : 0;?></td>
                <td><?php echo $c === $d ? 1 : 0;?></td>
                <td><?php echo $c === $e ? 1 : 0;?></td>
                <td><?php echo $c === $f ? 1 : 0;?></td>
                <td><?php echo $c === $m ? 1 : 0;?></td>
                <td><?php echo $c === $k ? 1 : 0;?></td>
                <td><?php echo $c === $l ? 1 : 0;?></td>
                <td><?php echo $c === $o ? 1 : 0;?></td>
            </tr>
            <tr>
              <td>false</td>
              <td><?php echo $d === $c ? 1 : 0;?></td>
              <td><?php echo $d === $d ? 1 : 0;?></td>
              <td><?php echo $d === $e ? 1 : 0;?></td>
              <td><?php echo $d === $f ? 1 : 0;?></td>
              <td><?php echo $d === $m ? 1 : 0;?></td>
              <td><?php echo $d === $k ? 1 : 0;?></td>
              <td><?php echo $d === $l ? 1 : 0;?></td>
              <td><?php echo $d === $o ? 1 : 0;?></td>
            </tr>
            <tr>
              <td>1</td>
              <td><?php echo $e === $c ? 1 : 0;?></td>
              <td><?php echo $e === $d ? 1 : 0;?></td>
              <td><?php echo $e === $e ? 1 : 0;?></td>
              <td><?php echo $e === $f ? 1 : 0;?></td>
              <td><?php echo $e === $m ? 1 : 0;?></td>
              <td><?php echo $e === $k ? 1 : 0;?></td>
              <td><?php echo $e === $l ? 1 : 0;?></td>
              <td><?php echo $e === $o ? 1 : 0;?></td>
            </tr>
            <tr>
              <td>0</td>
              <td><?php echo $f === $c ? 1 : 0;?></td>
              <td><?php echo $f === $d ? 1 : 0;?></td>
              <td><?php echo $f === $e ? 1 : 0;?></td>
              <td><?php echo $f === $f ? 1 : 0;?></td>
              <td><?php echo $f === $m ? 1 : 0;?></td>
              <td><?php echo $f === $k ? 1 : 0;?></td>
              <td><?php echo $f === $l ? 1 : 0;?></td>
              <td><?php echo $f === $o ? 1 : 0;?></td>
            </tr>
            <tr>
                <td>-1</td>
                <td><?php echo $m === $c ? 1 : 0;?></td>
                <td><?php echo $m === $d ? 1 : 0;?></td>
                <td><?php echo $m === $e ? 1 : 0;?></td>
                <td><?php echo $m === $f ? 1 : 0;?></td>
                <td><?php echo $m === $m ? 1 : 0;?></td>
                <td><?php echo -1 === $k ? 1 : 0;?></td>
                <td><?php echo -1 === $l ? 1 : 0;?></td>
                <td><?php echo -1 === $o ? 1 : 0;?></td>
            </tr>
            <tr>
                <td>"1"</td>
                <td><?php echo $k === $c ? 1 : 0;?></td>
                <td><?php echo $k === $d ? 1 : 0;?></td>
                <td><?php echo $k === $e ? 1 : 0;?></td>
                <td><?php echo $k === $f ? 1 : 0;?></td>
                <td><?php echo $k === $m ? 1 : 0;?></td>
                <td><?php echo $k === $k ? 1 : 0;?></td>
                <td><?php echo $k === $l ? 1 : 0;?></td>
                <td><?php echo $k === $o ? 1 : 0;?></td>
            </tr>
            <tr>
                <td>null</td>
                <td><?php echo $l === $c ? 1 : 0;?></td>
                <td><?php echo $l === $d ? 1 : 0;?></td>
                <td><?php echo $l === $e ? 1 : 0;?></td>
                <td><?php echo $l === $f ? 1 : 0;?></td>
                <td><?php echo $l === $m ? 1 : 0;?></td>
                <td><?php echo $l === $k ? 1 : 0;?></td>
                <td><?php echo $l === $l ? 1 : 0;?></td>
                <td><?php echo $l === $o ? 1 : 0;?></td>
            </tr>
            <tr>
                <td>"php"</td>
                <td><?php echo $o === $c ? 1 : 0;?></td>
                <td><?php echo $o === $d ? 1 : 0;?></td>
                <td><?php echo $o === $e ? 1 : 0;?></td>
                <td><?php echo $o === $f ? 1 : 0;?></td>
                <td><?php echo $o === $m ? 1 : 0;?></td>
                <td><?php echo $o === $k ? 1 : 0;?></td>
                <td><?php echo $o === $l ? 1 : 0;?></td>
                <td><?php echo $o === $o ? 1 : 0;?></td>
            </tr>            
        </tbody>          
        </table>
        <p> Выводы: при тождественном сравненим с проверкой типа (жёсткое сравнение это
             когда типы переменных и их значения должны строго совпадать) true встречается гораздо реже
        </p>
    </body>
</html>
