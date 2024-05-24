<?php

namespace Iplague\Project\Controllers;

use Iplague\Project\Viewer;

class ContactsController
{
    public function index(): void
    {
        $page = 'contacts';
        $title = 'Contacts Page';
        $content = 'Hello! Its Contacts page';
        $info = 'Raiden the best mommy in the world!';

        $view = new Viewer(
            [
                'page' => $page,
                'title' => $title,
                'content' => $content,
                'info' => $info
            ]
        );

        $view->render();
    }
}
