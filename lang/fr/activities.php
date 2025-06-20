<?php
/**
 * Activity text strings.
 * Is used for all the text within activity logs & notifications.
 */
return [

    // Pages
    'page_create'                 => 'a créé la page',
    'page_create_notification'    => 'Page créée avec succès',
    'page_update'                 => 'a modifié la page',
    'page_update_notification'    => 'Page modifiée avec succès',
    'page_delete'                 => 'a supprimé la page',
    'page_delete_notification'    => 'Page supprimée avec succès',
    'page_restore'                => 'a restauré la page',
    'page_restore_notification'   => 'Page restaurée avec succès',
    'page_move'                   => 'a déplacé la page',
    'page_move_notification'      => 'Page déplacée avec succès',

    // Chapters
    'chapter_create'              => 'a créé le chapitre',
    'chapter_create_notification' => 'Chapitre créé avec succès',
    'chapter_update'              => 'a modifié le chapitre',
    'chapter_update_notification' => 'Chapitre modifié avec succès',
    'chapter_delete'              => 'a supprimé le chapitre',
    'chapter_delete_notification' => 'Chapitre supprimé avec succès',
    'chapter_move'                => 'a déplacé le chapitre',
    'chapter_move_notification' => 'Chapitre déplacé avec succès',

    // Books
    'book_create'                 => 'a créé un module',
    'book_create_notification'    => 'module créé avec succès',
    'book_create_from_chapter'              => 'chapitre converti en module',
    'book_create_from_chapter_notification' => 'Chapitre converti en module avec succès',
    'book_update'                 => 'a modifié le module',
    'book_update_notification'    => 'module modifié avec succès',
    'book_delete'                 => 'a supprimé un module',
    'book_delete_notification'    => 'module supprimé avec succès',
    'book_sort'                   => 'a réordonné le module',
    'book_sort_notification'      => 'module restauré avec succès',

    // Bookshelves
    'bookshelf_create'            => 'a créé l\'thématique',
    'bookshelf_create_notification'    => 'thématique créée avec succès',
    'bookshelf_create_from_book'    => 'module converti en thématique',
    'bookshelf_create_from_book_notification'    => 'module converti en thématique avec succès',
    'bookshelf_update'                 => 'thématique mise à jour',
    'bookshelf_update_notification'    => 'thématique mise à jour avec succès',
    'bookshelf_delete'                 => 'thématique supprimée',
    'bookshelf_delete_notification'    => 'thématique supprimée avec succès',

    // Revisions
    'revision_restore' => 'a restauré la révision',
    'revision_delete' => 'révision supprimée',
    'revision_delete_notification' => 'Révision supprimée avec succès',

    // Favourites
    'favourite_add_notification' => '":name" a été ajouté dans vos favoris',
    'favourite_remove_notification' => '":name" a été supprimé de vos favoris',

    // Watching
    'watch_update_level_notification' => 'Suivre les préférences mises à jour avec succès',

    // Auth
    'auth_login' => 'connecté',
    'auth_register' => 'enregistré en tant que nouvel utilisateur',
    'auth_password_reset_request' => 'demande de réinitialisation du mot de passe',
    'auth_password_reset_update' => 'réinitialisation du mot de passe',
    'mfa_setup_method' => 'méthode MFA configurée',
    'mfa_setup_method_notification' => 'Méthode multi-facteurs configurée avec succès',
    'mfa_remove_method' => 'méthode MFA supprimée',
    'mfa_remove_method_notification' => 'Méthode multi-facteurs supprimée avec succès',

    // Settings
    'settings_update' => 'paramètres mis à jour',
    'settings_update_notification' => 'Paramètres mis à jour avec succès',
    'maintenance_action_run' => 'exécuter l\'action de maintenance',

    // Webhooks
    'webhook_create' => 'Créer un Webhook',
    'webhook_create_notification' => 'Webhook créé avec succès',
    'webhook_update' => 'éditer un Webhook',
    'webhook_update_notification' => 'Webhook modifié avec succès',
    'webhook_delete' => 'supprimer un Webhook',
    'webhook_delete_notification' => 'Webhook supprimé avec succès',

    // Imports
    'import_create' => 'import créé',
    'import_create_notification' => 'Importation envoyée avec succès',
    'import_run' => 'importation mise à jour',
    'import_run_notification' => 'Contenu importé avec succès',
    'import_delete' => 'import supprimé',
    'import_delete_notification' => 'Importation supprimée avec succès',

    // Users
    'user_create' => 'utilisateur créé',
    'user_create_notification' => 'Utilisateur créé avec succès',
    'user_update' => 'utilisateur mis à jour',
    'user_update_notification' => 'Utilisateur mis à jour avec succès',
    'user_delete' => 'utilisateur supprimé',
    'user_delete_notification' => 'Utilisateur supprimé avec succès',

    // API Tokens
    'api_token_create' => 'a créé un jeton API',
    'api_token_create_notification' => 'Jeton d\'API créé avec succès',
    'api_token_update' => 'a mis à jour un jeton API',
    'api_token_update_notification' => 'Jeton d\'API mis à jour avec succès',
    'api_token_delete' => 'a supprimé un jeton API',
    'api_token_delete_notification' => 'Jeton d\'API supprimé avec succès',

    // Roles
    'role_create' => 'rôle créé',
    'role_create_notification' => 'Rôle créé avec succès',
    'role_update' => 'rôle mis à jour',
    'role_update_notification' => 'Rôle mis à jour avec succès',
    'role_delete' => 'rôle supprimé',
    'role_delete_notification' => 'Rôle supprimé avec succès',

    // Recycle Bin
    'recycle_bin_empty' => 'corbeille vidée',
    'recycle_bin_restore' => 'restauré à partir de la corbeille',
    'recycle_bin_destroy' => 'supprimé de la corbeille',

    // Comments
    'commented_on'                => 'a commenté',
    'comment_create'              => 'Commentaire ajouté',
    'comment_update'              => 'Commentaire mis à jour',
    'comment_delete'              => 'Commentaire supprimé',

    // Sort Rules
    'sort_rule_create' => 'règle de tri crée',
    'sort_rule_create_notification' => 'Règle de tri crée avec succès',
    'sort_rule_update' => 'règle de tri mise à jour',
    'sort_rule_update_notification' => 'Règle de tri mise à jour avec succès',
    'sort_rule_delete' => 'règle de tri supprimée',
    'sort_rule_delete_notification' => 'La règle de tri a été supprimée avec succès',

    // Other
    'permissions_update'          => 'a mis à jour les autorisations sur',
];
