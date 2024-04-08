<?php
/** @var stdClass $jiri */
?>

<!-- champs formulaire pour crée un host -->
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible"
          content="ie=edge">
    <title>Jiris</title>
    <link rel="stylesheet"
          href="<?= public_path('css/app.css') ?>">
</head>
<body>
<a class="sr-only"
   href="#main-menu">Aller au menu principal</a>
<div class="container mx-auto flex flex-col-reverse gap-6">
    <main class="flex flex-col gap-4">
        <h1 class="font-bold text-2xl">Crée votre compte</h1>
        <form action="/jiri"
              method="post"
              class="flex flex-col gap-6">
            <div>
                <?php
                method('patch') ?>
                <?php
                csrf_token() ?>
                <input type="hidden"
                       name="email"
                       value="<?= $jiri->id ?>">
                <div class="flex flex-col gap-2">
                    <?php
                    component('forms.controls.label-and-input', [
                        'email' => 'email',
                        'label' => 'email<small>doit contenir obligatoirement le @</small>',
                        'type' => 'text',
                        'value' => $jiri->email,
                        'placeholder' => 'inscriver votre email',
                    ]);
                    ?>
            </div>
            <div>
                <input type="hidden"
                       name="name"
                       value=""
                       placeholder="entrez votre nom">
                <?php
                component('forms.controls.label-and-input', [
                    'name' => 'name',
                    'label' => 'le nom<small>doit avoir aux 3 et aux plus 255 caracteres</small>',
                    'type' => 'text',
                    'value' => $jiri->email,
                    'placeholder' => 'inscriver votre email',
                ]);
                ?>

            </div>

                <div>
                    <input type="hidden"
                           name="mdp"
                           value=""
                           placeholder="entrez votre mode de passe">
                    <?php
                    component('forms.controls.label-and-input', [
                        'mdp' => 'mdp',
                        'label' => 'le mdp <small>doit avoir aux minimum 8 caractere differents</small>',
                        'type' => 'text',
                        'value' => $jiri->email,
                        'placeholder' => 'nottez votre mdp',
                    ]);
                    ?>

                </div>
                        <div>
                            <?php
                            component('forms.controls.button', ['text' => 'Créer ce jiri']) ?>
                        </div>
                </form>
        </main>
    </div>

    </body>
</html>
