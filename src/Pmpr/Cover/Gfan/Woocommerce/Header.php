<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             626989055538c             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Gfan\Woocommerce; use Pmpr\Common\Foundation\Decorator\DecoratorAsset; use Pmpr\Common\Foundation\Decorator\DecoratorUser; use Pmpr\Common\Foundation\Decorator\Plugin\DecoratorWoocommerce; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Common\Cover\Woocommerce\Cart; use WC_Product; class Header extends Template { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\167\x70\137\160\x72\151\x6e\x74\137\x73\164\171\154\145\x73", [$this, "\171\163\155\161\167\163\x73\171\163\x6f\155\167\x75\161\x63\x71"]); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\150\145\x61\144\x65\162\137\x6d\151\144\x64\154\145\137\x72\x69\147\150\x74\137\151\x63\157\x6e\x5f" . self::eaymwcsywymcueus), [$this, "\x6f\x65\167\x73\x6b\167\x69\x6b\x6d\x6d\x61\x77\147\147\145\147"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x68\x65\141\x64\145\x72\137\155\x69\x64\144\154\145\137\162\151\147\150\164\137\150\164\x6d\154\x5f" . self::eaymwcsywymcueus), [$this, "\x6f\x6d\163\157\161\171\151\x6b\157\x6b\161\x6b\x69\x61\161\151"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x68\x65\x61\x64\145\162\137\155\x69\144\x64\154\x65\137\162\151\147\x68\x74\x5f\150\x74\x6d\154\137" . self::kakmqeamywsckeso), [$this, "\167\x69\x65\x77\171\x6f\x75\x69\147\x6d\x65\171\x77\155\145\167"]); parent::kgquecmsgcouyaya(); } public function ysmqwssysomwuqcq() { DecoratorAsset::ciuuyygmkuwgoiki("\x77\157\157\143\157\155\155\x65\x72\x63\x65\55\x69\x6e\154\151\x6e\145", "\141\x66\164\x65\162", ''); } public function oewskwikmmawggeg($nsmgceoqaqogqmuw) : string { return ManipulateHTML::gmqyuaqwgiayskei([$nsmgceoqaqogqmuw, $this->eokyamkqwyyuesek()], ["\143\x6c\x61\x73\x73" => "\143\x6f\165\156\164\55\x66\162\x61\x6d\x65\x20\144\55\x66\154\x65\170"]); } public function wiewyouigmeywmew($nsmgceoqaqogqmuw) { if (!DecoratorUser::ksgkoukcicwkkaum()) { goto emmsycooskoqmgeg; } $cucagwqokeieoecu = ["\143\x6c\141\163\x73" => "\x69\x63\x6f\x6e\55\x6d\x64\x20\x69\143\157\156\55\x64\141\x72\x6b\x20\x6d\171\55\x61\x75\164\157"]; $oammesyieqmwuwyi = []; $ymmmmaiuoocagigk = $this->wkiaeewoqmsougim(self::sakqiumesekgquyk, []); if (!$ymmmmaiuoocagigk) { goto qgeugwymkkiacwoc; } $sowouiywwmkayamk = DecoratorWoocommerce::kamgouysgcgiaosw(); if (!$sowouiywwmkayamk) { goto mqicocmqegwukkwg; } foreach ($sowouiywwmkayamk as $kgccggmwkeukkkci => $pkyyagewkiyckmwy) { if (!in_array($kgccggmwkeukkkci, $ymmmmaiuoocagigk, true)) { goto ciykoyeioqgyaeqo; } $oammesyieqmwuwyi[$kgccggmwkeukkkci] = [self::TEXT => $pkyyagewkiyckmwy, self::qgqyauaqwqmqseim => $this->cuoygaaeqeqcuggu($this->uuiqowweqqewoysu($kgccggmwkeukkkci), $cucagwqokeieoecu), self::ogigqueukwysusii => DecoratorWoocommerce::quiocgkecyewioqa($kgccggmwkeukkkci), self::iuqumwggccmcuyem => 0]; ciykoyeioqgyaeqo: asiqwuoswmigcaki: } wcugqegqsuuuwqao: mqicocmqegwukkwg: qgeugwymkkiacwoc: $oammesyieqmwuwyi = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x77\157\x6f\143\157\x6d\155\x65\x72\143\x65\137\x6d\x65\x6e\x75\x5f\141\x63\x63\157\x75\x6e\164\x5f\x64\162\157\160\x64\x6f\167\156\137\154\x69\x6e\153\x73"), $oammesyieqmwuwyi); $oammesyieqmwuwyi = ManipulateArray::yaeiiwwyckwugsem($oammesyieqmwuwyi); $nsmgceoqaqogqmuw .= $this->iuygowkemiiwqmiw("\141\143\143\157\165\x6e\x74\x5f\144\162\157\x70\x64\157\x77\x6e", ["\x6c\151\x6e\x6b\x73" => $oammesyieqmwuwyi, self::meksegaoamowuwoq => ManipulateUser::get(), "\x61\x72\x72\157\x77\137\151\x63\157\x6e" => IconFontawesomeInterface::qeqsyieyekqcacig, "\x64\x69\163\160\154\x61\x79\x5f\x6e\x61\x6d\145" => ManipulateUser::ygwimyogyaqgumam(), "\x61\143\143\x6f\x75\156\164\x5f\x6c\x69\x6e\x6b" => ManipulateWoocommerce::guuoascmyqygwsic(), "\x67\145\164\x5f\141\x63\x63\157\165\x6e\164\x5f\x74\x65\x78\x74" => __("\123\x68\157\167\x20\x41\x63\143\x6f\x75\156\x74", PR__CVR__GFAN)]); emmsycooskoqmgeg: return $nsmgceoqaqogqmuw; } public function omsoqyikokqkiaqi($nsmgceoqaqogqmuw) { if (!$this->wigckqooeccseiyu()) { goto ouamogymawucwswu; } $nsmgceoqaqogqmuw .= $this->iuygowkemiiwqmiw("\143\141\162\x74\137\x64\x72\157\160\144\157\x77\156", ["\x77\151\144\147\x65\x74" => "\x57\103\137\x57\x69\x64\147\145\164\x5f\x43\141\162\164", "\143\x6f\x75\156\164\137\164\x65\x78\164" => sprintf("\x25\163\40\45\163", $this->eokyamkqwyyuesek(0), __("\120\x72\x6f\x64\x75\143\x74", PR__CVR__GFAN)), "\143\x61\x72\164\x5f\x6c\x69\156\153" => ManipulateHTML::uuccukgasskgimsq("\x61", ["\x63\154\141\x73\x73" => "\143\x61\162\144\x2d\154\151\x6e\x6b", "\x68\162\x65\x66" => ManipulateWoocommerce::geoemsmuouqcqmei()], __("\126\151\x65\x77\x20\103\141\162\x74", PR__CVR__GFAN)), "\x65\155\x70\x74\x79\x5f\164\145\x78\x74" => __("\x4e\157\40\160\162\157\144\165\x63\164\163\x20\x69\x6e\40\x74\150\x65\x20\x63\141\162\x74\x2e", PR__CVR__GFAN), "\x67\145\x74\x5f\143\x6f\x75\156\x74\x5f\x61\152\141\x78\137\x61\143\164\151\157\156" => Cart::iuwcmmowkqywmmcw]); ouamogymawucwswu: return $nsmgceoqaqogqmuw; } public function eokyamkqwyyuesek($gaeqamemwmwsyukm = null) : ?string { if ($gaeqamemwmwsyukm === null) { goto mugqyyeayeyggqqk; } $gaeqamemwmwsyukm = $this->msywmyaoqmaegsuy($gaeqamemwmwsyukm); goto acsqgiuageaasiyy; mugqyyeayeyggqqk: $gaeqamemwmwsyukm = ManipulateWoocommerce::uceecgsoicggikeu()->get_cart_contents_count(); acsqgiuageaasiyy: return ManipulateHTML::gmqyuaqwgiayskei($gaeqamemwmwsyukm, ["\143\154\x61\163\163" => "\143\x6f\165\x6e\x74\x2d\166\141\x6c\165\x65"]); } public function amycwaoyouueyics($mcqieaigyeeyaksm, $igqsaukqcqscimok) { if (!($mcqieaigyeeyaksm && isset($igqsaukqcqscimok["\x64\141\164\141"]))) { goto samwkqgwouggsguc; } $product = $igqsaukqcqscimok["\x64\141\164\141"]; if (!$product instanceof WC_Product) { goto oomguqikqokqwgku; } $mcqieaigyeeyaksm = $product->get_image("\163\155\141\154\154", ["\x63\x6c\141\x73\x73" => "\146\x6c\x6f\141\x74\x2d\162\x69\147\150\x74\x20\155\x6c\55\62\x20\162\x6f\165\156\x64\x65\144"]); oomguqikqokqwgku: samwkqgwouggsguc: return $mcqieaigyeeyaksm; } public function yeyukaqmwmoyysua($kyayogegqasiumes) { $kyayogegqasiumes["\x2e\143\x61\x72\164\55\143\157\156\x74\145\x6e\164\55\x63\157\165\156\x74"] = $this->eokyamkqwyyuesek(); return $kyayogegqasiumes; } }
