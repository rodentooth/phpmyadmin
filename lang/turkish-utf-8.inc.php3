<?php
/* $Id$ */

//çeviride eksik veya hatalı olduğunu düşündüğünüz kısımları bora@ktu.edu.tr adresine gönderebilirsiniz...
//bora alioğlu 02.08.2002...tempus fugit...

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr';
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('Byte', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');
//veritabanları terminolojisinde tercümeye pek müsait olmayan index ve unique sözcükleri aynen kullanıldı: uniqe=eşsiz,tek
$day_of_week = array('Pazar', 'Pazartesi', 'Salı', 'Çarşamba', 'Perşembe', 'Cuma', 'Cumartesi');
$month = array('Ocak', 'Şubat', 'Mart', 'Nisan', 'Mayıs', 'Haziran', 'Temmuz', 'Ağustos', 'Eylül', 'Ekim', 'Kasım', 'Aralık');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%B %d, %Y at %I:%M %p';

$strAccessDenied = 'Erişim engellendi';
$strAction = 'Eylem';
$strAddDeleteColumn = 'Sütun alanı Ekle/Sil';
$strAddDeleteRow = 'Kriter satırı Ekle/Sil';
$strAddNewField = 'Yeni alan ekle';
$strAddPriv = 'Yeni ayrıcalık ekle';
$strAddPrivMessage = 'Yeni ayrıcalık eklediniz..';
$strAddSearchConditions = 'Arama durumu ekle ("where" cümleciği için):';
$strAddToIndex = '%s sütununu(sütunlar&#305;na) index ekle';
$strAddUser = 'Yeni kullanıcı ekle';
$strAddUserMessage = 'Yeni bir kullanıcı eklediniz.';
$strAffectedRows = 'Etkilenen satırlar:';
$strAfter = 'Sonuna %s';
$strAfterInsertBack = 'Return';
$strAfterInsertNewInsert = 'Yeni kayit ekle';
$strAll = 'Tümü';
$strAllTableSameWidth = 'Bütün tabloları aynı genişlikte göster';
$strAlterOrderBy = 'Tabloyu değiştir ve şuna göre sırala:';
$strAnalyzeTable = 'Tabloyu analiz et';
$strAnd = 'Ve';
$strAnIndex = '%s üzerinde yeni bir index eklendi';
$strAny = 'Herhangi';
$strAnyColumn = 'Herhangi sütun';
$strAnyDatabase = 'Herhangi veritabanı';
$strAnyHost = 'Herhangi sunucu';
$strAnyTable = 'Herhangi tablo';
$strAnyUser = 'Herhangi kullanıcı';
$strAPrimaryKey = '%s üzerinde birincil index eklendi';
$strAscending = 'Artan';
$strAtBeginningOfTable = 'Tablonun başında';
$strAtEndOfTable = 'Tablonun sonunda';
$strAttr = 'Özellikler';

$strBack = 'Geri';
$strBinary = 'Binari';
$strBinaryDoNotEdit = 'Binari - düzenlemeyiniz';
$strBookmarkDeleted = 'Bookmark silindi.';
$strBookmarkLabel = 'Etiket';
$strBookmarkQuery = ' SQL-sorgusu';
$strBookmarkThis = 'Bu SQL-sorgusunu işaretle';
$strBookmarkView = 'Sadece gözat';
$strBrowse = 'Tara';
$strBzip = '"bzipped"';

$strCantLoadMySQL = 'mySQL uzantısını yükleyemiyor,<br />lütfen PHP ayarlarını kontrol ediniz.';
$strCantLoadRecodeIconv = 'Karakter seti dönüşümü için gerekli olan Iconv veya recode uzantılarını yükleyenemiyor.  Php\'nin bu uzantılara izin vermesini sağlayın veya phpMyAdmin içinde karakter dönüşümünü devre dışı bırakınız...';
$strCantRenameIdxToPrimary = 'Index\'i PRIMARY olarak adland&#305;r&#305;mazs&#305;n&#305;z!';
$strCantUseRecodeIconv = 'Uzantı raporları yüklenmişken , ne iconv ne libinconv ne de recode_string fonksiyonu  kullanılamaz.  Php ayarlarınızı kontrol ediniz.';
$strCardinality = 'En önemli';
$strCarriage = 'Enter Karakteri: \\r';
$strChange = 'Değiştir';
$strChangeDisplay = 'Görmek istediğiniz alanı seçiniz';
$strChangePassword = 'Şifre Değiştir';
$strCharsetOfFile = 'Dosyanın karakter seti:';
$strCheckAll = 'Tümünü seç';
$strCheckDbPriv = 'Veritabanı önceliklerini kontrol et';
$strCheckTable = 'Tabloyu kontrol et';
$strChoosePage = 'Lütfen düzenlemek istediğiniz sayfayı seçin';
$strColComFeat = 'Sütun yorumları gösteriliyor';
$strColumn = 'Sütun';
$strColumnNames = 'Sütun adları';
$strComments = 'Yorumlar';
$strCompleteInserts = 'Tamamlanmış eklemeler';
$strConfigFileError ='phpMyAdmin konfigurasyon dosyanızı okuyamadı....<br /> Bu php yorumlama hatası bulduğu zaman veya dosyayı bulamadığı zaman meydana gelebilir..<br /> Lütfen aşağıdaki linki kullanarak dosyayı direkt olarak çağırın ve aldığınız php hata mesajlarını okuyunuz.Çoğu durumda herhangi bir yerde tırnak veya noktalı virgül eksiktir<br /> Boş bir sayfayla karşılaşırsanız ,herşey yolunda demektir.';
$strConfigureTableCoord = ' Lütfen %s tablosu için koordinatları yapılandırınız';
$strConfirm = 'Aşağıdaki komutu uygulamak istediğinizden emin misiniz?';
$strCookiesRequired = 'Cookieler aç&#305;k olmal&#305;d&#305;r.';
$strCopyTable = 'Tabloyu (veritabanı<b>.</b>tablo) kopyala:';
$strCopyTableOK = '%s tablosu %s üzerine kopyalandı.';
$strCreate = 'Git';
$strCreateIndex = '%s sütununda yeni bir index olu&#351;tur';
$strCreateIndexTopic = 'Yeni bir index olu&#351;tur';
$strCreateNewDatabase = 'Yeni veritabanı oluştur';
$strCreateNewTable = '%s veritabanı üzerinde yeni bir tablo oluştur';
$strCreatePage = 'Yeni sayfa oluştur';
$strCreatePdfFeat = 'PDF\'lerin oluşturulması';
$strCriteria = 'Kriter';

$strData = 'Veri';
$strDatabase = 'Veritabanı ';
$strDatabaseHasBeenDropped = '%s veritabanı kaldırıldı.';
$strDatabases = 'veritabanları';
$strDatabasesStats = 'Veritabanı istatistikleri';
$strDatabaseWildcard = 'Veritabanı (* izin verili):';
$strDataOnly = 'Sadece veri';
$strDefault = 'Varsayılan';
$strDelete = 'Sil';
$strDeleted = 'Satır silindi.';
$strDeletedRows = 'Silinen satırlar:';
$strDeleteFailed = 'Silme sırasında hata oluştu!';
$strDeleteUserMessage = '%s kullanıcısını sildiniz.';
$strDescending = 'Azalan';
$strDisabled = 'Etkin değil';
$strDisplay = 'Görüntüle';
$strDisplayFeat = 'Özellikleri Göster';
$strDisplayOrder = 'Görünüm düzeni:';
$strDisplayPDF = 'PDF şemasını göster';
$strDoAQuery = '"Örnekle sorgu" yap (joker: "%")';
$strDocu = 'Yardım';
$strDoYouReally = 'Aşağıdaki komutu uygulamak istediğinizden emin misiniz? ';
$strDrop = 'Kaldır';
$strDropDB = 'Veritabanı\'nı kaldır %s';
$strDropTable = 'Tablo\'yu kaldır';
$strDumpingData = 'Tablo döküm verisi';
$strDumpXRows = ' %s satırdan başlayarak  %s a kadar çıktı üret.';
$strDynamic = 'dinamik';

$strEdit = 'Düzenle';
$strEditPDFPages = ' PDF Sayfalarını düzenle';
$strEditPrivileges = 'Öncelikleri Düzenle';
$strEffective = 'Efektif';
$strEmpty = 'Boşalt';
$strEmptyResultSet = 'MySQL boş bir sonuc kümesi döndürdü ( sıfır satır).';
$strEnabled = 'Etkin';
$strEnd = 'Son';
$strEnglishPrivileges = ' Not: mySQL  öncelik adları İngilizce olarak belirtilmiştir ';
$strError = 'Hata';
$strExplain = 'SQL\'i açıkla';
$strExport = 'Dönüştür';
$strExportToXML = 'XML formatına dönüştür';
$strExtendedInserts = 'Genişletilmiş eklemeler';
$strExtra = 'Ayrıca';

$strField = 'Alan';
$strFieldHasBeenDropped = '%s alanı kaldırılmıştır';
$strFields = 'Alanlar';
$strFieldsEmpty = ' Alan sayısı boş! ';
$strFieldsEnclosedBy = 'Alan ayırıcı işaret';//it does not seem well but just works
$strFieldsEscapedBy = 'Kaçış simgesi(özel işaretler için)';//it does not seem well but just works
$strFieldsTerminatedBy = 'Alan bitirici işaret';//it does not stand seem but just works
$strFixed = 'sabit';
$strFlushTable = 'Tabloyu kapat("FLUSH")';
$strFormat = 'Biçim';
$strFormEmpty = 'Form\'da eksik değer !';
$strFullText = 'Tüm metinler';
$strFunction = 'Fonksiyon';

$strGenBy = 'Oluşturuldu->:';
$strGeneralRelationFeat = 'Genel ilişki özellikleri';
$strGenTime = 'Çıktı Tarihi';
$strGo = 'Git';
$strGrants = 'Haklar';
$strGzip = '"gziplenmiş"';

$strHasBeenAltered = 'düzenlendi.';
$strHasBeenCreated = 'yaratıldı.';
$strHaveToShow = 'Görüntülemek için en az bir sütun seçmelisiniz';
$strHome = 'Ana Sayfa';
$strHomepageOfficial = 'phpMyAdmin Web Sayfası';
$strHomepageSourceforge = 'Sourceforge phpMyAdmin Yükleme Sayfası';
$strHost = 'Sunucu:';
$strHostEmpty = 'Sunucu ismi alanı doldurulmadı!';

$strIdxFulltext = 'Tüm metinler';
$strIfYouWish = 'Eğer bir tablo\'nun sadece bazı sütunlarını yüklemek istiyorsanız,virgüllerle ayrılmış bir alan listesi belirtiniz.';
$strIgnore = 'Yoksay';
$strIndex = 'Index';
$strIndexes = 'Index\'ler';
$strIndexHasBeenDropped = '%s index\'i silindi.';
$strIndexName = 'Index ismi :';
$strIndexType = 'Index tipi :';
$strInsert = 'Ekle';
$strInsertAsNewRow = 'Yeni bir satır olarak ekle';
$strInsertedRows = 'Eklenen satırlar:';
$strInsertNewRow = 'Yeni satır ekle';
$strInsertTextfiles = 'Tablo içine metin dosyası ekle';
$strInstructions = 'Talimatlar';
$strInUse = 'kullanımda';
$strInvalidName = '"%s" sözcüğü kullanılamayan sözcük.Veritabanı/tablo/alan ismi olarak kullanamassınız, you can\'t use it as a database/table/field name.';

$strKeepPass = 'Şifreyi değiştirme';
$strKeyname = 'Anahtar ismi';
$strKill = 'Kapat';

$strLength = 'Boyut';
$strLengthSet = 'Boyut/Değerler*';
$strLimitNumRows = 'Sayfa ba&#351;&#305;na kay&#305;t say&#305;s&#305;';
$strLineFeed = 'Satır: \\n';
$strLines = 'Satırlar';
$strLinesTerminatedBy = 'Satır sonu';
$strLinkNotFound = 'Link bulunamadı';
$strLinksTo = 'Linkler->';
$strLocationTextfile = 'Dosyadan yükle';
$strLogin = 'Login';
$strLogout = 'Çıkış';
$strLogPassword = '&#350;ifre:';
$strLogUsername = 'Kullan&#305;c&#305; Ad&#305;:';

$strMissingBracket = 'Parantez eksik';
$strModifications = 'Değişiklikler kaydedildi';
$strModify = 'Değiştir';
$strModifyIndexTopic = 'Index düzenle';
$strMoveTable = 'Tabloyu (veritabanı<b>.</b>tablo) taşı:';
$strMoveTableOK = '%s tablosu %s üzerine taşındı.';
$strMySQLCharset = 'MySQL karakter seti';
$strMySQLReloaded = 'MySQL yeniden yüklendi.';
$strMySQLSaid = 'MySQL çıktısı: ';
$strMySQLServerProcess = ' MySQL %pma_s1%   %pma_s2%  üzerinde  %pma_s3% olarak çalışıyor';
$strMySQLShowProcess = 'İşlemleri göster';
$strMySQLShowStatus = 'MySQL çalışma zamanı bilgisini göster';
$strMySQLShowVars = 'MySQL sistem değişkenlerini göster';

$strName = 'İsim';
$strNext = 'Sonraki';
$strNo = 'Hayır';
$strNoDatabases = 'Veritabanı yok';
$strNoDescription = 'Tanımlama yok';
$strNoDropDatabases = '"DROP DATABASE" cümlesi burada kullanılamaz.';
$strNoExplain = 'SQL açıklamasını yapma';
$strNoFrames = 'phpMyAdmin frame destekli bir taray&#305;c&#305; ile daha iyi çal&#305;&#351;maktad&#305;r...';
$strNoIndex = 'Index tan&#305;mlanmad&#305;!';
$strNoIndexPartsDefined = 'Index k&#305;sm&#305; tan&#305;mlanmad&#305;!';
$strNoModification = 'Değişiklik yok';
$strNone = 'Hiçbiri';
$strNoPassword = 'Şifre yok';
$strNoPhp = ' PHP kodsuz';
$strNoPrivileges = 'Ayrıcalık yok';
$strNoQuery = 'SQL sorgusu yok!';
$strNoRights = 'Burada bulunmak için yeterli haklara sahip değilsiniz!';
$strNoTablesFound = 'Veritabanı\'nda tablo bulunamadı.';
$strNotNumber = 'Bu bir sayı değil!';
$strNotOK = 'Tamam değil';
$strNotSet = '<b>%s</b> tablosu bulunamadı veya %s içinde tanımlanmadı';
$strNotValidNumber = ' geçerli bir satır sayısı değil!';
$strNoUsersFound = 'Kullanıcı(lar) bulunamadı.';
$strNoValidateSQL = 'SQL doğrulamasını yapma';
$strNull = 'Boş';
$strNumSearchResultsInTable = '%s eşleşim : %s tablosu içinde';
$strNumSearchResultsTotal = 'Toplam: %s eşleşim';

$strOftenQuotation = 'Sık kullanılan aktarma işaretleri.SEÇİME BAĞLI,sadece char ve varchar alanlarının "enclosed-by" karakteri ile çevreneleceği anlamına gelir..';
$strOK = 'Tamam';
$strOperations = 'İşlemler';
$strOptimizeTable = 'Tabloyu optimize et';
$strOptionalControls = 'Özel karakterleri yazmak ve okumak için kontroller.Opsiyonel';
$strOptionally = 'Seçime Bağlı';
$strOptions = 'Seçenekler';
$strOr = 'veya';
$strOverhead = 'Kullan&#305;lamayan Veri';

$strPageNumber = 'Sayfa numarası:';
$strPartialText = 'Bölümsel Metinler';
$strPassword = 'Şifre';
$strPasswordEmpty = 'Şifre alanı doldurulmadı!';
$strPasswordNotSame = 'Girilen şifreler aynı değil!';
$strPdfDbSchema = ' "%s" veritabanının şeması - Sayfa %s';
$strPdfInvalidPageNum = 'Tanımlanmamış PDF sayfa numarası!';
$strPdfInvalidTblName = ' "%s" tablosu bulunamıyor !';
$strPhp = 'PHP kodu oluştur';
$strPHPVersion = 'PHP Sürümü';
$strPmaDocumentation = 'phpMyAdmin yardım';
$strPmaUriError = '<tt>$cfg[\'PmaAbsoluteUri\']</tt>\' nin değeri  konfigurasyon dosyasının içinde verilmelidir!';
$strPos1 = 'Başlangıç';
$strPrevious = 'Önceki';
$strPrimary = 'Birincil';
$strPrimaryKey = 'Birincil anahtar';
$strPrimaryKeyHasBeenDropped = 'Birincil anahtar silindi';
$strPrimaryKeyName = 'PRIMARY KEY TEK olmal&#305;d&#305;r!';
$strPrimaryKeyWarning = '("PRIMARY" <b>sadece</b> bir anahtar&#305;n ismi <b>olmal&#305;d&#305;r!</b>)';
$strPrintView = 'Yazıcı görüntüsü';
$strPrivileges = 'Öncelikler';
$strProperties = 'Özellikler';

$strQBE = ' Sorgula';
$strQBEDel = 'Del';
$strQBEIns = 'Ins';
$strQueryOnDb = 'Veritabanı üzerinde SQL-sorgusu&nbsp;<b>%s</b>:';

$strRecords = 'Kayıtlar';
$strReferentialIntegrity = 'Referans bütünlüğünü kontrol et.';
$strRelationNotWorking = 'Bağlı tablolarla çalışmada kullanılan ekstra özellikler deaktif edildi...Niçin olduğunu öğrenmek için %sburaya%s tıklayınız...';
$strRelationView = 'İlişki görünümü';
$strReloadFailed = 'MySQL yeniden yüklenmesi gerçekleştirilemedi.';
$strReloadMySQL = 'MySQL\'i yeniden yükle';
$strRememberReload = 'Server\'ı yeniden yüklemeyi unutmayınız.';
$strRenameTable = 'Tablonun ismini şuna değiştir';
$strRenameTableOK = '%s tablosu %s olarak yeniden adlandırıldı';
$strRepairTable = 'Tablo\'yu onar';
$strReplace = 'Yerdeğiştir';
$strReplaceTable = 'Tablo verisini bir dosyadaki ile değiştir';
$strReset = 'Sıfırla';
$strReType = 'Yeniden gir';
$strRevoke = 'Geçersiz kıl';
$strRevokeGrant = 'Hak geçersiz kıl';
$strRevokeGrantMessage = '%s için Grant önceli&#287;ini kald&#305;rd&#305;n&#305;z';
$strRevokeMessage = '%s\'in önceliklerini kald&#305;rd&#305;n&#305;z';
$strRevokePriv = 'Ayrıcalıkları geçersiz kıl';
$strRowLength = 'Satır boyu';
$strRows = 'Satır Sayısı';
$strRowsFrom = '(kayıt)başlayacağı kayıt :';
$strRowSize = ' Satır boyutu ';
$strRowsModeHorizontal= 'yatay';
$strRowsModeOptions= '%s modunda ve %s hücre sonra ba&#351;l&#305;&#287;&#305; tekrarla';
$strRowsModeVertical= 'dikey';
$strRowsStatistic = 'Satır istatistiği';
$strRunning = ': %s üzerinde çalışıyor...';
$strRunQuery = 'Sorguyu çalıştır';
$strRunSQLQuery = '%s veritabanı üzerinde sorgu/sorgular çalıştır';

$strSave = 'Kaydet';
$strScaleFactorSmall = 'Çarpan faktörü sayfadaki şema için çok küçük';
$strSearch = 'Ara';
$strSearchFormTitle = 'Veritabanında ara';
$strSearchInTables = 'Tablo(lar) içinde:';
$strSearchNeedle = 'Aranacak kelime veya değerler (joker: "%"):';
$strSearchOption1 = 'kelimelerin en azından biri';
$strSearchOption2 = 'bütün kelimeler';
$strSearchOption3 = 'tam eşleşim';
$strSearchOption4 = 'normal deyim gibi';
$strSearchResultsFor = ' "%s" %s için arama sonuçları:';
$strSearchType = 'Bul:';
$strSelect = 'Seç';
$strSelectADb = ' Lütfen bir veritaban&#305; seçiniz';
$strSelectAll = 'Tümünü seç';
$strSelectFields = 'Alan seç (en az bir):';
$strSelectNumRows = 'sorgu içerisinde';
$strSelectTables = 'Tabloları seç';
$strSend = 'Dosya olarak kaydet';
$strServerChoice = 'Server seçimi';
$strServerVersion = 'Server sürümü';
$strSetEnumVal = 'Eğer alan tipi "enum" veya  "set" ise , lütfen verileri şu formata göre giriniz: \'a\',\'b\',\'c\'...<br>Eğer bu değerler arasına backslash ("\") veya tek tırnak koymanız gerekirse ("\'"),bunun için backslash kullanın (mesela \'\\\\xyz\' veya \'a\\\'b\').';
$strShow = 'Göster:';
$strShowAll = 'Tümünü göster';
$strShowColor = 'Rengi göster';
$strShowCols = 'Bütün sütunları göster';
$strShowGrid = 'Izgarayı göster';
$strShowingRecords = 'Kayıtları gösteriyor';
$strShowPHPInfo = 'PHP bilgisini göster';
$strShowTableDimension = 'Tabloların boyutlarını göster';
$strShowTables = 'Tabloları göster';
$strShowThisQuery = ' Bu sorguyu burda yine göster ';
$strSingly = '(birer birer)';
$strSize = 'Boyut';
$strSort = 'Sırala';
$strSpaceUsage = 'Kullanılan alan';
$strSplitWordsWithSpace = 'Kelimeler bir boşluk karakteriyle bölünmüştür (" ").';
$strSQL = 'SQL';
$strSQLQuery = 'SQL-sorgusu';
$strSQLResult = 'SQL sonucu';
$strStatement = 'İfadeler';
$strStrucCSV = 'CSV verisi';
$strStrucData = 'Yapı ve Veri';
$strStrucDrop = '\'Drop table\' ekle';
$strStrucExcelCSV = 'MS Excel verisi için CSV';
$strStrucOnly = 'Sadece yapı';
$strStructPropose = 'Tablo yapısını ayarla(mysql,tablo yapısını optimize eder)';
$strStructure = 'Yapı';
$strSubmit = 'Onayla';
$strSuccess = 'SQL sorgunuz başarıyla çalıştırılmıştır';
$strSum = 'toplam';

$strTable = 'Tablo';
$strTableComments = 'Tablo yorumları';
$strTableEmpty = 'Tablo ismi boş!';
$strTableHasBeenDropped = '%s tablosu kaldırılmıştır';
$strTableHasBeenEmptied = '%s tablosu boşaltılmıştır';
$strTableHasBeenFlushed = '%s tablosu ba&#351;ar&#305;yla kapat&#305;lm&#305;&#351;t&#305;r.';
$strTableMaintenance = 'Tablo bakımı';
$strTables = '%s tablo';
$strTableStructure = 'Tablo için tablo yapısı';
$strTableType = 'Tablo tipi';
$strTextAreaLength = 'Boyutu nedeniyle,<br /> bu alan düzenlenmeyebilir ';
$strTheContent = 'Dosyanızın içeriği eklendi.';
$strTheContents = 'Dosyanın içeriği tablonun içeriğini aynı birincil veya unique anahtar değerli sütunlar için yer değiştirir..';
$strTheTerminator = 'Alan bitimini belirten işaret.';
$strTotal = 'toplam';
$strType = 'Tip';

$strUncheckAll = 'Hiçbirisini Seçme';
$strUnique = 'Unique';
$strUnselectAll = 'Hiçbirisini seçme';
$strUpdatePrivMessage = '%s için olan ayrıcalıkları güncellediniz.';
$strUpdateProfile = 'Profil güncelle:';
$strUpdateProfileMessage = 'Profil güncellendi.';
$strUpdateQuery = 'Sorguyu güncelle';
$strUsage = 'Kullanım';
$strUseBackquotes = 'Tablo ve alan isimleri için ters tırnak " ` " işaretini kullan';
$strUser = 'Kullanıcı:';
$strUserEmpty = 'Kullanıcı ismi alanı doldurulmadı!';
$strUserName = 'Kullanıcı ismi';
$strUsers = 'Kullanıcılar';
$strUseTables = 'Tabloları kullan';

$strValidateSQL = 'SQL\'i doğrula';
$strValue = 'Değer';
$strViewDump = 'Tablo\'nun döküm(şema)\'ünü göster';
$strViewDumpDB = 'Veritabanı\'nın döküm(şema)\'ünü göster';

$strWelcome = '%s \'e HOŞGELDİNİZ....';
$strWithChecked = 'seçilileri:';
$strWrongUser = 'Hatalı kullanıcı/parola. Erişim engellendi.';

$strYes = 'Evet';

$strZip = '"ziplenmiş"';
// To translate

$strBeginCut = 'BEGIN CUT';  //to translate
$strBeginRaw = 'BEGIN RAW';  //to translate

$strEndCut = 'END CUT';  //to translate
$strEndRaw = 'END RAW';  //to translate

$strPdfNoTables = 'No tables';  //to translate

$strSQLParserBugMessage = 'There is a chance that you may have found a bug in the SQL parser. Please examine your query closely, and check that the quotes are correct and not mis-matched. Other possible failure causes may be that you are uploading a file with binary outside of a quoted text area. You can also try your query on the MySQL command line interface. The MySQL server error output below, if there is any, may also help you in diagnosing the problem. If you still have problems or if the parser fails where the command line interface succeeds, please reduce your SQL query input to the single query that causes problems, and submit a bug report with the data chunk in the CUT section below:';  //to translate
$strSQLParserUserError = 'There seems to be an error in your SQL query. The MySQL server error output below, if there is any, may also help you in diagnosing the problem';  //to translate
$strSQPBugInvalidIdentifer = 'Invalid Identifer';  //to translate
$strSQPBugUnclosedQuote = 'Unclosed quote';  //to translate
$strSQPBugUnknownPunctuation = 'Unknown Punctuation String';  //to translate

$strInsecureMySQL = 'Your configuration file contains settings (root with no password) that correspond to the default MySQL privileged account. Your MySQL server is running with this default, is open to intrusion, and you really should fix this security hole.';  //to translate
$strWebServerUploadDirectory = 'web-server upload directory';  //to translate
$strWebServerUploadDirectoryError = 'The directory you set for upload work cannot be reached';  //to translate
$strValidatorError = 'The SQL validator could not be initialized. Please check if you have installed the necessary php extensions as described in the %sdocumentation%s.'; //to translate
$strServer = 'Server %s';  //to translate
$strPutColNames = 'Put fields names at first row';  //to translate
$strImportDocSQL = 'Import docSQL Files';  //to translate
$strDataDict = 'Data Dictionary';  //to translate
$strPrint = 'Print';  //to translate
$strPHP40203 = 'You are using PHP 4.2.3, which has a serious bug with multi-byte strings (mbstring). See PHP bug report 19404. This version of PHP is not recommended for use with phpMyAdmin.';  //to translate
$strCompression = 'Compression'; //to translate
$strNumTables = 'Tables'; //to translate
$strTotalUC = 'Total'; //to translate
$strRelationalSchema = 'Relational schema';  //to translate
$strTableOfContents = 'Table of contents';  //to translate
$strCannotLogin = 'Cannot login to MySQL server';  //to translate
$strShowDatadictAs = 'Data Dictionary Format';  //to translate
$strLandscape = 'Landscape';  //to translate
$strPortrait = 'Portrait';  //to translate
?>
