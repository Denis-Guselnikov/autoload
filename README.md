# autoload example

test1
```
Создать файл index.php и дерикторию classes в которой создать файлы Test1.php и Test2.php.
В каждом файле разместить одноимённый класс с методом do(). В файле index.php написать функцию
автолоадер и не используя require и include создать эксземпляры каждого из классов и запустить
метод do().
```
Ответ:
```
C:\php\php.exe D:\Server543\OSPanel\domains\autoload\autoload\test\index.php
Загрузка:Test1
its works!
Doing Test1!
Загрузка:Test2
Doing Test2!
Process finished with exit code 0
```
test3  
```
Создать файл index.php и дерикторию src в которой размещать классы соответственно стандарту 
автозагрузки PSR-4, в каждом классе должен быть метод do().  Автозагрузчик сгенерировать при
помощи composer. В файле index.php добавить use для таких классов One\Test, Two\Test,
Three\Four\Test создать экземпляры всех классов и вызвать для них метод do(), чтобы не
 было конфликта имён использовать псевдонимы Test1, Test2, Test3 соответственно.
```
Ответ:
```
C:\php\php.exe D:\Server543\OSPanel\domains\autoload\autoload\test3\index.php
its works!
Doing Test1
Doing Test2
Doing Test3
Process finished with exit code 0
```