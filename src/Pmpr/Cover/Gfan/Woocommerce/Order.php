<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             694c4d375f02d             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Gfan\Woocommerce; class Order extends Template { public function ikckqoqkgcewiwcq($ymqmyyeuycgmigyo, $aqykuigiuwmmcieu, $ymkomoccmymcoiea = [], $ugugagoguiycqeys = []) : array { switch ($ymqmyyeuycgmigyo) { case self::oamssweieucmuaau: $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); if ($smuykqsageuocuos->has($aqykuigiuwmmcieu, '.col2-set')) { $ugugagoguiycqeys = ['.col2-set' => ['class' => 'row'], '.woocommerce-column--1' => ['class' => 'col-lg-6'], '.woocommerce-column--2' => ['class' => 'col-lg-6 mb-5 mb-lg-0']]; } $aqykuigiuwmmcieu = $smuykqsageuocuos->ogaeogwycyqqckeu($aqykuigiuwmmcieu, ['.col-1' => ['class' => 'col-1'], '.col-2' => ['class' => 'col-2']]); break; case self::yqeagyieaogkoiqw: $ugugagoguiycqeys = ['.product-total' => ['class' => 'h5'], '.product-name a' => ['class' => 'text-primary-secondary']]; break; case self::ooucaegqiuieiwwu: $ugugagoguiycqeys = $this->mmyqcicayesayugq(); $ugugagoguiycqeys = array_merge($ugugagoguiycqeys, ['.woocommerce-order-details' => ['class' => 'table-responsive my-5']]); break; } return parent::ikckqoqkgcewiwcq($ymqmyyeuycgmigyo, $aqykuigiuwmmcieu, $ymkomoccmymcoiea, $ugugagoguiycqeys); } }
