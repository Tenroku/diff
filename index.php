<?php
/**
 * Created by PhpStorm.
 * User: ilaoniu
 * Date: 2019/7/29
 * Time: 19:19
 */

require 'vendor\autoload.php';

use Ilaoniu\Diff\Diff;

$diff = new Diff();
?>

<style>
    <?php echo file_get_contents('styles/style.css') ?>
</style>

<div class="diff-wrap">
<?php
echo $diff->calculate('123', '456');
?>
</div>