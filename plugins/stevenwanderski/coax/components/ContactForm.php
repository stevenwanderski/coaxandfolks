<?php namespace StevenWanderski\Coax\Components;

use Validator;
use Mail;
use \GuzzleHttp\Client;

class ContactForm extends \Cms\Classes\ComponentBase
{
    public $showMessage;

    public function componentDetails()
    {
        return [
            'name' => 'Contact Form',
            'description' => 'Add a contact form to the page'
        ];
    }

    public function onRun()
    {
        $this->addJs('/plugins/stevenwanderski/coax/assets/js/contactform.js');
        $this->showMessage = get('success');
    }

    public function onSend()
    {
      $name = post('name');
      $email = post('email');
      $message = post('message');
      $captcha = post('g-recaptcha-response');

      $validator = Validator::make(
          [
            'name' => $name,
            'email' => $email,
            'message' => $message,
            'captcha' => $captcha
          ],
          [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            'captcha' => 'required'
          ]
      );

      if($validator->fails()) {
        return array('success' => false, 'errors' => $validator->messages());
      }

      $client = new Client();
      $response = $client->request('POST', 'https://www.google.com/recaptcha/api/siteverify', [
          'form_params' => [
            'secret' => env('GOOGLE_RECAPTCHA_KEY'),
            'response' => $captcha,
            'remoteip' => $_SERVER["REMOTE_ADDR"]
          ]
      ]);
      $response_json = json_decode($response->getBody());

      if($response_json->success != TRUE) {
        return array('success' => false, 'errors' => 'Failed CAPTCHA');
      }

      $mailVars = [
        'name' => $name,
        'email' => $email,
        'contactMessage' => $message
      ];
      Mail::send('contactform', $mailVars, function($message) {
          $message->to('steven@bxcreative.com', 'Steven Wanderski');
          $message->bcc('steven.wanderski@gmail.com', 'Steven Wanderski');
      });

      return array('success' => true);
    }
}