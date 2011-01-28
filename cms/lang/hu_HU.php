<?php

/**
 * Hungarian (Hungary) language pack
 * @package cms
 * @subpackage i18n
 */

i18n::include_locale_file('cms', 'en_US');

global $lang;

if(array_key_exists('hu_HU', $lang) && is_array($lang['hu_HU'])) {
	$lang['hu_HU'] = array_merge($lang['en_US'], $lang['hu_HU']);
} else {
	$lang['hu_HU'] = $lang['en_US'];
}

$lang['hu_HU']['AssetAdmin']['CHOOSEFILE'] = 'Válassz fájlt';
$lang['hu_HU']['AssetAdmin']['DELETEDX'] = '%s fájl törölve. %s';
$lang['hu_HU']['AssetAdmin']['FILESREADY'] = 'Feltöltésre készen álló fájlok:';
$lang['hu_HU']['AssetAdmin']['FOLDERDELETED'] = 'mappa törölve.';
$lang['hu_HU']['AssetAdmin']['FOLDERSDELETED'] = 'mappák törölve.';
$lang['hu_HU']['AssetAdmin']['MENUTITLE'] = 'Fájlok és képek';
$lang['hu_HU']['AssetAdmin']['MENUTITLE'] = 'Fájlok és Képek';
$lang['hu_HU']['AssetAdmin']['MOVEDX'] = '%s fájl áthelyezve.';
$lang['hu_HU']['AssetAdmin']['NEWFOLDER'] = 'Új mappa';
$lang['hu_HU']['AssetAdmin']['NOTEMP'] = 'A feltöltések számára nincs ideiglenes mappa. Kérjük, állítsa be az "upload_tmp_dir" értékét a php.ini-ben.';
$lang['hu_HU']['AssetAdmin']['NOTHINGTOUPLOAD'] = 'Nem volt semmi, amit fel lehetett volna tölteni.';
$lang['hu_HU']['AssetAdmin']['NOWBROKEN'] = 'Ezen oldalak linkjei hibásak lettek: ';
$lang['hu_HU']['AssetAdmin']['NOWBROKEN2'] = 'A tulajdonosaik kaptak e-mailt, és rendbe hozzák az oldalakat.';
$lang['hu_HU']['AssetAdmin']['SAVEDFILE'] = '%s fájl elmentésre került.';
$lang['hu_HU']['AssetAdmin']['SAVEFOLDERNAME'] = 'Mappanév mentése';
$lang['hu_HU']['AssetAdmin']['THUMBSDELETED'] = 'Minden nem használt miniatűr törölve lett';
$lang['hu_HU']['AssetAdmin']['UPLOAD'] = 'Alább felsorolt fájlok feltöltése';
$lang['hu_HU']['AssetAdmin']['UPLOADEDX'] = '%s fájl feltöltve.';
$lang['hu_HU']['AssetAdmin_left.ss']['CREATE'] = 'Létrehozás';
$lang['hu_HU']['AssetAdmin_left.ss']['DELETE'] = 'Törlés';
$lang['hu_HU']['AssetAdmin_left.ss']['DELFOLDERS'] = 'Kiválasztott mappák törlése.';
$lang['hu_HU']['AssetAdmin_left.ss']['ENABLEDRAGGING'] = '"Fogd és vidd" átrendezés engedélyezése';
$lang['hu_HU']['AssetAdmin_left.ss']['FOLDERS'] = 'Mappák';
$lang['hu_HU']['AssetAdmin_left.ss']['GO'] = 'Mehet';
$lang['hu_HU']['AssetAdmin_left.ss']['SELECTTODEL'] = 'Válaszd ki a mappákat, amiket törölni szeretnél, majd kattints a lenti gombra.';
$lang['hu_HU']['AssetAdmin_left.ss']['TOREORG'] = 'A mappák újraszervezéséhez húzd őket a kívánt helyre az egérrel.';
$lang['hu_HU']['AssetAdmin_right.ss']['CHOOSEPAGE'] = 'Kérünk, válassz egy oldalt a bal oldali listából.';
$lang['hu_HU']['AssetAdmin_right.ss']['WELCOME'] = 'Üdvözöllek itt:';
$lang['hu_HU']['AssetAdmin_uploadiframe.ss']['PERMFAILED'] = 'Nincs jogosultságod fájlokat feltölteni ebbe a mappába.';
$lang['hu_HU']['AssetTableField']['CAPTION'] = 'Címke';
$lang['hu_HU']['AssetTableField']['CREATED'] = 'Először feltöltve';
$lang['hu_HU']['AssetTableField']['DIM'] = 'Képméret';
$lang['hu_HU']['AssetTableField']['DIMLIMT'] = 'A méretek korlátozása a felbukkanó ablakban';
$lang['hu_HU']['AssetTableField']['FILENAME'] = 'Fájlnév';
$lang['hu_HU']['AssetTableField']['GALLERYOPTIONS'] = 'Galéria beállításai';
$lang['hu_HU']['AssetTableField']['IMAGE'] = 'Kép';
$lang['hu_HU']['AssetTableField']['ISFLASH'] = 'Egy Flash dokumentum';
$lang['hu_HU']['AssetTableField']['LASTEDIT'] = 'Utoljára változott';
$lang['hu_HU']['AssetTableField']['MAIN'] = 'Elsődleges';
$lang['hu_HU']['AssetTableField']['NOLINKS'] = 'Ezen fájlra nem mutat link egy oldalról sem.';
$lang['hu_HU']['AssetTableField']['OWNER'] = 'Tulajdonos';
$lang['hu_HU']['AssetTableField']['PAGESLINKING'] = 'A következő oldalak mutatanak erre a fájlra: ';
$lang['hu_HU']['AssetTableField']['POPUPHEIGHT'] = 'Felbukkanás magassága';
$lang['hu_HU']['AssetTableField']['POPUPWIDTH'] = 'Felbukkanás szélessége';
$lang['hu_HU']['AssetTableField']['SIZE'] = 'Méret';
$lang['hu_HU']['AssetTableField.ss']['DELFILE'] = 'Fájl törlése';
$lang['hu_HU']['AssetTableField.ss']['DRAGTOFOLDER'] = 'A fájlt az áthelyezéshez húzd a bal oldalon lévő mappába.';
$lang['hu_HU']['AssetTableField']['SWFFILEOPTIONS'] = 'SWF fájl beállításai';
$lang['hu_HU']['AssetTableField']['TITLE'] = 'Cím';
$lang['hu_HU']['AssetTableField']['TYPE'] = 'Típus';
$lang['hu_HU']['AssetTableField']['URL'] = 'URL';
$lang['hu_HU']['CMSMain']['ACCESS'] = '\'%s\' elérése (%s)';
$lang['hu_HU']['CMSMain']['ACCESSALLINTERFACES'] = 'Elérés minden CMS interfészhez';
$lang['hu_HU']['CMSMain']['CANCEL'] = 'Mégse';
$lang['hu_HU']['CMSMain']['CHOOSEREPORT'] = '(Válassz egy jelentést.)';
$lang['hu_HU']['CMSMain']['COMPARINGV'] = 'A #%d és a #%d verziót hasonlítod össze.';
$lang['hu_HU']['CMSMain']['COPYPUBTOSTAGE'] = 'Biztosan át akarod másolni a publikált tartalmat az fázisoldalra?';
$lang['hu_HU']['CMSMain']['DELETE'] = 'Törlés a piszkozat oldalról';
$lang['hu_HU']['CMSMain']['DESCREMOVED'] = 'és %s leszármazott';
$lang['hu_HU']['CMSMain']['EMAIL'] = 'E-mail';
$lang['hu_HU']['CMSMain']['GO'] = 'Mehet';
$lang['hu_HU']['CMSMain']['MENUTITLE'] = 'Honlaptartalom';
$lang['hu_HU']['CMSMain']['MENUTITLE'] = 'Honlaptartalom';
$lang['hu_HU']['CMSMain']['METADESCOPT'] = 'Leírás';
$lang['hu_HU']['CMSMain']['METAKEYWORDSOPT'] = 'Kulcsszavak';
$lang['hu_HU']['CMSMain']['NEW'] = 'Új';
$lang['hu_HU']['CMSMain']['NOCONTENT'] = 'nincs tartalom';
$lang['hu_HU']['CMSMain']['NOTHINGASSIGNED'] = 'Nincs semmi se hozzádrendelve.';
$lang['hu_HU']['CMSMain']['NOWAITINGON'] = 'Nem vársz senkire.';
$lang['hu_HU']['CMSMain']['NOWBROKEN'] = 'A következő oldalak linkjei hibásak lettek:';
$lang['hu_HU']['CMSMain']['NOWBROKEN2'] = 'A tulajdonosoknak kiküldésre került egy e-mail, és majd javítani fogják ezeket az oldalakat.';
$lang['hu_HU']['CMSMain']['OK'] = 'Rendben';
$lang['hu_HU']['CMSMain']['PAGEDEL'] = '%d oldal törlésre került.';
$lang['hu_HU']['CMSMain']['PAGENOTEXISTS'] = 'Ez az oldal nem létezik.';
$lang['hu_HU']['CMSMain']['PAGEPUB'] = '%d oldal publikálva.';
$lang['hu_HU']['CMSMain']['PAGESDEL'] = '%d oldal törlésre került.';
$lang['hu_HU']['CMSMain']['PAGESPUB'] = '%d oldal publikálva.';
$lang['hu_HU']['CMSMain']['PAGETYPEOPT'] = 'Oldal típusa';
$lang['hu_HU']['CMSMain']['PRINT'] = 'Nyomtatás';
$lang['hu_HU']['CMSMain']['PUBALLCONFIRM'] = 'Minden oldal publikálása, fázistartalmak kitevése';
$lang['hu_HU']['CMSMain']['PUBALLFUN'] = '"Összes publikálása" funkció';
$lang['hu_HU']['CMSMain']['PUBALLFUN2'] = 'Ennek a gombnak a megnyomásával ugyanazt érheted el, mintha az összes oldalon megnyomnád a publikálás gombot. Akkor célszerű használni, ha a tartalom nagy változáson ment keresztül, mint például az oldal kezdeti felépítésénél.';
$lang['hu_HU']['CMSMain']['PUBPAGES'] = 'Befejezve: %d oldal publikálva.';
$lang['hu_HU']['CMSMain']['REMOVED'] = '\'%s\' törölve az éles oldalról';
$lang['hu_HU']['CMSMain']['REMOVEDFD'] = 'Eltávolítva a piszkozatoldalról.';
$lang['hu_HU']['CMSMain']['REMOVEDPAGE'] = '„%s” törlésre került a publikált oldalról.';
$lang['hu_HU']['CMSMain']['REMOVEDPAGEFROMDRAFT'] = '\'%s\' törlése a piszkozatoldalról';
$lang['hu_HU']['CMSMain']['REPORT'] = 'Jelentés';
$lang['hu_HU']['CMSMain']['RESTORED'] = '\'%s\' sikeresen visszaállításra került.';
$lang['hu_HU']['CMSMain']['ROLLBACK'] = 'Visszaállítás ehhez a verzióhoz';
$lang['hu_HU']['CMSMain']['ROLLEDBACKPUB'] = 'Visszaállítva a publikált verzióhoz. Az új verziószám #%d.';
$lang['hu_HU']['CMSMain']['ROLLEDBACKVERSION'] = 'Visszaálítva a #%d verzióra. Az új verziószám #%d.';
$lang['hu_HU']['CMSMain']['SAVE'] = 'Mentés';
$lang['hu_HU']['CMSMain']['SENTTO'] = 'Elküldve jóváhagyásra %2$s %$1s számára.';
$lang['hu_HU']['CMSMain']['STATUSOPT'] = 'Állapot';
$lang['hu_HU']['CMSMain']['TOTALPAGES'] = 'Oldalak száma:';
$lang['hu_HU']['CMSMain']['VERSIONSNOPAGE'] = 'A #%d oldal nem található.';
$lang['hu_HU']['CMSMain']['VIEWING'] = 'Jelenleg a #%d verziót nézed. Létrehozva: %s';
$lang['hu_HU']['CMSMain']['VISITRESTORE'] = 'Látogasd meg: restorepage/(ID)';
$lang['hu_HU']['CMSMain']['WAITINGON'] = 'Ezen az <b>%d</b> oldalon más emberekre vársz, hogy dolgozzanak rajta.';
$lang['hu_HU']['CMSMain']['WORKTODO'] = 'Ezen a <b>%d</b> oldalon még el kell végezned néhány dolgot.';
$lang['hu_HU']['CMSMain_dialog.ss']['BUTTONNOTFOUND'] = 'A gomb neve nem található';
$lang['hu_HU']['CMSMain_left.ss']['ADDEDNOTPUB'] = 'Hozzáadva a piszkozatoldalhoz, még nem publikálva';
$lang['hu_HU']['CMSMain_left.ss']['ADDSEARCHCRITERIA'] = 'Kritérium hozzáadása…';
$lang['hu_HU']['CMSMain_left.ss']['BATCHACTIONS'] = 'Kötegelt műveletek';
$lang['hu_HU']['CMSMain_left.ss']['CHANGED'] = 'megváltoztatva';
$lang['hu_HU']['CMSMain_left.ss']['CLOSEBOX'] = 'kattints ide a doboz bezáráshoz';
$lang['hu_HU']['CMSMain_left.ss']['COMPAREMODE'] = 'Összehasonlító mód (kattints a két összehasonlítandó oldalra lejjebb)';
$lang['hu_HU']['CMSMain_left.ss']['CREATE'] = 'Létrehozás';
$lang['hu_HU']['CMSMain_left.ss']['DEL'] = 'törölve';
$lang['hu_HU']['CMSMain_left.ss']['DELETECONFIRM'] = 'Kiválasztott oldalak törlése';
$lang['hu_HU']['CMSMain_left.ss']['DELETEDSTILLLIVE'] = 'Piszkozatoldalról törölve, de az igazi oldalon még fent van';
$lang['hu_HU']['CMSMain_left.ss']['EDITEDNOTPUB'] = 'Piszkozatoldalon szerkesztve, még nem publikálva';
$lang['hu_HU']['CMSMain_left.ss']['EDITEDSINCE'] = 'Szerkesztve ezóta';
$lang['hu_HU']['CMSMain_left.ss']['ENABLEDRAGGING'] = 'A fogd &amp; vidd típusú újrarendezés engedélyezése';
$lang['hu_HU']['CMSMain_left.ss']['GO'] = 'Mehet';
$lang['hu_HU']['CMSMain_left.ss']['HIDDEN'] = 'rejtett';
$lang['hu_HU']['CMSMain_left.ss']['KEY'] = 'Kulcs:';
$lang['hu_HU']['CMSMain_left.ss']['NEW'] = 'új';
$lang['hu_HU']['CMSMain_left.ss']['OPENBOX'] = 'kattints ide a doboz kinyitásához';
$lang['hu_HU']['CMSMain_left.ss']['PAGEVERSIONH'] = 'Oldal-verzióelőzmények';
$lang['hu_HU']['CMSMain_left.ss']['PUBLISHCONFIRM'] = 'Kiválasztott oldalak publikálása';
$lang['hu_HU']['CMSMain_left.ss']['SEARCH'] = 'Keresés';
$lang['hu_HU']['CMSMain_left.ss']['SEARCHTITLE'] = 'Keresés az URL-ekben, a címekben, a menü címekben és a tartalmakban';
$lang['hu_HU']['CMSMain_left.ss']['SELECTPAGESACTIONS'] = 'Válaszd ki a megváltoztatandó oldalakat, majd kattints egy műveletre:';
$lang['hu_HU']['CMSMain_left.ss']['SHOWONLYCHANGED'] = 'Csak megváltozott oldalak mutatása';
$lang['hu_HU']['CMSMain_left.ss']['SHOWUNPUB'] = 'Nem publikált verziók megjelenítése';
$lang['hu_HU']['CMSMain_left.ss']['SITECONTENT TITLE'] = 'Honlaptartalom és -szerkezet';
$lang['hu_HU']['CMSMain_left.ss']['SITEREPORTS'] = 'Oldal jelentések';
$lang['hu_HU']['CMSMain_right.ss']['ANYMESSAGE'] = 'Van valami üzeneted a szerkesztőnek?';
$lang['hu_HU']['CMSMain_right.ss']['CHOOSEPAGE'] = 'Kérünk, válassz egy oldalt a bal oldali listából.';
$lang['hu_HU']['CMSMain_right.ss']['LOADING'] = 'Töltés...';
$lang['hu_HU']['CMSMain_right.ss']['MESSAGE'] = 'Üzenet';
$lang['hu_HU']['CMSMain_right.ss']['SENDTO'] = 'Küldés';
$lang['hu_HU']['CMSMain_right.ss']['STATUS'] = 'Állapot';
$lang['hu_HU']['CMSMain_right.ss']['SUBMIT'] = 'Elküldés jóváhagyásra';
$lang['hu_HU']['CMSMain_right.ss']['WELCOMETO'] = 'Üdvözlünk itt:';
$lang['hu_HU']['CMSMain_versions.ss']['AUTHOR'] = 'Szerző';
$lang['hu_HU']['CMSMain_versions.ss']['NOTPUB'] = 'Nem publikált';
$lang['hu_HU']['CMSMain_versions.ss']['PUBR'] = 'Publikáló';
$lang['hu_HU']['CMSMain_versions.ss']['UNKNOWN'] = 'Ismeretlen';
$lang['hu_HU']['CMSMain_versions.ss']['WHEN'] = 'Mikor';
$lang['hu_HU']['CommentAdmin']['ACCEPT'] = 'Jóváhagyás';
$lang['hu_HU']['CommentAdmin']['APPROVED'] = '%s hozzászólás jóváhagyva.';
$lang['hu_HU']['CommentAdmin']['APPROVEDCOMMENTS'] = 'Jóváhagyott hozzászólások';
$lang['hu_HU']['CommentAdmin']['AUTHOR'] = 'Szerző';
$lang['hu_HU']['CommentAdmin']['COMMENT'] = 'Hozzászólás';
$lang['hu_HU']['CommentAdmin']['COMMENTS'] = 'Hozzászólások';
$lang['hu_HU']['CommentAdmin']['COMMENTSAWAITINGMODERATION'] = 'Moderálandó hozzászólások';
$lang['hu_HU']['CommentAdmin']['DATEPOSTED'] = 'Elküldés dátuma';
$lang['hu_HU']['CommentAdmin']['DELETE'] = 'Törlés';
$lang['hu_HU']['CommentAdmin']['DELETEALL'] = 'Mind törlése';
$lang['hu_HU']['CommentAdmin']['DELETED'] = '%s hozzászólás törölve.';
$lang['hu_HU']['CommentAdmin']['MARKASNOTSPAM'] = 'Ez nem spam';
$lang['hu_HU']['CommentAdmin']['MARKEDNOTSPAM'] = '%s hozzászólás jelölve mint \'nem spam\'.';
$lang['hu_HU']['CommentAdmin']['MARKEDSPAM'] = '%s hozzászólás spamként jelölve.';
$lang['hu_HU']['CommentAdmin']['MENUTITLE'] = 'Hozzászólások';
$lang['hu_HU']['CommentAdmin']['MENUTITLE'] = 'Hozzászólások';
$lang['hu_HU']['CommentAdmin']['NAME'] = 'Név';
$lang['hu_HU']['CommentAdmin']['PAGE'] = 'Oldal';
$lang['hu_HU']['CommentAdmin']['SPAM'] = 'Spam';
$lang['hu_HU']['CommentAdmin']['SPAMMARKED'] = 'Ez spam';
$lang['hu_HU']['CommentAdmin_left.ss']['COMMENTS'] = 'Hozzászólások';
$lang['hu_HU']['CommentAdmin_right.ss']['WELCOME1'] = 'Üdvözöljük a';
$lang['hu_HU']['CommentAdmin_right.ss']['WELCOME2'] = 'Hozzászólás-kezelőben. Kérjük, válasszon egy mappát a bal oldali fában.';
$lang['hu_HU']['CommentAdmin_SiteTree.ss']['APPROVED'] = 'Jóváhagyva';
$lang['hu_HU']['CommentAdmin_SiteTree.ss']['AWAITMODERATION'] = 'Moderációra vár';
$lang['hu_HU']['CommentAdmin_SiteTree.ss']['COMMENTS'] = 'Hozzászólások';
$lang['hu_HU']['CommentAdmin_SiteTree.ss']['SPAM'] = 'Spam';
$lang['hu_HU']['CommentList.ss']['CREATEDW'] = 'A jegyzetek akkor kerülnek létrehozásra amikor a „munkafolyamat műveletek” egyike elvégzésre kerül: publikálás, visszavonás vagy elküldés.';
$lang['hu_HU']['CommentList.ss']['NOCOM'] = 'Nincsenek megjegyzések ezen az oldalon.';
$lang['hu_HU']['CommentTableField']['FILTER'] = 'Szűrés';
$lang['hu_HU']['CommentTableField']['SEARCH'] = 'Keresés';
$lang['hu_HU']['CommentTableField.ss']['APPROVE'] = 'jóváhagy';
$lang['hu_HU']['CommentTableField.ss']['APPROVECOMMENT'] = 'A hozzászólás jóváhagyása';
$lang['hu_HU']['CommentTableField.ss']['DELETE'] = 'töröl';
$lang['hu_HU']['CommentTableField.ss']['DELETEROW'] = 'A sor törlése';
$lang['hu_HU']['CommentTableField.ss']['EDIT'] = 'szerkeszt';
$lang['hu_HU']['CommentTableField.ss']['MARKASSPAM'] = 'Ez a hozzászólás spam';
$lang['hu_HU']['CommentTableField.ss']['MARKNOSPAM'] = 'Ez a hozzászólás nem spam';
$lang['hu_HU']['CommentTableField.ss']['NOITEMSFOUND'] = 'Nincs elem';
$lang['hu_HU']['CommentTableField.ss']['SPAM'] = 'spam';
$lang['hu_HU']['ComplexTableField']['CLOSEPOPUP'] = 'Ablak bezárása';
$lang['hu_HU']['ComplexTableField']['SUCCESSADD'] = '%s %s %s hozzáadva';
$lang['hu_HU']['ImageEditor.ss']['ACTIONS'] = 'műveletek';
$lang['hu_HU']['ImageEditor.ss']['ADJUST'] = 'igazít';
$lang['hu_HU']['ImageEditor.ss']['APPLY'] = 'alkalmaz';
$lang['hu_HU']['ImageEditor.ss']['BLUR'] = 'életlenítés';
$lang['hu_HU']['ImageEditor.ss']['BRIGHTNESS'] = 'fényesség';
$lang['hu_HU']['ImageEditor.ss']['CANCEL'] = 'mégse';
$lang['hu_HU']['ImageEditor.ss']['CONTRAST'] = 'kontraszt';
$lang['hu_HU']['ImageEditor.ss']['CROP'] = 'kivágás';
$lang['hu_HU']['ImageEditor.ss']['CURRENTACTION'] = 'aktuális&nbsp;művelet';
$lang['hu_HU']['ImageEditor.ss']['EFFECTS'] = 'effektek';
$lang['hu_HU']['ImageEditor.ss']['EXIT'] = 'kilépés';
$lang['hu_HU']['ImageEditor.ss']['GAMMA'] = 'gamma';
$lang['hu_HU']['ImageEditor.ss']['GREYSCALE'] = 'szürkeárnyalat';
$lang['hu_HU']['ImageEditor.ss']['HEIGHT'] = 'magasság';
$lang['hu_HU']['ImageEditor.ss']['REDO'] = 'visszaállítás';
$lang['hu_HU']['ImageEditor.ss']['ROT'] = 'elforgatás';
$lang['hu_HU']['ImageEditor.ss']['SAVE'] = 'kép&nbsp;elmentése';
$lang['hu_HU']['ImageEditor.ss']['SEPIA'] = 'szépia';
$lang['hu_HU']['ImageEditor.ss']['UNDO'] = 'visszavonás';
$lang['hu_HU']['ImageEditor.ss']['UNTITLED'] = 'Cím nélküli dokumentum';
$lang['hu_HU']['ImageEditor.ss']['WIDTH'] = 'szélesség';
$lang['hu_HU']['LeftAndMain']['CHANGEDURL'] = 'Az URL megváltoztaásra került „%s”-re.';
$lang['hu_HU']['LeftAndMain']['COMMENTS'] = 'Hozzászólások';
$lang['hu_HU']['LeftAndMain']['FILESIMAGES'] = 'Fájlok és képek';
$lang['hu_HU']['LeftAndMain']['HELP'] = 'Segítség';
$lang['hu_HU']['LeftAndMain']['PAGETYPE'] = 'Oldal típusa:';
$lang['hu_HU']['LeftAndMain']['PERMAGAIN'] = 'Kiléptetésre kerültél a CMS-ből. Ha újra be szeretnél lépni, add meg alább a felhasználóneved és jelszavad.';
$lang['hu_HU']['LeftAndMain']['PERMALREADY'] = 'Nincs jogosultságod a CMS ezen részének megtekintéséhez. Ha be szeretnél jelentkezni más felhasználóként, lejjebb megteheted.';
$lang['hu_HU']['LeftAndMain']['PERMDEFAULT'] = 'A CMS- be való belépéshez, kérünk válassz egy azonosítási módot, és írd be az azonosítási infomációkat.';
$lang['hu_HU']['LeftAndMain']['PLEASESAVE'] = 'Kérjük, mentsd el az oldalt: az oldalt nem lehetett frissíteni, mivel még nem került elmentésre.';
$lang['hu_HU']['LeftAndMain']['REPORTS'] = 'Jelentések';
$lang['hu_HU']['LeftAndMain']['REQUESTERROR'] = 'Hiba a lekérésben.';
$lang['hu_HU']['LeftAndMain']['SAVED'] = 'Elmentve.';
$lang['hu_HU']['LeftAndMain']['SAVEDUP'] = 'Elmentve.';
$lang['hu_HU']['LeftAndMain']['SECURITY'] = 'Biztonság';
$lang['hu_HU']['LeftAndMain']['SITECONTENT'] = 'Honlaptartalom';
$lang['hu_HU']['LeftAndMain']['SITECONTENTLEFT'] = 'Honlaptartalom';
$lang['hu_HU']['LeftAndMain.ss']['APPVERSIONTEXT1'] = 'Ez a ';
$lang['hu_HU']['LeftAndMain.ss']['APPVERSIONTEXT2'] = 'verzió ami éppen fut, gyakorlatilag ez a CVS ág.';
$lang['hu_HU']['LeftAndMain.ss']['ARCHS'] = 'Archivált oldal';
$lang['hu_HU']['LeftAndMain.ss']['DRAFTS'] = 'Piszkozatoldal';
$lang['hu_HU']['LeftAndMain.ss']['EDIT'] = 'Szerkesztés';
$lang['hu_HU']['LeftAndMain.ss']['EDITINCMS'] = 'Az oldal szerkesztése a CMS-ben';
$lang['hu_HU']['LeftAndMain.ss']['EDITPROFILE'] = 'Profil';
$lang['hu_HU']['LeftAndMain.ss']['LOADING'] = 'Töltés...';
$lang['hu_HU']['LeftAndMain.ss']['LOGGEDINAS'] = 'Bejelentkezve:';
$lang['hu_HU']['LeftAndMain.ss']['LOGOUT'] = 'Kijelentkezés';
$lang['hu_HU']['LeftAndMain.ss']['PUBLIS'] = 'Publikált oldal';
$lang['hu_HU']['LeftAndMain.ss']['REQUIREJS'] = 'A CMS a JavaScript engedélyezését igényli.';
$lang['hu_HU']['LeftAndMain.ss']['SSWEB'] = 'Silverstripe weboldal';
$lang['hu_HU']['LeftAndMain.ss']['VIEWINDRAFT'] = 'Az oldal megtekintése a piszkozat oldalon';
$lang['hu_HU']['LeftAndMain.ss']['VIEWINPUBLISHED'] = 'Az oldal megtekintése a publikált oldalon';
$lang['hu_HU']['LeftAndMain.ss']['VIEWPAGEIN'] = 'Oldal nézet: ';
$lang['hu_HU']['LeftAndMain']['STATUSPUBLISHEDSUCCESS'] = '\'%s\' sikeresen publikálva';
$lang['hu_HU']['LeftAndMain']['STATUSTO'] = 'Az állapot megváltoztatásra került „%s”-re.';
$lang['hu_HU']['LeftAndMain']['TREESITECONTENT'] = 'Honlap tartalma';
$lang['hu_HU']['MemberList.ss']['FILTER'] = 'Szűrés';
$lang['hu_HU']['MemberList_PageControls.ss']['DISPLAYING'] = 'Bemutatás';
$lang['hu_HU']['MemberList_PageControls.ss']['FIRSTMEMBERS'] = 'tagok';
$lang['hu_HU']['MemberList_PageControls.ss']['LASTMEMBERS'] = 'tagok';
$lang['hu_HU']['MemberList_PageControls.ss']['NEXTMEMBERS'] = 'tagok';
$lang['hu_HU']['MemberList_PageControls.ss']['PREVIOUSMEMBERS'] = 'tagok';
$lang['hu_HU']['MemberList_PageControls.ss']['VIEWFIRST'] = 'Elsőt mutat';
$lang['hu_HU']['MemberList_PageControls.ss']['VIEWLAST'] = 'Utolsót mutat';
$lang['hu_HU']['MemberList_PageControls.ss']['VIEWNEXT'] = 'Következőt mutat';
$lang['hu_HU']['MemberList_PageControls.ss']['VIEWPREVIOUS'] = 'Előzőt mutat';
$lang['hu_HU']['MemberList_Table.ss']['EMAIL'] = 'E-mail cím';
$lang['hu_HU']['MemberList_Table.ss']['FN'] = 'Keresztnév';
$lang['hu_HU']['MemberList_Table.ss']['PASSWD'] = 'Jelszó';
$lang['hu_HU']['MemberList_Table.ss']['SN'] = 'Családi név';
$lang['hu_HU']['MemberTableField']['ADD'] = 'Hozzáadás';
$lang['hu_HU']['MemberTableField']['ADDEDTOGROUP'] = 'Tag hozzáadásra került a csoporthoz.';
$lang['hu_HU']['MemberTableField']['ADDINGFIELD'] = 'Hozzáadás meghiúsult';
$lang['hu_HU']['MemberTableField']['ANYGROUP'] = 'Bármely csoport';
$lang['hu_HU']['MemberTableField']['ASC'] = 'Növekvő';
$lang['hu_HU']['MemberTableField']['DESC'] = 'Csökkenő';
$lang['hu_HU']['MemberTableField']['EMAIL'] = 'E-mail';
$lang['hu_HU']['MemberTableField']['FILTER'] = 'Szűrés';
$lang['hu_HU']['MemberTableField']['FILTERBYGROUP'] = 'Szűrés csoportra';
$lang['hu_HU']['MemberTableField']['FIRSTNAME'] = 'Keresztnév';
$lang['hu_HU']['MemberTableField']['ORDERBY'] = 'Rendezés';
$lang['hu_HU']['MemberTableField']['SEARCH'] = 'Keresés';
$lang['hu_HU']['MemberTableField.ss']['ADDNEW'] = 'Új hozzáadása';
$lang['hu_HU']['MemberTableField.ss']['DELETEMEMBER'] = 'Tag törlése';
$lang['hu_HU']['MemberTableField.ss']['EDITMEMBER'] = 'Tag szerkesztése';
$lang['hu_HU']['MemberTableField.ss']['SHOWMEMBER'] = 'Tag megtekintése';
$lang['hu_HU']['MemberTableField']['SURNAME'] = 'Családi név';
$lang['hu_HU']['ModelAdmin']['ADDBUTTON'] = 'Hozzáadás';
$lang['hu_HU']['ModelAdmin']['ADDFORM'] = 'Töltsd ki az űrlapot egy %s hozzáadásához.';
$lang['hu_HU']['ModelAdmin']['CHOOSE_COLUMNS'] = 'Eredményoszlopok kiválasztása';
$lang['hu_HU']['ModelAdmin']['CLEAR_SEARCH'] = 'Keresés törlése';
$lang['hu_HU']['ModelAdmin']['CREATEBUTTON'] = '\'%s\' létrehozása';
$lang['hu_HU']['ModelAdmin']['DELETE'] = 'Törlés';
$lang['hu_HU']['ModelAdmin']['DELETEDRECORDS'] = '%s sor törölve.';
$lang['hu_HU']['ModelAdmin']['FOUNDRESULTS'] = 'A keresés %s megfelelő elemet talált';
$lang['hu_HU']['ModelAdmin']['GOBACK'] = 'Vissza';
$lang['hu_HU']['ModelAdmin']['GOFORWARD'] = 'Előre';
$lang['hu_HU']['ModelAdmin']['IMPORT'] = 'Betöltés CSV-ből';
$lang['hu_HU']['ModelAdmin']['IMPORTEDRECORDS'] = '%s sor betöltve.';
$lang['hu_HU']['ModelAdmin']['ITEMNOTFOUND'] = 'Nem találom az elemet.';
$lang['hu_HU']['ModelAdmin']['LOADEDFOREDITING'] = '\'%s\' betöltése szerkesztésre.';
$lang['hu_HU']['ModelAdmin']['NOCSVFILE'] = 'Kérünk, válaszd ki a betöltendő CSV fájlt';
$lang['hu_HU']['ModelAdmin']['NOIMPORT'] = 'Nincs mit betölteni';
$lang['hu_HU']['ModelAdmin']['NORESULTS'] = 'Nincs találat';
$lang['hu_HU']['ModelAdmin']['SAVE'] = 'Mentés';
$lang['hu_HU']['ModelAdmin']['SEARCHRESULTS'] = 'Keresési eredmények';
$lang['hu_HU']['ModelAdmin']['SELECTALL'] = 'mind kiválasztása';
$lang['hu_HU']['ModelAdmin']['SELECTNONE'] = 'kiválasztás törlése';
$lang['hu_HU']['ModelAdmin']['UPDATEDRECORDS'] = '%s sor frissítve.';
$lang['hu_HU']['ModelAdmin_ImportSpec.ss']['IMPORTSPECFIELDS'] = 'Adatbázis oszlopok';
$lang['hu_HU']['ModelAdmin_ImportSpec.ss']['IMPORTSPECLINK'] = '%s specifikációjának mutatása';
$lang['hu_HU']['ModelAdmin_ImportSpec.ss']['IMPORTSPECRELATIONS'] = 'Relációk';
$lang['hu_HU']['ModelAdmin_ImportSpec.ss']['IMPORTSPECTITLE'] = '%s specifikációja';
$lang['hu_HU']['ModelAdmin_left.ss']['ADDLISTING'] = 'Hozzáadás';
$lang['hu_HU']['ModelAdmin_left.ss']['IMPORT_TAB_HEADER'] = 'Betöltés';
$lang['hu_HU']['ModelAdmin_left.ss']['SEARCHLISTINGS'] = 'Keresés';
$lang['hu_HU']['ModelAdmin_right.ss']['WELCOME1'] = 'Köszönt Téged a %s. Kérjük, válassz egy bejegyzést a bal oldali sávban.';
$lang['hu_HU']['ModelSidebar.ss']['SEARCHLISTINGS'] = 'Keresés';
$lang['hu_HU']['PageComment']['Comment'] = 'Hozzászólás';
$lang['hu_HU']['PageComment']['COMMENTBY'] = 'Küldte \'%s\' a \'%s\' oldalhoz';
$lang['hu_HU']['PageComment']['IsSpam'] = 'Spam?';
$lang['hu_HU']['PageComment']['Name'] = 'Szerző neve';
$lang['hu_HU']['PageComment']['NeedsModeration'] = 'Moderálást igényel?';
$lang['hu_HU']['PageComment']['PLURALNAME'] = 'Oldalhozzászólások';
$lang['hu_HU']['PageComment']['SINGULARNAME'] = 'Oldalhozzászólás';
$lang['hu_HU']['PageCommentInterface']['COMMENTERURL'] = 'A honlapod URL-je';
$lang['hu_HU']['PageCommentInterface']['POST'] = 'Beküldés';
$lang['hu_HU']['PageCommentInterface']['SPAMQUESTION'] = 'Válaszolj a következő kérdésre: %s';
$lang['hu_HU']['PageCommentInterface.ss']['COMMENTS'] = 'Eddigi hozzászólások';
$lang['hu_HU']['PageCommentInterface.ss']['NEXT'] = 'következő';
$lang['hu_HU']['PageCommentInterface.ss']['NOCOMMENTSYET'] = 'Még senki nem szólt hozzá ehhez az oldalhoz.';
$lang['hu_HU']['PageCommentInterface.ss']['POSTCOM'] = 'Hozzászólás küldése';
$lang['hu_HU']['PageCommentInterface.ss']['PREV'] = 'előző';
$lang['hu_HU']['PageCommentInterface.ss']['RSSFEEDALLCOMMENTS'] = 'RSS feed minden hozzászólásra';
$lang['hu_HU']['PageCommentInterface.ss']['RSSFEEDCOMMENTS'] = 'A hozzászólások RSS folyamként';
$lang['hu_HU']['PageCommentInterface.ss']['RSSVIEWALLCOMMENTS'] = 'Összes hozzászólás megtekintése';
$lang['hu_HU']['PageCommentInterface']['YOURCOMMENT'] = 'Hozzászólásod';
$lang['hu_HU']['PageCommentInterface']['YOURNAME'] = 'A neved';
$lang['hu_HU']['PageCommentInterface_Controller']['SPAMQUESTION'] = 'Válaszolj a következő kérdésre: %s';
$lang['hu_HU']['PageCommentInterface_Form']['AWAITINGMODERATION'] = 'Hozzászólását fogadtuk, moderálásra vár.';
$lang['hu_HU']['PageCommentInterface_Form']['MSGYOUPOSTED'] = 'Az elküldött üzenet:';
$lang['hu_HU']['PageCommentInterface_Form']['SPAMDETECTED'] = 'Spamtalálat!!';
$lang['hu_HU']['PageCommentInterface_singlecomment.ss']['APPROVE'] = 'a hozzászólás jóváhagyása';
$lang['hu_HU']['PageCommentInterface_singlecomment.ss']['ISNTSPAM'] = 'ez a hozzászólás nem spam';
$lang['hu_HU']['PageCommentInterface_singlecomment.ss']['ISSPAM'] = 'ez a hozzászólás spam';
$lang['hu_HU']['PageCommentInterface_singlecomment.ss']['PBY'] = 'Beküldte: ';
$lang['hu_HU']['PageCommentInterface_singlecomment.ss']['REMCOM'] = 'a hozzászólás törlése';
$lang['hu_HU']['ReportAdmin']['MENUTITLE'] = 'Jelentések';
$lang['hu_HU']['ReportAdmin_left.ss']['REPORTS'] = 'Jelentések';
$lang['hu_HU']['ReportAdmin_right.ss']['WELCOME1'] = 'Üdvözlünk';
$lang['hu_HU']['ReportAdmin_right.ss']['WELCOME2'] = 'jelentések részében. Kérünk, válassz egy jelentést a bal oldalról.';
$lang['hu_HU']['ReportAdmin_SiteTree.ss']['REPORTS'] = 'Jelentések';
$lang['hu_HU']['SecurityAdmin']['ADDMEMBER'] = 'Tag hozzáadása';
$lang['hu_HU']['SecurityAdmin']['EDITPERMISSIONS'] = 'Jogosultságok és IP címek szerkesztése minden csoportban';
$lang['hu_HU']['SecurityAdmin']['MENUTITLE'] = 'Biztonság';
$lang['hu_HU']['SecurityAdmin']['MENUTITLE'] = 'Biztonság';
$lang['hu_HU']['SecurityAdmin']['NEWGROUP'] = 'Új csoport';
$lang['hu_HU']['SecurityAdmin']['SAVE'] = 'Mentés';
$lang['hu_HU']['SecurityAdmin']['SGROUPS'] = 'Biztonsági csoportok';
$lang['hu_HU']['SecurityAdmin_left.ss']['CREATE'] = 'Létrehozás';
$lang['hu_HU']['SecurityAdmin_left.ss']['DEL'] = 'Törlés';
$lang['hu_HU']['SecurityAdmin_left.ss']['DELGROUPS'] = 'Kiválasztott csoportok törlése';
$lang['hu_HU']['SecurityAdmin_left.ss']['ENABLEDRAGGING'] = '"Fogd és vidd" átrendezés engedélyezése';
$lang['hu_HU']['SecurityAdmin_left.ss']['GO'] = 'Mehet';
$lang['hu_HU']['SecurityAdmin_left.ss']['SECGROUPS'] = 'Biztonsági csoportok';
$lang['hu_HU']['SecurityAdmin_left.ss']['SELECT'] = 'Válaszd ki a törlendő oldalakat, majd kattints a lenti gombra';
$lang['hu_HU']['SecurityAdmin_left.ss']['TOREORG'] = 'Az oldal újraszervezéséhez húzd az oldalakat az egérrel a kívánt helyre.';
$lang['hu_HU']['SecurityAdmin_right.ss']['WELCOME1'] = 'Üdvözlünk';
$lang['hu_HU']['SecurityAdmin_right.ss']['WELCOME2'] = 'biztonság adminisztrátori részében. Kérünk, válassz egy csoportot a bal oldalról.';
$lang['hu_HU']['SideReport']['EMPTYPAGES'] = 'Üres oldalak';
$lang['hu_HU']['SideReport']['LAST2WEEKS'] = 'Elmúlt 2 héten belül szerkesztett oldalak';
$lang['hu_HU']['SideReport']['REPEMPTY'] = 'A %s jelentés üres.';
$lang['hu_HU']['SideReport']['TODO'] = 'Teendő';
$lang['hu_HU']['StaticExporter']['BASEURL'] = 'Alap URL';
$lang['hu_HU']['StaticExporter']['EXPORTTO'] = 'Exportálás abba a mappába';
$lang['hu_HU']['StaticExporter']['FOLDEREXPORT'] = 'Exportálás célmappája';
$lang['hu_HU']['StaticExporter']['NAME'] = 'Statikus exportáló';
$lang['hu_HU']['TableListField_PageControls.ss']['DISPLAYING'] = 'Bemutatás';
$lang['hu_HU']['TableListField_PageControls.ss']['VIEWFIRST'] = 'Első mutatása';
$lang['hu_HU']['TableListField_PageControls.ss']['VIEWLAST'] = 'Utolsó mutatása';
$lang['hu_HU']['TableListField_PageControls.ss']['VIEWNEXT'] = 'Következő mutatása';
$lang['hu_HU']['TableListField_PageControls.ss']['VIEWPREVIOUS'] = 'Előző mutatása';
$lang['hu_HU']['ThumbnailStripField']['NOFLASHFOUND'] = 'Nincs Flash állomány';
$lang['hu_HU']['ThumbnailStripField']['NOFOLDERFLASHFOUND'] = 'Nincs Flash állomány itt:';
$lang['hu_HU']['ThumbnailStripField']['NOFOLDERIMAGESFOUND'] = 'Nincs kép itt:';
$lang['hu_HU']['ThumbnailStripField']['NOIMAGESFOUND'] = 'Nincs kép';
$lang['hu_HU']['ThumbnailStripField.ss']['CHOOSEFOLDER'] = '(Válassz egy mappát felülről)';
$lang['hu_HU']['ViewArchivedEmail.ss']['CANACCESS'] = 'Az archivált oldalt elérheted ezen a linken:';
$lang['hu_HU']['ViewArchivedEmail.ss']['HAVEASKED'] = 'Azt kérted, hogy megnézhesd a honlapunk tartalmát ekkor:';
$lang['hu_HU']['WaitingOn.ss']['ATO'] = 'címezve neki:';
$lang['hu_HU']['WidgetAreaEditor.ss']['AVAILABLE'] = 'Elérhető eszközök';
$lang['hu_HU']['WidgetAreaEditor.ss']['INUSE'] = 'Aktuálisan használt eszközök';
$lang['hu_HU']['WidgetAreaEditor.ss']['NOAVAIL'] = 'Nincs elérhető eszköz.';
$lang['hu_HU']['WidgetAreaEditor.ss']['TOADD'] = 'Eszközök hozzáadásához húzza őket ide a bal oldalról.';
$lang['hu_HU']['WidgetEditor.ss']['DELETE'] = 'Törlés';

?>