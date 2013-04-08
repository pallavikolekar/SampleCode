<?php
/**
* MyClass Class Doc Comment
*
* PHP version 5
*
* @category Class
* @package  MyPackage
* @author   pallavi kolekar Other <pallavik@glam.com>
* @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
* @link     http://www.hashbangcode.com/
* 
*/
#this is comment
echo "This is function call example";
$res = add(3, 5);
echo "The addition is: ".$res;
function add($a, $b)
{
            $c = $a + $b;
            return $c;
}
echo "this is another changes in file";
?>
