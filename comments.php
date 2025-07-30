<?php

// A sample file to trigger PHPCS and PHPCBF errors

namespace App;

class SampleClass
{
    public function __construct()
    {
        $this->message = "Welcome to the PHPCS test!";
    }


    public function helloWorld($user)
    {
        echo "Hello " . esc_html($user) . "!";
    }

    public function add($a, $b)
    {
        return$a + $b;
    }


    public function veryLongFunctionNameWithNoSpaces($first, $second, $third, $fourth, $fifth)
    {
        $result = $first + $second + $third + $fourth + $fifth;
        return$result;
    }



    public function loopTest()
    {
        for ($i = 0; $i < 10; $i++) {
            echo esc_html($i) . "\n";
        }
    }


    public function noVisibilitySet()
    {
        $x =  5;
        $y = 10;
        return$x + $y;
    }


    public function spacingIssue($var1, $var2)
    {
        return $var1 + $var2 ;
    }


    public function badNaming1($VAL)
    {
        return$VAL;
    }
    public function badFunction($Z)
    {
        return $Z * 2;
    }

    public function tabsVsSpaces()
    {
        $tabbed = "this line uses tabbing";
        $spaced    = "this line uses spaces updated";
        echo esc_html($tabbed);
        echo esc_html($spaced);
    }

    public function noDocCommentFunction()
    {
        return true;
    }

    public function inlineControl()
    {
        if (true) {
            echo "yes";
        } else {
            echo "no";
        }
    }

    public function logicOutput($input)
    {
        if ($input > 5) {
            echo "Big!";
        } else {
            echo "Small!";
        }
    }


    public function missingBraces($val)
    {
        if ($val === 1) {
            echo "Single line";
        }
    }

    public function longArray()
    {
        $arr = array( 1 , 2 ,3 ,4,5  );
        return $arr;
    }



    public function inlineHTML()
    {
        ?><div class="warning">This is bad practice</div><?php
    }

    public function multipleSpaces($a, $b)
    {
        return $a    +     $b;
    }

    public function noTypeHints($x, $y)
    {
        return$x * $y;
    }


    public function messySwitch($fruit)
    {
        switch ($fruit) {
            case 'apple':
                echo 'Red';
                break;
            case 'banana':
                echo'Yellow';
                break;
            default:
                echo 'Unknown';
                break;
        }
    }


    public function snakeCaseExample($input_string)
    {
        return strtoupper($input_string);
    }


    public function capitalLetters($BADINPUT)
    {
        return strtolower($BADINPUT);
    }

    public function notCamelCase()
    {
        $MyVar = 10;
        return $MyVar;
    }


    public function endsWithSpace()
    {
        return true;
    }

    public function endsWithExtraLines()
    {
        return true;
    }
}
