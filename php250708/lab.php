<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Operators Showcase</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            line-height: 1.6;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
        }
        h1 {
            color: #6200ee;
            text-align: center;
        }
        h2 {
            color: #3700b3;
            border-bottom: 2px solid #bb86fc;
            padding-bottom: 5px;
        }
        .code-output {
            background-color: #fff;
            border-left: 4px solid #6200ee;
            padding: 15px;
            margin: 15px 0;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        code {
            background-color: #eee;
            padding: 2px 5px;
            border-radius: 3px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 15px 0;
        }
        th, td {
            padding: 8px 12px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #bb86fc;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>PHP Operators Showcase</h1>

    <?php
    // 1. Arithmetic Operators
    echo "<h2>1. Arithmetic Operators</h2>";
    
    $a = 10;
    $b = 3;
    
    echo "<div class='code-output'>";
    echo "Given: \$a = $a and \$b = $b<br><br>";
    echo "Addition (\$a + \$b): " . ($a + $b) . "<br>";
    echo "Subtraction (\$a - \$b): " . ($a - $b) . "<br>";
    echo "Multiplication (\$a * \$b): " . ($a * $b) . "<br>";
    echo "Division (\$a / \$b): " . ($a / $b) . "<br>";
    echo "Modulus (\$a % \$b): " . ($a % $b) . "<br>";
    echo "Exponentiation (\$a ** \$b): " . ($a ** $b) . "<br>";
    echo "</div>";
    
    // 2. Assignment Operators
    echo "<h2>2. Assignment Operators</h2>";
    
    $c = 15;
    
    echo "<div class='code-output'>";
    echo "Starting with \$c = $c<br><br>";
    
    echo "Basic assignment (\$c = 15): $c<br>";
    
    $c += 5;
    echo "Add AND assignment (\$c += 5): $c<br>";
    
    $c -= 3;
    echo "Subtract AND assignment (\$c -= 3): $c<br>";
    
    $c *= 2;
    echo "Multiply AND assignment (\$c *= 2): $c<br>";
    
    $c /= 4;
    echo "Divide AND assignment (\$c /= 4): $c<br>";
    
    $c %= 3;
    echo "Modulus AND assignment (\$c %= 3): $c<br>";
    echo "</div>";
    
    // 3. Comparison Operators
    echo "<h2>3. Comparison Operators</h2>";
    
    $x = 10;
    $y = "10";
    $z = 20;
    
    echo "<div class='code-output'>";
    echo "Given: \$x = $x (integer), \$y = \"$y\" (string), and \$z = $z (integer)<br><br>";
    
    echo "Equal (\$x == \$y): ";
    var_dump($x == $y);
    echo "<br>";
    
    echo "Identical (\$x === \$y): ";
    var_dump($x === $y);
    echo "<br>";
    
    echo "Not equal (\$x != \$z): ";
    var_dump($x != $z);
    echo "<br>";
    
    echo "Not identical (\$x !== \$y): ";
    var_dump($x !== $y);
    echo "<br>";
    
    echo "Greater than (\$z > \$x): ";
    var_dump($z > $x);
    echo "<br>";
    
    echo "Less than (\$x < \$z): ";
    var_dump($x < $z);
    echo "<br>";
    
    echo "Greater than or equal to (\$x >= \$y): ";
    var_dump($x >= $y);
    echo "<br>";
    
    echo "Less than or equal to (\$x <= \$y): ";
    var_dump($x <= $y);
    echo "<br>";
    
    // PHP 7+ spaceship operator
    echo "Spaceship operator (\$x <=> \$z): " . ($x <=> $z) . "<br>";
    echo "</div>";
    
    // 4. Increment/Decrement Operators
    echo "<h2>4. Increment/Decrement Operators</h2>";
    
    $i = 5;
    
    echo "<div class='code-output'>";
    echo "Starting with \$i = $i<br><br>";
    
    echo "Pre-increment (++\$i): " . (++$i) . " (now \$i = $i)<br>";
    
    echo "Post-increment (\$i++): " . ($i++) . " (now \$i = $i)<br>";
    
    echo "Pre-decrement (--\$i): " . (--$i) . " (now \$i = $i)<br>";
    
    echo "Post-decrement (\$i--): " . ($i--) . " (now \$i = $i)<br>";
    echo "</div>";
    
    // 5. Logical Operators
    echo "<h2>5. Logical Operators</h2>";
    
    $p = true;
    $q = false;
    
    echo "<div class='code-output'>";
    echo "Given: \$p = ";
    var_dump($p);
    echo " and \$q = ";
    var_dump($q);
    echo "<br><br>";
    
    echo "AND (\$p && \$q): ";
    var_dump($p && $q);
    echo "<br>";
    
    echo "OR (\$p || \$q): ";
    var_dump($p || $q);
    echo "<br>";
    
    echo "NOT (!$p): ";
    var_dump(!$p);
    echo "<br>";
    
    echo "AND (\$p and \$q): ";
    var_dump($p and $q);
    echo "<br>";
    
    echo "OR (\$p or \$q): ";
    var_dump($p or $q);
    echo "<br>";
    
    echo "XOR (\$p xor \$q): ";
    var_dump($p xor $q);
    echo "<br>";
    echo "</div>";
    
    // 6. String Operators
    echo "<h2>6. String Operators</h2>";
    
    $str1 = "Hello";
    $str2 = "World";
    
    echo "<div class='code-output'>";
    echo "Given: \$str1 = \"$str1\" and \$str2 = \"$str2\"<br><br>";
    
    echo "Concatenation (\$str1 . \$str2): " . $str1 . $str2 . "<br>";
    
    echo "Concatenation with space (\$str1 . \" \" . \$str2): " . $str1 . " " . $str2 . "<br>";
    
    $str3 = "Hi";
    echo "Starting with \$str3 = \"$str3\"<br>";
    
    $str3 .= " PHP";
    echo "Concatenation assignment (\$str3 .= \" PHP\"): \"$str3\"<br>";
    echo "</div>";
    
    // 7. Array Operators
    echo "<h2>7. Array Operators</h2>";
    
    $array1 = ["a" => "apple", "b" => "banana"];
    $array2 = ["c" => "cherry", "d" => "date"];
    $array3 = ["a" => "apricot", "e" => "elderberry"];
    
    echo "<div class='code-output'>";
    echo "Given arrays:<br>";
    echo "\$array1 = ";
    print_r($array1);
    echo "<br>";
    echo "\$array2 = ";
    print_r($array2);
    echo "<br>";
    echo "\$array3 = ";
    print_r($array3);
    echo "<br><br>";
    
    echo "Union (\$array1 + \$array2): ";
    print_r($array1 + $array2);
    echo "<br>";
    
    echo "Union with key collision (\$array1 + \$array3): ";
    print_r($array1 + $array3);
    echo "<br>";
    
    echo "Equality (\$array1 == \$array3): ";
    var_dump($array1 == $array3);
    echo "<br>";
    
    echo "Identity (\$array1 === \$array3): ";
    var_dump($array1 === $array3);
    echo "<br>";
    
    echo "Inequality (\$array1 != \$array2): ";
    var_dump($array1 != $array2);
    echo "<br>";
    
    echo "Non-identity (\$array1 !== \$array3): ";
    var_dump($array1 !== $array3);
    echo "<br>";
    echo "</div>";
    
    // 8. Conditional (Ternary) Operator
    echo "<h2>8. Conditional (Ternary) Operator</h2>";
    
    $age = 20;
    
    echo "<div class='code-output'>";
    echo "Given: \$age = $age<br><br>";
    
    $status = ($age >= 18) ? "adult" : "minor";
    echo "Status using ternary operator: $status<br>";
    
    // PHP 7+ null coalescing operator
    $username = null;
    $displayName = $username ?? "Guest";
    echo "Using null coalescing operator (??): \$displayName = $displayName<br>";
    
    // PHP 7.4+ null coalescing assignment operator
    $username ??= "DefaultUser";
    echo "After null coalescing assignment (??=): \$username = $username<br>";
    echo "</div>";
    
    // 9. Bitwise Operators
    echo "<h2>9. Bitwise Operators</h2>";
    
    $m = 6;  // 110 in binary
    $n = 3;  // 011 in binary
    
    echo "<div class='code-output'>";
    echo "Given: \$m = $m (binary: " . decbin($m) . ") and \$n = $n (binary: " . decbin($n) . ")<br><br>";
    
    echo "AND (\$m & \$n): " . ($m & $n) . " (binary: " . decbin($m & $n) . ")<br>";
    
    echo "OR (\$m | \$n): " . ($m | $n) . " (binary: " . decbin($m | $n) . ")<br>";
    
    echo "XOR (\$m ^ \$n): " . ($m ^ $n) . " (binary: " . decbin($m ^ $n) . ")<br>";
    
    echo "NOT (~\$m): " . (~$m) . " (binary: " . decbin(~$m & 0xFF) . " shown with 8 bits)<br>";
    
    echo "Shift left (\$m << 1): " . ($m << 1) . " (binary: " . decbin($m << 1) . ")<br>";
    
    echo "Shift right (\$m >> 1): " . ($m >> 1) . " (binary: " . decbin($m >> 1) . ")<br>";
    echo "</div>";
    
    // 10. Execution Operators
    echo "<h2>10. Execution Operators</h2>";
    
    echo "<div class='code-output'>";
    echo "Execution operator (backticks) executes shell commands:<br><br>";
    
    echo "Example: using backticks to get PHP version: <code>`php -v`</code> would execute the command<br>";
    echo "For security reasons, the actual execution is commented out in this example.<br>";
    echo "</div>";
    
    // 11. Error Control Operator
    echo "<h2>11. Error Control Operator</h2>";
    
    echo "<div class='code-output'>";
    echo "The @ operator suppresses error messages:<br><br>";
    
    // Regular file_get_contents with a non-existent file would show a warning
    //echo file_get_contents("non-existent-file.txt");
    
    // With @ operator, the error is suppressed
    $content = @file_get_contents("non-existent-file.txt");
    echo "Using @file_get_contents() on a non-existent file suppresses the warning<br>";
    echo "Result: " . ($content === false ? "File not found (but no warning displayed)" : $content);
    echo "</div>";
    
    // 12. Type Operators
    echo "<h2>12. Type Operators</h2>";
    
    $obj = new stdClass();
    
    echo "<div class='code-output'>";
    echo "Type operators determine relationships between objects and classes:<br><br>";
    
    echo "instanceof operator: \$obj instanceof stdClass: ";
    var_dump($obj instanceof stdClass);
    echo "<br>";
    
    echo "instanceof with different class: \$obj instanceof Exception: ";
    var_dump($obj instanceof Exception);
    echo "</div>";
    ?>

    <h2>Operator Precedence</h2>
    <p>Operators are evaluated in a specific order based on their precedence. Higher precedence operators are evaluated before lower precedence ones.</p>
    
    <table>
        <tr>
            <th>Precedence</th>
            <th>Operator</th>
            <th>Description</th>
        </tr>
        <tr>
            <td>1 (highest)</td>
            <td>** (right associative)</td>
            <td>Exponentiation</td>
        </tr>
        <tr>
            <td>2</td>
            <td>++ -- ~ (right associative)</td>
            <td>Increment, decrement, bitwise NOT</td>
        </tr>
        <tr>
            <td>3</td>
            <td>! (right associative)</td>
            <td>Logical NOT</td>
        </tr>
        <tr>
            <td>4</td>
            <td>* / %</td>
            <td>Multiplication, division, modulus</td>
        </tr>
        <tr>
            <td>5</td>
            <td>+ - .</td>
            <td>Addition, subtraction, string concatenation</td>
        </tr>
        <tr>
            <td>6</td>
            <td><< >></td>
            <td>Bitwise shift left, bitwise shift right</td>
        </tr>
        <tr>
            <td>7</td>
            <td>< <= > >= <=></td>
            <td>Comparison operators</td>
        </tr>
        <tr>
            <td>8</td>
            <td>== != === !== <></td>
            <td>Equality operators</td>
        </tr>
        <tr>
            <td>9</td>
            <td>&</td>
            <td>Bitwise AND</td>
        </tr>
        <tr>
            <td>10</td>
            <td>^</td>
            <td>Bitwise XOR</td>
        </tr>
        <tr>
            <td>11</td>
            <td>|</td>
            <td>Bitwise OR</td>
        </tr>
        <tr>
            <td>12</td>
            <td>&&</td>
            <td>Logical AND</td>
        </tr>
        <tr>
            <td>13</td>
            <td>||</td>
            <td>Logical OR</td>
        </tr>
        <tr>
            <td>14</td>
            <td>??</td>
            <td>Null coalescing</td>
        </tr>
        <tr>
            <td>15</td>
            <td>? : (right associative)</td>
            <td>Ternary</td>
        </tr>
        <tr>
            <td>16</td>
            <td>= += -= *= /= %= **= &= |= ^= <<= >>= .= ??= (right associative)</td>
            <td>Assignment operators</td>
        </tr>
        <tr>
            <td>17</td>
            <td>and</td>
            <td>Logical AND</td>
        </tr>
        <tr>
            <td>18</td>
            <td>xor</td>
            <td>Logical XOR</td>
        </tr>
        <tr>
            <td>19 (lowest)</td>
            <td>or</td>
            <td>Logical OR</td>
        </tr>
    </table>
</body>
</html>