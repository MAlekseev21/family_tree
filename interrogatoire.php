

<?php

// Класс отвечающий за маршрутизацию
class Route{
    // Отвечает за те запросы которые были посланы методом POST
    // Метод post() принимает на вход два аргумента,
    // $path - URI для сопоставления
    // $callback - функция, которую нужно вызвать, если $path совпадёт
    /* Первый случай
        $path = '/article/{id}'
        $requestURI = '/article/3'
        $paths = ['', 'article', '3'];
        $uriChunks = ['', 'article', '{id}']
       Второй случай
        $path = '/reg' - URI для сопоставления (с которым сравниваем)
        $requestURI = '/reg' - URI который запросил пользователь
        $paths = ['', 'reg'];
    */
        public static function post($path, $callback){
        $requestURI = $_SERVER['REQUEST_URI']; // Получаем URI по которому запрошена страница

        public static function post($path, $callback){
            if($uriChunks[1] == $paths[1]){
                exit($callback($paths[2]));
            }
        }else if($path == $_SERVER['REQUEST_URI'] and $_SERVER['REQUEST_METHOD'] == "POST"){
        }else if($path == $requestURI and $_SERVER['REQUEST_METHOD'] == "POST"){
            $callback();
            exit;
        }
    }

    // Отвечает за те запросы которые были посланы методом GET
    /* Первый случай
        $path = '/article/{id}'
        $requestURI = '/article/3'
        $paths = ['', 'article', '3']
        $uriChunks = ['', 'article', '3']
    /* Второй случай
        $path = '/login'
        $requestURI = '/login'
        $paths = ['', 'login']
    */
    public static function get($path, $callback, $title=""){ // /article/{id}
        $requestURI = $_SERVER['REQUEST_URI']; // Получаем URI по которому запрошена страница
        $paths = explode('/', $requestURI); // URI по которому проверяем (по нему и был запрос)
        $content = "";
        if(strpos($path, "{") and $_SERVER['REQUEST_METHOD']== "GET"){
            $uriChunks = explode('/',$path);
            if($uriChunks[1] == $paths[1]){
                $content = $callback();
                $content = $callback($paths[2]);
                require_once('template.php');  }
                exit;

             public static function get($path, $callback, $title=""){ // /article/{id}
                require_once('template.php');
                exit;
            }

    }
    }
     public static function reg($name, $lastname, $email, $pass){
}

    public static function getUserData(){
        // Array
        $userData = [
            'id'=>$_SESSION['id'],
            'name'=>$_SESSION['name'],
            'lastname'=>$_SESSION['lastname'],
            'email'=>$_SESSION['email']
        ];
        // если существует ключ "id" в массиве $_SESSION, тогда формируем массив
        if(array_key_exists("id", $_SESSION)){
            // Array
            $userData = [
                'id'=>$_SESSION['id'],
                'name'=>$_SESSION['name'],
                'lastname'=>$_SESSION['lastname'],
                'email'=>$_SESSION['email']
            ];
        }else{ // иначе отправляем ошибку в формате JSON
            // Показываем на экране данные в формате JSON
            exit(json_encode(['result'=>'error']));
        }
        // Преобразуем Array в JSON
        $jsonUserData = json_encode($userData);
        // Показываем на экране данные в формате JSON
