<?php
/* $Id$ */

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr';
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('Байт', 'кБ', 'МБ', 'ГБ');

$day_of_week = array('Нд', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб');
$month = array('Січ', 'Лют', 'Бер', 'Квт', 'Трв', 'Чрв', 'Лип', 'Сер', 'Вер', 'Жов', 'Лис', 'Гру');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%B %d %Y р., %H:%M';

$strAPrimaryKey = 'Було додано первинний ключ до %s';
$strAccessDenied = 'Доступ заборонено';
$strAction = 'Дія';
$strAddDeleteColumn = 'Додати/забрати колонку критерію';
$strAddDeleteRow = 'Додати/забрати рядок критерію';
$strAddNewField = 'Додати нове поле';
$strAddPriv = 'Додати нові привілеї';
$strAddPrivMessage = 'Було додано новий привілей';
$strAddSearchConditions = 'Додати умови пошуку (тіло для умови "where"):';
$strAddToIndex = 'Додати до індексу&nbsp;%s&nbsp;колоноку(и)';
$strAddUser = 'Додати нового користувача';
$strAddUserMessage = 'Було додано нового користувача.';
$strAffectedRows = 'Задіяні рядки:';
$strAfter = 'Після %s';
$strAfterInsertBack = 'Повернутись';
$strAfterInsertNewInsert = 'Вставити новий запис';
$strAll = 'Все';
$strAllTableSameWidth = 'показувати всі таблиці однакової ширини?';
$strAlterOrderBy = 'Змінити порядок таблиці';
$strAnIndex = 'Було додано індекс для %s';
$strAnalyzeTable = 'Аналіз таблиці';
$strAnd = 'І';
$strAny = 'Довільний';
$strAnyColumn = 'Довільна колонка';
$strAnyDatabase = 'Довільн база даних';
$strAnyHost = 'Довільний хост';
$strAnyTable = 'Довільна таблиця';
$strAnyUser = 'Довільний користувач';
$strAscending = 'Зростаючий';
$strAtBeginningOfTable = 'На початку таблиці';
$strAtEndOfTable = 'У кінці таблиці';
$strAttr = 'Атрибути';

$strBack = 'Назад';
$strBeginCut = 'BEGIN CUT';
$strBeginRaw = 'BEGIN RAW';
$strBinary = ' Двійковий ';
$strBinaryDoNotEdit = ' Двійкові дані - не редагуються ';
$strBookmarkDeleted = 'Закладку було видалено.';
$strBookmarkLabel = 'Мітка';
$strBookmarkQuery = 'Закладка на SQL-запит';
$strBookmarkThis = 'Закладка на даний SQL-запит';
$strBookmarkView = 'Лише перегляд';
$strBrowse = 'Переглянути';
$strBzip = 'запакувати в "bzip"';

$strCantLoadMySQL = 'розширення MySQL не завантажено,<br />перевірте конфігурацію PHP.';
$strCantLoadRecodeIconv = 'Не можу завантажити iconv чи recode extension необхідні для зміни charset-у, сконфігуруйте php так, щоб можна було використовувати ці extensions, або забороніть зміну charset-у у phpMyAdmin.';
$strCantRenameIdxToPrimary = 'Неможливо перейменувати індекс в PRIMARY!';
$strCantUseRecodeIconv = 'Не можу  використати ні/або iconv, ні/або libiconv, ні/або функцію recode_string поки буде завантажено extension reports. Перевірте Вашу php конфігурацію.';
$strCardinality = 'Кількість елементів';
$strCarriage = 'Повернення каретки: \\r';
$strChange = 'Змінити';
$strChangeDisplay = 'Виберіть поля для відображення';
$strChangePassword = 'Змінити пароль';
$strCharsetOfFile = 'Кодування файлу:';
$strCheckAll = 'Відмітити все';
$strCheckDbPriv = 'Перевірити привілеї бази даних';
$strCheckTable = 'Перевірити таблицю';
$strChoosePage = 'Прошу вибрати сторінку для редагування';
$strColComFeat = 'Показувати коментарі стовпців';
$strColumn = 'Колонка';
$strColumnNames = 'Назви колонок';
$strComments = 'Коментарі';
$strCompleteInserts = 'Повна вставка';
$strConfigFileError = 'phpMyAdmin не може прочитати конфігураційний файл <br />Це може статися у тому випадку, коли php натрапить на синтаксичну помилку (parse error) у ньому, або не може знайти самого файлу.<br />Завантажте конфігураційний файл безпосередньо за допомогою посилання поданого нижче і прочитайте отримані повідомлення про помилки (php error messages). Найчастіше десь у файлі просто бракує лапок чи двокрапки.  <br />Якщо Ви отримаєте порожню сторінку, - значить все в порядку.';
$strConfigureTableCoord = 'Прошу сконфіґурувати координати таблиці %s';
$strConfirm = 'Ви насправді хочете це зробити?';
$strCookiesRequired = 'З цього моменту Cookies повинні бути дозволені.';
$strCopyTable = 'Скопіювати таблицю в (база даних<b>.</b>таблиця):';
$strCopyTableOK = 'Таблицю %s було скопійовано в %s.';
$strCreate = 'Створити';
$strCreateIndex = 'Створити індекс на&nbsp;%s&nbsp;колонках';
$strCreateIndexTopic = 'Створити новий індекс';
$strCreateNewDatabase = 'Створити нову БД';
$strCreateNewTable = 'Створити нову таблицю в БД %s';
$strCreatePage = 'Створити нову сторінку';
$strCreatePdfFeat = 'Створити PDF-файл';
$strCriteria = 'Критерій';

$strData = 'Дані';
$strDataDict = 'Словник даних';
$strDataOnly = 'Лише дані';
$strDatabase = 'БД ';
$strDatabaseHasBeenDropped = 'Базу даних %s знищено.';
$strDatabaseWildcard = 'База даних (дозволено використання шаблонів):';
$strDatabases = 'Бази Даних';
$strDatabasesStats = 'Статистика баз даних';
$strDefault = 'По замовчуванню';
$strDelete = 'Видалити';
$strDeleteFailed = 'Видалення не вдалося!';
$strDeleteUserMessage = 'Видалено користувача %s.';
$strDeleted = 'Рядок видалено';
$strDeletedRows = 'Видалено наступні рядки:';
$strDescending = 'Спадаючий';
$strDisabled = 'заблоковано';
$strDisplay = 'Показати';
$strDisplayFeat = 'Показати можливості';
$strDisplayOrder = 'Порядок перегляду:';
$strDisplayPDF = 'Показати PDF схему';
$strDoAQuery = 'Виконати "запит згідно прикладу" (символ підставновки: "%")';
$strDoYouReally = 'Ви насправді хочете ';
$strDocu = 'Документація';
$strDrop = 'Знищити';
$strDropDB = 'Знищити БД %s';
$strDropTable = 'Видалити таблицю';
$strDumpXRows = 'Зґенерувати дамп %s рядків починаючи з %s -го.';
$strDumpingData = 'Дамп даних таблиці';
$strDynamic = 'динамічний';

$strEdit = 'Редагувати';
$strEditPDFPages = 'Редагувати PDF Сторінки';
$strEditPrivileges = 'Редагування привілеїв';
$strEffective = 'Ефективність';
$strEmpty = 'Очистити';
$strEmptyResultSet = 'MySQL повернула пустий результат (тобто нуль рядків).';
$strEnabled = 'дозволено';
$strEnd = 'Кінець';
$strEndCut = 'END CUT';
$strEndRaw = 'END RAW';
$strEnglishPrivileges = ' Зауваження: привілеї MySQL задаються по-англійськи ';
$strError = 'Помилка';
$strExplain = 'Тлумачити SQL';
$strExport = 'Експорт';
$strExportToXML = 'Експортувати у XML формат';
$strExtendedInserts = 'Розширена вставка';
$strExtra = 'Додатково';

$strField = 'Поле';
$strFieldHasBeenDropped = 'Поле %s було видалено';
$strFields = 'Поля';
$strFieldsEmpty = ' Порожній перелік полів! ';
$strFieldsEnclosedBy = 'Поля взято в';
$strFieldsEscapedBy = 'Поля екрануються';
$strFieldsTerminatedBy = 'Поля розділені';
$strFixed = 'фіксований';
$strFlushTable = 'Очистити кеш таблиці ("FLUSH")';
$strFormEmpty = 'Не задано значення для форми!';
$strFormat = 'Формат';
$strFullText = 'Повні тексти';
$strFunction = 'Функція';

$strGenBy = 'Згенеровано';
$strGenTime = 'Час створення';
$strGeneralRelationFeat = 'Загальні можливості';
$strGo = 'Вперед';
$strGrants = 'Права';
$strGzip = 'запакувати в "gzip"';

$strHasBeenAltered = 'була змінена.';
$strHasBeenCreated = 'була створена.';
$strHaveToShow = 'Необхідно вибрати принаймі один Стовпчик для показу';
$strHome = 'На початок';
$strHomepageOfficial = 'Офіційна сторінка phpMyAdmin';
$strHomepageSourceforge = 'Завантаження phpMyAdmin з Sourceforge';
$strHost = 'Хост';
$strHostEmpty = 'Порожнє ім\'я хоста!';

$strIdxFulltext = 'ПовнТекст';
$strIfYouWish = 'Якщо Ви бажаєте завантажити лише деякі колонки таблиці, задайте розділений комами список полів.';
$strIgnore = 'Ігноруровати';
$strImportDocSQL = 'Імпортувати docSQL файли';
$strInUse = 'використовується';
$strIndex = 'Індекс';
$strIndexHasBeenDropped = 'Індекс %s було знищено';
$strIndexName = 'Назва індекса&nbsp;:';
$strIndexType = 'Тип індекса&nbsp;:';
$strIndexes = 'Індекси';
$strInsecureMySQL = 'Ваш файл конфіґурації містить параметри (root без паролю) які відповідають привілейованому користувачу MySQL. Ваш MySQL сервер у цьому випадку відкритий для вторгнення і тому Вам обов\'язково слід виправити цю прогалину у безпеці.';
$strInsert = 'Вставити';
$strInsertAsNewRow = 'Вставити як новий рядок';
$strInsertNewRow = 'Вставити новий рядок';
$strInsertTextfiles = 'Вставити текстові файли в таблицю';
$strInsertedRows = 'Додані рядки:';
$strInstructions = 'Інструкції';
$strInvalidName = '"%s" - зарезервоване слово, ви не можете використовувати його для назви бази даних/таблиці/поля.';

$strKeepPass = 'Не змінювати пароль';
$strKeyname = 'Ім\'я ключа';
$strKill = 'Вбити';

$strLength = 'Довжина';
$strLengthSet = 'Довжини/Значення*';
$strLimitNumRows = 'записів на сторінці';
$strLineFeed = 'Символ кінця рядка: \\n';
$strLines = 'Рядки';
$strLinesTerminatedBy = 'Рядки розділено';
$strLinkNotFound = 'Лінк не знайдено';
$strLinksTo = 'Лінки до';
$strLocationTextfile = 'вкажіть розташування текстового файлу';
$strLogPassword = 'Пароль:';
$strLogUsername = 'Ім\'я користувача:';
$strLogin = 'Вхід в систему';
$strLogout = 'Вийти з системи';

$strMissingBracket = 'бракує дужки';
$strModifications = 'Модифікації було збережено';
$strModify = 'Змінити';
$strModifyIndexTopic = 'Змінити індекс';
$strMoveTable = 'Перенести таблицю в (база даних<b>.</b>таблиця):';
$strMoveTableOK = 'Таблицю %s було перенесено в %s.';
$strMySQLCharset = 'MySQL Charset';
$strMySQLReloaded = 'MySQL перезавантажено.';
$strMySQLSaid = 'Відповідь MySQL: ';
$strMySQLServerProcess = 'MySQL %pma_s1% на %pma_s2% як %pma_s3%';
$strMySQLShowProcess = 'Показати процеси';
$strMySQLShowStatus = 'Показати стан MySQL';
$strMySQLShowVars = 'Показати системні змінні MySQL';

$strName = 'Назва';
$strNext = 'Дальше';
$strNo = 'Ні';
$strNoDatabases = 'БД відсутні';
$strNoDescription = 'без опису';
$strNoDropDatabases = 'Оператори "DROP DATABASE" заборонені.';
$strNoExplain = 'Не тлумачити SQL';
$strNoFrames = 'Для роботи phpMyAdmin потрібно браузер з підтримкою <b>фреймів</b>.';
$strNoIndex = 'Індекс не визначено!';
$strNoIndexPartsDefined = 'Не визначено частини індекса!';
$strNoModification = 'Змін немає';
$strNoPassword = 'Без паролю';
$strNoPhp = 'без PHP коду';
$strNoPrivileges = 'Без привілеїв';
$strNoQuery = 'Не задано SQL-запит!';
$strNoRights = 'Ви для цього маєте недостатньо прав!';
$strNoTablesFound = 'В БД не виявлено таблиць.';
$strNoUsersFound = 'Не знайдено користувача.';
$strNoValidateSQL = 'Не перевіряти SQL';
$strNone = 'Немає';
$strNotNumber = 'Це не число!';
$strNotOK = 'не OK';
$strNotSet = 'Таблицю <b>%s</b> не знайдено або не визначено у %s';
$strNotValidNumber = ' недопустима кількість рядків!';
$strNull = 'Нуль';
$strNumSearchResultsInTable = '%s співпадіння у таблиці <i>%s</i>';
$strNumSearchResultsTotal = '<b>Разом:</b> <i>%s</i> співпадіння';

$strOK = 'OK';
$strOftenQuotation = 'Звичайно лапки. ПО ВИБОРУ означає, що лише поля char і varchar беруться в лапки.';
$strOperations = 'Операцій';
$strOptimizeTable = 'Оптимізувати таблицю';
$strOptionalControls = 'По вибору. Контролює читання та написання спеціальних символів.';
$strOptionally = 'ПО ВИБОРУ';
$strOptions = 'Параметри';
$strOr = 'або';
$strOverhead = 'Надмірні видатки';

$strPHP40203 = 'Ви використовуєте версію PHP 4.2.3, яка має серйозну помилку при роботі з multi-byte strings (mbstring). Див PHP bug report 19404. Цю версію PHP не рекомендується використовувати з phpMyAdmin.';
$strPHPVersion = 'Версія PHP';
$strPageNumber = 'Номер сторінки:';
$strPartialText = 'Часткові тексти';
$strPassword = 'Пароль';
$strPasswordEmpty = 'Порожній пароль!';
$strPasswordNotSame = 'Паролі не однакові!';
$strPdfDbSchema = 'Схема бази даних "%s" - Сторінка %s';
$strPdfInvalidPageNum = 'Не встановлено номер PDF сторінки!';
$strPdfInvalidTblName = 'Таблиці "%s" не існує!';
$strPdfNoTables = 'Таблиць немає';
$strPhp = 'Створити PHP код';
$strPmaDocumentation = 'Документація по phpMyAdmin';
$strPmaUriError = 'Змінна <tt>$cfg[\'PmaAbsoluteUri\']</tt> ПОВИННА бути встановлена у Вашому конфіґураційному файлі!';
$strPos1 = 'Початок';
$strPrevious = 'Назад';
$strPrimary = 'Первинний';
$strPrimaryKey = 'Первинний ключ';
$strPrimaryKeyHasBeenDropped = 'Первинний ключ було знищено';
$strPrimaryKeyName = 'Ім\'я первинного ключа повинно бути PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>повинно</b> бути іменем <b>лише</b> первинного ключа!)';
$strPrint = 'Друк';
$strPrintView = 'Версія для друку';
$strPrivileges = 'Привілеї';
$strProperties = 'Властивості';
$strPutColNames = 'Дати назви полів у першому рядку';

$strQBE = 'Запит згідно прикладу';
$strQBEDel = 'Видалити';
$strQBEIns = 'Вставити';
$strQueryOnDb = 'SQL-запит до БД <b>%s</b>:';

$strReType = 'Підтвердження';
$strRecords = 'Записи';
$strReferentialIntegrity = 'Перевір цілісність даних на рівні посилань:';
$strRelationNotWorking = 'Додаткова можливість роботи із залінкованими таблицями деактивована. Для того, щоб довідатись чому, натисніть %sтут%s.';
$strRelationView = 'Перегляд залежностей';
$strReloadFailed = 'Не вдалось перезавантажити MySQL.';
$strReloadMySQL = 'Перезавантажити MySQL';
$strRememberReload = 'Не забудьте перезавантажити сервер.';
$strRenameTable = 'Перейменувати таблицю в';
$strRenameTableOK = 'Таблицю %s було перейменовано в %s';
$strRepairTable = 'Ремонтувати таблицю';
$strReplace = 'Замінити';
$strReplaceTable = 'Замінити дані таблиці даними з файлу';
$strReset = 'Перевстановити';
$strRevoke = 'Відмінити';
$strRevokeGrant = 'Відмінити надання прав';
$strRevokeGrantMessage = 'Було відмінено надання прав для %s';
$strRevokeMessage = 'Ви змінили привілеї для %s';
$strRevokePriv = 'Відмінити привілеї';
$strRowLength = 'Довжина рядка';
$strRowSize = ' Розмір рядка ';
$strRows = 'Рядки';
$strRowsFrom = 'рядків з';
$strRowsModeHorizontal = ' горизонтально ';
$strRowsModeOptions = '-го %s і дублювати заголовки через кожні %s рядків ';
$strRowsModeVertical = ' вертикально ';
$strRowsStatistic = 'Статистика рядка';
$strRunQuery = 'Виконати запит';
$strRunSQLQuery = 'Виконати SQL запит(и) до БД %і';
$strRunning = 'на %s';

$strSQL = 'SQL';
$strSQLParserBugMessage = 'Можливо Ви знайшли помилку в парсері SQL. Прошу детальніше перевірити чи коректно вжиті і не пропущені лапки у Вашому запиті. Іншою можливою причиною помилки може бути те що Ви завантажили файл з двійковими даними розміщеними поза взятим в лапки текстом. Спробуйте виконати Ваш запит за допомогою оболонки MySQL з командної стрічки. Повідомлення MySQL сервера про помилку подане нижче (якщо є таке) також може допомогти Вам у визначенні проблеми. Якщо у Вас все ще виникають проблеми чи парсер видає помилку, а з командної стрічки запити виконуються, прошу скоротити Ваш ввідний SQL запит до одного запиту, який власне і викликає проблеми, і відішліть повідомлення про помилку з порцією даних у розділі CUT нижче:';
$strSQLParserUserError = 'There seems to be an error in your SQL query. Повідомлення MySQL сервера про помилку подане нижче (якщо є таке) також може допомогти Вам у визначенні проблеми.';
$strSQLQuery = 'SQL-запит';
$strSQLResult = 'SQL result';
$strSQPBugInvalidIdentifer = 'Некоректний ідентифікатор';
$strSQPBugUnclosedQuote = 'Не закриті лапки';
$strSQPBugUnknownPunctuation = 'Невідомий символ пунктуації';
$strSave = 'Зберегти';
$strScaleFactorSmall = 'Занадто малий масштаб щоб схема займала цілу сторінку';
$strSearch = 'Шукати';
$strSearchFormTitle = 'Шукати в базі даних';
$strSearchInTables = 'Всередині таблиць:';
$strSearchNeedle = 'Слова чи значення, які потрібно знайти (маска: "%"):';
$strSearchOption1 = 'принаймі одне з слів';
$strSearchOption2 = 'всі слова';
$strSearchOption3 = 'точну фразу';
$strSearchOption4 = 'регулярний вираз';
$strSearchResultsFor = 'Результати пошуку "<i>%s</i>" %s:';
$strSearchType = 'Знайти:';
$strSelect = 'Вибрати';
$strSelectADb = 'Прошу вибрати БД';
$strSelectAll = 'Відмітити все';
$strSelectFields = 'Вибрати поля (щонайменше одне):';
$strSelectNumRows = 'по запиту';
$strSelectTables = 'Вибрати таблиці';
$strSend = 'Відіслати';
$strServer = 'Сервер %s';
$strServerChoice = 'Вибір сервера';
$strServerVersion = 'Версія сервера';
$strSetEnumVal = 'Для типів поля "enum" та "set", введіть значення згідно такого формату: \'a\',\'b\',\'c\'...<br />Якщо вам буде потрібно ввести зворотню косу риску ("\"") або поодинокі лапки ("\'") посеред цих значень, поставте перед ними зворотню косу риску (наприклад, \'\\\\xyz\' чи \'a\\\'b\').';
$strShow = 'Показати';
$strShowAll = 'Показати все';
$strShowColor = 'Показати колір';
$strShowCols = 'Показати колонки';
$strShowGrid = 'Показати сітку';
$strShowPHPInfo = 'Показати інформацію про PHP';
$strShowTableDimension = 'Показати розміри таблиць';
$strShowTables = 'Показати таблиці';
$strShowThisQuery = ' Показати даний запит знову ';
$strShowingRecords = 'Показано записи ';
$strSingly = '(окремо)';
$strSize = 'Розмір';
$strSort = 'Посортувати';
$strSpaceUsage = 'Простір, що використовується';
$strSplitWordsWithSpace = 'Слова розділені пробілом (" ").';
$strStatement = 'Параметр';
$strStrucCSV = 'CSV дані';
$strStrucData = 'Структуру і дані';
$strStrucDrop = 'Додати видалення таблиці';
$strStrucExcelCSV = 'CSV для даних MS Excel';
$strStrucOnly = 'Лише структуру';
$strStructPropose = 'Запропонувати структуру таблиці';
$strStructure = 'Структура';
$strSubmit = 'Виконати';
$strSuccess = 'Ваш SQL-запит було успішно виконано';
$strSum = 'Всього';

$strTable = 'таблиця ';
$strTableComments = 'Коментар до таблиці';
$strTableEmpty = 'Порожня назва таблиці!';
$strTableHasBeenDropped = 'Таблицю %s було знищено';
$strTableHasBeenEmptied = 'Таблицю %s було очищено';
$strTableHasBeenFlushed = 'Було очищено кеш таблиці %s';
$strTableMaintenance = 'Обслговування таблиці';
$strTableStructure = 'Структура таблиці';
$strTableType = 'Тип таблиці';
$strTables = '%s таблиц(і)';
$strTextAreaLength = ' Через велику довжину,<br /> це поле не може бути відредаговано ';
$strTheContent = 'Вміст файлу було імпортовано.';
$strTheContents = 'Вміст файлу заміняє вміст таблиці для рядків з ідентичними первинним або унікальними ключами.';
$strTheTerminator = 'Символ закінчення полів.';
$strTotal = 'всього';
$strType = 'Тип';

$strUncheckAll = 'Зняти усі відмітки';
$strUnique = 'Унікальне';
$strUnselectAll = 'Зняти всі відмітки';
$strUpdatePrivMessage = 'Було змінено привілеї для';
$strUpdateProfile = 'Поновити профіль:';
$strUpdateProfileMessage = 'Профіль було поновлено.';
$strUpdateQuery = 'Доповнити запит';
$strUsage = 'Використання';
$strUseBackquotes = 'Зворотні лапки в назвах таблиць і полів';
$strUseTables = 'Використовувати таблиці';
$strUser = 'Користувач';
$strUserEmpty = 'Порожнє і\'мя користувача!';
$strUserName = 'Ім\'я користувача';
$strUsers = 'Користувачі';

$strValidateSQL = 'Перевірити SQL';
$strValidatorError = 'Не можу запустити перевірку SQL. Прошу проконтролювати чи заінстальовано необхідні php extensions як описано в %sдокументації%s.';
$strValue = 'Значення';
$strViewDump = 'Переглянути дамп (схему) таблиці';
$strViewDumpDB = 'Переглянути дамп (схему) БД';

$strWebServerUploadDirectory = 'каталог веб-сервера для завантаження файлів (upload directory)';
$strWebServerUploadDirectoryError = 'Встановлений Вами каталог для завантаження файлів недоступний';
$strWelcome = 'Ласкаво просимо до %s';
$strWithChecked = 'З відміченими:';
$strWrongUser = 'Невірний логін/пароль. Доступ не дозволено.';

$strYes = 'Так';

$strZip = 'запакувати в "zip"';

// To translate
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
