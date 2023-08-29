<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>misson_5-1</title>
        <link rel="stylesheet" type="text/css" href="misson_5-1.css">
    </head>
    <body>
       <div class="container">
        <div class="calculator">
            <div class="display">
                <input type="text" id="result" placeholder="0" disabled>
            </div>
            <div class="keypad">
                <buttun onclick="clearResult()">Ｃ</buttun>
                <button onclick="appendToResult('/')">／</button>
                <button onclick="appendToResult('*')">＊</button>
                <button onclick="appendToResult('-')">－</button>
                <button onclick="appendToResult('7')">７</button>
                <button onclick="appendToResult('8')">８</button>
                <button onclick="appendToResult('9')">９</button>
                <button onclick="appendToResult('+')">＋</button>
                <button onclick="appendToResult('4')">４</button>
                <button onclick="appendToResult('5')">５</button>
                <button onclick="appendToResult('6')">６</button>
                <button onclick="calculateResult()">=</button>
                <button onclick="appendToResult('1')">１</button>
                <button onclick="appendToResult('2')">２</button>
                <button onclick="appendToResult('3')">３</button>
                <button onclick="appendToResult('0')">０</button>
                <button onclick="appendToResult('.')">・</button>
            </div>
        </div>
       </div>
        <script src="misson_5-1.js"></script> 
    </body>
</html>

$dsn = 'mysql:dbname=yamaaitsugumi;host=localhost';
$user = 'tsugumi0421';
$password = ʼdingkuron7575';
$pdo = new PDO($dsn,$user,$password);