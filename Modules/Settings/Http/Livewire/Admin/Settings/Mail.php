<?php

namespace Modules\Settings\Http\Livewire\Admin\Settings;

use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Modules\Settings\Entities\Setting;
use Modules\Settings\Http\Livewire\Admin\Settings;

class Mail extends Settings
{
    public $mail_driver;

    public $mail_host;

    public $mail_port;

    public $mail_username;

    public $mail_password;

    public $mail_from;

    public $mail_name;

    public $mailgun_domain;

    public $mailgun_secret;

    public $mailgun_endpoint;

    public $ses_key;

    public $ses_secret;

    public $ses_region;

    public $postmark_token;



    protected $listeners = ['changeMailDriver'];

    public function changeMailDriver($value)
    {
        $this->mail_driver = $value;
    }

    public function mount()
    {
        $this->mail_driver = config('setting.mail_driver');
        $this->mail_host = config('setting.mail_host');
        $this->mail_port = config('setting.mail_port');
        $this->mail_encryption = config('setting.mail_encryption');
        $this->mail_username = config('setting.mail_username');
        $this->mail_password = config('setting.mail_password');
        $this->mail_from = config('setting.mail_from');
        $this->mail_name = config('setting.mail_name');


        $this->mailgun_domain = config('setting.mailgun_domain');
        $this->mailgun_secret = config('setting.mailgun_secret');
        $this->mailgun_endpoint = config('setting.mailgun_endpoint');

        $this->ses_key = config('setting.ses_key');
        $this->ses_secret = config('setting.ses_secret');
        $this->ses_region = config('setting.ses_region');

        $this->postmark_token = config('setting.postmark_token');

        $this->sendmail_path = config('setting.sendmail_path');
    }

    public function updated($proprety, $value)
    {
        $this->{$proprety} = is_string($value) && ($value === '' || $value === 'null') ? null : $value;
    }

    public function saveMailgun()
    {
        $data = $this->validate([
            'mail_driver' => ['required', 'min:4', Rule::in(['mailgun'])],
            'mailgun_domain' => 'required|min:3',
            'mailgun_secret' => 'required|min:3',
            'mailgun_endpoint' => 'required|min:3',
        ]);

        $this->updateField('mail_driver', $this->mail_driver);
        $this->updateField('mailgun_domain', $this->mailgun_domain);
        $this->updateField('mailgun_secret', $this->mailgun_secret);
        $this->updateField('mailgun_endpoint', $this->mailgun_endpoint);

        cache()->forget('settings');

        $this->notify('The MAILGUN configuration has been successfully saved');
    }

    public function saveSendmail()
    {
        $this->validate([
            'mail_driver' => ['required', 'min:4', Rule::in(['sendmail'])],
            'sendmail_path' => 'required|min:3',
        ]);

        $this->updateField('mail_driver', $this->mail_driver);
        $this->updateField('sendmail_path', $this->sendmail_path);

        cache()->forget('settings');

        $this->notify('The SENDMAIL configuration has been successfully saved');
    }

    public function saveLog()
    {
        $this->validate([
            'mail_driver' => ['required', 'min:3', Rule::in(['log'])],
        ]);

        $this->updateField('mail_driver', $this->mail_driver);

        cache()->forget('settings');

        $this->notify('The LOG configuration has been successfully saved');
    }

    public function saveSes()
    {
        $data = $this->validate([
            'mail_driver' => ['required', 'min:3', Rule::in(['ses'])],
            'ses_key' => 'required|min:3',
            'ses_secret' => 'required|min:3',
            'ses_region' => 'required|min:3',
        ]);

        $this->updateField('mail_driver', $this->mail_driver);
        $this->updateField('ses_key', $this->ses_key);
        $this->updateField('ses_secret', $this->ses_secret);
        $this->updateField('ses_region', $this->ses_region);

        cache()->forget('settings');

        $this->notify('The SES configuration has been successfully saved');
    }

    public function savePostmark()
    {
        $this->validate([
            'mail_driver' => ['required', 'min:8', Rule::in(['postmark'])],
            'postmark_token' => 'required|min:3',
        ]);

        $this->updateField('mail_driver', $this->mail_driver);
        $this->updateField('postmark_token', $this->postmark_token);

        cache()->forget('settings');

        $this->notify('The POSTMARK configuration has been successfully saved');
    }

    public function saveSmtp()
    {
        $this->validate([
            'mail_driver' => ['required', 'min:4', Rule::in(['smtp'])],
            'mail_host' => 'string|min:3|required',
            'mail_port' => 'required|int|min:1',
            'mail_encryption' => ['string', 'min:3', 'nullable', Rule::in(['tls', 'ssl'])],
            'mail_username' => 'required|min:2',
            'mail_password' => 'required|min:2',
        ]);

        $this->updateField('mail_driver', $this->mail_driver);
        $this->updateField('mail_host', $this->mail_host);
        $this->updateField('mail_port', $this->mail_port);
        $this->updateField('mail_encryption', $this->mail_encryption);
        $this->updateField('mail_username', $this->mail_username);
        $this->updateField('mail_password', $this->mail_password);

        cache()->forget('settings');

        $this->notify('The SMTP configuration has been successfully saved');
    }

    public function render()
    {
        return view('settings::livewire.admin.settings.mail')
            ->layout('layouts.admin.app', ['title' => 'Mail Setting']);
    }
}
