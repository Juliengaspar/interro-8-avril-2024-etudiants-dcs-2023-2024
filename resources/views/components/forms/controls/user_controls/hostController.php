<?php


namespace App\Http\Controllers;

use App\Models\Jiri;
use Core\Exceptions\FileNotFoundException;
use Core\Response;
use Core\Validator;
use JetBrains\PhpStorm\NoReturn;

class JiriController
{
    private Jiri $jiri;


    public function edit(): void{
        view('jiris.edit', compact('jiri'));

        //resupere les infos du users
        if (!isset($_POST['email']) || !ctype_digit($_POST['email']) ){
            Response::abort(Response::BAD_REQUEST);

        }
        $email_user =$_POST['email'];
        $jiri = $this->jiri->findOrFail($email_user);
        view('jiri.edit', compact('jiri'));
    }

}