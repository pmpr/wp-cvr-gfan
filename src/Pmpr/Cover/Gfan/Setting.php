<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624ea1f7878a8             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Gfan; use Pmpr\Common\Foundation\Decorator\Post\DecoratorPost; use Pmpr\Common\Foundation\Decorator\Taxonomy\DecoratorTerm; use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox; use Pmpr\Common\Foundation\FormMaker\Admin\Element\Tab; use Pmpr\Common\Foundation\FormMaker\Admin\Field\BSSelect; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateAttachment; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateComment; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Common\Foundation\FormMaker\Admin\Element\Setting as BaseClass; class Setting extends BaseClass implements CommonInterface { const qscwcyiaqccoayqk = "\x66\x65\x61\x74\x75\x72\x65\163"; const oeouaqyskusqoasi = "\x61\143\164\x69\157\x6e\137\164\145\x78\x74"; const ewgmgayeoswwewmy = "\x68\157\x6d\x65\x5f\164\157\160\x5f\x73\154\x69\144\145\x72"; const qgkmcuyawoqwuwku = "\141\x63\x74\151\x6f\x6e\137\x70\x65\162\155\141\154\151\x6e\x6b"; const icciwsismsmgcgqu = "\150\157\x6d\x65\137\x73\x6c\151\144\x65\162\137\143\141\164\x73"; const wcqucguiqwowkago = self::icciwsismsmgcgqu . self::icmokuskwoskgace; const kiiecoycysouawws = "\x68\x65\141\x64\145\x72\137\x6a\165\155\x62\157\164\162\157\156\137\142\141\x63\153\x67\162\x6f\x75\x6e\x64"; const qeaqkaaessiogkme = "\x68\x6f\x6d\x65\137\x63\141\x74\x61\x6c\x6f\x67\x5f"; const qkcyyaguaoeciqcw = self::qeaqkaaessiogkme . self::kekgqaemqessuwmq; const iyagaekssciqemgw = self::qeaqkaaessiogkme . self::qescuiwgsyuikume; const gqeuwqccqoyywgim = self::qeaqkaaessiogkme . self::mkousmkiawwousws; const cygcoemkkwaakwma = self::qeaqkaaessiogkme . "\x73\x75\142\164\x65\170\164"; const qcmsmmccgsgaeaky = self::qeaqkaaessiogkme . "\x66\151\154\145\x5f\164\x65\x78\x74"; const ywwoesogeoawmqeu = self::qeaqkaaessiogkme . self::akmgqeyqcecqukia; const ouiwaycweaokwaus = self::qeaqkaaessiogkme . "\141\143\x74\x69\x6f\x6e\x5f\x74\145\x78\164"; const gawciqgommakuqkk = self::qeaqkaaessiogkme . "\x61\143\x74\151\157\x6e\137\x70\145\162\155\141\154\x69\156\153"; const sogcwwyoqwkwqqyw = "\150\x6f\155\145\x5f\160\x72\157\144\165\143\x74\163\137\163\x6c\151\x64\145\x72\137"; const uuigsecmqcwwgcck = self::sogcwwyoqwkwqqyw . self::qescuiwgsyuikume; const sciawuimikwoukqa = self::sogcwwyoqwkwqqyw . self::qwumqqyuasyskkkc; const pogskigqccygiack = "\150\x6f\155\145\137\143\x75\163\x74\x6f\x6d\x65\162\x5f\x63\x6f\x6d\155\145\156\164\163\x5f"; const socgqmagkayeooia = self::pogskigqccygiack . self::qescuiwgsyuikume; const gkikweeukcmwoeuk = self::pogskigqccygiack . self::qwumqqyuasyskkkc; const ssmwqieuwqkoimki = "\x70\162\x6f\144\x75\x63\164\x5f"; const gyyqcugoikqowgam = "\x63\141\x74\x65\x67\x6f\162\x79\137"; const ugmgsmeeuoskgyum = "\x68\157\155\145\137\146\x65\x61\164\165\x72\x65\x64\137"; const qkamcsegucogeemg = "\x61\x62\157\x75\164\137"; const hamgkwmeauwksaye = self::qkamcsegucogeemg . self::imywcsggckkcywgk; const socgueyqmoegqcwy = self::qkamcsegucogeemg . self::TEXT; const wiyqagcmokeaumus = self::qkamcsegucogeemg . self::qescuiwgsyuikume; const cckwmgqogyywoiwi = self::qkamcsegucogeemg . self::mkousmkiawwousws; const iugigowayekmeogs = self::qkamcsegucogeemg . self::gqmuoaykeqeuoukm; const cmaksgsoisscesyo = "\143\157\156\164\x61\x63\x74\137\x70\x61\x67\145\137"; const qwmmiwemekwcwims = self::cmaksgsoisscesyo . self::wsgueemccsugoays; const wucksgoigumwmiyy = self::cmaksgsoisscesyo . self::muqaqimusmckkieq; const gyqiaqwscqewgkkq = self::cmaksgsoisscesyo . self::memskaacyikisggk; const mksciaygeecaucku = self::cmaksgsoisscesyo . "\163\157\x63\x69\x61\154"; const scmguggguywuegok = self::cmaksgsoisscesyo . "\167\x68\x61\x74\x73\141\160\160"; const keekqamwkgkgssoq = self::cmaksgsoisscesyo . self::eqcaaskcigqcmmww; const acamugwyucyumios = self::mksciaygeecaucku . self::icmokuskwoskgace; public function __construct() { $this->name = self::akuociswqmoigkas(); $this->parentMenu = "\x74\150\145\x6d\x65\163\56\160\x68\x70"; parent::__construct(); } public function gogaagekwoisaqgu() { $this->menuTitle = __("\x53\145\x74\164\151\156\x67", PR__CVR__GFAN); $this->pageTitle = __("\103\157\166\x65\162\40\x53\x65\164\x74\x69\x6e\147", PR__CVR__GFAN); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\147\146\x61\x6e\137\x67\x65\x74\137\146\x65\x61\164\x75\162\x65\163"), [$this, "\x6d\x6f\x67\x73\143\x71\145\155\x73\147\153\143\145\x63\x65\x79"]); parent::kgquecmsgcouyaya(); } public function ecwgiiuacoaokqkw() { $ymqmyyeuycgmigyo = $this->aakmagwggmkoiiyu(); $this->aucimgwswmgaocae(MetaBox::sgsmqaoowiyocqaa(self::ioomakeyqiqowgmk, __("\107\145\x6e\145\x72\141\x6c", PR__CVR__GFAN))->sikqggwmmykuiymy(MetaBox::cgygmuguceeosoey("{$ymqmyyeuycgmigyo}\137\x68\145\x61\x64\x65\x72", __("\110\145\x61\144\x65\162\40\123\145\x74\x74\151\x6e\147", PR__CVR__GFAN))->mkksewyosgeumwsa(MetaBox::kimoeccokowuaiic(self::kiiecoycysouawws, __("\110\x65\x61\x64\x65\x72\40\x4a\x75\x6d\142\157\x74\x72\157\x6e", PR__CVR__GFAN)))->saemoowcasogykak(IconFontawesomeInterface::seeikyecigusgwqo))->sikqggwmmykuiymy(MetaBox::cgygmuguceeosoey("{$ymqmyyeuycgmigyo}\x5f\x66\157\157\x74\145\x72", __("\x46\157\157\164\145\162\40\x53\x65\x74\x74\151\156\x67", PR__CVR__GFAN))->mkksewyosgeumwsa(MetaBox::iseogkiymousogom(self::qscwcyiaqccoayqk, __("\x46\x65\141\x74\x75\x72\x65\x73", PR__CVR__GFAN))->mkksewyosgeumwsa(MetaBox::kimoeccokowuaiic(self::mkousmkiawwousws, __("\111\x6d\x61\147\145", PR__CVR__GFAN)))->mkksewyosgeumwsa(MetaBox::ymuegqgyuagyucws(self::qescuiwgsyuikume, __("\x54\151\x74\x6c\x65", PR__CVR__GFAN)))->mkksewyosgeumwsa(MetaBox::ymuegqgyuagyucws(self::eqkeooqcsscoggia, __("\123\151\x6e\x67\154\x65\x20\x4c\151\x6e\145\40\x44\145\x73\x63\162\x69\160\x74\151\x6f\x6e", PR__CVR__GFAN)))->wygoskowywcuyaiq()->sosuookgumsgyyyc(5))->saemoowcasogykak(IconFontawesomeInterface::seeikyecigusgwqo))->saemoowcasogykak(IconFontawesomeInterface::aqaocgsqseeqmoii))->aucimgwswmgaocae(MetaBox::sgsmqaoowiyocqaa("\150\157\155\x65", __("\x48\x6f\x6d\145", PR__CVR__GFAN))->sikqggwmmykuiymy(MetaBox::cgygmuguceeosoey("{$ymqmyyeuycgmigyo}\x5f\x68\157\x6d\x65\137\163\x65\143\x74\x69\x6f\156\x73", __("\x53\145\x63\164\151\x6f\156\x73", PR__CVR__GFAN))->saemoowcasogykak(IconFontawesomeInterface::gemusawikyiokako)->aucimgwswmgaocae(MetaBox::sgsmqaoowiyocqaa("{$ymqmyyeuycgmigyo}\137\x68\157\155\x65\x5f\164\157\160\137\163\x6c\x69\x64\145\162", __("\124\157\160\x20\x53\154\151\x64\x65\162", PR__CVR__GFAN))->mkksewyosgeumwsa(MetaBox::iseogkiymousogom(self::ewgmgayeoswwewmy, __("\x53\x6c\x69\144\145\x72\40\111\x74\x65\x6d\x73", PR__CVR__GFAN))->mkksewyosgeumwsa(MetaBox::kimoeccokowuaiic(self::mkousmkiawwousws, __("\x49\x6d\141\x67\x65", PR__CVR__GFAN)))->mkksewyosgeumwsa(MetaBox::uouyygwcgsmygaee(self::TEXT, __("\x54\145\170\x74", PR__CVR__GFAN))->qsecygiycssgacqs(3)->wcgckeeiiseccqkc())->mkksewyosgeumwsa(MetaBox::uouyygwcgsmygaee(self::qsskmqwcucisywqy, __("\123\x75\142\x74\145\x78\x74", PR__CVR__GFAN))->qsecygiycssgacqs(3)->wcgckeeiiseccqkc())->mkksewyosgeumwsa(MetaBox::ckuwucygcwsiawms(self::qgkmcuyawoqwuwku, __("\x41\143\x74\151\157\x6e\x20\120\145\x72\x6d\x61\x6c\x69\x6e\153\x20\x50\x61\147\x65\57\x50\x6f\x73\x74", PR__CVR__GFAN))->smmismmuuccmscya())->mkksewyosgeumwsa(MetaBox::ymuegqgyuagyucws(self::oeouaqyskusqoasi, __("\x41\x63\x74\151\157\156\x20\124\145\x78\x74", PR__CVR__GFAN), $this->msyiuaeimkquiwgy(__("\120\x61\147\145\57\120\x6f\163\164\40\x54\x69\164\x6c\x65", PR__CVR__GFAN))))->wygoskowywcuyaiq())->saemoowcasogykak(IconFontawesomeInterface::oyaieuqoqookogue))->aucimgwswmgaocae(MetaBox::sgsmqaoowiyocqaa("{$ymqmyyeuycgmigyo}\137\x68\157\x6d\145\x5f\160\x72\157\x64\165\143\164\x5f\x63\x61\x74\145\147\157\x72\151\x65\163\x5f\x73\154\151\144\145\x72", __("\103\141\x74\x65\147\157\162\x69\145\163\x20\123\154\151\x64\145\x72", PR__CVR__GFAN))->mkksewyosgeumwsa(MetaBox::ymuegqgyuagyucws(self::wcqucguiqwowkago, __("\x53\154\x69\144\x65\162\40\124\x69\164\154\x65", PR__CVR__GFAN)))->mkksewyosgeumwsa(MetaBox::ckuwucygcwsiawms(self::icciwsismsmgcgqu, __("\x50\162\x6f\144\165\x63\x74\x20\103\141\164\145\x67\x6f\x72\x69\145\163", PR__CVR__GFAN))->yyayequseyasoyks()->oeewiaacscgyamai(self::cmckeoksigiaqykc)->oikgogcweiiaocka())->saemoowcasogykak(IconFontawesomeInterface::wyoeksgmkucuigyg))->aucimgwswmgaocae(MetaBox::sgsmqaoowiyocqaa("{$ymqmyyeuycgmigyo}\x5f\150\157\x6d\x65\137\x63\x61\x74\x61\154\x6f\147", __("\x50\x72\x6f\x64\165\x63\164\x73\x20\x61\156\x64\x20\103\x61\164\141\x6c\x6f\x67", PR__CVR__GFAN))->mkksewyosgeumwsa(MetaBox::ymuegqgyuagyucws(self::iyagaekssciqemgw, __("\x54\x69\164\154\145", PR__CVR__GFAN)))->mkksewyosgeumwsa(MetaBox::sciaycsmsiekqueg(self::cygcoemkkwaakwma, __("\123\x75\142\164\145\x78\164", PR__CVR__GFAN))->gsomueooycksswcy())->mkksewyosgeumwsa(MetaBox::ckuwucygcwsiawms(self::gawciqgommakuqkk, __("\101\143\x74\151\157\x6e\40\120\145\162\155\x61\154\x69\x6e\x6b\40\x50\x61\x67\x65\57\x50\157\x73\164", PR__CVR__GFAN))->smmismmuuccmscya())->mkksewyosgeumwsa(MetaBox::ymuegqgyuagyucws(self::ouiwaycweaokwaus, __("\x41\143\x74\x69\x6f\156\x20\x54\x65\x78\x74", PR__CVR__GFAN), $this->msyiuaeimkquiwgy(__("\120\141\147\145\x2f\120\157\163\164\40\x54\x69\164\x6c\x65", PR__CVR__GFAN))))->mkksewyosgeumwsa(MetaBox::ymuegqgyuagyucws(self::qcmsmmccgsgaeaky, __("\103\x61\164\141\x6c\157\147\40\106\x69\154\145\40\x42\x75\x74\164\157\x6e\x20\124\x65\170\164", PR__CVR__GFAN))->eyygsasuqmommkua(__("\x44\157\x77\x6e\x6c\x6f\141\x64\x20\x50\x44\106\40\103\x61\164\x61\x6c\157\x67", PR__CVR__GFAN)))->mkksewyosgeumwsa(MetaBox::kimoeccokowuaiic(self::qkcyyaguaoeciqcw, __("\x43\x61\164\141\x6c\157\x67\x20\x46\151\154\x65", PR__CVR__GFAN)))->mkksewyosgeumwsa(MetaBox::kimoeccokowuaiic(self::ywwoesogeoawmqeu, __("\x42\141\x63\x6b\147\162\157\165\x6e\x64", PR__CVR__GFAN))->esauscaiuyiikmgc()->ewsymcsuimmoicgg())->mkksewyosgeumwsa(MetaBox::kimoeccokowuaiic(self::gqeuwqccqoyywgim, __("\103\141\x72\x64\40\111\155\x61\147\x65", PR__CVR__GFAN))->esauscaiuyiikmgc()->ewsymcsuimmoicgg()->eswksowyeqcsokew(self::MEDIUM))->saemoowcasogykak(IconFontawesomeInterface::uweeuoikoaesgkya))->aucimgwswmgaocae(MetaBox::sgsmqaoowiyocqaa("{$ymqmyyeuycgmigyo}\137\150\x6f\155\145\x5f\x70\162\157\144\x75\143\164\163\137\163\154\x69\x64\x65\x72", __("\120\x72\x6f\x64\x75\x63\164\x73\40\x53\154\x69\x64\145\162", PR__CVR__GFAN))->mkksewyosgeumwsa(MetaBox::ymuegqgyuagyucws(self::uuigsecmqcwwgcck, __("\x54\x69\x74\154\x65", PR__CVR__GFAN)))->mkksewyosgeumwsa(MetaBox::ckuwucygcwsiawms(self::sciawuimikwoukqa, __("\x50\x72\x6f\144\x75\x63\x74\x73", PR__CVR__GFAN))->smmismmuuccmscya()->oeewiaacscgyamai(self::oguseymmyyoyaako)->oikgogcweiiaocka())->saemoowcasogykak(IconFontawesomeInterface::kwacookqcskgsyku))->aucimgwswmgaocae($this->agcikqckayqsmoiu(self::ssmwqieuwqkoimki, __("\120\162\157\144\x75\143\x74", PR__CVR__GFAN)))->aucimgwswmgaocae(MetaBox::sgsmqaoowiyocqaa("{$ymqmyyeuycgmigyo}\x5f\150\x6f\x6d\145\x5f\141\x62\157\165\x74", __("\x53\164\157\x72\x79", PR__CVR__GFAN))->mkksewyosgeumwsa(MetaBox::ckuwucygcwsiawms(self::hamgkwmeauwksaye, __("\x50\141\147\x65", PR__CVR__GFAN))->smmismmuuccmscya()->oeewiaacscgyamai(self::imywcsggckkcywgk))->mkksewyosgeumwsa(MetaBox::ymuegqgyuagyucws(self::wiyqagcmokeaumus, __("\x54\x69\164\x6c\x65", PR__CVR__GFAN), $this->msyiuaeimkquiwgy(__("\x50\x61\147\145", PR__CVR__GFAN), __("\x54\151\164\154\145", PR__CVR__GFAN))))->mkksewyosgeumwsa(MetaBox::sciaycsmsiekqueg(self::socgueyqmoegqcwy, __("\104\145\x73\x63\x72\151\160\x74\x69\x6f\x6e", PR__CVR__GFAN), $this->msyiuaeimkquiwgy(__("\x50\141\147\x65", PR__CVR__GFAN), __("\104\x65\x73\x63\162\x69\x70\x74\x69\x6f\156", PR__CVR__GFAN)))->gsomueooycksswcy())->mkksewyosgeumwsa(MetaBox::ymuegqgyuagyucws(self::iugigowayekmeogs, __("\102\165\x74\x74\157\156\x20\x54\145\x78\164", PR__CVR__GFAN))->eyygsasuqmommkua(__("\x52\145\x61\144\40\x4d\x6f\162\x65\x20\101\142\157\165\164\x20\x55\x53", PR__CVR__GFAN)))->mkksewyosgeumwsa(MetaBox::kimoeccokowuaiic(self::cckwmgqogyywoiwi, __("\x49\x6d\141\147\x65", PR__CVR__GFAN), $this->msyiuaeimkquiwgy(__("\x50\x61\147\x65", PR__CVR__GFAN), __("\111\155\141\147\145", PR__CVR__GFAN)))->esauscaiuyiikmgc()->ewsymcsuimmoicgg()->eswksowyeqcsokew(self::ccgiciqicykuquwc))->saemoowcasogykak(IconFontawesomeInterface::giigokemwyckgmoc))->aucimgwswmgaocae($this->agcikqckayqsmoiu(self::gyyqcugoikqowgam, __("\103\141\164\x65\x67\x6f\162\171", PR__CVR__GFAN)))->aucimgwswmgaocae(MetaBox::sgsmqaoowiyocqaa("{$ymqmyyeuycgmigyo}\x5f\150\157\155\145\x5f\x63\157\x6d\x6d\145\x6e\x74\163", __("\x43\157\155\x6d\x65\x6e\x74\x73", PR__CVR__GFAN))->mkksewyosgeumwsa(MetaBox::ymuegqgyuagyucws(self::socgqmagkayeooia, __("\x54\151\x74\x6c\x65", PR__CVR__GFAN)))->mkksewyosgeumwsa(MetaBox::ckuwucygcwsiawms(self::gkikweeukcmwoeuk, __("\103\x6f\155\x6d\x65\156\x74\163", PR__CVR__GFAN))->imwouwmsiukakwqi()->oikgogcweiiaocka())->saemoowcasogykak(IconFontawesomeInterface::kumgmciqwoukimgc))->saemoowcasogykak(IconFontawesomeInterface::gemusawikyiokako))->saemoowcasogykak(IconFontawesomeInterface::iakqeokqeigmiawo))->aucimgwswmgaocae(MetaBox::sgsmqaoowiyocqaa("\x63\x6f\156\x74\x61\143\164", __("\x43\157\x6e\164\141\x63\x74", PR__CVR__GFAN))->sikqggwmmykuiymy(MetaBox::cgygmuguceeosoey("{$ymqmyyeuycgmigyo}\x5f\x63\x6f\x6e\x74\x61\x63\x74\137" . self::smkwuwawwaqyimcq, __("\111\156\x66\157\162\155\x61\164\151\157\156", PR__CVR__GFAN))->mkksewyosgeumwsa($this->kgkywiomusagosei(self::mksciaygeecaucku, __("\123\157\143\151\141\x6c\163", PR__CVR__GFAN), "\163\157\x63\151\x61\x6c"))->mkksewyosgeumwsa(MetaBox::ymuegqgyuagyucws(self::acamugwyucyumios, __("\x53\157\143\151\x61\x6c\x73\x20\124\151\164\x6c\145", PR__CVR__GFAN))->eyygsasuqmommkua(__("\x46\157\x6c\x6c\157\167\x20\125\x53", PR__CVR__GFAN)))->mkksewyosgeumwsa($this->kgkywiomusagosei(self::keekqamwkgkgssoq, __("\114\x6f\x63\141\164\151\x6f\156\x73", PR__CVR__GFAN), self::eqcaaskcigqcmmww))->mkksewyosgeumwsa($this->kgkywiomusagosei(self::gyqiaqwscqewgkkq, __("\x50\x68\157\x6e\145\163", PR__CVR__GFAN), self::memskaacyikisggk))->mkksewyosgeumwsa($this->kgkywiomusagosei(self::wucksgoigumwmiyy, __("\105\155\141\x69\x6c\163", PR__CVR__GFAN), self::muqaqimusmckkieq))->mkksewyosgeumwsa($this->kgkywiomusagosei(self::scmguggguywuegok, __("\127\x68\x61\164\x73\x61\160\160", PR__CVR__GFAN), self::memskaacyikisggk))->mkksewyosgeumwsa($this->kgkywiomusagosei(self::qwmmiwemekwcwims, __("\x48\x6f\165\162\163", PR__CVR__GFAN), self::eamuoicwqcokyggc))->saemoowcasogykak(IconFontawesomeInterface::isokaoamoeicecmy))->saemoowcasogykak(IconFontawesomeInterface::ioeakwcgiicgscuu)); } public function kuawkseqesecyaoa() : array { $yygmoeguaqyumuui = ["\163\x6f\x63\151\141\154", "\167\x68\x61\164\163\141\160\160", self::wsgueemccsugoays, self::muqaqimusmckkieq, self::memskaacyikisggk, self::eqcaaskcigqcmmww]; $sogksuscggsicmac = ["\x73\x6f\143\151\141\x6c\137\164\x69\164\x6c\145" => $this::eiwcuqigayigimak(self::acamugwyucyumios, __("\106\x6f\154\154\157\x77\x20\125\163", PR__CVR__GFAN))]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { $suuagcecoyuweoqk = $this::eiwcuqigayigimak(self::cmaksgsoisscesyo . $uusmaiomayssaecw, []); if (!$suuagcecoyuweoqk) { goto yoqakewookqoqacm; } foreach ($suuagcecoyuweoqk as $wgywewwaswowuooi => $mokouoooiwsmcmiu) { switch ($uusmaiomayssaecw) { case "\x73\157\143\151\141\154": $suuagcecoyuweoqk[$wgywewwaswowuooi] = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\147\x65\164\137\163\157\143\151\141\154\137\x62\171\x5f\153\x65\171"), [], $mokouoooiwsmcmiu); goto uckewycoogsogwiy; default: $suuagcecoyuweoqk[$wgywewwaswowuooi] = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\147\145\x74\137\143\157\x6e\164\141\143\x74\137\151\156\146\x6f\162\155\141\164\x69\x6f\156\137\142\171\137\153\145\171"), [], $mokouoooiwsmcmiu); goto uckewycoogsogwiy; } ikuuiauwouuqawuw: uckewycoogsogwiy: kwiggogcgciwuwqk: } yykqaowwsqgqysmq: $sogksuscggsicmac[$uusmaiomayssaecw] = $suuagcecoyuweoqk; yoqakewookqoqacm: suqceasgacskcmkc: } oeocukauoyosicso: return $sogksuscggsicmac; } public function mogscqemsgkcecey() : array { $oammesyieqmwuwyi = []; $wmaeussqmywkecka = $this::eiwcuqigayigimak(self::qscwcyiaqccoayqk, []); if (!$wmaeussqmywkecka) { goto emqswoaawgeyosmi; } foreach ($wmaeussqmywkecka as $momcykaoccoymeig => $wiwcgykokegmceyk) { [$mcqieaigyeeyaksm, $meqocwsecsywiiqs, $mugucsmcwwaeyewk] = ManipulateArray::gucyquqwoimkiiaq($wiwcgykokegmceyk, [self::mkousmkiawwousws, self::qescuiwgsyuikume, self::eqkeooqcsscoggia], false); if (!($mcqieaigyeeyaksm && $meqocwsecsywiiqs && $mugucsmcwwaeyewk)) { goto ocywegekakimmwcq; } $oammesyieqmwuwyi[$momcykaoccoymeig] = $wiwcgykokegmceyk; ocywegekakimmwcq: yuimwyoywaiiqacs: } gswcoeiisamakwii: emqswoaawgeyosmi: return $oammesyieqmwuwyi; } private function kgkywiomusagosei($uusmaiomayssaecw, $meqocwsecsywiiqs, $sqeykgyoooqysmca) : BSSelect { switch ($uusmaiomayssaecw) { case self::mksciaygeecaucku: $qiouiwasaauyaaue = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\147\x65\x74\137\163\x6f\143\x69\141\x6c\x5f\x69\164\145\155\163"), [], [self::squoamkioomemiyi => $sqeykgyoooqysmca]); goto iwsmmkqaoksmocok; default: $qiouiwasaauyaaue = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x67\145\x74\137\143\157\x6e\x74\141\x63\164\137\151\x6e\146\157\162\x6d\x61\164\151\157\x6e"), [], [self::squoamkioomemiyi => $sqeykgyoooqysmca]); goto iwsmmkqaoksmocok; } esikeyqyuikmaiek: iwsmmkqaoksmocok: return MetaBox::ckuwucygcwsiawms($uusmaiomayssaecw, $meqocwsecsywiiqs, $qiouiwasaauyaaue)->oikgogcweiiaocka(); } public function ykisucyksoiycyci() : array { $cmwygeyygwqaemaq = $migiiksoiymissge = ''; $qyukicweqoisimwg = []; if (!($aiamqeawckcsuaou = self::eiwcuqigayigimak(self::gawciqgommakuqkk))) { goto qiiigwkqeoewsuwm; } $cmwygeyygwqaemaq = self::eiwcuqigayigimak(self::ouiwaycweaokwaus); if ($cmwygeyygwqaemaq) { goto okkmcocqokkskasy; } $cmwygeyygwqaemaq = ManipulatePost::qcgakseyaikigqco($aiamqeawckcsuaou); okkmcocqokkskasy: $qyukicweqoisimwg[] = [self::TEXT => $cmwygeyygwqaemaq, self::ysskgssgwuwmqwym => ["\x63\154\x61\x73\163" => "\x6d\x62\x2d\64\40\155\142\55\155\x64\55\60\x20\155\162\x2d\x30\x20\x6d\162\55\155\x64\55\x34"], self::qgqyauaqwqmqseim => IconFontawesomeInterface::gaugciywicsoyoww, self::sauwwsocmukoaayu => ManipulatePost::ycqquoiyyuesegsy($aiamqeawckcsuaou)]; qiiigwkqeoewsuwm: if (!($qogsmwakwacwqogk = self::eiwcuqigayigimak(self::qkcyyaguaoeciqcw . self::mswocgcucqoaesaa))) { goto esaqcqqwuussiiwo; } $qyukicweqoisimwg[] = [self::ysskgssgwuwmqwym => ManipulateAttachment::wggscwmuogkkkmgq($qogsmwakwacwqogk, true, ["\143\x6c\141\x73\x73" => "\157\x75\x74\154\x69\156\x65"]), self::TEXT => self::eiwcuqigayigimak(self::qcmsmmccgsgaeaky, ''), self::qgqyauaqwqmqseim => IconFontawesomeInterface::giaeqgwicwaysoig]; esaqcqqwuussiiwo: return ["\x62\x75\x74\164\x6f\x6e\x73" => $qyukicweqoisimwg, self::qescuiwgsyuikume => self::eiwcuqigayigimak(self::iyagaekssciqemgw), self::mkousmkiawwousws => self::eiwcuqigayigimak(self::gqeuwqccqoyywgim . self::mswocgcucqoaesaa), self::qsskmqwcucisywqy => self::eiwcuqigayigimak(self::cygcoemkkwaakwma), self::sauwwsocmukoaayu => $migiiksoiymissge, self::akmgqeyqcecqukia => self::eiwcuqigayigimak(self::ywwoesogeoawmqeu . self::mswocgcucqoaesaa), self::oeouaqyskusqoasi => $cmwygeyygwqaemaq]; } private function agcikqckayqsmoiu($ccamueccusigaaio, $meqocwsecsywiiqs) : Tab { $gmksciycsesoouoi = MetaBox::ckuwucygcwsiawms(self::ugmgsmeeuoskgyum . $ccamueccusigaaio . self::cyqwkyucgoeyuyyq, $meqocwsecsywiiqs); $gemosygeqgcuqagu = self::ugmgsmeeuoskgyum . $ccamueccusigaaio; switch ($ccamueccusigaaio) { case self::gyyqcugoikqowgam: $gmksciycsesoouoi->yyayequseyasoyks()->oeewiaacscgyamai(self::cmckeoksigiaqykc); goto ikqeeaysmqgcgawq; case self::ssmwqieuwqkoimki: $gmksciycsesoouoi->smmismmuuccmscya()->oeewiaacscgyamai(self::oguseymmyyoyaako); goto ikqeeaysmqgcgawq; } mscgewkcqcoowweg: ikqeeaysmqgcgawq: return MetaBox::sgsmqaoowiyocqaa("{$this->cisyiemkeykgkomc()}\x5f\x68\157\155\145\x5f\146\145\141\164\x75\162\145\x64{$ccamueccusigaaio}", sprintf(__("\106\145\x61\164\165\x72\145\144\x20\x25\x73", PR__CVR__GFAN), $meqocwsecsywiiqs))->mkksewyosgeumwsa($gmksciycsesoouoi)->mkksewyosgeumwsa(MetaBox::ymuegqgyuagyucws($gemosygeqgcuqagu . self::qescuiwgsyuikume, __("\124\x69\x74\154\x65", PR__CVR__GFAN), $this->msyiuaeimkquiwgy($meqocwsecsywiiqs, __("\124\x69\x74\154\x65", PR__CVR__GFAN))))->mkksewyosgeumwsa(MetaBox::sciaycsmsiekqueg($gemosygeqgcuqagu . self::TEXT, __("\104\x65\x73\143\162\x69\x70\x74\x69\x6f\156", PR__CVR__GFAN), $this->msyiuaeimkquiwgy($meqocwsecsywiiqs, __("\x44\145\163\143\162\x69\160\x74\x69\157\x6e", PR__CVR__GFAN)))->gsomueooycksswcy())->mkksewyosgeumwsa(MetaBox::ymuegqgyuagyucws($gemosygeqgcuqagu . self::gqmuoaykeqeuoukm, __("\102\165\164\x74\157\156\40\x54\145\x78\x74", PR__CVR__GFAN))->eyygsasuqmommkua(sprintf(__("\x56\151\x73\151\x74\x20\164\x68\151\x73\x20\45\x73", PR__CVR__GFAN), $meqocwsecsywiiqs)))->mkksewyosgeumwsa(MetaBox::kimoeccokowuaiic($gemosygeqgcuqagu . self::mkousmkiawwousws, __("\x49\x6d\x61\x67\x65", PR__CVR__GFAN), $this->msyiuaeimkquiwgy($meqocwsecsywiiqs, __("\111\x6d\x61\147\145", PR__CVR__GFAN)))->esauscaiuyiikmgc(["\152\160\145\147"])->ewsymcsuimmoicgg()->eswksowyeqcsokew(self::ccgiciqicykuquwc))->mkksewyosgeumwsa(MetaBox::kimoeccokowuaiic($gemosygeqgcuqagu . self::akmgqeyqcecqukia, __("\102\141\x63\x6b\147\x72\x6f\165\156\144", PR__CVR__GFAN))->esauscaiuyiikmgc()->ewsymcsuimmoicgg())->saemoowcasogykak(IconFontawesomeInterface::woosycauiuykayos); } private function msyiuaeimkquiwgy($meqocwsecsywiiqs, $aiowsaccomcoikus = '') : string { return sprintf(__("\114\145\x61\166\145\x20\x74\150\151\x73\x20\145\155\x70\x74\x79\54\x20\151\146\x20\x79\x6f\x75\x20\167\x61\x6e\x74\40\164\x6f\x20\165\163\145\40\x74\150\x65\x20\x25\x73\40\45\x73", PR__CVR__GFAN), strtolower($meqocwsecsywiiqs), strtolower($aiowsaccomcoikus)); } private function cocuwauwosawigci($ccamueccusigaaio) : array { $gemosygeqgcuqagu = self::ugmgsmeeuoskgyum . $ccamueccusigaaio; $igqsaukqcqscimok = (int) self::eiwcuqigayigimak($gemosygeqgcuqagu . self::cyqwkyucgoeyuyyq); $meqocwsecsywiiqs = ''; $ksaameoqigiaoigg = []; if (!$igqsaukqcqscimok) { goto qikaewekoecykeou; } $ksaameoqigiaoigg[self::akmgqeyqcecqukia] = self::eiwcuqigayigimak($gemosygeqgcuqagu . self::akmgqeyqcecqukia . self::mswocgcucqoaesaa); switch ($ccamueccusigaaio) { case self::ssmwqieuwqkoimki: $meqocwsecsywiiqs = __("\120\162\157\x64\x75\x63\x74", PR__CVR__GFAN); $ksaameoqigiaoigg[self::TEXT] = DecoratorPost::masoymaamekuykso($igqsaukqcqscimok); $ksaameoqigiaoigg[self::qescuiwgsyuikume] = ManipulatePost::qcgakseyaikigqco($igqsaukqcqscimok); $ksaameoqigiaoigg[self::mkousmkiawwousws] = ManipulatePost::wsiiswmaagmyiaiw($igqsaukqcqscimok); $ksaameoqigiaoigg[self::sauwwsocmukoaayu] = ManipulatePost::ycqquoiyyuesegsy($igqsaukqcqscimok); goto suqcsgaosywaauuu; case self::gyyqcugoikqowgam: $meqocwsecsywiiqs = __("\x43\141\164\145\x67\157\x72\x79", PR__CVR__GFAN); $ksaameoqigiaoigg[self::TEXT] = DecoratorTerm::meqceykmywmqgoym($igqsaukqcqscimok); $ksaameoqigiaoigg[self::qescuiwgsyuikume] = ManipulateTerm::qcgakseyaikigqco($igqsaukqcqscimok); $ksaameoqigiaoigg[self::mkousmkiawwousws] = ManipulateWoocommerce::sskeqemwecacuase($igqsaukqcqscimok); $ksaameoqigiaoigg[self::sauwwsocmukoaayu] = ManipulateTerm::qmgcisuuikgmqcsu($igqsaukqcqscimok, self::cmckeoksigiaqykc); goto suqcsgaosywaauuu; } wwukgaquuyoissgy: suqcsgaosywaauuu: $ksaameoqigiaoigg[self::gqmuoaykeqeuoukm] = self::eiwcuqigayigimak($gemosygeqgcuqagu . self::gqmuoaykeqeuoukm, sprintf(__("\126\x69\163\151\164\x20\x74\150\x69\163\40\x25\x73", PR__CVR__GFAN), $meqocwsecsywiiqs)); $wggyiigmegawawsc = [self::TEXT => self::TEXT, self::qescuiwgsyuikume => self::qescuiwgsyuikume, self::mkousmkiawwousws => self::mkousmkiawwousws . self::mswocgcucqoaesaa]; foreach ($wggyiigmegawawsc as $uusmaiomayssaecw => $omkysikckkcieckq) { $eqgoocgaqwqcimie = self::eiwcuqigayigimak($gemosygeqgcuqagu . $omkysikckkcieckq); if (!$eqgoocgaqwqcimie) { goto yqagomygmeoecwey; } $ksaameoqigiaoigg[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; yqagomygmeoecwey: qsgqwyqaqiowkmco: } gsygwgsiawgmqiyi: qikaewekoecykeou: return $ksaameoqigiaoigg; } public function kowekgioaacecqus() : array { $ksaameoqigiaoigg = []; $suaemuyiacqyugsm = self::eiwcuqigayigimak(self::hamgkwmeauwksaye, 0); if (!$suaemuyiacqyugsm) { goto sqyokemumceysegy; } $ksaameoqigiaoigg[self::TEXT] = ManipulatePost::masoymaamekuykso($suaemuyiacqyugsm); $ksaameoqigiaoigg[self::qescuiwgsyuikume] = ManipulatePost::qcgakseyaikigqco($suaemuyiacqyugsm); $ksaameoqigiaoigg[self::mkousmkiawwousws] = ManipulatePost::wsiiswmaagmyiaiw($suaemuyiacqyugsm); $ksaameoqigiaoigg[self::gqmuoaykeqeuoukm] = self::eiwcuqigayigimak(self::iugigowayekmeogs, __("\x52\145\141\144\x20\x4d\157\x72\x65\40\101\142\x6f\165\x74\40\125\x53", PR__CVR__GFAN)); $ksaameoqigiaoigg[self::sauwwsocmukoaayu] = ManipulatePost::ycqquoiyyuesegsy($suaemuyiacqyugsm); $wggyiigmegawawsc = [self::TEXT => self::TEXT, self::qescuiwgsyuikume => self::qescuiwgsyuikume, self::mkousmkiawwousws => self::mkousmkiawwousws . self::mswocgcucqoaesaa]; foreach ($wggyiigmegawawsc as $uusmaiomayssaecw => $omkysikckkcieckq) { $eqgoocgaqwqcimie = self::eiwcuqigayigimak(self::qkamcsegucogeemg . $omkysikckkcieckq); if (!$eqgoocgaqwqcimie) { goto aiccyaswigkaycqk; } $ksaameoqigiaoigg[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; aiccyaswigkaycqk: usymasgsyqgsuocg: } eucqomyqykgoiuge: sqyokemumceysegy: return $ksaameoqigiaoigg; } public function fkmccmyimyoqyqye() : array { return $this->cocuwauwosawigci(self::gyyqcugoikqowgam); } public function miokkmqiyqwuwkac() : array { return $this->cocuwauwosawigci(self::ssmwqieuwqkoimki); } public function iiaigsgoqwiqkggk() : array { $oammesyieqmwuwyi = self::eiwcuqigayigimak(self::sciawuimikwoukqa, []); $ksaameoqigiaoigg = []; if (!$oammesyieqmwuwyi) { goto oqousikwiiqagoyw; } $ksaameoqigiaoigg[self::qwumqqyuasyskkkc] = $oammesyieqmwuwyi; $ksaameoqigiaoigg[self::qescuiwgsyuikume] = self::eiwcuqigayigimak(self::uuigsecmqcwwgcck, __("\x50\162\157\x64\165\x63\164\163", PR__CVR__GFAN)); oqousikwiiqagoyw: return $ksaameoqigiaoigg; } public function cumgkqeceamyacsa() : array { $oammesyieqmwuwyi = self::eiwcuqigayigimak(self::gkikweeukcmwoeuk, []); $ksaameoqigiaoigg = []; if (!$oammesyieqmwuwyi) { goto egmayaiikwsskgmy; } foreach ($oammesyieqmwuwyi as $momcykaoccoymeig => $igqsaukqcqscimok) { $igqsaukqcqscimok = intval($igqsaukqcqscimok); if (!$igqsaukqcqscimok) { goto mysueeoswqgccmui; } $oammesyieqmwuwyi[$momcykaoccoymeig] = [self::TEXT => ManipulateComment::souwykwwmyygqyqi($igqsaukqcqscimok), self::meksegaoamowuwoq => ManipulateComment::mguqscccckuywsya($igqsaukqcqscimok)]; mysueeoswqgccmui: aueaceeyommgkicu: } zayqqeqgcwkekwws: $ksaameoqigiaoigg[self::qwumqqyuasyskkkc] = $oammesyieqmwuwyi; $ksaameoqigiaoigg[self::qescuiwgsyuikume] = self::eiwcuqigayigimak(self::socgqmagkayeooia, __("\x43\x6f\155\x6d\145\x6e\164\x73", PR__CVR__GFAN)); egmayaiikwsskgmy: return $ksaameoqigiaoigg; } public function ckoskqgyeiwosgwe() : array { $sogksuscggsicmac = []; $wsyigiaaqokiucos = self::eiwcuqigayigimak(self::ewgmgayeoswwewmy, []); if (!$wsyigiaaqokiucos) { goto oocuemosmeeekgas; } foreach ($wsyigiaaqokiucos as $momcykaoccoymeig => $ocouqoqqcgauwkuq) { if (!isset($ocouqoqqcgauwkuq[self::mkousmkiawwousws], $ocouqoqqcgauwkuq[self::TEXT])) { goto syuaummumssgwwee; } $post = ManipulateArray::get($ocouqoqqcgauwkuq, self::qgkmcuyawoqwuwku); if (!$post) { goto agkmiayuawacakau; } $migiiksoiymissge = ManipulatePost::ycqquoiyyuesegsy($post); $aisqsoicsocqoogy = ManipulateArray::get($ocouqoqqcgauwkuq, self::oeouaqyskusqoasi); if ($aisqsoicsocqoogy) { goto sguskaeaaqcagqgc; } $aisqsoicsocqoogy = ManipulatePost::qcgakseyaikigqco($post); sguskaeaaqcagqgc: $ocouqoqqcgauwkuq[self::oeouaqyskusqoasi] = $aisqsoicsocqoogy; $ocouqoqqcgauwkuq[self::qgkmcuyawoqwuwku] = $migiiksoiymissge; agkmiayuawacakau: $sogksuscggsicmac[$momcykaoccoymeig] = $ocouqoqqcgauwkuq; syuaummumssgwwee: yuuyikiacmmueosu: } ucuoeymyqeokgsya: oocuemosmeeekgas: return $sogksuscggsicmac; } public function ickwacquewkqwiis() : array { $sogksuscggsicmac = []; $eyscsimwcyaqakqg = self::eiwcuqigayigimak(self::icciwsismsmgcgqu, []); if (!$eyscsimwcyaqakqg) { goto qiaimmucomukkeka; } foreach ($eyscsimwcyaqakqg as $momcykaoccoymeig => $guwumyyyakswawas) { $guwumyyyakswawas = ManipulateTerm::get($guwumyyyakswawas); if (!$guwumyyyakswawas) { goto egsycocugqyyswsi; } $sogksuscggsicmac[$momcykaoccoymeig] = [self::qiyqwyiiwykeccmo => $guwumyyyakswawas->count, self::qescuiwgsyuikume => ManipulateTerm::qcgakseyaikigqco($guwumyyyakswawas), self::mkousmkiawwousws => ManipulateWoocommerce::sskeqemwecacuase($guwumyyyakswawas), self::sauwwsocmukoaayu => ManipulateTerm::qmgcisuuikgmqcsu($guwumyyyakswawas)]; egsycocugqyyswsi: uoeasoimegouymka: } qkcsykuocwuyaice: qiaimmucomukkeka: return $sogksuscggsicmac; } }
