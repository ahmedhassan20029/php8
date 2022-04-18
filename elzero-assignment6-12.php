<?php
    //========Assignment 01==========
    echo "//========Assignment 01==========";
    echo "<br>";

    echo (int) 15.2 + (int) 14.7 + (10.5 + 10.5); // 50
    echo "<br>";
    echo gettype( (int) 15.2 + (int) 14.7 + (int) (10.5 + 10.5)); // Integer
    echo "<br>";
    //==================

    //========Assignment 02==========
    echo "//========Assignment 02==========";
    echo "<br>";

    echo var_dump(100); // Method One
    echo "<br>";
    echo gettype(100); // Method Two
    echo "<br>";
    echo get_debug_type(100) . PHP_EOL; // Method Three => Optional
    // get_debug_type — Gets the type name of a variable in a way that is suitable for debugging
    // url >>> https://www.php.net/manual/en/function.get-debug-type.php
    echo '<br>';

    //========Assignment 03==========
    echo "//========Assignment 03==========";
    echo "<br>";

    echo "Hello \"Elzero\" \\\\ \"\"\" We Love \"\$\$PHP\"";
    // Needed Output
    // Hello "Elzero" \\ """ We Love "$$PHP"
    echo '<br>';

    //========Assignment 04==========
    echo "//========Assignment 04==========";
    echo "<br>";

    echo nl2br("We \n Love \n Elzero \n Web \n School");
    // url >>> https://www.php.net/manual/en/function.nl2br.php
    echo '<br>';

    //========Assignment 05==========
    echo "//========Assignment 05==========";
    echo "<br>";

    echo <<<'here'
    Hello "'Elzero'"
    We Love $Programming$
    Languages Specially "PHP"
    here;
    echo '<br>';

    //========Assignment 06==========
    echo "//========Assignment 06==========";
    echo "<br>";

    $something = "Programming";
    echo <<<"code"
    Hello \PHP\
    We Love $something
    code;
    echo '<br>';

    //========Assignment 07==========
    echo "//========Assignment 07==========";
    echo "<br>";

    echo (int) "Hello PHP" + true;
    echo '<br>';
    echo get_debug_type((int) "Hello PHP") . PHP_EOL;
    echo '<br>';

    //========Assignment 08==========
    echo "//========Assignment 08==========";
    echo "<br>";

    echo '<pre>';
    print_r(

    // start array frontend
    ['FrontEnd' => array (
        0 => 'HTML',
        1 => 'CSS',

        // start js
        'JS' => Array(
            'Vuejs' => array(2 => 'v2', 3 => 'v3'),
            0 => 'Reactjs',
            1 => 'Svelte'
        ) // end js

        ), // end array frontend

    // start array backend
    'backend' => array(
        0 => 'PHP',
        1 => 'MySQL',
        2 => 'Security'
    ), // end array backend

    0 => 'Git',
    1 => 'Github',

    // start array testing
    'Testing' => array (
        0 => 'Unit Testing',
        1 => 'End To End',
        2 => 'Integration',
    ) // end array testing 
    ]); // close array
    echo '</pre>';
?>