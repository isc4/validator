<?php
//Validator - валидация входящих данных
/*
1. Проверка на пустоту
2. Исключение пустоты(пробелов) и спец. символов
3. Проверка длинны пароля на соответствие
4. Шифрование пароля
5. Проверка email на соответствие
6. Проверка пароля на соответствие
*/


/*
* Class Valodation
*
* @method ischeckForEmpty()
* @method trimSpaceAdnSpchar()
* @method ispasswordLong()
* @method hashPassword()
* @method isemailValid()
* @method ispasswordValid()
*/
class Validation {

// 1. Проверка на пустоту
/*
* ischeckForEmpty( string $data ) : bool
*/
public function ischeckForEmpty($data)
{
    if (!empty($data)) {
        return true;  
    } else {
        return false;
    }
}

//2. Исключение пустоты(пробелов) и спец. символов
/*
* trimSpaceAdnSpchar( string $data ) : string
*/
public function trimSpaceAdnSpchar($data)
{
    return trim(htmlspecialchars($data));
}

// 3. Проверка длинны пароля на соответствие
/*
* trimSpaceAdnSpchar( string $password, integer $longPass ) : bool
*/
public function ispasswordLong($password, int $longPass)
{
   if (strlen($password) !== $longPass) {
    return false;
   } else {
    return true;
   }
}

//4. Шифрование пароля
/*
* hashPassword( string $password ) : string
*/
public function hashPassword($password)
{
    return password_hash($password, PASSWORD_DEFAULT);
}

//5. Проверка email на соответствие
/*
* isemailValid( string $email ) : bool
*/
public function isemailValid($email)
{
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}

//6. Проверка пароля на соответствие
/*
* ispasswordValid( string $password1, string $password2 ) : bool
*/
public function ispasswordValid($password1, $password2)
{
    if (password_verify($password1, $password2)) {
        return true;
    } else {
        return false;
    }
}
 
}