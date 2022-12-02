<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Pagination;
use application\models\Admin;

class MainController extends Controller
{

    public function indexAction()
    {
        $pagination = new Pagination($this->route, $this->model->postsCount());
        $vars = [
            'pagination' => $pagination->get(),
            'list' => $this->model->postsList($this->route),
        ];
        $this->view->render('Главная страница', $vars);
    }

    public function aboutAction()
    {
        $this->view->render('О компании');
    }

    public function manufacturingAction()
    {
        if (!empty($_POST)) {
            if (!$this->model->contactValidate($_POST)) {
                $this->view->message('error', $this->model->error);
            }
            mail('titef@p33.org', 'Сообщение из блога', $_POST['name'] . '|' . $_POST['email'] . '|' . $_POST['text']);
            $this->view->message('success', 'Сообщение отправлено Администратору');
        }
        $this->view->render('Контрактное производство');
    }

    public function postAction()
    {
        $adminModel = new Admin;
        if (!$adminModel->isPostExists($this->route['id'])) {
            $this->view->errorCode(404);
        }
        $vars = [
            'data' => $adminModel->postData($this->route['id'])[0],
        ];
        $this->view->render('Пост', $vars);
    }

    public function contactsAction()
    {
        $this->view->render('Контакты');
    }

    public function dealersAction()
    {
        $this->view->render('Дилеры');
    }
    public function partnersAction()
    {
        $this->view->render('Партнерам');
    }
    public function polosk_dealersAction()
    {
        $this->view->render('Дилеры');
    }
    public function poloskunAction()
    {
        $this->view->render('Полоскун');
    }
}
