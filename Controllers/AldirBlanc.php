<?php

namespace AldirBlanc\Controllers;

use MapasCulturais\App;

class AldirBlanc extends \MapasCulturais\Controller
{
    function __construct()
    {
        $this->layout = 'aldirblanc';
    }

    /**
     * Encaminha o usuário para a rota correta, de acordo com o tipo do usuário
     *
     * @return void
     */
    function GET_index()
    {
        // $this->requireAuthentication();

        $app = App::i();
        $config = $app->config['auth.config'];

        

        $app->view->enqueueScript('app', 'multipleLocal', 'js/multipleLocal.js');
        $app->view->enqueueStyle('app', 'multipleLocal', 'css/multipleLocal.css');

        $app->render('auth/multiple-local', [
            'redirectUrl' => '/aldirblanc/cadastro',
            'config' => $config,
            'register_form_action' => $app->auth->register_form_action,
            'register_form_method' => $app->auth->register_form_method,
            'login_form_action' => $app->createUrl('auth', 'login'),
            'recover_form_action' => $app->createUrl('auth', 'recover'),
            'feedback_success'        => $app->auth->feedback_success,
            'feedback_msg'    => $app->auth->feedback_msg,   
            'triedEmail' => $app->auth->triedEmail,
            'triedName' => $app->auth->triedName,
        ]);

        // if($app->user->aldirblanc_tipo_usuario == 'assistente-social'){
        //     $app->redirect($this->createUrl('assistenteSocial'));

        // } else if($app->user->aldirblanc_tipo_usuario == 'solicitante') {
        //     $app->redirect($this->createUrl('cadastro'));

        // } else {
        //     $app->user->aldirblanc_tipo_usuario = 'solicitante';
        //     $app->disableAccessControl();
        //     $app->user->save(true);
        //     $app->enableAccessControl();
        //     $app->redirect($this->createUrl('cadastro'));
        // }
    }

    /**
     * Tela onde o usuário escolhe o inciso I ou II
     *
     * @return void
     */
    function GET_cadastro()
    {
        // $this->requireAuthentication();

        $this->render('cadastro');
    }

    /**
     * Painel de controle do assistente social, onde o usuário pode gerenciar as inscições realizadas:
     * - adicionar/editar/exluir inscrição 
     * - ver status da inscrição
     *  
     * @return void
     */
    function GET_assistenteSocial()
    {
        $this->checkUserType('assistente-social');

        $this->render('assistente-social');
    }

    /**
     * Formulário do inciso I
     *
     * @return void
     */
    function GET_individual()
    {
        $this->checkUserType('solicitante');
        $app = App::i();
        // @todo definir registration
        $registration = $app->repo('Registration')->find($app->user->profile->aldirblanc_inciso1_registration);

        $app->redirect($registration->singleUrl);
        
        $this->render('individual', ['registration' => $registration]);
    }

    /**
     * Formulário do inciso II
     *
     * @return void
     */
    function GET_coletivo()
    {
        $this->checkUserType('solicitante');


        // @todo definir registration
        $registration = null;
        
        $this->render('coletivo', ['registration' => $registration]);
    }

    /**
     * Verifica se o usuário é do tipo informado
     *
     * @param string $expected "individual|coletivo"
     * @return bool
     */
    function checkUserType(string $expected)
    {
        $this->requireAuthentication();

        $app = App::i();

        return $app->user->aldirblanc_tipo_usuario === $expected;
    }
}
