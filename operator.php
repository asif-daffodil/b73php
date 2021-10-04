<?php  
    /* Arethmetic operator
     * +
     * -
     * *
     * /
     * %
     */

    /* Assignment Operator
     * =
     * +=
     * -=
     * *=
     * /=
     * %=
     */ 

    /* Concatination operator
     * .
     * .= 
     */
    
    /* Comparison operation
     * ==
     * ===
     * !=
     * <
     * >
     * <=
     * >=
     * <>
     * !==
     */ 

    /* Conditional Operaotr
     * &&
     * ||
     * and
     * or
     * xor
     */

    $x = 15;
    $y = "15";
    $z = 16;

    // if ($x < $z xor $x == $y) {
    //     echo "Hisibur Rahman";
    // }else {
    //     echo "Sheikh Hasina";
    // }
    $hasib = "Hasubur Rahman";
    echo ($x < $z xor $x == $y)? "Hisibur Rahman":"Sheikh Hasina";
    echo "<br>";    
    echo $hasib ?? "Khirul Bashar Vai";
?>