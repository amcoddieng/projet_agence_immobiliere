<?php

namespace App\services;

use SendinBlue\Client\Configuration;
use SendinBlue\Client\Api\TransactionalEmailsApi;
use GuzzleHttp\Client;

class BrevoService
{
    protected $apiInstance;

    public function __construct()
    {
        // Récupération de la clé API depuis .env
        $apiKey = env('SENDINBLUE_API_KEY');

        if (!$apiKey) {
            throw new \Exception('Clé API Sendinblue non configurée.');
        }

        // Configuration de l'API avec la clé
        $config = Configuration::getDefaultConfiguration()->setApiKey('api-key', $apiKey);
        $this->apiInstance = new TransactionalEmailsApi(new Client(), $config);
    }

    public function sendEmail($to, $subject, $htmlContent)
    {
        $email = [
            'sender' => ['name' => 'SEN_IMMO', 'email' => 'dieng0097@gmail.com'],
            'to' => [['email' => $to]],
            'subject' => $subject,
            'htmlContent' => $htmlContent,
        ];

        try {
            // Envoi de l'email via l'API Brevo
            $this->apiInstance->sendTransacEmail($email);
            return "Email envoyé avec succès à {$to} !";
        } catch (\Exception $e) {
            return 'Erreur lors de l\'envoi de l\'email : ' . $e->getMessage();
        }
    }
}
