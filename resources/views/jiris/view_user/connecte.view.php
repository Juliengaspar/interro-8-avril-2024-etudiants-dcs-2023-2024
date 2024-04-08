<!-- Champs de formulaire pour metres les information sur les user-->
<?php
/** @var stdClass $jiri */

?>
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
                <h1 class="font-bold text-2xl">info <?= $jiri->name ?></h1>
                <form action="/jiri"
                      method="post"
                      class="flex flex-col gap-6">
                    <div>
                        <input type="hidden"
                                name="email"
                                value="<?= $jiri->email?>"
                                placeholder="entrez votre adresse email">
                        <div class="flex flex-col gap-2">
                            <?php
                            component('forms.controls.label-and-input', [
                                'name' => 'email',
                                'label' => 'email <small>doit avoir obligatoirement un @ </small>',
                                'type' => 'text',
                                'value' => $jiri->emial,
                                'placeholder' => 'mettez votre adresse email ',
                            ]);
                            ?>
                        </div>
                    </div>
                    <div>
                        <input type="hidden"
                                name="name"
                                value="<?= $jiri->name ?>"
                                placeholder="entrez votre nom">
                        <?php
                        component('forms.controls.label-and-input', [
                            'name' => 'nom',
                            'label' => 'nom <small>doit avoir aux minimu 3 ou 255 caractere aux plus</small>',
                            'type' => 'text',
                            'value' => $jiri->name,
                            'placeholder' => 'mettez votre nom ',
                        ]);
                        ?>
                    </div>

                             <div>
                                <?php
                                component('forms.controls.button', ['text' => 'Créer ce jiri']) ?>
                            </div>
                </form>

        </div>

    </body>
</html>