ini_set('display_errors', '1');
error_reporting(E_ALL);
<?php


require_once __DIR__ . '/vendor/autoload.php';

use App\Core\EntityFactory;
use App\Services\EntityService;
use App\Services\ConsoleLogger;
use App\Services\FileLogger;
use App\Tasks\Artist;
use App\Tasks\Genre;
use App\Tasks\Student;
use App\Tasks\Teacher;
use App\Tasks\HeadOfDepartment;
use App\Tasks\Triangle;
use App\Core\Database;

echo '<h1>Лабораторна робота №4</h1>';

echo '<h2>1. Система товарів і користувачів</h2>';

$service = new EntityService(
    new ConsoleLogger(),
    new EntityFactory()
);

$service->run();

echo '<h2>2. Запис у файл</h2>';

$fileLogger = new FileLogger();
$fileLogger->log('Лабораторна робота №4 виконана');

echo 'Повідомлення записано у файл logs.txt';

echo '<h2>3. Композиція: Artist і Genre</h2>';

$genre = new Genre('Rock');
$artist = new Artist('Queen', $genre);

echo $artist->getDetails();

echo '<h2>4. Наслідування</h2>';

$student = new Student('Олег', 20, 'Комп’ютерні науки');
$teacher = new Teacher('Андрій', 45, 'Програмування');

$head = new HeadOfDepartment(
    'Іван',
    50,
    'Інформатика',
    'Комп’ютерних наук'
);

echo '<p>' . $student->getInfo() . '</p>';
echo '<p>' . $teacher->getInfo() . '</p>';
echo '<p>' . $head->getInfo() . '</p>';

echo '<h2>5. Площа трикутника</h2>';

$triangle = new Triangle(3, 4, 5);

echo 'Площа трикутника: ' . $triangle->getArea();

echo '<h2>6. Singleton</h2>';

$db1 = Database::getInstance();
$db2 = Database::getInstance();

echo '<p>Один екземпляр Database: ';
echo $db1 === $db2 ? 'Так' : 'Ні';
echo '</p>';