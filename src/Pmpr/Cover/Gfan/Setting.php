<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6284d8cd429db             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Gfan; use Pmpr\Common\Foundation\Decorator\Post\DecoratorPost; use Pmpr\Common\Foundation\Decorator\Taxonomy\DecoratorTerm; use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox; use Pmpr\Common\Foundation\FormMaker\Admin\Element\Tab; use Pmpr\Common\Foundation\FormMaker\Admin\Field\BSSelect; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateAttachment; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateComment; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Common\Foundation\FormMaker\Admin\Element\Setting as BaseClass; class Setting extends BaseClass implements CommonInterface { const qscwcyiaqccoayqk = "\x66\145\x61\164\165\162\145\163"; const oeouaqyskusqoasi = "\x61\143\164\x69\x6f\156\x5f\164\145\170\x74"; const ewgmgayeoswwewmy = "\x68\x6f\155\x65\x5f\164\x6f\x70\137\x73\x6c\151\x64\145\x72"; const qgkmcuyawoqwuwku = "\x61\x63\164\151\x6f\156\137\160\145\162\155\141\x6c\x69\x6e\x6b"; const icciwsismsmgcgqu = "\150\x6f\155\145\137\163\x6c\x69\144\145\x72\x5f\x63\141\x74\163"; const wcqucguiqwowkago = self::icciwsismsmgcgqu . self::icmokuskwoskgace; const kiiecoycysouawws = "\x68\145\x61\x64\x65\x72\x5f\152\165\155\x62\x6f\164\162\157\x6e\x5f\x62\141\143\x6b\147\x72\157\x75\156\144"; const qeaqkaaessiogkme = "\x68\x6f\155\x65\137\x63\141\164\141\x6c\157\x67\x5f"; const qkcyyaguaoeciqcw = self::qeaqkaaessiogkme . self::kekgqaemqessuwmq; const iyagaekssciqemgw = self::qeaqkaaessiogkme . self::qescuiwgsyuikume; const gqeuwqccqoyywgim = self::qeaqkaaessiogkme . self::mkousmkiawwousws; const cygcoemkkwaakwma = self::qeaqkaaessiogkme . "\163\x75\142\164\145\170\164"; const qcmsmmccgsgaeaky = self::qeaqkaaessiogkme . "\146\x69\154\x65\x5f\164\x65\x78\164"; const ywwoesogeoawmqeu = self::qeaqkaaessiogkme . self::akmgqeyqcecqukia; const ouiwaycweaokwaus = self::qeaqkaaessiogkme . "\x61\x63\164\151\157\x6e\137\164\x65\170\164"; const gawciqgommakuqkk = self::qeaqkaaessiogkme . "\x61\143\164\x69\x6f\x6e\137\x70\145\x72\155\141\154\x69\156\x6b"; const sogcwwyoqwkwqqyw = "\x68\x6f\x6d\x65\137\x70\162\157\x64\x75\143\x74\x73\x5f\163\x6c\151\x64\145\x72\x5f"; const uuigsecmqcwwgcck = self::sogcwwyoqwkwqqyw . self::qescuiwgsyuikume; const sciawuimikwoukqa = self::sogcwwyoqwkwqqyw . self::qwumqqyuasyskkkc; const pogskigqccygiack = "\x68\x6f\x6d\x65\x5f\x63\x75\x73\x74\x6f\x6d\145\162\x5f\143\x6f\x6d\x6d\x65\156\x74\x73\137"; const socgqmagkayeooia = self::pogskigqccygiack . self::qescuiwgsyuikume; const gkikweeukcmwoeuk = self::pogskigqccygiack . self::qwumqqyuasyskkkc; const ssmwqieuwqkoimki = "\x70\x72\x6f\x64\x75\143\164\x5f"; const gyyqcugoikqowgam = "\x63\141\x74\x65\147\157\x72\x79\x5f"; const ugmgsmeeuoskgyum = "\150\157\x6d\145\137\x66\x65\x61\164\x75\162\x65\144\137"; const qkamcsegucogeemg = "\141\x62\157\x75\164\x5f"; const hamgkwmeauwksaye = self::qkamcsegucogeemg . self::imywcsggckkcywgk; const socgueyqmoegqcwy = self::qkamcsegucogeemg . self::TEXT; const wiyqagcmokeaumus = self::qkamcsegucogeemg . self::qescuiwgsyuikume; const cckwmgqogyywoiwi = self::qkamcsegucogeemg . self::mkousmkiawwousws; const iugigowayekmeogs = self::qkamcsegucogeemg . self::gqmuoaykeqeuoukm; const cmaksgsoisscesyo = "\x63\157\156\164\x61\143\164\137\160\141\147\145\x5f"; const qwmmiwemekwcwims = self::cmaksgsoisscesyo . self::wsgueemccsugoays; const wucksgoigumwmiyy = self::cmaksgsoisscesyo . self::muqaqimusmckkieq; const gyqiaqwscqewgkkq = self::cmaksgsoisscesyo . self::memskaacyikisggk; const gemwoaoowwqqcmes = self::cmaksgsoisscesyo . self::mkousmkiawwousws; const mksciaygeecaucku = self::cmaksgsoisscesyo . "\163\x6f\143\x69\x61\x6c"; const scmguggguywuegok = self::cmaksgsoisscesyo . "\x77\x68\141\164\x73\x61\160\160"; const keekqamwkgkgssoq = self::cmaksgsoisscesyo . self::eqcaaskcigqcmmww; const acamugwyucyumios = self::mksciaygeecaucku . self::icmokuskwoskgace; public function __construct() { $this->name = self::akuociswqmoigkas(); $this->parentMenu = "\x74\150\145\x6d\145\163\56\160\x68\x70"; parent::__construct(); } public function gogaagekwoisaqgu() { $this->menuTitle = __("\123\145\x74\x74\x69\x6e\x67", PR__CVR__GFAN); $this->pageTitle = __("\x43\x6f\x76\145\x72\40\123\x65\164\x74\151\x6e\147", PR__CVR__GFAN); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x67\x66\x61\x6e\x5f\147\145\164\x5f\x66\145\141\164\165\162\x65\163"), [$this, "\x6d\157\x67\163\143\161\x65\155\x73\147\153\x63\x65\143\x65\x79"]); parent::kgquecmsgcouyaya(); } public function ecwgiiuacoaokqkw() { $ymqmyyeuycgmigyo = $this->aakmagwggmkoiiyu(); $this->aucimgwswmgaocae(self::sgsmqaoowiyocqaa(self::ioomakeyqiqowgmk, __("\x47\x65\156\x65\x72\x61\x6c", PR__CVR__GFAN))->sikqggwmmykuiymy(self::cgygmuguceeosoey("{$ymqmyyeuycgmigyo}\x5f\x68\145\x61\x64\x65\x72", __("\110\145\x61\144\x65\162\x20\x53\145\164\x74\151\x6e\147", PR__CVR__GFAN))->mkksewyosgeumwsa(self::kimoeccokowuaiic(self::kiiecoycysouawws, __("\110\145\x61\144\x65\x72\40\112\x75\x6d\x62\x6f\164\162\x6f\156", PR__CVR__GFAN)))->saemoowcasogykak(IconFontawesomeInterface::seeikyecigusgwqo))->sikqggwmmykuiymy(self::cgygmuguceeosoey("{$ymqmyyeuycgmigyo}\x5f\146\x6f\157\164\145\x72", __("\x46\157\157\x74\x65\162\x20\123\x65\164\x74\x69\156\147", PR__CVR__GFAN))->mkksewyosgeumwsa(self::iseogkiymousogom(self::qscwcyiaqccoayqk, __("\x46\145\x61\164\x75\162\x65\163", PR__CVR__GFAN))->mkksewyosgeumwsa(self::kimoeccokowuaiic(self::mkousmkiawwousws, __("\x49\x6d\141\x67\x65", PR__CVR__GFAN)))->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::qescuiwgsyuikume, __("\x54\151\x74\x6c\145", PR__CVR__GFAN)))->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::eqkeooqcsscoggia, __("\123\x69\x6e\147\x6c\x65\x20\x4c\151\156\x65\40\104\x65\x73\x63\162\x69\160\164\x69\157\156", PR__CVR__GFAN)))->wygoskowywcuyaiq()->sosuookgumsgyyyc(5))->saemoowcasogykak(IconFontawesomeInterface::seeikyecigusgwqo))->saemoowcasogykak(IconFontawesomeInterface::aqaocgsqseeqmoii))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa("\x68\x6f\155\145", __("\110\x6f\155\x65", PR__CVR__GFAN))->sikqggwmmykuiymy(self::cgygmuguceeosoey("{$ymqmyyeuycgmigyo}\137\150\157\x6d\x65\x5f\163\145\143\164\151\157\x6e\163", __("\123\x65\x63\164\151\x6f\156\163", PR__CVR__GFAN))->saemoowcasogykak(IconFontawesomeInterface::gemusawikyiokako)->aucimgwswmgaocae(self::sgsmqaoowiyocqaa("{$ymqmyyeuycgmigyo}\137\x68\x6f\x6d\x65\137\164\x6f\x70\x5f\163\x6c\151\144\145\162", __("\124\157\160\40\x53\154\151\144\x65\162", PR__CVR__GFAN))->mkksewyosgeumwsa(self::iseogkiymousogom(self::ewgmgayeoswwewmy, __("\x53\154\x69\x64\x65\x72\x20\x49\164\x65\x6d\163", PR__CVR__GFAN))->mkksewyosgeumwsa(self::kimoeccokowuaiic(self::mkousmkiawwousws, __("\111\155\x61\x67\x65", PR__CVR__GFAN)))->mkksewyosgeumwsa(self::uouyygwcgsmygaee(self::TEXT, __("\124\x65\170\x74", PR__CVR__GFAN))->qsecygiycssgacqs(3)->wcgckeeiiseccqkc())->mkksewyosgeumwsa(self::uouyygwcgsmygaee(self::qsskmqwcucisywqy, __("\x53\x75\142\x74\x65\x78\x74", PR__CVR__GFAN))->qsecygiycssgacqs(3)->wcgckeeiiseccqkc())->mkksewyosgeumwsa(self::ckuwucygcwsiawms(self::qgkmcuyawoqwuwku, __("\x41\x63\164\x69\x6f\156\40\120\145\x72\155\x61\154\x69\156\x6b\40\x50\141\147\x65\x2f\120\x6f\x73\164", PR__CVR__GFAN))->smmismmuuccmscya())->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::oeouaqyskusqoasi, __("\101\x63\164\x69\x6f\x6e\x20\x54\145\170\x74", PR__CVR__GFAN), $this->msyiuaeimkquiwgy(__("\120\141\x67\x65\x2f\x50\x6f\x73\164\x20\x54\151\x74\x6c\x65", PR__CVR__GFAN))))->wygoskowywcuyaiq())->saemoowcasogykak(IconFontawesomeInterface::oyaieuqoqookogue))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa("{$ymqmyyeuycgmigyo}\137\150\157\155\x65\x5f\160\162\157\x64\165\143\164\137\x63\x61\x74\145\x67\157\x72\x69\x65\163\x5f\x73\x6c\151\144\x65\162", __("\x43\x61\x74\x65\x67\x6f\x72\x69\145\x73\x20\x53\154\151\x64\145\x72", PR__CVR__GFAN))->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::wcqucguiqwowkago, __("\x53\154\x69\144\145\x72\x20\124\151\x74\154\145", PR__CVR__GFAN)))->mkksewyosgeumwsa(self::ckuwucygcwsiawms(self::icciwsismsmgcgqu, __("\x50\x72\157\144\165\x63\x74\40\x43\141\164\x65\x67\157\x72\151\x65\163", PR__CVR__GFAN))->yyayequseyasoyks()->oeewiaacscgyamai(self::cmckeoksigiaqykc)->oikgogcweiiaocka())->saemoowcasogykak(IconFontawesomeInterface::wyoeksgmkucuigyg))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa("{$ymqmyyeuycgmigyo}\137\150\157\x6d\145\x5f\143\x61\164\x61\154\157\147", __("\120\x72\x6f\x64\x75\x63\164\163\x20\141\156\144\40\x43\141\164\141\154\157\x67", PR__CVR__GFAN))->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::iyagaekssciqemgw, __("\124\151\x74\x6c\145", PR__CVR__GFAN)))->mkksewyosgeumwsa(self::sciaycsmsiekqueg(self::cygcoemkkwaakwma, __("\123\165\142\x74\145\x78\x74", PR__CVR__GFAN))->gsomueooycksswcy())->mkksewyosgeumwsa(self::ckuwucygcwsiawms(self::gawciqgommakuqkk, __("\101\143\164\x69\x6f\156\x20\120\145\162\155\x61\x6c\x69\x6e\x6b\40\x50\x61\147\x65\57\x50\x6f\163\164", PR__CVR__GFAN))->smmismmuuccmscya())->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::ouiwaycweaokwaus, __("\x41\143\164\x69\x6f\x6e\40\124\x65\170\164", PR__CVR__GFAN), $this->msyiuaeimkquiwgy(__("\x50\141\x67\x65\57\x50\x6f\x73\164\40\124\151\x74\x6c\145", PR__CVR__GFAN))))->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::qcmsmmccgsgaeaky, __("\x43\141\x74\141\154\157\147\x20\x46\151\154\x65\x20\x42\165\164\x74\157\156\x20\124\x65\170\x74", PR__CVR__GFAN))->eyygsasuqmommkua(__("\x44\x6f\167\x6e\154\157\x61\144\x20\120\104\106\40\103\141\x74\x61\x6c\157\147", PR__CVR__GFAN)))->mkksewyosgeumwsa(self::kimoeccokowuaiic(self::qkcyyaguaoeciqcw, __("\103\141\x74\x61\x6c\x6f\147\40\106\151\154\x65", PR__CVR__GFAN)))->mkksewyosgeumwsa(self::kimoeccokowuaiic(self::ywwoesogeoawmqeu, __("\x42\141\x63\153\147\162\x6f\x75\156\x64", PR__CVR__GFAN))->esauscaiuyiikmgc()->ewsymcsuimmoicgg())->mkksewyosgeumwsa(self::kimoeccokowuaiic(self::gqeuwqccqoyywgim, __("\x43\141\162\144\x20\x49\155\x61\x67\x65", PR__CVR__GFAN))->esauscaiuyiikmgc()->ewsymcsuimmoicgg()->eswksowyeqcsokew(self::MEDIUM))->saemoowcasogykak(IconFontawesomeInterface::uweeuoikoaesgkya))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa("{$ymqmyyeuycgmigyo}\x5f\x68\157\x6d\x65\x5f\x70\162\x6f\144\x75\x63\164\163\137\163\154\151\144\145\162", __("\120\162\x6f\144\x75\x63\x74\x73\40\123\154\x69\144\x65\162", PR__CVR__GFAN))->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::uuigsecmqcwwgcck, __("\124\x69\x74\x6c\x65", PR__CVR__GFAN)))->mkksewyosgeumwsa(self::ckuwucygcwsiawms(self::sciawuimikwoukqa, __("\x50\162\x6f\144\165\x63\x74\163", PR__CVR__GFAN))->smmismmuuccmscya()->oeewiaacscgyamai(self::oguseymmyyoyaako)->oikgogcweiiaocka())->saemoowcasogykak(IconFontawesomeInterface::kwacookqcskgsyku))->aucimgwswmgaocae($this->agcikqckayqsmoiu(self::ssmwqieuwqkoimki, __("\120\162\157\144\165\143\164", PR__CVR__GFAN)))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa("{$ymqmyyeuycgmigyo}\137\x68\x6f\155\145\x5f\141\142\157\165\x74", __("\x53\164\157\162\171", PR__CVR__GFAN))->mkksewyosgeumwsa(self::ckuwucygcwsiawms(self::hamgkwmeauwksaye, __("\x50\141\147\x65", PR__CVR__GFAN))->smmismmuuccmscya()->oeewiaacscgyamai(self::imywcsggckkcywgk))->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::wiyqagcmokeaumus, __("\124\x69\x74\154\x65", PR__CVR__GFAN), $this->msyiuaeimkquiwgy(__("\120\141\147\x65", PR__CVR__GFAN), __("\124\151\x74\x6c\x65", PR__CVR__GFAN))))->mkksewyosgeumwsa(self::sciaycsmsiekqueg(self::socgueyqmoegqcwy, __("\104\145\163\x63\x72\x69\x70\164\x69\x6f\156", PR__CVR__GFAN), $this->msyiuaeimkquiwgy(__("\x50\x61\147\145", PR__CVR__GFAN), __("\x44\x65\163\x63\x72\151\160\x74\151\x6f\x6e", PR__CVR__GFAN)))->gsomueooycksswcy())->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::iugigowayekmeogs, __("\102\165\x74\164\x6f\156\x20\124\x65\170\x74", PR__CVR__GFAN))->eyygsasuqmommkua(__("\122\145\x61\144\40\115\157\x72\145\40\x41\142\157\165\164\40\x55\123", PR__CVR__GFAN)))->mkksewyosgeumwsa(self::kimoeccokowuaiic(self::cckwmgqogyywoiwi, __("\x49\155\x61\147\x65", PR__CVR__GFAN), $this->msyiuaeimkquiwgy(__("\120\x61\147\145", PR__CVR__GFAN), __("\111\155\x61\x67\145", PR__CVR__GFAN)))->esauscaiuyiikmgc()->ewsymcsuimmoicgg()->eswksowyeqcsokew(self::ccgiciqicykuquwc))->saemoowcasogykak(IconFontawesomeInterface::giigokemwyckgmoc))->aucimgwswmgaocae($this->agcikqckayqsmoiu(self::gyyqcugoikqowgam, __("\103\x61\164\x65\147\x6f\x72\171", PR__CVR__GFAN)))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa("{$ymqmyyeuycgmigyo}\137\150\157\x6d\x65\137\x63\x6f\x6d\x6d\145\x6e\164\163", __("\103\x6f\x6d\x6d\145\156\164\x73", PR__CVR__GFAN))->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::socgqmagkayeooia, __("\x54\151\164\x6c\x65", PR__CVR__GFAN)))->mkksewyosgeumwsa(self::ckuwucygcwsiawms(self::gkikweeukcmwoeuk, __("\103\157\155\155\145\x6e\x74\163", PR__CVR__GFAN))->imwouwmsiukakwqi()->oikgogcweiiaocka())->saemoowcasogykak(IconFontawesomeInterface::kumgmciqwoukimgc))->saemoowcasogykak(IconFontawesomeInterface::gemusawikyiokako))->saemoowcasogykak(IconFontawesomeInterface::iakqeokqeigmiawo))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa("\143\x6f\x6e\164\141\x63\164", __("\x43\157\x6e\x74\141\143\164", PR__CVR__GFAN))->sikqggwmmykuiymy(self::cgygmuguceeosoey("{$ymqmyyeuycgmigyo}\137\x63\157\x6e\164\x61\x63\164\137" . self::smkwuwawwaqyimcq, __("\111\x6e\146\157\162\x6d\141\x74\x69\157\156", PR__CVR__GFAN))->mkksewyosgeumwsa($this->kgkywiomusagosei(self::mksciaygeecaucku, __("\x53\x6f\143\151\x61\x6c\163", PR__CVR__GFAN), "\163\157\x63\x69\141\x6c"))->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::acamugwyucyumios, __("\123\157\x63\151\x61\154\x73\x20\x54\151\x74\154\x65", PR__CVR__GFAN))->eyygsasuqmommkua(__("\x46\157\154\x6c\x6f\x77\x20\125\x53", PR__CVR__GFAN)))->mkksewyosgeumwsa($this->kgkywiomusagosei(self::keekqamwkgkgssoq, __("\114\157\143\141\x74\x69\x6f\156\163", PR__CVR__GFAN), self::eqcaaskcigqcmmww))->mkksewyosgeumwsa($this->kgkywiomusagosei(self::gyqiaqwscqewgkkq, __("\x50\150\157\x6e\145\163", PR__CVR__GFAN), self::memskaacyikisggk))->mkksewyosgeumwsa($this->kgkywiomusagosei(self::wucksgoigumwmiyy, __("\x45\155\141\x69\154\x73", PR__CVR__GFAN), self::muqaqimusmckkieq))->mkksewyosgeumwsa($this->kgkywiomusagosei(self::scmguggguywuegok, __("\127\150\141\164\163\141\160\x70", PR__CVR__GFAN), self::memskaacyikisggk))->mkksewyosgeumwsa($this->kgkywiomusagosei(self::qwmmiwemekwcwims, __("\110\x6f\165\x72\x73", PR__CVR__GFAN), self::eamuoicwqcokyggc))->mkksewyosgeumwsa(self::kimoeccokowuaiic(self::gemwoaoowwqqcmes, __("\115\x69\x64\x64\x6c\x65\x20\x49\155\141\147\145", PR__CVR__GFAN), __("\x50\x69\x63\x74\165\162\145\x20\x69\x6e\x20\x74\x68\145\40\155\151\x64\x64\154\x65\40\157\146\x20\x74\150\145\40\143\x6f\x6e\164\x61\143\x74\40\160\x61\147\145", PR__CVR__GFAN))->esauscaiuyiikmgc()->eswksowyeqcsokew(self::ccgiciqicykuquwc))->saemoowcasogykak(IconFontawesomeInterface::isokaoamoeicecmy))->saemoowcasogykak(IconFontawesomeInterface::ioeakwcgiicgscuu)); } public function kuawkseqesecyaoa() : array { $yygmoeguaqyumuui = ["\163\x6f\143\x69\141\154", "\x77\150\141\x74\163\141\x70\x70", self::wsgueemccsugoays, self::muqaqimusmckkieq, self::memskaacyikisggk, self::eqcaaskcigqcmmww]; $sogksuscggsicmac = ["\x73\x6f\x63\x69\141\x6c\137\164\151\x74\x6c\145" => self::eiwcuqigayigimak(self::acamugwyucyumios, __("\106\157\154\x6c\157\167\40\125\x73", PR__CVR__GFAN)), "\155\x69\144\144\x6c\x65\137\x69\155\x61\147\145" => self::eiwcuqigayigimak(self::gemwoaoowwqqcmes . self::mswocgcucqoaesaa)]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { $suuagcecoyuweoqk = $this::eiwcuqigayigimak(self::cmaksgsoisscesyo . $uusmaiomayssaecw, []); if (!$suuagcecoyuweoqk) { goto uougwgeyiokewkkm; } foreach ($suuagcecoyuweoqk as $wgywewwaswowuooi => $mokouoooiwsmcmiu) { switch ($uusmaiomayssaecw) { case "\163\x6f\143\x69\141\154": $suuagcecoyuweoqk[$wgywewwaswowuooi] = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x67\145\164\137\163\x6f\x63\151\x61\x6c\x5f\x62\x79\137\153\x65\171"), [], $mokouoooiwsmcmiu); goto amgsueumgaguceaa; default: $suuagcecoyuweoqk[$wgywewwaswowuooi] = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x67\x65\x74\x5f\143\157\156\x74\141\x63\x74\x5f\x69\x6e\x66\157\x72\x6d\x61\164\x69\157\156\x5f\x62\x79\137\x6b\145\x79"), [], $mokouoooiwsmcmiu); goto amgsueumgaguceaa; } gygwewcqsmwqismo: amgsueumgaguceaa: mwysseaekcsiesmm: } ukkcmocamwgiqayu: $sogksuscggsicmac[$uusmaiomayssaecw] = $suuagcecoyuweoqk; uougwgeyiokewkkm: iiiccouaaqsyikae: } wusciwkkckmqigms: return $sogksuscggsicmac; } public function mogscqemsgkcecey() : array { $oammesyieqmwuwyi = []; $wmaeussqmywkecka = $this::eiwcuqigayigimak(self::qscwcyiaqccoayqk, []); if (!$wmaeussqmywkecka) { goto uykousayyomcaeaa; } foreach ($wmaeussqmywkecka as $momcykaoccoymeig => $wiwcgykokegmceyk) { [$mcqieaigyeeyaksm, $meqocwsecsywiiqs, $mugucsmcwwaeyewk] = ManipulateArray::gucyquqwoimkiiaq($wiwcgykokegmceyk, [self::mkousmkiawwousws, self::qescuiwgsyuikume, self::eqkeooqcsscoggia], false); if (!($mcqieaigyeeyaksm && $meqocwsecsywiiqs && $mugucsmcwwaeyewk)) { goto ucqmumuygcywwqma; } $oammesyieqmwuwyi[$momcykaoccoymeig] = $wiwcgykokegmceyk; ucqmumuygcywwqma: ukqocwewouckikso: } gommacygsykyussk: uykousayyomcaeaa: return $oammesyieqmwuwyi; } private function kgkywiomusagosei($uusmaiomayssaecw, $meqocwsecsywiiqs, $sqeykgyoooqysmca) : BSSelect { switch ($uusmaiomayssaecw) { case self::mksciaygeecaucku: $qiouiwasaauyaaue = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x67\145\164\137\163\157\x63\151\141\154\x5f\151\x74\x65\155\x73"), [], [self::squoamkioomemiyi => $sqeykgyoooqysmca]); goto uimeeckqksqeekqq; default: $qiouiwasaauyaaue = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x67\145\x74\x5f\143\x6f\x6e\164\141\x63\164\137\x69\x6e\146\x6f\162\x6d\x61\x74\151\157\156"), [], [self::squoamkioomemiyi => $sqeykgyoooqysmca]); goto uimeeckqksqeekqq; } iuuuususuuuaieem: uimeeckqksqeekqq: return self::ckuwucygcwsiawms($uusmaiomayssaecw, $meqocwsecsywiiqs, $qiouiwasaauyaaue)->oikgogcweiiaocka(); } public function ykisucyksoiycyci() : array { $cmwygeyygwqaemaq = $migiiksoiymissge = ''; $qyukicweqoisimwg = []; if (!($aiamqeawckcsuaou = self::eiwcuqigayigimak(self::gawciqgommakuqkk))) { goto uqokiksoqcwwqgio; } $cmwygeyygwqaemaq = self::eiwcuqigayigimak(self::ouiwaycweaokwaus); if ($cmwygeyygwqaemaq) { goto kocqqoyymosmuksu; } $cmwygeyygwqaemaq = ManipulatePost::qcgakseyaikigqco($aiamqeawckcsuaou); kocqqoyymosmuksu: $qyukicweqoisimwg[] = [self::TEXT => $cmwygeyygwqaemaq, self::ysskgssgwuwmqwym => ["\143\154\x61\163\x73" => "\155\142\x2d\x34\x20\x6d\x62\x2d\x6d\x64\x2d\60\x20\155\x72\x2d\x30\x20\155\x72\x2d\x6d\x64\x2d\64"], self::qgqyauaqwqmqseim => IconFontawesomeInterface::gaugciywicsoyoww, self::sauwwsocmukoaayu => ManipulatePost::ycqquoiyyuesegsy($aiamqeawckcsuaou)]; uqokiksoqcwwqgio: if (!($qogsmwakwacwqogk = self::eiwcuqigayigimak(self::qkcyyaguaoeciqcw . self::mswocgcucqoaesaa))) { goto qukocuwgakemmyga; } $qyukicweqoisimwg[] = [self::ysskgssgwuwmqwym => ManipulateAttachment::wggscwmuogkkkmgq($qogsmwakwacwqogk, true, ["\x63\x6c\x61\163\x73" => "\157\x75\164\x6c\151\x6e\x65"]), self::TEXT => self::eiwcuqigayigimak(self::qcmsmmccgsgaeaky, ''), self::qgqyauaqwqmqseim => IconFontawesomeInterface::giaeqgwicwaysoig]; qukocuwgakemmyga: return ["\x62\x75\x74\x74\157\x6e\x73" => $qyukicweqoisimwg, self::qescuiwgsyuikume => self::eiwcuqigayigimak(self::iyagaekssciqemgw), self::mkousmkiawwousws => self::eiwcuqigayigimak(self::gqeuwqccqoyywgim . self::mswocgcucqoaesaa), self::qsskmqwcucisywqy => self::eiwcuqigayigimak(self::cygcoemkkwaakwma), self::sauwwsocmukoaayu => $migiiksoiymissge, self::akmgqeyqcecqukia => self::eiwcuqigayigimak(self::ywwoesogeoawmqeu . self::mswocgcucqoaesaa), self::oeouaqyskusqoasi => $cmwygeyygwqaemaq]; } private function agcikqckayqsmoiu($ccamueccusigaaio, $meqocwsecsywiiqs) : Tab { $gmksciycsesoouoi = self::ckuwucygcwsiawms(self::ugmgsmeeuoskgyum . $ccamueccusigaaio . self::cyqwkyucgoeyuyyq, $meqocwsecsywiiqs); $gemosygeqgcuqagu = self::ugmgsmeeuoskgyum . $ccamueccusigaaio; switch ($ccamueccusigaaio) { case self::gyyqcugoikqowgam: $gmksciycsesoouoi->yyayequseyasoyks()->oeewiaacscgyamai(self::cmckeoksigiaqykc); goto sioekkmekwygemyc; case self::ssmwqieuwqkoimki: $gmksciycsesoouoi->smmismmuuccmscya()->oeewiaacscgyamai(self::oguseymmyyoyaako); goto sioekkmekwygemyc; } yiowgigkkwsoqcci: sioekkmekwygemyc: return self::sgsmqaoowiyocqaa("{$this->cisyiemkeykgkomc()}\137\150\x6f\155\145\137\x66\x65\141\164\165\x72\x65\x64{$ccamueccusigaaio}", sprintf(__("\x46\145\x61\164\x75\x72\145\x64\x20\45\x73", PR__CVR__GFAN), $meqocwsecsywiiqs))->mkksewyosgeumwsa($gmksciycsesoouoi)->mkksewyosgeumwsa(self::ymuegqgyuagyucws($gemosygeqgcuqagu . self::qescuiwgsyuikume, __("\x54\151\x74\154\145", PR__CVR__GFAN), $this->msyiuaeimkquiwgy($meqocwsecsywiiqs, __("\x54\x69\x74\154\x65", PR__CVR__GFAN))))->mkksewyosgeumwsa(self::sciaycsmsiekqueg($gemosygeqgcuqagu . self::TEXT, __("\104\x65\x73\x63\x72\151\x70\x74\151\157\x6e", PR__CVR__GFAN), $this->msyiuaeimkquiwgy($meqocwsecsywiiqs, __("\104\x65\163\x63\162\x69\160\x74\151\x6f\156", PR__CVR__GFAN)))->gsomueooycksswcy())->mkksewyosgeumwsa(self::ymuegqgyuagyucws($gemosygeqgcuqagu . self::gqmuoaykeqeuoukm, __("\x42\165\x74\x74\157\x6e\x20\124\x65\x78\x74", PR__CVR__GFAN))->eyygsasuqmommkua(sprintf(__("\126\151\163\x69\x74\x20\164\x68\x69\x73\x20\x25\x73", PR__CVR__GFAN), $meqocwsecsywiiqs)))->mkksewyosgeumwsa(self::kimoeccokowuaiic($gemosygeqgcuqagu . self::mkousmkiawwousws, __("\x49\x6d\x61\x67\145", PR__CVR__GFAN), $this->msyiuaeimkquiwgy($meqocwsecsywiiqs, __("\x49\155\x61\147\145", PR__CVR__GFAN)))->esauscaiuyiikmgc(["\152\x70\x65\x67"])->ewsymcsuimmoicgg()->eswksowyeqcsokew(self::ccgiciqicykuquwc))->mkksewyosgeumwsa(self::kimoeccokowuaiic($gemosygeqgcuqagu . self::akmgqeyqcecqukia, __("\102\x61\143\x6b\x67\162\x6f\x75\156\x64", PR__CVR__GFAN))->esauscaiuyiikmgc()->ewsymcsuimmoicgg())->saemoowcasogykak(IconFontawesomeInterface::woosycauiuykayos); } private function msyiuaeimkquiwgy($meqocwsecsywiiqs, $aiowsaccomcoikus = '') : string { return sprintf(__("\114\x65\x61\166\145\x20\164\150\151\x73\40\145\155\160\164\171\x2c\40\151\x66\x20\x79\x6f\165\40\x77\141\x6e\x74\x20\x74\x6f\40\165\x73\x65\40\164\150\145\40\x25\x73\x20\x25\163", PR__CVR__GFAN), strtolower($meqocwsecsywiiqs), strtolower($aiowsaccomcoikus)); } private function cocuwauwosawigci($ccamueccusigaaio) : array { $gemosygeqgcuqagu = self::ugmgsmeeuoskgyum . $ccamueccusigaaio; $igqsaukqcqscimok = (int) self::eiwcuqigayigimak($gemosygeqgcuqagu . self::cyqwkyucgoeyuyyq); $meqocwsecsywiiqs = ''; $ksaameoqigiaoigg = []; if (!$igqsaukqcqscimok) { goto wsesqmcqoiyyqkqi; } $ksaameoqigiaoigg[self::akmgqeyqcecqukia] = self::eiwcuqigayigimak($gemosygeqgcuqagu . self::akmgqeyqcecqukia . self::mswocgcucqoaesaa); switch ($ccamueccusigaaio) { case self::ssmwqieuwqkoimki: $meqocwsecsywiiqs = __("\120\x72\157\144\x75\143\164", PR__CVR__GFAN); $ksaameoqigiaoigg[self::TEXT] = DecoratorPost::masoymaamekuykso($igqsaukqcqscimok); $ksaameoqigiaoigg[self::qescuiwgsyuikume] = ManipulatePost::qcgakseyaikigqco($igqsaukqcqscimok); $ksaameoqigiaoigg[self::mkousmkiawwousws] = ManipulatePost::wsiiswmaagmyiaiw($igqsaukqcqscimok); $ksaameoqigiaoigg[self::sauwwsocmukoaayu] = ManipulatePost::ycqquoiyyuesegsy($igqsaukqcqscimok); goto ieqesiiageaauiuw; case self::gyyqcugoikqowgam: $meqocwsecsywiiqs = __("\x43\x61\164\x65\147\157\x72\171", PR__CVR__GFAN); $ksaameoqigiaoigg[self::TEXT] = DecoratorTerm::meqceykmywmqgoym($igqsaukqcqscimok); $ksaameoqigiaoigg[self::qescuiwgsyuikume] = ManipulateTerm::qcgakseyaikigqco($igqsaukqcqscimok); $ksaameoqigiaoigg[self::mkousmkiawwousws] = ManipulateWoocommerce::sskeqemwecacuase($igqsaukqcqscimok); $ksaameoqigiaoigg[self::sauwwsocmukoaayu] = ManipulateTerm::qmgcisuuikgmqcsu($igqsaukqcqscimok, self::cmckeoksigiaqykc); goto ieqesiiageaauiuw; } gamqcwuwkikwqoay: ieqesiiageaauiuw: $ksaameoqigiaoigg[self::gqmuoaykeqeuoukm] = self::eiwcuqigayigimak($gemosygeqgcuqagu . self::gqmuoaykeqeuoukm, sprintf(__("\x56\151\x73\151\164\x20\164\x68\151\x73\40\x25\163", PR__CVR__GFAN), $meqocwsecsywiiqs)); $wggyiigmegawawsc = [self::TEXT => self::TEXT, self::qescuiwgsyuikume => self::qescuiwgsyuikume, self::mkousmkiawwousws => self::mkousmkiawwousws . self::mswocgcucqoaesaa]; foreach ($wggyiigmegawawsc as $uusmaiomayssaecw => $omkysikckkcieckq) { $eqgoocgaqwqcimie = self::eiwcuqigayigimak($gemosygeqgcuqagu . $omkysikckkcieckq); if (!$eqgoocgaqwqcimie) { goto iesekaeqeomeuaui; } $ksaameoqigiaoigg[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; iesekaeqeomeuaui: oyeyomcgkmgymogq: } mscyggqcesgqqksu: wsesqmcqoiyyqkqi: return $ksaameoqigiaoigg; } public function kowekgioaacecqus() : array { $ksaameoqigiaoigg = []; $suaemuyiacqyugsm = self::eiwcuqigayigimak(self::hamgkwmeauwksaye, 0); if (!$suaemuyiacqyugsm) { goto oeocukauoyosicso; } $ksaameoqigiaoigg[self::TEXT] = ManipulatePost::masoymaamekuykso($suaemuyiacqyugsm); $ksaameoqigiaoigg[self::qescuiwgsyuikume] = ManipulatePost::qcgakseyaikigqco($suaemuyiacqyugsm); $ksaameoqigiaoigg[self::mkousmkiawwousws] = ManipulatePost::wsiiswmaagmyiaiw($suaemuyiacqyugsm); $ksaameoqigiaoigg[self::gqmuoaykeqeuoukm] = self::eiwcuqigayigimak(self::iugigowayekmeogs, __("\122\145\x61\144\x20\x4d\x6f\162\x65\x20\101\x62\157\165\x74\40\x55\x53", PR__CVR__GFAN)); $ksaameoqigiaoigg[self::sauwwsocmukoaayu] = ManipulatePost::ycqquoiyyuesegsy($suaemuyiacqyugsm); $wggyiigmegawawsc = [self::TEXT => self::TEXT, self::qescuiwgsyuikume => self::qescuiwgsyuikume, self::mkousmkiawwousws => self::mkousmkiawwousws . self::mswocgcucqoaesaa]; foreach ($wggyiigmegawawsc as $uusmaiomayssaecw => $omkysikckkcieckq) { $eqgoocgaqwqcimie = self::eiwcuqigayigimak(self::qkamcsegucogeemg . $omkysikckkcieckq); if (!$eqgoocgaqwqcimie) { goto oimkeqocuguqqsqk; } $ksaameoqigiaoigg[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; oimkeqocuguqqsqk: wkwamkgkwykeqkec: } mogkoocsoeuyoqqa: oeocukauoyosicso: return $ksaameoqigiaoigg; } public function fkmccmyimyoqyqye() : array { return $this->cocuwauwosawigci(self::gyyqcugoikqowgam); } public function miokkmqiyqwuwkac() : array { return $this->cocuwauwosawigci(self::ssmwqieuwqkoimki); } public function iiaigsgoqwiqkggk() : array { $oammesyieqmwuwyi = self::eiwcuqigayigimak(self::sciawuimikwoukqa, []); $ksaameoqigiaoigg = []; if (!$oammesyieqmwuwyi) { goto suqceasgacskcmkc; } $ksaameoqigiaoigg[self::qwumqqyuasyskkkc] = $oammesyieqmwuwyi; $ksaameoqigiaoigg[self::qescuiwgsyuikume] = self::eiwcuqigayigimak(self::uuigsecmqcwwgcck, __("\120\162\x6f\x64\165\143\x74\163", PR__CVR__GFAN)); suqceasgacskcmkc: return $ksaameoqigiaoigg; } public function cumgkqeceamyacsa() : array { $oammesyieqmwuwyi = self::eiwcuqigayigimak(self::gkikweeukcmwoeuk, []); $ksaameoqigiaoigg = []; if (!$oammesyieqmwuwyi) { goto ikuuiauwouuqawuw; } foreach ($oammesyieqmwuwyi as $momcykaoccoymeig => $igqsaukqcqscimok) { $igqsaukqcqscimok = intval($igqsaukqcqscimok); if (!$igqsaukqcqscimok) { goto uckewycoogsogwiy; } $oammesyieqmwuwyi[$momcykaoccoymeig] = [self::TEXT => ManipulateComment::souwykwwmyygqyqi($igqsaukqcqscimok), self::meksegaoamowuwoq => ManipulateComment::mguqscccckuywsya($igqsaukqcqscimok)]; uckewycoogsogwiy: kwiggogcgciwuwqk: } yykqaowwsqgqysmq: $ksaameoqigiaoigg[self::qwumqqyuasyskkkc] = $oammesyieqmwuwyi; $ksaameoqigiaoigg[self::qescuiwgsyuikume] = self::eiwcuqigayigimak(self::socgqmagkayeooia, __("\103\x6f\x6d\155\x65\156\x74\x73", PR__CVR__GFAN)); ikuuiauwouuqawuw: return $ksaameoqigiaoigg; } public function ckoskqgyeiwosgwe() : array { $sogksuscggsicmac = []; $wsyigiaaqokiucos = self::eiwcuqigayigimak(self::ewgmgayeoswwewmy, []); if (!$wsyigiaaqokiucos) { goto iwsmmkqaoksmocok; } foreach ($wsyigiaaqokiucos as $momcykaoccoymeig => $ocouqoqqcgauwkuq) { if (!isset($ocouqoqqcgauwkuq[self::mkousmkiawwousws], $ocouqoqqcgauwkuq[self::TEXT])) { goto emqswoaawgeyosmi; } $post = ManipulateArray::get($ocouqoqqcgauwkuq, self::qgkmcuyawoqwuwku); if (!$post) { goto ocywegekakimmwcq; } $migiiksoiymissge = ManipulatePost::ycqquoiyyuesegsy($post); $aisqsoicsocqoogy = ManipulateArray::get($ocouqoqqcgauwkuq, self::oeouaqyskusqoasi); if ($aisqsoicsocqoogy) { goto yuimwyoywaiiqacs; } $aisqsoicsocqoogy = ManipulatePost::qcgakseyaikigqco($post); yuimwyoywaiiqacs: $ocouqoqqcgauwkuq[self::oeouaqyskusqoasi] = $aisqsoicsocqoogy; $ocouqoqqcgauwkuq[self::qgkmcuyawoqwuwku] = $migiiksoiymissge; ocywegekakimmwcq: $sogksuscggsicmac[$momcykaoccoymeig] = $ocouqoqqcgauwkuq; emqswoaawgeyosmi: gswcoeiisamakwii: } yoqakewookqoqacm: iwsmmkqaoksmocok: return $sogksuscggsicmac; } public function ickwacquewkqwiis() : array { $sogksuscggsicmac = []; $eyscsimwcyaqakqg = self::eiwcuqigayigimak(self::icciwsismsmgcgqu, []); if (!$eyscsimwcyaqakqg) { goto esaqcqqwuussiiwo; } foreach ($eyscsimwcyaqakqg as $momcykaoccoymeig => $guwumyyyakswawas) { $guwumyyyakswawas = ManipulateTerm::get($guwumyyyakswawas); if (!$guwumyyyakswawas) { goto qiiigwkqeoewsuwm; } $sogksuscggsicmac[$momcykaoccoymeig] = [self::qiyqwyiiwykeccmo => $guwumyyyakswawas->count, self::qescuiwgsyuikume => ManipulateTerm::qcgakseyaikigqco($guwumyyyakswawas), self::mkousmkiawwousws => ManipulateWoocommerce::sskeqemwecacuase($guwumyyyakswawas), self::sauwwsocmukoaayu => ManipulateTerm::qmgcisuuikgmqcsu($guwumyyyakswawas)]; qiiigwkqeoewsuwm: okkmcocqokkskasy: } esikeyqyuikmaiek: esaqcqqwuussiiwo: return $sogksuscggsicmac; } }
