<?php

/**
 * @var $this \yii\web\View
 */

use app\assets\MobileAppAsset;

$this->title = 'Wallets';
$this->registerJsFile('/js/app/wallets.js', ['depends' => MobileAppAsset::className()]);
?>
<table>
    <thead>
    <tr>
        <th data-field="id">Name</th>
        <th data-field="name">Item Name</th>
        <th data-field="price">Item Price</th>
    </tr>
    </thead>

    <tbody>
    <tr>
        <td>Alvin</td>
        <td>Eclair</td>
        <td>$0.87</td>
    </tr>
    <tr>
        <td>Alan</td>
        <td>Jellybean</td>
        <td>$3.76</td>
    </tr>
    <tr>
        <td>Jonathan</td>
        <td>Lollipop</td>
        <td>$7.00</td>
    </tr>
    </tbody>
</table>

<!--<div class="fixed-action-btn horizontal" style="bottom: 45px; right: 24px;">-->
<!--    <a class="btn-floating btn-large red">-->
<!--        <i class="large material-icons">mode_edit</i>-->
<!--    </a>-->
<!--    <ul>-->
<!--        <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>-->
<!--        <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>-->
<!--        <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>-->
<!--        <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>-->
<!--    </ul>-->
<!--</div>-->