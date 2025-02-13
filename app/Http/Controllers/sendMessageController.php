<?php

namespace App\Http\Controllers;

use App\Services\BrevoService;

class sendMessageController extends Controller
{
    public function sendTestEmail(BrevoService $brevoService)
    {
        $to = 'ousmanebalnde1305@gmail.com';
        $subject = 'Test Email Laravel et Brevo';

        // Contenu HTML de l'email avec mise en forme
        $htmlContent = '
        <div style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">
            <div style="text-align: center; padding: 20px; background-color: #f4f4f4; border-bottom: 3px solid #6b9bd1;">
                <h1 style="color: #6b9bd1;">Bienvenue sur Laravel avec Brevo !</h1>
                <p style="font-size: 16px;">Merci de tester notre service d\'envoi d\'emails avec Laravel et Brevo.</p>
            </div>
            <div style="padding: 20px;">
                <p>Bonjour,</p>
                <p>
                    Nous sommes ravis de vous informer que votre test d\'envoi d\'email via Brevo et Laravel a été un succès !
                    Voici un aperçu de ce que vous pouvez accomplir avec cette intégration :
                </p>
                <ul style="list-style-type: disc; padding-left: 20px;">
                    <li>Envoi d\'emails transactionnels</li>
                    <li>Gestion des abonnés à des newsletters</li>
                    <li>Suivi des performances de vos campagnes</li>
                </ul>
                <p>
                    Si vous avez des questions ou besoin d\'aide, n\'hésitez pas à nous contacter.
                </p>
                <p>
                    Cordialement, <br>
                    <strong>L\'équipe Laravel & Brevo</strong>
                </p>
            </div>
            <div style="text-align: center; padding: 10px; background-color: #f4f4f4; border-top: 1px solid #ccc;">
                <p style="font-size: 12px; color: #777;">
                    Cet email a été généré automatiquement. Veuillez ne pas répondre à ce message.
                </p>
            </div>
        </div>
        ';

        // Envoi de l'email
        $result = $brevoService->sendEmail($to, $subject, $htmlContent);

        return response()->json(['message' => $result]);
    }
}
