<meta charset="UTF-8" />
<?php

// Открыть файл "spices.txt" для записи
$fh = fopen("spices.txt","w");
// Добавить несколько строк текста
fputs($fh, "Parsley, sage, rosemary\n");
fputs($fh, "Paprika, salt, pepper\n");
fputs($fh, "Basil, sage, ginger\n");
// Закрыть манипулятор
fclose($fh);
// Открыть процесс UNIX grep для поиска слова Basil в файле spices.txt
$fh = popen("grep Basil < spices.txt", "r");
// Вывести результат работы grep
fpassthru($fh);
pclose($fh);