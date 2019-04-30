<?php

return [
    'words' => [
        'cancel'  => 'Annuler',
        'delete'  => 'Supprimer',
        'edit'    => 'Editer',
        'yes'     => 'Oui',
        'no'      => 'Non',
        'minutes' => '1 minute| :count minutes',
    ],

    'discussion' => [
        'new'          => 'Nouvelle '.trans('chatter::intro.titles.discussion'),
        'all'          => 'Toutes les '.trans('chatter::intro.titles.discussion'),
        'create'       => 'Créer '.trans('chatter::intro.titles.discussion'),
        'posted_by'    => 'Poster par ',
        'head_details' => 'Poster dans la catégorie',

    ],
    'response' => [
        'confirm'     => 'Etes-vous sûr de vouloir supprimer ce message?',
        'yes_confirm' => 'Oui',
        'no_confirm'  => 'Non',
        'submit'      => 'Envoyer la réponse',
        'update'      => 'Changer la réponse',
    ],

    'editor' => [
        'title'               => 'Titre de '.trans('chatter::intro.titles.discussion'),
        'select'              => 'Sélectionner une catégorie',
        'tinymce_placeholder' => 'Taper votre texte '.trans('chatter::intro.titles.discussion').' Ici...',
        'select_color_text'   => 'Sélectionner une coleur '.trans('chatter::intro.titles.discussion').' (optional)',
    ],

    'email' => [
        'notify' => 'Notifier moi quand il y a une réponse',
    ],

    'auth' => '<a href="/:home/login">Connectez-vous</a>
                ou <a href="/:home/register">inscrivez-vous</a>
                pour poster une réponse',

];
